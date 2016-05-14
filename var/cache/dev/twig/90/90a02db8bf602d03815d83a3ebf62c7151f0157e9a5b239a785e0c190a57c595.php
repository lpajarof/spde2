<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6d7daf84381cb5f0cbc36280f887761ad1e305d39435fccb33a52e8e97194b5f extends Twig_Template
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
        $__internal_7440c1b9613a3613819bd8657456469fcb8dda8720a5f47d387f0bf7cc865ef5 = $this->env->getExtension("native_profiler");
        $__internal_7440c1b9613a3613819bd8657456469fcb8dda8720a5f47d387f0bf7cc865ef5->enter($__internal_7440c1b9613a3613819bd8657456469fcb8dda8720a5f47d387f0bf7cc865ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7440c1b9613a3613819bd8657456469fcb8dda8720a5f47d387f0bf7cc865ef5->leave($__internal_7440c1b9613a3613819bd8657456469fcb8dda8720a5f47d387f0bf7cc865ef5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
