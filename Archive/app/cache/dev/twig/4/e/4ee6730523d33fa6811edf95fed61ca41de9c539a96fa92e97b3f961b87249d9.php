<?php

/* PolytechEcommerceBundle:Produits:produits.html.twig */
class __TwigTemplate_4ee6730523d33fa6811edf95fed61ca41de9c539a96fa92e97b3f961b87249d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "PolytechEcommerceBundle:Produits:produits.html.twig", 1);
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
        $__internal_34c2714eb22904d0881851993343f0b428c5d881c0b26c7113318a33e8a9a698 = $this->env->getExtension("native_profiler");
        $__internal_34c2714eb22904d0881851993343f0b428c5d881c0b26c7113318a33e8a9a698->enter($__internal_34c2714eb22904d0881851993343f0b428c5d881c0b26c7113318a33e8a9a698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c2714eb22904d0881851993343f0b428c5d881c0b26c7113318a33e8a9a698->leave($__internal_34c2714eb22904d0881851993343f0b428c5d881c0b26c7113318a33e8a9a698_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0f2865a719b7d0f236a3dc955247b9c80d1f05ad44855d363559d4f5ac9ce25 = $this->env->getExtension("native_profiler");
        $__internal_c0f2865a719b7d0f236a3dc955247b9c80d1f05ad44855d363559d4f5ac9ce25->enter($__internal_c0f2865a719b7d0f236a3dc955247b9c80d1f05ad44855d363559d4f5ac9ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c0f2865a719b7d0f236a3dc955247b9c80d1f05ad44855d363559d4f5ac9ce25->leave($__internal_c0f2865a719b7d0f236a3dc955247b9c80d1f05ad44855d363559d4f5ac9ce25_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_394f9491fb8dce87cda8e45a37bc2f0d2a4aed12185627d01c6c56ad948bd25b = $this->env->getExtension("native_profiler");
        $__internal_394f9491fb8dce87cda8e45a37bc2f0d2a4aed12185627d01c6c56ad948bd25b->enter($__internal_394f9491fb8dce87cda8e45a37bc2f0d2a4aed12185627d01c6c56ad948bd25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h2>Produits</h2>

<div class=\"box box-default\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Nos Produits</h3>
        
        <div class=\"pull-right\">
            Nombre total de produits : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "getTotalItemCount", array()), "html", null, true);
        echo "
        </div>
    </div>
      <div class=\"box-body\">
        
          <div class=\"row\"> 
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 22
            echo "
                
        
                  <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"box box-info\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"col-md-12\">
                                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["produit"], "getMediaId", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "getMediaId", array()), "name", array()), "html", null, true);
            echo "\" class=\"img-Products\">
                            </div>

                            <p>";
            // line 35
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["produit"], "description", array())) > 50)) ? ((twig_slice($this->env, $this->getAttribute($context["produit"], "description", array()), 0, 50) . "...")) : ($this->getAttribute($context["produit"], "description", array()))), "html", null, true);
            echo "</p>

                        </div>
                        <div class=\"box-footer\">
                            <div class=\"col-xs-6\">
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_ProduitDetails", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-block btn-default\">Détails</button>
                                </a>
                            </div>
                            <div class=\"col-xs-6\">
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_AjouterPanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-block btn-default\">Ajouter</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->

                           

          
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
          </div> 
          
      </div><!-- /.box-body -->
        <div class=\"box-footer\">
            ";
        // line 63
        echo "            <div class=\"navigation\">
                ";
        // line 64
        echo $this->env->getExtension('knp_pagination')->render((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        echo "
            </div>
        </div>
    </div><!-- /.box -->



";
        
        $__internal_394f9491fb8dce87cda8e45a37bc2f0d2a4aed12185627d01c6c56ad948bd25b->leave($__internal_394f9491fb8dce87cda8e45a37bc2f0d2a4aed12185627d01c6c56ad948bd25b_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Produits:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 64,  143 => 63,  136 => 57,  118 => 45,  110 => 40,  102 => 35,  94 => 32,  87 => 28,  79 => 22,  75 => 21,  66 => 15,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
