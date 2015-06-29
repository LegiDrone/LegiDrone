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
        $__internal_20d7a7fafa194aacc41bd2b6d53503a94a885aec79b3efe3cde932ad3dae7542 = $this->env->getExtension("native_profiler");
        $__internal_20d7a7fafa194aacc41bd2b6d53503a94a885aec79b3efe3cde932ad3dae7542->enter($__internal_20d7a7fafa194aacc41bd2b6d53503a94a885aec79b3efe3cde932ad3dae7542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Admin:dashbord.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d7a7fafa194aacc41bd2b6d53503a94a885aec79b3efe3cde932ad3dae7542->leave($__internal_20d7a7fafa194aacc41bd2b6d53503a94a885aec79b3efe3cde932ad3dae7542_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_30fba0566faa506facef13480df85e7f2d782f0de64c9a593e919d160d86350e = $this->env->getExtension("native_profiler");
        $__internal_30fba0566faa506facef13480df85e7f2d782f0de64c9a593e919d160d86350e->enter($__internal_30fba0566faa506facef13480df85e7f2d782f0de64c9a593e919d160d86350e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_30fba0566faa506facef13480df85e7f2d782f0de64c9a593e919d160d86350e->leave($__internal_30fba0566faa506facef13480df85e7f2d782f0de64c9a593e919d160d86350e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a36dd8781d8c3dc6cb0b383566fe65bbef13f32d7f7e2af2f61442f8e42e61 = $this->env->getExtension("native_profiler");
        $__internal_52a36dd8781d8c3dc6cb0b383566fe65bbef13f32d7f7e2af2f61442f8e42e61->enter($__internal_52a36dd8781d8c3dc6cb0b383566fe65bbef13f32d7f7e2af2f61442f8e42e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
  <h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
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
          <span class=\"info-box-number\">13</span>
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
                          <th>ID</th>
                          <th>Nom du document</th>
                          <th>Date fin de validité</th>
                          <th>Statut</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href=\"\">9842</a></td>
                          <td>Document 1</td>
                          <td>17-05-2015</td>
                          <td><span class=\"label label-success\">Valide</span></td>
                        </tr>
                        <tr>
                          <td><a href=\"\">1848</a></td>
                          <td>Document 2</td>
                          <td>17-05-2015</td>
                          <td><span class=\"label label-warning\">Date en approche</span></td>
                        </tr>
                        <tr>
                          <td><a href=\"\">7429</a></td>
                          <td>Document 3</td>
                          <td>17-05-2015</td>
                          <td><span class=\"label label-danger\">Expiré</span></td>
                        </tr>
                        <tr>
                          <td><a href=\"\">7429</a></td>
                          <td>Document 4</td>
                          <td>17-05-2015</td>
                          <td><span class=\"label label-info\">En cours de traitement</span></td>
                        </tr>
                        <tr>
                          <td><a href=\"\">1848</a></td>
                          <td>Document 5</td>
                          <td>17-05-2015</td>
                          <td><span class=\"label label-warning\">Date en approche</span></td>
                        </tr>
                        <tr>
                          <td><a href=\"\">7429</a></td>
                          <td>Document 6</td>
                          <td>17-05-2015</td>
                          <td><span class=\"label label-danger\">Expiré</span></td>
                        </tr>
                        <tr>
                          <td><a href=\"\">9842</a></td>
                          <td>Document 7</td>
                          <td>17-05-2015</td>
                          <td><span class=\"label label-success\">Valide</span></td>

                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                  <a href=\"javascript::;\" class=\"btn btn-sm btn-info btn-flat pull-left\">Ajouter un nouveau document</a>
                  <!--a href=\"javascript::;\" class=\"btn btn-sm btn-default btn-flat pull-right\">View All Orders</a-->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->


<!--div class=\"row\"-->
    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Documents par départements</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div id=\"francemap\" style=\"width: 700px; height: 600px;\"></div>
            </div>
        </div>        
    </div>

    


";
        
        $__internal_52a36dd8781d8c3dc6cb0b383566fe65bbef13f32d7f7e2af2f61442f8e42e61->leave($__internal_52a36dd8781d8c3dc6cb0b383566fe65bbef13f32d7f7e2af2f61442f8e42e61_prof);

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
        return array (  62 => 12,  59 => 11,  53 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
