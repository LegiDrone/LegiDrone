<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_3d7f7dc811985950de49ed25baee19d303d2dab5263c5207758584f46ffb9d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_707aded5b7904cc50b4eb7282a173a192e3944bdb7895af2a38099bb01732dec = $this->env->getExtension("native_profiler");
        $__internal_707aded5b7904cc50b4eb7282a173a192e3944bdb7895af2a38099bb01732dec->enter($__internal_707aded5b7904cc50b4eb7282a173a192e3944bdb7895af2a38099bb01732dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<h2>Profil de l'utilisateur</h2>

<div class=\"box\">
    <div class=\"box-header\">
        <h3 class=\"box-title\">Détails</h3>
    </div>
    <div class=\"box-body\">
        <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-app\">
            <i class=\"fa fa-edit\"></i>
            Editer
        </a>
        <a class=\"btn btn-app\">
            <i class=\"fa fa-envelope\"></i>
            Contacter l'admin
        </a>
    </div>        
</div>
";
        
        $__internal_707aded5b7904cc50b4eb7282a173a192e3944bdb7895af2a38099bb01732dec->leave($__internal_707aded5b7904cc50b4eb7282a173a192e3944bdb7895af2a38099bb01732dec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  38 => 11,  32 => 10,  22 => 2,);
    }
}
