<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a3caf3fb77df2ea84da5e99ec3ba5e5d72043e661ecc32cf6179097d19d1675e extends Twig_Template
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
        $__internal_9f32d8b0e3e423d68d94c707818069c6941c274571a6a51a0c6e4e3ba5f78fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f32d8b0e3e423d68d94c707818069c6941c274571a6a51a0c6e4e3ba5f78fe5->enter($__internal_9f32d8b0e3e423d68d94c707818069c6941c274571a6a51a0c6e4e3ba5f78fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0c432e373adf43a65a9b2169531fbbd0823d8ea7bb0fa7b61ccc972e2dfab596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c432e373adf43a65a9b2169531fbbd0823d8ea7bb0fa7b61ccc972e2dfab596->enter($__internal_0c432e373adf43a65a9b2169531fbbd0823d8ea7bb0fa7b61ccc972e2dfab596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9f32d8b0e3e423d68d94c707818069c6941c274571a6a51a0c6e4e3ba5f78fe5->leave($__internal_9f32d8b0e3e423d68d94c707818069c6941c274571a6a51a0c6e4e3ba5f78fe5_prof);

        
        $__internal_0c432e373adf43a65a9b2169531fbbd0823d8ea7bb0fa7b61ccc972e2dfab596->leave($__internal_0c432e373adf43a65a9b2169531fbbd0823d8ea7bb0fa7b61ccc972e2dfab596_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
