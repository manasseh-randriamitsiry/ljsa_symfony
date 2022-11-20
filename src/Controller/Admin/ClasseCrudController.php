<?php

namespace App\Controller\Admin;

use App\Entity\Classe;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ClasseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Classe::class;
    }

    public function configureFields(string $pageName): iterable
    {
//            yield IdField::new('id')
//                ->onlyOnIndex();
            yield TextField::new('classe');
            yield NumberField::new('coeffTotal');
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // defines the initial sorting applied to the list of entities
            // (user can later change this sorting by clicking on the table columns)
            ->setDefaultSort(['classe' => 'DESC'])
//            ->setDefaultSort(['id' => 'DESC', 'title' => 'ASC', 'startsAt' => 'DESC'])
            // you can sort by Doctrine associations up to two levels
//            ->setDefaultSort(['seller.name' => 'ASC'])

            ;
    }

}
