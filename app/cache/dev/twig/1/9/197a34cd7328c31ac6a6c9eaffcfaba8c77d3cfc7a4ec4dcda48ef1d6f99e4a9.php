<?php

/* PolytechUserBundle::Connexion.html.twig */
class __TwigTemplate_197a34cd7328c31ac6a6c9eaffcfaba8c77d3cfc7a4ec4dcda48ef1d6f99e4a9 extends Twig_Template
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
        $__internal_4cea32d2f299e503a84a435849e55c801bddd607271108060dcff2462be17a37 = $this->env->getExtension("native_profiler");
        $__internal_4cea32d2f299e503a84a435849e55c801bddd607271108060dcff2462be17a37->enter($__internal_4cea32d2f299e503a84a435849e55c801bddd607271108060dcff2462be17a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle::Connexion.html.twig"));

        // line 1
        echo "<li class=\"dropdown notifications-menu\">
<!-- Menu Toggle Button -->
<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
  <!-- The user image in the navbar-->
  <span class=\"glyphicon glyphicon-user\"></span>
  <!--img src=\"../../dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\"/>
  <!-- hidden-xs hides the username on small devices so only the image appears. -->
  <span class=\"hidden-xs\">Connexion</span>
</a>
<ul class=\"dropdown-menu\">
  <div class=\"login-box-body\">
    <p class=\"login-box-msg\">Connexion</p>
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" class=\"form-control\" placeholder=\"Utilisateur\"/>
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de passe\"/>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">    
          <div class=\"checkbox icheck\">

          </div>                        
        </div><!-- /.col -->
        <div class=\"col-xs-6\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Connexion</button>
        </div><!-- /.col -->
      </div>
    </form>

    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu...</a><br>
    <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Inscription</a>

  </div><!-- /.login-box-body -->
</ul>
</li>";
        
        $__internal_4cea32d2f299e503a84a435849e55c801bddd607271108060dcff2462be17a37->leave($__internal_4cea32d2f299e503a84a435849e55c801bddd607271108060dcff2462be17a37_prof);

    }

    public function getTemplateName()
    {
        return "PolytechUserBundle::Connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 35,  60 => 34,  36 => 13,  22 => 1,);
    }
}
