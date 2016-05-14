<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_418ee94baaf35054ae66d943603b6e55a8517a58eb525475cf4d28fe313388a8 extends Twig_Template
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
        $__internal_21fe92de1b3eaba4b06f8d3253ea621570fbf0b1eab3e871e152fef0b351edcb = $this->env->getExtension("native_profiler");
        $__internal_21fe92de1b3eaba4b06f8d3253ea621570fbf0b1eab3e871e152fef0b351edcb->enter($__internal_21fe92de1b3eaba4b06f8d3253ea621570fbf0b1eab3e871e152fef0b351edcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_21fe92de1b3eaba4b06f8d3253ea621570fbf0b1eab3e871e152fef0b351edcb->leave($__internal_21fe92de1b3eaba4b06f8d3253ea621570fbf0b1eab3e871e152fef0b351edcb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
