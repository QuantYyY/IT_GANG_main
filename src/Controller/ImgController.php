<?php

namespace App\Controller;

use App\Entity\Img;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Monolog\DateTimeImmutable;
class ImgController extends AbstractController
{
    #[Route('/img/upload', name: 'img.upload')]
    public function upload(Request $request, EntityManagerInterface $em): Response
    {
        /** @var UploadedFile|null $file */
        $file =  $request->files->get('file');

        $config = $this->getParameter('image_post_directory');

        if($file instanceof UploadedFile)
        {

            $fileName = uniqid() . '.' . $file->guessExtension();
            $fileUpload = $file->move($config, $fileName);
            $originalName = $file->getClientOriginalName();

            $img = (new Img())
                ->setUserCreate('kkkkk')
                ->setDateCreate(new DateTimeImmutable(true))
                ->setImageName($fileName);

            $em->persist($img);
            $em->flush();

            return $this->json(
                [
                'success' => true,
                'id' => $img->getId()
                ]
            );
        }
        return $this->json(
            [
                'success' => false
            ]
        );

    }


    #[Route('/img/load/{id\+d}', name: 'img.load', methods: ['GET'])]
    public function load(Img $img): Response
    {
        $this->json([
            'success' => true,
            'data' => [
                'id' => $img->getId(),
                'path' => $img->getImageName()
            ]
        ]);
    }

    #[Route('/img/delete/{id\+d}', name: 'img.delete', methods: ['GET'])]
    public function delete(Img $img, EntityManagerInterface $em, Filesystem $filesystem): Response
    {
        $path = $img->getImageName();
        $em->remove($img);
        $filesystem->remove($path);

        $this->json([
            'success' => true
        ]);
    }


}