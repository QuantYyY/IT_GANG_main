<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddAlbumController extends AbstractController
{
    #[Route('/add/album', name: 'add_album')]
    public function index(): Response
    {
        return $this->render('add_album/index.html.twig', [
            'controller_name' => 'AddAlbumController',
        ]);
    }
}
