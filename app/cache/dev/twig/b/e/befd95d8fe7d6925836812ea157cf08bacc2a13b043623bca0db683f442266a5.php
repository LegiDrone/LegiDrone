<?php

/* PolytechProjetCoBundle:Admin:dashbordAdmin.html.twig */
class __TwigTemplate_befd95d8fe7d6925836812ea157cf08bacc2a13b043623bca0db683f442266a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("PolytechProjetCoBundle::layoutAdmin.html.twig", "PolytechProjetCoBundle:Admin:dashbordAdmin.html.twig", 4);
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
        $__internal_9828ffc97167b5e694c9e68b4f2a10f0e0c3c27e4206babbeb387cce8771ec66 = $this->env->getExtension("native_profiler");
        $__internal_9828ffc97167b5e694c9e68b4f2a10f0e0c3c27e4206babbeb387cce8771ec66->enter($__internal_9828ffc97167b5e694c9e68b4f2a10f0e0c3c27e4206babbeb387cce8771ec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PolytechProjetCoBundle:Admin:dashbordAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9828ffc97167b5e694c9e68b4f2a10f0e0c3c27e4206babbeb387cce8771ec66->leave($__internal_9828ffc97167b5e694c9e68b4f2a10f0e0c3c27e4206babbeb387cce8771ec66_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a10eab630c06fc59fba1ced5ad5c64b6e6835bc268ea48765ecd30b8c3ef4429 = $this->env->getExtension("native_profiler");
        $__internal_a10eab630c06fc59fba1ced5ad5c64b6e6835bc268ea48765ecd30b8c3ef4429->enter($__internal_a10eab630c06fc59fba1ced5ad5c64b6e6835bc268ea48765ecd30b8c3ef4429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a10eab630c06fc59fba1ced5ad5c64b6e6835bc268ea48765ecd30b8c3ef4429->leave($__internal_a10eab630c06fc59fba1ced5ad5c64b6e6835bc268ea48765ecd30b8c3ef4429_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f66f9c7a7bfd67d5406ad3531ac7492a895cbcc5e03ff304ab2b4dc44e24e4be = $this->env->getExtension("native_profiler");
        $__internal_f66f9c7a7bfd67d5406ad3531ac7492a895cbcc5e03ff304ab2b4dc44e24e4be->enter($__internal_f66f9c7a7bfd67d5406ad3531ac7492a895cbcc5e03ff304ab2b4dc44e24e4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
  <h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
<div class=\"row\">
    <div class=\"col-md-3 col-sm-6 col-xs-12\">
      <div class=\"info-box\">
        <span class=\"info-box-icon bg-yellow\"><i class=\"fa fa-files-o\"></i></span>
        <div class=\"info-box-content\">
          <span class=\"info-box-text\">Fichiers</span>
          <span class=\"info-box-number\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["nbFichiers"]) ? $context["nbFichiers"] : $this->getContext($context, "nbFichiers")), "html", null, true);
        echo "</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col --> 
\t <div class=\"col-md-3 col-sm-6 col-xs-12\">
      <div class=\"info-box\">
        <span class=\"info-box-icon bg-yellow\"><i class=\"glyphicon glyphicon-user\"></i></span>
        <div class=\"info-box-content\">
          <span class=\"info-box-text\">Nombre d'utilisateur inscrit</span>
          <span class=\"info-box-number\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["Nbuser"]) ? $context["Nbuser"] : $this->getContext($context, "Nbuser")), "html", null, true);
        echo "</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col --> 
\t\t <div class=\"col-md-3 col-sm-6 col-xs-12\">
      <div class=\"info-box\">
        <span class=\"info-box-icon bg-yellow\"><i class=\"glyphicon glyphicon-eye-open\"></i></span>
        <div class=\"info-box-content\">
          <span class=\"info-box-text\">Nombre de view  page produit</span>
          <span class=\"info-box-number\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["nbviewprod"]) ? $context["nbviewprod"] : $this->getContext($context, "nbviewprod")), "html", null, true);
        echo "</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col --> 
\t\t <div class=\"col-md-3 col-sm-6 col-xs-12\">
      <div class=\"info-box\">
        <span class=\"info-box-icon bg-yellow\"><i class=\"glyphicon glyphicon-eye-open\"></i></span>
        <div class=\"info-box-content\">
          <span class=\"info-box-text\">Nombre view page dashboard user</span>
          <span class=\"info-box-number\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["nbviewdashuser"]) ? $context["nbviewdashuser"] : $this->getContext($context, "nbviewdashuser")), "html", null, true);
        echo "</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col --> 
\t\t <div class=\"col-md-3 col-sm-6 col-xs-12\">
      <div class=\"info-box\">
        <span class=\"info-box-icon bg-yellow\"><i class=\"glyphicon glyphicon-eye-open\"></i></span>
        <div class=\"info-box-content\">
          <span class=\"info-box-text\">Nombre view au total</span>
          <span class=\"info-box-number\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["nbviewtotal"]) ? $context["nbviewtotal"] : $this->getContext($context, "nbviewtotal")), "html", null, true);
        echo "</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div><!-- /.col --> 
</div>




<div class=\"row\">
            <div class=\"col-md-6\">
              <!-- AREA CHART -->
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Area Chart</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <div class=\"box-body chart-responsive\">
                  <div class=\"chart\" id=\"revenue-chart\" style=\"height: 300px;\"><svg height=\"300\" version=\"1.1\" width=\"555\" xmlns=\"http://www.w3.org/2000/svg\" style=\"overflow: hidden; position: relative;\"><desc>Created with Raphaël 2.1.0</desc><defs></defs><text x=\"49.21875\" y=\"260.984375\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">0</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,260.984375H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"49.21875\" y=\"201.98828125\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.16015625\">7,500</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,201.98828125H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"49.21875\" y=\"142.9921875\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.15625\">15,000</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,142.9921875H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"49.21875\" y=\"83.99609375000003\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.160156250000028\">22,500</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,83.99609375000003H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"49.21875\" y=\"25.00000000000003\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.164062500000028\">30,000</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,25.00000000000003H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"444.1014141689028\" y=\"273.484375\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,7.0078)\" style=\"text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">2013</tspan></text><text x=\"235.83942743405396\" y=\"273.484375\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,7.0078)\" style=\"text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">2012</tspan></text><path fill=\"#74a5c1\" stroke=\"none\" d=\"M61.71875,219.04208541666668C74.80032458799555,219.55338489583335,100.96347376398663,222.61002084126676,114.04504835198217,221.08728333333335C127.13255025062021,219.56385586730843,153.3075540478963,209.12287552083336,166.39505594653434,206.85742552083335C179.3462297003949,204.61557395833336,205.24857720811605,204.87065520729024,218.1997509619766,203.05807708333333C231.14499740519466,201.2463285145819,257.03549029163077,194.90224712835916,269.98073673484885,192.36011875000003C283.0623113228444,189.79121887315083,309.2254604988355,182.5068121009992,322.30703508683104,182.6139640625C335.3945369854691,182.72116457495753,361.56954078274515,204.16621522960295,374.6570426813832,193.21752864583334C387.6082164352438,182.38289088064462,413.5105639429649,101.94032933148736,426.4617376968255,95.48066666666668C439.26472868462355,89.09491318565402,464.87071066021974,135.12919569033377,477.6737016480178,141.8358640625C490.75527623601334,148.6884645705421,516.9184254120045,147.74727265625,530,149.7177421875L530,260.984375L61.71875,260.984375Z\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></path><path fill=\"none\" stroke=\"#3c8dbc\" d=\"M61.71875,219.04208541666668C74.80032458799555,219.55338489583335,100.96347376398663,222.61002084126676,114.04504835198217,221.08728333333335C127.13255025062021,219.56385586730843,153.3075540478963,209.12287552083336,166.39505594653434,206.85742552083335C179.3462297003949,204.61557395833336,205.24857720811605,204.87065520729024,218.1997509619766,203.05807708333333C231.14499740519466,201.2463285145819,257.03549029163077,194.90224712835916,269.98073673484885,192.36011875000003C283.0623113228444,189.79121887315083,309.2254604988355,182.5068121009992,322.30703508683104,182.6139640625C335.3945369854691,182.72116457495753,361.56954078274515,204.16621522960295,374.6570426813832,193.21752864583334C387.6082164352438,182.38289088064462,413.5105639429649,101.94032933148736,426.4617376968255,95.48066666666668C439.26472868462355,89.09491318565402,464.87071066021974,135.12919569033377,477.6737016480178,141.8358640625C490.75527623601334,148.6884645705421,516.9184254120045,147.74727265625,530,149.7177421875\" stroke-width=\"3\" style=\"\"></path><circle cx=\"61.71875\" cy=\"219.04208541666668\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"114.04504835198217\" cy=\"221.08728333333335\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"166.39505594653434\" cy=\"206.85742552083335\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"218.1997509619766\" cy=\"203.05807708333333\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"269.98073673484885\" cy=\"192.36011875000003\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"322.30703508683104\" cy=\"182.6139640625\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"374.6570426813832\" cy=\"193.21752864583334\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"426.4617376968255\" cy=\"95.48066666666668\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"477.6737016480178\" cy=\"141.8358640625\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"530\" cy=\"149.7177421875\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><path fill=\"#eaf2f5\" stroke=\"none\" d=\"M61.71875,240.01323020833334C74.80032458799555,239.792978125,100.96347376398663,241.34014210922754,114.04504835198217,239.132221875C127.13255025062021,236.92330122381088,153.3075540478963,223.32341031849913,166.39505594653434,222.34586666666667C179.3462297003949,221.37850576120746,205.24857720811605,233.21927390045636,218.1997509619766,231.35260364583334C231.14499740519466,229.4867877025397,257.03549029163077,209.27728020667274,269.98073673484885,207.415921875C283.0623113228444,205.5349613264644,309.2254604988355,214.4270675434716,322.30703508683104,216.383328125C335.3945369854691,218.34047509555492,361.56954078274515,232.36362989746948,374.6570426813832,223.06955208333335C387.6082164352438,213.87228757976115,413.5105639429649,148.21998592925897,426.4617376968255,142.41795885416667C439.26472868462355,136.6823165282173,464.87071066021974,170.45926829213897,477.6737016480178,176.91887447916667C490.75527623601334,183.51903691193064,516.9184254120045,190.2224936197917,530,194.65703333333335L530,260.984375L61.71875,260.984375Z\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></path><path fill=\"none\" stroke=\"#a0d0e0\" d=\"M61.71875,240.01323020833334C74.80032458799555,239.792978125,100.96347376398663,241.34014210922754,114.04504835198217,239.132221875C127.13255025062021,236.92330122381088,153.3075540478963,223.32341031849913,166.39505594653434,222.34586666666667C179.3462297003949,221.37850576120746,205.24857720811605,233.21927390045636,218.1997509619766,231.35260364583334C231.14499740519466,229.4867877025397,257.03549029163077,209.27728020667274,269.98073673484885,207.415921875C283.0623113228444,205.5349613264644,309.2254604988355,214.4270675434716,322.30703508683104,216.383328125C335.3945369854691,218.34047509555492,361.56954078274515,232.36362989746948,374.6570426813832,223.06955208333335C387.6082164352438,213.87228757976115,413.5105639429649,148.21998592925897,426.4617376968255,142.41795885416667C439.26472868462355,136.6823165282173,464.87071066021974,170.45926829213897,477.6737016480178,176.91887447916667C490.75527623601334,183.51903691193064,516.9184254120045,190.2224936197917,530,194.65703333333335\" stroke-width=\"3\" style=\"\"></path><circle cx=\"61.71875\" cy=\"240.01323020833334\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"114.04504835198217\" cy=\"239.132221875\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"166.39505594653434\" cy=\"222.34586666666667\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"218.1997509619766\" cy=\"231.35260364583334\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"269.98073673484885\" cy=\"207.415921875\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"322.30703508683104\" cy=\"216.383328125\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"374.6570426813832\" cy=\"223.06955208333335\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"426.4617376968255\" cy=\"142.41795885416667\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"477.6737016480178\" cy=\"176.91887447916667\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"530\" cy=\"194.65703333333335\" r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle></svg><div class=\"morris-hover morris-default-style\" style=\"left: 462px; top: 98px; display: none;\"><div class=\"morris-hover-row-label\">2013 Q2</div><div class=\"morris-hover-point\" style=\"color: #a0d0e0\">
  Item 1:
  8,432
</div><div class=\"morris-hover-point\" style=\"color: #3c8dbc\">
  Item 2:
  5,713
</div></div></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
    
            <div class=\"col-md-6\">
              <!-- LINE CHART -->
              <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Frequentation du site</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <div class=\"box-body chart-responsive\">
                  <div class=\"chart\" id=\"line-chart\" style=\"height: 300px;\"><svg height=\"300\" version=\"1.1\" width=\"555\" xmlns=\"http://www.w3.org/2000/svg\" style=\"overflow: hidden; position: relative;\"><desc>Created with Raphaël 2.1.0</desc><defs></defs>
                      <text x=\"49.21875\" y=\"360.984375\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">0</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.32471875,260.984375H530\" stroke-width=\"0.5\" style=\"\"></path>
                      <text x=\"49.21875\" y=\"201.98828125\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.16015625\">5,000</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,201.98828125H530\" stroke-width=\"0.5\" style=\"\"></path>
                      <text x=\"49.21875\" y=\"142.9921875\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.15625\">10,000</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,142.9921875H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"49.21875\" y=\"83.99609375\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.16015625\">15,000</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,83.99609375H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"49.21875\" y=\"25\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">20,000</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.71875,25H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"444.1014141689028\" y=\"273.484375\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,7.0078)\" style=\"text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">18h</tspan></text><text x=\"235.83942743405396\" y=\"273.484375\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,7.0078)\" style=\"text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">10h</tspan></text><path fill=\"none\" stroke=\"#3c8dbc\" d=\"M61.71875,229.5276578125C74.80032458799555,229.1972796875,100.96347376398663,231.51802566384129,114.04504835198217,228.20614531249998C127.13255025062021,224.8927643357163,153.3075540478963,204.49292797774868,166.39505594653434,203.0266125C179.3462297003949,201.5755711418112,205.24857720811605,219.3367233506845,218.1997509619766,216.53671796875C231.14499740519466,213.7379940538095,257.03549029163077,183.4237328100091,269.98073673484885,180.6316953125C283.0623113228444,177.8102544896966,309.2254604988355,191.1484138152074,322.30703508683104,194.08280468750002C335.3945369854691,197.0185251433324,361.56954078274515,218.0532573462042,374.6570426813832,204.112140625C387.6082164352438,190.31624386964168,413.5105639429649,91.83779139388845,426.4617376968255,83.13475078125C439.26472868462355,74.53128729232596,464.87071066021974,125.19671493820846,477.6737016480178,134.88612421875C490.75527623601334,144.78636786789596,516.9184254120045,154.84155292968748,530,161.4933625\" stroke-width=\"3\" style=\"\"></path><circle cx=\"61.71875\" cy=\"229.5276578125\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"114.04504835198217\" cy=\"228.20614531249998\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"166.39505594653434\" cy=\"203.0266125\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"218.1997509619766\" cy=\"216.53671796875\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"269.98073673484885\" cy=\"180.6316953125\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"322.30703508683104\" cy=\"194.08280468750002\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"374.6570426813832\" cy=\"204.112140625\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"426.4617376968255\" cy=\"83.13475078125\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"477.6737016480178\" cy=\"134.88612421875\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle><circle cx=\"530\" cy=\"161.4933625\" r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" style=\"\"></circle></svg><div class=\"morris-hover morris-default-style\" style=\"left: 15.21875px; top: 155px; display: none;\"><div class=\"morris-hover-row-label\">2011 Q1</div><div class=\"morris-hover-point\" style=\"color: #3c8dbc\">
  Item 1:
  2,666
</div></div></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- BAR CHART -->
              <div class=\"box box-success\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Bar Chart</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <div class=\"box-body chart-responsive\">
                  <div class=\"chart\" id=\"bar-chart\" style=\"height: 300px;\"><svg height=\"300\" version=\"1.1\" width=\"555\" xmlns=\"http://www.w3.org/2000/svg\" style=\"overflow: hidden; position: relative;\"><desc>Created with Raphaël 2.1.0</desc><defs></defs><text x=\"32.53125\" y=\"260.984375\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">0</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M45.03125,260.984375H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"32.53125\" y=\"201.98828125\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.16015625\">25</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M45.03125,201.98828125H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"32.53125\" y=\"142.9921875\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.15625\">50</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M45.03125,142.9921875H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"32.53125\" y=\"83.99609375\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.16015625\">75</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M45.03125,83.99609375H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"32.53125\" y=\"25\" text-anchor=\"end\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" style=\"text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">100</tspan></text><path fill=\"none\" stroke=\"#aaaaaa\" d=\"M45.03125,25H530\" stroke-width=\"0.5\" style=\"\"></path><text x=\"495.359375\" y=\"273.484375\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,7.0078)\" style=\"text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">2012</tspan></text><text x=\"356.796875\" y=\"273.484375\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,7.0078)\" style=\"text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">2010</tspan></text><text x=\"218.234375\" y=\"273.484375\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,7.0078)\" style=\"text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">2008</tspan></text><text x=\"79.671875\" y=\"273.484375\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,7.0078)\" style=\"text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;\"><tspan dy=\"4.1640625\">2006</tspan></text><rect x=\"53.69140625\" y=\"25\" width=\"24.48046875\" height=\"235.984375\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#00a65a\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"81.171875\" y=\"48.59843749999999\" width=\"24.48046875\" height=\"212.3859375\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#f56954\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"122.97265625\" y=\"83.99609375\" width=\"24.48046875\" height=\"176.98828125\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#00a65a\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"150.453125\" y=\"107.59453124999999\" width=\"24.48046875\" height=\"153.38984375\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#f56954\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"192.25390625\" y=\"142.9921875\" width=\"24.48046875\" height=\"117.9921875\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#00a65a\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"219.734375\" y=\"166.590625\" width=\"24.48046875\" height=\"94.39375000000001\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#f56954\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"261.53515625\" y=\"83.99609375\" width=\"24.48046875\" height=\"176.98828125\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#00a65a\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"289.015625\" y=\"107.59453124999999\" width=\"24.48046875\" height=\"153.38984375\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#f56954\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"330.81640625\" y=\"142.9921875\" width=\"24.48046875\" height=\"117.9921875\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#00a65a\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"358.296875\" y=\"166.590625\" width=\"24.48046875\" height=\"94.39375000000001\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#f56954\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"400.09765625\" y=\"83.99609375\" width=\"24.48046875\" height=\"176.98828125\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#00a65a\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"427.578125\" y=\"107.59453124999999\" width=\"24.48046875\" height=\"153.38984375\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#f56954\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"469.37890625\" y=\"25\" width=\"24.48046875\" height=\"235.984375\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#00a65a\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect><rect x=\"496.859375\" y=\"48.59843749999999\" width=\"24.48046875\" height=\"212.3859375\" r=\"0\" rx=\"0\" ry=\"0\" fill=\"#f56954\" stroke=\"none\" fill-opacity=\"1\" style=\"fill-opacity: 1;\"></rect></svg><div class=\"morris-hover morris-default-style\" style=\"display: none;\"></div></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div>


";
        
        $__internal_f66f9c7a7bfd67d5406ad3531ac7492a895cbcc5e03ff304ab2b4dc44e24e4be->leave($__internal_f66f9c7a7bfd67d5406ad3531ac7492a895cbcc5e03ff304ab2b4dc44e24e4be_prof);

    }

    public function getTemplateName()
    {
        return "PolytechProjetCoBundle:Admin:dashbordAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  108 => 46,  96 => 37,  84 => 28,  72 => 19,  62 => 12,  59 => 11,  53 => 10,  41 => 7,  35 => 6,  11 => 4,);
    }
}
