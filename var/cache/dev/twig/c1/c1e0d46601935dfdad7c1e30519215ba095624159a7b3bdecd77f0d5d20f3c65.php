<?php

/* admin/clasificacion/fm_eliminar_clasificacion.html.twig */
class __TwigTemplate_3c93192f08ffbf07b6c29b019fff05e46153a7a319c84611650a9528b147bc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1df59cd53b6d08ee84f4c75900d0a03e334492f041f9a285136b4bd369dbf35d = $this->env->getExtension("native_profiler");
        $__internal_1df59cd53b6d08ee84f4c75900d0a03e334492f041f9a285136b4bd369dbf35d->enter($__internal_1df59cd53b6d08ee84f4c75900d0a03e334492f041f9a285136b4bd369dbf35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clasificacion/fm_eliminar_clasificacion.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_eliminar\"></div>
    <form id=\"frm_elimina_clasificacion\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
             <h2 class=\"text-center text-muted\">Estas seguro?</h2>
\t  <p class=\"lead text-muted text-center\" style=\"display: block;margin:10px\">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
      <input type=\"hidden\" class=\"form-control\" id=\"idclasificacion\" name=\"idclasificacion\">
           
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cancelar</button>
                <button type=\"submit\" class=\"btn btn-success\">Eliminar</button>
            </div>
        </div>                                      
    </form>
</div>    
";
        
        $__internal_1df59cd53b6d08ee84f4c75900d0a03e334492f041f9a285136b4bd369dbf35d->leave($__internal_1df59cd53b6d08ee84f4c75900d0a03e334492f041f9a285136b4bd369dbf35d_prof);

    }

    public function getTemplateName()
    {
        return "admin/clasificacion/fm_eliminar_clasificacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/*  <div class="modal-body">*/
/* <div id="respuesta_eliminar"></div>*/
/*     <form id="frm_elimina_clasificacion" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*              <h2 class="text-center text-muted">Estas seguro?</h2>*/
/* 	  <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>*/
/*       <input type="hidden" class="form-control" id="idclasificacion" name="idclasificacion">*/
/*            */
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>*/
/*                 <button type="submit" class="btn btn-success">Eliminar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div>    */
/* */
