<?php

namespace Suivi\SuiviBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ObjectifForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

             $builder->add('Objectif','text', array(
                     'required' => false))
                   ;

    }
    

    public function getName()
    {
        return 'formobj';
    }
}
