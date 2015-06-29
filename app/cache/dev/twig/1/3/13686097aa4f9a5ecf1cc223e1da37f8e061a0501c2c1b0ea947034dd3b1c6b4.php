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
        $__internal_ddf601406764176a802d73e30868bea29c54710c346e664e3ef8d02c8f0874df = $this->env->getExtension("native_profiler");
        $__internal_ddf601406764176a802d73e30868bea29c54710c346e664e3ef8d02c8f0874df->enter($__internal_ddf601406764176a802d73e30868bea29c54710c346e664e3ef8d02c8f0874df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf601406764176a802d73e30868bea29c54710c346e664e3ef8d02c8f0874df->leave($__internal_ddf601406764176a802d73e30868bea29c54710c346e664e3ef8d02c8f0874df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d15cf86f41772ceb96558b684a04540e57f62d0950a6e15d9d7ea1cf8ddb3997 = $this->env->getExtension("native_profiler");
        $__internal_d15cf86f41772ceb96558b684a04540e57f62d0950a6e15d9d7ea1cf8ddb3997->enter($__internal_d15cf86f41772ceb96558b684a04540e57f62d0950a6e15d9d7ea1cf8ddb3997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d15cf86f41772ceb96558b684a04540e57f62d0950a6e15d9d7ea1cf8ddb3997->leave($__internal_d15cf86f41772ceb96558b684a04540e57f62d0950a6e15d9d7ea1cf8ddb3997_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bde70e30781ab25350372fdc627d92867fe851ddb82ae5a339d89b87a088c0a0 = $this->env->getExtension("native_profiler");
        $__internal_bde70e30781ab25350372fdc627d92867fe851ddb82ae5a339d89b87a088c0a0->enter($__internal_bde70e30781ab25350372fdc627d92867fe851ddb82ae5a339d89b87a088c0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bde70e30781ab25350372fdc627d92867fe851ddb82ae5a339d89b87a088c0a0->leave($__internal_bde70e30781ab25350372fdc627d92867fe851ddb82ae5a339d89b87a088c0a0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c8eb0e6325f3dcaa82a0234dc48224954ddd755dc7854444d9d905a8ac77085 = $this->env->getExtension("native_profiler");
        $__internal_6c8eb0e6325f3dcaa82a0234dc48224954ddd755dc7854444d9d905a8ac77085->enter($__internal_6c8eb0e6325f3dcaa82a0234dc48224954ddd755dc7854444d9d905a8ac77085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6c8eb0e6325f3dcaa82a0234dc48224954ddd755dc7854444d9d905a8ac77085->leave($__internal_6c8eb0e6325f3dcaa82a0234dc48224954ddd755dc7854444d9d905a8ac77085_prof);

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
