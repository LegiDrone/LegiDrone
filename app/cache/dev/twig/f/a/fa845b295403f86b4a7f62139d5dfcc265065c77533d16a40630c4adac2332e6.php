<?php

/* PolytechDronesBundle:Drones:show.html.twig */
class __TwigTemplate_fa845b295403f86b4a7f62139d5dfcc265065c77533d16a40630c4adac2332e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechDronesBundle:Drones:show.html.twig", 2);
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
        $__internal_6bd160477430b2b90c7efc9840d6cafbdbf5d503b8d169212c476b97662420c1 = $this->env->getExtension("native_profiler");
        $__internal_6bd160477430b2b90c7efc9840d6cafbdbf5d503b8d169212c476b97662420c1->enter($__internal_6bd160477430b2b90c7efc9840d6cafbdbf5d503b8d169212c476b97662420c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechDronesBundle:Drones:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd160477430b2b90c7efc9840d6cafbdbf5d503b8d169212c476b97662420c1->leave($__internal_6bd160477430b2b90c7efc9840d6cafbdbf5d503b8d169212c476b97662420c1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_898676de046675a9e559a82ea6a72f17fcb889533386c272f47d263fd775c79a = $this->env->getExtension("native_profiler");
        $__internal_898676de046675a9e559a82ea6a72f17fcb889533386c272f47d263fd775c79a->enter($__internal_898676de046675a9e559a82ea6a72f17fcb889533386c272f47d263fd775c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Drones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_898676de046675a9e559a82ea6a72f17fcb889533386c272f47d263fd775c79a->leave($__internal_898676de046675a9e559a82ea6a72f17fcb889533386c272f47d263fd775c79a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c25313928d8f37e74cd06971e6e21042119d0cf647c2a7e235c062debe81cc = $this->env->getExtension("native_profiler");
        $__internal_43c25313928d8f37e74cd06971e6e21042119d0cf647c2a7e235c062debe81cc->enter($__internal_43c25313928d8f37e74cd06971e6e21042119d0cf647c2a7e235c062debe81cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<h1>Drones</h1>

<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Détails du drone</h4>
        </div>
    </div>
    <div class=\"box-body\">
        <div class=\"col-md-6\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMedia", array()), "AssetPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMedia", array()), "name", array()), "html", null, true);
        echo "\" class=\"img-Products-Details\">
        </div>
        <div class=\"col-md-6\">
            <table class=\"table table-responsive\">
                <tbody>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Homologation</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "approval", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"box-footer\">
        <div class=\"col-xs-4\">
            <div class=\"pull-center\">
                <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("drones");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
            </div>
            
        </div>
        <div class=\"col-xs-4\">
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("drones_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                Éditer
            </a>
        </div>
        <div class=\"col-xs-4\">
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Supprimer"));
        echo "
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_43c25313928d8f37e74cd06971e6e21042119d0cf647c2a7e235c062debe81cc->leave($__internal_43c25313928d8f37e74cd06971e6e21042119d0cf647c2a7e235c062debe81cc_prof);

    }

    public function getTemplateName()
    {
        return "PolytechDronesBundle:Drones:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 65,  158 => 64,  154 => 63,  146 => 58,  136 => 51,  124 => 42,  117 => 38,  105 => 31,  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
