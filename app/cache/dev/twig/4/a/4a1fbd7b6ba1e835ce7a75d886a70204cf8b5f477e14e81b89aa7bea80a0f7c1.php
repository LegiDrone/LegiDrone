<?php

/* PolytechEcommerceBundle:Commandes:index.html.twig */
class __TwigTemplate_4a1fbd7b6ba1e835ce7a75d886a70204cf8b5f477e14e81b89aa7bea80a0f7c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechEcommerceBundle:Commandes:index.html.twig", 1);
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
        $__internal_4962dfa966157b641bae6f93cc2f9662d914f1ee6d9eda80caee4ff63f3b6077 = $this->env->getExtension("native_profiler");
        $__internal_4962dfa966157b641bae6f93cc2f9662d914f1ee6d9eda80caee4ff63f3b6077->enter($__internal_4962dfa966157b641bae6f93cc2f9662d914f1ee6d9eda80caee4ff63f3b6077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Commandes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4962dfa966157b641bae6f93cc2f9662d914f1ee6d9eda80caee4ff63f3b6077->leave($__internal_4962dfa966157b641bae6f93cc2f9662d914f1ee6d9eda80caee4ff63f3b6077_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7deecaecd54de604884f1dc5a48a0927f81541e8dc3b100309f88eb23694c78e = $this->env->getExtension("native_profiler");
        $__internal_7deecaecd54de604884f1dc5a48a0927f81541e8dc3b100309f88eb23694c78e->enter($__internal_7deecaecd54de604884f1dc5a48a0927f81541e8dc3b100309f88eb23694c78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7deecaecd54de604884f1dc5a48a0927f81541e8dc3b100309f88eb23694c78e->leave($__internal_7deecaecd54de604884f1dc5a48a0927f81541e8dc3b100309f88eb23694c78e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_071e56cc2395585c023bc57a23282f1c9722d2800c8dbe4813119e49794f3009 = $this->env->getExtension("native_profiler");
        $__internal_071e56cc2395585c023bc57a23282f1c9722d2800c8dbe4813119e49794f3009->enter($__internal_071e56cc2395585c023bc57a23282f1c9722d2800c8dbe4813119e49794f3009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <h1>Commandes</h1>

<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Liste des commandes</h4>
        </div>
        <!--div class=\"pull-right\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_commandes_new");
        echo "\" class=\"btn btn-primary btn-block btn-flat\">
                Créer une nouvelle commande
            </a>
        </div-->
        
    </div>
    <div class=\"box-body\">
        <table class=\"table table-responsive\">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Commande</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 47
            echo "                <tr>
                    <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_commandes_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "reference", array()), "html", null, true);
            echo "</a></td>
                    <td>
                        ";
            // line 50
            if (($this->getAttribute($context["entity"], "getStatus", array(), "method") == 1)) {
                // line 51
                echo "                        <span class=\"label label-success\">Validé</span>
                        ";
            } elseif (($this->getAttribute(            // line 52
$context["entity"], "getStatus", array(), "method") == 2)) {
                // line 53
                echo "                        <span class=\"label label-danger\">En attente de paiement</span>
                        ";
            } elseif (($this->getAttribute(            // line 54
$context["entity"], "getStatus", array(), "method") == 3)) {
                // line 55
                echo "                        <span class=\"label label-warning\">En cours de traitement</span>
                        ";
            } else {
                // line 57
                echo "                        <span class=\"label label-danger\">Erreur</span>
                        ";
            }
            // line 59
            echo "                    </td>
                    <td>";
            // line 60
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>Commandes</td>
                    <td>
                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_commandes_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-eye-open\" title=\"Voir la commande\"></i>
                        </a>
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_commandes_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-edit\" title=\"Editer la commande\"></i>
                        </a>
                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_user_facturesPDF", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" title=\"Voir la facture\" >
                            <i class=\"glyphicon glyphicon-repeat\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_071e56cc2395585c023bc57a23282f1c9722d2800c8dbe4813119e49794f3009->leave($__internal_071e56cc2395585c023bc57a23282f1c9722d2800c8dbe4813119e49794f3009_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Commandes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 75,  181 => 69,  175 => 66,  169 => 63,  161 => 60,  158 => 59,  154 => 57,  150 => 55,  148 => 54,  145 => 53,  143 => 52,  140 => 51,  138 => 50,  131 => 48,  128 => 47,  124 => 46,  103 => 28,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
