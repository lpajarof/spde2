<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1907c615921be145357e0161db60b47f4311dd72b4e49ffac42c8ecb05c27cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beefacb4a3808ee02cca8c61b4625d51ceed9939b774bdb9fc926c2ab5b2776d = $this->env->getExtension("native_profiler");
        $__internal_beefacb4a3808ee02cca8c61b4625d51ceed9939b774bdb9fc926c2ab5b2776d->enter($__internal_beefacb4a3808ee02cca8c61b4625d51ceed9939b774bdb9fc926c2ab5b2776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_beefacb4a3808ee02cca8c61b4625d51ceed9939b774bdb9fc926c2ab5b2776d->leave($__internal_beefacb4a3808ee02cca8c61b4625d51ceed9939b774bdb9fc926c2ab5b2776d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e191ebfd3f7f906705fe2b945da53f88c50ca43c9ca0cee6c66c1aeab46cec0 = $this->env->getExtension("native_profiler");
        $__internal_6e191ebfd3f7f906705fe2b945da53f88c50ca43c9ca0cee6c66c1aeab46cec0->enter($__internal_6e191ebfd3f7f906705fe2b945da53f88c50ca43c9ca0cee6c66c1aeab46cec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e191ebfd3f7f906705fe2b945da53f88c50ca43c9ca0cee6c66c1aeab46cec0->leave($__internal_6e191ebfd3f7f906705fe2b945da53f88c50ca43c9ca0cee6c66c1aeab46cec0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
