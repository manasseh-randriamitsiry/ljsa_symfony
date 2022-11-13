<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class,[
                'attr'=>[
                    'class'=>'form-control'
                ],
                'label'=>'Email:'
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'attr'=> [
                    'class'=>'form-check-input'
                ],
                'label'=>'Accepter les termes',
                'constraints' => [
                    new IsTrue([
                        'message' => 'veuillez accepter les termes et conditions.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'label'=>'Mot de passe:',
                'attr' => ['autocomplete' => 'new-password','class'=>'form-control'],
                'invalid_message'=>'mot de passe non valide',
                'constraints' => [
                    new NotBlank([
                        'message' => 'le mot de passe est vide',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'le mot de passe doit etre superieur a {{ limit }} caractere',
                        // max length allowed by Symfony for security reasons
                        'max' => 500,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
