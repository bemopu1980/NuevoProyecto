<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{ChoiceType,HiddenType,TextType};
use Symfony\Component\Form\CallbackTransformer;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('roles',ChoiceType::class,[
                'required'=> true,
                'multiple'=> false,
                'expanded'=>false,
                'choices'=>[
                    'User'=>"ROLE_USER",
                    'Admin' =>"ROLE_ADMIN",
                ],
            ])
            ->add('password', HiddenType::class,[
                'empty_data'=>'default',
            ])
            ->add('plainPassword', TextType::class,[
                'mapped'=>false,
                'required'=>false,
            ])
        ;
        $builder->get('roles')
                ->addModelTransformer(new CallbackTransformer(
                    function($rolesArray){
                        return count($rolesArray) ? $rolesArray[0] : null;
                    },
                    function($rolesString){
                        return[$rolesString];
                    }
                ));
    
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
