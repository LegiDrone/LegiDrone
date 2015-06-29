<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_737bfaf4ec309b1d6beb308486781a51089b2840ed5c2de0d440f8d167ef2a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_5d5badf8df4d8c12b3f0bdb4735673d3780db7939e4e8b392d4b1d0f25c157f7 = $this->env->getExtension("native_profiler");
        $__internal_5d5badf8df4d8c12b3f0bdb4735673d3780db7939e4e8b392d4b1d0f25c157f7->enter($__internal_5d5badf8df4d8c12b3f0bdb4735673d3780db7939e4e8b392d4b1d0f25c157f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5badf8df4d8c12b3f0bdb4735673d3780db7939e4e8b392d4b1d0f25c157f7->leave($__internal_5d5badf8df4d8c12b3f0bdb4735673d3780db7939e4e8b392d4b1d0f25c157f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_211888e571d9cab085ec30484d0c53a3149e2e5651e0d7c78875c9c078707c76 = $this->env->getExtension("native_profiler");
        $__internal_211888e571d9cab085ec30484d0c53a3149e2e5651e0d7c78875c9c078707c76->enter($__internal_211888e571d9cab085ec30484d0c53a3149e2e5651e0d7c78875c9c078707c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_211888e571d9cab085ec30484d0c53a3149e2e5651e0d7c78875c9c078707c76->leave($__internal_211888e571d9cab085ec30484d0c53a3149e2e5651e0d7c78875c9c078707c76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
