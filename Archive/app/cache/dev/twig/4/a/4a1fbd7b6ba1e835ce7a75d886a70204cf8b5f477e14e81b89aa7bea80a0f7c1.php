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
        $__internal_f5ac1150dbcfad2755e49f2f000078f80fd9ee3e7bc9ff6431de2221906376cd = $this->env->getExtension("native_profiler");
        $__internal_f5ac1150dbcfad2755e49f2f000078f80fd9ee3e7bc9ff6431de2221906376cd->enter($__internal_f5ac1150dbcfad2755e49f2f000078f80fd9ee3e7bc9ff6431de2221906376cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Commandes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ac1150dbcfad2755e49f2f000078f80fd9ee3e7bc9ff6431de2221906376cd->leave($__internal_f5ac1150dbcfad2755e49f2f000078f80fd9ee3e7bc9ff6431de2221906376cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20b0f922d358900902cbee63e85fb49c48bd0ae1f6e13f646de22365baa929ee = $this->env->getExtension("native_profiler");
        $__internal_20b0f922d358900902cbee63e85fb49c48bd0ae1f6e13f646de22365baa929ee->enter($__internal_20b0f922d358900902cbee63e85fb49c48bd0ae1f6e13f646de22365baa929ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_20b0f922d358900902cbee63e85fb49c48bd0ae1f6e13f646de22365baa929ee->leave($__internal_20b0f922d358900902cbee63e85fb49c48bd0ae1f6e13f646de22365baa929ee_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ffa4f578dc0d8652af7530af8e3b031c52c153423581e3c6e50d9026a925ff6 = $this->env->getExtension("native_profiler");
        $__internal_1ffa4f578dc0d8652af7530af8e3b031c52c153423581e3c6e50d9026a925ff6->enter($__internal_1ffa4f578dc0d8652af7530af8e3b031c52c153423581e3c6e50d9026a925ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"pull-right\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_commandes_new");
        echo "\" class=\"btn btn-primary btn-block btn-flat\">
                Créer une nouvelle commande
            </a>
        </div>
        
    </div>
    <div class=\"box-body\">
        
        <table class=\"table table-responsive\">
        <thead>
            <tr>
                <th>Reference</th>
                <th>Valider</th>
                <th>Status</th>
                <th>Date</th>
                <th>Commande</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 49
            echo "            <tr>
                <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_commandes_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "reference", array()), "html", null, true);
            echo "</a></td>

                <td>
                    ";
            // line 53
            if (($this->getAttribute($context["entity"], "valider", array()) == 1)) {
                // line 54
                echo "                    <span class=\"label label-success\">Validé</span>
                    ";
            } else {
                // line 56
                echo "                    <span class=\"label label-danger\">Erreur</span>
                    ";
            }
            // line 58
            echo "                </td>
                
                <td>
                    ";
            // line 61
            if (($this->getAttribute($context["entity"], "getStatus", array(), "method") == 1)) {
                // line 62
                echo "                    <span class=\"label label-success\">Validé</span>
                    ";
            } elseif (($this->getAttribute(            // line 63
$context["entity"], "getStatus", array(), "method") == 2)) {
                // line 64
                echo "                    <span class=\"label label-danger\">En attente de paiement</span>
                    ";
            } elseif (($this->getAttribute(            // line 65
$context["entity"], "getStatus", array(), "method") == 3)) {
                // line 66
                echo "                    <span class=\"label label-warning\">En cours de traitement</span>
                    ";
            } else {
                // line 68
                echo "                    <span class=\"label label-danger\">Erreur</span>
                    ";
            }
            // line 70
            echo "                </td>
                <td>";
            // line 71
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                
                <td>Détails de la commande...</td>
                <td>
                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_commandes_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-eye-open\" title=\"Voir la commande\"></i>
                    </a>
                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_commandes_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-edit\" title=\"Editer la commande\"></i>
                    </a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </tbody>
    </table>
    </div>
</div>
    ";
        
        $__internal_1ffa4f578dc0d8652af7530af8e3b031c52c153423581e3c6e50d9026a925ff6->leave($__internal_1ffa4f578dc0d8652af7530af8e3b031c52c153423581e3c6e50d9026a925ff6_prof);

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
        return array (  207 => 85,  194 => 78,  188 => 75,  179 => 71,  176 => 70,  172 => 68,  168 => 66,  166 => 65,  163 => 64,  161 => 63,  158 => 62,  156 => 61,  151 => 58,  147 => 56,  143 => 54,  141 => 53,  133 => 50,  130 => 49,  126 => 48,  103 => 28,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
