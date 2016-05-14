<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e53c763ae9922431b8d79b7c4302236aa5c7fe12a73238e0ae6672c5b8d95e97 extends Twig_Template
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
        $__internal_72cb7cfd377e547163ba1c73e0bbcadf11834c7b36ba0b1a79cb81567ffc18c9 = $this->env->getExtension("native_profiler");
        $__internal_72cb7cfd377e547163ba1c73e0bbcadf11834c7b36ba0b1a79cb81567ffc18c9->enter($__internal_72cb7cfd377e547163ba1c73e0bbcadf11834c7b36ba0b1a79cb81567ffc18c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_72cb7cfd377e547163ba1c73e0bbcadf11834c7b36ba0b1a79cb81567ffc18c9->leave($__internal_72cb7cfd377e547163ba1c73e0bbcadf11834c7b36ba0b1a79cb81567ffc18c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
