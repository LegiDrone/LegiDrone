<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_13686097aa4f9a5ecf1cc223e1da37f8e061a0501c2c1b0ea947034dd3b1c6b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f077d5bf198c909bb30997738eebe646b379d1792488ae7ff0bfa77d395c2f1 = $this->env->getExtension("native_profiler");
        $__internal_8f077d5bf198c909bb30997738eebe646b379d1792488ae7ff0bfa77d395c2f1->enter($__internal_8f077d5bf198c909bb30997738eebe646b379d1792488ae7ff0bfa77d395c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f077d5bf198c909bb30997738eebe646b379d1792488ae7ff0bfa77d395c2f1->leave($__internal_8f077d5bf198c909bb30997738eebe646b379d1792488ae7ff0bfa77d395c2f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c64e767debf923fdb572410cfcef4f722adccc867535944da5c21bd14a0204a4 = $this->env->getExtension("native_profiler");
        $__internal_c64e767debf923fdb572410cfcef4f722adccc867535944da5c21bd14a0204a4->enter($__internal_c64e767debf923fdb572410cfcef4f722adccc867535944da5c21bd14a0204a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c64e767debf923fdb572410cfcef4f722adccc867535944da5c21bd14a0204a4->leave($__internal_c64e767debf923fdb572410cfcef4f722adccc867535944da5c21bd14a0204a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c149c85b094c32dfb6413dbcdc606d992bc1d63d3e82c6f40f0b8ba9c334db33 = $this->env->getExtension("native_profiler");
        $__internal_c149c85b094c32dfb6413dbcdc606d992bc1d63d3e82c6f40f0b8ba9c334db33->enter($__internal_c149c85b094c32dfb6413dbcdc606d992bc1d63d3e82c6f40f0b8ba9c334db33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c149c85b094c32dfb6413dbcdc606d992bc1d63d3e82c6f40f0b8ba9c334db33->leave($__internal_c149c85b094c32dfb6413dbcdc606d992bc1d63d3e82c6f40f0b8ba9c334db33_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2e43d507f354c7b6bcb48aa83f9b3c703f0ae0e2bbf39cf5b14532ea89b4238 = $this->env->getExtension("native_profiler");
        $__internal_c2e43d507f354c7b6bcb48aa83f9b3c703f0ae0e2bbf39cf5b14532ea89b4238->enter($__internal_c2e43d507f354c7b6bcb48aa83f9b3c703f0ae0e2bbf39cf5b14532ea89b4238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c2e43d507f354c7b6bcb48aa83f9b3c703f0ae0e2bbf39cf5b14532ea89b4238->leave($__internal_c2e43d507f354c7b6bcb48aa83f9b3c703f0ae0e2bbf39cf5b14532ea89b4238_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
