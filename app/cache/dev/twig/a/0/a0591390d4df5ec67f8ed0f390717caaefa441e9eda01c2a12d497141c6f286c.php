<?php

/* PolytechDronesBundle:Drones:index.html.twig */
class __TwigTemplate_a0591390d4df5ec67f8ed0f390717caaefa441e9eda01c2a12d497141c6f286c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechDronesBundle:Drones:index.html.twig", 1);
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
        $__internal_a03dedfe2110018083b68b210c1fe3a672d6ea190260bcb5942d0d74726f7e73 = $this->env->getExtension("native_profiler");
        $__internal_a03dedfe2110018083b68b210c1fe3a672d6ea190260bcb5942d0d74726f7e73->enter($__internal_a03dedfe2110018083b68b210c1fe3a672d6ea190260bcb5942d0d74726f7e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechDronesBundle:Drones:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03dedfe2110018083b68b210c1fe3a672d6ea190260bcb5942d0d74726f7e73->leave($__internal_a03dedfe2110018083b68b210c1fe3a672d6ea190260bcb5942d0d74726f7e73_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b94cd01833051a9412c424450ffec057957e1aff70e49cda68ff682b63ca266 = $this->env->getExtension("native_profiler");
        $__internal_6b94cd01833051a9412c424450ffec057957e1aff70e49cda68ff682b63ca266->enter($__internal_6b94cd01833051a9412c424450ffec057957e1aff70e49cda68ff682b63ca266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Drones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6b94cd01833051a9412c424450ffec057957e1aff70e49cda68ff682b63ca266->leave($__internal_6b94cd01833051a9412c424450ffec057957e1aff70e49cda68ff682b63ca266_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c694e0c1fb95e43092dbb955ce3e8d2a27da604ccdb3345e19fd8e43ffc963a = $this->env->getExtension("native_profiler");
        $__internal_9c694e0c1fb95e43092dbb955ce3e8d2a27da604ccdb3345e19fd8e43ffc963a->enter($__internal_9c694e0c1fb95e43092dbb955ce3e8d2a27da604ccdb3345e19fd8e43ffc963a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "    <h1>Drones</h1>

<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Liste des drones</h4>
        </div>
        <div class=\"pull-right\">
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("drones_new");
        echo "\" class=\"btn btn-primary btn-block btn-flat\">
                Ajouter un nouveau drone
            </a>
        </div>
    </div>
    <div class=\"box-body\">
        
        <table class=\"table table-responsive\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Homologation</th>
                    <th>Actions</th>
                </tr>
            </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 44
            echo "            <tr>
                <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("drones_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "approval", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("drones_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-eye-open\" title=\"Voir le drone\"></i>
                    </a>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("drones_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-edit\" title=\"Editer le drone\"></i>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
    </div>
</div>

";
        
        $__internal_9c694e0c1fb95e43092dbb955ce3e8d2a27da604ccdb3345e19fd8e43ffc963a->leave($__internal_9c694e0c1fb95e43092dbb955ce3e8d2a27da604ccdb3345e19fd8e43ffc963a_prof);

    }

    public function getTemplateName()
    {
        return "PolytechDronesBundle:Drones:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  145 => 51,  139 => 48,  134 => 46,  128 => 45,  125 => 44,  121 => 43,  102 => 27,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
