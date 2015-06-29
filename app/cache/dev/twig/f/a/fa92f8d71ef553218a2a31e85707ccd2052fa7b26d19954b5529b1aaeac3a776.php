<?php

/* PolytechProjetCoBundle:Admin:dashbord.html.twig */
class __TwigTemplate_fa92f8d71ef553218a2a31e85707ccd2052fa7b26d19954b5529b1aaeac3a776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechProjetCoBundle:Admin:dashbord.html.twig", 4);
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
        $__internal_718eb848b32d29085068b7e988d2560015dd12a76d8ae33675e9a3fbad130495 = $this->env->getExtension("native_profiler");
        $__internal_718eb848b32d29085068b7e988d2560015dd12a76d8ae33675e9a3fbad130495->enter($__internal_718eb848b32d29085068b7e988d2560015dd12a76d8ae33675e9a3fbad130495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Admin:dashbord.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718eb848b32d29085068b7e988d2560015dd12a76d8ae33675e9a3fbad130495->leave($__internal_718eb848b32d29085068b7e988d2560015dd12a76d8ae33675e9a3fbad130495_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd81915cd74c20825635ef739dd3f75e6849deead8bbb2243b8d56f993ca562d = $this->env->getExtension("native_profiler");
        $__internal_cd81915cd74c20825635ef739dd3f75e6849deead8bbb2243b8d56f993ca562d->enter($__internal_cd81915cd74c20825635ef739dd3f75e6849deead8bbb2243b8d56f993ca562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cd81915cd74c20825635ef739dd3f75e6849deead8bbb2243b8d56f993ca562d->leave($__internal_cd81915cd74c20825635ef739dd3f75e6849deead8bbb2243b8d56f993ca562d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5b7e8e3028eef94e5b7c5fcb783bcc4564814949feb247953dda0bb78c1ba4f = $this->env->getExtension("native_profiler");
        $__internal_f5b7e8e3028eef94e5b7c5fcb783bcc4564814949feb247953dda0bb78c1ba4f->enter($__internal_f5b7e8e3028eef94e5b7c5fcb783bcc4564814949feb247953dda0bb78c1ba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
  <h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["NomEntreprise"]) ? $context["NomEntreprise"] : $this->getContext($context, "NomEntreprise")), "html", null, true);
        echo "</h2>
<div class=\"row\">
    <div class=\"col-md-3 col-sm-6 col-xs-12\">
      <div class=\"info-box bg-green\">
        <span class=\"info-box-icon\"><i class=\"fa fa-thumbs-o-up\"></i></span>
        <div class=\"info-box-content\">
          <h3><span>MAP</span></h3>
          
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col -->
    <div class=\"col-md-3 col-sm-6 col-xs-12\">
      <div class=\"info-box\">
        <span class=\"info-box-icon bg-yellow\"><i class=\"fa fa-files-o\"></i></span>
        <div class=\"info-box-content\">
          <span class=\"info-box-text\">Fichiers</span>
          <span class=\"info-box-number\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["nbFichiers"]) ? $context["nbFichiers"] : $this->getContext($context, "nbFichiers")), "html", null, true);
        echo "</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col --> 
    <div class=\"col-md-3 col-sm-6 col-xs-12\">
        <div class=\"info-box\">
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("drones");
        echo "\">
                <span class=\"info-box-icon bg-blue\"><i class=\"glyphicon glyphicon-plane\"></i></span>
            </a>
        <div class=\"info-box-content\">
          <span class=\"info-box-text\">Drones</span>
          <span class=\"info-box-number\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["nbDrones"]) ? $context["nbDrones"] : $this->getContext($context, "nbDrones")), "html", null, true);
        echo "</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col --> 
    <div class=\"col-md-3 col-sm-6 col-xs-12\">
      <div class=\"info-box\">
          <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("polytech_user_pilotes");
        echo "\" >
            <span class=\"info-box-icon bg-teal\"><i class=\"glyphicon glyphicon-user\"></i></span>
          </a>
        <div class=\"info-box-content\">
          <span class=\"info-box-text\">Pilotes</span>
          <span class=\"info-box-number\">0</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col --> 
</div>

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
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFichiers"]) ? $context["listeFichiers"] : $this->getContext($context, "listeFichiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 77
            echo "\t\t\t\t\t\t<tr>  
\t\t\t\t\t\t\t<td> ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "titre", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> ";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "dateValiditee", array()), "d-M-Y"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t";
            // line 80
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "dateValiditee", array()), "Ymd") > twig_date_format_filter($this->env, twig_date_converter($this->env, (("+" . (isset($context["dureeValiditee"]) ? $context["dureeValiditee"] : $this->getContext($context, "dureeValiditee"))) . "days"), "Europe/Paris"), "Ymd"))) {
                // line 81
                echo "\t\t\t\t\t\t\t\t<td><span class=\"label label-success\">Valide</span></td>
\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 82
$context["fichier"], "dateValiditee", array()), "Ymd") > twig_date_format_filter($this->env, twig_date_converter($this->env, "Europe/Paris"), "Ymd"))) {
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><span class=\"label label-warning\">Date en approche</span></td>
\t\t\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t\t\t<td><span class=\"label label-danger\">Expiré</span></td>
\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_dowload_fichiers", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\">Télécharger</a></td>
                            <td><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_preview_fichiers", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">Aperçu</a></td>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polytech_suppresion_fichiers", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
\t\t\t\t\t\t</tr>\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                      </tbody>
                    </table>
                  </div><!--/.table-responsive -->
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
\t\t\t\t<a href=\"";
        // line 97
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
        
        $__internal_f5b7e8e3028eef94e5b7c5fcb783bcc4564814949feb247953dda0bb78c1ba4f->leave($__internal_f5b7e8e3028eef94e5b7c5fcb783bcc4564814949feb247953dda0bb78c1ba4f_prof);

    }

    public function getTemplateName()
    {
        return "PolytechProjetCoBundle:Admin:dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 97,  191 => 92,  182 => 89,  178 => 88,  173 => 87,  169 => 85,  163 => 82,  160 => 81,  158 => 80,  154 => 79,  150 => 78,  147 => 77,  143 => 76,  109 => 45,  100 => 39,  92 => 34,  83 => 28,  62 => 12,  59 => 11,  53 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
