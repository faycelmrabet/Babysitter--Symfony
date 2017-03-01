<?php

namespace Bs\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomevenement')
            ->add('lieuevenement')
            ->add('dateevenement')
            ->add('organisateur')
            ->add('nbrevisiteur')
            ->add('file')
            ->getForm()
            ->add('Modifier','submit');
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bs\FrontOfficeBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_babybundle_evenement';
    }
}
