<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2fed66cb9f9c71e64d985215b325ace568709e979e81cee9d550f71497c48777 extends Twig_Template
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
        $__internal_311607f82346ba45f0e672964854c2acf4f66fde89031b33f0985139fdd63527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311607f82346ba45f0e672964854c2acf4f66fde89031b33f0985139fdd63527->enter($__internal_311607f82346ba45f0e672964854c2acf4f66fde89031b33f0985139fdd63527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4b0b5075e0ef1983db4dd7d8f3c365b2a528d7ba535b7e65c3a8b736c07cafd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0b5075e0ef1983db4dd7d8f3c365b2a528d7ba535b7e65c3a8b736c07cafd1->enter($__internal_4b0b5075e0ef1983db4dd7d8f3c365b2a528d7ba535b7e65c3a8b736c07cafd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_311607f82346ba45f0e672964854c2acf4f66fde89031b33f0985139fdd63527->leave($__internal_311607f82346ba45f0e672964854c2acf4f66fde89031b33f0985139fdd63527_prof);

        
        $__internal_4b0b5075e0ef1983db4dd7d8f3c365b2a528d7ba535b7e65c3a8b736c07cafd1->leave($__internal_4b0b5075e0ef1983db4dd7d8f3c365b2a528d7ba535b7e65c3a8b736c07cafd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
