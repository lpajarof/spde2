<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1b72ed394d6f412dec7d8b67fdf2b6098dd46c3073de315837cd41b7635dc6a3 extends Twig_Template
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
        $__internal_158631efed70ab7fad5482e429c48dba8095d7b5d1c96b99b7f337ceb84e88a4 = $this->env->getExtension("native_profiler");
        $__internal_158631efed70ab7fad5482e429c48dba8095d7b5d1c96b99b7f337ceb84e88a4->enter($__internal_158631efed70ab7fad5482e429c48dba8095d7b5d1c96b99b7f337ceb84e88a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_158631efed70ab7fad5482e429c48dba8095d7b5d1c96b99b7f337ceb84e88a4->leave($__internal_158631efed70ab7fad5482e429c48dba8095d7b5d1c96b99b7f337ceb84e88a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
