<?php

namespace Utilisateur\UtilisateurBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // Ajoutez vos champs ici, revoilà notre champ *espace* :
           $builder->add('espace','choice', array(
					'choices'   => array('Ben Arous' => 'Ben Arous', 'Rades' => 'Rades', 'Ezzahra' => 'Ezzahra', 'Mourouj' => 'Mourouj'),
					'required'  => false))
               ->add('roles', 'collection', array(
                       'type' => 'choice',
                       'options' => array(
                           'label' => false, /* Ajoutez cette ligne */
                           'choices' => array(
                               'ROLE_CHEF' => 'Chef',
                               'ROLE_SUPER_ADMIN' => 'Administrateur',
                               'ROLE_RESPO_COMMERCIAL' => 'Resp_Commercial',
                               'ROLE_COMMERCIAL_ADMIN' => 'Commercial'
                           )
                       )
                   )
               )
           ;
           
       ;
    }            
    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'formation_user_registration';
    }
}