<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="date")
     */
    private $dateRes;

    /**
     * @ORM\ManyToOne(targetEntity=Evenement::class, cascade={"persist", "remove"})
     */
    private $event;

    /**
     *  @Assert\NotBlank
     * @Assert\Range(
     *      min = 1,
     *      max=3,
     *      maxMessage = "maximum 2 nombres "
     * )
     * @ORM\Column(type="integer")
     */
    private $nbrPersonnes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRes(): ?\DateTimeInterface
    {
        return $this->dateRes;
    }

    public function setDateRes(\DateTimeInterface $dateRes): self
    {
        $this->dateRes = $dateRes;

        return $this;
    }

    public function getEvent(): ?evenement
    {
        return $this->event;
    }

    public function setEvent(?evenement $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getNbrPersonnes(): ?int
    {
        return $this->nbrPersonnes;
    }

    public function setNbrPersonnes(int $nbrPersonnes): self
    {
        $this->nbrPersonnes = $nbrPersonnes;

        return $this;
    }
}
