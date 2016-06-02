<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_015abda557747be3ed3a878e351373416faff9f0da6f8cf62f833a4c1881104b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d50abee5255709a055a2e6444bd2e81d83ad2ac4e8764ed6390fa5bfac9f445 = $this->env->getExtension("native_profiler");
        $__internal_8d50abee5255709a055a2e6444bd2e81d83ad2ac4e8764ed6390fa5bfac9f445->enter($__internal_8d50abee5255709a055a2e6444bd2e81d83ad2ac4e8764ed6390fa5bfac9f445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d50abee5255709a055a2e6444bd2e81d83ad2ac4e8764ed6390fa5bfac9f445->leave($__internal_8d50abee5255709a055a2e6444bd2e81d83ad2ac4e8764ed6390fa5bfac9f445_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2b5c9f322afdde5b8cee8c707b8a3453b258d947c76d78e5c1ff73ce0e2a6c7 = $this->env->getExtension("native_profiler");
        $__internal_f2b5c9f322afdde5b8cee8c707b8a3453b258d947c76d78e5c1ff73ce0e2a6c7->enter($__internal_f2b5c9f322afdde5b8cee8c707b8a3453b258d947c76d78e5c1ff73ce0e2a6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2b5c9f322afdde5b8cee8c707b8a3453b258d947c76d78e5c1ff73ce0e2a6c7->leave($__internal_f2b5c9f322afdde5b8cee8c707b8a3453b258d947c76d78e5c1ff73ce0e2a6c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_149f17e6b337fbcd3507179dac234761fc2590fca4b304bb1d4bcbd25c08e924 = $this->env->getExtension("native_profiler");
        $__internal_149f17e6b337fbcd3507179dac234761fc2590fca4b304bb1d4bcbd25c08e924->enter($__internal_149f17e6b337fbcd3507179dac234761fc2590fca4b304bb1d4bcbd25c08e924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_149f17e6b337fbcd3507179dac234761fc2590fca4b304bb1d4bcbd25c08e924->leave($__internal_149f17e6b337fbcd3507179dac234761fc2590fca4b304bb1d4bcbd25c08e924_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c94044aeec985d2dc45d2045008e8c2036724bbe2223920bd327e7ced7367ff = $this->env->getExtension("native_profiler");
        $__internal_6c94044aeec985d2dc45d2045008e8c2036724bbe2223920bd327e7ced7367ff->enter($__internal_6c94044aeec985d2dc45d2045008e8c2036724bbe2223920bd327e7ced7367ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6c94044aeec985d2dc45d2045008e8c2036724bbe2223920bd327e7ced7367ff->leave($__internal_6c94044aeec985d2dc45d2045008e8c2036724bbe2223920bd327e7ced7367ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
