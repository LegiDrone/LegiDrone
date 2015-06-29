<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3de0e481503b060d6305f1efd4924deb63436b610d3c1fa6e03b3f39b9499cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PolytechProjetCoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5127be5a3f75dd9f348e3fe2da8e65222446ec94ec8db06643ee9080d7ad2537 = $this->env->getExtension("native_profiler");
        $__internal_5127be5a3f75dd9f348e3fe2da8e65222446ec94ec8db06643ee9080d7ad2537->enter($__internal_5127be5a3f75dd9f348e3fe2da8e65222446ec94ec8db06643ee9080d7ad2537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5127be5a3f75dd9f348e3fe2da8e65222446ec94ec8db06643ee9080d7ad2537->leave($__internal_5127be5a3f75dd9f348e3fe2da8e65222446ec94ec8db06643ee9080d7ad2537_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ff9e81dbeb9768cc1931ba3442e84a26411185bab5883b1c94511b7865b3a05 = $this->env->getExtension("native_profiler");
        $__internal_9ff9e81dbeb9768cc1931ba3442e84a26411185bab5883b1c94511b7865b3a05->enter($__internal_9ff9e81dbeb9768cc1931ba3442e84a26411185bab5883b1c94511b7865b3a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        // line 15
        echo "
  ";
        // line 17
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_9ff9e81dbeb9768cc1931ba3442e84a26411185bab5883b1c94511b7865b3a05->leave($__internal_9ff9e81dbeb9768cc1931ba3442e84a26411185bab5883b1c94511b7865b3a05_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd62434d6f60b8244647852a16bbb24ab85a8b5826c81a979250700fbed2be50 = $this->env->getExtension("native_profiler");
        $__internal_cd62434d6f60b8244647852a16bbb24ab85a8b5826c81a979250700fbed2be50->enter($__internal_cd62434d6f60b8244647852a16bbb24ab85a8b5826c81a979250700fbed2be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "  ";
        
        $__internal_cd62434d6f60b8244647852a16bbb24ab85a8b5826c81a979250700fbed2be50->leave($__internal_cd62434d6f60b8244647852a16bbb24ab85a8b5826c81a979250700fbed2be50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  60 => 17,  52 => 19,  49 => 17,  46 => 15,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }
}
