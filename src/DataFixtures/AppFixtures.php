<?php

namespace App\DataFixtures;

use App\Entity\Etudiant;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $etudiant = new Etudiant();
        $etudiant->setEnom("kadd");
        $etudiant->setEprenom("wish");
        $etudiant->setClasse("seconde");
        $etudiant->setDateNais(new DateTime('2022-2-10'));
        $manager->persist($etudiant);
        $manager->flush();
    }
}
