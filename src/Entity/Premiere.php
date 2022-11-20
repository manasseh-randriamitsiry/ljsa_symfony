<?php

namespace App\Entity;

use App\Repository\PremiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PremiereRepository::class)]
class Premiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $MLG = null;

    #[ORM\Column]
    private ?float $FRS = null;

    #[ORM\Column]
    private ?float $ANG = null;

    #[ORM\Column]
    private ?float $HG = null;

    #[ORM\Column]
    private ?float $EAC = null;

    #[ORM\Column]
    private ?float $SES = null;

    #[ORM\Column]
    private ?float $SPC = null;

    #[ORM\Column]
    private ?float $SVT = null;

    #[ORM\Column]
    private ?float $MATH = null;

    #[ORM\Column]
    private ?float $EPS = null;

    #[ORM\Column]
    private ?float $TICE = null;

    #[ORM\Column]
    private ?float $PHYLO = null;

    #[ORM\Column]
    private ?int $trimestre = null;

    #[ORM\Column]
    private ?int $annee_scolaire = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Etudiant $nmat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotal(): ?float
    {
        return $this->MLG+$this->FRS+$this->ANG+$this->HG+$this->EAC+$this->SES+$this->SPC+$this->MATH+
            $this->EPS+$this->TICE+$this->getPHYLO();
    }

    public function getmoy()
    {
        return $this->getTotal()/$this->getNmat()->getClasse()->getCoeffTotal();
    }

    public function getMLG(): ?float
    {
        return $this->MLG;
    }

    public function setMLG(float $MLG): self
    {
        $this->MLG = $MLG;

        return $this;
    }

    public function getFRS(): ?float
    {
        return $this->FRS;
    }

    public function setFRS(float $FRS): self
    {
        $this->FRS = $FRS;

        return $this;
    }

    public function getANG(): ?float
    {
        return $this->ANG;
    }

    public function setANG(float $ANG): self
    {
        $this->ANG = $ANG;

        return $this;
    }

    public function getHG(): ?float
    {
        return $this->HG;
    }

    public function setHG(float $HG): self
    {
        $this->HG = $HG;

        return $this;
    }

    public function getEAC(): ?float
    {
        return $this->EAC;
    }

    public function setEAC(float $EAC): self
    {
        $this->EAC = $EAC;

        return $this;
    }

    public function getSES(): ?float
    {
        return $this->SES;
    }

    public function setSES(float $SES): self
    {
        $this->SES = $SES;

        return $this;
    }

    public function getSPC(): ?float
    {
        return $this->SPC;
    }

    public function setSPC(float $SPC): self
    {
        $this->SPC = $SPC;

        return $this;
    }

    public function getSVT(): ?float
    {
        return $this->SVT;
    }

    public function setSVT(float $SVT): self
    {
        $this->SVT = $SVT;

        return $this;
    }

    public function getMATH(): ?float
    {
        return $this->MATH;
    }

    public function setMATH(float $MATH): self
    {
        $this->MATH = $MATH;

        return $this;
    }

    public function getEPS(): ?float
    {
        return $this->EPS;
    }

    public function setEPS(float $EPS): self
    {
        $this->EPS = $EPS;

        return $this;
    }

    public function getTICE(): ?float
    {
        return $this->TICE;
    }

    public function setTICE(float $TICE): self
    {
        $this->TICE = $TICE;

        return $this;
    }

    public function getPHYLO(): ?float
    {
        return $this->PHYLO;
    }

    public function setPHYLO(float $PHYLO): self
    {
        $this->PHYLO = $PHYLO;

        return $this;
    }

    public function getTrimestre(): ?int
    {
        return $this->trimestre;
    }

    public function setTrimestre(int $trimestre): self
    {
        $this->trimestre = $trimestre;

        return $this;
    }

    public function getAnneeScolaire(): ?int
    {
        return $this->annee_scolaire;
    }

    public function setAnneeScolaire(int $annee_scolaire): self
    {
        $this->annee_scolaire = $annee_scolaire;

        return $this;
    }

    public function getNmat(): ?Etudiant
    {
        return $this->nmat;
    }

    public function setNmat(?Etudiant $nmat): self
    {
        $this->nmat = $nmat;

        return $this;
    }
}
