<?php

namespace Suivi\SuiviBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ImageForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'file')
        ;
    }
    public function getDefaultOptions(array $resolver)
    {
        $resolver->setDefaults( array(
            'data_class' => 'Suivi\SuiviBundle\Entity\Image',
        ));
    }
    

    public function getName()
    {
        return 'form1';
    }
}
