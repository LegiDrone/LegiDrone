<?php

/* PolytechUserBundle:Admin:index.html.twig */
class __TwigTemplate_372605b00ba135b678a43c15fd6cfa30bb5e7ebf0f0ceee87cd69dc4aa27170b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechUserBundle:Admin:index.html.twig", 2);
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
        $__internal_cb86d88e2df0269e4d32a96727111c35449c72769c7420b5adc6c5d277cb4b4e = $this->env->getExtension("native_profiler");
        $__internal_cb86d88e2df0269e4d32a96727111c35449c72769c7420b5adc6c5d277cb4b4e->enter($__internal_cb86d88e2df0269e4d32a96727111c35449c72769c7420b5adc6c5d277cb4b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb86d88e2df0269e4d32a96727111c35449c72769c7420b5adc6c5d277cb4b4e->leave($__internal_cb86d88e2df0269e4d32a96727111c35449c72769c7420b5adc6c5d277cb4b4e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f99cf96406f194e6280cdf0ca0460e1d0c29b52cd31dda74228ec75213de602 = $this->env->getExtension("native_profiler");
        $__internal_0f99cf96406f194e6280cdf0ca0460e1d0c29b52cd31dda74228ec75213de602->enter($__internal_0f99cf96406f194e6280cdf0ca0460e1d0c29b52cd31dda74228ec75213de602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0f99cf96406f194e6280cdf0ca0460e1d0c29b52cd31dda74228ec75213de602->leave($__internal_0f99cf96406f194e6280cdf0ca0460e1d0c29b52cd31dda74228ec75213de602_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_97b8042671f4aa2ea6f5ccc116f1920b445768e4c70b571dee6ed0b16288a777 = $this->env->getExtension("native_profiler");
        $__internal_97b8042671f4aa2ea6f5ccc116f1920b445768e4c70b571dee6ed0b16288a777->enter($__internal_97b8042671f4aa2ea6f5ccc116f1920b445768e4c70b571dee6ed0b16288a777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
  <h2>Utilisateurs</h2>
<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Liste des utilisateurs</h4>
        </div>
        <div class=\"pull-right\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_user_new");
        echo "\" class=\"btn btn-primary btn-block btn-flat\">
                Créer un nouvel utilisateur
            </a>
        </div>
    </div>
    <div class=\"box-body\">
        
        <table class=\"table table-responsive\">
            <thead>
                <tr>
                    <th>Nom d'utilisateur</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Numrue</th>
                    <th>Nomrue</th>
                    <th>Cp</th>
                    <th>Ville</th>
                    <th>Civilite</th>
                    <th>Dateinscription</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 52
            echo "                <tr>
                    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numrue", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomrue", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cp", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ville", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "civilite", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            if ($this->getAttribute($context["entity"], "dateinscription", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateinscription", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-eye-open\" title=\"Voir le profil\"></i>
                        </a>
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"Editer le profil\">
                            <i class=\"glyphicon glyphicon-edit\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </tbody>
        </table>
    </div>
</div>

";
        
        $__internal_97b8042671f4aa2ea6f5ccc116f1920b445768e4c70b571dee6ed0b16288a777->leave($__internal_97b8042671f4aa2ea6f5ccc116f1920b445768e4c70b571dee6ed0b16288a777_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  182 => 66,  176 => 63,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  149 => 56,  145 => 55,  141 => 54,  135 => 53,  132 => 52,  128 => 51,  102 => 28,  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
