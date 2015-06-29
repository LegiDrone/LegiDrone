<?php

/* PolytechEcommerceBundle:Produits:Admin/edit.html.twig */
class __TwigTemplate_b6c01f5208300fe324036899ec659970b043939c55637c38fd1d636e48302654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechEcommerceBundle:Produits:Admin/edit.html.twig", 1);
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
        $__internal_f9b7cf59584c225a8ca65214a8d4abe29d02182a4b7bf419e956e8c1090f8b03 = $this->env->getExtension("native_profiler");
        $__internal_f9b7cf59584c225a8ca65214a8d4abe29d02182a4b7bf419e956e8c1090f8b03->enter($__internal_f9b7cf59584c225a8ca65214a8d4abe29d02182a4b7bf419e956e8c1090f8b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechEcommerceBundle:Produits:Admin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b7cf59584c225a8ca65214a8d4abe29d02182a4b7bf419e956e8c1090f8b03->leave($__internal_f9b7cf59584c225a8ca65214a8d4abe29d02182a4b7bf419e956e8c1090f8b03_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39e85b11501b911756557937c2e365721cbe1991a0c27d4c06f3b9ba2dd2f597 = $this->env->getExtension("native_profiler");
        $__internal_39e85b11501b911756557937c2e365721cbe1991a0c27d4c06f3b9ba2dd2f597->enter($__internal_39e85b11501b911756557937c2e365721cbe1991a0c27d4c06f3b9ba2dd2f597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Produits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39e85b11501b911756557937c2e365721cbe1991a0c27d4c06f3b9ba2dd2f597->leave($__internal_39e85b11501b911756557937c2e365721cbe1991a0c27d4c06f3b9ba2dd2f597_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_41c9ecd461fca0d72076bb4cc112025f599c7df92a91e12c044d9abcabe8e602 = $this->env->getExtension("native_profiler");
        $__internal_41c9ecd461fca0d72076bb4cc112025f599c7df92a91e12c044d9abcabe8e602->enter($__internal_41c9ecd461fca0d72076bb4cc112025f599c7df92a91e12c044d9abcabe8e602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
  <h2>Editer un produit</h2>
<div class=\"box\">
    <div class=\"box-body\">
        <div class=\"col-md-6\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMediaId", array()), "AssetPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMediaId", array()), "name", array()), "html", null, true);
        echo "\" class=\"img-Products-Details\">
        </div>
        <div class=\"col-md-6\">
            <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "


                <table class=\"table table-responsive\">
                    <tbody>
                        <tr>
                            <th>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "</th>
                            <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Description"));
        echo "</th>
                            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prix"));
        echo "</th>
                            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "disponible", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Disponible"));
        echo "</th>
                            <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "disponible", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "disponible", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media_id", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Choix du fichier"));
        echo "</th>
                            <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media_id", array()), "file", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media_id", array()), "file", array()), 'widget');
        echo "</td>
                        </tr><tr>
                            <th>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media_id", array()), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom du fichier"));
        echo "</th>
                            <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media_id", array()), "name", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "media_id", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tva_id", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "TVA"));
        echo "</th>
                            <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tva_id", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tva_id", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categories_id", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Catégories"));
        echo "</th>
                            <td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categories_id", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categories_id", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                        </tr>
                    </tbody>
                </table>


                ";
        // line 69
        echo "                <div class=\"pull-right\">
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Mettre à jour"));
        echo "
                </div>
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "

                </form>
        </div>
    </div>
    <div class=\"box-footer\">
        <div class=\"col-xs-6\">
            <div class=\"pull-center\">
                <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("admin_produits");
        echo "\" class=\"btn btn-primary\">
                    Retour à la liste
                </a>
            </div>

        </div>
        <div class=\"col-xs-6\">
            ";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Supprimer"));
        echo "
            ";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_41c9ecd461fca0d72076bb4cc112025f599c7df92a91e12c044d9abcabe8e602->leave($__internal_41c9ecd461fca0d72076bb4cc112025f599c7df92a91e12c044d9abcabe8e602_prof);

    }

    public function getTemplateName()
    {
        return "PolytechEcommerceBundle:Produits:Admin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 89,  245 => 88,  241 => 87,  231 => 80,  220 => 72,  215 => 70,  212 => 69,  202 => 62,  198 => 61,  191 => 58,  187 => 57,  180 => 54,  176 => 53,  170 => 51,  166 => 50,  159 => 47,  155 => 46,  148 => 43,  144 => 42,  137 => 39,  133 => 38,  126 => 35,  122 => 34,  113 => 28,  107 => 27,  99 => 24,  92 => 19,  83 => 16,  80 => 15,  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
