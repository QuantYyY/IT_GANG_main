<?php

namespace App\Entity;

use App\Repository\AlbumRepository;
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
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $data_publication;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $data_create;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $date_update;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $user_create;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $user_update;

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

    public function getDataPublication(): ?string
    {
        return $this->data_publication;
    }

    public function setDataPublication(string $data_publication): self
    {
        $this->data_publication = $data_publication;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
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

    public function getDataCreate(): ?string
    {
        return $this->data_create;
    }

    public function setDataCreate(string $data_create): self
    {
        $this->data_create = $data_create;

        return $this;
    }

    public function getDateUpdate(): ?string
    {
        return $this->date_update;
    }

    public function setDateUpdate(string $date_update): self
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

    public function setUserUpdate(string $user_update): self
    {
        $this->user_update = $user_update;

        return $this;
    }
}
