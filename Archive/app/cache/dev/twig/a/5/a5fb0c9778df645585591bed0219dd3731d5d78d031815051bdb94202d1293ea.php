<?php

/* PolytechProjetCoBundle::layout.html.twig */
class __TwigTemplate_a5fb0c9778df645585591bed0219dd3731d5d78d031815051bdb94202d1293ea extends Twig_Template
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
        $__internal_30b917cfc2aeb590a58d5e22ad0000e23dcca7899ce6b22692339a66e87d3d48 = $this->env->getExtension("native_profiler");
        $__internal_30b917cfc2aeb590a58d5e22ad0000e23dcca7899ce6b22692339a66e87d3d48->enter($__internal_30b917cfc2aeb590a58d5e22ad0000e23dcca7899ce6b22692339a66e87d3d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "      
  </head>
    
    <body class=\"skin-blue layout-top-nav\">
    <div class=\"wrapper\">

      <header class=\"main-header\">               
        <nav class=\"navbar navbar-static-top\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("polytech_projet_co_home");
        echo "\" class=\"navbar-brand\"><b>Projet</b>Collectif</a>
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                <i class=\"fa fa-bars\"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-left\" id=\"navbar-collapse\">
              <ul class=\"nav navbar-nav\">
                  ";
        // line 61
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 62
            echo "                    <li class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("polytech_projet_co_dashboard");
            echo "\">Tableau de bord<span class=\"sr-only\"></span></a></li>
                    <li class=\"active\"><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("polytech_ecommerce_Produits");
            echo "\">Produits<span class=\"sr-only\"></span></a></li>
                  ";
        } else {
            // line 65
            echo "                    <li class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("polytech_projet_co_contact");
            echo "\">Contact <span class=\"sr-only\"></span></a></li>
                  ";
        }
        // line 67
        echo "                  
                  
              </ul>                        
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    

                  <!-- User Account Menu -->
                  
                      ";
        // line 78
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 79
            echo "                        ";
            $this->loadTemplate("PolytechUserBundle::UserDropDown.html.twig", "PolytechProjetCoBundle::layout.html.twig", 79)->display($context);
            // line 80
            echo "                      ";
        } else {
            // line 81
            echo "                        ";
            $this->loadTemplate("PolytechUserBundle::Connexion.html.twig", "PolytechProjetCoBundle::layout.html.twig", 81)->display($context);
            // line 82
            echo "                      ";
        }
        // line 83
        echo "                  
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class=\"content-wrapper\">
        <div class=\"container\">
          <!-- Content Header (Page header) -->


          <!-- Main content -->
          ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <!--footer class=\"main-footer\">
        <div class=\"container\">
          <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      <!--/footer-->
    </div><!-- ./wrapper -->

     ";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 192
        echo "  </body>

    
