<?php

/* admin/estudiantes/estudiantesForm.html.twig */
class __TwigTemplate_1f0b5d46def7f6060f342e508c09793d1213ebbdbf45c7887c3bebafc66afaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/estudiantes/estudiantesForm.html.twig", 1);
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
        $__internal_bacde134e8fd283247c3aa25d7ccfe8977340a06123199c7fac8f617bee7cda2 = $this->env->getExtension("native_profiler");
        $__internal_bacde134e8fd283247c3aa25d7ccfe8977340a06123199c7fac8f617bee7cda2->enter($__internal_bacde134e8fd283247c3aa25d7ccfe8977340a06123199c7fac8f617bee7cda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/estudiantes/estudiantesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bacde134e8fd283247c3aa25d7ccfe8977340a06123199c7fac8f617bee7cda2->leave($__internal_bacde134e8fd283247c3aa25d7ccfe8977340a06123199c7fac8f617bee7cda2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_830f7505e8195878bdacc6289d7c1fef0781788368b7dd9223cde1661b341661 = $this->env->getExtension("native_profiler");
        $__internal_830f7505e8195878bdacc6289d7c1fef0781788368b7dd9223cde1661b341661->enter($__internal_830f7505e8195878bdacc6289d7c1fef0781788368b7dd9223cde1661b341661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_830f7505e8195878bdacc6289d7c1fef0781788368b7dd9223cde1661b341661->leave($__internal_830f7505e8195878bdacc6289d7c1fef0781788368b7dd9223cde1661b341661_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e887c5c833b0d120f5618aeb0bcf322b7163d74c3df21ff748f739ea038d1bb7 = $this->env->getExtension("native_profiler");
        $__internal_e887c5c833b0d120f5618aeb0bcf322b7163d74c3df21ff748f739ea038d1bb7->enter($__internal_e887c5c833b0d120f5618aeb0bcf322b7163d74c3df21ff748f739ea038d1bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/select/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_e887c5c833b0d120f5618aeb0bcf322b7163d74c3df21ff748f739ea038d1bb7->leave($__internal_e887c5c833b0d120f5618aeb0bcf322b7163d74c3df21ff748f739ea038d1bb7_prof);

    }

    // line 12
    public function block_js($context, array $blocks = array())
    {
        $__internal_59be61852742b025071ce384d3d23e7a78a59cfe1ae406f362c687fb380761b1 = $this->env->getExtension("native_profiler");
        $__internal_59be61852742b025071ce384d3d23e7a78a59cfe1ae406f362c687fb380761b1->enter($__internal_59be61852742b025071ce384d3d23e7a78a59cfe1ae406f362c687fb380761b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 13
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_59be61852742b025071ce384d3d23e7a78a59cfe1ae406f362c687fb380761b1->leave($__internal_59be61852742b025071ce384d3d23e7a78a59cfe1ae406f362c687fb380761b1_prof);

    }

    // line 16
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_1b30d8e1d4ca5fee00ed0321f98167baa47e610b2720d4bd6439e5b12b698b1d = $this->env->getExtension("native_profiler");
        $__internal_1b30d8e1d4ca5fee00ed0321f98167baa47e610b2720d4bd6439e5b12b698b1d->enter($__internal_1b30d8e1d4ca5fee00ed0321f98167baa47e610b2720d4bd6439e5b12b698b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
   Estudiantes
";
        
        $__internal_1b30d8e1d4ca5fee00ed0321f98167baa47e610b2720d4bd6439e5b12b698b1d->leave($__internal_1b30d8e1d4ca5fee00ed0321f98167baa47e610b2720d4bd6439e5b12b698b1d_prof);

    }

    // line 20
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_3273d7fd784a31e94a9aa70ca8361bc4c5d4c956ba051239270f434a159b7b3d = $this->env->getExtension("native_profiler");
        $__internal_3273d7fd784a31e94a9aa70ca8361bc4c5d4c956ba051239270f434a159b7b3d->enter($__internal_3273d7fd784a31e94a9aa70ca8361bc4c5d4c956ba051239270f434a159b7b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_3273d7fd784a31e94a9aa70ca8361bc4c5d4c956ba051239270f434a159b7b3d->leave($__internal_3273d7fd784a31e94a9aa70ca8361bc4c5d4c956ba051239270f434a159b7b3d_prof);

    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_efd1c1582acbc048f92bdd2408527639c6dbaccda4b51b432d978a4ab67d7f86 = $this->env->getExtension("native_profiler");
        $__internal_efd1c1582acbc048f92bdd2408527639c6dbaccda4b51b432d978a4ab67d7f86->enter($__internal_efd1c1582acbc048f92bdd2408527639c6dbaccda4b51b432d978a4ab67d7f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
    <div class=\"x_content\">
        <form class=\"form-horizontal form-label-left\" novalidate method=\"POST\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("estudiantesAdd");
        echo "\" >            
            <span class=\"section\">Agregar</span>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Tipo de Identificación</label>
                    <div class=\"col-md-6 col-sm-9 col-xs-12\">
                        <select class=\"form-control\" id=\"tipoIdentificacion\" name=\"tipoIdentificacion\">
                          <option>Seleccione</option>
                          <option>Tarjeta de identidad</option>
                          <option>Cédula de ciudadanía</option>
                          <option>Pasaporte</option>                          
                        </select>
                    </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"identificacion\">Identificación<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input id=\"identificacion\" class=\"form-control col-md-7 col-xs-12\" data-validate-length-range=\"6\" data-validate-words=\"2\" name=\"identificacion\" placeholder=\"Número de Identificación\" required=\"required\" type=\"text\">
                    </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"nombres\">Nombres<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombres\" name=\"nombres\" data-validate-linked=\"nombres\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"apellidos\">Apellidos<span class=\"required\">*</span></label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"number\" name=\"number\" required=\"required\" data-validate-minmax=\"10,100\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"codigo\">Código<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"codigo\" name=\"codigo\" required=\"required\" placeholder=\"Código\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"telefono\">Teléfono<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input id=\"telefono\" type=\"text\" name=\"telefono\" data-validate-length-range=\"5,20\" class=\"optional form-control col-md-7 col-xs-12\">
                    </div>
            </div>            
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"direccion\">Dirección<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"direccion\" name=\"direccion\" required=\"required\" data-validate-length-range=\"8,20\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
            </div>
            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
                <div class=\"col-md-6 col-md-offset-5\">
                    <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                    <button id=\"send\" type=\"submit\" class=\"btn btn-success\">Submit</button>
                </div>
            </div>
        </form>
    </div>
        
";
        
        $__internal_efd1c1582acbc048f92bdd2408527639c6dbaccda4b51b432d978a4ab67d7f86->leave($__internal_efd1c1582acbc048f92bdd2408527639c6dbaccda4b51b432d978a4ab67d7f86_prof);

    }

    // line 87
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_26c527f93e69bc278e5d4d069e9762cd6694374a50f589ad85d39d5278016ec4 = $this->env->getExtension("native_profiler");
        $__internal_26c527f93e69bc278e5d4d069e9762cd6694374a50f589ad85d39d5278016ec4->enter($__internal_26c527f93e69bc278e5d4d069e9762cd6694374a50f589ad85d39d5278016ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 88
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
        
        $__internal_26c527f93e69bc278e5d4d069e9762cd6694374a50f589ad85d39d5278016ec4->leave($__internal_26c527f93e69bc278e5d4d069e9762cd6694374a50f589ad85d39d5278016ec4_prof);

    }

    public function getTemplateName()
    {
        return "admin/estudiantes/estudiantesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  196 => 87,  129 => 26,  120 => 24,  106 => 20,  92 => 16,  82 => 13,  76 => 12,  67 => 9,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*     <link href="{{ asset('bundles/Gentellela/css/select/select2.min.css')}}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titulo %} */
/*    Estudiantes*/
/* {% endblock %}*/
/* */
/* {% block sub_titulo %} */
/*     */
/* {% endblock %}*/
/* */
/* {% block contenido %}   */
/*     <div class="x_content">*/
/*         <form class="form-horizontal form-label-left" novalidate method="POST" action="{{ path('estudiantesAdd') }}" >            */
/*             <span class="section">Agregar</span>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Identificación</label>*/
/*                     <div class="col-md-6 col-sm-9 col-xs-12">*/
/*                         <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">*/
/*                           <option>Seleccione</option>*/
/*                           <option>Tarjeta de identidad</option>*/
/*                           <option>Cédula de ciudadanía</option>*/
/*                           <option>Pasaporte</option>                          */
/*                         </select>*/
/*                     </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="identificacion">Identificación<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input id="identificacion" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="identificacion" placeholder="Número de Identificación" required="required" type="text">*/
/*                     </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input type="text" id="nombres" name="nombres" data-validate-linked="nombres" required="required" class="form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos<span class="required">*</span></label>*/
/*                       <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input type="text" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">*/
/*                       </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Código<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input type="text" id="codigo" name="codigo" required="required" placeholder="Código" class="form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Teléfono<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input id="telefono" type="text" name="telefono" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*             </div>            */
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input type="text" id="direccion" name="direccion" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*             </div>*/
/*             <div class="ln_solid"></div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-6 col-md-offset-5">*/
/*                     <button type="submit" class="btn btn-primary">Cancel</button>*/
/*                     <button id="send" type="submit" class="btn btn-success">Submit</button>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*         */
/* {% endblock %}*/
/* */
/* {% block js_footer %}*/
/*     {{ parent() }}*/
/*         <script type="text/javascript">*/
/*               $(document).ready(function() {*/
/*                 $('#datatable').dataTable();            */
/*               });*/
/*               TableManageButtons.init();*/
/*         </script>*/
/* {% endblock %}*/
/*     */
