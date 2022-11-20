<?php

namespace App\Entity\Model;

use App\Entity\Identity;

class Coefficient
{
    use Identity;

    private ClasseLevel $level;
    private Matiere $matiere;
    private int $coefficient;

    /**
     * @return ClasseLevel
     */
    public function getLevel(): ClasseLevel
    {
        return $this->level;
    }

    /**
     * @param ClasseLevel $level
     * @return Coefficient
     */
    public function setLevel(ClasseLevel $level): Coefficient
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return Matiere
     */
    public function getMatiere(): Matiere
    {
        return $this->matiere;
    }

    /**
     * @param Matiere $matiere
     * @return Coefficient
     */
    public function setMatiere(Matiere $matiere): Coefficient
    {
        $this->matiere = $matiere;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoefficient(): int
    {
        return $this->coefficient;
    }

    /**
     * @param int $coefficient
     * @return Coefficient
     */
    public function setCoefficient(int $coefficient): Coefficient
    {
        $this->coefficient = $coefficient;
        return $this;
    }
}