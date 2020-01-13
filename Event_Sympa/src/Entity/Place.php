<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\PlaceRepository")
 */
class Place
{
    /**
     * @ORM\Column(type="string", length=255)
     * @ORM\Id
     */
    private $placeName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="integer")
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $city;

    public function __construct($placeName=NULL,$adress=NULL,$postalCode=NULL,$city=NULL)
    {
        $this->placeName=$placeName;
        $this->adress=$adress;
        $this->postalCode=$postalCode;
        $this->city=$city;
    }


    public function getPlaceName(): ?string
    {
        return $this->placeName;
    }

    public function setPlaceName(string $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postalCode;
    }

    public function setPostalCode(int $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
