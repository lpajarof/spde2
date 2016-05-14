<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_dade2ec1f53e9cdc0957f527b9fdb83f34f4b2e03ca4c685badf1a17a2491908 extends Twig_Template
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
        $__internal_aad7177b2694453c25e4aef520281c0bc38dab4ebaff78b3dffcc69e9fadc634 = $this->env->getExtension("native_profiler");
        $__internal_aad7177b2694453c25e4aef520281c0bc38dab4ebaff78b3dffcc69e9fadc634->enter($__internal_aad7177b2694453c25e4aef520281c0bc38dab4ebaff78b3dffcc69e9fadc634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_aad7177b2694453c25e4aef520281c0bc38dab4ebaff78b3dffcc69e9fadc634->leave($__internal_aad7177b2694453c25e4aef520281c0bc38dab4ebaff78b3dffcc69e9fadc634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
