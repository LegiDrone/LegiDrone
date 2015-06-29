<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2010182d2cb5cf3bc5b0b50d4391f4b75520953d12ccad62bb20dc8622ecea6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_9ceb96b3dae8c1c11c5829c1240bd8a2a934dabc6b4ba594245e388c633af065 = $this->env->getExtension("native_profiler");
        $__internal_9ceb96b3dae8c1c11c5829c1240bd8a2a934dabc6b4ba594245e388c633af065->enter($__internal_9ceb96b3dae8c1c11c5829c1240bd8a2a934dabc6b4ba594245e388c633af065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ceb96b3dae8c1c11c5829c1240bd8a2a934dabc6b4ba594245e388c633af065->leave($__internal_9ceb96b3dae8c1c11c5829c1240bd8a2a934dabc6b4ba594245e388c633af065_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5f548139acc3bf05074305153dccf734adc365cb6f14a765cee6b3892b2eb4c = $this->env->getExtension("native_profiler");
        $__internal_e5f548139acc3bf05074305153dccf734adc365cb6f14a765cee6b3892b2eb4c->enter($__internal_e5f548139acc3bf05074305153dccf734adc365cb6f14a765cee6b3892b2eb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <div class=\"pull-left\">
            <h4>Liste des drones</h4>
        </div>
    </div>
    <div class=\"box-body\">
        <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

            <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
        
    </div>

</div>
";
        
        $__internal_e5f548139acc3bf05074305153dccf734adc365cb6f14a765cee6b3892b2eb4c->leave($__internal_e5f548139acc3bf05074305153dccf734adc365cb6f14a765cee6b3892b2eb4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  83 => 27,  76 => 23,  71 => 21,  67 => 20,  62 => 18,  58 => 17,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
