<?php

namespace Bs\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GarderieType extends AbstractType{
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('nomgarderie')
            ->add('description')
            ->add('tarif')
            ->add('codepostale')
            ->add('nomresponsable')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bs\FrontOfficeBundle\Entity\Garderie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_babybundle_garderie';
    }
}
