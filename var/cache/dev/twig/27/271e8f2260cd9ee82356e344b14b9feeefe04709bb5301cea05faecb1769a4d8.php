<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_641ebafd93bc07af0adb0da4adee4572955b30d1988f3edd1a8f4adfa0147d0e extends Twig_Template
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
        $__internal_b62640c0de61a2bd9b8f90f4d6712d84358edae2c91fd7925e4e7e25c7818d88 = $this->env->getExtension("native_profiler");
        $__internal_b62640c0de61a2bd9b8f90f4d6712d84358edae2c91fd7925e4e7e25c7818d88->enter($__internal_b62640c0de61a2bd9b8f90f4d6712d84358edae2c91fd7925e4e7e25c7818d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b62640c0de61a2bd9b8f90f4d6712d84358edae2c91fd7925e4e7e25c7818d88->leave($__internal_b62640c0de61a2bd9b8f90f4d6712d84358edae2c91fd7925e4e7e25c7818d88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
