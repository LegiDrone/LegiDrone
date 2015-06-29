<?php

/* PolytechEcommerceBundle:Paiement:virement.html.twig */
class __TwigTemplate_e3288c25123d4f6ed673cd6eba79bb6c838805f11c93526e10c091e89b9323fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "PolytechEcommerceBundle:Paiement:virement.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PolytechProjetCoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172e41dc7e28f54e7941c1d96ad092498cf757646bb367c14254ecc902ca6699 = $this->env->getExtension("native_profiler");
        $__internal_172e41dc7e28f54e7941c1d96ad092498cf757646bb367c14254ecc902ca6699->enter($__internal_172e41dc7e28f54e7941c1d96ad092498cf757646bb367c14254ecc902ca6699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Paiement:virement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172e41dc7e28f54e7941c1d96ad092498cf757646bb367c14254ecc902ca6699->leave($__internal_172e41dc7e28f54e7941c1d96ad092498cf757646bb367c14254ecc902ca6699_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_81d9867c8c29847530b7b5df73fce58528e11057c1cfe40171a2cd2c90612adf = $this->env->getExtension("native_profiler");
        $__internal_81d9867c8c29847530b7b5df73fce58528e11057c1cfe40171a2cd2c90612adf->enter($__internal_81d9867c8c29847530b7b5df73fce58528e11057c1cfe40171a2cd2c90612adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "    <div class=\"alert alert-success\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "    <div class=\"alert alert-errors\">
        ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
<h2>Paiement par virement</h2>

<div class=\"box box-info\">
    <div class=\"box-header with-border\">
      <h3 class=\"box-title\">Informations</h3>
      <div class=\"box-tools pull-right\">
      </div>
    </div><!-- /.box-header -->
    <div class=\"box-body\">
        <p>La commande sera valider seulement après réception du virement</p>
        <p>Pour payer par virement, veuillez entrer les informations suivante :</p>
    </div>
</div>


";
        
        $__internal_81d9867c8c29847530b7b5df73fce58528e11057c1cfe40171a2cd2c90612adf->leave($__internal_81d9867c8c29847530b7b5df73fce58528e11057c1cfe40171a2cd2c90612adf_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Paiement:virement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  66 => 13,  63 => 12,  59 => 11,  50 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
