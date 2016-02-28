<?php

namespace Suivi\SuiviBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContratType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('raisonSocial')
                ->add('nCin')
                ->add('adresse')
                ->add('ligne')
                ->add('dateDebut', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'yyyy-MM-dd',
                    'attr' => array('class' => 'date'),
                ))
                ->add('dateFin', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'yyyy-MM-dd',
                    'attr' => array('class' => 'date'),
                ))
                ->add('prod', 'entity', array('class' => 'SuiviVenteBundle:Produit', 'property' => 'Nom'  ))
                ->add('montantForfait')
                
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Suivi\SuiviBundle\Entity\Contrats'
        ));
    }
  /**
     * @return string
     */
    public function getName() {
        return 'contrat';
    }
}
