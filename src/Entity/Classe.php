<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasseRepository::class)]
class Classe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $classe = null;

    #[ORM\Column]
    private ?int $coeff_total = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotal(): ?int
    {
        return $this->coeff_total*2;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getCoeffTotal(): ?int
    {
        return $this->coeff_total;
    }

    public function setCoeffTotal(int $coeff_total): self
    {
        $this->coeff_total = $coeff_total;

        return $this;
    }
}
