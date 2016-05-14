<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6133d07d4f5c1ed6fee69a9f6918c9349440e3626026680f9729f62da43a514a extends Twig_Template
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
        $__internal_13681410f65f799b6eb0b18d38a6cd43dfe7069ec029397b4b5b59caf78fa5f9 = $this->env->getExtension("native_profiler");
        $__internal_13681410f65f799b6eb0b18d38a6cd43dfe7069ec029397b4b5b59caf78fa5f9->enter($__internal_13681410f65f799b6eb0b18d38a6cd43dfe7069ec029397b4b5b59caf78fa5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_13681410f65f799b6eb0b18d38a6cd43dfe7069ec029397b4b5b59caf78fa5f9->leave($__internal_13681410f65f799b6eb0b18d38a6cd43dfe7069ec029397b4b5b59caf78fa5f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
