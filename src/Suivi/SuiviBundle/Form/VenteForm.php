<?php

namespace Suivi\SuiviBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Suivi\SuiviBundle\Entity\VentesRepository;
use Suivi\SuiviBundle\Entity\OffresRepository;

class VenteForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('date', 'date', array(
                'widget' => 'single_text',
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'date'),
            )
        )
           
           ->add('offres', 'entity', array(
                
                
                'class' => 'SuiviVenteBundle:Offres'
                , 'property' => 'Nom'
            
             
            ))
                     ->add('quantite');

    }
    

    public function getName()
    {
        return 'form';
    }
}
