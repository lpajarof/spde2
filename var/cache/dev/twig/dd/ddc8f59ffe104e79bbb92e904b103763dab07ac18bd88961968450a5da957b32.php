<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_33de31bc0c1f5e99d03b2af64da78aa6523231f3bab8d2e8fd8ca66d5c984993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e105b394d593a2268edd3bccab4f863ebab12c819e919d11a690bfee296bc2f6 = $this->env->getExtension("native_profiler");
        $__internal_e105b394d593a2268edd3bccab4f863ebab12c819e919d11a690bfee296bc2f6->enter($__internal_e105b394d593a2268edd3bccab4f863ebab12c819e919d11a690bfee296bc2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e105b394d593a2268edd3bccab4f863ebab12c819e919d11a690bfee296bc2f6->leave($__internal_e105b394d593a2268edd3bccab4f863ebab12c819e919d11a690bfee296bc2f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75411abe66f075d2562ddd048672e1fba6852afb024ee4110a76a10465f70a44 = $this->env->getExtension("native_profiler");
        $__internal_75411abe66f075d2562ddd048672e1fba6852afb024ee4110a76a10465f70a44->enter($__internal_75411abe66f075d2562ddd048672e1fba6852afb024ee4110a76a10465f70a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75411abe66f075d2562ddd048672e1fba6852afb024ee4110a76a10465f70a44->leave($__internal_75411abe66f075d2562ddd048672e1fba6852afb024ee4110a76a10465f70a44_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae46e337d11b9f6ff6102407e9f258ea315130480b33a87b5ad53051a3ea47ec = $this->env->getExtension("native_profiler");
        $__internal_ae46e337d11b9f6ff6102407e9f258ea315130480b33a87b5ad53051a3ea47ec->enter($__internal_ae46e337d11b9f6ff6102407e9f258ea315130480b33a87b5ad53051a3ea47ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ae46e337d11b9f6ff6102407e9f258ea315130480b33a87b5ad53051a3ea47ec->leave($__internal_ae46e337d11b9f6ff6102407e9f258ea315130480b33a87b5ad53051a3ea47ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
