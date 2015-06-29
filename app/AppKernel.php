<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            //new Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),
            //new Sylius\Bundle\MoneyBundle\SyliusMoneyBundle(),
            //new Sylius\Bundle\OrderBundle\SyliusOrderBundle(),
            //new Sylius\Bundle\CartBundle\SyliusCartBundle(),
            
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            //Bundle généré par l'utilisateur
            new Polytech\ProjetCoBundle\PolytechProjetCoBundle(),
            new Polytech\UserBundle\PolytechUserBundle(),
			new FOS\UserBundle\FOSUserBundle(),
			new Polytech\DepartementBundle\DepartementBundle(),
            new Polytech\EcommerceBundle\PolytechEcommerceBundle(),
            new Polytech\GestionFichiersBundle\GestionFichiersBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Polytech\DronesBundle\PolytechDronesBundle(),
            new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Polytech\StatAdminBundle\PolytechStatAdminBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            //$bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
