<?php

namespace App\Entity\Model;

use App\Entity\Identity;
use Doctrine\Common\Collections\Collection;

class ClasseLevel
{
    const LEVEL_ONE = 'level.one';
    const LEVEL_TWO = 'level.two';
    const LEVEL_THREE = 'level.three';

    const LEVELS = [self::LEVEL_ONE, self::LEVEL_TWO, self::LEVEL_THREE];
    use Identity;

    private string $level;
    private ?string $serie = null;
    private Collection $coefficients; //liste coefficient

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @param string $level
     * @return ClasseLevel
     */
    public function setLevel(string $level): ClasseLevel
    {
        if (!in_array($level, self::LEVELS)) {
            throw new \InvalidArgumentException("Level $level not valid");
        }

        $this->level = $level;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSerie(): ?string
    {
        return $this->serie;
    }

    /**
     * @param string|null $serie
     * @return ClasseLevel
     */
    public function setSerie(?string $serie): ClasseLevel
    {
        $this->serie = $serie;
        return $this;
    }

    public function __toString(): string
    {
        return $this->level. ' '. $this->getSerie();
    }

    /**
     * @return Collection
     */
    public function getCoefficients(): Collection
    {
        return $this->coefficients;
    }

    /**
     * @param Collection $coefficients
     * @return ClasseLevel
     */
    public function setCoefficients(Collection $coefficients): ClasseLevel
    {
        $this->coefficients = $coefficients;
        return $this;
    }
}