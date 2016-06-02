<?php

/* admin/entrenamiento/fm_eliminar_entrenamiento.html.twig */
class __TwigTemplate_46368b3c7b7c1969b493110d6df56c612e9011d0478be78f9cb7feef8f7c6746 extends Twig_Template
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
        $__internal_d7cd673b03f8da504edb50b01bd4a72bf19de3e02a69f01eddde9c7d70f266d7 = $this->env->getExtension("native_profiler");
        $__internal_d7cd673b03f8da504edb50b01bd4a72bf19de3e02a69f01eddde9c7d70f266d7->enter($__internal_d7cd673b03f8da504edb50b01bd4a72bf19de3e02a69f01eddde9c7d70f266d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/entrenamiento/fm_eliminar_entrenamiento.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_eliminar\"></div>
    <form id=\"frm_elimina_entrenamiento\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
             <h2 class=\"text-center text-muted\">Estas seguro?</h2>
\t  <p class=\"lead text-muted text-center\" style=\"display: block;margin:10px\">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
      <input type=\"hidden\" class=\"form-control\" id=\"identrenamiento\" name=\"identrenamiento\">
           
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
        
        $__internal_d7cd673b03f8da504edb50b01bd4a72bf19de3e02a69f01eddde9c7d70f266d7->leave($__internal_d7cd673b03f8da504edb50b01bd4a72bf19de3e02a69f01eddde9c7d70f266d7_prof);

    }

    public function getTemplateName()
    {
        return "admin/entrenamiento/fm_eliminar_entrenamiento.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/*  <div class="modal-body">*/
/* <div id="respuesta_eliminar"></div>*/
/*     <form id="frm_elimina_entrenamiento" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*              <h2 class="text-center text-muted">Estas seguro?</h2>*/
/* 	  <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>*/
/*       <input type="hidden" class="form-control" id="identrenamiento" name="identrenamiento">*/
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
