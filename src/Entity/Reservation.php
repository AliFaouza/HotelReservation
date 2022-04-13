<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="date")
     */
    private $DateArrivee;

    /**
     * @ORM\Column(type="date")
     */
    private $DateDepart;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Motif;

    /**
     * @ORM\Column(type="integer")
     */
    private $Nombre_adulte;

    /**
     * @ORM\Column(type="integer")
     */
    private $Nombre_Enfant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->DateArrivee;
    }

    public function setDateArrivee(\DateTimeInterface $DateArrivee): self
    {
        $this->DateArrivee = $DateArrivee;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->DateDepart;
    }

    public function setDateDepart(\DateTimeInterface $DateDepart): self
    {
        $this->DateDepart = $DateDepart;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->Motif;
    }

    public function setMotif(string $Motif): self
    {
        $this->Motif = $Motif;

        return $this;
    }

    public function getNombreAdulte(): ?int
    {
        return $this->Nombre_adulte;
    }

    public function setNombreAdulte(int $Nombre_adulte): self
    {
        $this->Nombre_adulte = $Nombre_adulte;

        return $this;
    }

    public function getNombreEnfant(): ?int
    {
        return $this->Nombre_Enfant;
    }

    public function setNombreEnfant(int $Nombre_Enfant): self
    {
        $this->Nombre_Enfant = $Nombre_Enfant;

        return $this;
    }
}
