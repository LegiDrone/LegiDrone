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
        $__internal_564ce12cf9fc880ecdc90547d31aa7b797859b8dea4ffadcb51f287b03a05f4d = $this->env->getExtension("native_profiler");
        $__internal_564ce12cf9fc880ecdc90547d31aa7b797859b8dea4ffadcb51f287b03a05f4d->enter($__internal_564ce12cf9fc880ecdc90547d31aa7b797859b8dea4ffadcb51f287b03a05f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:User:facture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564ce12cf9fc880ecdc90547d31aa7b797859b8dea4ffadcb51f287b03a05f4d->leave($__internal_564ce12cf9fc880ecdc90547d31aa7b797859b8dea4ffadcb51f287b03a05f4d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_edd4f616202695e66b3118567dc187fda40ecba7b7330fbc56c36542856af05d = $this->env->getExtension("native_profiler");
        $__internal_edd4f616202695e66b3118567dc187fda40ecba7b7330fbc56c36542856af05d->enter($__internal_edd4f616202695e66b3118567dc187fda40ecba7b7330fbc56c36542856af05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Commandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_edd4f616202695e66b3118567dc187fda40ecba7b7330fbc56c36542856af05d->leave($__internal_edd4f616202695e66b3118567dc187fda40ecba7b7330fbc56c36542856af05d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9fdfe4b9ab9a52d740140edd9156df8807939124c1a5c9282fdf1cc12ea7e1e = $this->env->getExtension("native_profiler");
        $__internal_b9fdfe4b9ab9a52d740140edd9156df8807939124c1a5c9282fdf1cc12ea7e1e->enter($__internal_b9fdfe4b9ab9a52d740140edd9156df8807939124c1a5c9282fdf1cc12ea7e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "    <div class=\"alert alert-success\">
        ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "    <div class=\"alert alert-errors\">
        ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

                
                <h2>Commandes</h2>
                
<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Détails des commandes</h4>
        </div>
    </div>
    <div class=\"box-body\">
        <form>
            <table class=\"table table-responsive\">
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
        // line 46
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 47
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucune facture actuellement.</center></td>
                        </tr>
                    ";
        }
        // line 51
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 52
            echo "                    <tr>
                        <td>ref : ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
                        <td>
                            ";
            // line 57
            if (($this->getAttribute($context["facture"], "getStatus", array(), "method") == 1)) {
                // line 58
                echo "                            <span class=\"label label-success\">Validé</span>
                            ";
            } elseif (($this->getAttribute(            // line 59
$context["facture"], "getStatus", array(), "method") == 2)) {
                // line 60
                echo "                            <span class=\"label label-danger\">En attente de paiement</span>
                            ";
            } elseif (($this->getAttribute(            // line 61
$context["facture"], "getStatus", array(), "method") == 3)) {
                // line 62
                echo "                            <span class=\"label label-warning\">En cours de traitement</span>
                            ";
            } else {
                // line 64
                echo "                            <span class=\"label label-danger\">Erreur</span>
                            ";
            }
            // line 66
            echo "                        </td>

                        <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_user_facturesPDF", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-repeat\"></i></a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </tbody>
            </table>
        </form>
    </div>
</div>
                 
";
        
        $__internal_b9fdfe4b9ab9a52d740140edd9156df8807939124c1a5c9282fdf1cc12ea7e1e->leave($__internal_b9fdfe4b9ab9a52d740140edd9156df8807939124c1a5c9282fdf1cc12ea7e1e_prof);

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
        return array (  180 => 71,  171 => 68,  167 => 66,  163 => 64,  159 => 62,  157 => 61,  154 => 60,  152 => 59,  149 => 58,  147 => 57,  142 => 55,  138 => 54,  134 => 53,  131 => 52,  126 => 51,  120 => 47,  118 => 46,  92 => 22,  83 => 19,  80 => 18,  76 => 17,  67 => 14,  64 => 13,  60 => 12,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
