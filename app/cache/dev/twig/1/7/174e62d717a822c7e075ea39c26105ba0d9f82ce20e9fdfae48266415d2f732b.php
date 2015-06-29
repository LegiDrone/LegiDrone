<?php

/* PolytechProjetCoBundle:Admin:dashboardPilote.html.twig */
class __TwigTemplate_174e62d717a822c7e075ea39c26105ba0d9f82ce20e9fdfae48266415d2f732b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechProjetCoBundle:Admin:dashboardPilote.html.twig", 4);
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
        $__internal_fbb3297c0f80e354ceef5d1400fc5956eef9217a7e029af182f5453704b0cc68 = $this->env->getExtension("native_profiler");
        $__internal_fbb3297c0f80e354ceef5d1400fc5956eef9217a7e029af182f5453704b0cc68->enter($__internal_fbb3297c0f80e354ceef5d1400fc5956eef9217a7e029af182f5453704b0cc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Admin:dashboardPilote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbb3297c0f80e354ceef5d1400fc5956eef9217a7e029af182f5453704b0cc68->leave($__internal_fbb3297c0f80e354ceef5d1400fc5956eef9217a7e029af182f5453704b0cc68_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5192caaa80ec4b2c0e10fd9ff8b5fdba0e6b5642bfde3577d2cbdbc9957f071d = $this->env->getExtension("native_profiler");
        $__internal_5192caaa80ec4b2c0e10fd9ff8b5fdba0e6b5642bfde3577d2cbdbc9957f071d->enter($__internal_5192caaa80ec4b2c0e10fd9ff8b5fdba0e6b5642bfde3577d2cbdbc9957f071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5192caaa80ec4b2c0e10fd9ff8b5fdba0e6b5642bfde3577d2cbdbc9957f071d->leave($__internal_5192caaa80ec4b2c0e10fd9ff8b5fdba0e6b5642bfde3577d2cbdbc9957f071d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4050722addce1b1f9e0a7d2fbd7fe4e5297f5266f274e6993a7ed8d28b8d0324 = $this->env->getExtension("native_profiler");
        $__internal_4050722addce1b1f9e0a7d2fbd7fe4e5297f5266f274e6993a7ed8d28b8d0324->enter($__internal_4050722addce1b1f9e0a7d2fbd7fe4e5297f5266f274e6993a7ed8d28b8d0324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
  <h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>


<!--div class=\"row\"-->
  <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Documents</h3>
                  <div class=\"box-tools pull-right\">
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table no-margin\">
                      <thead>
                        <tr>
                          <th>Nom du document</th>
                          <th>Date fin de validité</th>
                          <th>Statut</th>
\t\t\t\t\t\t  <th></th>
\t\t\t\t\t\t  <th></th>
                        </tr>
                      </thead>
                      <tbody>                                 
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFichiers"]) ? $context["listeFichiers"] : $this->getContext($context, "listeFichiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 36
            echo "\t\t\t\t\t\t<tr>  
\t\t\t\t\t\t\t<td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "titre", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "dateValiditee", array()), "d-M-Y"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t";
            // line 39
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "dateValiditee", array()), "Ymd") > twig_date_format_filter($this->env, twig_date_converter($this->env, (("+" . (isset($context["dureeValiditee"]) ? $context["dureeValiditee"] : $this->getContext($context, "dureeValiditee"))) . "days"), "Europe/Paris"), "Ymd"))) {
                // line 40
                echo "\t\t\t\t\t\t\t\t<td><span class=\"label label-success\">Valide</span></td>
\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 41
$context["fichier"], "dateValiditee", array()), "Ymd") > twig_date_format_filter($this->env, twig_date_converter($this->env, "Europe/Paris"), "Ymd"))) {
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><span class=\"label label-warning\">Date en approche</span></td>
\t\t\t\t\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t\t\t\t\t<td><span class=\"label label-danger\">Expiré</span></td>
\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_dowload_fichiers", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\">Télécharger</a></td>
                            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_preview_fichiers", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">Aperçu</a></td>

\t\t\t\t\t\t</tr>\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                      </tbody>
                    </table>
                  </div><!--/.table-responsive -->
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("polytech_gestion_fichiers_homepage");
        echo "\" class=\"btn btn-sm btn-info btn-flat pull-left\">Ajouter un nouveau document</a>
                  <!--a href=\"javascript::;\" class=\"btn btn-sm btn-default btn-flat pull-right\">View All Orders</a-->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->


<!--div class=\"row\"-->
    <div class=\"box\">
        <div class=\"box-header\"> 
            <h3 class=\"box-title\">Documents par départements</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"col-md-8 col-sm-6 col-xs-12\">
                <div id=\"francemap\" style=\"width: 700px; height: 600px;\"></div>
            </div>
            <div class=\"col-md-4 col-sm-12 col-xs-12\">
                <div id=\"Test\" style=\" display:none;\"></div>
            </div>
        </div>        
    </div>

    


";
        
        $__internal_4050722addce1b1f9e0a7d2fbd7fe4e5297f5266f274e6993a7ed8d28b8d0324->leave($__internal_4050722addce1b1f9e0a7d2fbd7fe4e5297f5266f274e6993a7ed8d28b8d0324_prof);

    }

    public function getTemplateName()
    {
        return "PolytechProjetCoBundle:Admin:dashboardPilote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  133 => 51,  123 => 47,  118 => 46,  114 => 44,  108 => 41,  105 => 40,  103 => 39,  99 => 38,  95 => 37,  92 => 36,  88 => 35,  62 => 12,  59 => 11,  53 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
