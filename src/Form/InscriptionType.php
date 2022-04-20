<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                "attr"=>[
                    'class'=>"form-control",
                    'placeholder'=>"entrez votre nom..."
                ],
                //'constraints'=>new Length,[
                  //'min'=>2,
                  //'max'=>30
              //  ],
                'label'=>'Nom',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('prenom',TextType::class,[
                "attr"=>[
                    'class'=>"form-control",
                    'placeholder'=>"entrez votre prenom..."
                ],
                ///'constraints'=>new Length,[
                   // 'min'=>2,
                   // 'max'=>30
                  //],
                'label'=>'Prenom',
                'label_attr'=>['class'=>'form-label']
           
            ])
            ->add('email',EmailType::class,[
                "attr"=>[
                    'class'=>"form-control",
                    'placeholder'=>"julien@gmail.com..."
                ],
                'label'=>'Email',
                'label_attr'=>['class'=>'form-label']
            ])
            ->add('motdpass',RepeatedType::class,[
                'type'=>PasswordType::class,
                'invalid_message'=>'le mot de passe et la  comfirmation doivent etre identique',
                 'label'=>'inserer votre mot de passe',
                 'required'=>true,
                'first_options'=>[
                    'label'=>'mot de pass',
                    'attr'=>[
                        'placeholder'=>"veuillez renseigner votre mot de passe....."
                    ]
                                  
            ],
                'second_options'=>[
                    'label'=>'veuillez confirmer votre mot de passe',
                     'attr'=>[
                         'placeholder'=>"veuillez confirmer votre mot de passe"
                     ]
                    ]
            
            ])
          
           
                
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
