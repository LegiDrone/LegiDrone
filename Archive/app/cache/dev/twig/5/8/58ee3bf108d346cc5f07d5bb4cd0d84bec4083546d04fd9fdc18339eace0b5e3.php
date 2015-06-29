<?php

/* PolytechProjetCoBundle:Main:contact.html.twig */
class __TwigTemplate_58ee3bf108d346cc5f07d5bb4cd0d84bec4083546d04fd9fdc18339eace0b5e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "PolytechProjetCoBundle:Main:contact.html.twig", 4);
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
        $__internal_dbdf9d07f216b20a894f69e83b2708c3d2aa133f5d2497e8d3ce9448be99babe = $this->env->getExtension("native_profiler");
        $__internal_dbdf9d07f216b20a894f69e83b2708c3d2aa133f5d2497e8d3ce9448be99babe->enter($__internal_dbdf9d07f216b20a894f69e83b2708c3d2aa133f5d2497e8d3ce9448be99babe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Main:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbdf9d07f216b20a894f69e83b2708c3d2aa133f5d2497e8d3ce9448be99babe->leave($__internal_dbdf9d07f216b20a894f69e83b2708c3d2aa133f5d2497e8d3ce9448be99babe_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_058a730170fa02f05b6b59f4b6dcd2c89a40706c536706df7bebdd050ea6ddb3 = $this->env->getExtension("native_profiler");
        $__internal_058a730170fa02f05b6b59f4b6dcd2c89a40706c536706df7bebdd050ea6ddb3->enter($__internal_058a730170fa02f05b6b59f4b6dcd2c89a40706c536706df7bebdd050ea6ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_058a730170fa02f05b6b59f4b6dcd2c89a40706c536706df7bebdd050ea6ddb3->leave($__internal_058a730170fa02f05b6b59f4b6dcd2c89a40706c536706df7bebdd050ea6ddb3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_38791db8e29bab6eb7f5ba12469aa885b5d0ce16fd4929c3492e036877f740f4 = $this->env->getExtension("native_profiler");
        $__internal_38791db8e29bab6eb7f5ba12469aa885b5d0ce16fd4929c3492e036877f740f4->enter($__internal_38791db8e29bab6eb7f5ba12469aa885b5d0ce16fd4929c3492e036877f740f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
  <h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

  <div class=\"box box-default\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Nous contacter</h3>
    </div>
      <div class=\"box-body\">
        Infos pour nous contacter...
      </div><!-- /.box-body -->
    </div><!-- /.box -->


<div class=\"box box-info\">
    <div class=\"box-header\">
      <i class=\"fa fa-envelope\"></i>
      <h3 class=\"box-title\">Nous contacter</h3>

    </div>
    <div class=\"box-body\">
      <form action=\"#\" method=\"post\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Sujet\"/>
        </div>
        <div>
          <textarea class=\"textarea\" placeholder=\"Message\" style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
        </div>
      </form>
    </div>
    <div class=\"box-footer clearfix\">
      <button class=\"pull-right btn btn-default\" id=\"sendEmail\">Envoyer <i class=\"fa fa-arrow-circle-right\"></i></button>
    </div>
  </div>

";
        
        $__internal_38791db8e29bab6eb7f5ba12469aa885b5d0ce16fd4929c3492e036877f740f4->leave($__internal_38791db8e29bab6eb7f5ba12469aa885b5d0ce16fd4929c3492e036877f740f4_prof);

    }

    public function getTemplateName()
    {
        return "PolytechProjetCoBundle:Main:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  59 => 11,  53 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
