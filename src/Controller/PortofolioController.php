<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortofolioController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('portofolio/index.html.twig', [
            'controller_name' => 'PortofolioController',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('portofolio/about.html.twig', [
            'controller_name' => 'PortofolioController',
        ]);
    }

     /**
     * @Route("/portofolio", name="portofolio")
     */
    public function portofolio()
    {
        return $this->render('portofolio/portofolio.html.twig', [
            'controller_name' => 'PortofolioController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('portofolio/contact.html.twig', [
            'controller_name' => 'PortofolioController',
        ]);
    }
}
