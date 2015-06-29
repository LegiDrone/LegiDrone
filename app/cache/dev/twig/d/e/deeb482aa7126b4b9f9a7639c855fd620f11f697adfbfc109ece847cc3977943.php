<?php

/* PolytechEcommerceBundle:Produits:ProduitDetails.html.twig */
class __TwigTemplate_deeb482aa7126b4b9f9a7639c855fd620f11f697adfbfc109ece847cc3977943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "PolytechEcommerceBundle:Produits:ProduitDetails.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PolytechProjetCoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3395989514c54f8616bdfad0c2234e0274ce07ee548e78ab8a2afaf1b0716ef7 = $this->env->getExtension("native_profiler");
        $__internal_3395989514c54f8616bdfad0c2234e0274ce07ee548e78ab8a2afaf1b0716ef7->enter($__internal_3395989514c54f8616bdfad0c2234e0274ce07ee548e78ab8a2afaf1b0716ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:ProduitDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3395989514c54f8616bdfad0c2234e0274ce07ee548e78ab8a2afaf1b0716ef7->leave($__internal_3395989514c54f8616bdfad0c2234e0274ce07ee548e78ab8a2afaf1b0716ef7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_197c685b87f17f674a4d1a4ed1b012e3b9ed5a15f87e1d6cfa9502e1c45353c8 = $this->env->getExtension("native_profiler");
        $__internal_197c685b87f17f674a4d1a4ed1b012e3b9ed5a15f87e1d6cfa9502e1c45353c8->enter($__internal_197c685b87f17f674a4d1a4ed1b012e3b9ed5a15f87e1d6cfa9502e1c45353c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_197c685b87f17f674a4d1a4ed1b012e3b9ed5a15f87e1d6cfa9502e1c45353c8->leave($__internal_197c685b87f17f674a4d1a4ed1b012e3b9ed5a15f87e1d6cfa9502e1c45353c8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_47559c6ab9cdde8163225cab35e016f651fc195da038b87a2f29375b8a56b100 = $this->env->getExtension("native_profiler");
        $__internal_47559c6ab9cdde8163225cab35e016f651fc195da038b87a2f29375b8a56b100->enter($__internal_47559c6ab9cdde8163225cab35e016f651fc195da038b87a2f29375b8a56b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h2>

<div class=\"box\">
    <div class=\"box-body\">
        <div class=\"col-md-6\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "getMediaId", array()), "AssetPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "getMediaId", array()), "name", array()), "html", null, true);
        echo "\" class=\"img-Products-Details\">
            
        </div>
        <div class=\"col-md-6\">
            <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
            <h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo " €</h4>
            <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_AjouterPanier", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
                <select name=\"qte\" class=\"span1\">
                    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </select>

                <div>
                    <button class=\"btn btn-primary\">Ajouter au panier</button>
                </div>
                
            </form>
        </div>
        
    </div>

    <!--div class=\"box-footer clearfix\">
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_Panier", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\">
            <button class=\"pull-right btn btn-primary\">Ajouter au panier <i class=\"fa fa-arrow-circle-right\"></i></button>
        </a>
    </div-->         
</div>
";
        
        $__internal_47559c6ab9cdde8163225cab35e016f651fc195da038b87a2f29375b8a56b100->leave($__internal_47559c6ab9cdde8163225cab35e016f651fc195da038b87a2f29375b8a56b100_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Produits:ProduitDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  105 => 24,  94 => 22,  90 => 21,  85 => 19,  81 => 18,  77 => 17,  68 => 13,  59 => 8,  53 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
