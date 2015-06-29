<?php

/* PolytechProjetCoBundle:Layout:LeftMenu.html.twig */
class __TwigTemplate_183eefb0e12696c1c76d48184859d69ad3cf60932eaf148b2cda55d8dea055a2 extends Twig_Template
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
        $__internal_d0d2e239f94c0f3315355bb1ba8a93652ac9ec8475087a7f8e5cd79fec28c446 = $this->env->getExtension("native_profiler");
        $__internal_d0d2e239f94c0f3315355bb1ba8a93652ac9ec8475087a7f8e5cd79fec28c446->enter($__internal_d0d2e239f94c0f3315355bb1ba8a93652ac9ec8475087a7f8e5cd79fec28c446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Layout:LeftMenu.html.twig"));

        // line 1
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 2
            echo "<!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class=\"sidebar-menu\">
    <li class=\"header\">NAVIGATION</li>
    <li class=\"treeview\">
      <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("polytech_projet_co_dashboardAdmin");
            echo "\">
        <i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span>
      </a>
    </li>

    <li>
      <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("admin_user");
            echo "\">
        <i class=\"glyphicon glyphicon-user\"></i> <span>Utilisateurs</span> <small class=\"label pull-right bg-green\">new</small>
      </a>
    </li>
    <li>
      <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("admin_produits");
            echo "\">
        <i class=\"glyphicon glyphicon-euro\"></i> <span>Produits</span>
      </a>
    </li>
      <li>
      <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("admin_commandes");
            echo "\">
        <i class=\"glyphicon glyphicon-euro\"></i> <span>Commandes</span>
      </a>
    </li>
    <li class=\"treeview\">
      <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("admin_fichier");
            echo "\">
        <i class=\"fa fa-files-o\"></i>
        <span>Fichiers</span>
        <span class=\"label pull-right bg-red\">4</span>
      </a>
    </li>
  </ul>
";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PILOTE")) {
            // line 35
            echo "<!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class=\"sidebar-menu\">
    <li class=\"header\">NAVIGATION</li>
    <li class=\"treeview\">
      <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("polytech_projet_co_dashboard");
            echo "\">
        <i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span>
      </a>
    </li>
<li class=\"treeview\">
      <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("admin_fichier");
            echo "\">
        <i class=\"fa fa-files-o\"></i>
        <span>Documents</span>
      </a>
    </li>
  </ul>
";
        }
        
        $__internal_d0d2e239f94c0f3315355bb1ba8a93652ac9ec8475087a7f8e5cd79fec28c446->leave($__internal_d0d2e239f94c0f3315355bb1ba8a93652ac9ec8475087a7f8e5cd79fec28c446_prof);

    }

    public function getTemplateName()
    {
        return "PolytechProjetCoBundle:Layout:LeftMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  80 => 39,  74 => 35,  63 => 27,  55 => 22,  47 => 17,  39 => 12,  30 => 6,  24 => 2,  22 => 1,);
    }
}
