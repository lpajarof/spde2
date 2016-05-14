<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7d476406bda15bd543425d0ad7cb56eed23daf5acdd86d24bdd285989740545a extends Twig_Template
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
        $__internal_22b0ca9d520401b87917fe0f0f2c6248561ca33e5eda8476481d5d263e0f105e = $this->env->getExtension("native_profiler");
        $__internal_22b0ca9d520401b87917fe0f0f2c6248561ca33e5eda8476481d5d263e0f105e->enter($__internal_22b0ca9d520401b87917fe0f0f2c6248561ca33e5eda8476481d5d263e0f105e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_22b0ca9d520401b87917fe0f0f2c6248561ca33e5eda8476481d5d263e0f105e->leave($__internal_22b0ca9d520401b87917fe0f0f2c6248561ca33e5eda8476481d5d263e0f105e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
