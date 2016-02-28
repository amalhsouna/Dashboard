<?php

namespace Suivi\SuiviBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RecetteForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('date1','date', array(
            'widget' => 'single_text',
            'input' => 'datetime',
            'format' => 'yyyy-MM-dd',
            'attr' => array('class' => 'date'),
        ))
            ->add('date2','date', array(
                'widget' => 'single_text',
                'input' => 'datetime',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'date'),
            ));

    }
    

    public function getName()
    {
        return 'formdate';
    }
}
