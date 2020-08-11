<?php

namespace App\Controller;

use App\Entity\Gallery;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GalleryController extends AbstractController
{
    public function index()
    {
        return $this->render('gallery.html.twig', ['gallery' => $gallery = $this->getDoctrine()
            ->getRepository(Gallery::class)
            ->findAllPublic()]);
    }
}