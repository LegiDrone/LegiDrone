<?php

/* PolytechUserBundle:User:facturePDF.html.twig */
class __TwigTemplate_5e58c40013516245ae9ecc7166b6623c601984db55c45505f86d6d35c642df11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af5ec39f152b5b7baa4a54e5772b0b29648ece7e7d73312d9b70073999723547 = $this->env->getExtension("native_profiler");
        $__internal_af5ec39f152b5b7baa4a54e5772b0b29648ece7e7d73312d9b70073999723547->enter($__internal_af5ec39f152b5b7baa4a54e5772b0b29648ece7e7d73312d9b70073999723547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle:User:facturePDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<base href=\"http://";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
        echo "\">
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Facture</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 97
        echo "        
    </head>
    <body>
        <h1>LegiDrone</h1>
        <img src=\"./images/Logo/legidrone.png\" width=\"200\" height=\"200\" alt=\"caré\" />
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 115
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
                ";
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 133
            echo "                <tr>
                    <td class=\"color\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 137
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 138
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixTTC", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</td>
            </tr>
            ";
        // line 147
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 148
            echo "            <tr>
                <td width=\"110\">TVA <span class=\"color min\">";
            // line 149
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</span> :</td>
                <td width=\"100\" class=\"color\">";
            // line 150
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " </td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\"></span>
            <br />
        </div>
    </body>
</html>";
        
        $__internal_af5ec39f152b5b7baa4a54e5772b0b29648ece7e7d73312d9b70073999723547->leave($__internal_af5ec39f152b5b7baa4a54e5772b0b29648ece7e7d73312d9b70073999723547_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e76f3baff937ead6a5d6a3a55cae9c480891ce60832aeeafa5e3e8a2751db63 = $this->env->getExtension("native_profiler");
        $__internal_8e76f3baff937ead6a5d6a3a55cae9c480891ce60832aeeafa5e3e8a2751db63->enter($__internal_8e76f3baff937ead6a5d6a3a55cae9c480891ce60832aeeafa5e3e8a2751db63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link href=\"../../../../../../web/Style/Perso/PDF.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!--link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/Perso/PDF.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" /-->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/Perso/PDF.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <style>
        
h1 {
    position:absolute;
    color:#0088cc;
    font-size:50px;
}

.center {
    text-align:center;
}

.color {
    color:#0088cc;
}

.strong {
    font-weight:bold;
}
.min {
    font-size:10px;
}

img {
    position:absolute;
    top:80px;
    left:30px;
}

ul#coordonnes {
    float:left;
    margin-top:30px;
    margin-left:400px;
    list-style:none;
}

ul#coordonnes li {
    height:20px;
}

table#enTete {
    position:absolute;
    top:5px;
    right:330px;
    text-align:center;
    color: blue;
}

table#enTete h1 {
    color:#0088cc;
    font-weight:bold;
    font-size:20px;
}

table#entity {
    float:left;
    margin-top:30px;
    text-align:center;
}

table#entity td {
    height:45px;
    border-bottom:1px solid #0088cc;
}

table#total {
    float:right;
    margin-left:495px;
    border-bottom:1px solid #0088cc;
    border-right:1px solid #0088cc;
    border-left:1px solid #0088cc;
}

table#total td {
    height:20px;
}

#footer { 
    position:absolute;
    bottom:0px;width:100%;
    text-align:center;
    line-height:25px;
}
        
        </style>
        ";
        
        $__internal_8e76f3baff937ead6a5d6a3a55cae9c480891ce60832aeeafa5e3e8a2751db63->leave($__internal_8e76f3baff937ead6a5d6a3a55cae9c480891ce60832aeeafa5e3e8a2751db63_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle:User:facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 10,  186 => 9,  183 => 8,  177 => 7,  161 => 155,  157 => 153,  148 => 150,  144 => 149,  141 => 148,  137 => 147,  132 => 145,  126 => 141,  117 => 138,  113 => 137,  109 => 136,  105 => 135,  101 => 134,  98 => 133,  94 => 132,  77 => 122,  73 => 121,  67 => 120,  60 => 116,  56 => 115,  36 => 97,  34 => 7,  26 => 2,  23 => 1,);
    }
}
