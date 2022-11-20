<?php

namespace App\Entity\Model;

use App\Entity\Etudiant;
use App\Entity\Identity;

class Note
{
    use Identity;
    private Matiere $matiere;
    private Etudiant $etudiant;
    private Classe $classe;

    /**
     * @return Matiere
     */
    public function getMatiere(): Matiere
    {
        return $this->matiere;
    }

    /**
     * @param Matiere $matiere
     * @return Note
     */
    public function setMatiere(Matiere $matiere): Note
    {
        $this->matiere = $matiere;
        return $this;
    }

    /**
     * @return Etudiant
     */
    public function getEtudiant(): Etudiant
    {
        return $this->etudiant;
    }

    /**
     * @param Etudiant $etudiant
     * @return Note
     */
    public function setEtudiant(Etudiant $etudiant): Note
    {
        $this->etudiant = $etudiant;
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
     * @return Note
     */
    public function setClasse(Classe $classe): Note
    {
        $this->classe = $classe;
        return $this;
    }
}