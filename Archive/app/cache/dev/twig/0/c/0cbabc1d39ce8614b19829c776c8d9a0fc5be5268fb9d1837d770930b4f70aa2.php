<?php

/* PolytechEcommerceBundle:Commandes:new.html.twig */
class __TwigTemplate_0cbabc1d39ce8614b19829c776c8d9a0fc5be5268fb9d1837d770930b4f70aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PolytechEcommerceBundle:Commandes:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41c8a56dad51f6c4b84b1cddb78a408cae77aa9d0d40a37392d12ff6bc320549 = $this->env->getExtension("native_profiler");
        $__internal_41c8a56dad51f6c4b84b1cddb78a408cae77aa9d0d40a37392d12ff6bc320549->enter($__internal_41c8a56dad51f6c4b84b1cddb78a408cae77aa9d0d40a37392d12ff6bc320549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Commandes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c8a56dad51f6c4b84b1cddb78a408cae77aa9d0d40a37392d12ff6bc320549->leave($__internal_41c8a56dad51f6c4b84b1cddb78a408cae77aa9d0d40a37392d12ff6bc320549_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9d08569dece4c64a75c968e14c6ffa1e5700f35c20cf7fdf80b084f87582c2a = $this->env->getExtension("native_profiler");
        $__internal_c9d08569dece4c64a75c968e14c6ffa1e5700f35c20cf7fdf80b084f87582c2a->enter($__internal_c9d08569dece4c64a75c968e14c6ffa1e5700f35c20cf7fdf80b084f87582c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Commandes creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_commandes");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_c9d08569dece4c64a75c968e14c6ffa1e5700f35c20cf7fdf80b084f87582c2a->leave($__internal_c9d08569dece4c64a75c968e14c6ffa1e5700f35c20cf7fdf80b084f87582c2a_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Commandes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
