<?php

namespace App\Entity;

use App\Repository\SecondeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SecondeRepository::class)]
class Seconde
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $N_matricule = null;

    #[ORM\Column]
    private ?int $MLG = null;

    #[ORM\Column]
    private ?int $FRS = null;

    #[ORM\Column]
    private ?int $ANG = null;

    #[ORM\Column]
    private ?int $HG = null;

    #[ORM\Column]
    private ?int $EAC = null;

    #[ORM\Column]
    private ?int $SES = null;

    #[ORM\Column]
    private ?int $SPC = null;

    #[ORM\Column]
    private ?int $MATH = null;

    #[ORM\Column]
    private ?int $EPS = null;

    #[ORM\Column]
    private ?int $TICE = null;

    #[ORM\Column]
    private ?int $trimestre = null;

    #[ORM\Column]
    private ?int $annee_scolaire = null;


    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTot(): ?string
    {
        return $this->MLG+$this->FRS+$this->ANG+$this->HG+$this->EAC+$this->SES+$this->SPC+$this->MATH+
            $this->EPS+$this->TICE;
    }

    public function getMoy(): string{
        return $this->getTot()/30;
    }


    public function getNMat(): ?string
    {
        return $this->N_matricule;
    }

    public function setNMat(string $N_matricule): self
    {
        $this->N_matricule = $N_matricule;

        return $this;
    }

    public function getMLG(): ?int
    {
        return $this->MLG;
    }

    public function setMLG(int $MLG): self
    {
        $this->MLG = $MLG;

        return $this;
    }

    public function getFRS(): ?int
    {
        return $this->FRS;
    }

    public function setFRS(int $FRS): self
    {
        $this->FRS = $FRS;

        return $this;
    }

    public function getANG(): ?int
    {
        return $this->ANG;
    }

    public function setANG(int $ANG): self
    {
        $this->ANG = $ANG;

        return $this;
    }

    public function getHG(): ?int
    {
        return $this->HG;
    }

    public function setHG(int $HG): self
    {
        $this->HG = $HG;

        return $this;
    }

    public function getEAC(): ?int
    {
        return $this->EAC;
    }

    public function setEAC(int $EAC): self
    {
        $this->EAC = $EAC;

        return $this;
    }

    public function getSES(): ?int
    {
        return $this->SES;
    }

    public function setSES(int $SES): self
    {
        $this->SES = $SES;

        return $this;
    }

    public function getSPC(): ?int
    {
        return $this->SPC;
    }

    public function setSPC(int $SPC): self
    {
        $this->SPC = $SPC;

        return $this;
    }

    public function getMATH(): ?int
    {
        return $this->MATH;
    }

    public function setMATH(int $MATH): self
    {
        $this->MATH = $MATH;

        return $this;
    }

    public function getEPS(): ?int
    {
        return $this->EPS;
    }

    public function setEPS(int $EPS): self
    {
        $this->EPS = $EPS;

        return $this;
    }

    public function getTICE(): ?string
    {
        return $this->TICE;
    }

    public function setTICE(string $TICE): self
    {
        $this->TICE = $TICE;

        return $this;
    }

    public function getTrim(): ?int
    {
        return $this->trimestre;
    }

    public function setTrim(int $trimestre): self
    {
        $this->trimestre = $trimestre;

        return $this;
    }

    public function getAS(): ?int
    {
        return $this->annee_scolaire;
    }

    public function setAS(int $annee_scolaire): self
    {
        $this->annee_scolaire = $annee_scolaire;

        return $this;
    }

}
