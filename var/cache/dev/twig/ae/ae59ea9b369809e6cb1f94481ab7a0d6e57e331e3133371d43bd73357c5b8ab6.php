<?php

/* base.html.twig */
class __TwigTemplate_f5d7f03ead227beef6d0bddd9f491cc976f8cdc9e9265d4fe5ff8ef7873a4a0a extends Twig_Template
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
        $__internal_aeb0871c16da62c8e7e7bf212e95e6ac6a8220deeb076768ae2ec88b8c64f79f = $this->env->getExtension("native_profiler");
        $__internal_aeb0871c16da62c8e7e7bf212e95e6ac6a8220deeb076768ae2ec88b8c64f79f->enter($__internal_aeb0871c16da62c8e7e7bf212e95e6ac6a8220deeb076768ae2ec88b8c64f79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"nav-md\">         
\t<div class=\"container body\">
\t\t<div class=\"main_container\">
\t\t\t<div class=\"col-md-3 left_col\">
\t\t\t\t<div class=\"left_col scroll-view\">

\t\t\t\t\t<div class=\"navbar nav_title\" style=\"border: 0;\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Empty!</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t<!-- menu prile quick info -->
\t\t\t\t\t<div class=\"profile\">
\t\t\t\t\t\t<div class=\"profile_pic\">
\t\t\t\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"profile_info\">
\t\t\t\t\t\t\t<span>Bienvenido,</span>
\t\t\t\t\t\t\t<h2>Leandro</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /menu prile quick info -->

\t\t\t\t\t<br />

\t\t\t\t\t<!-- sidebar menu -->
\t\t\t\t\t<div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

\t\t\t\t\t\t<div class=\"menu_section\">
\t\t\t\t\t\t\t<h3>General</h3>
\t\t\t\t\t\t\t<ul class=\"nav side-menu\">
\t\t\t\t\t\t\t\t<li><a><i class=\"fa fa-home\"></i> Menu1 <span class=\"fa fa-chevron-down\"></span></a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav child_menu\" style=\"display: none\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"empty.html\">Sub1.1</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"empty.html\">Sub1.2</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a><i class=\"fa fa-edit\"></i> Menu2 <span class=\"fa fa-chevron-down\"></span></a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav child_menu\" style=\"display: none\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"empty.html\">Menu2.1</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"empty.html\">Meny2.2s</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /sidebar menu -->

\t\t\t\t\t<!-- /menu footer buttons -->
\t\t\t\t\t<div class=\"sidebar-footer hidden-small\">
\t\t\t\t\t\t<a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /menu footer buttons -->
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- top navigation -->
\t\t\t<div class=\"top_nav\">
\t\t\t\t<div class=\"nav_menu\">
\t\t\t\t\t<nav class=\"\" role=\"navigation\">
\t\t\t\t\t\t         <div class=\"nav toggle\">
              <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
              <li class=\"\">
                <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                  <img src=\"images/img.jpg\" alt=\"\">John Doe
                  <span class=\" fa fa-angle-down\"></span>
                </a>
                <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                  <li><a href=\"javascript:;\">  Profile</a>
                  </li>
                  <li>
                    <a href=\"javascript:;\">
                      <span class=\"badge bg-red pull-right\">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href=\"javascript:;\">Help</a>
                  </li>
                  <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <li role=\"presentation\" class=\"dropdown\">
                <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"badge bg-green\">6</span>
                </a>
                <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list animated fadeInDown\" role=\"menu\">
                  <li>
                    <a>
                      <span class=\"image\">
                                        <img src=\"images/img.jpg\" alt=\"Profile Image\" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class=\"time\">3 mins ago</span>
                      </span>
                      <span class=\"message\">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class=\"image\">
                                        <img src=\"images/img.jpg\" alt=\"Profile Image\" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class=\"time\">3 mins ago</span>
                      </span>
                      <span class=\"message\">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class=\"image\">
                                        <img src=\"images/img.jpg\" alt=\"Profile Image\" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class=\"time\">3 mins ago</span>
                      </span>
                      <span class=\"message\">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class=\"image\">
                                        <img src=\"images/img.jpg\" alt=\"Profile Image\" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class=\"time\">3 mins ago</span>
                      </span>
                      <span class=\"message\">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class=\"text-center\">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class=\"fa fa-angle-right\"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /top navigation -->


\t\t\t<!-- page content -->
\t\t\t<div class=\"right_col\" role=\"main\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"dashboard_graph\">

\t\t\t\t\t\t\t<div class=\"row x_title\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
                                                                    ";
        // line 211
        $this->displayBlock('body', $context, $blocks);
        // line 213
        echo "    
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<br />

\t\t\t\t<!-- footer content -->

\t\t\t\t<footer>
\t\t\t\t\t<div class=\"copyright-info\">
\t\t\t\t\t\t<p class=\"pull-right\">Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</footer>
\t\t\t\t<!-- /footer content -->
\t\t\t</div>
\t\t\t<!-- /page content -->

\t\t</div>

\t</div>

\t<div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
\t\t<ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
\t\t</ul>
\t\t<div class=\"clearfix\"></div>
\t\t<div id=\"notif-group\" class=\"tabbed_notifications\"></div>
\t</div>

\t<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t<!-- gauge js -->
\t<script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/gauge/gauge.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/gauge/gauge_demo.js"), "html", null, true);
        echo "\"></script>
\t<!-- chart js -->
\t<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/chartjs/chart.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- bootstrap progress js -->
\t<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- icheck -->
\t<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- daterangepicker -->
\t<script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/custom.js"), "html", null, true);
        echo "\"></script>

\t<!-- flot js -->
\t<!--[if lte IE 8]><script type=\"text/javascript\" src=\"js/excanvas.min.js\"></script><![endif]-->
\t<script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/date.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/curvedLines.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(document).ready(function() {
\t\t\t// [17, 74, 6, 39, 20, 85, 7]
\t\t\t//[82, 23, 66, 9, 99, 6, 2]
\t\t\tvar data1 = [
\t\t\t\t[gd(2012, 1, 1), 17],
\t\t\t\t[gd(2012, 1, 2), 74],
\t\t\t\t[gd(2012, 1, 3), 6],
\t\t\t\t[gd(2012, 1, 4), 39],
\t\t\t\t[gd(2012, 1, 5), 20],
\t\t\t\t[gd(2012, 1, 6), 85],
\t\t\t\t[gd(2012, 1, 7), 7]
\t\t\t];

\t\t\tvar data2 = [
\t\t\t\t[gd(2012, 1, 1), 82],
\t\t\t\t[gd(2012, 1, 2), 23],
\t\t\t\t[gd(2012, 1, 3), 66],
\t\t\t\t[gd(2012, 1, 4), 9],
\t\t\t\t[gd(2012, 1, 5), 119],
\t\t\t\t[gd(2012, 1, 6), 6],
\t\t\t\t[gd(2012, 1, 7), 9]
\t\t\t];
\t\t\t\$(\"#canvas_dahs\").length && \$.plot(\$(\"#canvas_dahs\"), [
\t\t\t\tdata1, data2
\t\t\t], {
\t\t\t\tseries: {
\t\t\t\t\tlines: {
\t\t\t\t\t\tshow: false,
\t\t\t\t\t\tfill: true
\t\t\t\t\t},
\t\t\t\t\tsplines: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\ttension: 0.4,
\t\t\t\t\t\tlineWidth: 1,
\t\t\t\t\t\tfill: 0.4
\t\t\t\t\t},
\t\t\t\t\tpoints: {
\t\t\t\t\t\tradius: 0,
\t\t\t\t\t\tshow: true
\t\t\t\t\t},
\t\t\t\t\tshadowSize: 2
\t\t\t\t},
\t\t\t\tgrid: {
\t\t\t\t\tverticalLines: true,
\t\t\t\t\thoverable: true,
\t\t\t\t\tclickable: true,
\t\t\t\t\ttickColor: \"#d5d5d5\",
\t\t\t\t\tborderWidth: 1,
\t\t\t\t\tcolor: '#fff'
\t\t\t\t},
\t\t\t\tcolors: [\"rgba(38, 185, 154, 0.38)\", \"rgba(3, 88, 106, 0.38)\"],
\t\t\t\txaxis: {
\t\t\t\t\ttickColor: \"rgba(51, 51, 51, 0.06)\",
\t\t\t\t\tmode: \"time\",
\t\t\t\t\ttickSize: [1, \"day\"],
\t\t\t\t\t//tickLength: 10,
\t\t\t\t\taxisLabel: \"Date\",
\t\t\t\t\taxisLabelUseCanvas: true,
\t\t\t\t\taxisLabelFontSizePixels: 12,
\t\t\t\t\taxisLabelFontFamily: 'Verdana, Arial',
\t\t\t\t\taxisLabelPadding: 10
\t\t\t\t\t\t//mode: \"time\", timeformat: \"%m/%d/%y\", minTickSize: [1, \"day\"]
\t\t\t\t},
\t\t\t\tyaxis: {
\t\t\t\t\tticks: 8,
\t\t\t\t\ttickColor: \"rgba(51, 51, 51, 0.06)\",
\t\t\t\t},
\t\t\t\ttooltip: false
\t\t\t});

\t\t\tfunction gd(year, month, day) {
\t\t\t\treturn new Date(year, month - 1, day).getTime();
\t\t\t}
\t\t});
\t</script>

\t<!-- worldmap -->
\t<script type=\"text/javascript\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/maps/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/maps/gdp-data.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/maps/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/maps/jquery-jvectormap-us-aea-en.js"), "html", null, true);
        echo "\"></script>
