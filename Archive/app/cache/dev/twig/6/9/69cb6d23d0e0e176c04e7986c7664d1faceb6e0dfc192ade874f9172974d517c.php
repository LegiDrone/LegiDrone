<?php

/* PolytechProjetCoBundle::layoutAdmin.html.twig */
class __TwigTemplate_69cb6d23d0e0e176c04e7986c7664d1faceb6e0dfc192ade874f9172974d517c extends Twig_Template
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
        $__internal_2f61a607d00acab98451ade5dfe2f5595af77098d98cd98f71ff80260698d98c = $this->env->getExtension("native_profiler");
        $__internal_2f61a607d00acab98451ade5dfe2f5595af77098d98cd98f71ff80260698d98c->enter($__internal_2f61a607d00acab98451ade5dfe2f5595af77098d98cd98f71ff80260698d98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle::layoutAdmin.html.twig"));

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
        // line 49
        echo "
  </head>
  <body class=\"skin-blue sidebar-mini\">
    <div class=\"wrapper\">
      
      <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("polytech_projet_co_home");
        echo "\" class=\"logo\">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\"><b>P</b>Co</span>
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\"><b>Projet</b>Collectif</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- User Account Menu -->
                  <li class=\"dropdown user user-menu\">
                  ";
        // line 72
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 73
            echo "                    ";
            $this->loadTemplate("PolytechUserBundle::UserDropDown.html.twig", "PolytechProjetCoBundle::layoutAdmin.html.twig", 73)->display($context);
            // line 74
            echo "                  ";
        } else {
            // line 75
            echo "                    ";
            $this->loadTemplate("PolytechUserBundle::Connexion.html.twig", "PolytechProjetCoBundle::layoutAdmin.html.twig", 75)->display($context);
            // line 76
            echo "                  ";
        }
        // line 77
        echo "                </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          ";
        // line 86
        $this->loadTemplate("PolytechProjetCoBundle:Layout:LeftMenu.html.twig", "PolytechProjetCoBundle::layoutAdmin.html.twig", 86)->display($context);
        // line 87
        echo "        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
        <!-- Full Width Column -->
      <div class=\"content-wrapper\">
        <div class=\"content\">
          <!-- Content Header (Page header) -->


          <!-- Main content -->
          ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
        
      <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
      </div>
      
      
";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 192
        echo " 
  </body>
</html>";
        
        $__internal_2f61a607d00acab98451ade5dfe2f5595af77098d98cd98f71ff80260698d98c->leave($__internal_2f61a607d00acab98451ade5dfe2f5595af77098d98cd98f71ff80260698d98c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d37ea7cfca41c5de901497544fcee021e7726d50895ec211f279b83103fc8267 = $this->env->getExtension("native_profiler");
        $__internal_d37ea7cfca41c5de901497544fcee021e7726d50895ec211f279b83103fc8267->enter($__internal_d37ea7cfca41c5de901497544fcee021e7726d50895ec211f279b83103fc8267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet Collectif";
        
        $__internal_d37ea7cfca41c5de901497544fcee021e7726d50895ec211f279b83103fc8267->leave($__internal_d37ea7cfca41c5de901497544fcee021e7726d50895ec211f279b83103fc8267_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11882b2dd4996b7d522e049ff05bdd0969103865dc581dad55b231a9199328de = $this->env->getExtension("native_profiler");
        $__internal_11882b2dd4996b7d522e049ff05bdd0969103865dc581dad55b231a9199328de->enter($__internal_11882b2dd4996b7d522e049ff05bdd0969103865dc581dad55b231a9199328de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "      
      <!--MAP-->
      <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jqvmap.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
      
      <!--Style Perso-->
      <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/Perso/StylePerso.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- Bootstrap 3.3.4 -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" /> 
      
    <!-- FontAwesome 4.3.0 -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- Ionicons 2.0.0 -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />  
      
    <!-- Theme style -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- iCheck -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- Morris chart -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- jvectormap -->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- Date Picker -->
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- Daterange picker -->
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    <!-- bootstrap wysihtml5 - text editor -->
    <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_11882b2dd4996b7d522e049ff05bdd0969103865dc581dad55b231a9199328de->leave($__internal_11882b2dd4996b7d522e049ff05bdd0969103865dc581dad55b231a9199328de_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c6853a03908cb05e442868146062e16fd8330287c6924c2da87ec909a1d2a14 = $this->env->getExtension("native_profiler");
        $__internal_3c6853a03908cb05e442868146062e16fd8330287c6924c2da87ec909a1d2a14->enter($__internal_3c6853a03908cb05e442868146062e16fd8330287c6924c2da87ec909a1d2a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "        
          ";
        
        $__internal_3c6853a03908cb05e442868146062e16fd8330287c6924c2da87ec909a1d2a14->leave($__internal_3c6853a03908cb05e442868146062e16fd8330287c6924c2da87ec909a1d2a14_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78f3bb55a72a18cb9b8ffdd3460c95393f43adfc243d21b32eadb64bd0abacf3 = $this->env->getExtension("native_profiler");
        $__internal_78f3bb55a72a18cb9b8ffdd3460c95393f43adfc243d21b32eadb64bd0abacf3->enter($__internal_78f3bb55a72a18cb9b8ffdd3460c95393f43adfc243d21b32eadb64bd0abacf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    <!-- jQuery 2.1.4 -->    
    <script type=\"text/javascript\" src=\"";
        // line 116
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
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris.js charts -->
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- Sparkline -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- jvectormap -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
    <!-- SlimScroll -->
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

    <!-- FastClick -->
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>

    <!-- AdminLTE App -->
    <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
      
        <!--Map-->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.france.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 165
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
        
        $__internal_78f3bb55a72a18cb9b8ffdd3460c95393f43adfc243d21b32eadb64bd0abacf3->leave($__internal_78f3bb55a72a18cb9b8ffdd3460c95393f43adfc243d21b32eadb64bd0abacf3_prof);

    }

    public function getTemplateName()
    {
        return "PolytechProjetCoBundle::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 165,  349 => 164,  345 => 163,  338 => 159,  332 => 156,  326 => 153,  320 => 150,  314 => 147,  309 => 145,  304 => 143,  297 => 139,  292 => 137,  288 => 136,  283 => 134,  277 => 131,  270 => 127,  256 => 116,  253 => 115,  247 => 114,  239 => 100,  233 => 99,  224 => 47,  218 => 44,  212 => 41,  206 => 38,  200 => 35,  194 => 32,  188 => 29,  181 => 25,  169 => 16,  163 => 13,  157 => 10,  153 => 8,  147 => 7,  135 => 5,  126 => 192,  124 => 114,  110 => 102,  108 => 99,  94 => 87,  92 => 86,  81 => 77,  78 => 76,  75 => 75,  72 => 74,  69 => 73,  67 => 72,  48 => 56,  39 => 49,  37 => 7,  32 => 5,  26 => 1,);
    }
}
