<?php

/* PolytechUserBundle:Admin:show.html.twig */
class __TwigTemplate_4fdc906a03fe42a5acd44e32a5a0ee9bb610e7431499c772f16aa8f7bfc8c9cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechUserBundle:Admin:show.html.twig", 2);
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
        $__internal_ba60408c12d229c4cac05b05b0239d8b5a71943cfa73a5bfbcb5789041add24f = $this->env->getExtension("native_profiler");
        $__internal_ba60408c12d229c4cac05b05b0239d8b5a71943cfa73a5bfbcb5789041add24f->enter($__internal_ba60408c12d229c4cac05b05b0239d8b5a71943cfa73a5bfbcb5789041add24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:Admin:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba60408c12d229c4cac05b05b0239d8b5a71943cfa73a5bfbcb5789041add24f->leave($__internal_ba60408c12d229c4cac05b05b0239d8b5a71943cfa73a5bfbcb5789041add24f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea2f99f92db67dc6f526870e32fc8659c1f925ad8c9a85fc1585571fef1dc799 = $this->env->getExtension("native_profiler");
        $__internal_ea2f99f92db67dc6f526870e32fc8659c1f925ad8c9a85fc1585571fef1dc799->enter($__internal_ea2f99f92db67dc6f526870e32fc8659c1f925ad8c9a85fc1585571fef1dc799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ea2f99f92db67dc6f526870e32fc8659c1f925ad8c9a85fc1585571fef1dc799->leave($__internal_ea2f99f92db67dc6f526870e32fc8659c1f925ad8c9a85fc1585571fef1dc799_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_af85aed6f81e2ef8c0af108d277cc58264f34e2c172ce80ba04f63a3d5d828dd = $this->env->getExtension("native_profiler");
        $__internal_af85aed6f81e2ef8c0af108d277cc58264f34e2c172ce80ba04f63a3d5d828dd->enter($__internal_af85aed6f81e2ef8c0af108d277cc58264f34e2c172ce80ba04f63a3d5d828dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<h2>Utilisateur</h2>

<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Détails utilisateur</h4>
        </div>
    </div>
    <div class=\"box-body\">
        <table class=\"table table-responsive\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>UserName</th>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Numrue</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numrue", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nomrue</th>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomrue", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Cp</th>
                    <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cp", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Civilite</th>
                    <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "civilite", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Dateinscription</th>
                    <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateinscription", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class=\"box-footer\">
        <div class=\"col-xs-4\">
            <div class=\"pull-center\">
                <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
            </div>
            
        </div>
        <div class=\"col-xs-4\">
            <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary \">
                Éditer
            </a>
        </div>
        <div class=\"col-xs-4\">
            ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Supprimer"));
        echo "
            ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>

";
        
        $__internal_af85aed6f81e2ef8c0af108d277cc58264f34e2c172ce80ba04f63a3d5d828dd->leave($__internal_af85aed6f81e2ef8c0af108d277cc58264f34e2c172ce80ba04f63a3d5d828dd_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:Admin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 92,  204 => 91,  200 => 90,  192 => 85,  182 => 78,  171 => 70,  164 => 66,  157 => 62,  150 => 58,  143 => 54,  136 => 50,  129 => 46,  122 => 42,  115 => 38,  108 => 34,  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
