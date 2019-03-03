<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bb6379555dbed863fe2d287488231c1fe38febc3bfb144285b93cc628c3d49ff extends Twig_Template
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
        $__internal_427de42f02322b789d34ead836abb15260b2b76b406365ddd9e805433f7a09e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427de42f02322b789d34ead836abb15260b2b76b406365ddd9e805433f7a09e9->enter($__internal_427de42f02322b789d34ead836abb15260b2b76b406365ddd9e805433f7a09e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9b8c58623ebc2e5fb7dd511caaa05e86bd5135679978a5edb46374dd52258608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8c58623ebc2e5fb7dd511caaa05e86bd5135679978a5edb46374dd52258608->enter($__internal_9b8c58623ebc2e5fb7dd511caaa05e86bd5135679978a5edb46374dd52258608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_427de42f02322b789d34ead836abb15260b2b76b406365ddd9e805433f7a09e9->leave($__internal_427de42f02322b789d34ead836abb15260b2b76b406365ddd9e805433f7a09e9_prof);

        
        $__internal_9b8c58623ebc2e5fb7dd511caaa05e86bd5135679978a5edb46374dd52258608->leave($__internal_9b8c58623ebc2e5fb7dd511caaa05e86bd5135679978a5edb46374dd52258608_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
