<?php

/* PolytechEcommerceBundle:Produits:Admin/show.html.twig */
class __TwigTemplate_9b88033eddafd54f14e9a1c31bafa4cdbaa28bd7ddba3fa5ae4d8243512f9b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechEcommerceBundle:Produits:Admin/show.html.twig", 2);
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
        $__internal_c5112c001c8b50cc2b27712176b77b72761f15c6abe0419a2680068c3d87d868 = $this->env->getExtension("native_profiler");
        $__internal_c5112c001c8b50cc2b27712176b77b72761f15c6abe0419a2680068c3d87d868->enter($__internal_c5112c001c8b50cc2b27712176b77b72761f15c6abe0419a2680068c3d87d868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:Admin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5112c001c8b50cc2b27712176b77b72761f15c6abe0419a2680068c3d87d868->leave($__internal_c5112c001c8b50cc2b27712176b77b72761f15c6abe0419a2680068c3d87d868_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf8ffe306dcdc39df7892603b1d8a468cc98c4cf7d0ad944f46ae113da013c90 = $this->env->getExtension("native_profiler");
        $__internal_bf8ffe306dcdc39df7892603b1d8a468cc98c4cf7d0ad944f46ae113da013c90->enter($__internal_bf8ffe306dcdc39df7892603b1d8a468cc98c4cf7d0ad944f46ae113da013c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bf8ffe306dcdc39df7892603b1d8a468cc98c4cf7d0ad944f46ae113da013c90->leave($__internal_bf8ffe306dcdc39df7892603b1d8a468cc98c4cf7d0ad944f46ae113da013c90_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_72f5ae19d60cdae9368fa20bf2129df69f321c11d63e76778444b0b55eaa6700 = $this->env->getExtension("native_profiler");
        $__internal_72f5ae19d60cdae9368fa20bf2129df69f321c11d63e76778444b0b55eaa6700->enter($__internal_72f5ae19d60cdae9368fa20bf2129df69f321c11d63e76778444b0b55eaa6700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<h2>Produits</h2>

<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Détails du produits</h4>
        </div>
    </div>
    <div class=\"box-body\">
        <div class=\"col-md-6\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMediaId", array()), "AssetPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMediaId", array()), "name", array()), "html", null, true);
        echo "\" class=\"img-Products-Details\">
        </div>
        <div class=\"col-md-6\">
            <table class=\"table table-responsive\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Disponible</th>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disponible", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <div class=\"box-footer\">
        <div class=\"col-xs-4\">
            <div class=\"pull-center\">
                <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("admin_produits");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
            </div>
            
        </div>
        <div class=\"col-xs-4\">
            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                Éditer
            </a>
        </div>
        <div class=\"col-xs-4\">
            ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Supprimer"));
        echo "
            ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_72f5ae19d60cdae9368fa20bf2129df69f321c11d63e76778444b0b55eaa6700->leave($__internal_72f5ae19d60cdae9368fa20bf2129df69f321c11d63e76778444b0b55eaa6700_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Produits:Admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 77,  179 => 76,  175 => 75,  167 => 70,  157 => 63,  145 => 54,  138 => 50,  131 => 46,  124 => 42,  117 => 38,  105 => 31,  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
