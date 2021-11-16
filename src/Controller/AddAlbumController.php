<?php

namespace App\Controller;

use App\Photos\FileManageInterfacePhotos;
use App\Photos\FileManagerPhotos;
use Cocur\Slugify\Slugify;
use App\Entity\Album1;
use App\Form\AlbumFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AddAlbumController extends AbstractController
{
    #[Route('/add/album', name: 'add_album')]

    public function index(Request $request, Slugify $slugify, FileManageInterfacePhotos $file1): Response
    {
        $Album = new Album1();
        $form = $this->createForm(AlbumFormType::class, $Album);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
            if($image){
                $filename = $file1->imagePostUpload($image);
                $Album->setImage($filename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($Album);
            $em->flush();

            return $this->redirectToRoute('add_album');
        }

        return $this->render('add_album/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
