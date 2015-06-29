<?php

/* PolytechUserBundle:Admin:new.html.twig */
class __TwigTemplate_5d5386f6228dcb5d2b00ebd7bece3f31ad7b044fbe95366da6d2ae4c89a2deed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechUserBundle:Admin:new.html.twig", 2);
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
        $__internal_a5287a0367da9f2e6d745bc0483e1d4836c078e99de3d998e2ca5dcad10e621e = $this->env->getExtension("native_profiler");
        $__internal_a5287a0367da9f2e6d745bc0483e1d4836c078e99de3d998e2ca5dcad10e621e->enter($__internal_a5287a0367da9f2e6d745bc0483e1d4836c078e99de3d998e2ca5dcad10e621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:Admin:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5287a0367da9f2e6d745bc0483e1d4836c078e99de3d998e2ca5dcad10e621e->leave($__internal_a5287a0367da9f2e6d745bc0483e1d4836c078e99de3d998e2ca5dcad10e621e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3acd195f08c4c3a997a17a62cb06cae9be54d95c562d6ca5bfd8daa51e5c33a = $this->env->getExtension("native_profiler");
        $__internal_c3acd195f08c4c3a997a17a62cb06cae9be54d95c562d6ca5bfd8daa51e5c33a->enter($__internal_c3acd195f08c4c3a997a17a62cb06cae9be54d95c562d6ca5bfd8daa51e5c33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c3acd195f08c4c3a997a17a62cb06cae9be54d95c562d6ca5bfd8daa51e5c33a->leave($__internal_c3acd195f08c4c3a997a17a62cb06cae9be54d95c562d6ca5bfd8daa51e5c33a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aef3fb54efc374d576bc6d221cd0471c7c15293a7feb5a81a8aea4c607e3afe = $this->env->getExtension("native_profiler");
        $__internal_9aef3fb54efc374d576bc6d221cd0471c7c15293a7feb5a81a8aea4c607e3afe->enter($__internal_9aef3fb54efc374d576bc6d221cd0471c7c15293a7feb5a81a8aea4c607e3afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
  <h2>Nouvel utilisateur</h2>

<div class=\"box\">
    <div class=\"box-body\">
        ";
        // line 26
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "register-box-body")));
        echo "

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <table class=\"table table-responsive\">
            <tbody>
                <tr>
                    <th>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "</th>
                    <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prénom"));
        echo "</th>
                    <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numrue", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro de rue"));
        echo "</th>
                    <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numrue", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numrue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomrue", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom de rue"));
        echo "</th>
                    <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomrue", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomrue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Code Postal"));
        echo "</th>
                    <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ville"));
        echo "</th>
                    <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Civilité"));
        echo "</th>
                    <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
            </tbody>
        </table>
        ";
        // line 62
        echo "        <div class=\"pull-right\">
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Créer l'utilisateur"));
        echo "
        </div>
  

";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 70
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>

        <div class=\"pull-left\">
    <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
</div>
";
        
        $__internal_9aef3fb54efc374d576bc6d221cd0471c7c15293a7feb5a81a8aea4c607e3afe->leave($__internal_9aef3fb54efc374d576bc6d221cd0471c7c15293a7feb5a81a8aea4c607e3afe_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:Admin:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 75,  205 => 70,  200 => 67,  193 => 63,  190 => 62,  182 => 57,  178 => 56,  171 => 53,  167 => 52,  160 => 49,  156 => 48,  149 => 45,  145 => 44,  138 => 41,  134 => 40,  127 => 37,  123 => 36,  116 => 33,  112 => 32,  105 => 28,  99 => 26,  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
