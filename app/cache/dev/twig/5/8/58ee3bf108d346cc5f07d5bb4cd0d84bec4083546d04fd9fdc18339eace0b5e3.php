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
        $__internal_52dbc48518dbf169cf328be88478b784d923c4b6be01f5cef4d1b9c26bfe0c00 = $this->env->getExtension("native_profiler");
        $__internal_52dbc48518dbf169cf328be88478b784d923c4b6be01f5cef4d1b9c26bfe0c00->enter($__internal_52dbc48518dbf169cf328be88478b784d923c4b6be01f5cef4d1b9c26bfe0c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Main:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52dbc48518dbf169cf328be88478b784d923c4b6be01f5cef4d1b9c26bfe0c00->leave($__internal_52dbc48518dbf169cf328be88478b784d923c4b6be01f5cef4d1b9c26bfe0c00_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0afe19fffb93ffd180af4679d73f6d4919b6ee0d23a3eb3aa2daca9fb2bccf0c = $this->env->getExtension("native_profiler");
        $__internal_0afe19fffb93ffd180af4679d73f6d4919b6ee0d23a3eb3aa2daca9fb2bccf0c->enter($__internal_0afe19fffb93ffd180af4679d73f6d4919b6ee0d23a3eb3aa2daca9fb2bccf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Nous contacter - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0afe19fffb93ffd180af4679d73f6d4919b6ee0d23a3eb3aa2daca9fb2bccf0c->leave($__internal_0afe19fffb93ffd180af4679d73f6d4919b6ee0d23a3eb3aa2daca9fb2bccf0c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_897a822540bd1001ca54d78bf6b0a5b42c8e8205f332ac070e0a7213590efdc5 = $this->env->getExtension("native_profiler");
        $__internal_897a822540bd1001ca54d78bf6b0a5b42c8e8205f332ac070e0a7213590efdc5->enter($__internal_897a822540bd1001ca54d78bf6b0a5b42c8e8205f332ac070e0a7213590efdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "    <div class=\"alert alert-success\">
        ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  <h2>Nous contacter</h2>

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
        
        $__internal_897a822540bd1001ca54d78bf6b0a5b42c8e8205f332ac070e0a7213590efdc5->leave($__internal_897a822540bd1001ca54d78bf6b0a5b42c8e8205f332ac070e0a7213590efdc5_prof);

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
        return array (  76 => 17,  67 => 14,  64 => 13,  60 => 12,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
