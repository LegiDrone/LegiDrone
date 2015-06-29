<?php

/* PolytechUserBundle:User:facture.html.twig */
class __TwigTemplate_76061c38b7db9fe9dc6ef2c1c80636e7dc28973d0495d9cf0d5f60e3ae2f7410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechUserBundle:User:facture.html.twig", 4);
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
        $__internal_5f93572c489a0b1f931b6b6ecd93a22f9c6b1f9b6d27a900e10511d9d0805b06 = $this->env->getExtension("native_profiler");
        $__internal_5f93572c489a0b1f931b6b6ecd93a22f9c6b1f9b6d27a900e10511d9d0805b06->enter($__internal_5f93572c489a0b1f931b6b6ecd93a22f9c6b1f9b6d27a900e10511d9d0805b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:User:facture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f93572c489a0b1f931b6b6ecd93a22f9c6b1f9b6d27a900e10511d9d0805b06->leave($__internal_5f93572c489a0b1f931b6b6ecd93a22f9c6b1f9b6d27a900e10511d9d0805b06_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_487995764e805fc3fda84f36894ba8f7ba7acfc542c1862df3e24d8b7a38ed2c = $this->env->getExtension("native_profiler");
        $__internal_487995764e805fc3fda84f36894ba8f7ba7acfc542c1862df3e24d8b7a38ed2c->enter($__internal_487995764e805fc3fda84f36894ba8f7ba7acfc542c1862df3e24d8b7a38ed2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Commandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_487995764e805fc3fda84f36894ba8f7ba7acfc542c1862df3e24d8b7a38ed2c->leave($__internal_487995764e805fc3fda84f36894ba8f7ba7acfc542c1862df3e24d8b7a38ed2c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a040506333d1781f5ff9f8a384a3276db7b048c7d92eddef33396a4cf47296d6 = $this->env->getExtension("native_profiler");
        $__internal_a040506333d1781f5ff9f8a384a3276db7b048c7d92eddef33396a4cf47296d6->enter($__internal_a040506333d1781f5ff9f8a384a3276db7b048c7d92eddef33396a4cf47296d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            
            </div>\t\t\t\t
            <div class=\"span9\">
                
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "                    <div class=\"alert alert-errors\">
                        ";
            // line 27
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                
                <h2>Commandes</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th>Statut</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 44
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 45
            echo "                                <tr>
                                    <td colspan=\"4\"><center>Aucune facture actuellement.</center></td>
                                </tr>
                            ";
        }
        // line 49
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 50
            echo "                            <tr>
                                <td>ref : ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
                                <td>
                                    ";
            // line 55
            if (($this->getAttribute($context["facture"], "getStatus", array(), "method") == 1)) {
                // line 56
                echo "                                    <span class=\"label label-success\">Validé</span>
                                    ";
            } elseif (($this->getAttribute(            // line 57
$context["facture"], "getStatus", array(), "method") == 2)) {
                // line 58
                echo "                                    <span class=\"label label-danger\">En attente de paiement</span>
                                    ";
            } elseif (($this->getAttribute(            // line 59
$context["facture"], "getStatus", array(), "method") == 3)) {
                // line 60
                echo "                                    <span class=\"label label-warning\">En cours de traitement</span>
                                    ";
            } else {
                // line 62
                echo "                                    <span class=\"label label-danger\">Erreur</span>
                                    ";
            }
            // line 64
            echo "                                </td>
                                
                                <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_user_facturesPDF", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-repeat\"></i></a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
";
        
        $__internal_a040506333d1781f5ff9f8a384a3276db7b048c7d92eddef33396a4cf47296d6->leave($__internal_a040506333d1781f5ff9f8a384a3276db7b048c7d92eddef33396a4cf47296d6_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:User:facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 69,  170 => 66,  166 => 64,  162 => 62,  158 => 60,  156 => 59,  153 => 58,  151 => 57,  148 => 56,  146 => 55,  141 => 53,  137 => 52,  133 => 51,  130 => 50,  125 => 49,  119 => 45,  117 => 44,  101 => 30,  92 => 27,  89 => 26,  84 => 25,  75 => 22,  72 => 21,  68 => 20,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
