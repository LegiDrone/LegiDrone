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
        $__internal_445735a0894429e167e743f4d596af56a7b1da0c6c756a5493c1d0544c011f5a = $this->env->getExtension("native_profiler");
        $__internal_445735a0894429e167e743f4d596af56a7b1da0c6c756a5493c1d0544c011f5a->enter($__internal_445735a0894429e167e743f4d596af56a7b1da0c6c756a5493c1d0544c011f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445735a0894429e167e743f4d596af56a7b1da0c6c756a5493c1d0544c011f5a->leave($__internal_445735a0894429e167e743f4d596af56a7b1da0c6c756a5493c1d0544c011f5a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa3314c1dacb0af7c8fd9bead81ed874920888cd7695766cd0bb60868677314 = $this->env->getExtension("native_profiler");
        $__internal_bfa3314c1dacb0af7c8fd9bead81ed874920888cd7695766cd0bb60868677314->enter($__internal_bfa3314c1dacb0af7c8fd9bead81ed874920888cd7695766cd0bb60868677314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bfa3314c1dacb0af7c8fd9bead81ed874920888cd7695766cd0bb60868677314->leave($__internal_bfa3314c1dacb0af7c8fd9bead81ed874920888cd7695766cd0bb60868677314_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea8e26f02b75ef4ec83a5954cd7476695570491cee8da3b2a91fdd6d9246d14d = $this->env->getExtension("native_profiler");
        $__internal_ea8e26f02b75ef4ec83a5954cd7476695570491cee8da3b2a91fdd6d9246d14d->enter($__internal_ea8e26f02b75ef4ec83a5954cd7476695570491cee8da3b2a91fdd6d9246d14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "  ";
        
        $__internal_ea8e26f02b75ef4ec83a5954cd7476695570491cee8da3b2a91fdd6d9246d14d->leave($__internal_ea8e26f02b75ef4ec83a5954cd7476695570491cee8da3b2a91fdd6d9246d14d_prof);

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
