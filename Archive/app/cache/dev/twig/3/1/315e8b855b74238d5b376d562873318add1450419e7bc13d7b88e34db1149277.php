<?php

/* PolytechUserBundle::Connexion.html.twig */
class __TwigTemplate_315e8b855b74238d5b376d562873318add1450419e7bc13d7b88e34db1149277 extends Twig_Template
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
        $__internal_1a71d43a997f6595fe03f5f25b08d3f47505d7bc50c1b502c4771494637f0c76 = $this->env->getExtension("native_profiler");
        $__internal_1a71d43a997f6595fe03f5f25b08d3f47505d7bc50c1b502c4771494637f0c76->enter($__internal_1a71d43a997f6595fe03f5f25b08d3f47505d7bc50c1b502c4771494637f0c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechUserBundle::Connexion.html.twig"));

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
        
        $__internal_1a71d43a997f6595fe03f5f25b08d3f47505d7bc50c1b502c4771494637f0c76->leave($__internal_1a71d43a997f6595fe03f5f25b08d3f47505d7bc50c1b502c4771494637f0c76_prof);

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
