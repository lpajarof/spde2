<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8e3b1e2f30018ff42f2e00ed0bca62822b55c73c38d768e9ac8587aa83b0b9f4 extends Twig_Template
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
        $__internal_11aca98d80cd1e43419aeb8e6d07c16f7b20aeea842d2973d8b60a7f4543daa5 = $this->env->getExtension("native_profiler");
        $__internal_11aca98d80cd1e43419aeb8e6d07c16f7b20aeea842d2973d8b60a7f4543daa5->enter($__internal_11aca98d80cd1e43419aeb8e6d07c16f7b20aeea842d2973d8b60a7f4543daa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_11aca98d80cd1e43419aeb8e6d07c16f7b20aeea842d2973d8b60a7f4543daa5->leave($__internal_11aca98d80cd1e43419aeb8e6d07c16f7b20aeea842d2973d8b60a7f4543daa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
