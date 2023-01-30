<?php

namespace App\Controller\Admin;

use App\Entity\Classe;
use App\Entity\Etudiant;
use App\Entity\Matiere;
use App\Entity\Premiere;
use App\Entity\Prof;
use App\Entity\Role;
use App\Entity\Seconde;
use App\Entity\Terminale;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Locale;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // redirection

        if ($this->getUser()==null) {
            return $this->redirectToRoute('app_login');
        }

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());


        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');

        // ...set chart data and options somehow

    }

    public function configureMenuItems(): iterable
    {
//            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

//       yield MenuItem::section('Blog');
//       yield MenuItem::subMenu('User','fa fa-user')->setSubItems([
//           MenuItem::linkToCrud('Voir', 'fa fa-eye', User::class),
//           MenuItem::linkToCrud('Ajout', 'fa fa-plus', User::class)->setAction(Crud::PAGE_NEW),
//       ]);
       yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-user', User::class);
//       yield MenuItem::linkToCrud('Role', 'fa fa-user', Role::class);
       yield MenuItem::linkToCrud('Etudiants', 'fa fa-users', Etudiant::class);

//            MenuItem::section('Users'),

        yield MenuItem::linkToCrud('Classes', 'fa fa-notes-medical', Classe::class);
        yield MenuItem::linkToCrud('Secondes', 'fa fa-dice-one', Seconde::class);
        yield MenuItem::linkToCrud('Premieres', 'fa fa-dice-two', Premiere::class);
        yield MenuItem::linkToCrud('Terminales', 'fa fa-dice-three', Terminale::class);
        yield MenuItem::linkToCrud('Profs', 'fa fa-notes-medical', Prof::class);
        yield MenuItem::linkToCrud('Matière', 'fa fa-school', Matiere::class);

    }
    public function configureCrud(): Crud
    {
        return Crud::new()
            // this defines the pagination size for all CRUD controllers
            // (each CRUD controller can override this value if needed)
            ->setPaginatorPageSize(10)
            ->setPaginatorRangeSize(4)

            // these are advanced options related to Doctrine Pagination
            // (see https://www.doctrine-project.org/projects/doctrine-orm/en/2.7/tutorials/pagination.html)
            ->setPaginatorUseOutputWalkers(true)
            ->setPaginatorFetchJoinCollection(true)
            ;
    }


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            // the name visible to end users
            ->setTitle('Gestion de note Ljsa')
            // you can include HTML contents too (e.g. to link to an image)
//            ->setTitle('<img src="..."> ACME <span class="text-small">Corp.</span>')

            // by default EasyAdmin displays a black square as its default favicon;
            // use this method to display a custom favicon: the given path is passed
            // "as is" to the Twig asset() function:
//             <link rel="shortcut icon" href="{{ asset('...') }}">
            ->setFaviconPath('favicon.svg')

            // the domain used by default is 'messages'
            ->setTranslationDomain('my-custom-domain')

            // there's no need to define the "text direction" explicitly because
            // its default value is inferred dynamically from the user locale
            ->setTextDirection('ltr')

            // set this option if you prefer the page content to span the entire
            // browser width, instead of the default design which sets a max width
            ->renderContentMaximized()

            // set this option if you prefer the sidebar (which contains the main menu)
            // to be displayed as a narrow column instead of the default expanded design
            ->renderSidebarMinimized()

            // by default, all backend URLs are generated as absolute URLs. If you
            // need to generate relative URLs instead, call this method
            ->generateRelativeUrls();
    }

}
