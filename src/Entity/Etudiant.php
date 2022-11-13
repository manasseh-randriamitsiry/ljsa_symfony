<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
#[UniqueEntity('Nmat',message: 'email dejà utilisé',)]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $enom = null;

    #[ORM\Column(length: 255)]
    private ?string $eprenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_nais = null;

    #[ORM\Column(length: 10)]
    private ?string $classe = null;

//    #[ORM\]
    #[ORM\Column(length: 10)]
    private ?string $Nmat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnom(): ?string
    {
        return strtoupper($this->enom);
    }

    public function setEnom(string $enom): self
    {
        $this->enom = strtoupper($enom);

        return $this;
    }

    public function getEprenom(): ?string
    {
        return strtolower($this->eprenom);
    }

    public function setEprenom(string $eprenom): self
    {
        $this->eprenom = strtolower($eprenom);

        return $this;
    }

    public function getDateNais(): ?\DateTimeInterface
    {
        return $this->date_nais;
    }

    public function setDateNais(\DateTimeInterface $date_nais): self
    {
        $this->date_nais = $date_nais;

        return $this;
    }

    public function getClasse(): ?string
    {
        return strtolower($this->classe);
    }

    public function setClasse(string $classe): self
    {
        $this->classe = strtolower($classe);

        return $this;
    }

    public function getNmat(): ?string
    {
        return $this->Nmat;
    }

    public function setNmat(string $Nmat): self
    {
        $this->Nmat = $Nmat;

        return $this;
    }
}
