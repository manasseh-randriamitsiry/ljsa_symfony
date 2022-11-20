<?php

namespace App\Entity\Model;

use App\Entity\Identity;

class Student
{
    use Identity;
    private string $matricule;
    private string $name;
    private string $lastname;

    /**
     * @return string
     */
    public function getMatricule(): string
    {
        return $this->matricule;
    }

    /**
     * @param string $matricule
     * @return Student
     */
    public function setMatricule(string $matricule): Student
    {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Student
     */
    public function setName(string $name): Student
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Student
     */
    public function setLastname(string $lastname): Student
    {
        $this->lastname = $lastname;
        return $this;
    }
}