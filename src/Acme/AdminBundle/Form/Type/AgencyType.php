<?php

// src/Acme/TaskBundle/Form/Type/TaskType.php
namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AgencyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => 'Nombre del grupo:',
                'label_attr' => array(
                /*'attr' => array(
                    'class' => 'form-control col-lg-6'
                )*/
                ),
                'attr' => array(
                    'class' => 'form-control col-lg-6'
                )
            ))
            ->add('direccion', 'text', array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('telefonoPrincipal', 'number', array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ))          
            ->add('telefonoSecundario', 'number', array(
                'required' => false,
                'attr' => array(
                    'class' => 'form-control'
                )
                ))          
            ->add('fax', 'number', array(
                'required' => false,
                'attr' => array(
                    'class' => 'form-control'
                )
                ))          
            ->add('email', 'email', array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('contacto', 'text', array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ))          
            ->add('save', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-lg btn-success'
                )
            ))
        ;
    }

    public function getName()
    {
        return 'agency';
    }
}