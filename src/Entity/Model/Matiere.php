<?php

namespace App\Entity\Model;

use App\Entity\Identity;

class Matiere
{
    use Identity;

    private string $label;
    private string $code;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Matiere
     */
    public function setLabel(string $label): Matiere
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Matiere
     */
    public function setCode(string $code): Matiere
    {
        $this->code = $code;
        return $this;
    }
}