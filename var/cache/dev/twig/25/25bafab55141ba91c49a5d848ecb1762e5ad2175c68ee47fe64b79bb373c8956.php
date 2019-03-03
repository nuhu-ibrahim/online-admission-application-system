<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c7aa4358e69ccde949adc956acc7237c557b760790b93176e29bd52d14b662ca extends Twig_Template
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
        $__internal_0813b56efd6b637776c3c16ab2fb07f901f16b43733eafde2e213ca1355ed6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0813b56efd6b637776c3c16ab2fb07f901f16b43733eafde2e213ca1355ed6b0->enter($__internal_0813b56efd6b637776c3c16ab2fb07f901f16b43733eafde2e213ca1355ed6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5a4c42f56471bb51da52ff35a2d3f4b0bd305d7ae93fda4ff7167b657c4cfcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4c42f56471bb51da52ff35a2d3f4b0bd305d7ae93fda4ff7167b657c4cfcc5->enter($__internal_5a4c42f56471bb51da52ff35a2d3f4b0bd305d7ae93fda4ff7167b657c4cfcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0813b56efd6b637776c3c16ab2fb07f901f16b43733eafde2e213ca1355ed6b0->leave($__internal_0813b56efd6b637776c3c16ab2fb07f901f16b43733eafde2e213ca1355ed6b0_prof);

        
        $__internal_5a4c42f56471bb51da52ff35a2d3f4b0bd305d7ae93fda4ff7167b657c4cfcc5->leave($__internal_5a4c42f56471bb51da52ff35a2d3f4b0bd305d7ae93fda4ff7167b657c4cfcc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
