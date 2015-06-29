<?php

/* PolytechUserBundle:Admin:new.html.twig */
class __TwigTemplate_5d5386f6228dcb5d2b00ebd7bece3f31ad7b044fbe95366da6d2ae4c89a2deed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechUserBundle:Admin:new.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PolytechProjetCoBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c86555d6f8ff8ed44c8a2a45bc81aea659b24f67be52b525d6feb34cc8cc72c8 = $this->env->getExtension("native_profiler");
        $__internal_c86555d6f8ff8ed44c8a2a45bc81aea659b24f67be52b525d6feb34cc8cc72c8->enter($__internal_c86555d6f8ff8ed44c8a2a45bc81aea659b24f67be52b525d6feb34cc8cc72c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:Admin:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c86555d6f8ff8ed44c8a2a45bc81aea659b24f67be52b525d6feb34cc8cc72c8->leave($__internal_c86555d6f8ff8ed44c8a2a45bc81aea659b24f67be52b525d6feb34cc8cc72c8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2252038f83e3e783affcc94bb84a32b5ac57a26e1d10389f2725d64a237ef4f5 = $this->env->getExtension("native_profiler");
        $__internal_2252038f83e3e783affcc94bb84a32b5ac57a26e1d10389f2725d64a237ef4f5->enter($__internal_2252038f83e3e783affcc94bb84a32b5ac57a26e1d10389f2725d64a237ef4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2252038f83e3e783affcc94bb84a32b5ac57a26e1d10389f2725d64a237ef4f5->leave($__internal_2252038f83e3e783affcc94bb84a32b5ac57a26e1d10389f2725d64a237ef4f5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b02e402ef71f737a73593cadfc8765c0ec814d114a60ece5673ab684b1c93370 = $this->env->getExtension("native_profiler");
        $__internal_b02e402ef71f737a73593cadfc8765c0ec814d114a60ece5673ab684b1c93370->enter($__internal_b02e402ef71f737a73593cadfc8765c0ec814d114a60ece5673ab684b1c93370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "    <div class=\"alert alert-success\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "    <div class=\"alert alert-errors\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
  <h2>Nouvel utilisateur</h2>

<div class=\"box\">
    <div class=\"box-body\">
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    
    </div>
</div>

        <div class=\"pull-left\">
    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
</div>
";
        
        $__internal_b02e402ef71f737a73593cadfc8765c0ec814d114a60ece5673ab684b1c93370->leave($__internal_b02e402ef71f737a73593cadfc8765c0ec814d114a60ece5673ab684b1c93370_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:Admin:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  99 => 25,  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
