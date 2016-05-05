<?php

/* admin/parametros/parametros.html.twig */
class __TwigTemplate_06aa4a8d9f11103246ee3009e721cdf873e7210fb446ac77f09639af7ff097d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/parametros/parametros.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'titulo' => array($this, 'block_titulo'),
            'sub_titulo' => array($this, 'block_sub_titulo'),
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
        $__internal_97aa4a655f6a05b37c164e600340688d776b1f6d7bd31ad28d9d9195a52d32ec = $this->env->getExtension("native_profiler");
        $__internal_97aa4a655f6a05b37c164e600340688d776b1f6d7bd31ad28d9d9195a52d32ec->enter($__internal_97aa4a655f6a05b37c164e600340688d776b1f6d7bd31ad28d9d9195a52d32ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/parametros/parametros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97aa4a655f6a05b37c164e600340688d776b1f6d7bd31ad28d9d9195a52d32ec->leave($__internal_97aa4a655f6a05b37c164e600340688d776b1f6d7bd31ad28d9d9195a52d32ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1a17ffc6eab1e0fef1399c4de28d1a4490a692bb360fb944affd3b010d5f744 = $this->env->getExtension("native_profiler");
        $__internal_f1a17ffc6eab1e0fef1399c4de28d1a4490a692bb360fb944affd3b010d5f744->enter($__internal_f1a17ffc6eab1e0fef1399c4de28d1a4490a692bb360fb944affd3b010d5f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f1a17ffc6eab1e0fef1399c4de28d1a4490a692bb360fb944affd3b010d5f744->leave($__internal_f1a17ffc6eab1e0fef1399c4de28d1a4490a692bb360fb944affd3b010d5f744_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c25be8b6869e2b4b1416c621ad4241542c5589f3d7af9dd2c50471e5a28ba5bf = $this->env->getExtension("native_profiler");
        $__internal_c25be8b6869e2b4b1416c621ad4241542c5589f3d7af9dd2c50471e5a28ba5bf->enter($__internal_c25be8b6869e2b4b1416c621ad4241542c5589f3d7af9dd2c50471e5a28ba5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_c25be8b6869e2b4b1416c621ad4241542c5589f3d7af9dd2c50471e5a28ba5bf->leave($__internal_c25be8b6869e2b4b1416c621ad4241542c5589f3d7af9dd2c50471e5a28ba5bf_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_72065f6f154b95386103da1c9cceb2f14703af3cbdae7613e3cfb19f4cc7f1f4 = $this->env->getExtension("native_profiler");
        $__internal_72065f6f154b95386103da1c9cceb2f14703af3cbdae7613e3cfb19f4cc7f1f4->enter($__internal_72065f6f154b95386103da1c9cceb2f14703af3cbdae7613e3cfb19f4cc7f1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_72065f6f154b95386103da1c9cceb2f14703af3cbdae7613e3cfb19f4cc7f1f4->leave($__internal_72065f6f154b95386103da1c9cceb2f14703af3cbdae7613e3cfb19f4cc7f1f4_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_d2d456769e544239b4d1bbaccf7d44f1875a71428cc09609a0e8bd3c77312c4c = $this->env->getExtension("native_profiler");
        $__internal_d2d456769e544239b4d1bbaccf7d44f1875a71428cc09609a0e8bd3c77312c4c->enter($__internal_d2d456769e544239b4d1bbaccf7d44f1875a71428cc09609a0e8bd3c77312c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
   Parametros
";
        
        $__internal_d2d456769e544239b4d1bbaccf7d44f1875a71428cc09609a0e8bd3c77312c4c->leave($__internal_d2d456769e544239b4d1bbaccf7d44f1875a71428cc09609a0e8bd3c77312c4c_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_e524de2d530fc4f64381d9af839e2b49af39cbbc7a86845e93f092e6192cb5c3 = $this->env->getExtension("native_profiler");
        $__internal_e524de2d530fc4f64381d9af839e2b49af39cbbc7a86845e93f092e6192cb5c3->enter($__internal_e524de2d530fc4f64381d9af839e2b49af39cbbc7a86845e93f092e6192cb5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_e524de2d530fc4f64381d9af839e2b49af39cbbc7a86845e93f092e6192cb5c3->leave($__internal_e524de2d530fc4f64381d9af839e2b49af39cbbc7a86845e93f092e6192cb5c3_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_779a6e79ce2b226bf4ab7c3abceb88a8af4e90bd138a17f22af7455ef7f39363 = $this->env->getExtension("native_profiler");
        $__internal_779a6e79ce2b226bf4ab7c3abceb88a8af4e90bd138a17f22af7455ef7f39363->enter($__internal_779a6e79ce2b226bf4ab7c3abceb88a8af4e90bd138a17f22af7455ef7f39363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#tipoUsuarios\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Tipo de Usuarios</a>
                    </li>
                    <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Tipo de Identificación</a>
                    </li>                    
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tipoUsuarios\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\">Nuevo</button></p>
                        <p>                             
                            <div class=\"x_panel\">                            
                                <div class=\"x_content\">
                                    <table id=\"th_tipoUsuarios\" class=\"table table-striped table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Tipo de Usuario</th>                                                
                                            </tr>
                                        </thead>                                        
                                    </table>
                                </div>
                            </div>                           
                        </p>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                          booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                          booth letterpress, commodo enim craft beer mlkshk </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_779a6e79ce2b226bf4ab7c3abceb88a8af4e90bd138a17f22af7455ef7f39363->leave($__internal_779a6e79ce2b226bf4ab7c3abceb88a8af4e90bd138a17f22af7455ef7f39363_prof);

    }

    // line 67
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_da2ec63c374bdf9132d2be34cb99784ac585751637acca5a6de6eb1b760dd5a1 = $this->env->getExtension("native_profiler");
        $__internal_da2ec63c374bdf9132d2be34cb99784ac585751637acca5a6de6eb1b760dd5a1->enter($__internal_da2ec63c374bdf9132d2be34cb99784ac585751637acca5a6de6eb1b760dd5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 68
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
          \$(document).ready(function() {
            \$('#th_tipoUsuarios').dataTable({                
                \"ajax\": \"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("thdb_tipoUsuarios");
        echo "\"
            });            
          });          
  </script>
";
        
        $__internal_da2ec63c374bdf9132d2be34cb99784ac585751637acca5a6de6eb1b760dd5a1->leave($__internal_da2ec63c374bdf9132d2be34cb99784ac585751637acca5a6de6eb1b760dd5a1_prof);

    }

    public function getTemplateName()
    {
        return "admin/parametros/parametros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 72,  176 => 68,  170 => 67,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}    */
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titulo %} */
/*    Parametros*/
/* {% endblock %}*/
/* */
/* {% block sub_titulo %} */
/*     */
/* {% endblock %}*/
/* */
/* {% block contenido %}   */
/* <div class="col-md-12 col-sm-6 col-xs-12">*/
/*     <div class="x_panel">*/
/*         <div class="x_content">*/
/*             <div class="" role="tabpanel" data-example-id="togglable-tabs">*/
/*                 <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">*/
/*                     <li role="presentation" class="active"><a href="#tipoUsuarios" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Tipo de Usuarios</a>*/
/*                     </li>*/
/*                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Tipo de Identificación</a>*/
/*                     </li>                    */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="tipoUsuarios" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary">Nuevo</button></p>*/
/*                         <p>                             */
/*                             <div class="x_panel">                            */
/*                                 <div class="x_content">*/
/*                                     <table id="th_tipoUsuarios" class="table table-striped table-bordered">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>Id</th>*/
/*                                                 <th>Tipo de Usuario</th>                                                */
/*                                             </tr>*/
/*                                         </thead>                                        */
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>                           */
/*                         </p>*/
/*                     </div>*/
/*                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">*/
/*                         <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo*/
/*                           booth letterpress, commodo enim craft beer mlkshk aliquip</p>*/
/*                     </div>*/
/*                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">*/
/*                         <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo*/
/*                           booth letterpress, commodo enim craft beer mlkshk </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block js_footer %}*/
/*     {{ parent() }}   */
/*      <script type="text/javascript">*/
/*           $(document).ready(function() {*/
/*             $('#th_tipoUsuarios').dataTable({                */
/*                 "ajax": "{{ path('thdb_tipoUsuarios') }}"*/
/*             });            */
/*           });          */
/*   </script>*/
/* {% endblock %}*/
/*     */
