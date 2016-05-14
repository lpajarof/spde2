<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_81cfbd1ef6611c138137e04c42e70c5f0366cb79db982921e2ecef4f62cd155d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a24d2d6c6f76319c14cd40656110f5e388c9aea1ce3f895055d5f9a4e38c55bb = $this->env->getExtension("native_profiler");
        $__internal_a24d2d6c6f76319c14cd40656110f5e388c9aea1ce3f895055d5f9a4e38c55bb->enter($__internal_a24d2d6c6f76319c14cd40656110f5e388c9aea1ce3f895055d5f9a4e38c55bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24d2d6c6f76319c14cd40656110f5e388c9aea1ce3f895055d5f9a4e38c55bb->leave($__internal_a24d2d6c6f76319c14cd40656110f5e388c9aea1ce3f895055d5f9a4e38c55bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d26d3108aaf27756a95f9c31f9827b87e33f55194a9325bfb2d059afbe4e2858 = $this->env->getExtension("native_profiler");
        $__internal_d26d3108aaf27756a95f9c31f9827b87e33f55194a9325bfb2d059afbe4e2858->enter($__internal_d26d3108aaf27756a95f9c31f9827b87e33f55194a9325bfb2d059afbe4e2858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d26d3108aaf27756a95f9c31f9827b87e33f55194a9325bfb2d059afbe4e2858->leave($__internal_d26d3108aaf27756a95f9c31f9827b87e33f55194a9325bfb2d059afbe4e2858_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88a953d6f089df87ece5197d5f9be530022055dd416deef9f23c69bf59d737c3 = $this->env->getExtension("native_profiler");
        $__internal_88a953d6f089df87ece5197d5f9be530022055dd416deef9f23c69bf59d737c3->enter($__internal_88a953d6f089df87ece5197d5f9be530022055dd416deef9f23c69bf59d737c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88a953d6f089df87ece5197d5f9be530022055dd416deef9f23c69bf59d737c3->leave($__internal_88a953d6f089df87ece5197d5f9be530022055dd416deef9f23c69bf59d737c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a8b04ac7aeaaae16a894be58ac439693ec2e4f080e35a6a2cd9f3916cc3d45 = $this->env->getExtension("native_profiler");
        $__internal_70a8b04ac7aeaaae16a894be58ac439693ec2e4f080e35a6a2cd9f3916cc3d45->enter($__internal_70a8b04ac7aeaaae16a894be58ac439693ec2e4f080e35a6a2cd9f3916cc3d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_70a8b04ac7aeaaae16a894be58ac439693ec2e4f080e35a6a2cd9f3916cc3d45->leave($__internal_70a8b04ac7aeaaae16a894be58ac439693ec2e4f080e35a6a2cd9f3916cc3d45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
