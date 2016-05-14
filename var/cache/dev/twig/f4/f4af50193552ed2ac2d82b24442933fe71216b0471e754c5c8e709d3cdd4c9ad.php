<?php

/* :admin/estudiantes:estudiantes.html.twig */
class __TwigTemplate_329caa38d6852a5826b5f0146bf55410fc73b79a3dfcebfb7eebd442f9dcff8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/estudiantes:estudiantes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'contenido' => array($this, 'block_contenido'),
            'js_footer' => array($this, 'block_js_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a088b6defc946c937f909c55f819b95348ee87a6d743c0a63bd79651088a0994 = $this->env->getExtension("native_profiler");
        $__internal_a088b6defc946c937f909c55f819b95348ee87a6d743c0a63bd79651088a0994->enter($__internal_a088b6defc946c937f909c55f819b95348ee87a6d743c0a63bd79651088a0994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/estudiantes:estudiantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a088b6defc946c937f909c55f819b95348ee87a6d743c0a63bd79651088a0994->leave($__internal_a088b6defc946c937f909c55f819b95348ee87a6d743c0a63bd79651088a0994_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7b702b9a5ed998caec9651739e012448634f9d5f08bd601ed2d9da9f3726b48 = $this->env->getExtension("native_profiler");
        $__internal_e7b702b9a5ed998caec9651739e012448634f9d5f08bd601ed2d9da9f3726b48->enter($__internal_e7b702b9a5ed998caec9651739e012448634f9d5f08bd601ed2d9da9f3726b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e7b702b9a5ed998caec9651739e012448634f9d5f08bd601ed2d9da9f3726b48->leave($__internal_e7b702b9a5ed998caec9651739e012448634f9d5f08bd601ed2d9da9f3726b48_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8676eb3be150920a98dd2da4f09eca64985f7df2b2875761afb912fd700cff19 = $this->env->getExtension("native_profiler");
        $__internal_8676eb3be150920a98dd2da4f09eca64985f7df2b2875761afb912fd700cff19->enter($__internal_8676eb3be150920a98dd2da4f09eca64985f7df2b2875761afb912fd700cff19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8676eb3be150920a98dd2da4f09eca64985f7df2b2875761afb912fd700cff19->leave($__internal_8676eb3be150920a98dd2da4f09eca64985f7df2b2875761afb912fd700cff19_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_763d2f3d8959c56e79dbcc058bdaf780723ad6cebda56d39aa0d38ba03095105 = $this->env->getExtension("native_profiler");
        $__internal_763d2f3d8959c56e79dbcc058bdaf780723ad6cebda56d39aa0d38ba03095105->enter($__internal_763d2f3d8959c56e79dbcc058bdaf780723ad6cebda56d39aa0d38ba03095105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_763d2f3d8959c56e79dbcc058bdaf780723ad6cebda56d39aa0d38ba03095105->leave($__internal_763d2f3d8959c56e79dbcc058bdaf780723ad6cebda56d39aa0d38ba03095105_prof);

    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9395bae98fcd2ec564b545d0a048944aaf078481805ac7a238a72d8821927374 = $this->env->getExtension("native_profiler");
        $__internal_9395bae98fcd2ec564b545d0a048944aaf078481805ac7a238a72d8821927374->enter($__internal_9395bae98fcd2ec564b545d0a048944aaf078481805ac7a238a72d8821927374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 16
        echo "    
     <div class=\"x_panel\">
                                    <div class=\"x_title\">
                                        <h2>Default Example <small>Users</small></h2>                  
                                        <div class=\"clearfix\"></div>
                                    </div>
                                <div class=\"x_content\">
                                    <p class=\"text-muted font-13 m-b-30\">
                                        DataTables has most features enabled by default
                                    </p>
                                    <table id=\"datatable\" class=\"table table-striped table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>Tiger Nixon</td>
                                              <td>System Architect</td>
                                              <td>Edinburgh</td>
                                              <td>61</td>
                                              <td>2011/04/25</td>
                                              <td>\$320,800</td>
                                            </tr>
                                            <tr>
                                              <td>Garrett Winters</td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              <td>63</td>
                                              <td>2011/07/25</td>
                                              <td>\$170,750</td>
                                            </tr>
                                            <tr>
                                              <td>Ashton Cox</td>
                                              <td>Junior Technical Author</td>
                                              <td>San Francisco</td>
                                              <td>66</td>
                                              <td>2009/01/12</td>
                                              <td>\$86,000</td>
                                            </tr>
                                            <tr>
                                              <td>Cedric Kelly</td>
                                              <td>Senior Javascript Developer</td>
                                              <td>Edinburgh</td>
                                              <td>22</td>
                                              <td>2012/03/29</td>
                                              <td>\$433,060</td>
                                            </tr>
                                            <tr>
                                              <td>Airi Satou</td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              <td>33</td>
                                              <td>2008/11/28</td>
                                              <td>\$162,700</td>
                                            </tr>
                                            <tr>
                                              <td>Brielle Williamson</td>
                                              <td>Integration Specialist</td>
                                              <td>New York</td>
                                              <td>61</td>
                                              <td>2012/12/02</td>
                                              <td>\$372,000</td>
                                            </tr>
                                            <tr>
                                              <td>Herrod Chandler</td>
                                              <td>Sales Assistant</td>
                                              <td>San Francisco</td>
                                              <td>59</td>
                                              <td>2012/08/06</td>
                                              <td>\$137,500</td>
                                            </tr>
                                            <tr>
                                              <td>Rhona Davidson</td>
                                              <td>Integration Specialist</td>
                                              <td>Tokyo</td>
                                              <td>55</td>
                                              <td>2010/10/14</td>
                                              <td>\$327,900</td>
                                            </tr>
                                            <tr>
                                              <td>Colleen Hurst</td>
                                              <td>Javascript Developer</td>
                                              <td>San Francisco</td>
                                              <td>39</td>
                                              <td>2009/09/15</td>
                                              <td>\$205,500</td>
                                            </tr>
                                            <tr>
                                              <td>Sonya Frost</td>
                                              <td>Software Engineer</td>
                                              <td>Edinburgh</td>
                                              <td>23</td>
                                              <td>2008/12/13</td>
                                              <td>\$103,600</td>
                                            </tr>
                                            <tr>
                                              <td>Jena Gaines</td>
                                              <td>Office Manager</td>
                                              <td>London</td>
                                              <td>30</td>
                                              <td>2008/12/19</td>
                                              <td>\$90,560</td>
                                            </tr>
                                            <tr>
                                              <td>Quinn Flynn</td>
                                              <td>Support Lead</td>
                                              <td>Edinburgh</td>
                                              <td>22</td>
                                              <td>2013/03/03</td>
                                              <td>\$342,000</td>
                                            </tr>
                                            <tr>
                                              <td>Charde Marshall</td>
                                              <td>Regional Director</td>
                                              <td>San Francisco</td>
                                              <td>36</td>
                                              <td>2008/10/16</td>
                                              <td>\$470,600</td>
                                            </tr>
                                            <tr>
                                              <td>Haley Kennedy</td>
                                              <td>Senior Marketing Designer</td>
                                              <td>London</td>
                                              <td>43</td>
                                              <td>2012/12/18</td>
                                              <td>\$313,500</td>
                                            </tr>
                                            <tr>
                                              <td>Tatyana Fitzpatrick</td>
                                              <td>Regional Director</td>
                                              <td>London</td>
                                              <td>19</td>
                                              <td>2010/03/17</td>
                                              <td>\$385,750</td>
                                            </tr>
                                            <tr>
                                              <td>Michael Silva</td>
                                              <td>Marketing Designer</td>
                                              <td>London</td>
                                              <td>66</td>
                                              <td>2012/11/27</td>
                                              <td>\$198,500</td>
                                            </tr>
                                            <tr>
                                              <td>Paul Byrd</td>
                                              <td>Chief Financial Officer (CFO)</td>
                                              <td>New York</td>
                                              <td>64</td>
                                              <td>2010/06/09</td>
                                              <td>\$725,000</td>
                                            </tr>
                                            <tr>
                                              <td>Gloria Little</td>
                                              <td>Systems Administrator</td>
                                              <td>New York</td>
                                              <td>59</td>
                                              <td>2009/04/10</td>
                                              <td>\$237,500</td>
                                            </tr>
                                            <tr>
                                              <td>Bradley Greer</td>
                                              <td>Software Engineer</td>
                                              <td>London</td>
                                              <td>41</td>
                                              <td>2012/10/13</td>
                                              <td>\$132,000</td>
                                            </tr>
                                            <tr>
                                              <td>Dai Rios</td>
                                              <td>Personnel Lead</td>
                                              <td>Edinburgh</td>
                                              <td>35</td>
                                              <td>2012/09/26</td>
                                              <td>\$217,500</td>
                                            </tr>
                                            <tr>
                                              <td>Jenette Caldwell</td>
                                              <td>Development Lead</td>
                                              <td>New York</td>
                                              <td>30</td>
                                              <td>2011/09/03</td>
                                              <td>\$345,000</td>
                                            </tr>                                          
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
    
";
        
        $__internal_9395bae98fcd2ec564b545d0a048944aaf078481805ac7a238a72d8821927374->leave($__internal_9395bae98fcd2ec564b545d0a048944aaf078481805ac7a238a72d8821927374_prof);

    }

    // line 213
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_83dbff22af662b7e479f251c65e43184dab89d0f4ac7c6ee38dd174cd3547851 = $this->env->getExtension("native_profiler");
        $__internal_83dbff22af662b7e479f251c65e43184dab89d0f4ac7c6ee38dd174cd3547851->enter($__internal_83dbff22af662b7e479f251c65e43184dab89d0f4ac7c6ee38dd174cd3547851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 214
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
          \$(document).ready(function() {
            \$('#datatable').dataTable();            
          });
          TableManageButtons.init();
  </script>
";
        
        $__internal_83dbff22af662b7e479f251c65e43184dab89d0f4ac7c6ee38dd174cd3547851->leave($__internal_83dbff22af662b7e479f251c65e43184dab89d0f4ac7c6ee38dd174cd3547851_prof);

    }

    public function getTemplateName()
    {
        return ":admin/estudiantes:estudiantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 214,  294 => 213,  92 => 16,  86 => 15,  76 => 12,  70 => 11,  60 => 8,  54 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block contenido %}*/
/*     */
/*      <div class="x_panel">*/
/*                                     <div class="x_title">*/
/*                                         <h2>Default Example <small>Users</small></h2>                  */
/*                                         <div class="clearfix"></div>*/
/*                                     </div>*/
/*                                 <div class="x_content">*/
/*                                     <p class="text-muted font-13 m-b-30">*/
/*                                         DataTables has most features enabled by default*/
/*                                     </p>*/
/*                                     <table id="datatable" class="table table-striped table-bordered">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>Name</th>*/
/*                                                 <th>Position</th>*/
/*                                                 <th>Office</th>*/
/*                                                 <th>Age</th>*/
/*                                                 <th>Start date</th>*/
/*                                                 <th>Salary</th>*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                             <tr>*/
/*                                               <td>Tiger Nixon</td>*/
/*                                               <td>System Architect</td>*/
/*                                               <td>Edinburgh</td>*/
/*                                               <td>61</td>*/
/*                                               <td>2011/04/25</td>*/
/*                                               <td>$320,800</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Garrett Winters</td>*/
/*                                               <td>Accountant</td>*/
/*                                               <td>Tokyo</td>*/
/*                                               <td>63</td>*/
/*                                               <td>2011/07/25</td>*/
/*                                               <td>$170,750</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Ashton Cox</td>*/
/*                                               <td>Junior Technical Author</td>*/
/*                                               <td>San Francisco</td>*/
/*                                               <td>66</td>*/
/*                                               <td>2009/01/12</td>*/
/*                                               <td>$86,000</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Cedric Kelly</td>*/
/*                                               <td>Senior Javascript Developer</td>*/
/*                                               <td>Edinburgh</td>*/
/*                                               <td>22</td>*/
/*                                               <td>2012/03/29</td>*/
/*                                               <td>$433,060</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Airi Satou</td>*/
/*                                               <td>Accountant</td>*/
/*                                               <td>Tokyo</td>*/
/*                                               <td>33</td>*/
/*                                               <td>2008/11/28</td>*/
/*                                               <td>$162,700</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Brielle Williamson</td>*/
/*                                               <td>Integration Specialist</td>*/
/*                                               <td>New York</td>*/
/*                                               <td>61</td>*/
/*                                               <td>2012/12/02</td>*/
/*                                               <td>$372,000</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Herrod Chandler</td>*/
/*                                               <td>Sales Assistant</td>*/
/*                                               <td>San Francisco</td>*/
/*                                               <td>59</td>*/
/*                                               <td>2012/08/06</td>*/
/*                                               <td>$137,500</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Rhona Davidson</td>*/
/*                                               <td>Integration Specialist</td>*/
/*                                               <td>Tokyo</td>*/
/*                                               <td>55</td>*/
/*                                               <td>2010/10/14</td>*/
/*                                               <td>$327,900</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Colleen Hurst</td>*/
/*                                               <td>Javascript Developer</td>*/
/*                                               <td>San Francisco</td>*/
/*                                               <td>39</td>*/
/*                                               <td>2009/09/15</td>*/
/*                                               <td>$205,500</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Sonya Frost</td>*/
/*                                               <td>Software Engineer</td>*/
/*                                               <td>Edinburgh</td>*/
/*                                               <td>23</td>*/
/*                                               <td>2008/12/13</td>*/
/*                                               <td>$103,600</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Jena Gaines</td>*/
/*                                               <td>Office Manager</td>*/
/*                                               <td>London</td>*/
/*                                               <td>30</td>*/
/*                                               <td>2008/12/19</td>*/
/*                                               <td>$90,560</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Quinn Flynn</td>*/
/*                                               <td>Support Lead</td>*/
/*                                               <td>Edinburgh</td>*/
/*                                               <td>22</td>*/
/*                                               <td>2013/03/03</td>*/
/*                                               <td>$342,000</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Charde Marshall</td>*/
/*                                               <td>Regional Director</td>*/
/*                                               <td>San Francisco</td>*/
/*                                               <td>36</td>*/
/*                                               <td>2008/10/16</td>*/
/*                                               <td>$470,600</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Haley Kennedy</td>*/
/*                                               <td>Senior Marketing Designer</td>*/
/*                                               <td>London</td>*/
/*                                               <td>43</td>*/
/*                                               <td>2012/12/18</td>*/
/*                                               <td>$313,500</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Tatyana Fitzpatrick</td>*/
/*                                               <td>Regional Director</td>*/
/*                                               <td>London</td>*/
/*                                               <td>19</td>*/
/*                                               <td>2010/03/17</td>*/
/*                                               <td>$385,750</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Michael Silva</td>*/
/*                                               <td>Marketing Designer</td>*/
/*                                               <td>London</td>*/
/*                                               <td>66</td>*/
/*                                               <td>2012/11/27</td>*/
/*                                               <td>$198,500</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Paul Byrd</td>*/
/*                                               <td>Chief Financial Officer (CFO)</td>*/
/*                                               <td>New York</td>*/
/*                                               <td>64</td>*/
/*                                               <td>2010/06/09</td>*/
/*                                               <td>$725,000</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Gloria Little</td>*/
/*                                               <td>Systems Administrator</td>*/
/*                                               <td>New York</td>*/
/*                                               <td>59</td>*/
/*                                               <td>2009/04/10</td>*/
/*                                               <td>$237,500</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Bradley Greer</td>*/
/*                                               <td>Software Engineer</td>*/
/*                                               <td>London</td>*/
/*                                               <td>41</td>*/
/*                                               <td>2012/10/13</td>*/
/*                                               <td>$132,000</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Dai Rios</td>*/
/*                                               <td>Personnel Lead</td>*/
/*                                               <td>Edinburgh</td>*/
/*                                               <td>35</td>*/
/*                                               <td>2012/09/26</td>*/
/*                                               <td>$217,500</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                               <td>Jenette Caldwell</td>*/
/*                                               <td>Development Lead</td>*/
/*                                               <td>New York</td>*/
/*                                               <td>30</td>*/
/*                                               <td>2011/09/03</td>*/
/*                                               <td>$345,000</td>*/
/*                                             </tr>                                          */
/*                                           </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block js_footer %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*           $(document).ready(function() {*/
/*             $('#datatable').dataTable();            */
/*           });*/
/*           TableManageButtons.init();*/
/*   </script>*/
/* {% endblock %}*/
/*     */
