<?php

/* base.html.twig */
class __TwigTemplate_f5d7f03ead227beef6d0bddd9f491cc976f8cdc9e9265d4fe5ff8ef7873a4a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79fc5403921e5a50df2eeffb200e6a61c90eb7e6d379c6d5ed93f1b69fcfaa98 = $this->env->getExtension("native_profiler");
        $__internal_79fc5403921e5a50df2eeffb200e6a61c90eb7e6d379c6d5ed93f1b69fcfaa98->enter($__internal_79fc5403921e5a50df2eeffb200e6a61c90eb7e6d379c6d5ed93f1b69fcfaa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_79fc5403921e5a50df2eeffb200e6a61c90eb7e6d379c6d5ed93f1b69fcfaa98->leave($__internal_79fc5403921e5a50df2eeffb200e6a61c90eb7e6d379c6d5ed93f1b69fcfaa98_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae47e003e209a366c0bed711d3b3e3558009380fb8f4b1f06ffee47cf8ddfadc = $this->env->getExtension("native_profiler");
        $__internal_ae47e003e209a366c0bed711d3b3e3558009380fb8f4b1f06ffee47cf8ddfadc->enter($__internal_ae47e003e209a366c0bed711d3b3e3558009380fb8f4b1f06ffee47cf8ddfadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae47e003e209a366c0bed711d3b3e3558009380fb8f4b1f06ffee47cf8ddfadc->leave($__internal_ae47e003e209a366c0bed711d3b3e3558009380fb8f4b1f06ffee47cf8ddfadc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90bae768d0e3d76debce5fdff076adfbf40c43220739809ff5a6b9b2fb0e8871 = $this->env->getExtension("native_profiler");
        $__internal_90bae768d0e3d76debce5fdff076adfbf40c43220739809ff5a6b9b2fb0e8871->enter($__internal_90bae768d0e3d76debce5fdff076adfbf40c43220739809ff5a6b9b2fb0e8871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_90bae768d0e3d76debce5fdff076adfbf40c43220739809ff5a6b9b2fb0e8871->leave($__internal_90bae768d0e3d76debce5fdff076adfbf40c43220739809ff5a6b9b2fb0e8871_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_624ff78566d3e62bc2251abb63df65b60416c62b4578210f4c8d72db6d23ef34 = $this->env->getExtension("native_profiler");
        $__internal_624ff78566d3e62bc2251abb63df65b60416c62b4578210f4c8d72db6d23ef34->enter($__internal_624ff78566d3e62bc2251abb63df65b60416c62b4578210f4c8d72db6d23ef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_624ff78566d3e62bc2251abb63df65b60416c62b4578210f4c8d72db6d23ef34->leave($__internal_624ff78566d3e62bc2251abb63df65b60416c62b4578210f4c8d72db6d23ef34_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66db46b12f24dc92fbe3bb4a970d4478c64e75cd39450dc2b75556c873ddaa10 = $this->env->getExtension("native_profiler");
        $__internal_66db46b12f24dc92fbe3bb4a970d4478c64e75cd39450dc2b75556c873ddaa10->enter($__internal_66db46b12f24dc92fbe3bb4a970d4478c64e75cd39450dc2b75556c873ddaa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_66db46b12f24dc92fbe3bb4a970d4478c64e75cd39450dc2b75556c873ddaa10->leave($__internal_66db46b12f24dc92fbe3bb4a970d4478c64e75cd39450dc2b75556c873ddaa10_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
