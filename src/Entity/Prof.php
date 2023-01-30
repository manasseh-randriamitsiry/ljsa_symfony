<?php

namespace App\Entity;

use App\Repository\ProfRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ProfRepository::class)]
#[UniqueEntity('p_n_matricule',message: 'numero matricule dejà utilisé',)]
class Prof
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $p_n_matricule = null;

    #[ORM\Column(length: 150)]
    private ?string $p_nom = null;

    #[ORM\Column(length: 150)]
    private ?string $p_prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $p_date_nais = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $p_date_prise_service = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $p_date_cessation_service = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPNMatricule(): ?string
    {
        return $this->p_n_matricule;
    }

    public function setPNMatricule(string $p_n_matricule): self
    {
        $this->p_n_matricule = $p_n_matricule;

        return $this;
    }

    public function getPNom(): ?string
    {
        return $this->p_nom;
    }

    public function setPNom(string $p_nom): self
    {
        $this->p_nom = $p_nom;

        return $this;
    }

    public function getPPrenom(): ?string
    {
        return $this->p_prenom;
    }

    public function setPPrenom(string $p_prenom): self
    {
        $this->p_prenom = $p_prenom;

        return $this;
    }

    public function getPDateNais(): ?\DateTimeInterface
    {
        return $this->p_date_nais;
    }

    public function setPDateNais(\DateTimeInterface $p_date_nais): self
    {
        $this->p_date_nais = $p_date_nais;

        return $this;
    }

    public function getPDatePriseService(): ?\DateTimeInterface
    {
        return $this->p_date_prise_service;
    }

    public function setPDatePriseService(\DateTimeInterface $p_date_prise_service): self
    {
        $this->p_date_prise_service = $p_date_prise_service;

        return $this;
    }

    public function getPDateCessationService(): ?\DateTimeInterface
    {
        return $this->p_date_cessation_service;
    }

    public function setPDateCessationService(?\DateTimeInterface $p_date_cessation_service): self
    {
        $this->p_date_cessation_service = $p_date_cessation_service;

        return $this;
    }
}
