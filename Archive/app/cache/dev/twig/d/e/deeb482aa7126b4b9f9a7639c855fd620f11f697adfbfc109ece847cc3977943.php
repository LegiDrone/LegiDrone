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
        $__internal_19726d8efcfad029ff7afe298886567c665b12ae612270cedf75d32f391d2668 = $this->env->getExtension("native_profiler");
        $__internal_19726d8efcfad029ff7afe298886567c665b12ae612270cedf75d32f391d2668->enter($__internal_19726d8efcfad029ff7afe298886567c665b12ae612270cedf75d32f391d2668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:ProduitDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19726d8efcfad029ff7afe298886567c665b12ae612270cedf75d32f391d2668->leave($__internal_19726d8efcfad029ff7afe298886567c665b12ae612270cedf75d32f391d2668_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72c7979ed5ed13f947fe66f23c808acb93c2365884a005af94ab0c11927200d0 = $this->env->getExtension("native_profiler");
        $__internal_72c7979ed5ed13f947fe66f23c808acb93c2365884a005af94ab0c11927200d0->enter($__internal_72c7979ed5ed13f947fe66f23c808acb93c2365884a005af94ab0c11927200d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_72c7979ed5ed13f947fe66f23c808acb93c2365884a005af94ab0c11927200d0->leave($__internal_72c7979ed5ed13f947fe66f23c808acb93c2365884a005af94ab0c11927200d0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_39a91fbbce227ad772e963e8542d1ffa34340c4c208f46595b26256edae63d58 = $this->env->getExtension("native_profiler");
        $__internal_39a91fbbce227ad772e963e8542d1ffa34340c4c208f46595b26256edae63d58->enter($__internal_39a91fbbce227ad772e963e8542d1ffa34340c4c208f46595b26256edae63d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39a91fbbce227ad772e963e8542d1ffa34340c4c208f46595b26256edae63d58->leave($__internal_39a91fbbce227ad772e963e8542d1ffa34340c4c208f46595b26256edae63d58_prof);

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
