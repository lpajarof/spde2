<?php

/* admin/acciones/fm_eliminar_acciones.html.twig */
class __TwigTemplate_5605b4089ee694c31c4a1cd9e761fb387100587e78414990fe0cb469776f8416 extends Twig_Template
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
        $__internal_fbe4c6328478d886773111e7a47d1265f234073ecb1dd7564ca4abebe50efd7a = $this->env->getExtension("native_profiler");
        $__internal_fbe4c6328478d886773111e7a47d1265f234073ecb1dd7564ca4abebe50efd7a->enter($__internal_fbe4c6328478d886773111e7a47d1265f234073ecb1dd7564ca4abebe50efd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/acciones/fm_eliminar_acciones.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_eliminar\"></div>
    <form id=\"frm_elimina_caracteristica\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
             <h2 class=\"text-center text-muted\">Estas seguro?</h2>
\t  <p class=\"lead text-muted text-center\" style=\"display: block;margin:10px\">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
      <input type=\"hidden\" class=\"form-control\" id=\"idaccion\" name=\"idaccion\">
           
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
        
        $__internal_fbe4c6328478d886773111e7a47d1265f234073ecb1dd7564ca4abebe50efd7a->leave($__internal_fbe4c6328478d886773111e7a47d1265f234073ecb1dd7564ca4abebe50efd7a_prof);

    }

    public function getTemplateName()
    {
        return "admin/acciones/fm_eliminar_acciones.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/*  <div class="modal-body">*/
/* <div id="respuesta_eliminar"></div>*/
/*     <form id="frm_elimina_caracteristica" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*              <h2 class="text-center text-muted">Estas seguro?</h2>*/
/* 	  <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>*/
/*       <input type="hidden" class="form-control" id="idaccion" name="idaccion">*/
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
