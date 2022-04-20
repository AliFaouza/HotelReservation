<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="IDX_42C849559B177F54", columns={"chambre_id"}), @ORM\Index(name="IDX_42C8495519EB6921", columns={"client_id"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrivee", type="date", nullable=false)
     */
    private $dateArrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=false)
     */
    private $dateDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=100, nullable=false)
     */
    private $motif;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_adulte", type="integer", nullable=false)
     */
    private $nombreAdulte;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_enfant", type="integer", nullable=false)
     */
    private $nombreEnfant;

    /**
     * @var \Chambre
     *
     * @ORM\ManyToOne(targetEntity="Chambre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chambre_id", referencedColumnName="id")
     * })
     */
    private $chambre;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getNombreAdulte(): ?int
    {
        return $this->nombreAdulte;
    }

    public function setNombreAdulte(int $nombreAdulte): self
    {
        $this->nombreAdulte = $nombreAdulte;

        return $this;
    }

    public function getNombreEnfant(): ?int
    {
        return $this->nombreEnfant;
    }

    public function setNombreEnfant(int $nombreEnfant): self
    {
        $this->nombreEnfant = $nombreEnfant;

        return $this;
    }

    public function getChambre(): ?Chambre
    {
        return $this->chambre;
    }

    public function setChambre(?Chambre $chambre): self
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }


}
