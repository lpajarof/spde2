<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_658d49d95453ec1fce41a814c33332db522355fd7d319d753c56f228ac2cb22a extends Twig_Template
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
        $__internal_7b26ad84c68d06b40942efce242612d7daea8b18ebaf0741cd909384e0938426 = $this->env->getExtension("native_profiler");
        $__internal_7b26ad84c68d06b40942efce242612d7daea8b18ebaf0741cd909384e0938426->enter($__internal_7b26ad84c68d06b40942efce242612d7daea8b18ebaf0741cd909384e0938426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7b26ad84c68d06b40942efce242612d7daea8b18ebaf0741cd909384e0938426->leave($__internal_7b26ad84c68d06b40942efce242612d7daea8b18ebaf0741cd909384e0938426_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
