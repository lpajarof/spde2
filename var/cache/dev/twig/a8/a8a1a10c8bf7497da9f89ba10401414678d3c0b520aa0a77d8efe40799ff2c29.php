<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b50efdd14862e2fec466b6f68d78b5ffb21e5ff7ee425c3f44306c7399aa9b23 extends Twig_Template
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
        $__internal_14d6366bb84f11cbe45bf41bba4711e1ee38181055178a257a890491ffe65e98 = $this->env->getExtension("native_profiler");
        $__internal_14d6366bb84f11cbe45bf41bba4711e1ee38181055178a257a890491ffe65e98->enter($__internal_14d6366bb84f11cbe45bf41bba4711e1ee38181055178a257a890491ffe65e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_14d6366bb84f11cbe45bf41bba4711e1ee38181055178a257a890491ffe65e98->leave($__internal_14d6366bb84f11cbe45bf41bba4711e1ee38181055178a257a890491ffe65e98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
