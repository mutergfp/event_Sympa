<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderARepository")
 */
class OrderA
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User",cascade={"persist"})
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     */
    private $account;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOrder;

    /**
     * @ORM\ManyToOne(targetEntity="Event",cascade={"persist"})
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    private $event;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * OrderA constructor.
     * @param $id
     * @param $account
     * @param $dateOrder
     * @param $event
     * @param $quantity
     */
    public function __construct($account=NULL, $dateOrder=NULL, $event=NULL, $quantity=NULL)
    {
        $this->account = $account;
        $this->dateOrder = $dateOrder;
        $this->event = $event;
        $this->quantity = $quantity;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccount(): ?User
    {
        return $this->account;
    }

    public function setAccount(User $account): self
    {
        $this->account = $account;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getDateOrder(): ?\DateTimeInterface
    {
        return $this->dateOrder;
    }

    public function setDateOrder(\DateTimeInterface $dateOrder): self
    {
        $this->dateOrder = $dateOrder;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
