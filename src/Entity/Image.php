<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @ORM\SequenceGenerator(sequenceName="id", initialValue=1)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_create;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_create;

    /**
     * @ORM\ManyToOne(targetEntity=RelationAlbumAndImage::class, inversedBy="id_album")
     */
    private $id_image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageName(): ?string
    {
        return $this->image_name;
    }

    public function setImageName(string $image_name): self
    {
        $this->image_name = $image_name;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->date_create;
    }

    public function setDateCreate(\DateTimeInterface $date_create): self
    {
        $this->date_create = $date_create;

        return $this;
    }

    public function getUserCreate(): ?string
    {
        return $this->user_create;
    }

    public function setUserCreate(string $user_create): self
    {
        $this->user_create = $user_create;

        return $this;
    }

    public function getIdImage(): ?RelationAlbumAndImage
    {
        return $this->id_image;
    }

    public function setIdImage(?RelationAlbumAndImage $id_image): self
    {
        $this->id_image = $id_image;

        return $this;
    }
}
