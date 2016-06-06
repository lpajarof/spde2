<?php

/* admin/seguimiento/fm_eliminar_seguimiento.html.twig */
class __TwigTemplate_8f2c847dddaf05d2a2cbcc6d7e2bb33cc3de3825ce861a6e8a45e2c49493b70e extends Twig_Template
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
        $__internal_e3d61aa0d5262be8d12a4bd3b9d54cf8e7a28c7ffe6b0f9b4460156e38f3dfc1 = $this->env->getExtension("native_profiler");
        $__internal_e3d61aa0d5262be8d12a4bd3b9d54cf8e7a28c7ffe6b0f9b4460156e38f3dfc1->enter($__internal_e3d61aa0d5262be8d12a4bd3b9d54cf8e7a28c7ffe6b0f9b4460156e38f3dfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/seguimiento/fm_eliminar_seguimiento.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_eliminar\"></div>
    <form id=\"frm_elimina_seguimiento\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
             <h2 class=\"text-center text-muted\">Estas seguro?</h2>
\t  <p class=\"lead text-muted text-center\" style=\"display: block;margin:10px\">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
        <input type=\"hidden\" class=\"form-control\" id=\"idseguimientoestudiante\" name=\"idseguimientoestudiante\">
           
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
        
        $__internal_e3d61aa0d5262be8d12a4bd3b9d54cf8e7a28c7ffe6b0f9b4460156e38f3dfc1->leave($__internal_e3d61aa0d5262be8d12a4bd3b9d54cf8e7a28c7ffe6b0f9b4460156e38f3dfc1_prof);

    }

    public function getTemplateName()
    {
        return "admin/seguimiento/fm_eliminar_seguimiento.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/*  <div class="modal-body">*/
/* <div id="respuesta_eliminar"></div>*/
/*     <form id="frm_elimina_seguimiento" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*              <h2 class="text-center text-muted">Estas seguro?</h2>*/
/* 	  <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>*/
/*         <input type="hidden" class="form-control" id="idseguimientoestudiante" name="idseguimientoestudiante">*/
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
