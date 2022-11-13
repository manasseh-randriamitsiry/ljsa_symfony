<?php

namespace App\Controller\Admin;

use App\Entity\Classe;
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
            yield NumberField::new('total')
                ->hideOnForm();
    }

}
