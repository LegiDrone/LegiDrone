<?php

namespace Polytech\DronesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Polytech\GestionFichiersBundle\Form\FichierType;
use Polytech\EcommerceBundle\Form\MediaType;

class DronesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('approval')
            ->add('entreprise')
            ->add('document', new FichierType())
            ->add('media', new MediaType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Polytech\DronesBundle\Entity\Drones'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'polytech_dronesbundle_drones';
    }
}
