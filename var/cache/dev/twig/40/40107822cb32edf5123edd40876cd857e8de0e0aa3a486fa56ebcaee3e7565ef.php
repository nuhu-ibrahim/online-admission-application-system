<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_aa7534809501afd66cfc447489354422b87c45d04f0d600594119a40aa187517 extends Twig_Template
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
        $__internal_cc2a7daf90553ff180a6426f1bee51baf60234665a2fe5cbf8b74614526a15b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2a7daf90553ff180a6426f1bee51baf60234665a2fe5cbf8b74614526a15b7->enter($__internal_cc2a7daf90553ff180a6426f1bee51baf60234665a2fe5cbf8b74614526a15b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_df6d2edc0fc89eb98240613e67dfec297c4de5b4ef8276c85965848e45949f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6d2edc0fc89eb98240613e67dfec297c4de5b4ef8276c85965848e45949f2f->enter($__internal_df6d2edc0fc89eb98240613e67dfec297c4de5b4ef8276c85965848e45949f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cc2a7daf90553ff180a6426f1bee51baf60234665a2fe5cbf8b74614526a15b7->leave($__internal_cc2a7daf90553ff180a6426f1bee51baf60234665a2fe5cbf8b74614526a15b7_prof);

        
        $__internal_df6d2edc0fc89eb98240613e67dfec297c4de5b4ef8276c85965848e45949f2f->leave($__internal_df6d2edc0fc89eb98240613e67dfec297c4de5b4ef8276c85965848e45949f2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
