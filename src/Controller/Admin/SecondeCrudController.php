<?php

namespace App\Controller\Admin;

use App\Entity\Seconde;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SecondeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Seconde::class;
    }

    public function configureFields(string $pageName): iterable
    {
           yield TextField::new('n_mat')->setCssClass("w-50")->setMaxLength(10);
           yield NumberField::new('MLG')->setCssClass("w-50")->setRoundingMode(true);
           yield NumberField::new('FRS')->setCssClass("w-50");
           yield NumberField::new('ANG')->setCssClass("w-50");
           yield NumberField::new('HG')->setCssClass("w-50");
           yield NumberField::new('EAC')->setCssClass("w-50");
           yield NumberField::new('SES')->setCssClass("w-50");
           yield NumberField::new('SPC')->setCssClass("w-50");
           yield NumberField::new('MATH')->setCssClass("w-50");
           yield NumberField::new('EPS')->setCssClass("w-50");
           yield NumberField::new('TICE')->setCssClass("w-50");
           yield NumberField::new('trim')->setCssClass("w-50");
           yield NumberField::new('AS')->setCssClass("w-50");
           yield NumberField::new('Tot')->onlyOnIndex();
           yield NumberField::new('Moy')->onlyOnIndex();
    }
    public function configureActions(Actions $actions): Actions

    {
        return $actions
            // ...
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::DELETE)
            ->add(Crud::PAGE_INDEX, Action::new("ok",'fas' ,'fas fa-file-invoice')->linkToRoute('app_login'));

    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // defines the initial sorting applied to the list of entities
            // (user can later change this sorting by clicking on the table columns)
            ->setDefaultSort(['id' => 'DESC'])
//            ->setDefaultSort(['id' => 'DESC', 'title' => 'ASC', 'startsAt' => 'DESC'])
            // you can sort by Doctrine associations up to two levels
//            ->setDefaultSort(['seller.name' => 'ASC'])
            ;
    }

}
