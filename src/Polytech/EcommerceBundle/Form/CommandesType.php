<?php

namespace Polytech\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', 'choice', array(
    'choices'   => array('1' => 'Validé', '2' => 'En attente de paiement','3' => 'En cours de traitement'),'attr' => array('class'=> 'form-control')))
            ->add('date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Polytech\EcommerceBundle\Entity\Commandes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'polytech_ecommercebundle_commandes';
    }
}
