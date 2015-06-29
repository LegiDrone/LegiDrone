<?php

/* ::base.html.twig */
class __TwigTemplate_fc5db50e649ddb66456e3be7c1504f3bdb9f5abd874f17a4be022a59eb6ff2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd3a845536fb0eca63bd5182475548da436e549ce4ddf2e9370f3c2e94ff6831 = $this->env->getExtension("native_profiler");
        $__internal_cd3a845536fb0eca63bd5182475548da436e549ce4ddf2e9370f3c2e94ff6831->enter($__internal_cd3a845536fb0eca63bd5182475548da436e549ce4ddf2e9370f3c2e94ff6831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cd3a845536fb0eca63bd5182475548da436e549ce4ddf2e9370f3c2e94ff6831->leave($__internal_cd3a845536fb0eca63bd5182475548da436e549ce4ddf2e9370f3c2e94ff6831_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcdc16d8c946185f4bc71e95a55e3dbd35c11ad088e56635e053a5737f148ddf = $this->env->getExtension("native_profiler");
        $__internal_dcdc16d8c946185f4bc71e95a55e3dbd35c11ad088e56635e053a5737f148ddf->enter($__internal_dcdc16d8c946185f4bc71e95a55e3dbd35c11ad088e56635e053a5737f148ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dcdc16d8c946185f4bc71e95a55e3dbd35c11ad088e56635e053a5737f148ddf->leave($__internal_dcdc16d8c946185f4bc71e95a55e3dbd35c11ad088e56635e053a5737f148ddf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ff57be6381ffe99b7ea8fa9b10c5489291ce28e80666b4f97f81015e548d0a0 = $this->env->getExtension("native_profiler");
        $__internal_5ff57be6381ffe99b7ea8fa9b10c5489291ce28e80666b4f97f81015e548d0a0->enter($__internal_5ff57be6381ffe99b7ea8fa9b10c5489291ce28e80666b4f97f81015e548d0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ff57be6381ffe99b7ea8fa9b10c5489291ce28e80666b4f97f81015e548d0a0->leave($__internal_5ff57be6381ffe99b7ea8fa9b10c5489291ce28e80666b4f97f81015e548d0a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced59371d9110315d639bea6312119064adeee014746513e56abd7896e227d39 = $this->env->getExtension("native_profiler");
        $__internal_ced59371d9110315d639bea6312119064adeee014746513e56abd7896e227d39->enter($__internal_ced59371d9110315d639bea6312119064adeee014746513e56abd7896e227d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ced59371d9110315d639bea6312119064adeee014746513e56abd7896e227d39->leave($__internal_ced59371d9110315d639bea6312119064adeee014746513e56abd7896e227d39_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_049c715fb11ea56bb37abc7da9f7fcfcf9d4ffb9eff6b1fdc56d93c952a72b51 = $this->env->getExtension("native_profiler");
        $__internal_049c715fb11ea56bb37abc7da9f7fcfcf9d4ffb9eff6b1fdc56d93c952a72b51->enter($__internal_049c715fb11ea56bb37abc7da9f7fcfcf9d4ffb9eff6b1fdc56d93c952a72b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_049c715fb11ea56bb37abc7da9f7fcfcf9d4ffb9eff6b1fdc56d93c952a72b51->leave($__internal_049c715fb11ea56bb37abc7da9f7fcfcf9d4ffb9eff6b1fdc56d93c952a72b51_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
