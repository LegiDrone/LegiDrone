<?php

/* PolytechEcommerceBundle:Produits:Panier.html.twig */
class __TwigTemplate_32cbefd6819d3fb60cdc01c8dd4dec2616be3560fe242b2712eb01a0fd17e9f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "PolytechEcommerceBundle:Produits:Panier.html.twig", 1);
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
        $__internal_dd4b948bbf99accce3a9ead8490188fd779cc776d155f054c772927666e57091 = $this->env->getExtension("native_profiler");
        $__internal_dd4b948bbf99accce3a9ead8490188fd779cc776d155f054c772927666e57091->enter($__internal_dd4b948bbf99accce3a9ead8490188fd779cc776d155f054c772927666e57091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:Panier.html.twig"));

        // line 7
        $context["totalHT"] = 0;
        // line 8
        $context["totalTTC"] = 0;
        // line 9
        $context["refTva"] = array();
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 12
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "getTvaId", array(), "method"), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd4b948bbf99accce3a9ead8490188fd779cc776d155f054c772927666e57091->leave($__internal_dd4b948bbf99accce3a9ead8490188fd779cc776d155f054c772927666e57091_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed880230901e9ab1cfd11ccc36ba918e493dc3b8eb4b2dee4160676256cd786f = $this->env->getExtension("native_profiler");
        $__internal_ed880230901e9ab1cfd11ccc36ba918e493dc3b8eb4b2dee4160676256cd786f->enter($__internal_ed880230901e9ab1cfd11ccc36ba918e493dc3b8eb4b2dee4160676256cd786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ed880230901e9ab1cfd11ccc36ba918e493dc3b8eb4b2dee4160676256cd786f->leave($__internal_ed880230901e9ab1cfd11ccc36ba918e493dc3b8eb4b2dee4160676256cd786f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d840d6309716ffb04031bd0fd54a1035de5a98f4374ff5587c027161471e950 = $this->env->getExtension("native_profiler");
        $__internal_2d840d6309716ffb04031bd0fd54a1035de5a98f4374ff5587c027161471e950->enter($__internal_2d840d6309716ffb04031bd0fd54a1035de5a98f4374ff5587c027161471e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "    <div class=\"alert alert-success\">
        ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
<h2>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
<div class=\"box box-info\">
    <div class=\"box-header with-border\">
      <h3 class=\"box-title\">Détails du panier</h3>
      <div class=\"box-tools pull-right\">
      </div>
    </div><!-- /.box-header -->
    
    <div class=\"box-body\">
      <div class=\"table-responsive\">
        <table class=\"table no-margin\">
          <thead>
            <tr>
              <th>Référence</th>
              <th>Quantité</th>
              <th>Prix unitaire</th>
              <th>Total</th>
            </tr>
          </thead>
            <tbody>
                ";
        // line 43
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 44
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 48
        echo "                    
                    ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 50
            echo "                    <tr>
                        <form action=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_AjouterPanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                </select>&nbsp;
                                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_SupprimerPanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                            </td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                        </form>
                    </tr>
                    ";
            // line 65
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 66
            echo "                    ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "getTvaId", array(), "method"), "multiplicate", array())));
            // line 67
            echo "                    ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "getTvaId", array(), "method"), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "getTvaId", array(), "method"), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "getTvaId", array(), "method"), "multiplicate", array())))));
            // line 68
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </tbody>
          </table>
          
        </div>
            
        ";
        // line 74
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 75
            echo "        <dl class=\"dl-horizontal pull-right\">
            <dt>Total HT :</dt><dd>";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " €</dd>

            ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 79
                echo "                <dt>TVA (";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ") :</dt><dd>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo " €</dd>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
            <dt>Total TTC :</dt><dd>";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " €</dd>
        </dl>
        ";
        }
        // line 85
        echo "    </div>
    <div class=\"box-footer\">
        <div class=\"pull-left\">
          <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("polytech_ecommerce_Produits");
        echo "\" class=\"btn btn-block btn-primary\">Continuer mes achats</a>
        </div>
        ";
        // line 90
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 91
            echo "        <div class=\"pull-right\">
          <a href=\"";
            // line 92
            echo $this->env->getExtension('routing')->getPath("polytech_ecommerce_Livraison");
            echo "\" class=\"btn btn-block btn-success\">Valider mon panier</a>
        </div>
        ";
        }
        // line 95
        echo "    </div>
</div>


";
        
        $__internal_2d840d6309716ffb04031bd0fd54a1035de5a98f4374ff5587c027161471e950->leave($__internal_2d840d6309716ffb04031bd0fd54a1035de5a98f4374ff5587c027161471e950_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Produits:Panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 95,  256 => 92,  253 => 91,  251 => 90,  246 => 88,  241 => 85,  235 => 82,  232 => 81,  221 => 79,  217 => 78,  212 => 76,  209 => 75,  207 => 74,  200 => 69,  194 => 68,  191 => 67,  188 => 66,  186 => 65,  180 => 62,  176 => 61,  171 => 59,  168 => 58,  153 => 56,  149 => 55,  143 => 52,  139 => 51,  136 => 50,  132 => 49,  129 => 48,  123 => 44,  121 => 43,  98 => 23,  95 => 22,  86 => 19,  83 => 18,  79 => 17,  76 => 16,  70 => 15,  58 => 4,  52 => 3,  45 => 1,  39 => 12,  35 => 11,  33 => 9,  31 => 8,  29 => 7,  11 => 1,);
    }
}
