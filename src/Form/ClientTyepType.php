<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientTyepType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                "attr"=>[
                    'class'=>"form-control"
                ],
                'label'=>'Nom',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('prenom',TextType::class,[
                "attr"=>[
                    'class'=>"form-control"
                ],
                'label'=>'Prenom',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('tel',NumberType::class,[
                "attr"=>[
                    'class'=>"form-control"
                ],
                'label'=>'Tel',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('email',EmailType::class,[
                "attr"=>[
                    'class'=>"form-control"
                ],
                'label'=>'Email',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('sex',ChoiceType::class,array(
                "choices"=>array(
                    'Homme'=>'Homme',
                    'Femme'=>'Femme',
                ),
                 'expanded'=>true,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
