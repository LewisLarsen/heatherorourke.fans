<?php

namespace App\Controller;

use App\Entity\Gallery;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ZipArchive;

class GalleryController extends AbstractController
{
    public function index()
    {
        return $this->render('gallery.html.twig', ['gallery' => $gallery = $this->getDoctrine()
            ->getRepository(Gallery::class)
            ->findAllPublic()]);
    }

    public function zipDownload()
    {
        $dir = 'files/gallery';
        $zip_file = 'HeatherGallery.zip';

        $rootPath = realpath($dir);

        $zip = new ZipArchive();
        $zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE);

        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($rootPath),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file)
        {
            if (!$file->isDir())
            {
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }

        $zip->close();

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($zip_file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($zip_file));
        readfile($zip_file);
    }
}