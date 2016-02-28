<?php

namespace Suivi\SuiviBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ProduitForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

            $builder
                ->add('nom')
                ->add('description','textarea')
                ->add('image', new ImageForm(),array('data_class' => 'Suivi\SuiviBundle\Entity\Image','label'=>'Image produit'));
    }
    

    public function getName()
    {
        return 'form1';
    }
}
