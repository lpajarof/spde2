<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a9f8dfbced14b278de21996888a5bc1b60d2928097b4c082eccb7b61c19aad1b extends Twig_Template
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
        $__internal_62b860324fa61017a650d32b1bcb2d37ebbd3e4890e33ca478702bbff1afe5d7 = $this->env->getExtension("native_profiler");
        $__internal_62b860324fa61017a650d32b1bcb2d37ebbd3e4890e33ca478702bbff1afe5d7->enter($__internal_62b860324fa61017a650d32b1bcb2d37ebbd3e4890e33ca478702bbff1afe5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_62b860324fa61017a650d32b1bcb2d37ebbd3e4890e33ca478702bbff1afe5d7->leave($__internal_62b860324fa61017a650d32b1bcb2d37ebbd3e4890e33ca478702bbff1afe5d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
