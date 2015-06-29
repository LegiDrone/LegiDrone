<?php

/* PolytechDronesBundle:Drones:edit.html.twig */
class __TwigTemplate_3184649d8192e9ba182b97df54c9a5f6abfb50f773a6178f6ed9cc6c86ba0a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechDronesBundle:Drones:edit.html.twig", 1);
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
        $__internal_efc343d204bc5cb7089679e0b8f6d764776fe3cb027917e6f8ad12044e57e2a1 = $this->env->getExtension("native_profiler");
        $__internal_efc343d204bc5cb7089679e0b8f6d764776fe3cb027917e6f8ad12044e57e2a1->enter($__internal_efc343d204bc5cb7089679e0b8f6d764776fe3cb027917e6f8ad12044e57e2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechDronesBundle:Drones:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc343d204bc5cb7089679e0b8f6d764776fe3cb027917e6f8ad12044e57e2a1->leave($__internal_efc343d204bc5cb7089679e0b8f6d764776fe3cb027917e6f8ad12044e57e2a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2ac5c4dea603f6f377ff807b6004b0abdd2c96a93a532739b6044a1233219f2 = $this->env->getExtension("native_profiler");
        $__internal_d2ac5c4dea603f6f377ff807b6004b0abdd2c96a93a532739b6044a1233219f2->enter($__internal_d2ac5c4dea603f6f377ff807b6004b0abdd2c96a93a532739b6044a1233219f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Drones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d2ac5c4dea603f6f377ff807b6004b0abdd2c96a93a532739b6044a1233219f2->leave($__internal_d2ac5c4dea603f6f377ff807b6004b0abdd2c96a93a532739b6044a1233219f2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b80ea85007d1bb60a7c93033824c6f2b32089b98c2ed24b373b7414a0a9f721d = $this->env->getExtension("native_profiler");
        $__internal_b80ea85007d1bb60a7c93033824c6f2b32089b98c2ed24b373b7414a0a9f721d->enter($__internal_b80ea85007d1bb60a7c93033824c6f2b32089b98c2ed24b373b7414a0a9f721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <h1>Modifier un drone</h1>

<div class=\"box\">
    <div class=\"box-body\">
        <div class=\"col-md-6\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMedia", array()), "AssetPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMedia", array()), "name", array()), "html", null, true);
        echo "\"  class=\"img-Products-Details\">
        </div>
        <div class=\"col-md-6\">
            ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                <table class=\"table table-responsive\">
                    <tbody>
                        <tr>
                            <th>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "</th>
                            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Choix de l'image"));
        echo "</th>
                            <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media", array()), "file", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media", array()), "file", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "approval", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Homologation"));
        echo "</th>
                            <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "approval", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "approval", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "document", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Fichier d'homologation"));
        echo "</th>
                            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "document", array()), "file", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "document", array()), "file", array()), 'widget');
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                <div class=\"pull-right\">
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Mettre à jour"));
        echo "
                </div>
                <div class=\"hidden\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                </div>

                ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
    </div>
    <div class=\"box-footer\">
        <div class=\"col-xs-6\">
            <div class=\"pull-center\">
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("drones");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
            </div>

        </div>
        <div class=\"col-xs-6\">
            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Supprimer"));
        echo "
            ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_b80ea85007d1bb60a7c93033824c6f2b32089b98c2ed24b373b7414a0a9f721d->leave($__internal_b80ea85007d1bb60a7c93033824c6f2b32089b98c2ed24b373b7414a0a9f721d_prof);

    }

    public function getTemplateName()
    {
        return "PolytechDronesBundle:Drones:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 71,  196 => 70,  192 => 69,  182 => 62,  173 => 56,  167 => 53,  161 => 50,  152 => 45,  148 => 44,  141 => 41,  137 => 40,  130 => 37,  126 => 36,  119 => 33,  115 => 32,  108 => 28,  100 => 25,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
