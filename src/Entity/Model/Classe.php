<?php

namespace App\Entity\Model;

use App\Entity\Identity;
use Doctrine\Common\Collections\Collection;

class Classe
{
    use Identity;
    private ClasseLevel $level;
    private int $number;

    /**
     * @return ClasseLevel
     */
    public function getLevel(): ClasseLevel
    {
        return $this->level;
    }

    /**
     * @param ClasseLevel $level
     * @return Classe
     */
    public function setLevel(ClasseLevel $level): Classe
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Classe
     */
    public function setNumber(int $number): Classe
    {
        $this->number = $number;
        return $this;
    }
}