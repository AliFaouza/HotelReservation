<?php

namespace App\Form;

use App\Entity\Chambre;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prix')
            ->add('nombre',NumberType::class,[
                "attr"=>[
                    'class'=>"form-control"
                ],
                 'label'=>'Nombre_chambre',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('typechambre',ChoiceType::class,array(
                "choices"=>array(
                    'suite'=>'suite',
                    'Vue sur la mer'=>'Vue sur la mer',
                    'Chambre à grant lit'=>'Chambre à grant lit',
                    'Chambre à lit jumeaux'=>'Chambre à lit jumeaux',
                ),
                'expanded'=>true, 
                 'multiple'=>true,  
                 'label'=>'Type de chambre',
                 'label_attr'=>['class'=>'text-warning']
                 
                     ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
