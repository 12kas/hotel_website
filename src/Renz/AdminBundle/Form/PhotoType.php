<?php

namespace Renz\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PhotoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label'=>'Title', 'attr'=>array('class'=>'half title')))
            ->add('titlear', 'text', array('label'=>'Title Arabic', 'attr'=>array('class'=>'half title', 'style'=>'direction:rtl;')))
            ->add('file', 'file', array('label'=>'Photo', 'required'=>false, 'attr'=>array('class'=>'half title')))
            ->add('status', 'choice', array(
            	'label'=>'Photo Visibility',
            	'choices' => array(
            		'1'=>'Published',
            		'0'=>'Disabled',
            	),
            	'multiple'=>false,
            	'attr'=>array('class'=>'full')
            ))
            ->add('galleryhighlight', 'choice', array(
            		'label'=>'Gallery Highlights',
            		'choices' => array(
            				'0'=>'No',
            				'1'=>'Yes',
            		),
            		'multiple'=>false,
            		'attr'=>array('class'=>'full')
            ))
            ->add('room')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Renz\ModelBundle\Entity\Photo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'renz_modelbundle_photo';
    }
}
