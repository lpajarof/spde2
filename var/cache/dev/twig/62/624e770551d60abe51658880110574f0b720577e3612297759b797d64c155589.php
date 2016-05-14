<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0d41e85a86e4a197a5535219023222b1585266f695f2a2c4137fc38594c18547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_5752195768da79e9db4309feb9d95452341d09c58315c84acbb1ec31d8d9e6b2 = $this->env->getExtension("native_profiler");
        $__internal_5752195768da79e9db4309feb9d95452341d09c58315c84acbb1ec31d8d9e6b2->enter($__internal_5752195768da79e9db4309feb9d95452341d09c58315c84acbb1ec31d8d9e6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5752195768da79e9db4309feb9d95452341d09c58315c84acbb1ec31d8d9e6b2->leave($__internal_5752195768da79e9db4309feb9d95452341d09c58315c84acbb1ec31d8d9e6b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3214e3f0bc0cf52be8ed7a57b250513ecfb2067d489e6dd903c112f9331cfeb6 = $this->env->getExtension("native_profiler");
        $__internal_3214e3f0bc0cf52be8ed7a57b250513ecfb2067d489e6dd903c112f9331cfeb6->enter($__internal_3214e3f0bc0cf52be8ed7a57b250513ecfb2067d489e6dd903c112f9331cfeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3214e3f0bc0cf52be8ed7a57b250513ecfb2067d489e6dd903c112f9331cfeb6->leave($__internal_3214e3f0bc0cf52be8ed7a57b250513ecfb2067d489e6dd903c112f9331cfeb6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77d2215d77e86f1837525a3433d11479294f1aeb4d18ba2768f293d67a3819a8 = $this->env->getExtension("native_profiler");
        $__internal_77d2215d77e86f1837525a3433d11479294f1aeb4d18ba2768f293d67a3819a8->enter($__internal_77d2215d77e86f1837525a3433d11479294f1aeb4d18ba2768f293d67a3819a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77d2215d77e86f1837525a3433d11479294f1aeb4d18ba2768f293d67a3819a8->leave($__internal_77d2215d77e86f1837525a3433d11479294f1aeb4d18ba2768f293d67a3819a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
