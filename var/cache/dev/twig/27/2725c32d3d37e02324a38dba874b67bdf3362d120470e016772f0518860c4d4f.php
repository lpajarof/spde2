<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4017a797bfdcff1a4e766beb7ee8343c18dbc57ec256c5a075a6bdcb31525e64 extends Twig_Template
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
        $__internal_d152f1c196f2753f54f0eb3ee6c64e0bdb8cff6d2f88ad5992e9d6b19209673a = $this->env->getExtension("native_profiler");
        $__internal_d152f1c196f2753f54f0eb3ee6c64e0bdb8cff6d2f88ad5992e9d6b19209673a->enter($__internal_d152f1c196f2753f54f0eb3ee6c64e0bdb8cff6d2f88ad5992e9d6b19209673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d152f1c196f2753f54f0eb3ee6c64e0bdb8cff6d2f88ad5992e9d6b19209673a->leave($__internal_d152f1c196f2753f54f0eb3ee6c64e0bdb8cff6d2f88ad5992e9d6b19209673a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
