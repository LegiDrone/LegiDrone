<?php

/* PolytechProjetCoBundle::layoutAdmin.html.twig */
class __TwigTemplate_9f5311bf07c72b759ab346ccd122c6bca4281bd79e870355bd25d25ba609331d extends Twig_Template
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
        $__internal_71f4f0d90d7794f77b40fe7fbaae908d1d96bb9b84bddb47c6d2ec5203f0805f = $this->env->getExtension("native_profiler");
        $__internal_71f4f0d90d7794f77b40fe7fbaae908d1d96bb9b84bddb47c6d2ec5203f0805f->enter($__internal_71f4f0d90d7794f77b40fe7fbaae908d1d96bb9b84bddb47c6d2ec5203f0805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle::layoutAdmin.html.twig"));

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
            <div class=\"pull-left\">
                <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Logo/legidrone.png"), "html", null, true);
        echo "\" height=\"48px\" width=\"48px\" alt=\"Logo\" />
            </div>
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\"><b>L</b>Drone</span>
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\"><b>Legi</b>Drone</span>
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
        // line 75
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 76
            echo "                    ";
            $this->loadTemplate("PolytechUserBundle::UserDropDown.html.twig", "PolytechProjetCoBundle::layoutAdmin.html.twig", 76)->display($context);
            // line 77
            echo "                  ";
        } else {
            // line 78
            echo "                    ";
            $this->loadTemplate("PolytechUserBundle::Connexion.html.twig", "PolytechProjetCoBundle::layoutAdmin.html.twig", 78)->display($context);
            // line 79
            echo "                  ";
        }
        // line 80
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
        // line 89
        $this->loadTemplate("PolytechProjetCoBundle:Layout:LeftMenu.html.twig", "PolytechProjetCoBundle::layoutAdmin.html.twig", 89)->display($context);
        // line 90
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
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 105
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
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 237
        echo " 
  </body>
