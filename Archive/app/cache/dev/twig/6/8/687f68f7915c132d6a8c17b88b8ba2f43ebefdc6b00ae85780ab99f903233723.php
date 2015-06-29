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
        $__internal_e535f7442b56f29c97c5e959e8f1e2f78e5507641bfc54b608ef257ea948e08f = $this->env->getExtension("native_profiler");
        $__internal_e535f7442b56f29c97c5e959e8f1e2f78e5507641bfc54b608ef257ea948e08f->enter($__internal_e535f7442b56f29c97c5e959e8f1e2f78e5507641bfc54b608ef257ea948e08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e535f7442b56f29c97c5e959e8f1e2f78e5507641bfc54b608ef257ea948e08f->leave($__internal_e535f7442b56f29c97c5e959e8f1e2f78e5507641bfc54b608ef257ea948e08f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2582f7bda417ea4b5f91135099cac9f6ad632febca3235bf70e6fc67d642155a = $this->env->getExtension("native_profiler");
        $__internal_2582f7bda417ea4b5f91135099cac9f6ad632febca3235bf70e6fc67d642155a->enter($__internal_2582f7bda417ea4b5f91135099cac9f6ad632febca3235bf70e6fc67d642155a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2582f7bda417ea4b5f91135099cac9f6ad632febca3235bf70e6fc67d642155a->leave($__internal_2582f7bda417ea4b5f91135099cac9f6ad632febca3235bf70e6fc67d642155a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff106e44b925bca3832d6e0fd5067fd34d4fab561af21831536639700b83514b = $this->env->getExtension("native_profiler");
        $__internal_ff106e44b925bca3832d6e0fd5067fd34d4fab561af21831536639700b83514b->enter($__internal_ff106e44b925bca3832d6e0fd5067fd34d4fab561af21831536639700b83514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
  <h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>


    <div class=\"callout callout-info\">
      <h4>Tip!</h4>
      <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
    </div>


  <div class=\"box box-default\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Blank Box</h3>
    </div>
      <div class=\"box-body\">
        The great content goes here
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
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img1.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                        <div class=\"carousel-caption\">
                          First Slide
                        </div>
                      </div>
                      <div class=\"item\">
                        <img src=\"";
        // line 49
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
        
        $__internal_ff106e44b925bca3832d6e0fd5067fd34d4fab561af21831536639700b83514b->leave($__internal_ff106e44b925bca3832d6e0fd5067fd34d4fab561af21831536639700b83514b_prof);

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
        return array (  105 => 49,  96 => 43,  62 => 12,  59 => 11,  53 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
