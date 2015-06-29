<?php

/* PolytechEcommerceBundle:Commandes:edit.html.twig */
class __TwigTemplate_0edad070548a8456f68682c04d41d612a86a5a5c1afd821d85b4a557696a1f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechEcommerceBundle:Commandes:edit.html.twig", 1);
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
        $__internal_c5d717370f4dd0db543b385ad7ce11fd2440a8275fec0bebdc773a23794526a3 = $this->env->getExtension("native_profiler");
        $__internal_c5d717370f4dd0db543b385ad7ce11fd2440a8275fec0bebdc773a23794526a3->enter($__internal_c5d717370f4dd0db543b385ad7ce11fd2440a8275fec0bebdc773a23794526a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Commandes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5d717370f4dd0db543b385ad7ce11fd2440a8275fec0bebdc773a23794526a3->leave($__internal_c5d717370f4dd0db543b385ad7ce11fd2440a8275fec0bebdc773a23794526a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ca0933ae8b04c4f2ce75f56d683c2933bb7bce4a997d30e35bde9126ec16ce0 = $this->env->getExtension("native_profiler");
        $__internal_6ca0933ae8b04c4f2ce75f56d683c2933bb7bce4a997d30e35bde9126ec16ce0->enter($__internal_6ca0933ae8b04c4f2ce75f56d683c2933bb7bce4a997d30e35bde9126ec16ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Commandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ca0933ae8b04c4f2ce75f56d683c2933bb7bce4a997d30e35bde9126ec16ce0->leave($__internal_6ca0933ae8b04c4f2ce75f56d683c2933bb7bce4a997d30e35bde9126ec16ce0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_db2ff2b8c47b269dc6a4dd0271a859cf376db1cf3314ad90cc09abd995c9a8e9 = $this->env->getExtension("native_profiler");
        $__internal_db2ff2b8c47b269dc6a4dd0271a859cf376db1cf3314ad90cc09abd995c9a8e9->enter($__internal_db2ff2b8c47b269dc6a4dd0271a859cf376db1cf3314ad90cc09abd995c9a8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<h1>Éditons des Commandes</h1>
<div class=\"box\">
    <div class=\"box-body\">
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
        <table class=\"table table-responsive\">
            <tbody>
                <tr>
                    <th><div class=\"col-sm-3 control-label\">Référence</div></th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Status"));
        echo "</th>
                    <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>   
                    <th>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "date"));
        echo "</th>
                    <td>
                       ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date", array()), 'widget');
        echo "
                    </td>
                </tr>
            </tbody>
        </table>
        <div class=\"pull-right\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Mettre à jour"));
        echo "
        </div>
        ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
    <div class=\"box-footer\">
        <div class=\"col-xs-6\">
            <div class=\"pull-center\">
                <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_commandes");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
            </div>

        </div>
        <div class=\"col-xs-6\">
            ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Supprimer"));
        echo "
            ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_db2ff2b8c47b269dc6a4dd0271a859cf376db1cf3314ad90cc09abd995c9a8e9->leave($__internal_db2ff2b8c47b269dc6a4dd0271a859cf376db1cf3314ad90cc09abd995c9a8e9_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Commandes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  169 => 59,  165 => 58,  155 => 51,  147 => 46,  142 => 44,  132 => 38,  127 => 36,  120 => 33,  116 => 32,  110 => 29,  102 => 24,  98 => 23,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
