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
            ->add('valider')
            ->add('status')
            ->add('date')
            ->add('reference')
            ->add('commande')
            ->add('entreprise')
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
