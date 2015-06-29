<?php

/* PolytechEcommerceBundle:Produits:produits.html.twig */
class __TwigTemplate_4d4293762e9c398147cbcd4affd9d91756d12623b526e4059b81fc88379bb7ef extends Twig_Template
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
        $__internal_1f572cc20e51fb6d017c7f7f47ed3b41b59ef3368a92f1a730ba7a3755b0689f = $this->env->getExtension("native_profiler");
        $__internal_1f572cc20e51fb6d017c7f7f47ed3b41b59ef3368a92f1a730ba7a3755b0689f->enter($__internal_1f572cc20e51fb6d017c7f7f47ed3b41b59ef3368a92f1a730ba7a3755b0689f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f572cc20e51fb6d017c7f7f47ed3b41b59ef3368a92f1a730ba7a3755b0689f->leave($__internal_1f572cc20e51fb6d017c7f7f47ed3b41b59ef3368a92f1a730ba7a3755b0689f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce52e62078e9efc77be3a47c1ee73d888e022360fdfbfffe5aa4c16e3e9ad024 = $this->env->getExtension("native_profiler");
        $__internal_ce52e62078e9efc77be3a47c1ee73d888e022360fdfbfffe5aa4c16e3e9ad024->enter($__internal_ce52e62078e9efc77be3a47c1ee73d888e022360fdfbfffe5aa4c16e3e9ad024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce52e62078e9efc77be3a47c1ee73d888e022360fdfbfffe5aa4c16e3e9ad024->leave($__internal_ce52e62078e9efc77be3a47c1ee73d888e022360fdfbfffe5aa4c16e3e9ad024_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b484a99254e8d29ab6d50dde7228608504593f3a0884f9e7a7a801d97ddc6f5d = $this->env->getExtension("native_profiler");
        $__internal_b484a99254e8d29ab6d50dde7228608504593f3a0884f9e7a7a801d97ddc6f5d->enter($__internal_b484a99254e8d29ab6d50dde7228608504593f3a0884f9e7a7a801d97ddc6f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <h4>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "€</h4>

                        </div>
                        <div class=\"box-footer\">
                            <div class=\"col-xs-6\">
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_ProduitDetails", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-block btn-default\">Détails</button>
                                </a>
                            </div>
                            <div class=\"col-xs-6\">
                                <a href=\"";
            // line 46
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
        // line 58
        echo "
          </div> 
          
      </div><!-- /.box-body -->
        <div class=\"box-footer\">
            ";
        // line 64
        echo "            <div class=\"navigation\">
                ";
        // line 65
        echo $this->env->getExtension('knp_pagination')->render((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        echo "
            </div>
        </div>
    </div><!-- /.box -->



";
        
        $__internal_b484a99254e8d29ab6d50dde7228608504593f3a0884f9e7a7a801d97ddc6f5d->leave($__internal_b484a99254e8d29ab6d50dde7228608504593f3a0884f9e7a7a801d97ddc6f5d_prof);

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
        return array (  150 => 65,  147 => 64,  140 => 58,  122 => 46,  114 => 41,  106 => 36,  102 => 35,  94 => 32,  87 => 28,  79 => 22,  75 => 21,  66 => 15,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
