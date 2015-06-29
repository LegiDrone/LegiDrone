<?php

/* PolytechEcommerceBundle:Produits:Admin/index.html.twig */
class __TwigTemplate_1c1d3154a7da1c90c0c70337fa02d64a1c547244e6c560ce08adb3070046ee6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechEcommerceBundle:Produits:Admin/index.html.twig", 1);
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
        $__internal_dbf00128288d07ce7adf7aac6ccf9dfaf88cc27e4a0a7ee408a1913bf310853d = $this->env->getExtension("native_profiler");
        $__internal_dbf00128288d07ce7adf7aac6ccf9dfaf88cc27e4a0a7ee408a1913bf310853d->enter($__internal_dbf00128288d07ce7adf7aac6ccf9dfaf88cc27e4a0a7ee408a1913bf310853d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf00128288d07ce7adf7aac6ccf9dfaf88cc27e4a0a7ee408a1913bf310853d->leave($__internal_dbf00128288d07ce7adf7aac6ccf9dfaf88cc27e4a0a7ee408a1913bf310853d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1b92dd9f05844699a81509ce67ea8cd5103e3b93b0045f05f22048756c0f5b7 = $this->env->getExtension("native_profiler");
        $__internal_f1b92dd9f05844699a81509ce67ea8cd5103e3b93b0045f05f22048756c0f5b7->enter($__internal_f1b92dd9f05844699a81509ce67ea8cd5103e3b93b0045f05f22048756c0f5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f1b92dd9f05844699a81509ce67ea8cd5103e3b93b0045f05f22048756c0f5b7->leave($__internal_f1b92dd9f05844699a81509ce67ea8cd5103e3b93b0045f05f22048756c0f5b7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4b988cda04f18a2118bf1735e37454662b3f97b580cd730de1c4b18e8fe306d = $this->env->getExtension("native_profiler");
        $__internal_a4b988cda04f18a2118bf1735e37454662b3f97b580cd730de1c4b18e8fe306d->enter($__internal_a4b988cda04f18a2118bf1735e37454662b3f97b580cd730de1c4b18e8fe306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "
  <h2>Produits</h2>

<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Liste des produits</h4>
        </div>
        <div class=\"pull-right\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_produits_new");
        echo "\" class=\"btn btn-primary btn-block btn-flat\">
                Créer un nouveau produit
            </a>
        </div>
    </div>
    <div class=\"box-body\">
        
        <table class=\"table table-responsive\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Disponible</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 46
            echo "                <tr>
                    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "disponible", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-eye-open\" title=\"Voir le produit\"></i>
                        </a>

                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-edit\" title=\"Editer le produit\"></i>
                        </a>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
    </div>
</div>

";
        
        $__internal_a4b988cda04f18a2118bf1735e37454662b3f97b580cd730de1c4b18e8fe306d->leave($__internal_a4b988cda04f18a2118bf1735e37454662b3f97b580cd730de1c4b18e8fe306d_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Produits:Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 62,  152 => 55,  145 => 51,  140 => 49,  136 => 48,  130 => 47,  127 => 46,  123 => 45,  103 => 28,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
