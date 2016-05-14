<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a4f9e853aebd0398986e7f7575d40c828789e6dc8f7ebf2ff3c994123f9196da extends Twig_Template
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
        $__internal_934b726af1e8bf3a26a4c43ddb36dabb937829a66967bfd0277551883be4d4bd = $this->env->getExtension("native_profiler");
        $__internal_934b726af1e8bf3a26a4c43ddb36dabb937829a66967bfd0277551883be4d4bd->enter($__internal_934b726af1e8bf3a26a4c43ddb36dabb937829a66967bfd0277551883be4d4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_934b726af1e8bf3a26a4c43ddb36dabb937829a66967bfd0277551883be4d4bd->leave($__internal_934b726af1e8bf3a26a4c43ddb36dabb937829a66967bfd0277551883be4d4bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
