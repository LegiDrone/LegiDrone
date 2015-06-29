<?php

/* GestionFichiersBundle:Default:fichier.html.twig */
class __TwigTemplate_cfe72ccc58afcd6610e6a23add9705a3b7cb845049d2bb4ec522ffe2919db963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "GestionFichiersBundle:Default:fichier.html.twig", 4);
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
        $__internal_2334b367732b3b809fdb056e836877e28cb1376e5c8be57cc042fd7530d085da = $this->env->getExtension("native_profiler");
        $__internal_2334b367732b3b809fdb056e836877e28cb1376e5c8be57cc042fd7530d085da->enter($__internal_2334b367732b3b809fdb056e836877e28cb1376e5c8be57cc042fd7530d085da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionFichiersBundle:Default:fichier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2334b367732b3b809fdb056e836877e28cb1376e5c8be57cc042fd7530d085da->leave($__internal_2334b367732b3b809fdb056e836877e28cb1376e5c8be57cc042fd7530d085da_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b4ed33aac7fc516a40c9e05f19fe13518fcc154b4ee65dd6890f7cab3b7a56a = $this->env->getExtension("native_profiler");
        $__internal_2b4ed33aac7fc516a40c9e05f19fe13518fcc154b4ee65dd6890f7cab3b7a56a->enter($__internal_2b4ed33aac7fc516a40c9e05f19fe13518fcc154b4ee65dd6890f7cab3b7a56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2b4ed33aac7fc516a40c9e05f19fe13518fcc154b4ee65dd6890f7cab3b7a56a->leave($__internal_2b4ed33aac7fc516a40c9e05f19fe13518fcc154b4ee65dd6890f7cab3b7a56a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd25dda2d55e43dfebab238507d87b0c0499e09c49d72be115a04c271bbd4c38 = $this->env->getExtension("native_profiler");
        $__internal_bd25dda2d55e43dfebab238507d87b0c0499e09c49d72be115a04c271bbd4c38->enter($__internal_bd25dda2d55e43dfebab238507d87b0c0499e09c49d72be115a04c271bbd4c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
<div class=\"box\">
    <div class=\"box-body\">
        <form method=\"post\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
      ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "register-box-body")));
        echo "

        <p class=\"login-box-msg\">Sélectionner le fichier à ajouter</p>

        ";
        // line 21
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "  
            
        <!--Premier champ : le titre du fichier-->
        <div class=\"form-group has-feedback\">
          ";
        // line 26
        echo "
          ";
        // line 28
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "

            ";
        // line 31
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
        </div>
            
            <table class=\"table table-responsive\">
                <tbody>
                    <tr>
                        <th>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateValiditee", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Date de validitée"));
        echo "</th>
                        <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateValiditee", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateValiditee", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Fichier"));
        echo "</th>
                        <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Fichier"));
        echo "</th>
                        <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "</td>
                    </tr>
                </tbody>
            </table>  

        <!--Le bouton de validation-->
        <div class=\"pull-right\">
              <button type=\"submit\" class=\"btn btn-primary btn-block\">Valider</button>
        </div>

      ";
        // line 58
        echo "      ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </form>
    </div>
</div>
        
";
        
        $__internal_bd25dda2d55e43dfebab238507d87b0c0499e09c49d72be115a04c271bbd4c38->leave($__internal_bd25dda2d55e43dfebab238507d87b0c0499e09c49d72be115a04c271bbd4c38_prof);

    }

    public function getTemplateName()
    {
        return "GestionFichiersBundle:Default:fichier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 58,  133 => 47,  129 => 46,  122 => 43,  118 => 42,  111 => 39,  107 => 38,  96 => 31,  90 => 28,  87 => 26,  79 => 21,  72 => 16,  68 => 15,  62 => 12,  59 => 11,  53 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
