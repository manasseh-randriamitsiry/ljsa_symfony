<?php

namespace App\Controller;

use App\Entity\Etudiant;
use App\Form\EtudiantFormType;
use App\Repository\EtudiantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    private EtudiantRepository $etudiantRepository;
    private EntityManagerInterface $entityManagerInterface;
    public function __construct(EtudiantRepository $etudiantRepository, EntityManagerInterface $entityManagerInterface)
    {
        $this->etudiantRepository = $etudiantRepository;
        $this->entityManagerInterface = $entityManagerInterface;
    }
    #[Route('/etudiant', name: 'app_etudiant', methods: ['GET'])]
    public function index(): Response
    {
        $etudiants = $this->etudiantRepository->findAll();
        return $this->render('index.html.twig',array(
            'etudiants'=>$etudiants
        ));
    }

    #[Route('/etudiant/view/{id}', name: 'app_etudiant_view')]
    public function view($id): Response
    {
        $etudiant = $this->etudiantRepository->find($id);
        return $this->render('view.html.twig',array(
            'etudiant'=>$etudiant
        ));
    }

    #[Route('/etudiant/delete/{id}', name: 'app_etudiant_delete', methods: ['GET','DELETE'])]
    public function delete($id): Response
    {
        $etudiant = $this->etudiantRepository->find($id);
        $this->entityManagerInterface->remove($etudiant);
        $this->entityManagerInterface->flush();

        return $this->redirectToRoute('app_etudiant');
    }
    #[Route('/etudiant/update/{id}', name: 'app_etudiant_edit')]
    public function edit($id,Request $request)
    {
        $etudiant = $this->etudiantRepository->find($id);
        $form = $this->createForm(EtudiantFormType::class,$etudiant);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $updateEtudiant = $form->getData();
            $this->entityManagerInterface->persist($updateEtudiant);
            $this->entityManagerInterface->flush();
            return $this->redirectToRoute('app_etudiant');
        }
        return $this->render('update.html.twig',array(
            'etudiant'=>$etudiant,
            'form'=>$form->createView()
        ));
    }
    #[Route('/etudiant/create', name: 'app_etudiant_create')]
    public function create(Request $request): Response
    {
        $etudiant = new Etudiant();
        $form = $this->createForm(EtudiantFormType::class,$etudiant);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $newEtudiant = $form->getData();
            $this->entityManagerInterface->persist($newEtudiant);
            $this->entityManagerInterface->flush();
            return $this->redirectToRoute('app_etudiant');
        }

        return $this->render('create.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
