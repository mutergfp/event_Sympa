<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Merci de charger une photo au format PNG de taille 400x400")
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $eventType;

    /**
     * @ORM\Column(type="date")
     */
    private $startDate;

    /**
     * @ORM\Column(type="date")
     */
    private $endDate;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $placeRemain;

    /**
     * @ORM\Column(type="integer")
     */
    private $placeMax;

    /**
     * @ORM\ManyToOne(targetEntity="Place")
     * @ORM\JoinColumn(nullable=true, name="place_name_place_id", referencedColumnName="place_name")
     */
    private $placeNamePlace;



    public function __construct($title=NULL,$description=NULL,$image=NULL,$eventType=NULL,$startDate=NULL,$endDate=NULL,$price=NULL,$placeRemain=NULL,$placeMax=NULL,$placeNamePlace=NULL)
    {
        $this->title=$title;
        $this->description=$description;
        $this->image=$image;
        $this->eventType=$eventType;
        $this->startDate=$startDate;
        $this->endDate=$endDate;
        $this->price=$price;
        $this->placeRemain=$placeRemain;
        $this->placeMax=$placeMax;
        $this->placeNamePlace=$placeNamePlace;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPlaceRemain(): ?int
    {
        return $this->placeRemain;
    }

    public function setPlaceRemain(int $placeRemain): self
    {
        $this->placeRemain = $placeRemain;

        return $this;
    }

    public function getPlaceMax(): ?int
    {
        return $this->placeMax;
    }

    public function setPlaceMax(int $placeMax): self
    {
        $this->placeMax = $placeMax;

        return $this;
    }

    public function getPlaceNamePlace(): ?Place
    {
        return $this->placeNamePlace;
    }

    public function setPlaceNamePlace(Place $placeNamePlace): self
    {
        $this->placeNamePlace = $placeNamePlace;

        return $this;
    }


}

