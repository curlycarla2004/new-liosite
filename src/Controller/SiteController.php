<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('liosite/home.html.twig', [
        ]);
    }

    /**
     * @Route("/qui-suis-je", name="about")
     */
    public function about(): Response
    {
        return $this->render('liosite/about.html.twig', [
        ]);
    }

   
}
