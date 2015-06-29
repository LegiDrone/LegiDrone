<?php

/* PolytechProjetCoBundle::layout.html.twig */
class __TwigTemplate_0b20b4486b0c3e6e4f73de2d352109eeac3d3654745bab6373081eec0aa10c0a extends Twig_Template
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
        $__internal_c01d912df6250552b57a11aaa3fbcf40d11d02398fdc99ff8aafaca5d880caf9 = $this->env->getExtension("native_profiler");
        $__internal_c01d912df6250552b57a11aaa3fbcf40d11d02398fdc99ff8aafaca5d880caf9->enter($__internal_c01d912df6250552b57a11aaa3fbcf40d11d02398fdc99ff8aafaca5d880caf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle::layout.html.twig"));

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
                <div class=\"pull-left\">
                    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("polytech_projet_co_home");
        echo "\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Logo/legidrone.png"), "html", null, true);
        echo "\" height=\"48px\" width=\"48px\" alt=\"Logo\" />
                    </a>
                </div>
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("polytech_projet_co_home");
        echo "\" class=\"navbar-brand\">
                  <b>Legi</b>Drone
                </a>
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                <i class=\"fa fa-bars\"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-left\" id=\"navbar-collapse\">
              <ul class=\"nav navbar-nav\">
                  ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 70
            echo "                    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 71
                echo "                        <li class=\"active\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("polytech_projet_co_dashboardAdmin");
                echo "\">Tableau de bord<span class=\"sr-only\"></span></a></li>
                    ";
            } else {
                // line 73
                echo "                        <li class=\"active\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("polytech_projet_co_dashboard");
                echo "\">Tableau de bord<span class=\"sr-only\"></span></a></li>
                    ";
            }
            // line 75
            echo "                    
                    <li class=\"active\"><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("polytech_ecommerce_Produits");
            echo "\">Produits<span class=\"sr-only\"></span></a></li>
                  ";
        } else {
            // line 78
            echo "                    <li class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("polytech_projet_co_contact");
            echo "\">Contact <span class=\"sr-only\"></span></a></li>
                  ";
        }
        // line 80
        echo "                  
                  
              </ul>                        
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    

                  <!-- User Account Menu -->
                  
                      ";
        // line 91
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 92
            echo "                        ";
            $this->loadTemplate("PolytechUserBundle::UserDropDown.html.twig", "PolytechProjetCoBundle::layout.html.twig", 92)->display($context);
            // line 93
            echo "                      ";
        } else {
            // line 94
            echo "                        ";
            $this->loadTemplate("PolytechUserBundle::Connexion.html.twig", "PolytechProjetCoBundle::layout.html.twig", 94)->display($context);
            // line 95
            echo "                      ";
        }
        // line 96
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
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 112
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
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 247
        echo "  </body>

    
</html>";
        
        $__internal_c01d912df6250552b57a11aaa3fbcf40d11d02398fdc99ff8aafaca5d880caf9->leave($__internal_c01d912df6250552b57a11aaa3fbcf40d11d02398fdc99ff8aafaca5d880caf9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a564d49e52c8925763d21f34c3e143b430328d34446bfa3e00659fa143fb416a = $this->env->getExtension("native_profiler");
        $__internal_a564d49e52c8925763d21f34c3e143b430328d34446bfa3e00659fa143fb416a->enter($__internal_a564d49e52c8925763d21f34c3e143b430328d34446bfa3e00659fa143fb416a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet Collectif";
        
        $__internal_a564d49e52c8925763d21f34c3e143b430328d34446bfa3e00659fa143fb416a->leave($__internal_a564d49e52c8925763d21f34c3e143b430328d34446bfa3e00659fa143fb416a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71d3c305a40af91d9be8b44d5c1cd10ccdeceb0f094b28c685263d3e41b74242 = $this->env->getExtension("native_profiler");
        $__internal_71d3c305a40af91d9be8b44d5c1cd10ccdeceb0f094b28c685263d3e41b74242->enter($__internal_71d3c305a40af91d9be8b44d5c1cd10ccdeceb0f094b28c685263d3e41b74242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_71d3c305a40af91d9be8b44d5c1cd10ccdeceb0f094b28c685263d3e41b74242->leave($__internal_71d3c305a40af91d9be8b44d5c1cd10ccdeceb0f094b28c685263d3e41b74242_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd65b1a9b01b36fdcf404c18a8e4854a88c62c61a3c3b9cf4804a66530951da2 = $this->env->getExtension("native_profiler");
        $__internal_cd65b1a9b01b36fdcf404c18a8e4854a88c62c61a3c3b9cf4804a66530951da2->enter($__internal_cd65b1a9b01b36fdcf404c18a8e4854a88c62c61a3c3b9cf4804a66530951da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 110
        echo "        
          ";
        
        $__internal_cd65b1a9b01b36fdcf404c18a8e4854a88c62c61a3c3b9cf4804a66530951da2->leave($__internal_cd65b1a9b01b36fdcf404c18a8e4854a88c62c61a3c3b9cf4804a66530951da2_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8a7871f897bf21220fb9b32a673e7d748c3b8e49ab7227ce9f56033c6eb7258 = $this->env->getExtension("native_profiler");
        $__internal_c8a7871f897bf21220fb9b32a673e7d748c3b8e49ab7227ce9f56033c6eb7258->enter($__internal_c8a7871f897bf21220fb9b32a673e7d748c3b8e49ab7227ce9f56033c6eb7258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "        
    <!-- jQuery 2.1.4 -->    
    <script type=\"text/javascript\" src=\"";
        // line 127
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
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris.js charts -->
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- Sparkline -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- jvectormap -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
    <!-- SlimScroll -->
    <script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

    <!-- FastClick -->
    <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>

    <!-- AdminLTE App -->
    <script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        
    <!--Map-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.france.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Style/map/france_departement_jqvmap/jquery.vmap.colorsFrance.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
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
        // line 209
        echo $this->env->getExtension('routing')->getPath("polytech_preview_fichiers", array("id" => 7));
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
        
        $__internal_c8a7871f897bf21220fb9b32a673e7d748c3b8e49ab7227ce9f56033c6eb7258->leave($__internal_c8a7871f897bf21220fb9b32a673e7d748c3b8e49ab7227ce9f56033c6eb7258_prof);

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
        return array (  432 => 209,  398 => 178,  394 => 177,  390 => 176,  386 => 175,  382 => 174,  375 => 170,  369 => 167,  363 => 164,  357 => 161,  351 => 158,  346 => 156,  341 => 154,  334 => 150,  329 => 148,  325 => 147,  320 => 145,  314 => 142,  307 => 138,  293 => 127,  289 => 125,  283 => 124,  275 => 110,  269 => 109,  260 => 40,  255 => 38,  250 => 36,  245 => 34,  238 => 30,  233 => 28,  228 => 26,  221 => 22,  211 => 15,  205 => 12,  199 => 9,  196 => 8,  190 => 7,  178 => 5,  168 => 247,  166 => 124,  152 => 112,  150 => 109,  135 => 96,  132 => 95,  129 => 94,  126 => 93,  123 => 92,  121 => 91,  108 => 80,  102 => 78,  97 => 76,  94 => 75,  88 => 73,  82 => 71,  79 => 70,  77 => 69,  63 => 58,  57 => 55,  53 => 54,  39 => 42,  37 => 7,  32 => 5,  26 => 1,);
    }
}
