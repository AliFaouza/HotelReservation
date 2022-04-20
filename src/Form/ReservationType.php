<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
      
        $builder
            ->add('DateArrivee',DateType::class,[
                'widget'=>'single_text',
                "attr"=>[
                    'class'=>"form-control"
                ],
                'label'=>'Date de darrivée',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('DateDepart',DateType::class,[
                'widget'=>'single_text',
                "attr"=>[
                    'class'=>"form-control"
                ],
                'label'=>'Date de départ',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('Motif',ChoiceType::class,array(
                "choices"=>array(
                    'Affaire'=>'Affaire',
                    'Vaccance'=>'Vaccance',
                    'Lune de miel'=>'Lune de miel',
                    'Tourisme'=>'Tourisme',
                ),
                 'expanded'=>true,  
                 'label'=>'Motif du voyage',
                 'label_attr'=>['class'=>'text-warning']
                     ))
                
            ->add('Nombre_adulte',NumberType::class,[
                "attr"=>[
                    'class'=>"form-control"
                ],

                'label_attr'=>['class'=>'form-label']
            ])
            ->add('Nombre_Enfant',NumberType::class,[
                "attr"=>[
                    'class'=>"form-control"
                ],

                'label_attr'=>['class'=>'form-label']
            ])
        
      ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
