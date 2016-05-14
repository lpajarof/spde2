<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_60f1c147c414f184508099a98358237409c6382f9d896fa7d31b2213622755cf extends Twig_Template
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
        $__internal_5885c5eedfe9fed8704fba53497b3bd67f144c820830686a5dceb78bf8eb5d07 = $this->env->getExtension("native_profiler");
        $__internal_5885c5eedfe9fed8704fba53497b3bd67f144c820830686a5dceb78bf8eb5d07->enter($__internal_5885c5eedfe9fed8704fba53497b3bd67f144c820830686a5dceb78bf8eb5d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5885c5eedfe9fed8704fba53497b3bd67f144c820830686a5dceb78bf8eb5d07->leave($__internal_5885c5eedfe9fed8704fba53497b3bd67f144c820830686a5dceb78bf8eb5d07_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c13d9035a5d5e6711c9093fdcd6f61140591da1e5918fdcc43d35cf7201be46 = $this->env->getExtension("native_profiler");
        $__internal_2c13d9035a5d5e6711c9093fdcd6f61140591da1e5918fdcc43d35cf7201be46->enter($__internal_2c13d9035a5d5e6711c9093fdcd6f61140591da1e5918fdcc43d35cf7201be46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2c13d9035a5d5e6711c9093fdcd6f61140591da1e5918fdcc43d35cf7201be46->leave($__internal_2c13d9035a5d5e6711c9093fdcd6f61140591da1e5918fdcc43d35cf7201be46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
