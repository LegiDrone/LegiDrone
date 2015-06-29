<?php

/* PolytechUserBundle:Pilotes:ListePilotes.html.twig */
class __TwigTemplate_f58c11c6265f53a1e5e7b13abcb01ded25db15728753cc4f17aaad1670148189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechUserBundle:Pilotes:ListePilotes.html.twig", 2);
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
        $__internal_db07e2540acfa6db6572df608835fc903a24a72089da4fd213fc851c8d9c31ad = $this->env->getExtension("native_profiler");
        $__internal_db07e2540acfa6db6572df608835fc903a24a72089da4fd213fc851c8d9c31ad->enter($__internal_db07e2540acfa6db6572df608835fc903a24a72089da4fd213fc851c8d9c31ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:Pilotes:ListePilotes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db07e2540acfa6db6572df608835fc903a24a72089da4fd213fc851c8d9c31ad->leave($__internal_db07e2540acfa6db6572df608835fc903a24a72089da4fd213fc851c8d9c31ad_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9d4661742f31ee54a1f3485d9104394f3a3fc2002ae61484a82127ba26d2088 = $this->env->getExtension("native_profiler");
        $__internal_e9d4661742f31ee54a1f3485d9104394f3a3fc2002ae61484a82127ba26d2088->enter($__internal_e9d4661742f31ee54a1f3485d9104394f3a3fc2002ae61484a82127ba26d2088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Pilotes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e9d4661742f31ee54a1f3485d9104394f3a3fc2002ae61484a82127ba26d2088->leave($__internal_e9d4661742f31ee54a1f3485d9104394f3a3fc2002ae61484a82127ba26d2088_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e1db7fd4f981439c40eef6150c23f839c3e5220ebd8e8d3db1c16180457cd61 = $this->env->getExtension("native_profiler");
        $__internal_2e1db7fd4f981439c40eef6150c23f839c3e5220ebd8e8d3db1c16180457cd61->enter($__internal_2e1db7fd4f981439c40eef6150c23f839c3e5220ebd8e8d3db1c16180457cd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<h2>Liste des pilotes</h2>
<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <h4>Pilotes</h4>
        <div class=\"pull-right\">
            <button class=\"btn btn-block btn-primary\">Ajouter</button>
        </div>
    </div>
    <div class=\"box-body\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date inscription</th>
                    <th>Validité</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan=\"5\"><center>Aucun pilote actuellement.</center></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
                


";
        
        $__internal_2e1db7fd4f981439c40eef6150c23f839c3e5220ebd8e8d3db1c16180457cd61->leave($__internal_2e1db7fd4f981439c40eef6150c23f839c3e5220ebd8e8d3db1c16180457cd61_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:Pilotes:ListePilotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
