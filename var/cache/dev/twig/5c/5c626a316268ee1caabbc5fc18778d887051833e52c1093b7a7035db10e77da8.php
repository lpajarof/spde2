<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_20f61bf1af3e03e5fba3688886170473f5800722c857a44e6309a17d99c60e82 extends Twig_Template
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
        $__internal_649df199308d4ed961a9d304c87da8cd5e92637436245c685d33914320fd0e35 = $this->env->getExtension("native_profiler");
        $__internal_649df199308d4ed961a9d304c87da8cd5e92637436245c685d33914320fd0e35->enter($__internal_649df199308d4ed961a9d304c87da8cd5e92637436245c685d33914320fd0e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_649df199308d4ed961a9d304c87da8cd5e92637436245c685d33914320fd0e35->leave($__internal_649df199308d4ed961a9d304c87da8cd5e92637436245c685d33914320fd0e35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
