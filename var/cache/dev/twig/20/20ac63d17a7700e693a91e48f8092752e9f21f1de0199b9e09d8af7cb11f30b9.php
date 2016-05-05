<?php

/* admin/estudiantes2.html.twig */
class __TwigTemplate_a9a731d148e7954dc7ef3d61522cdf303433f7138ad224f0ab23414779c0ef92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/estudiantes2.html.twig", 1);
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
        $__internal_87b21865a38e740f98eef734016849094ceb799551382271b78738755fc9c750 = $this->env->getExtension("native_profiler");
        $__internal_87b21865a38e740f98eef734016849094ceb799551382271b78738755fc9c750->enter($__internal_87b21865a38e740f98eef734016849094ceb799551382271b78738755fc9c750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/estudiantes2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b21865a38e740f98eef734016849094ceb799551382271b78738755fc9c750->leave($__internal_87b21865a38e740f98eef734016849094ceb799551382271b78738755fc9c750_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15888854bf2b712df4403c6d540c53273588864fd95acc158d23676950e99fb5 = $this->env->getExtension("native_profiler");
        $__internal_15888854bf2b712df4403c6d540c53273588864fd95acc158d23676950e99fb5->enter($__internal_15888854bf2b712df4403c6d540c53273588864fd95acc158d23676950e99fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_15888854bf2b712df4403c6d540c53273588864fd95acc158d23676950e99fb5->leave($__internal_15888854bf2b712df4403c6d540c53273588864fd95acc158d23676950e99fb5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_598cfbe8d47bb31726456b197abfef5b9d9faa0bcdc11ac3408dafba47b8bbce = $this->env->getExtension("native_profiler");
        $__internal_598cfbe8d47bb31726456b197abfef5b9d9faa0bcdc11ac3408dafba47b8bbce->enter($__internal_598cfbe8d47bb31726456b197abfef5b9d9faa0bcdc11ac3408dafba47b8bbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_598cfbe8d47bb31726456b197abfef5b9d9faa0bcdc11ac3408dafba47b8bbce->leave($__internal_598cfbe8d47bb31726456b197abfef5b9d9faa0bcdc11ac3408dafba47b8bbce_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_83f6b889486ce13fa3af659656669698c1210766cb9731877a3726df483c8d6d = $this->env->getExtension("native_profiler");
        $__internal_83f6b889486ce13fa3af659656669698c1210766cb9731877a3726df483c8d6d->enter($__internal_83f6b889486ce13fa3af659656669698c1210766cb9731877a3726df483c8d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_83f6b889486ce13fa3af659656669698c1210766cb9731877a3726df483c8d6d->leave($__internal_83f6b889486ce13fa3af659656669698c1210766cb9731877a3726df483c8d6d_prof);

    }

    // line 16
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_91db211dbfeaf172ab1045130779c332c1e61dde468a942e04d8279a486162b6 = $this->env->getExtension("native_profiler");
        $__internal_91db211dbfeaf172ab1045130779c332c1e61dde468a942e04d8279a486162b6->enter($__internal_91db211dbfeaf172ab1045130779c332c1e61dde468a942e04d8279a486162b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 17
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
        
        $__internal_91db211dbfeaf172ab1045130779c332c1e61dde468a942e04d8279a486162b6->leave($__internal_91db211dbfeaf172ab1045130779c332c1e61dde468a942e04d8279a486162b6_prof);

    }

    // line 214
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_5c90ba639046877daf671e031b12cbff699c8af7b87798f530a842d286934ee3 = $this->env->getExtension("native_profiler");
        $__internal_5c90ba639046877daf671e031b12cbff699c8af7b87798f530a842d286934ee3->enter($__internal_5c90ba639046877daf671e031b12cbff699c8af7b87798f530a842d286934ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 215
        echo "  
  ";
        // line 216
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
          \$(document).ready(function() {
            \$('#datatable').dataTable();            
          });
          TableManageButtons.init();
  </script>
        
";
        
        $__internal_5c90ba639046877daf671e031b12cbff699c8af7b87798f530a842d286934ee3->leave($__internal_5c90ba639046877daf671e031b12cbff699c8af7b87798f530a842d286934ee3_prof);

    }

    public function getTemplateName()
    {
        return "admin/estudiantes2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 216,  300 => 215,  294 => 214,  92 => 17,  86 => 16,  76 => 12,  70 => 11,  60 => 8,  54 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
/* */
/* {% block contenido %}*/
/*                     */
/*  <div class="x_panel">*/
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
/* */
/* {% endblock %}*/
/* */
/* {% block js_footer %}*/
/*   */
/*   {{ parent() }}*/
/*   <script type="text/javascript">*/
/*           $(document).ready(function() {*/
/*             $('#datatable').dataTable();            */
/*           });*/
/*           TableManageButtons.init();*/
/*   </script>*/
/*         */
/* {% endblock %}*/
