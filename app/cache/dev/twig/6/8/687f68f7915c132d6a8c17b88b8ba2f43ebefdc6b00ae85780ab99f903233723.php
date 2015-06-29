<?php

/* PolytechProjetCoBundle:Main:index.html.twig */
class __TwigTemplate_687f68f7915c132d6a8c17b88b8ba2f43ebefdc6b00ae85780ab99f903233723 extends Twig_Template
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
        $__internal_44b644eaa13c25acedb72aa5de055f956399abe8a416a266343a1379b906dfc9 = $this->env->getExtension("native_profiler");
        $__internal_44b644eaa13c25acedb72aa5de055f956399abe8a416a266343a1379b906dfc9->enter($__internal_44b644eaa13c25acedb72aa5de055f956399abe8a416a266343a1379b906dfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44b644eaa13c25acedb72aa5de055f956399abe8a416a266343a1379b906dfc9->leave($__internal_44b644eaa13c25acedb72aa5de055f956399abe8a416a266343a1379b906dfc9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_def34ff58e76a2227f91492996928da816eec5c866aed99a21ee59f0633d5fb1 = $this->env->getExtension("native_profiler");
        $__internal_def34ff58e76a2227f91492996928da816eec5c866aed99a21ee59f0633d5fb1->enter($__internal_def34ff58e76a2227f91492996928da816eec5c866aed99a21ee59f0633d5fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_def34ff58e76a2227f91492996928da816eec5c866aed99a21ee59f0633d5fb1->leave($__internal_def34ff58e76a2227f91492996928da816eec5c866aed99a21ee59f0633d5fb1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f972e0a11b34230459d96673cfe3ed07ffe20c8eaab67a2f15a69315ec6da230 = $this->env->getExtension("native_profiler");
        $__internal_f972e0a11b34230459d96673cfe3ed07ffe20c8eaab67a2f15a69315ec6da230->enter($__internal_f972e0a11b34230459d96673cfe3ed07ffe20c8eaab67a2f15a69315ec6da230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f972e0a11b34230459d96673cfe3ed07ffe20c8eaab67a2f15a69315ec6da230->leave($__internal_f972e0a11b34230459d96673cfe3ed07ffe20c8eaab67a2f15a69315ec6da230_prof);

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
