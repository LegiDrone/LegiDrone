<?php

/* PolytechEcommerceBundle:Produits:Admin/new.html.twig */
class __TwigTemplate_77bf2c36c743e7ae1254a3e26159933ddc33c69ff00c6aa040fcc44607e20757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechEcommerceBundle:Produits:Admin/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PolytechProjetCoBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e35a4a62ca68873538c1b6ba961d53d06c0234a75e72efe33c5d5fe7255864da = $this->env->getExtension("native_profiler");
        $__internal_e35a4a62ca68873538c1b6ba961d53d06c0234a75e72efe33c5d5fe7255864da->enter($__internal_e35a4a62ca68873538c1b6ba961d53d06c0234a75e72efe33c5d5fe7255864da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:Admin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35a4a62ca68873538c1b6ba961d53d06c0234a75e72efe33c5d5fe7255864da->leave($__internal_e35a4a62ca68873538c1b6ba961d53d06c0234a75e72efe33c5d5fe7255864da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9f053cb84326eb7cc5d0c516d81d882831d491364e88ab96a025e1a36cdf174 = $this->env->getExtension("native_profiler");
        $__internal_d9f053cb84326eb7cc5d0c516d81d882831d491364e88ab96a025e1a36cdf174->enter($__internal_d9f053cb84326eb7cc5d0c516d81d882831d491364e88ab96a025e1a36cdf174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d9f053cb84326eb7cc5d0c516d81d882831d491364e88ab96a025e1a36cdf174->leave($__internal_d9f053cb84326eb7cc5d0c516d81d882831d491364e88ab96a025e1a36cdf174_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f8a56b1e372ea64fd4da3f3042c40f8d53abb2cbde86d2f707522285e58d977 = $this->env->getExtension("native_profiler");
        $__internal_3f8a56b1e372ea64fd4da3f3042c40f8d53abb2cbde86d2f707522285e58d977->enter($__internal_3f8a56b1e372ea64fd4da3f3042c40f8d53abb2cbde86d2f707522285e58d977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "    <div class=\"alert alert-success\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "    <div class=\"alert alert-errors\">
        ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
  <h2>Nouveau produit</h2>

<div class=\"box\">
    <div class=\"box-body\">
        
    <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_produits_create");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


        <table class=\"table table-responsive\">
            <tbody>
                <tr>
                    <th>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "</th>
                    <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Description"));
        echo "</th>
                    <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prix"));
        echo "</th>
                    <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponible", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Disponible"));
        echo "</th>
                    <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponible", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponible", array()), 'widget', array("attr" => array("class" => "checkbox")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Choix du fichier"));
        echo "</th>
                    <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id", array()), "file", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id", array()), "file", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id", array()), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom du fichier"));
        echo "</th>
                    <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id", array()), "name", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tva_id", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "TVA"));
        echo "</th>
                    <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tva_id", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tva_id", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories_id", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Catégories"));
        echo "</th>
                    <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories_id", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories_id", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
            </tbody>
        </table>


                ";
        // line 68
        echo "        <div class=\"pull-right\">
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Créer le produit"));
        echo "
            
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
                
    </form>
    </div>
</div>

<div class=\"pull-left\">
    <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("admin_produits");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
</div>
";
        
        $__internal_3f8a56b1e372ea64fd4da3f3042c40f8d53abb2cbde86d2f707522285e58d977->leave($__internal_3f8a56b1e372ea64fd4da3f3042c40f8d53abb2cbde86d2f707522285e58d977_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Produits:Admin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 79,  214 => 71,  209 => 69,  206 => 68,  196 => 61,  192 => 60,  185 => 57,  181 => 56,  174 => 53,  170 => 52,  163 => 49,  159 => 48,  152 => 45,  148 => 44,  141 => 41,  137 => 40,  130 => 37,  126 => 36,  119 => 33,  115 => 32,  106 => 26,  100 => 25,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
