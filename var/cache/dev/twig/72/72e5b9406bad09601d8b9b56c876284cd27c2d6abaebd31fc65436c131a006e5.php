<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ad1378de31c3655297d6af3a82a12d64ecf5148421706fe099393ed36a716778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_438f4ac61b1a42553c1665deca070ec4fa3554fdcbe4fe113c27301ac4e1d665 = $this->env->getExtension("native_profiler");
        $__internal_438f4ac61b1a42553c1665deca070ec4fa3554fdcbe4fe113c27301ac4e1d665->enter($__internal_438f4ac61b1a42553c1665deca070ec4fa3554fdcbe4fe113c27301ac4e1d665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_438f4ac61b1a42553c1665deca070ec4fa3554fdcbe4fe113c27301ac4e1d665->leave($__internal_438f4ac61b1a42553c1665deca070ec4fa3554fdcbe4fe113c27301ac4e1d665_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84e3deb532d19252a649dca127753fe24b904959802ee38b7eb2e973d57d6ae0 = $this->env->getExtension("native_profiler");
        $__internal_84e3deb532d19252a649dca127753fe24b904959802ee38b7eb2e973d57d6ae0->enter($__internal_84e3deb532d19252a649dca127753fe24b904959802ee38b7eb2e973d57d6ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_84e3deb532d19252a649dca127753fe24b904959802ee38b7eb2e973d57d6ae0->leave($__internal_84e3deb532d19252a649dca127753fe24b904959802ee38b7eb2e973d57d6ae0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c324819399a796c0d249aa359758fb761ded6007f623f52c83fed9d5beaab31 = $this->env->getExtension("native_profiler");
        $__internal_8c324819399a796c0d249aa359758fb761ded6007f623f52c83fed9d5beaab31->enter($__internal_8c324819399a796c0d249aa359758fb761ded6007f623f52c83fed9d5beaab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c324819399a796c0d249aa359758fb761ded6007f623f52c83fed9d5beaab31->leave($__internal_8c324819399a796c0d249aa359758fb761ded6007f623f52c83fed9d5beaab31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8075ff8c6f561e07c5cd35ca6de25a1de567fd492a3cf41373d19ae0073453f = $this->env->getExtension("native_profiler");
        $__internal_c8075ff8c6f561e07c5cd35ca6de25a1de567fd492a3cf41373d19ae0073453f->enter($__internal_c8075ff8c6f561e07c5cd35ca6de25a1de567fd492a3cf41373d19ae0073453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8075ff8c6f561e07c5cd35ca6de25a1de567fd492a3cf41373d19ae0073453f->leave($__internal_c8075ff8c6f561e07c5cd35ca6de25a1de567fd492a3cf41373d19ae0073453f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
