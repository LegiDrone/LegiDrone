<?php

/* GestionFichiersBundle:Fichier:index.html.twig */
class __TwigTemplate_a4e04265b4b3a48086d4933f9ec181b956b285743fe0fc8f54472c802fd7b8ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "GestionFichiersBundle:Fichier:index.html.twig", 1);
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
        $__internal_112421beb627977defbd01e5e721f8e24c14ea90415a0c7bbff227d4b036a73d = $this->env->getExtension("native_profiler");
        $__internal_112421beb627977defbd01e5e721f8e24c14ea90415a0c7bbff227d4b036a73d->enter($__internal_112421beb627977defbd01e5e721f8e24c14ea90415a0c7bbff227d4b036a73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionFichiersBundle:Fichier:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112421beb627977defbd01e5e721f8e24c14ea90415a0c7bbff227d4b036a73d->leave($__internal_112421beb627977defbd01e5e721f8e24c14ea90415a0c7bbff227d4b036a73d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c887f460250770413e7af8459e7e2f078bc599bf5da7de13a2e26024d7f6a7a8 = $this->env->getExtension("native_profiler");
        $__internal_c887f460250770413e7af8459e7e2f078bc599bf5da7de13a2e26024d7f6a7a8->enter($__internal_c887f460250770413e7af8459e7e2f078bc599bf5da7de13a2e26024d7f6a7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Fichiers - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c887f460250770413e7af8459e7e2f078bc599bf5da7de13a2e26024d7f6a7a8->leave($__internal_c887f460250770413e7af8459e7e2f078bc599bf5da7de13a2e26024d7f6a7a8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_933410cb48ea45c4454921dae4d2cc91aa322a9f893e82f2f9ff9ceb6f0d5e7c = $this->env->getExtension("native_profiler");
        $__internal_933410cb48ea45c4454921dae4d2cc91aa322a9f893e82f2f9ff9ceb6f0d5e7c->enter($__internal_933410cb48ea45c4454921dae4d2cc91aa322a9f893e82f2f9ff9ceb6f0d5e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <h1>Liste des fichiers</h1>

<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Liste des fichiers</h4>
        </div>
        <div class=\"pull-right\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_fichier_new");
        echo "\" class=\"btn btn-primary btn-block btn-flat\">
                Ajouter un nouveau fichier
            </a>
        </div>
    </div>
    <div class=\"box-body\">
        <table class=\"table table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Extension</th>
                <th>Auteur</th>
                <th>Taille</th>
                <th>Datevaliditee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "            <tr>
                <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fichier_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                <td>.";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "extension", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["entity"], "taille", array()) / 1000), 1, "ceil"), "html", null, true);
            echo " Mo</td>
                <td>";
            // line 54
            if ($this->getAttribute($context["entity"], "dateValiditee", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateValiditee", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fichier_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-eye-open\" title=\"Voir le fichier\"></i>
                    </a>
                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fichier_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-edit\" title=\"Editer le fichier\"></i>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    </table>
    </div>
</div>
    ";
        
        $__internal_933410cb48ea45c4454921dae4d2cc91aa322a9f893e82f2f9ff9ceb6f0d5e7c->leave($__internal_933410cb48ea45c4454921dae4d2cc91aa322a9f893e82f2f9ff9ceb6f0d5e7c_prof);

    }

    public function getTemplateName()
    {
        return "GestionFichiersBundle:Fichier:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 65,  167 => 59,  161 => 56,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  132 => 49,  129 => 48,  125 => 47,  103 => 28,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
