<?php

/* PolytechProjetCoBundle:Main:index.html.twig */
class __TwigTemplate_372f64c8fcd48d01d6ef73094f868777d20427bd111c8dad0d457c05e79977e1 extends Twig_Template
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
        $__internal_f269c30be57d2d648ca9d5886487c3e5e39344352e160eaa00ece65f67752e97 = $this->env->getExtension("native_profiler");
        $__internal_f269c30be57d2d648ca9d5886487c3e5e39344352e160eaa00ece65f67752e97->enter($__internal_f269c30be57d2d648ca9d5886487c3e5e39344352e160eaa00ece65f67752e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f269c30be57d2d648ca9d5886487c3e5e39344352e160eaa00ece65f67752e97->leave($__internal_f269c30be57d2d648ca9d5886487c3e5e39344352e160eaa00ece65f67752e97_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f4edcfddc67ae331d8fb7eee8d3193360e777bd33282236fb7c21a8e3284bc8 = $this->env->getExtension("native_profiler");
        $__internal_9f4edcfddc67ae331d8fb7eee8d3193360e777bd33282236fb7c21a8e3284bc8->enter($__internal_9f4edcfddc67ae331d8fb7eee8d3193360e777bd33282236fb7c21a8e3284bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9f4edcfddc67ae331d8fb7eee8d3193360e777bd33282236fb7c21a8e3284bc8->leave($__internal_9f4edcfddc67ae331d8fb7eee8d3193360e777bd33282236fb7c21a8e3284bc8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_133e70bf4e2679349fdc0c2f4b387e945f8bad71148723761c53c1ae835cae11 = $this->env->getExtension("native_profiler");
        $__internal_133e70bf4e2679349fdc0c2f4b387e945f8bad71148723761c53c1ae835cae11->enter($__internal_133e70bf4e2679349fdc0c2f4b387e945f8bad71148723761c53c1ae835cae11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_133e70bf4e2679349fdc0c2f4b387e945f8bad71148723761c53c1ae835cae11->leave($__internal_133e70bf4e2679349fdc0c2f4b387e945f8bad71148723761c53c1ae835cae11_prof);

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
