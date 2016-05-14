<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1103ad9de2e11786b112f71f64cb8220a422bf6916a261bb923059e3667c1a10 extends Twig_Template
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
        $__internal_646c34c2e06ebe6b841ea161c2dce8b027200f00321b8bdccf3417d376378dc7 = $this->env->getExtension("native_profiler");
        $__internal_646c34c2e06ebe6b841ea161c2dce8b027200f00321b8bdccf3417d376378dc7->enter($__internal_646c34c2e06ebe6b841ea161c2dce8b027200f00321b8bdccf3417d376378dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_646c34c2e06ebe6b841ea161c2dce8b027200f00321b8bdccf3417d376378dc7->leave($__internal_646c34c2e06ebe6b841ea161c2dce8b027200f00321b8bdccf3417d376378dc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
