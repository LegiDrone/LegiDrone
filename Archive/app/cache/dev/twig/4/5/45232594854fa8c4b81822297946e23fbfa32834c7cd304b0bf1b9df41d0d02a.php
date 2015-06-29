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
        $__internal_883242a30ef3f8b6c3e8edaef76a6f962b59d844249c2031cdf0aed869f3a22a = $this->env->getExtension("native_profiler");
        $__internal_883242a30ef3f8b6c3e8edaef76a6f962b59d844249c2031cdf0aed869f3a22a->enter($__internal_883242a30ef3f8b6c3e8edaef76a6f962b59d844249c2031cdf0aed869f3a22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Commandes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883242a30ef3f8b6c3e8edaef76a6f962b59d844249c2031cdf0aed869f3a22a->leave($__internal_883242a30ef3f8b6c3e8edaef76a6f962b59d844249c2031cdf0aed869f3a22a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64c1a5d7a76f384c91ecda1bc06be0e7175cd09d4624a32a70e550c8a06c33d5 = $this->env->getExtension("native_profiler");
        $__internal_64c1a5d7a76f384c91ecda1bc06be0e7175cd09d4624a32a70e550c8a06c33d5->enter($__internal_64c1a5d7a76f384c91ecda1bc06be0e7175cd09d4624a32a70e550c8a06c33d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Commandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_64c1a5d7a76f384c91ecda1bc06be0e7175cd09d4624a32a70e550c8a06c33d5->leave($__internal_64c1a5d7a76f384c91ecda1bc06be0e7175cd09d4624a32a70e550c8a06c33d5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_53d95e132acf145849bc993e276002a1cf4b69f5e9c2351aacbc4fa2c5dade92 = $this->env->getExtension("native_profiler");
        $__internal_53d95e132acf145849bc993e276002a1cf4b69f5e9c2351aacbc4fa2c5dade92->enter($__internal_53d95e132acf145849bc993e276002a1cf4b69f5e9c2351aacbc4fa2c5dade92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Valider</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valider", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Reference</th>
                    <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Commande</th>
                    <td> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("admin_commandes");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_commandes_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_53d95e132acf145849bc993e276002a1cf4b69f5e9c2351aacbc4fa2c5dade92->leave($__internal_53d95e132acf145849bc993e276002a1cf4b69f5e9c2351aacbc4fa2c5dade92_prof);

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
        return array (  166 => 70,  159 => 66,  151 => 61,  135 => 48,  128 => 44,  121 => 40,  114 => 36,  107 => 32,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
