<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default_index')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }

    #[Route('/a-propos-de-nous', name: 'app_default_about')]
    public function about(): Response
    {
        return $this->render('default/about.html.twig');
    }

    #[Route('/mobilite', name: 'app_default_mobility')]
    public function mobility(): Response
    {
        return $this->render('default/mobility.html.twig');
    }

    #[Route('/programme', name: 'app_default_program')]
    public function programe(): Response
    {
        return $this->render('default/program.html.twig');
    }

    #[Route('/sponsors', name: 'app_default_sponsors')]
    public function sponsors(): Response
    {
        return $this->render('default/sponsors.html.twig');
    }

    #[Route('/edition-2024', name: 'app_default_gallery')]
    public function gallery(): Response
    {
        return $this->render('default/gallery.html.twig');
    }
}
