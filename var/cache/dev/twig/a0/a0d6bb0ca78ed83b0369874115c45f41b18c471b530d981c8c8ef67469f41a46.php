<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_41d3e2678d00ab3f2432c244a6bd0b44b485749ae2a90ed1d84f41ef49ca30af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0f3b1629a45660a6193a397dd8697657ce166f477685bfc671316b004caab23 = $this->env->getExtension("native_profiler");
        $__internal_a0f3b1629a45660a6193a397dd8697657ce166f477685bfc671316b004caab23->enter($__internal_a0f3b1629a45660a6193a397dd8697657ce166f477685bfc671316b004caab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a0f3b1629a45660a6193a397dd8697657ce166f477685bfc671316b004caab23->leave($__internal_a0f3b1629a45660a6193a397dd8697657ce166f477685bfc671316b004caab23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
