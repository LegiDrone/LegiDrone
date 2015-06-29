<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9a8e2f8d56766ac845115b75bc22993f0443f7f2aac5c8f3f166631719f77817 extends Twig_Template
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
        $__internal_1fe801b6ae9030f8798a3183baf4ad5655fe678ee7e5b09258e8790a2c77e1c4 = $this->env->getExtension("native_profiler");
        $__internal_1fe801b6ae9030f8798a3183baf4ad5655fe678ee7e5b09258e8790a2c77e1c4->enter($__internal_1fe801b6ae9030f8798a3183baf4ad5655fe678ee7e5b09258e8790a2c77e1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe801b6ae9030f8798a3183baf4ad5655fe678ee7e5b09258e8790a2c77e1c4->leave($__internal_1fe801b6ae9030f8798a3183baf4ad5655fe678ee7e5b09258e8790a2c77e1c4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a407943767ba7f11e24349d94d28dae9dbc39e68d292aaad8d53df3288f2289 = $this->env->getExtension("native_profiler");
        $__internal_9a407943767ba7f11e24349d94d28dae9dbc39e68d292aaad8d53df3288f2289->enter($__internal_9a407943767ba7f11e24349d94d28dae9dbc39e68d292aaad8d53df3288f2289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9a407943767ba7f11e24349d94d28dae9dbc39e68d292aaad8d53df3288f2289->leave($__internal_9a407943767ba7f11e24349d94d28dae9dbc39e68d292aaad8d53df3288f2289_prof);

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
