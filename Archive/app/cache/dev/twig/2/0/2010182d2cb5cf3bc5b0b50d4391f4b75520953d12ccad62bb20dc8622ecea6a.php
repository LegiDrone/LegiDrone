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
        $__internal_f587fc79b07d607976a8b4acee6cd07f0381c9a2458a3fc164f8cead3df95520 = $this->env->getExtension("native_profiler");
        $__internal_f587fc79b07d607976a8b4acee6cd07f0381c9a2458a3fc164f8cead3df95520->enter($__internal_f587fc79b07d607976a8b4acee6cd07f0381c9a2458a3fc164f8cead3df95520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f587fc79b07d607976a8b4acee6cd07f0381c9a2458a3fc164f8cead3df95520->leave($__internal_f587fc79b07d607976a8b4acee6cd07f0381c9a2458a3fc164f8cead3df95520_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a91ed54e1717d42ce3d18fd32286c2deab7a0e9b7b1e292eb714d4fb0a9a399c = $this->env->getExtension("native_profiler");
        $__internal_a91ed54e1717d42ce3d18fd32286c2deab7a0e9b7b1e292eb714d4fb0a9a399c->enter($__internal_a91ed54e1717d42ce3d18fd32286c2deab7a0e9b7b1e292eb714d4fb0a9a399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notification"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<h2>Connexion</h2>
<div class=\"box box-info\">
    <div class=\"box-header with-border\">
      <h3 class=\"box-title\">Identifiants</h3>
      <div class=\"box-tools pull-right\">
      </div>
    </div><!-- /.box-header -->
    <div class=\"box-body\">
        <form action=\"";
        // line 23
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
              <div class=\"pull-right\">
                <div class=\"col-xs-12\">
                    <button type=\"submit\" class=\"btn btn-block btn-primary\">Connexion</button>
                </div><!-- /.col -->
              </div>
          </div>
        </form>
        <div class=\"pull-right\">
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu...</a><br>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Inscription</a>
        </div>
    </div>
</div><!-- /.login-box-body -->

<!--form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Se souvenir de moi</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form-->
";
        
        $__internal_a91ed54e1717d42ce3d18fd32286c2deab7a0e9b7b1e292eb714d4fb0a9a399c->leave($__internal_a91ed54e1717d42ce3d18fd32286c2deab7a0e9b7b1e292eb714d4fb0a9a399c_prof);

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
        return array (  137 => 59,  128 => 53,  123 => 51,  119 => 50,  114 => 48,  110 => 47,  102 => 42,  98 => 41,  77 => 23,  67 => 15,  58 => 12,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
