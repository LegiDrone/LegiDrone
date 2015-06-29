<?php

/* PolytechProjetCoBundle:Main:index.html.twig */
class __TwigTemplate_d7d543c7c03d86c31fc9fd2a1bf15e24668d0809a4249980e599925466ad79c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "PolytechProjetCoBundle:Main:index.html.twig", 4);
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
        $__internal_21c62bd1b6a266bf6cc1e8a7e5cd91866afe7455ceb27b049b8c2d244961bec5 = $this->env->getExtension("native_profiler");
        $__internal_21c62bd1b6a266bf6cc1e8a7e5cd91866afe7455ceb27b049b8c2d244961bec5->enter($__internal_21c62bd1b6a266bf6cc1e8a7e5cd91866afe7455ceb27b049b8c2d244961bec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c62bd1b6a266bf6cc1e8a7e5cd91866afe7455ceb27b049b8c2d244961bec5->leave($__internal_21c62bd1b6a266bf6cc1e8a7e5cd91866afe7455ceb27b049b8c2d244961bec5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d75e99fdca3d68b21bb79590f122a46c53905aa0d4294d300fabf5fcd280ea4e = $this->env->getExtension("native_profiler");
        $__internal_d75e99fdca3d68b21bb79590f122a46c53905aa0d4294d300fabf5fcd280ea4e->enter($__internal_d75e99fdca3d68b21bb79590f122a46c53905aa0d4294d300fabf5fcd280ea4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d75e99fdca3d68b21bb79590f122a46c53905aa0d4294d300fabf5fcd280ea4e->leave($__internal_d75e99fdca3d68b21bb79590f122a46c53905aa0d4294d300fabf5fcd280ea4e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_adb943ced25213a7e836de91951f10ba3ed095f5331807d7f8d2ed5b2a4728d8 = $this->env->getExtension("native_profiler");
        $__internal_adb943ced25213a7e836de91951f10ba3ed095f5331807d7f8d2ed5b2a4728d8->enter($__internal_adb943ced25213a7e836de91951f10ba3ed095f5331807d7f8d2ed5b2a4728d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
  <h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>


    <div class=\"callout callout-info\">
      <h4>Qu'est-ce que Legidrone ?</h4>
      <p>Legidrone est un service permettant d'économiser votre temps passé dans les démarches administratives tout en proposant un service  de stockage sécurisé de vos documents liés à votre activité</p>
    </div>


  <div class=\"box box-default\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Le principe</h3>
    </div>
      <div class=\"box-body\">
          <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/schema.png"), "html", null, true);
        echo "\" height=\"100%\" width=\"100%\" alt=\"Schema\" />
        
      </div><!-- /.box-body -->
    </div><!-- /.box -->
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Nos réalisations</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                      <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                      <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\" class=\"\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                      <div class=\"item active\">
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img1.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        <div class=\"carousel-caption\">
                          First Slide
                        </div>
                      </div>
                      <div class=\"item\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img2.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
                        <div class=\"carousel-caption\">
                          Second Slide
                        </div>
                      </div>
                    </div>
                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                      <span class=\"fa fa-angle-left\"></span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                      <span class=\"fa fa-angle-right\"></span>
                    </a>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


";
        
        $__internal_adb943ced25213a7e836de91951f10ba3ed095f5331807d7f8d2ed5b2a4728d8->leave($__internal_adb943ced25213a7e836de91951f10ba3ed095f5331807d7f8d2ed5b2a4728d8_prof);

    }

    public function getTemplateName()
    {
        return "PolytechProjetCoBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  98 => 42,  79 => 26,  62 => 12,  59 => 11,  53 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
