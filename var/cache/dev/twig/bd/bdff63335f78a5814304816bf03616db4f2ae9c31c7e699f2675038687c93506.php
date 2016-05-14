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
        $__internal_552740c143715c0d4b1b2789a200d8a3e546cf9fd2275c8662236badb5ece9b1 = $this->env->getExtension("native_profiler");
        $__internal_552740c143715c0d4b1b2789a200d8a3e546cf9fd2275c8662236badb5ece9b1->enter($__internal_552740c143715c0d4b1b2789a200d8a3e546cf9fd2275c8662236badb5ece9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552740c143715c0d4b1b2789a200d8a3e546cf9fd2275c8662236badb5ece9b1->leave($__internal_552740c143715c0d4b1b2789a200d8a3e546cf9fd2275c8662236badb5ece9b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18afd02af92a7c0a494dba3049bce8cb5c14612a9002bef3223c2fcbc8bed5e7 = $this->env->getExtension("native_profiler");
        $__internal_18afd02af92a7c0a494dba3049bce8cb5c14612a9002bef3223c2fcbc8bed5e7->enter($__internal_18afd02af92a7c0a494dba3049bce8cb5c14612a9002bef3223c2fcbc8bed5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_18afd02af92a7c0a494dba3049bce8cb5c14612a9002bef3223c2fcbc8bed5e7->leave($__internal_18afd02af92a7c0a494dba3049bce8cb5c14612a9002bef3223c2fcbc8bed5e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bf9907eb91726ae665a0d110e78437951539e47d7b11bb8635557937a5f7fe7 = $this->env->getExtension("native_profiler");
        $__internal_0bf9907eb91726ae665a0d110e78437951539e47d7b11bb8635557937a5f7fe7->enter($__internal_0bf9907eb91726ae665a0d110e78437951539e47d7b11bb8635557937a5f7fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0bf9907eb91726ae665a0d110e78437951539e47d7b11bb8635557937a5f7fe7->leave($__internal_0bf9907eb91726ae665a0d110e78437951539e47d7b11bb8635557937a5f7fe7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d6c1692a058cefb391c0717deb98dd7e8aec9ff9824a42670aa833ed6c7adee = $this->env->getExtension("native_profiler");
        $__internal_6d6c1692a058cefb391c0717deb98dd7e8aec9ff9824a42670aa833ed6c7adee->enter($__internal_6d6c1692a058cefb391c0717deb98dd7e8aec9ff9824a42670aa833ed6c7adee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6d6c1692a058cefb391c0717deb98dd7e8aec9ff9824a42670aa833ed6c7adee->leave($__internal_6d6c1692a058cefb391c0717deb98dd7e8aec9ff9824a42670aa833ed6c7adee_prof);

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
