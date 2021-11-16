<?php

namespace App\Entity;

use App\Repository\RelationAlbumAndImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RelationAlbumAndImageRepository::class)
 */
class RelationAlbumAndImage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @ORM\SequenceGenerator(sequenceName="id", initialValue=1)
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=image::class, mappedBy="id_image")
     */
    private $id_album;

    /**
     * @ORM\ManyToOne(targetEntity=album::class, inversedBy="id_album")
     */
    private $id_image;

    public function __construct()
    {
        $this->id_album = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|image[]
     */
    public function getIdAlbum(): Collection
    {
        return $this->id_album;
    }

    public function addIdAlbum(image $idAlbum): self
    {
        if (!$this->id_album->contains($idAlbum)) {
            $this->id_album[] = $idAlbum;
            $idAlbum->setIdImage($this);
        }

        return $this;
    }

    public function removeIdAlbum(image $idAlbum): self
    {
        if ($this->id_album->removeElement($idAlbum)) {
            // set the owning side to null (unless already changed)
            if ($idAlbum->getIdImage() === $this) {
                $idAlbum->setIdImage(null);
            }
        }

        return $this;
    }

    public function getIdImage(): ?album
    {
        return $this->id_image;
    }

    public function setIdImage(?album $id_image): self
    {
        $this->id_image = $id_image;

        return $this;
    }
}
