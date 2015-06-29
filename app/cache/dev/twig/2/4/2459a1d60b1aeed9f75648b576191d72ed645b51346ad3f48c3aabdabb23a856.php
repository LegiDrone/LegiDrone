<?php

/* PolytechEcommerceBundle:Produits:Panier.html.twig */
class __TwigTemplate_2459a1d60b1aeed9f75648b576191d72ed645b51346ad3f48c3aabdabb23a856 extends Twig_Template
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
        $__internal_7f34daa06596aafeb4324fc4c9b1cbbccd805639372afa37677a0356a16d32dd = $this->env->getExtension("native_profiler");
        $__internal_7f34daa06596aafeb4324fc4c9b1cbbccd805639372afa37677a0356a16d32dd->enter($__internal_7f34daa06596aafeb4324fc4c9b1cbbccd805639372afa37677a0356a16d32dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:Panier.html.twig"));

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
        
        $__internal_7f34daa06596aafeb4324fc4c9b1cbbccd805639372afa37677a0356a16d32dd->leave($__internal_7f34daa06596aafeb4324fc4c9b1cbbccd805639372afa37677a0356a16d32dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6dd84f7df9da68865c8da542b6b7e9a640acc2d83071c34aaee670ee41c4d6f = $this->env->getExtension("native_profiler");
        $__internal_e6dd84f7df9da68865c8da542b6b7e9a640acc2d83071c34aaee670ee41c4d6f->enter($__internal_e6dd84f7df9da68865c8da542b6b7e9a640acc2d83071c34aaee670ee41c4d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e6dd84f7df9da68865c8da542b6b7e9a640acc2d83071c34aaee670ee41c4d6f->leave($__internal_e6dd84f7df9da68865c8da542b6b7e9a640acc2d83071c34aaee670ee41c4d6f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c83129e6bbb2527d404aaafaf6d9b4c68468620ae18de560d20379ef9adaca63 = $this->env->getExtension("native_profiler");
        $__internal_c83129e6bbb2527d404aaafaf6d9b4c68468620ae18de560d20379ef9adaca63->enter($__internal_c83129e6bbb2527d404aaafaf6d9b4c68468620ae18de560d20379ef9adaca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c83129e6bbb2527d404aaafaf6d9b4c68468620ae18de560d20379ef9adaca63->leave($__internal_c83129e6bbb2527d404aaafaf6d9b4c68468620ae18de560d20379ef9adaca63_prof);

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
