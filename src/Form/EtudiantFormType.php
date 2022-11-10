<?php

namespace App\Form;

use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('enom',TextType::class,[
                'attr'=>array(
                    'class'=>'form-control'
                ),
                'label'=>'Nom'
            ])
            ->add('eprenom',TextType::class,[
                'attr'=>array(
                    'class'=>'form-control'
                ),
                'label'=>'Prenom'
            ])
            ->add('classe',TextType::class,[
                'attr'=>array(
                    'class'=>'form-control'
                ),
                'label'=>'Classe'
            ])
            ->add('date_nais', DateType::class,[
                'attr'=>array(
                    'class'=>'form-control'
                ),
                'label'=>'Date de Naissance'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
