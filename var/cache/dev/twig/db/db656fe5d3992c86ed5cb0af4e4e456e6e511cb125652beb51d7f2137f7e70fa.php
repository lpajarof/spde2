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
        $__internal_2e079987fb1cc4afbe11924b46ac392634e7dd036b852de9b79adcc98208d3fc = $this->env->getExtension("native_profiler");
        $__internal_2e079987fb1cc4afbe11924b46ac392634e7dd036b852de9b79adcc98208d3fc->enter($__internal_2e079987fb1cc4afbe11924b46ac392634e7dd036b852de9b79adcc98208d3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/estudiantes/estudiantesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e079987fb1cc4afbe11924b46ac392634e7dd036b852de9b79adcc98208d3fc->leave($__internal_2e079987fb1cc4afbe11924b46ac392634e7dd036b852de9b79adcc98208d3fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ca9dbf581f3589dac40af33b7c6a6ef86b7f003633c346e9e88d705e1652945 = $this->env->getExtension("native_profiler");
        $__internal_7ca9dbf581f3589dac40af33b7c6a6ef86b7f003633c346e9e88d705e1652945->enter($__internal_7ca9dbf581f3589dac40af33b7c6a6ef86b7f003633c346e9e88d705e1652945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7ca9dbf581f3589dac40af33b7c6a6ef86b7f003633c346e9e88d705e1652945->leave($__internal_7ca9dbf581f3589dac40af33b7c6a6ef86b7f003633c346e9e88d705e1652945_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4eca4e1b36b379a525079c3cb887cfb04ad3dbf3ef8cb9f781924c5b8a9c0ec = $this->env->getExtension("native_profiler");
        $__internal_e4eca4e1b36b379a525079c3cb887cfb04ad3dbf3ef8cb9f781924c5b8a9c0ec->enter($__internal_e4eca4e1b36b379a525079c3cb887cfb04ad3dbf3ef8cb9f781924c5b8a9c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/select/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_e4eca4e1b36b379a525079c3cb887cfb04ad3dbf3ef8cb9f781924c5b8a9c0ec->leave($__internal_e4eca4e1b36b379a525079c3cb887cfb04ad3dbf3ef8cb9f781924c5b8a9c0ec_prof);

    }

    // line 12
    public function block_js($context, array $blocks = array())
    {
        $__internal_47cc448c123ac6d0fc30a9e93d91961c074b5757d38b2f8538646d8090549c35 = $this->env->getExtension("native_profiler");
        $__internal_47cc448c123ac6d0fc30a9e93d91961c074b5757d38b2f8538646d8090549c35->enter($__internal_47cc448c123ac6d0fc30a9e93d91961c074b5757d38b2f8538646d8090549c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 13
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_47cc448c123ac6d0fc30a9e93d91961c074b5757d38b2f8538646d8090549c35->leave($__internal_47cc448c123ac6d0fc30a9e93d91961c074b5757d38b2f8538646d8090549c35_prof);

    }

    // line 16
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_c2ab1f60b4119caeb2585f0c87ad847c286e404846e6d5f1498b545a5a5892eb = $this->env->getExtension("native_profiler");
        $__internal_c2ab1f60b4119caeb2585f0c87ad847c286e404846e6d5f1498b545a5a5892eb->enter($__internal_c2ab1f60b4119caeb2585f0c87ad847c286e404846e6d5f1498b545a5a5892eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
   Estudiantes
";
        
        $__internal_c2ab1f60b4119caeb2585f0c87ad847c286e404846e6d5f1498b545a5a5892eb->leave($__internal_c2ab1f60b4119caeb2585f0c87ad847c286e404846e6d5f1498b545a5a5892eb_prof);

    }

    // line 20
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_ae8209acaf3c932d972009c91cd14ff01f8c14090e5a268a9086f31b34d02c0e = $this->env->getExtension("native_profiler");
        $__internal_ae8209acaf3c932d972009c91cd14ff01f8c14090e5a268a9086f31b34d02c0e->enter($__internal_ae8209acaf3c932d972009c91cd14ff01f8c14090e5a268a9086f31b34d02c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_ae8209acaf3c932d972009c91cd14ff01f8c14090e5a268a9086f31b34d02c0e->leave($__internal_ae8209acaf3c932d972009c91cd14ff01f8c14090e5a268a9086f31b34d02c0e_prof);

    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_068b4a7cda4d5d58f976ec9a812ec668bb348786d541e4878c2b4419e26cc48b = $this->env->getExtension("native_profiler");
        $__internal_068b4a7cda4d5d58f976ec9a812ec668bb348786d541e4878c2b4419e26cc48b->enter($__internal_068b4a7cda4d5d58f976ec9a812ec668bb348786d541e4878c2b4419e26cc48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 25
        echo "    
    <form method=\"POST\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("estudiantesAdd");
        echo "\">
        identificacion
        <input id=\"identificacion\" class=\"form-control col-md-7 col-xs-12\" data-validate-length-range=\"6\" data-validate-words=\"2\" name=\"identificacion\" placeholder=\"Número de Identificación\" required=\"required\" type=\"text\">
        <br>
        <button type=\"submit\" class=\"btn btn-primary\">enviar</button>
    </form>
    
";
        // line 92
        echo "        
";
        
        $__internal_068b4a7cda4d5d58f976ec9a812ec668bb348786d541e4878c2b4419e26cc48b->leave($__internal_068b4a7cda4d5d58f976ec9a812ec668bb348786d541e4878c2b4419e26cc48b_prof);

    }

    // line 95
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_e27db9e2fe62bf5bc147363211987170536bc6084a94929902b6f04616d6414d = $this->env->getExtension("native_profiler");
        $__internal_e27db9e2fe62bf5bc147363211987170536bc6084a94929902b6f04616d6414d->enter($__internal_e27db9e2fe62bf5bc147363211987170536bc6084a94929902b6f04616d6414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 96
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
        
        $__internal_e27db9e2fe62bf5bc147363211987170536bc6084a94929902b6f04616d6414d->leave($__internal_e27db9e2fe62bf5bc147363211987170536bc6084a94929902b6f04616d6414d_prof);

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
        return array (  153 => 96,  147 => 95,  139 => 92,  129 => 26,  126 => 25,  120 => 24,  106 => 20,  92 => 16,  82 => 13,  76 => 12,  67 => 9,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/* {% block contenido %}*/
/*     */
/*     <form method="POST" action="{{ path('estudiantesAdd') }}">*/
/*         identificacion*/
/*         <input id="identificacion" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="identificacion" placeholder="Número de Identificación" required="required" type="text">*/
/*         <br>*/
/*         <button type="submit" class="btn btn-primary">enviar</button>*/
/*     </form>*/
/*     */
/* {#    <div class="x_content">*/
/*         <form class="form-horizontal form-label-left" novalidate method="POST" action="{{ path('estudiantesAdd') }}" >            */
/*             <span class="section">Agregar</span>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Identificación</label>*/
/*                     <div class="col-md-6 col-sm-9 col-xs-12">*/
/*                         <select class="form-control">*/
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
/* #}        */
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
