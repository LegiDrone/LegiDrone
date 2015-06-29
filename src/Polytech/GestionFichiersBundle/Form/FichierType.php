<?php

namespace Polytech\GestionFichiersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('titre')
            ->add('extension')
            ->add('lien')
            ->add('auteur')
            ->add('taille')
            ->add('file','file')
            ->add('dateValiditee')
            ->add('departement')
            ->add('entreprise')
            ->add('drone')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Polytech\GestionFichiersBundle\Entity\Fichier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'polytech_gestionfichiersbundle_fichier';
    }
}
