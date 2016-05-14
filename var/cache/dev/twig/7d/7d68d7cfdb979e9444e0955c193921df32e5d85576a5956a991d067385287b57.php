<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e47908c3fd178164b28dd9a977bce90c9139ab5a5c7cab167d1248e885f5c840 extends Twig_Template
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
        $__internal_e6a3cd54a328718cca9d25a111ab8245e60a4612849375b5e31689dd648befbc = $this->env->getExtension("native_profiler");
        $__internal_e6a3cd54a328718cca9d25a111ab8245e60a4612849375b5e31689dd648befbc->enter($__internal_e6a3cd54a328718cca9d25a111ab8245e60a4612849375b5e31689dd648befbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e6a3cd54a328718cca9d25a111ab8245e60a4612849375b5e31689dd648befbc->leave($__internal_e6a3cd54a328718cca9d25a111ab8245e60a4612849375b5e31689dd648befbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
