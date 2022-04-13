<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Designation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?int
    {
        return $this->Designation;
    }

    public function setDesignation(int $Designation): self
    {
        $this->Designation = $Designation;

        return $this;
    }
}
