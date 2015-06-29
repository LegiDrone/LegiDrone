<?php

/* PolytechUserBundle:Admin:edit.html.twig */
class __TwigTemplate_bf437893c6656f749575cbedbc417540159bbb34eb55fb9f9ff1c91c337eeadd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechUserBundle:Admin:edit.html.twig", 2);
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
        $__internal_35f9505d1227005fd2447dcd02d6b142f38dd7743e3692552ae1748e36dfa792 = $this->env->getExtension("native_profiler");
        $__internal_35f9505d1227005fd2447dcd02d6b142f38dd7743e3692552ae1748e36dfa792->enter($__internal_35f9505d1227005fd2447dcd02d6b142f38dd7743e3692552ae1748e36dfa792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:Admin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f9505d1227005fd2447dcd02d6b142f38dd7743e3692552ae1748e36dfa792->leave($__internal_35f9505d1227005fd2447dcd02d6b142f38dd7743e3692552ae1748e36dfa792_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_421d9eb6f4002c546b9ca39dcf24dd909250b63a913f315d43528fae6f584ece = $this->env->getExtension("native_profiler");
        $__internal_421d9eb6f4002c546b9ca39dcf24dd909250b63a913f315d43528fae6f584ece->enter($__internal_421d9eb6f4002c546b9ca39dcf24dd909250b63a913f315d43528fae6f584ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_421d9eb6f4002c546b9ca39dcf24dd909250b63a913f315d43528fae6f584ece->leave($__internal_421d9eb6f4002c546b9ca39dcf24dd909250b63a913f315d43528fae6f584ece_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dca8c92c79881ba402973aca027143aaa01852daf5c0049143084faacb9df3c7 = $this->env->getExtension("native_profiler");
        $__internal_dca8c92c79881ba402973aca027143aaa01852daf5c0049143084faacb9df3c7->enter($__internal_dca8c92c79881ba402973aca027143aaa01852daf5c0049143084faacb9df3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<h2>Editer un utilisateur</h2>
<div class=\"box\">
    <div class=\"box-body\">
        
    ";
        // line 26
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "register-box-body")));
        echo "

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

    <table class=\"table table-responsive\">
        <tbody>
            <tr>
                <th>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "</th>
                <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prénom"));
        echo "</th>
                <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numrue", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro de rue"));
        echo "</th>
                <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numrue", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numrue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomrue", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom de rue"));
        echo "</th>
                <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomrue", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomrue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cp", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Code Postal"));
        echo "</th>
                <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cp", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ville"));
        echo "</th>
                <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Civilité"));
        echo "</th>
                <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
            </tr>
        </tbody>
    </table>

";
        // line 64
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Mettre à jour"));
        echo "

";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
  
  ";
        // line 69
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        
    </div>
    <div class=\"box-footer\">
        <div class=\"col-xs-6\">
            <div class=\"pull-center\">
                <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
            </div>

        </div>
        <div class=\"col-xs-6\">
            ";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Supprimer"));
        echo "
            ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_dca8c92c79881ba402973aca027143aaa01852daf5c0049143084faacb9df3c7->leave($__internal_dca8c92c79881ba402973aca027143aaa01852daf5c0049143084faacb9df3c7_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:Admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 84,  227 => 83,  223 => 82,  213 => 75,  203 => 69,  198 => 66,  192 => 64,  183 => 58,  179 => 57,  172 => 54,  168 => 53,  161 => 50,  157 => 49,  150 => 46,  146 => 45,  139 => 42,  135 => 41,  128 => 38,  124 => 37,  117 => 34,  113 => 33,  105 => 28,  99 => 26,  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
