<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0f69a33f912734d454f5232272cecd31644abe50890c47bd19298b231b353926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55c4a89b436de16412bdf5c872bb8c9e948790ea03e37ecf86c98356b6942720 = $this->env->getExtension("native_profiler");
        $__internal_55c4a89b436de16412bdf5c872bb8c9e948790ea03e37ecf86c98356b6942720->enter($__internal_55c4a89b436de16412bdf5c872bb8c9e948790ea03e37ecf86c98356b6942720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55c4a89b436de16412bdf5c872bb8c9e948790ea03e37ecf86c98356b6942720->leave($__internal_55c4a89b436de16412bdf5c872bb8c9e948790ea03e37ecf86c98356b6942720_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_522ff45504e0db14611d1d3a31cda61050e6c844013338349b71b19e76d4b579 = $this->env->getExtension("native_profiler");
        $__internal_522ff45504e0db14611d1d3a31cda61050e6c844013338349b71b19e76d4b579->enter($__internal_522ff45504e0db14611d1d3a31cda61050e6c844013338349b71b19e76d4b579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
        
        $__internal_522ff45504e0db14611d1d3a31cda61050e6c844013338349b71b19e76d4b579->leave($__internal_522ff45504e0db14611d1d3a31cda61050e6c844013338349b71b19e76d4b579_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  50 => 9,  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