\t<!-- pace -->
\t<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(function() {
\t\t\t\$('#world-map-gdp').vectorMap({
\t\t\t\tmap: 'world_mill_en',
\t\t\t\tbackgroundColor: 'transparent',
\t\t\t\tzoomOnScroll: false,
\t\t\t\tseries: {
\t\t\t\t\tregions: [{
\t\t\t\t\t\tvalues: gdpData,
\t\t\t\t\t\tscale: ['#E6F2F0', '#149B7E'],
\t\t\t\t\t\tnormalizeFunction: 'polynomial'
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\tonRegionTipShow: function(e, el, code) {
\t\t\t\t\tel.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t<!-- skycons -->
\t<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/skycons/skycons.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tvar icons = new Skycons({
\t\t\t\t\"color\": \"#73879C\"
\t\t\t}),
\t\t\tlist = [
\t\t\t\t\"clear-day\", \"clear-night\", \"partly-cloudy-day\",
\t\t\t\t\"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
\t\t\t\t\"fog\"
\t\t\t],
\t\t\ti;

\t\tfor (i = list.length; i--;)
\t\t\ticons.set(list[i], list[i]);

\t\ticons.play();
\t</script>

\t<!-- dashbord linegraph -->
\t<script>
\t\tvar doughnutData = [{
\t\t\tvalue: 30,
\t\t\tcolor: \"#455C73\"
\t\t}, {
\t\t\tvalue: 30,
\t\t\tcolor: \"#9B59B6\"
\t\t}, {
\t\t\tvalue: 60,
\t\t\tcolor: \"#BDC3C7\"
\t\t}, {
\t\t\tvalue: 100,
\t\t\tcolor: \"#26B99A\"
\t\t}, {
\t\t\tvalue: 120,
\t\t\tcolor: \"#3498DB\"
\t\t}];
\t\tvar myDoughnut = new Chart(document.getElementById(\"canvas1\").getContext(\"2d\")).Doughnut(doughnutData);
\t</script>
\t<!-- /dashbord linegraph -->
\t<!-- datepicker -->
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {

\t\t\tvar cb = function(start, end, label) {
\t\t\t\tconsole.log(start.toISOString(), end.toISOString(), label);
\t\t\t\t\$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
\t\t\t\t//alert(\"Callback has fired: [\" + start.format('MMMM D, YYYY') + \" to \" + end.format('MMMM D, YYYY') + \", label = \" + label + \"]\");
\t\t\t}

\t\t\tvar optionSet1 = {
\t\t\t\tstartDate: moment().subtract(29, 'days'),
\t\t\t\tendDate: moment(),
\t\t\t\tminDate: '01/01/2012',
\t\t\t\tmaxDate: '12/31/2015',
\t\t\t\tdateLimit: {
\t\t\t\t\tdays: 60
\t\t\t\t},
\t\t\t\tshowDropdowns: true,
\t\t\t\tshowWeekNumbers: true,
\t\t\t\ttimePicker: false,
\t\t\t\ttimePickerIncrement: 1,
\t\t\t\ttimePicker12Hour: true,
\t\t\t\tranges: {
\t\t\t\t\t'Today': [moment(), moment()],
\t\t\t\t\t'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
\t\t\t\t\t'Last 7 Days': [moment().subtract(6, 'days'), moment()],
\t\t\t\t\t'Last 30 Days': [moment().subtract(29, 'days'), moment()],
\t\t\t\t\t'This Month': [moment().startOf('month'), moment().endOf('month')],
\t\t\t\t\t'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
\t\t\t\t},
\t\t\t\topens: 'left',
\t\t\t\tbuttonClasses: ['btn btn-default'],
\t\t\t\tapplyClass: 'btn-small btn-primary',
\t\t\t\tcancelClass: 'btn-small',
\t\t\t\tformat: 'MM/DD/YYYY',
\t\t\t\tseparator: ' to ',
\t\t\t\tlocale: {
\t\t\t\t\tapplyLabel: 'Submit',
\t\t\t\t\tcancelLabel: 'Clear',
\t\t\t\t\tfromLabel: 'From',
\t\t\t\t\ttoLabel: 'To',
\t\t\t\t\tcustomRangeLabel: 'Custom',
\t\t\t\t\tdaysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
\t\t\t\t\tmonthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
\t\t\t\t\tfirstDay: 1
\t\t\t\t}
\t\t\t};
\t\t\t\$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
\t\t\t\$('#reportrange').daterangepicker(optionSet1, cb);
\t\t\t\$('#reportrange').on('show.daterangepicker', function() {
\t\t\t\tconsole.log(\"show event fired\");
\t\t\t});
\t\t\t\$('#reportrange').on('hide.daterangepicker', function() {
\t\t\t\tconsole.log(\"hide event fired\");
\t\t\t});
\t\t\t\$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
\t\t\t\tconsole.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
\t\t\t});
\t\t\t\$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
\t\t\t\tconsole.log(\"cancel event fired\");
\t\t\t});
\t\t\t\$('#options1').click(function() {
\t\t\t\t\$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
\t\t\t});
\t\t\t\$('#options2').click(function() {
\t\t\t\t\$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
\t\t\t});
\t\t\t\$('#destroy').click(function() {
\t\t\t\t\$('#reportrange').data('daterangepicker').remove();
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tNProgress.done();
\t</script>
\t<!-- /datepicker -->
\t<!-- /footer content -->
                
        ";
        // line 506
        $this->displayBlock('javascripts', $context, $blocks);
        // line 508
        echo "    </body>
</html>
";
        
        $__internal_aeb0871c16da62c8e7e7bf212e95e6ac6a8220deeb076768ae2ec88b8c64f79f->leave($__internal_aeb0871c16da62c8e7e7bf212e95e6ac6a8220deeb076768ae2ec88b8c64f79f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a698b4dfa474bfaeb2665e9c4a91444ad92072e5a6fe064387af2b9d42843dd = $this->env->getExtension("native_profiler");
        $__internal_9a698b4dfa474bfaeb2665e9c4a91444ad92072e5a6fe064387af2b9d42843dd->enter($__internal_9a698b4dfa474bfaeb2665e9c4a91444ad92072e5a6fe064387af2b9d42843dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SPDE";
        
        $__internal_9a698b4dfa474bfaeb2665e9c4a91444ad92072e5a6fe064387af2b9d42843dd->leave($__internal_9a698b4dfa474bfaeb2665e9c4a91444ad92072e5a6fe064387af2b9d42843dd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14370770ddd2a0a4d54ff521cb5bfbe6628f86693db1778b83f0d8b9e98c8915 = $this->env->getExtension("native_profiler");
        $__internal_14370770ddd2a0a4d54ff521cb5bfbe6628f86693db1778b83f0d8b9e98c8915->enter($__internal_14370770ddd2a0a4d54ff521cb5bfbe6628f86693db1778b83f0d8b9e98c8915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">          
            <!-- Custom styling plus plugins -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/maps/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/floatexamples.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/nprogress.js"), "html", null, true);
        echo "\"></script>           
        ";
        
        $__internal_14370770ddd2a0a4d54ff521cb5bfbe6628f86693db1778b83f0d8b9e98c8915->leave($__internal_14370770ddd2a0a4d54ff521cb5bfbe6628f86693db1778b83f0d8b9e98c8915_prof);

    }

    // line 211
    public function block_body($context, array $blocks = array())
    {
        $__internal_058d17f12061215546f3920fe93a1a974f6e39d1e40a55faa60aea383c3074c6 = $this->env->getExtension("native_profiler");
        $__internal_058d17f12061215546f3920fe93a1a974f6e39d1e40a55faa60aea383c3074c6->enter($__internal_058d17f12061215546f3920fe93a1a974f6e39d1e40a55faa60aea383c3074c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 212
        echo "\t\t\t\t\t\t\t\t\t<h3>Empty <small>no content</small></h3>
                                                                    ";
        
        $__internal_058d17f12061215546f3920fe93a1a974f6e39d1e40a55faa60aea383c3074c6->leave($__internal_058d17f12061215546f3920fe93a1a974f6e39d1e40a55faa60aea383c3074c6_prof);

    }

    // line 506
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71ce30b14754446a08fc8f74cac30187fe68dd07f59a0cd0106ae3d6d548195d = $this->env->getExtension("native_profiler");
        $__internal_71ce30b14754446a08fc8f74cac30187fe68dd07f59a0cd0106ae3d6d548195d->enter($__internal_71ce30b14754446a08fc8f74cac30187fe68dd07f59a0cd0106ae3d6d548195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 507
        echo "        ";
        
        $__internal_71ce30b14754446a08fc8f74cac30187fe68dd07f59a0cd0106ae3d6d548195d->leave($__internal_71ce30b14754446a08fc8f74cac30187fe68dd07f59a0cd0106ae3d6d548195d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 507,  696 => 506,  688 => 212,  682 => 211,  673 => 16,  669 => 15,  665 => 14,  661 => 13,  657 => 12,  653 => 11,  648 => 9,  644 => 8,  639 => 7,  633 => 6,  621 => 5,  612 => 508,  610 => 506,  489 => 388,  465 => 367,  460 => 365,  456 => 364,  452 => 363,  448 => 362,  366 => 283,  362 => 282,  358 => 281,  354 => 280,  350 => 279,  346 => 278,  342 => 277,  338 => 276,  334 => 275,  327 => 271,  322 => 269,  318 => 268,  313 => 266,  308 => 264,  304 => 263,  299 => 261,  294 => 259,  290 => 258,  284 => 255,  240 => 213,  238 => 211,  58 => 34,  38 => 18,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}SPDE{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('bundles/Gentellela/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('bundles/Gentellela/fonts/css/font-awesome.min.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('bundles/Gentellela/css/animate.min.css') }}" rel="stylesheet">          */
/*             <!-- Custom styling plus plugins -->*/
/*             <link href="{{ asset('bundles/Gentellela/css/custom.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('bundles/Gentellela/css/maps/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('bundles/Gentellela/css/icheck/flat/green.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('bundles/Gentellela/css/floatexamples.css') }}" rel="stylesheet">*/
/*             <script src="{{ asset('bundles/Gentellela/js/jquery.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/Gentellela/js/nprogress.js') }}"></script>           */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="nav-md">         */
/* 	<div class="container body">*/
/* 		<div class="main_container">*/
/* 			<div class="col-md-3 left_col">*/
/* 				<div class="left_col scroll-view">*/
/* */
/* 					<div class="navbar nav_title" style="border: 0;">*/
/* 						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Empty!</span></a>*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* */
/* 					<!-- menu prile quick info -->*/
/* 					<div class="profile">*/
/* 						<div class="profile_pic">*/
/* 							<img src="{{ asset('bundles/Gentellela/images/img.jpg') }}" alt="..." class="img-circle profile_img">*/
/* 						</div>*/
/* 						<div class="profile_info">*/
/* 							<span>Bienvenido,</span>*/
/* 							<h2>Leandro</h2>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- /menu prile quick info -->*/
/* */
/* 					<br />*/
/* */
/* 					<!-- sidebar menu -->*/
/* 					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/* */
/* 						<div class="menu_section">*/
/* 							<h3>General</h3>*/
/* 							<ul class="nav side-menu">*/
/* 								<li><a><i class="fa fa-home"></i> Menu1 <span class="fa fa-chevron-down"></span></a>*/
/* 									<ul class="nav child_menu" style="display: none">*/
/* 										<li><a href="empty.html">Sub1.1</a>*/
/* 										</li>*/
/* 										<li><a href="empty.html">Sub1.2</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</li>*/
/* 								<li><a><i class="fa fa-edit"></i> Menu2 <span class="fa fa-chevron-down"></span></a>*/
/* 									<ul class="nav child_menu" style="display: none">*/
/* 										<li><a href="empty.html">Menu2.1</a>*/
/* 										</li>*/
/* 										<li><a href="empty.html">Meny2.2s</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- /sidebar menu -->*/
/* */
/* 					<!-- /menu footer buttons -->*/
/* 					<div class="sidebar-footer hidden-small">*/
/* 						<a data-toggle="tooltip" data-placement="top" title="Settings">*/
/* 							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/* 						</a>*/
/* 						<a data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/* 							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/* 						</a>*/
/* 						<a data-toggle="tooltip" data-placement="top" title="Lock">*/
/* 							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/* 						</a>*/
/* 						<a data-toggle="tooltip" data-placement="top" title="Logout">*/
/* 							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/* 						</a>*/
/* 					</div>*/
/* 					<!-- /menu footer buttons -->*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!-- top navigation -->*/
/* 			<div class="top_nav">*/
/* 				<div class="nav_menu">*/
/* 					<nav class="" role="navigation">*/
/* 						         <div class="nav toggle">*/
/*               <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*             </div>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*               <li class="">*/
/*                 <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                   <img src="images/img.jpg" alt="">John Doe*/
/*                   <span class=" fa fa-angle-down"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                   <li><a href="javascript:;">  Profile</a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="javascript:;">*/
/*                       <span class="badge bg-red pull-right">50%</span>*/
/*                       <span>Settings</span>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="javascript:;">Help</a>*/
/*                   </li>*/
/*                   <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/* */
/*               <li role="presentation" class="dropdown">*/
/*                 <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">*/
/*                   <i class="fa fa-envelope-o"></i>*/
/*                   <span class="badge bg-green">6</span>*/
/*                 </a>*/
/*                 <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">*/
/*                   <li>*/
/*                     <a>*/
/*                       <span class="image">*/
/*                                         <img src="images/img.jpg" alt="Profile Image" />*/
/*                                     </span>*/
/*                       <span>*/
/*                                         <span>John Smith</span>*/
/*                       <span class="time">3 mins ago</span>*/
/*                       </span>*/
/*                       <span class="message">*/
/*                                         Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                     </span>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a>*/
/*                       <span class="image">*/
/*                                         <img src="images/img.jpg" alt="Profile Image" />*/
/*                                     </span>*/
/*                       <span>*/
/*                                         <span>John Smith</span>*/
/*                       <span class="time">3 mins ago</span>*/
/*                       </span>*/
/*                       <span class="message">*/
/*                                         Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                     </span>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a>*/
/*                       <span class="image">*/
/*                                         <img src="images/img.jpg" alt="Profile Image" />*/
/*                                     </span>*/
/*                       <span>*/
/*                                         <span>John Smith</span>*/
/*                       <span class="time">3 mins ago</span>*/
/*                       </span>*/
/*                       <span class="message">*/
/*                                         Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                     </span>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a>*/
/*                       <span class="image">*/
/*                                         <img src="images/img.jpg" alt="Profile Image" />*/
/*                                     </span>*/
/*                       <span>*/
/*                                         <span>John Smith</span>*/
/*                       <span class="time">3 mins ago</span>*/
/*                       </span>*/
/*                       <span class="message">*/
/*                                         Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                     </span>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <div class="text-center">*/
/*                       <a>*/
/*                         <strong>See All Alerts</strong>*/
/*                         <i class="fa fa-angle-right"></i>*/
/*                       </a>*/
/*                     </div>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/* */
/*             </ul>*/
/* 					</nav>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- /top navigation -->*/
/* */
/* */
/* 			<!-- page content -->*/
/* 			<div class="right_col" role="main">*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-12 col-sm-12 col-xs-12">*/
/* 						<div class="dashboard_graph">*/
/* */
/* 							<div class="row x_title">*/
/* 								<div class="col-md-6">*/
/*                                                                     {% block body %}*/
/* 									<h3>Empty <small>no content</small></h3>*/
/*                                                                     {% endblock %}    */
/* 								</div>*/
/* 								<div class="col-md-6">*/
/* */
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="col-md-12 col-sm-12 col-xs-12">*/
/* 								...*/
/* 							</div>*/
/* */
/* 							<div class="clearfix"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 				<br />*/
/* */
/* 				<!-- footer content -->*/
/* */
/* 				<footer>*/
/* 					<div class="copyright-info">*/
/* 						<p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>		*/
/* 						</p>*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 				</footer>*/
/* 				<!-- /footer content -->*/
/* 			</div>*/
/* 			<!-- /page content -->*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div id="custom_notifications" class="custom-notifications dsp_none">*/
/* 		<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">*/
/* 		</ul>*/
/* 		<div class="clearfix"></div>*/
/* 		<div id="notif-group" class="tabbed_notifications"></div>*/
/* 	</div>*/
/* */
/* 	<script src="{{ asset('bundles/Gentellela/js/bootstrap.min.js') }}"></script>*/
/* */
/* 	<!-- gauge js -->*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/gauge/gauge.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/gauge/gauge_demo.js') }}"></script>*/
/* 	<!-- chart js -->*/
/* 	<script src="{{ asset('bundles/Gentellela/js/chartjs/chart.min.js') }}"></script>*/
/* 	<!-- bootstrap progress js -->*/
/* 	<script src="{{ asset('bundles/Gentellela/js/progressbar/bootstrap-progressbar.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/Gentellela/js/nicescroll/jquery.nicescroll.min.js') }}"></script>*/
/* 	<!-- icheck -->*/
/* 	<script src="{{ asset('bundles/Gentellela/js/icheck/icheck.min.js') }}"></script>*/
/* 	<!-- daterangepicker -->*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/moment/moment.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/datepicker/daterangepicker.js') }}"></script>*/
/* */
/* 	<script src="{{ asset('bundles/Gentellela/js/custom.js') }}"></script>*/
/* */
/* 	<!-- flot js -->*/
/* 	<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/jquery.flot.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/jquery.flot.pie.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/jquery.flot.orderBars.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/jquery.flot.time.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/date.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/jquery.flot.spline.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/jquery.flot.stack.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/curvedLines.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/flot/jquery.flot.resize.js') }}"></script>*/
/* 	<script>*/
/* 		$(document).ready(function() {*/
/* 			// [17, 74, 6, 39, 20, 85, 7]*/
/* 			//[82, 23, 66, 9, 99, 6, 2]*/
/* 			var data1 = [*/
/* 				[gd(2012, 1, 1), 17],*/
/* 				[gd(2012, 1, 2), 74],*/
/* 				[gd(2012, 1, 3), 6],*/
/* 				[gd(2012, 1, 4), 39],*/
/* 				[gd(2012, 1, 5), 20],*/
/* 				[gd(2012, 1, 6), 85],*/
/* 				[gd(2012, 1, 7), 7]*/
/* 			];*/
/* */
/* 			var data2 = [*/
/* 				[gd(2012, 1, 1), 82],*/
/* 				[gd(2012, 1, 2), 23],*/
/* 				[gd(2012, 1, 3), 66],*/
/* 				[gd(2012, 1, 4), 9],*/
/* 				[gd(2012, 1, 5), 119],*/
/* 				[gd(2012, 1, 6), 6],*/
/* 				[gd(2012, 1, 7), 9]*/
/* 			];*/
/* 			$("#canvas_dahs").length && $.plot($("#canvas_dahs"), [*/
/* 				data1, data2*/
/* 			], {*/
/* 				series: {*/
/* 					lines: {*/
/* 						show: false,*/
/* 						fill: true*/
/* 					},*/
/* 					splines: {*/
/* 						show: true,*/
/* 						tension: 0.4,*/
/* 						lineWidth: 1,*/
/* 						fill: 0.4*/
/* 					},*/
/* 					points: {*/
/* 						radius: 0,*/
/* 						show: true*/
/* 					},*/
/* 					shadowSize: 2*/
/* 				},*/
/* 				grid: {*/
/* 					verticalLines: true,*/
/* 					hoverable: true,*/
/* 					clickable: true,*/
/* 					tickColor: "#d5d5d5",*/
/* 					borderWidth: 1,*/
/* 					color: '#fff'*/
/* 				},*/
/* 				colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],*/
/* 				xaxis: {*/
/* 					tickColor: "rgba(51, 51, 51, 0.06)",*/
/* 					mode: "time",*/
/* 					tickSize: [1, "day"],*/
/* 					//tickLength: 10,*/
/* 					axisLabel: "Date",*/
/* 					axisLabelUseCanvas: true,*/
/* 					axisLabelFontSizePixels: 12,*/
/* 					axisLabelFontFamily: 'Verdana, Arial',*/
/* 					axisLabelPadding: 10*/
/* 						//mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]*/
/* 				},*/
/* 				yaxis: {*/
/* 					ticks: 8,*/
/* 					tickColor: "rgba(51, 51, 51, 0.06)",*/
/* 				},*/
/* 				tooltip: false*/
/* 			});*/
/* */
/* 			function gd(year, month, day) {*/
/* 				return new Date(year, month - 1, day).getTime();*/
/* 			}*/
/* 		});*/
/* 	</script>*/
/* */
/* 	<!-- worldmap -->*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/maps/jquery-jvectormap-2.0.3.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/maps/gdp-data.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/maps/jquery-jvectormap-world-mill-en.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/Gentellela/js/maps/jquery-jvectormap-us-aea-en.js') }}"></script>*/
/* 	<!-- pace -->*/
/* 	<script src="{{ asset('bundles/Gentellela/js/pace/pace.min.js') }}"></script>*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#world-map-gdp').vectorMap({*/
/* 				map: 'world_mill_en',*/
/* 				backgroundColor: 'transparent',*/
/* 				zoomOnScroll: false,*/
/* 				series: {*/
/* 					regions: [{*/
/* 						values: gdpData,*/
/* 						scale: ['#E6F2F0', '#149B7E'],*/
/* 						normalizeFunction: 'polynomial'*/
/* 					}]*/
/* 				},*/
/* 				onRegionTipShow: function(e, el, code) {*/
/* 					el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* 	<!-- skycons -->*/
/* 	<script src="{{ asset('bundles/Gentellela/js/skycons/skycons.min.js') }}"></script>*/
/* 	<script>*/
/* 		var icons = new Skycons({*/
/* 				"color": "#73879C"*/
/* 			}),*/
/* 			list = [*/
/* 				"clear-day", "clear-night", "partly-cloudy-day",*/
/* 				"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",*/
/* 				"fog"*/
/* 			],*/
/* 			i;*/
/* */
/* 		for (i = list.length; i--;)*/
/* 			icons.set(list[i], list[i]);*/
/* */
/* 		icons.play();*/
/* 	</script>*/
/* */
/* 	<!-- dashbord linegraph -->*/
/* 	<script>*/
/* 		var doughnutData = [{*/
/* 			value: 30,*/
/* 			color: "#455C73"*/
/* 		}, {*/
/* 			value: 30,*/
/* 			color: "#9B59B6"*/
/* 		}, {*/
/* 			value: 60,*/
/* 			color: "#BDC3C7"*/
/* 		}, {*/
/* 			value: 100,*/
/* 			color: "#26B99A"*/
/* 		}, {*/
/* 			value: 120,*/
/* 			color: "#3498DB"*/
/* 		}];*/
/* 		var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);*/
/* 	</script>*/
/* 	<!-- /dashbord linegraph -->*/
/* 	<!-- datepicker -->*/
/* 	<script type="text/javascript">*/
/* 		$(document).ready(function() {*/
/* */
/* 			var cb = function(start, end, label) {*/
/* 				console.log(start.toISOString(), end.toISOString(), label);*/
/* 				$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));*/
/* 				//alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");*/
/* 			}*/
/* */
/* 			var optionSet1 = {*/
/* 				startDate: moment().subtract(29, 'days'),*/
/* 				endDate: moment(),*/
/* 				minDate: '01/01/2012',*/
/* 				maxDate: '12/31/2015',*/
/* 				dateLimit: {*/
/* 					days: 60*/
/* 				},*/
/* 				showDropdowns: true,*/
/* 				showWeekNumbers: true,*/
/* 				timePicker: false,*/
/* 				timePickerIncrement: 1,*/
/* 				timePicker12Hour: true,*/
/* 				ranges: {*/
/* 					'Today': [moment(), moment()],*/
/* 					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],*/
/* 					'Last 7 Days': [moment().subtract(6, 'days'), moment()],*/
/* 					'Last 30 Days': [moment().subtract(29, 'days'), moment()],*/
/* 					'This Month': [moment().startOf('month'), moment().endOf('month')],*/
/* 					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]*/
/* 				},*/
/* 				opens: 'left',*/
/* 				buttonClasses: ['btn btn-default'],*/
/* 				applyClass: 'btn-small btn-primary',*/
/* 				cancelClass: 'btn-small',*/
/* 				format: 'MM/DD/YYYY',*/
/* 				separator: ' to ',*/
/* 				locale: {*/
/* 					applyLabel: 'Submit',*/
/* 					cancelLabel: 'Clear',*/
/* 					fromLabel: 'From',*/
/* 					toLabel: 'To',*/
/* 					customRangeLabel: 'Custom',*/
/* 					daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],*/
/* 					monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],*/
/* 					firstDay: 1*/
/* 				}*/
/* 			};*/
/* 			$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));*/
/* 			$('#reportrange').daterangepicker(optionSet1, cb);*/
/* 			$('#reportrange').on('show.daterangepicker', function() {*/
/* 				console.log("show event fired");*/
/* 			});*/
/* 			$('#reportrange').on('hide.daterangepicker', function() {*/
/* 				console.log("hide event fired");*/
/* 			});*/
/* 			$('#reportrange').on('apply.daterangepicker', function(ev, picker) {*/
/* 				console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));*/
/* 			});*/
/* 			$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {*/
/* 				console.log("cancel event fired");*/
/* 			});*/
/* 			$('#options1').click(function() {*/
/* 				$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);*/
/* 			});*/
/* 			$('#options2').click(function() {*/
/* 				$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);*/
/* 			});*/
/* 			$('#destroy').click(function() {*/
/* 				$('#reportrange').data('daterangepicker').remove();*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* 	<script>*/
/* 		NProgress.done();*/
/* 	</script>*/
/* 	<!-- /datepicker -->*/
/* 	<!-- /footer content -->*/
/*                 */
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
