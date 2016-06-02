<?php

/* admin/caracteristicas/fm_eliminar_caracteristicas.html.twig */
class __TwigTemplate_7ec38f0a589b63124019b0b6eaaf3040bb99e31f4816da1b98e8416d3da7cec0 extends Twig_Template
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
        $__internal_9ede77b008f3d63b20d582ab6b0fb66f4f7eb868857a5a8e52d48aee6fc2235c = $this->env->getExtension("native_profiler");
        $__internal_9ede77b008f3d63b20d582ab6b0fb66f4f7eb868857a5a8e52d48aee6fc2235c->enter($__internal_9ede77b008f3d63b20d582ab6b0fb66f4f7eb868857a5a8e52d48aee6fc2235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/caracteristicas/fm_eliminar_caracteristicas.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_eliminar\"></div>
    <form id=\"frm_elimina_caracteristica\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
             <h2 class=\"text-center text-muted\">Estas seguro?</h2>
\t  <p class=\"lead text-muted text-center\" style=\"display: block;margin:10px\">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
      <input type=\"hidden\" class=\"form-control\" id=\"idcaracteristica\" name=\"idcaracteristica\">
           
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
        
        $__internal_9ede77b008f3d63b20d582ab6b0fb66f4f7eb868857a5a8e52d48aee6fc2235c->leave($__internal_9ede77b008f3d63b20d582ab6b0fb66f4f7eb868857a5a8e52d48aee6fc2235c_prof);

    }

    public function getTemplateName()
    {
        return "admin/caracteristicas/fm_eliminar_caracteristicas.html.twig";
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
/*       <input type="hidden" class="form-control" id="idcaracteristica" name="idcaracteristica">*/
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
