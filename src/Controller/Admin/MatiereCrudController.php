<?php

namespace App\Controller\Admin;

use App\Entity\Matiere;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MatiereCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Matiere::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('designation')->setCssClass("w-50");
        yield TextField::new('abreviation')->setCssClass("w-50");
        yield TextareaField::new('description')->setCssClass("w-50");
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityLabelInPlural("Matieres")
            ->setEntityLabelInSingular("Matiere");
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters->add('designation')
            ->add('abreviation')
            ->add('description');
    }
}