</html>";
        
        $__internal_71f4f0d90d7794f77b40fe7fbaae908d1d96bb9b84bddb47c6d2ec5203f0805f->leave($__internal_71f4f0d90d7794f77b40fe7fbaae908d1d96bb9b84bddb47c6d2ec5203f0805f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbeb146976456007888cc954198e30d2f66dd93f55375dbe59a8f05f295b8ecb = $this->env->getExtension("native_profiler");
        $__internal_cbeb146976456007888cc954198e30d2f66dd93f55375dbe59a8f05f295b8ecb->enter($__internal_cbeb146976456007888cc954198e30d2f66dd93f55375dbe59a8f05f295b8ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet Collectif";
        
        $__internal_cbeb146976456007888cc954198e30d2f66dd93f55375dbe59a8f05f295b8ecb->leave($__internal_cbeb146976456007888cc954198e30d2f66dd93f55375dbe59a8f05f295b8ecb_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1d5fc789856f1c8b5788662146d0bde0f38b5246f6722729fb8a134eead58ee = $this->env->getExtension("native_profiler");
        $__internal_c1d5fc789856f1c8b5788662146d0bde0f38b5246f6722729fb8a134eead58ee->enter($__internal_c1d5fc789856f1c8b5788662146d0bde0f38b5246f6722729fb8a134eead58ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c1d5fc789856f1c8b5788662146d0bde0f38b5246f6722729fb8a134eead58ee->leave($__internal_c1d5fc789856f1c8b5788662146d0bde0f38b5246f6722729fb8a134eead58ee_prof);

    }

    // line 102
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d319308b856fec75c7850b471d07a2bf8d547ad74ec848f681351b619d7535a = $this->env->getExtension("native_profiler");
        $__internal_3d319308b856fec75c7850b471d07a2bf8d547ad74ec848f681351b619d7535a->enter($__internal_3d319308b856fec75c7850b471d07a2bf8d547ad74ec848f681351b619d7535a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 103
        echo "        
          ";
        
        $__internal_3d319308b856fec75c7850b471d07a2bf8d547ad74ec848f681351b619d7535a->leave($__internal_3d319308b856fec75c7850b471d07a2bf8d547ad74ec848f681351b619d7535a_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6695291846bdcd6f1df4eae452dd249dc90d550d09a8d3fcd3f73120ede24166 = $this->env->getExtension("native_profiler");
        $__internal_6695291846bdcd6f1df4eae452dd249dc90d550d09a8d3fcd3f73120ede24166->enter($__internal_6695291846bdcd6f1df4eae452dd249dc90d550d09a8d3fcd3f73120ede24166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "    <!-- jQuery 2.1.4 -->    
    <script type=\"text/javascript\" src=\"";
        // line 119
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
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris.js charts -->
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- Sparkline -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- jvectormap -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
    <!-- SlimScroll -->
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

    <!-- FastClick -->
    <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>

    <!-- AdminLTE App -->
    <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
      
     <!--Map-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.france.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.colorsFrance.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$('#francemap').vectorMap({
\t\t    map: 'france_fr',
\t\t\thoverOpacity: 0.5,
\t\t\thoverColor: false,
\t\t\tbackgroundColor: \"#ffffff\",
\t\t\tcolors: couleurs,
\t\t\tborderColor: \"#000000\",
\t\t\tenableZoom: true,
\t\t\tshowTooltip: true,
            onRegionClick: function(element, code, region)
\t\t    {
                \$.ajax({
                    type : 'get',
                    url : 'http://localhost/ProjetCo/web/app_dev.php/departements',
                    //url : Routing.generate('departements'),
                    success: function(data){ 
                        if(parseInt(code) in data)//presence du département
                        {
                            var targetElement;
                            targetElement =  document.getElementById(\"Test\") ;
                            if (targetElement.style.display == \"none\")
                            {
                                targetElement.style.display = \"\" ;
                            }
                            //affichage du text
                            targetElement.innerHTML =
                                \"<table class=&rdquo;table table-responsive&rdquo;><tbody><tr><th>Titre </th> <td>\" + data[parseInt(code)][0] + \"</td></tr>\"+
                                \"<tr><th>valide jusqu'au</th> <td>\" + data[parseInt(code)][3][\"date\"].split(\" \")[0].split(\"-\")[2] + \"/\"+data[parseInt(code)][3][\"date\"].split(\" \")[0].split(\"-\")[1]+ \"/\"+ data[parseInt(code)][3][\"date\"].split(\" \")[0].split(\"-\")[0] +\"</td></tr>\"+
                                \"<tr><td><a href=";
        // line 201
        echo $this->env->getExtension('routing')->getPath("polytech_preview_fichiers", array("id" => 15));
        echo " target= &rdquo;_blank&rdquo;>afficher</a> </td></tr></tbody></table>\";
                        }
                        else
                        { 
                            var targetElement;
                            targetElement =  document.getElementById(\"Test\") ;
                            if (targetElement.style.display == \"\")
                            {
                                targetElement.style.display = \"none\" ;
                            }
                        }
                    }
                });
            }
\t\t});
       \$.ajax({
            type : 'get',
           url : 'http://localhost/ProjetCo/web/app_dev.php/departements',
           //url : Routing.generate('departements'),
            success: function(data){ 
                \$.each(data, function(index, value){         
                    var country_colors = {};
                    if(index < 10) index = \"0\"+ index;
                    if(value[4] == 0)country_colors[index] = '#FFFFFF'; //rien
                    if(value[4] == 1)country_colors[index] = '#16B84E';//valide
                    if(value[4] == 2)country_colors[index] = '#FCD21C'; //bientot
                    if(value[4] == 3)country_colors[index] = '#ED0000'; //expiré
                    if(value[4] == 4)country_colors[index] = '#77B5FE'; //traitement 
                    
                    jQuery('#francemap').vectorMap('set', 'colors', country_colors);
                });
            }
            });
\t});
\t</script> 
      
";
        
        $__internal_6695291846bdcd6f1df4eae452dd249dc90d550d09a8d3fcd3f73120ede24166->leave($__internal_6695291846bdcd6f1df4eae452dd249dc90d550d09a8d3fcd3f73120ede24166_prof);

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
        return array (  401 => 201,  367 => 170,  363 => 169,  359 => 168,  355 => 167,  351 => 166,  344 => 162,  338 => 159,  332 => 156,  326 => 153,  320 => 150,  315 => 148,  310 => 146,  303 => 142,  298 => 140,  294 => 139,  289 => 137,  283 => 134,  276 => 130,  262 => 119,  259 => 118,  253 => 117,  245 => 103,  239 => 102,  230 => 47,  224 => 44,  218 => 41,  212 => 38,  206 => 35,  200 => 32,  194 => 29,  187 => 25,  175 => 16,  169 => 13,  163 => 10,  159 => 8,  153 => 7,  141 => 5,  132 => 237,  130 => 117,  116 => 105,  114 => 102,  100 => 90,  98 => 89,  87 => 80,  84 => 79,  81 => 78,  78 => 77,  75 => 76,  73 => 75,  53 => 58,  48 => 56,  39 => 49,  37 => 7,  32 => 5,  26 => 1,);
    }
}
