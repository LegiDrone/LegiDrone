<?php

/* PolytechEcommerceBundle:Commandes:show.html.twig */
class __TwigTemplate_45232594854fa8c4b81822297946e23fbfa32834c7cd304b0bf1b9df41d0d02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechEcommerceBundle:Commandes:show.html.twig", 1);
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
        $__internal_7c38f65a0e021b8d68fd597ade661e358c611156bd17adcf07773e01532f678f = $this->env->getExtension("native_profiler");
        $__internal_7c38f65a0e021b8d68fd597ade661e358c611156bd17adcf07773e01532f678f->enter($__internal_7c38f65a0e021b8d68fd597ade661e358c611156bd17adcf07773e01532f678f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Commandes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c38f65a0e021b8d68fd597ade661e358c611156bd17adcf07773e01532f678f->leave($__internal_7c38f65a0e021b8d68fd597ade661e358c611156bd17adcf07773e01532f678f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ee8f4283501ff2090081ac623242e9cdac9937e62fdc7a822792629bea8fb56 = $this->env->getExtension("native_profiler");
        $__internal_2ee8f4283501ff2090081ac623242e9cdac9937e62fdc7a822792629bea8fb56->enter($__internal_2ee8f4283501ff2090081ac623242e9cdac9937e62fdc7a822792629bea8fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Commandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ee8f4283501ff2090081ac623242e9cdac9937e62fdc7a822792629bea8fb56->leave($__internal_2ee8f4283501ff2090081ac623242e9cdac9937e62fdc7a822792629bea8fb56_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_811ac38638a6eb6a035ccbde0914d93d553ce5cee4f3b67ef19179ede53501aa = $this->env->getExtension("native_profiler");
        $__internal_811ac38638a6eb6a035ccbde0914d93d553ce5cee4f3b67ef19179ede53501aa->enter($__internal_811ac38638a6eb6a035ccbde0914d93d553ce5cee4f3b67ef19179ede53501aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h4>Détails du produits</h4>
        </div>
    </div>
    <div class=\"box-body\">
        <table class=\"table table-responsive\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Valider</th>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valider", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Reference</th>
                    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Commande</th>
                    <td>cmd</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class=\"box-footer\">
        <div class=\"col-xs-4\">
            <div class=\"pull-center\">
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("admin_commandes");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
            </div>
            
        </div>
        <div class=\"col-xs-4\">
            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_commandes_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                Éditer
            </a>
        </div>
        <div class=\"col-xs-4\">
            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Supprimer"));
        echo "
            ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>

";
        
        $__internal_811ac38638a6eb6a035ccbde0914d93d553ce5cee4f3b67ef19179ede53501aa->leave($__internal_811ac38638a6eb6a035ccbde0914d93d553ce5cee4f3b67ef19179ede53501aa_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Commandes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 75,  173 => 74,  169 => 73,  161 => 68,  151 => 61,  136 => 49,  129 => 45,  122 => 41,  115 => 37,  108 => 33,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
