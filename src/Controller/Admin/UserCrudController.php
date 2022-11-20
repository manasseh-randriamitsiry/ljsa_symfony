<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
          yield IdField::new('id')
              ->onlyOnIndex();
          yield EmailField::new('email');
          yield TextField::new('password')->setLabel('Mot de passe');
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
//            ->update(Crud::PAGE_INDEX,Action::NEW,function (Action $action){
//                return $action->addCssClass('btn btn-success')->setLabel('Ajouter')->setIcon("fas fa-plus");
//            })
            ->add(Crud::PAGE_INDEX,Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::DELETE)
            ->remove(Crud::PAGE_INDEX, Action::NEW)
            ;

    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters->add('email');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityLabelInPlural("Utilisateurs")
            ->setEntityLabelInSingular("Utilisateur");
    }
}
