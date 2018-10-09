<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DestinationRepository")
 */
class Destination
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $introtext;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;


    private $file;

    private $coverImageLocation;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntrotext(): ?string
    {
        return $this->introtext;
    }

    public function setIntrotext(string $introtext): self
    {
        $this->introtext = $introtext;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }


    /**
     * @return mixed
     */
    public function getCoverImageLocation()
    {
        return $this->coverImageLocation;
    }

    /**
     * @param mixed $coverImageLocation
     */
    public function setCoverImageLocation($coverImageLocation): void
    {
        $this->coverImageLocation = $coverImageLocation;
    }

}
