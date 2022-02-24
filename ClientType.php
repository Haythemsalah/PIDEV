<?php

namespace App\Form;

use App\Entity\Client;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nomC',TextType::class,[
                'label'=>'nom client',
                'attr'=>[
                    'placeholder'=>'Merci de définir votre nom',
                    'class'=>'nomC'
                ]
            ])
            ->add('prenomC',TextType::class,[
                 'label'=>'prenom client',
                 'attr'=>[
                 'placeholder'=>'Merci de définir votre prenom',
                 'class'=>'prenomC'    ]
            ])


            ->add('date_de_naiss_C',DateType::class)
            ->add('sexeC')
            ->add('adresseC')
            ->add('telephoneC')
            ->add('EmailC')
            ->add('username')
            ->add('password')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
