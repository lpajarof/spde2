<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bae2aa1fdcc42e708b3c5757f98b3ebc867fa54a8cf8f1a2657f2bf049855adf extends Twig_Template
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
        $__internal_79373544ffeae22a8d2679d1e4099b972ebf73f1f497e1d9c9eb86196c78389e = $this->env->getExtension("native_profiler");
        $__internal_79373544ffeae22a8d2679d1e4099b972ebf73f1f497e1d9c9eb86196c78389e->enter($__internal_79373544ffeae22a8d2679d1e4099b972ebf73f1f497e1d9c9eb86196c78389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_79373544ffeae22a8d2679d1e4099b972ebf73f1f497e1d9c9eb86196c78389e->leave($__internal_79373544ffeae22a8d2679d1e4099b972ebf73f1f497e1d9c9eb86196c78389e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
