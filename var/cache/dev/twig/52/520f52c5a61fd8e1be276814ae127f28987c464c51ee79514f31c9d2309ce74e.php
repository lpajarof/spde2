<?php

/* admin/usuarios/fm_agregar_usuario.html.twig */
class __TwigTemplate_322b09b6f7dafd73a7cb6ddd22f7cebd144a0ef3cf78e83f17fa63d77d11c579 extends Twig_Template
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
        $__internal_1903d99edf0de857ab2ce4f6fc83c2b8fa0f58108e2086859e2787b6d5735417 = $this->env->getExtension("native_profiler");
        $__internal_1903d99edf0de857ab2ce4f6fc83c2b8fa0f58108e2086859e2787b6d5735417->enter($__internal_1903d99edf0de857ab2ce4f6fc83c2b8fa0f58108e2086859e2787b6d5735417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/usuarios/fm_agregar_usuario.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_agregar\"></div>
    <form id=\"frm_agregar_usuario\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"nombres\">Nombres<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"nombres\" name=\"nombres\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"apellidos\">Apellidos<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"apellidos\" name=\"apellidos\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"identificacion\">Identificaci&oacute;n<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"identificacion\" name=\"identificacion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"email\">email <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"email\" id=\"email\" name=\"email\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"username\">Username <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"password\">Contrase&ntilde;a <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"password\" id=\"password\" name=\"password\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
        
        <div class=\"form-group\">          
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"rol\">Rol<span class=\"required\">*</span>
            </label>    
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"rol\" name=\"rol\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>                    
                        <option value=\"ROLE_USER\">ROLE_ADMIN</option>                    
                        <option value=\"ROLE_USER\">ROLE_USER</option>                    
                </select>
            </div>                    
        </div>
        
        <div class=\"form-group\">          
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"acctivo\">Ativo<span class=\"required\">*</span>
            </label>    
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"isactive\" name=\"isactive\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>                    
                        <option value=\"1\">Activo</option>                    
                        <option value=\"0\">Inactivo</option>                    
                </select>
            </div>                    
        </div>
        
        <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
                <button type=\"submit\" class=\"btn btn-success\">Agregar</button>
            </div>
        </div>                                      
    </form>
</div> 
";
        
        $__internal_1903d99edf0de857ab2ce4f6fc83c2b8fa0f58108e2086859e2787b6d5735417->leave($__internal_1903d99edf0de857ab2ce4f6fc83c2b8fa0f58108e2086859e2787b6d5735417_prof);

    }

    public function getTemplateName()
    {
        return "admin/usuarios/fm_agregar_usuario.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_agregar"></div>*/
/*     <form id="frm_agregar_usuario" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="nombres" name="nombres" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="apellidos" name="apellidos" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="identificacion">Identificaci&oacute;n<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="identificacion" name="identificacion" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">email <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Contrase&ntilde;a <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">          */
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rol">Rol<span class="required">*</span>*/
/*             </label>    */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="rol" name="rol" class="form-control" required>*/
/*                     <option value="">Seleccione</option>                    */
/*                         <option value="ROLE_USER">ROLE_ADMIN</option>                    */
/*                         <option value="ROLE_USER">ROLE_USER</option>                    */
/*                 </select>*/
/*             </div>                    */
/*         </div>*/
/*         */
/*         <div class="form-group">          */
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="acctivo">Ativo<span class="required">*</span>*/
/*             </label>    */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="isactive" name="isactive" class="form-control" required>*/
/*                     <option value="">Seleccione</option>                    */
/*                         <option value="1">Activo</option>                    */
/*                         <option value="0">Inactivo</option>                    */
/*                 </select>*/
/*             </div>                    */
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>*/
/*                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div> */
/* */
