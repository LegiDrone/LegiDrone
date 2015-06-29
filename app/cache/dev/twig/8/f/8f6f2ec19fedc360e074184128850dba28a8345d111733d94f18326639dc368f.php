<?php

/* PolytechUserBundle::UserDropDown.html.twig */
class __TwigTemplate_8f6f2ec19fedc360e074184128850dba28a8345d111733d94f18326639dc368f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcb79f73dbab0104f09196cb220a785d16e070b6cbc1b93e66a976a5e8f91fb1 = $this->env->getExtension("native_profiler");
        $__internal_bcb79f73dbab0104f09196cb220a785d16e070b6cbc1b93e66a976a5e8f91fb1->enter($__internal_bcb79f73dbab0104f09196cb220a785d16e070b6cbc1b93e66a976a5e8f91fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle::UserDropDown.html.twig"));

        // line 1
        $context["totalProduits"] = 0;
        // line 2
        $context["panier"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method");
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 4
            $context["totalProduits"] = ((isset($context["totalProduits"]) ? $context["totalProduits"] : $this->getContext($context, "totalProduits")) + $context["produit"]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-shopping-cart\"></i>
        ";
        // line 10
        if (((isset($context["totalProduits"]) ? $context["totalProduits"] : $this->getContext($context, "totalProduits")) != 0)) {
            // line 11
            echo "      <span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, (isset($context["totalProduits"]) ? $context["totalProduits"] : $this->getContext($context, "totalProduits")), "html", null, true);
            echo "</span>
        ";
        }
        // line 13
        echo "    </a>
    <ul class=\"dropdown-menu\">
        ";
        // line 15
        if (((isset($context["totalProduits"]) ? $context["totalProduits"] : $this->getContext($context, "totalProduits")) != 0)) {
            // line 16
            echo "            ";
            if (((isset($context["totalProduits"]) ? $context["totalProduits"] : $this->getContext($context, "totalProduits")) == 1)) {
                // line 17
                echo "      <li class=\"header\">Vous avez ";
                echo twig_escape_filter($this->env, (isset($context["totalProduits"]) ? $context["totalProduits"] : $this->getContext($context, "totalProduits")), "html", null, true);
                echo " produit dans le panier</li>
            ";
            } else {
                // line 19
                echo "        <li class=\"header\">Vous avez ";
                echo twig_escape_filter($this->env, (isset($context["totalProduits"]) ? $context["totalProduits"] : $this->getContext($context, "totalProduits")), "html", null, true);
                echo " produits dans le panier</li>
        ";
            }
            // line 21
            echo "
         ";
        } else {
            // line 23
            echo "        <li class=\"header\">Votre panier est vide !</li>
        ";
        }
        // line 25
        echo "      <li class=\"footer\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("polytech_ecommerce_Panier");
        echo "\">Voir le panier</a></li>
    </ul>
  </li>
<li class=\"dropdown user user-menu\">
<!-- Menu Toggle Button -->
<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
  <!-- The user image in the navbar-->
  <span class=\"glyphicon glyphicon-user\"></span>
  <!--img src=\"../../dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\"/>
  <!-- hidden-xs hides the username on small devices so only the image appears. -->
  <span class=\"hidden-xs\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
</a>

<ul class=\"dropdown-menu\">
    <!-- User image -->
      <li class=\"user-header\">
          <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Users/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ".png\" class=\"img-circle\" alt=\"User Image\" />
        <p>
          ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " - Web Developer - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "
          <small>Dernière connexion : [à implémenter]</small>
        </p>
      </li>
    <!-- Menu Footer-->
      <li class=\"user-footer\">
        <div class=\"pull-left\">
          <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-default btn-flat\">Profil</a>
        </div>
        <div class=\"pull-right\">
          <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Déconnexion</a>
        </div>
      </li>
</ul>
</li>";
        
        $__internal_bcb79f73dbab0104f09196cb220a785d16e070b6cbc1b93e66a976a5e8f91fb1->leave($__internal_bcb79f73dbab0104f09196cb220a785d16e070b6cbc1b93e66a976a5e8f91fb1_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle::UserDropDown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  120 => 50,  108 => 43,  102 => 41,  93 => 35,  79 => 25,  75 => 23,  71 => 21,  65 => 19,  59 => 17,  56 => 16,  54 => 15,  50 => 13,  44 => 11,  42 => 10,  36 => 6,  30 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
