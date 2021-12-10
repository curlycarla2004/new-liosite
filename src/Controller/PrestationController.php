<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestationController extends AbstractController
{
     /**
     * @Route("/prestations", name="prestations")
     */
    public function prestations(): Response
    {
        return $this->render('prestations/prestations.html.twig', [
        ]);
    }

     /**
     * @Route("/suivi-nutritionnel", name="suivi")
     */
    public function suivi(): Response
    {
        return $this->render('prestations/suivi-nutritionnel.html.twig', [
        ]);
    }

     /**
     * @Route("/musculation-fonctionnelle", name="musculation")
     */
    public function musculation(): Response
    {
        return $this->render('prestations/musculation.html.twig', [
        ]);
    }

     /**
     * @Route("/perte-de-poids", name="perte")
     */
    public function perte(): Response
    {
        return $this->render('prestations/perte-de-poids.html.twig', [
        ]);
    }

     /**
     * @Route("/preparation-physique", name="preparation")
     */
    public function preparation(): Response
    {
        return $this->render('prestations/preparation-physique.html.twig', [
        ]);
    }

     /**
     * @Route("/re-athletisation", name="reathletisation")
     */
    public function reathletisation(): Response
    {
        return $this->render('prestations/reathletisation.html.twig', [
        ]);
    }

     /**
     * @Route("/correction-posturale", name="correction")
     */
    public function correction(): Response
    {
        return $this->render('prestations/correction-posturale.html.twig', [
        ]);
    }

     /**
     * @Route("/pour-qui", name="types")
     */
    public function types(): Response
    {
        return $this->render('prestations/types.html.twig', [
        ]);
    }

     /**
     * @Route("/ou", name="lieux")
     */
    public function lieux(): Response
    {
        return $this->render('prestations/lieux.html.twig', [
        ]);
    }

     /**
     * @Route("/preparation-aux-concours", name="prepaconcours")
     */
    public function prepaconcours(): Response
    {
        return $this->render('prestations/prepaconcours.html.twig', [
        ]);
    }
}
