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
        $__internal_716485539cb63f0beb2caf9a5caf358ace5bb951ba2921534551ca5e7e272676 = $this->env->getExtension("native_profiler");
        $__internal_716485539cb63f0beb2caf9a5caf358ace5bb951ba2921534551ca5e7e272676->enter($__internal_716485539cb63f0beb2caf9a5caf358ace5bb951ba2921534551ca5e7e272676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716485539cb63f0beb2caf9a5caf358ace5bb951ba2921534551ca5e7e272676->leave($__internal_716485539cb63f0beb2caf9a5caf358ace5bb951ba2921534551ca5e7e272676_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fb34bd44be3ad9e664793a9f4eb0671981c11800c8f04a34b9ce48fcc61bb6f = $this->env->getExtension("native_profiler");
        $__internal_1fb34bd44be3ad9e664793a9f4eb0671981c11800c8f04a34b9ce48fcc61bb6f->enter($__internal_1fb34bd44be3ad9e664793a9f4eb0671981c11800c8f04a34b9ce48fcc61bb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1fb34bd44be3ad9e664793a9f4eb0671981c11800c8f04a34b9ce48fcc61bb6f->leave($__internal_1fb34bd44be3ad9e664793a9f4eb0671981c11800c8f04a34b9ce48fcc61bb6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_882cfe73fcf4e8c9483ff3896a7cef3b5df2acfc6a7d43a4fa082f62718e6045 = $this->env->getExtension("native_profiler");
        $__internal_882cfe73fcf4e8c9483ff3896a7cef3b5df2acfc6a7d43a4fa082f62718e6045->enter($__internal_882cfe73fcf4e8c9483ff3896a7cef3b5df2acfc6a7d43a4fa082f62718e6045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_882cfe73fcf4e8c9483ff3896a7cef3b5df2acfc6a7d43a4fa082f62718e6045->leave($__internal_882cfe73fcf4e8c9483ff3896a7cef3b5df2acfc6a7d43a4fa082f62718e6045_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9644c86ada712df934e65f6b414293dbc14ae66ff995ef3b37227674d0f8168 = $this->env->getExtension("native_profiler");
        $__internal_c9644c86ada712df934e65f6b414293dbc14ae66ff995ef3b37227674d0f8168->enter($__internal_c9644c86ada712df934e65f6b414293dbc14ae66ff995ef3b37227674d0f8168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c9644c86ada712df934e65f6b414293dbc14ae66ff995ef3b37227674d0f8168->leave($__internal_c9644c86ada712df934e65f6b414293dbc14ae66ff995ef3b37227674d0f8168_prof);

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
