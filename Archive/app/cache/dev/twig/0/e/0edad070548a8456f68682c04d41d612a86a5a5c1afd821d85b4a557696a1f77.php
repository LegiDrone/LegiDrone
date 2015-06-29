<?php

/* PolytechEcommerceBundle:Commandes:edit.html.twig */
class __TwigTemplate_0edad070548a8456f68682c04d41d612a86a5a5c1afd821d85b4a557696a1f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechEcommerceBundle:Commandes:edit.html.twig", 1);
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
        $__internal_171d0025be7c5a0a196e56ee07e2b9cb6cdbb2eb2c5431e1b8fd7c52b0f4e25f = $this->env->getExtension("native_profiler");
        $__internal_171d0025be7c5a0a196e56ee07e2b9cb6cdbb2eb2c5431e1b8fd7c52b0f4e25f->enter($__internal_171d0025be7c5a0a196e56ee07e2b9cb6cdbb2eb2c5431e1b8fd7c52b0f4e25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Commandes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_171d0025be7c5a0a196e56ee07e2b9cb6cdbb2eb2c5431e1b8fd7c52b0f4e25f->leave($__internal_171d0025be7c5a0a196e56ee07e2b9cb6cdbb2eb2c5431e1b8fd7c52b0f4e25f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_016bc3553d2d24c2dead2b947bb56e1692766e8113372e43a33564ef2c7b6c84 = $this->env->getExtension("native_profiler");
        $__internal_016bc3553d2d24c2dead2b947bb56e1692766e8113372e43a33564ef2c7b6c84->enter($__internal_016bc3553d2d24c2dead2b947bb56e1692766e8113372e43a33564ef2c7b6c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_016bc3553d2d24c2dead2b947bb56e1692766e8113372e43a33564ef2c7b6c84->leave($__internal_016bc3553d2d24c2dead2b947bb56e1692766e8113372e43a33564ef2c7b6c84_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_df069588dedaf0a6651fb30dde3cbf580e06815dc4c0388fcc58ff6e9dad22db = $this->env->getExtension("native_profiler");
        $__internal_df069588dedaf0a6651fb30dde3cbf580e06815dc4c0388fcc58ff6e9dad22db->enter($__internal_df069588dedaf0a6651fb30dde3cbf580e06815dc4c0388fcc58ff6e9dad22db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "    <div class=\"alert alert-success\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "    <div class=\"alert alert-errors\">
        ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    <h1>Commandes edit</h1>

    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_commandes");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_df069588dedaf0a6651fb30dde3cbf580e06815dc4c0388fcc58ff6e9dad22db->leave($__internal_df069588dedaf0a6651fb30dde3cbf580e06815dc4c0388fcc58ff6e9dad22db_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Commandes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 29,  103 => 25,  96 => 21,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
