<?php

/* admin/usuarios/fm_actualizar_usuario.html.twig */
class __TwigTemplate_2343d1926d6927eab529d0922de1778619b2b868d8544e3e4a1c8c26af9404b4 extends Twig_Template
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
        $__internal_e81e0ca7138e6eae26fc16528ad186e5eb889f3785262da6d0c167d17d277264 = $this->env->getExtension("native_profiler");
        $__internal_e81e0ca7138e6eae26fc16528ad186e5eb889f3785262da6d0c167d17d277264->enter($__internal_e81e0ca7138e6eae26fc16528ad186e5eb889f3785262da6d0c167d17d277264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/usuarios/fm_actualizar_usuario.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_actualizar\"></div>
    <form id=\"frm_actualizar_usuario\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"nombres\">Nombres<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"nombres\" name=\"nombres\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                <input type=\"hidden\" class=\"form-control\" id=\"iduser\" name=\"iduser\">
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
                        <option value=\"ROLE_ADMIN\">ROLE_ADMIN</option>                    
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
        
        $__internal_e81e0ca7138e6eae26fc16528ad186e5eb889f3785262da6d0c167d17d277264->leave($__internal_e81e0ca7138e6eae26fc16528ad186e5eb889f3785262da6d0c167d17d277264_prof);

    }

    public function getTemplateName()
    {
        return "admin/usuarios/fm_actualizar_usuario.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_actualizar"></div>*/
/*     <form id="frm_actualizar_usuario" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="nombres" name="nombres" required="required" class="form-control col-md-7 col-xs-12">*/
/*                 <input type="hidden" class="form-control" id="iduser" name="iduser">*/
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
/*                         <option value="ROLE_ADMIN">ROLE_ADMIN</option>                    */
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
