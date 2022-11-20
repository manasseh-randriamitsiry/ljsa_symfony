<?php

namespace App\Entity\Model;

use App\Entity\Identity;

class StudentClasse
{
    use Identity;

    private Student $student;
    private Classe $classe;
    private \DateTime $when;

    /**
     * @return Student
     */
    public function getStudent(): Student
    {
        return $this->student;
    }

    /**
     * @param Student $student
     * @return StudentClasse
     */
    public function setStudent(Student $student): StudentClasse
    {
        $this->student = $student;
        return $this;
    }

    /**
     * @return Classe
     */
    public function getClasse(): Classe
    {
        return $this->classe;
    }

    /**
     * @param Classe $classe
     * @return StudentClasse
     */
    public function setClasse(Classe $classe): StudentClasse
    {
        $this->classe = $classe;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWhen(): \DateTime
    {
        return $this->when;
    }

    /**
     * @param \DateTime $when
     * @return StudentClasse
     */
    public function setWhen(\DateTime $when): StudentClasse
    {
        $this->when = $when;
        return $this;
    }
}