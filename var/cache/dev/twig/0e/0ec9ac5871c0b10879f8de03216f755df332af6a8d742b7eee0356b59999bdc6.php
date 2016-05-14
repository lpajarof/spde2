<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e690ff0b4fb3e4551999aad242712ead0cb29a5a4a2ae22152fcca29e9bce98e extends Twig_Template
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
        $__internal_063a9cf891fa347ea5761916ef66c21118658627da11f8e4bc413aeaa2d811ca = $this->env->getExtension("native_profiler");
        $__internal_063a9cf891fa347ea5761916ef66c21118658627da11f8e4bc413aeaa2d811ca->enter($__internal_063a9cf891fa347ea5761916ef66c21118658627da11f8e4bc413aeaa2d811ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_063a9cf891fa347ea5761916ef66c21118658627da11f8e4bc413aeaa2d811ca->leave($__internal_063a9cf891fa347ea5761916ef66c21118658627da11f8e4bc413aeaa2d811ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
