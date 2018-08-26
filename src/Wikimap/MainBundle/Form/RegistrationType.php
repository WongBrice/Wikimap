<?php

namespace Wikimap\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('first_name', 'text')
                ->add('last_name', 'text')
                ->add('career', 'choice', array(
                    'choices' => array(
                        'Etudiant' => 'Etudiant',
                        'Enseignant' => 'Enseignant',
                        'Actif' => 'Actif',
                        'Autre' => 'Autre',
                    )
                ))
                ->add('birthdate', 'datetime', array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => array(
                        'class' => 'flatpickr'
                    )
                ))
                ->add('address', 'text')
                ->add('city', 'text')
                ->add('postal_code', 'text')
                ->add('phone', 'text')
                ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wikimap\MainBundle\Entity\User',
        ));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'wikimap_user_registration';
    }
}
