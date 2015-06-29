<?php

/* PolytechDronesBundle:Drones:new.html.twig */
class __TwigTemplate_8146574d1659cf4b19ad34a3683cb12d9355b9cefebe45c44c758a77e12bb56c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechDronesBundle:Drones:new.html.twig", 1);
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
        $__internal_6dbb158d8415f00f7b687f8b813b4af7764610e9debdb20b1a1f6593fa58f9a4 = $this->env->getExtension("native_profiler");
        $__internal_6dbb158d8415f00f7b687f8b813b4af7764610e9debdb20b1a1f6593fa58f9a4->enter($__internal_6dbb158d8415f00f7b687f8b813b4af7764610e9debdb20b1a1f6593fa58f9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechDronesBundle:Drones:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbb158d8415f00f7b687f8b813b4af7764610e9debdb20b1a1f6593fa58f9a4->leave($__internal_6dbb158d8415f00f7b687f8b813b4af7764610e9debdb20b1a1f6593fa58f9a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86cefe9f05a5a495bed0a625d5a900ca57a6ab62d90605ecab816de55eb0775e = $this->env->getExtension("native_profiler");
        $__internal_86cefe9f05a5a495bed0a625d5a900ca57a6ab62d90605ecab816de55eb0775e->enter($__internal_86cefe9f05a5a495bed0a625d5a900ca57a6ab62d90605ecab816de55eb0775e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Drones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_86cefe9f05a5a495bed0a625d5a900ca57a6ab62d90605ecab816de55eb0775e->leave($__internal_86cefe9f05a5a495bed0a625d5a900ca57a6ab62d90605ecab816de55eb0775e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_38fd6cbb1cffa854c3cfaad7ca1554b36a1f6a0fa5cc7cd66e5c7341f2121e9c = $this->env->getExtension("native_profiler");
        $__internal_38fd6cbb1cffa854c3cfaad7ca1554b36a1f6a0fa5cc7cd66e5c7341f2121e9c->enter($__internal_38fd6cbb1cffa854c3cfaad7ca1554b36a1f6a0fa5cc7cd66e5c7341f2121e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<h1>Nouveau Drone</h1>

<div class=\"box\">
    <div class=\"box-body\">
        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <table class=\"table table-responsive\">
                <tbody>
                    <tr>
                        <th>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Nom"));
        echo "</th>
                        <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Choix de l'image"));
        echo "</th>
                        <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), "file", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), "file", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "approval", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Homologation"));
        echo "</th>
                        <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "approval", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "approval", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "document", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Document d'Homologation"));
        echo "</th>
                        <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "document", array()), "file", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "document", array()), "file", array()), 'widget');
        echo "</td>
                    </tr>
                </tbody>
            </table>
    </div>
    <div class=\"box-footer\">
        <div class=\"pull-right\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Créer le drone"));
        echo "
        </div>
        <div class=\"pull-left\">
        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("drones");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
    </div>
    </div>
    <div class=\"hidden\">
         ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
    </div>
    
</div>

";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



";
        
        $__internal_38fd6cbb1cffa854c3cfaad7ca1554b36a1f6a0fa5cc7cd66e5c7341f2121e9c->leave($__internal_38fd6cbb1cffa854c3cfaad7ca1554b36a1f6a0fa5cc7cd66e5c7341f2121e9c_prof);

    }

    public function getTemplateName()
    {
        return "PolytechDronesBundle:Drones:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 63,  170 => 58,  161 => 52,  155 => 49,  144 => 42,  140 => 41,  133 => 38,  129 => 37,  122 => 34,  118 => 33,  111 => 30,  107 => 29,  99 => 24,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
