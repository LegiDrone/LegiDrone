<?php

/* PolytechProjetCoBundle:Layout:LeftMenu.html.twig */
class __TwigTemplate_d8e1afdc01164385ec9435fdb3875f520212ba5b6f547a6c3ca66b02581b4530 extends Twig_Template
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
        $__internal_cf50efcaa671c16cf4f75d48eca58495a10eea196d355146db9bd56ee5c56ee5 = $this->env->getExtension("native_profiler");
        $__internal_cf50efcaa671c16cf4f75d48eca58495a10eea196d355146db9bd56ee5c56ee5->enter($__internal_cf50efcaa671c16cf4f75d48eca58495a10eea196d355146db9bd56ee5c56ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Layout:LeftMenu.html.twig"));

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
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ENTREPRISE")) {
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
      <li>
      <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("polytech_user_pilotes");
            echo "\">
        <i class=\"glyphicon glyphicon-user\"></i> <span>Pilotes</span> <small class=\"label pull-right bg-green\">new</small>
      </a>
    </li>
    <li>
      <a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("drones");
            echo "\">
          <i class=\"glyphicon glyphicon-plane\"></i> <span>Drones</span>
      </a>
    </li>
<li class=\"treeview\">
      <a href=\"#\">
        <i class=\"fa fa-files-o\"></i>
        <span>Documents</span>
      </a>
    </li>
      <li>
      <a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("polytech_user_facture");
            echo "\">
        <i class=\"glyphicon glyphicon-euro\"></i> <span>Commandes</span>
      </a>
    </li>
  </ul>
";
        }
        
        $__internal_cf50efcaa671c16cf4f75d48eca58495a10eea196d355146db9bd56ee5c56ee5->leave($__internal_cf50efcaa671c16cf4f75d48eca58495a10eea196d355146db9bd56ee5c56ee5_prof);

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
        return array (  110 => 60,  96 => 49,  88 => 44,  80 => 39,  74 => 35,  63 => 27,  55 => 22,  47 => 17,  39 => 12,  30 => 6,  24 => 2,  22 => 1,);
    }
}
