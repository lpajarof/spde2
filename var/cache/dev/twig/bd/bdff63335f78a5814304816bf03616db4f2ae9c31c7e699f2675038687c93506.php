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
        $__internal_a7869b0f32b6cf46cdf2e13a148bcf624331c97b7130f332bfeb70313ba734d7 = $this->env->getExtension("native_profiler");
        $__internal_a7869b0f32b6cf46cdf2e13a148bcf624331c97b7130f332bfeb70313ba734d7->enter($__internal_a7869b0f32b6cf46cdf2e13a148bcf624331c97b7130f332bfeb70313ba734d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7869b0f32b6cf46cdf2e13a148bcf624331c97b7130f332bfeb70313ba734d7->leave($__internal_a7869b0f32b6cf46cdf2e13a148bcf624331c97b7130f332bfeb70313ba734d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1be3ce3f1f87d20588e3935e30500f2f099b9cf454b81ce8bbbf771acbfa1c88 = $this->env->getExtension("native_profiler");
        $__internal_1be3ce3f1f87d20588e3935e30500f2f099b9cf454b81ce8bbbf771acbfa1c88->enter($__internal_1be3ce3f1f87d20588e3935e30500f2f099b9cf454b81ce8bbbf771acbfa1c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1be3ce3f1f87d20588e3935e30500f2f099b9cf454b81ce8bbbf771acbfa1c88->leave($__internal_1be3ce3f1f87d20588e3935e30500f2f099b9cf454b81ce8bbbf771acbfa1c88_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c04af9d201c7bb681fbb0f1c18d4805db1bee1fa2d242316f2d0a39208bbb0f9 = $this->env->getExtension("native_profiler");
        $__internal_c04af9d201c7bb681fbb0f1c18d4805db1bee1fa2d242316f2d0a39208bbb0f9->enter($__internal_c04af9d201c7bb681fbb0f1c18d4805db1bee1fa2d242316f2d0a39208bbb0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c04af9d201c7bb681fbb0f1c18d4805db1bee1fa2d242316f2d0a39208bbb0f9->leave($__internal_c04af9d201c7bb681fbb0f1c18d4805db1bee1fa2d242316f2d0a39208bbb0f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d46d9a21c9330ae92d27614bfa0ff1ee62955d802ae8ef08707e4a1f3c4e828 = $this->env->getExtension("native_profiler");
        $__internal_7d46d9a21c9330ae92d27614bfa0ff1ee62955d802ae8ef08707e4a1f3c4e828->enter($__internal_7d46d9a21c9330ae92d27614bfa0ff1ee62955d802ae8ef08707e4a1f3c4e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7d46d9a21c9330ae92d27614bfa0ff1ee62955d802ae8ef08707e4a1f3c4e828->leave($__internal_7d46d9a21c9330ae92d27614bfa0ff1ee62955d802ae8ef08707e4a1f3c4e828_prof);

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
