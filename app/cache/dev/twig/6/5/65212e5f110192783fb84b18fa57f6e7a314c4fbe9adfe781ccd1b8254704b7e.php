<?php

/* PolytechEcommerceBundle:Panier:livraison.html.twig */
class __TwigTemplate_65212e5f110192783fb84b18fa57f6e7a314c4fbe9adfe781ccd1b8254704b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "PolytechEcommerceBundle:Panier:livraison.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PolytechProjetCoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8a4f52c2f2a0d40d6f1dc55cf4a156d00a1b0eefa62000e497b838bc95d3537 = $this->env->getExtension("native_profiler");
        $__internal_f8a4f52c2f2a0d40d6f1dc55cf4a156d00a1b0eefa62000e497b838bc95d3537->enter($__internal_f8a4f52c2f2a0d40d6f1dc55cf4a156d00a1b0eefa62000e497b838bc95d3537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Panier:livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a4f52c2f2a0d40d6f1dc55cf4a156d00a1b0eefa62000e497b838bc95d3537->leave($__internal_f8a4f52c2f2a0d40d6f1dc55cf4a156d00a1b0eefa62000e497b838bc95d3537_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a392337a7f4a52422cf3f8a706b2c09532a34c6fe8a507bd99a5579d839d5f0 = $this->env->getExtension("native_profiler");
        $__internal_2a392337a7f4a52422cf3f8a706b2c09532a34c6fe8a507bd99a5579d839d5f0->enter($__internal_2a392337a7f4a52422cf3f8a706b2c09532a34c6fe8a507bd99a5579d839d5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Adresses de livraison</h3>
              <div class=\"box-tools pull-right\">
              </div>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) != 0)) {
            // line 17
            echo "                    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("polytech_ecommerce_Validation");
            echo "\" method=\"POST\">
                    <h3>Adresses de livraison</h3>
                    ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 20
                echo "                        <div class=\"checkbox\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" value=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_LivraisonSuppressionAdresse", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                                <br />";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) == 0)) {
                // line 29
                echo "                        <p>Pas d'adresses </p>
                    ";
            }
            // line 31
            echo "
                <h3>Adresses de facturation</h3>

                    ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 35
                echo "                        <div class=\"checkbox\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"facturation\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_ecommerce_LivraisonSuppressionAdresse", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                                <br />";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">Valider mes adresses</button>
                        </div>
                </form>
                ";
        } else {
            // line 48
            echo "                    <h3>Pas d'adresse associées au compte</h3>
                ";
        }
        // line 50
        echo "            </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Entrer une adresse de livraison</h3>
              <div class=\"box-tools pull-right\">
              </div>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                <form action=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("polytech_ecommerce_Livraison");
        echo "\" method=\"POST\">
                    <div class=\"form-group has-feedback\">
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom")));
        echo "
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone")));
        echo "
                    <span class=\"glyphicon glyphicon-phone-alt form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
        echo "
                    <span class=\"glyphicon glyphicon-home form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "complement", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Complément")));
        echo "
                    <span class=\"glyphicon glyphicon-home form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Code Postal")));
        echo "
                    <span class=\"glyphicon glyphicon-home form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ville")));
        echo "
                    <span class=\"glyphicon glyphicon-home form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Pays")));
        echo "
                    <span class=\"glyphicon glyphicon-home form-control-feedback\"></span>
                    </div>
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    <div class=\"pull-right\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-block btn-primary\">Ajouter</button>
                        </div><!-- /.col -->
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_2a392337a7f4a52422cf3f8a706b2c09532a34c6fe8a507bd99a5579d839d5f0->leave($__internal_2a392337a7f4a52422cf3f8a706b2c09532a34c6fe8a507bd99a5579d839d5f0_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Panier:livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 94,  275 => 91,  268 => 87,  261 => 83,  254 => 79,  247 => 75,  240 => 71,  233 => 67,  226 => 63,  221 => 61,  208 => 50,  204 => 48,  197 => 43,  177 => 39,  165 => 38,  157 => 37,  153 => 35,  136 => 34,  131 => 31,  127 => 29,  124 => 28,  104 => 24,  92 => 23,  84 => 22,  80 => 20,  63 => 19,  57 => 17,  55 => 16,  40 => 5,  34 => 4,  11 => 1,);
    }
}
