<?php

namespace App\Controller\Admin;

use App\Entity\Seconde;
use App\Repository\SecondeRepository;
use App\Service\PdfService;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use Symfony\Component\Routing\Annotation\Route;


class SecondeCrudController extends AbstractCrudController
{
    private SecondeRepository $etudiantRepository;

    public function __construct(SecondeRepository $etudiantRepository)
    {
        $this->etudiantRepository = $etudiantRepository;
    }

    #[Route('/pdf_seconde', name: 'app_pdf_seconde')]
    public function pdfAction(PdfService $pdfService)
    {
        $secondes = $this->etudiantRepository->findAll();
        $html = $this->render('pdf/seconde_pdf.html.twig', ['etudiants' => $secondes]);
        header("Content-type: application/pdf",true,200);
        $pdfService->showPdfFile($html,"seconde.pdf");

        return $html;
    }

    public static function getEntityFqcn(): string
    {
        return Seconde::class;
    }

    public function configureFields(string $pageName): iterable
    {
           yield AssociationField::new('nmat')->setCssClass("w-50");
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
           yield NumberField::new('total')->setDisabled(true)->setCssClass("w-50");
           yield NumberField::new('Moy')->setCssClass("bg-info")->onlyOnIndex();
    }
    public function configureActions(Actions $actions): Actions

    {
        return $actions
            ->update(Crud::PAGE_INDEX,Action::NEW,function (Action $action){
                return $action->addCssClass('btn btn-success')->setLabel('Ajouter')->setIcon("fas fa-plus");
            })
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::DELETE)
            ->add(Crud::PAGE_INDEX, Action::new("generate_pdf",'generer pdf' ,'fas fa-save')->linkToRoute('app_pdf_seconde'));
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityLabelInPlural("Notes seconde")
            ->setEntityLabelInSingular("Notes seconde");
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters->add('nmat')
            ->add('total');
    }

}
