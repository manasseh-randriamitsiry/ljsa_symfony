<?php

namespace App\Controller\Admin;

use App\Entity\Prof;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProfCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Prof::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('p_n_matricule')->setLabel("Numero matricule")->setCssClass("w-50");
        yield TextField::new('p_nom')->setLabel("Nom prof")->setCssClass("w-50");
        yield TextField::new('p_prenom')->setLabel("Prenom prof")->setCssClass("w-50");
        yield DateField::new('p_date_nais')->setLabel("Date de Naissance")->setCssClass("w-50");
        yield DateField::new('p_date_prise_service')->setLabel("Date de prise de service")->setCssClass("w-50");
        yield DateField::new('p_date_cessation_service')->setLabel("Date de cessation de service")->setCssClass("w-50");
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityLabelInPlural("Profs")
            ->setEntityLabelInSingular("Prof");
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters->add('p_n_matricule')
            ->add('p_nom')
            ->add('p_prenom')
            ->add('p_date_nais')
            ->add('p_date_prise_service')
            ->add('p_date_cessation_service');

    }
}
