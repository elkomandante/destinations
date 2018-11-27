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
    private $bottomText;


    /**
     * @ORM\Column(type="text")
     */
    private $introtext;

    /**
     * @ORM\Column(type="text")
     */
    private $shortContent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $closeDestinations;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $currency;


    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $facts;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $note;




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

    /**
     * @return mixed
     */
    public function getBottomText()
    {
        return $this->bottomText;
    }

    /**
     * @param mixed $bottomText
     */
    public function setBottomText($bottomText): void
    {
        $this->bottomText = $bottomText;
    }

    /**
     * @return mixed
     */
    public function getShortContent()
    {
        return $this->shortContent;
    }

    /**
     * @param mixed $shortContent
     */
    public function setShortContent($shortContent): void
    {
        $this->shortContent = $shortContent;
    }

    /**
     * @return mixed
     */
    public function getCloseDestinations()
    {
        return $this->closeDestinations;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getFacts()
    {
        return $this->facts;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $closeDestinations
     */
    public function setCloseDestinations($closeDestinations): void
    {
        $this->closeDestinations = $closeDestinations;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @param mixed $facts
     */
    public function setFacts($facts): void
    {
        $this->facts = $facts;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }





}
