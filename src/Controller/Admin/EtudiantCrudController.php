<?php

namespace App\Controller\Admin;

use App\Entity\Etudiant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EtudiantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Etudiant::class;
    }

    public function configureFields(string $pageName): iterable
    {
//         yield IdField::new('id');
         yield TextField::new('enom')->setLabel("Nom");
         yield TextField::new('eprenom')->setLabel("Prenom");
         yield TextField::new('classe');
         yield DateField::new('date_nais')->setLabel("Date de Naissance")->setSortable(true);
//         yield  TextEditorField::new('Prenom');

    }

}
