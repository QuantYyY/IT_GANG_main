<?php

namespace App\Entity;

use App\Repository\AlbumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AlbumRepository::class)
 */
class Album
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @ORM\SequenceGenerator(sequenceName="id", initialValue=1)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $title;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_publication;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_create;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_update;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_create;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user_update;

    /**
     * @ORM\OneToMany(targetEntity=RelationAlbumAndImage::class, mappedBy="id_image")
     */
    private $id_album;

    public function __construct()
    {
        $this->id_album = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->date_publication;
    }

    public function setDatePublication(\DateTimeInterface $date_publication): self
    {
        $this->date_publication = $date_publication;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

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

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return $this->date_update;
    }

    public function setDateUpdate(?\DateTimeInterface $date_update): self
    {
        $this->date_update = $date_update;

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

    public function getUserUpdate(): ?string
    {
        return $this->user_update;
    }

    public function setUserUpdate(?string $user_update): self
    {
        $this->user_update = $user_update;

        return $this;
    }

    /**
     * @return Collection|RelationAlbumAndImage[]
     */
    public function getIdAlbum(): Collection
    {
        return $this->id_album;
    }

    public function addIdAlbum(RelationAlbumAndImage $idAlbum): self
    {
        if (!$this->id_album->contains($idAlbum)) {
            $this->id_album[] = $idAlbum;
            $idAlbum->setIdImage($this);
        }

        return $this;
    }

    public function removeIdAlbum(RelationAlbumAndImage $idAlbum): self
    {
        if ($this->id_album->removeElement($idAlbum)) {
            // set the owning side to null (unless already changed)
            if ($idAlbum->getIdImage() === $this) {
                $idAlbum->setIdImage(null);
            }
        }

        return $this;
    }
}
