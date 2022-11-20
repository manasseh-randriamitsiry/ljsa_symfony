<?php

namespace App\Controller\Admin;

use App\Entity\Etudiant;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EtudiantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Etudiant::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['Nmat' => 'ASC']);
    }

    public function configureFields(string $pageName): iterable
    {
         yield TextField::new('Nmat')->setLabel("NºMatricule");
         yield TextField::new('enom')->setLabel("Nom");
         yield TextField::new('eprenom')->setLabel("Prenom");
         yield AssociationField::new('classe');
         yield DateField::new('date_nais')->setLabel("Date de Naissance")->setSortable(true);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters->add('Nmat')
            ->add('enom')
            ->add('eprenom')
            ->add('classe')
            ->add('date_nais');
    }

}
