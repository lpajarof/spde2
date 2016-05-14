<?php

/* :admin:index.html.twig */
class __TwigTemplate_b452f7b23dfbe262d66792a779754ad7d052e88e254a85ad51696deac9f2efed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin:index.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fce34987037eb3595fb12626b30f5833ed69d7ba249a7813229f507c153e9f56 = $this->env->getExtension("native_profiler");
        $__internal_fce34987037eb3595fb12626b30f5833ed69d7ba249a7813229f507c153e9f56->enter($__internal_fce34987037eb3595fb12626b30f5833ed69d7ba249a7813229f507c153e9f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce34987037eb3595fb12626b30f5833ed69d7ba249a7813229f507c153e9f56->leave($__internal_fce34987037eb3595fb12626b30f5833ed69d7ba249a7813229f507c153e9f56_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_03d4278021b3f78e3d188596b7a98060288d5092d0d7bf16ebb0e65ab84de048 = $this->env->getExtension("native_profiler");
        $__internal_03d4278021b3f78e3d188596b7a98060288d5092d0d7bf16ebb0e65ab84de048->enter($__internal_03d4278021b3f78e3d188596b7a98060288d5092d0d7bf16ebb0e65ab84de048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    Modulo adminstrador..
";
        
        $__internal_03d4278021b3f78e3d188596b7a98060288d5092d0d7bf16ebb0e65ab84de048->leave($__internal_03d4278021b3f78e3d188596b7a98060288d5092d0d7bf16ebb0e65ab84de048_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     Modulo adminstrador..*/
/* {% endblock %}*/
/* */
/* */
/* */
