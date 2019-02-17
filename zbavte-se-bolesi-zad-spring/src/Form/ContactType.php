<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr'=>array('oninvalid'=>"setCustomValidity('Zadejte prosím svoje jméno :-)')"), 'label' => false ))
            ->add('email', EmailType::class, array('attr'=>array('oninvalid'=>"setCustomValidity('Zadejte prosím platnou emailovou adresu :-)')"), 'label' => false ))
            ->add('message', TextareaType::class, array('attr'=>array('oninvalid'=>"setCustomValidity('Zadejte prosím text Vaši zprávy :-)')"), 'label' => false ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
