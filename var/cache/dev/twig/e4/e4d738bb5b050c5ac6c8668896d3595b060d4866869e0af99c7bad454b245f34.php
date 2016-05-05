<?php

/* default/new.html.twig */
class __TwigTemplate_ca4fdf33fef36b1637ec2babaf399e2ffbc19c03a2ad8a8bb50051aa99519bd8 extends Twig_Template
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
        $__internal_b419c4834f8542772a9ec97c522c7f2fb5bd395e0ab3728d3b3b03693f9faf5d = $this->env->getExtension("native_profiler");
        $__internal_b419c4834f8542772a9ec97c522c7f2fb5bd395e0ab3728d3b3b03693f9faf5d->enter($__internal_b419c4834f8542772a9ec97c522c7f2fb5bd395e0ab3728d3b3b03693f9faf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_b419c4834f8542772a9ec97c522c7f2fb5bd395e0ab3728d3b3b03693f9faf5d->leave($__internal_b419c4834f8542772a9ec97c522c7f2fb5bd395e0ab3728d3b3b03693f9faf5d_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,);
    }
}
/* {# app/Resources/views/default/new.html.twig #}*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* */
