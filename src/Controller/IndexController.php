<?php

namespace App\Controller;

use App\Entity\Gallery;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function index()
    {
        $gallery = $this->getDoctrine()->getRepository(Gallery::class)->findAllPublicHomePage();

        // NOTE - I am quite unhappy with the code segment below - will have to clean it up at a later date.

        // Heather's birthday calculations
        $heathersBirthday = '1975-12-27';
        $birthday = new DateTime($heathersBirthday);
        $today = new DateTime(date("Y-m-d"));

        if ($birthday->format("m-d") == $today->format("m-d")) {
            $dob = new DateTime('27-12-1975');
            $today = new DateTime();
            $difference = $today->diff($dob);
            $age = $difference->y;
            $definitelyherBirthday = true;
        } else {
            $age = null;
            $definitelyherBirthday = false;
        }

        return $this->render('index.html.twig', ['gallery' => $gallery, 'age' => $age, 'birthday' => $definitelyherBirthday]);
    }
}