</html>";
        
        $__internal_30b917cfc2aeb590a58d5e22ad0000e23dcca7899ce6b22692339a66e87d3d48->leave($__internal_30b917cfc2aeb590a58d5e22ad0000e23dcca7899ce6b22692339a66e87d3d48_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e9fc0c49cc7edca54e631fb9754facc1a6ce7b466947aa3168455e55dcb2756 = $this->env->getExtension("native_profiler");
        $__internal_4e9fc0c49cc7edca54e631fb9754facc1a6ce7b466947aa3168455e55dcb2756->enter($__internal_4e9fc0c49cc7edca54e631fb9754facc1a6ce7b466947aa3168455e55dcb2756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet Collectif";
        
        $__internal_4e9fc0c49cc7edca54e631fb9754facc1a6ce7b466947aa3168455e55dcb2756->leave($__internal_4e9fc0c49cc7edca54e631fb9754facc1a6ce7b466947aa3168455e55dcb2756_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcb8685d457afa99eb63e4c6b79e0bf58c4e1eac835872ba7016a483df0cdab8 = $this->env->getExtension("native_profiler");
        $__internal_fcb8685d457afa99eb63e4c6b79e0bf58c4e1eac835872ba7016a483df0cdab8->enter($__internal_fcb8685d457afa99eb63e4c6b79e0bf58c4e1eac835872ba7016a483df0cdab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "      <!--MAP-->
      <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jqvmap.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
      
      <!--Style Perso-->
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/Perso/StylePerso.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- Bootstrap 3.3.4 -->
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
   
    <!-- FontAwesome 4.3.0 -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons 2.0.0 -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />    
    <!-- Theme style -->
      <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/css/AdminLTE_fixed.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
      <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <!-- iCheck -->
      <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <!-- Morris chart -->
      <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/morris/morris.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

      
    <!-- jvectormap -->
      <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <!-- Date Picker -->
      <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <!-- Daterange picker -->
      <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <!-- bootstrap wysihtml5 - text editor -->
      <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_fcb8685d457afa99eb63e4c6b79e0bf58c4e1eac835872ba7016a483df0cdab8->leave($__internal_fcb8685d457afa99eb63e4c6b79e0bf58c4e1eac835872ba7016a483df0cdab8_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_64ab7671a91afacab9b123e396257639e7f12d9fc241b9f266ae2bbc887bf1bf = $this->env->getExtension("native_profiler");
        $__internal_64ab7671a91afacab9b123e396257639e7f12d9fc241b9f266ae2bbc887bf1bf->enter($__internal_64ab7671a91afacab9b123e396257639e7f12d9fc241b9f266ae2bbc887bf1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 97
        echo "        
          ";
        
        $__internal_64ab7671a91afacab9b123e396257639e7f12d9fc241b9f266ae2bbc887bf1bf->leave($__internal_64ab7671a91afacab9b123e396257639e7f12d9fc241b9f266ae2bbc887bf1bf_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c7eb04b0298c2254cb4d29a3068d8d1f4bfdee22deb3e546c074524172f74a7 = $this->env->getExtension("native_profiler");
        $__internal_2c7eb04b0298c2254cb4d29a3068d8d1f4bfdee22deb3e546c074524172f74a7->enter($__internal_2c7eb04b0298c2254cb4d29a3068d8d1f4bfdee22deb3e546c074524172f74a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "        
    <!-- jQuery 2.1.4 -->    
    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        
    <!-- jQuery UI 1.11.2 -->
    <script src=\"http://code.jquery.com/ui/1.11.2/jquery-ui.min.js\" type=\"text/javascript\"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
        
    <!-- Bootstrap 3.3.2 JS -->
    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris.js charts -->
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- Sparkline -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- jvectormap -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
    <!-- SlimScroll -->
    <script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

    <!-- FastClick -->
    <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>

    <!-- AdminLTE App -->
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        
    <!--Map-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.france.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.colorsFrance.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
\t<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$('#francemap').vectorMap({
\t\t    map: 'france_fr',
\t\t\thoverOpacity: 0.5,
\t\t\thoverColor: false,
\t\t\tbackgroundColor: \"#ffffff\",
\t\t\tcolors: couleurs,
\t\t\tborderColor: \"#000000\",
\t\t\tselectedColor: \"#EC0000\",
\t\t\tenableZoom: true,
\t\t\tshowTooltip: true,
\t\t    onRegionClick: function(element, code, region)
\t\t    {
\t\t        var message = 'Département : \"'
\t\t            + region 
\t\t            + '\" || Code : \"'
\t\t            + code
\t\t\t\t\t+ '\"';
             
\t\t        alert(message);
\t\t    }
\t\t});
\t});
\t</script>
        
    ";
        
        $__internal_2c7eb04b0298c2254cb4d29a3068d8d1f4bfdee22deb3e546c074524172f74a7->leave($__internal_2c7eb04b0298c2254cb4d29a3068d8d1f4bfdee22deb3e546c074524172f74a7_prof);

    }

    public function getTemplateName()
    {
        return "PolytechProjetCoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 163,  359 => 162,  355 => 161,  348 => 157,  342 => 154,  336 => 151,  330 => 148,  324 => 145,  319 => 143,  314 => 141,  307 => 137,  302 => 135,  298 => 134,  293 => 132,  287 => 129,  280 => 125,  266 => 114,  262 => 112,  256 => 111,  248 => 97,  242 => 96,  233 => 40,  228 => 38,  223 => 36,  218 => 34,  211 => 30,  206 => 28,  201 => 26,  194 => 22,  184 => 15,  178 => 12,  172 => 9,  169 => 8,  163 => 7,  151 => 5,  141 => 192,  139 => 111,  125 => 99,  123 => 96,  108 => 83,  105 => 82,  102 => 81,  99 => 80,  96 => 79,  94 => 78,  81 => 67,  75 => 65,  70 => 63,  65 => 62,  63 => 61,  51 => 52,  39 => 42,  37 => 7,  32 => 5,  26 => 1,);
    }
}
