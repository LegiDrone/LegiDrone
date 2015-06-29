<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f56ec37736f0b52359d6354368327159e6a1abc938be6d530c2e2cc60e258b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90776b5be859c877fd83a9f96fbc4c9e009fdac53bcbe1e60b3c9eeac090f7e2 = $this->env->getExtension("native_profiler");
        $__internal_90776b5be859c877fd83a9f96fbc4c9e009fdac53bcbe1e60b3c9eeac090f7e2->enter($__internal_90776b5be859c877fd83a9f96fbc4c9e009fdac53bcbe1e60b3c9eeac090f7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90776b5be859c877fd83a9f96fbc4c9e009fdac53bcbe1e60b3c9eeac090f7e2->leave($__internal_90776b5be859c877fd83a9f96fbc4c9e009fdac53bcbe1e60b3c9eeac090f7e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74c7059397e6f092b7ee090ac37801c630e26539cf3cdb430ac72b0cdd15e45e = $this->env->getExtension("native_profiler");
        $__internal_74c7059397e6f092b7ee090ac37801c630e26539cf3cdb430ac72b0cdd15e45e->enter($__internal_74c7059397e6f092b7ee090ac37801c630e26539cf3cdb430ac72b0cdd15e45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_74c7059397e6f092b7ee090ac37801c630e26539cf3cdb430ac72b0cdd15e45e->leave($__internal_74c7059397e6f092b7ee090ac37801c630e26539cf3cdb430ac72b0cdd15e45e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
