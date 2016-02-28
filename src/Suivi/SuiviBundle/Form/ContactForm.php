<?php

namespace Suivi\SuiviBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class ContactForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

            $builder
                ->add('Nom')
                ->add('Prenom')
                ->add('Email')
                ->add('Nomentreprise')
		->add('TypeContact')
		->add('siteweb')
                ->add('tel') 
		->add('adresse')
		->add('image', new ImageForm(),array('data_class' => 'Suivi\SuiviBundle\Entity\Image','label'=>'Logo'))
  
   ;
    }
    

    public function getName()
    {
        return 'form1';
    }
}
