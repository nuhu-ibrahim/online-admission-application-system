<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_78a57e7b61f7539c8eca1314a039c1d90158e5d365cd5ad1f74d325cf4c6fa78 extends Twig_Template
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
        $__internal_76091e84a827380a509c594cb3e370d98ebd53916b433da56c348dea3ec5e3b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76091e84a827380a509c594cb3e370d98ebd53916b433da56c348dea3ec5e3b5->enter($__internal_76091e84a827380a509c594cb3e370d98ebd53916b433da56c348dea3ec5e3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b2bbb823afed605dcf7b50db9a0be7a3b8f303d05dfeb8090ef63a2e05c1ce58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bbb823afed605dcf7b50db9a0be7a3b8f303d05dfeb8090ef63a2e05c1ce58->enter($__internal_b2bbb823afed605dcf7b50db9a0be7a3b8f303d05dfeb8090ef63a2e05c1ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_76091e84a827380a509c594cb3e370d98ebd53916b433da56c348dea3ec5e3b5->leave($__internal_76091e84a827380a509c594cb3e370d98ebd53916b433da56c348dea3ec5e3b5_prof);

        
        $__internal_b2bbb823afed605dcf7b50db9a0be7a3b8f303d05dfeb8090ef63a2e05c1ce58->leave($__internal_b2bbb823afed605dcf7b50db9a0be7a3b8f303d05dfeb8090ef63a2e05c1ce58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
