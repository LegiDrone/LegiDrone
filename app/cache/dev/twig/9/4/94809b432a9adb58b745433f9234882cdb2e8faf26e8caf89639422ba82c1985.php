<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_94809b432a9adb58b745433f9234882cdb2e8faf26e8caf89639422ba82c1985 extends Twig_Template
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
        $__internal_04cece78e2391e8c4c75fe66f0d0c837f53fe8a2e429f26be80df52dc31f89e1 = $this->env->getExtension("native_profiler");
        $__internal_04cece78e2391e8c4c75fe66f0d0c837f53fe8a2e429f26be80df52dc31f89e1->enter($__internal_04cece78e2391e8c4c75fe66f0d0c837f53fe8a2e429f26be80df52dc31f89e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04cece78e2391e8c4c75fe66f0d0c837f53fe8a2e429f26be80df52dc31f89e1->leave($__internal_04cece78e2391e8c4c75fe66f0d0c837f53fe8a2e429f26be80df52dc31f89e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b560e47541ef5e6e0429d29b14deec42f8ad858598315a1279531b9fe51fa37 = $this->env->getExtension("native_profiler");
        $__internal_1b560e47541ef5e6e0429d29b14deec42f8ad858598315a1279531b9fe51fa37->enter($__internal_1b560e47541ef5e6e0429d29b14deec42f8ad858598315a1279531b9fe51fa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b560e47541ef5e6e0429d29b14deec42f8ad858598315a1279531b9fe51fa37->leave($__internal_1b560e47541ef5e6e0429d29b14deec42f8ad858598315a1279531b9fe51fa37_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_871d218ceae3ae7a9cc9c88839146783f829b9d102f2fe3e5a6622fbaab0363f = $this->env->getExtension("native_profiler");
        $__internal_871d218ceae3ae7a9cc9c88839146783f829b9d102f2fe3e5a6622fbaab0363f->enter($__internal_871d218ceae3ae7a9cc9c88839146783f829b9d102f2fe3e5a6622fbaab0363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_871d218ceae3ae7a9cc9c88839146783f829b9d102f2fe3e5a6622fbaab0363f->leave($__internal_871d218ceae3ae7a9cc9c88839146783f829b9d102f2fe3e5a6622fbaab0363f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d858468491212b9d02b58413a8544e705d1ed2fdfb2bcef8ebff4996810375f5 = $this->env->getExtension("native_profiler");
        $__internal_d858468491212b9d02b58413a8544e705d1ed2fdfb2bcef8ebff4996810375f5->enter($__internal_d858468491212b9d02b58413a8544e705d1ed2fdfb2bcef8ebff4996810375f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d858468491212b9d02b58413a8544e705d1ed2fdfb2bcef8ebff4996810375f5->leave($__internal_d858468491212b9d02b58413a8544e705d1ed2fdfb2bcef8ebff4996810375f5_prof);

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
