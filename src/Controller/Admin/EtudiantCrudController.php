<?php

namespace App\Controller\Admin;

use App\Entity\Etudiant;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
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
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the names of the Doctrine entity properties where the search is made on
            // (by default it looks for in all properties)
//            ->setSearchFields(['name', 'description'])
            // use dots (e.g. 'seller.email') to search in Doctrine associations
//            ->setSearchFields(['name', 'description', 'seller.email', 'seller.address.zipCode'])
            // set it to null to disable and hide the search box
//            ->setSearchFields(null)

            // defines the initial sorting applied to the list of entities
            // (user can later change this sorting by clicking on the table columns)
            ->setDefaultSort(['Nmat' => 'ASC']);
    }

    public function configureFields(string $pageName): iterable
    {
//         yield IdField::new('id');
        yield TextField::new('Nmat')->setLabel("NºMatricule");
         yield TextField::new('enom')->setLabel("Nom");
         yield TextField::new('eprenom')->setLabel("Prenom");
         yield TextField::new('classe');
         yield DateField::new('date_nais')->setLabel("Date de Naissance")->setSortable(true);
//         yield  TextEditorField::new('Prenom');

    }

}
