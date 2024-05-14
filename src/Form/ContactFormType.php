<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options):void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-3xl outline-none',
                    'placeholder' => 'Enter your name'
                ),
                'label' => false,
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-3xl outline-none',
                    'placeholder' => 'Enter your email'
                ),
                'label' => false,
                'required' => true
            
            ])
            ->add('message', TextareaType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-3xl outline-none',
                    'placeholder' => 'Enter your message'
                ),
                'label' => false,
                'required' => true
            ])

        ;

     
    }

    public function configureOptions(OptionsResolver $resolver):void
    {
        $resolver->setDefaults([
            
        ]);
    }
}
