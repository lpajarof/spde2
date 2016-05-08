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
        $__internal_685e29af9615f57c153ea5279fb993b0b3a0eca75042604171f4c1238c6b2cd8 = $this->env->getExtension("native_profiler");
        $__internal_685e29af9615f57c153ea5279fb993b0b3a0eca75042604171f4c1238c6b2cd8->enter($__internal_685e29af9615f57c153ea5279fb993b0b3a0eca75042604171f4c1238c6b2cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685e29af9615f57c153ea5279fb993b0b3a0eca75042604171f4c1238c6b2cd8->leave($__internal_685e29af9615f57c153ea5279fb993b0b3a0eca75042604171f4c1238c6b2cd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2958e4b5e8ab5be741010979266c8b549b207b5b1564279690f68783a465b56 = $this->env->getExtension("native_profiler");
        $__internal_c2958e4b5e8ab5be741010979266c8b549b207b5b1564279690f68783a465b56->enter($__internal_c2958e4b5e8ab5be741010979266c8b549b207b5b1564279690f68783a465b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c2958e4b5e8ab5be741010979266c8b549b207b5b1564279690f68783a465b56->leave($__internal_c2958e4b5e8ab5be741010979266c8b549b207b5b1564279690f68783a465b56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fc136ede867d5440d0d3405cdd498bd7bd7aeef02f16f7cc417b579d9c942ef = $this->env->getExtension("native_profiler");
        $__internal_9fc136ede867d5440d0d3405cdd498bd7bd7aeef02f16f7cc417b579d9c942ef->enter($__internal_9fc136ede867d5440d0d3405cdd498bd7bd7aeef02f16f7cc417b579d9c942ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9fc136ede867d5440d0d3405cdd498bd7bd7aeef02f16f7cc417b579d9c942ef->leave($__internal_9fc136ede867d5440d0d3405cdd498bd7bd7aeef02f16f7cc417b579d9c942ef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9cd1f47413a1f597dfefac6e8a2f3dcc5399471f0da15abbbad91eece460dc0 = $this->env->getExtension("native_profiler");
        $__internal_c9cd1f47413a1f597dfefac6e8a2f3dcc5399471f0da15abbbad91eece460dc0->enter($__internal_c9cd1f47413a1f597dfefac6e8a2f3dcc5399471f0da15abbbad91eece460dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c9cd1f47413a1f597dfefac6e8a2f3dcc5399471f0da15abbbad91eece460dc0->leave($__internal_c9cd1f47413a1f597dfefac6e8a2f3dcc5399471f0da15abbbad91eece460dc0_prof);

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
