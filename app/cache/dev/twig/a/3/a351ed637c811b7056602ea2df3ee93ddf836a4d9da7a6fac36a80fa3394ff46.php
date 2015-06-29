<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_a351ed637c811b7056602ea2df3ee93ddf836a4d9da7a6fac36a80fa3394ff46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PolytechProjetCoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc349f527efb75404a6bf6c54815ec3bdaa70efb7f05883b5a1f154c1c71842c = $this->env->getExtension("native_profiler");
        $__internal_cc349f527efb75404a6bf6c54815ec3bdaa70efb7f05883b5a1f154c1c71842c->enter($__internal_cc349f527efb75404a6bf6c54815ec3bdaa70efb7f05883b5a1f154c1c71842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc349f527efb75404a6bf6c54815ec3bdaa70efb7f05883b5a1f154c1c71842c->leave($__internal_cc349f527efb75404a6bf6c54815ec3bdaa70efb7f05883b5a1f154c1c71842c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d53204d14400471a2ca2271cdf0121fc62267c45fd8d4bd3c44f8f45a42e85ad = $this->env->getExtension("native_profiler");
        $__internal_d53204d14400471a2ca2271cdf0121fc62267c45fd8d4bd3c44f8f45a42e85ad->enter($__internal_d53204d14400471a2ca2271cdf0121fc62267c45fd8d4bd3c44f8f45a42e85ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        // line 15
        echo "
  ";
        // line 17
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_d53204d14400471a2ca2271cdf0121fc62267c45fd8d4bd3c44f8f45a42e85ad->leave($__internal_d53204d14400471a2ca2271cdf0121fc62267c45fd8d4bd3c44f8f45a42e85ad_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0459cb2f8c30fec23b07ad7791de47e29076024985b30628a480fefbf3feec7 = $this->env->getExtension("native_profiler");
        $__internal_b0459cb2f8c30fec23b07ad7791de47e29076024985b30628a480fefbf3feec7->enter($__internal_b0459cb2f8c30fec23b07ad7791de47e29076024985b30628a480fefbf3feec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "  ";
        
        $__internal_b0459cb2f8c30fec23b07ad7791de47e29076024985b30628a480fefbf3feec7->leave($__internal_b0459cb2f8c30fec23b07ad7791de47e29076024985b30628a480fefbf3feec7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  60 => 17,  52 => 19,  49 => 17,  46 => 15,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }
}
