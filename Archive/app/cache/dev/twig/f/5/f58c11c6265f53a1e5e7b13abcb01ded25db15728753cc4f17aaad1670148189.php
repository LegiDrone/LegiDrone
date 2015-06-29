<?php

/* PolytechUserBundle:Pilotes:ListePilotes.html.twig */
class __TwigTemplate_f58c11c6265f53a1e5e7b13abcb01ded25db15728753cc4f17aaad1670148189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechUserBundle:Pilotes:ListePilotes.html.twig", 2);
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
        $__internal_891ea0cc84c065a038d639a6ae549bb6c84f248107c1e22132c37c1a856d02b8 = $this->env->getExtension("native_profiler");
        $__internal_891ea0cc84c065a038d639a6ae549bb6c84f248107c1e22132c37c1a856d02b8->enter($__internal_891ea0cc84c065a038d639a6ae549bb6c84f248107c1e22132c37c1a856d02b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:Pilotes:ListePilotes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891ea0cc84c065a038d639a6ae549bb6c84f248107c1e22132c37c1a856d02b8->leave($__internal_891ea0cc84c065a038d639a6ae549bb6c84f248107c1e22132c37c1a856d02b8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_28ef6d8c4037ab049e438091bb6eca01492abea9c3bea72c957875305f0b28d1 = $this->env->getExtension("native_profiler");
        $__internal_28ef6d8c4037ab049e438091bb6eca01492abea9c3bea72c957875305f0b28d1->enter($__internal_28ef6d8c4037ab049e438091bb6eca01492abea9c3bea72c957875305f0b28d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Pilotes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_28ef6d8c4037ab049e438091bb6eca01492abea9c3bea72c957875305f0b28d1->leave($__internal_28ef6d8c4037ab049e438091bb6eca01492abea9c3bea72c957875305f0b28d1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f53c0ee885f0ba69e4d541193e6953b380c6e037493f8e62f15dc99aeaefe2f = $this->env->getExtension("native_profiler");
        $__internal_4f53c0ee885f0ba69e4d541193e6953b380c6e037493f8e62f15dc99aeaefe2f->enter($__internal_4f53c0ee885f0ba69e4d541193e6953b380c6e037493f8e62f15dc99aeaefe2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<h2>Liste des pilotes</h2>
<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <h4>Pilotes</h4>
        <div class=\"pull-right\">
            <button class=\"btn btn-block btn-primary\">Ajouter</button>
        </div>
    </div>
    <div class=\"box-body\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date inscription</th>
                    <th>Validité</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan=\"5\"><center>Aucun pilote actuellement.</center></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
                


";
        
        $__internal_4f53c0ee885f0ba69e4d541193e6953b380c6e037493f8e62f15dc99aeaefe2f->leave($__internal_4f53c0ee885f0ba69e4d541193e6953b380c6e037493f8e62f15dc99aeaefe2f_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:Pilotes:ListePilotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  83 => 17,  80 => 16,  76 => 15,  67 => 12,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
