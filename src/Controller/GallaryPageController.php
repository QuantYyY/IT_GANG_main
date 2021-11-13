<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GallaryPageController extends AbstractController
{
    #[Route('/glav/gallery', name: 'gallary_page')]
    public function index(): Response
    {
        return $this->render('gallary_page/index.html.twig', [
            'controller_name' => 'GallaryPageController',
        ]);
    }
}
