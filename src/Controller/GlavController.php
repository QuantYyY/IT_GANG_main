<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GlavController extends AbstractController
{
    #[Route('/glav', name: 'glav')]
    public function index(): Response
    {
        return $this->render('glav/index.html.twig', [
            'controller_name' => 'GlavController',
        ]);
    }
}
