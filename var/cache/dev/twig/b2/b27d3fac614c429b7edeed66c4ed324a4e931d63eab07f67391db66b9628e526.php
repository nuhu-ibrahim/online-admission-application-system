<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_250d2d3d0297d06c966d8adaa851e43905b6a8264098a2b1f1987a2761ccf29d extends Twig_Template
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
        $__internal_15d2594399b8268aa2be896626e3f93147226feb432858965fc2f8a2bc44b895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d2594399b8268aa2be896626e3f93147226feb432858965fc2f8a2bc44b895->enter($__internal_15d2594399b8268aa2be896626e3f93147226feb432858965fc2f8a2bc44b895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5f9a859b425ac28dfb90ef0de9a4fef4d3abbf98b64b2f71e8aff6fa02c02fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9a859b425ac28dfb90ef0de9a4fef4d3abbf98b64b2f71e8aff6fa02c02fc6->enter($__internal_5f9a859b425ac28dfb90ef0de9a4fef4d3abbf98b64b2f71e8aff6fa02c02fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_15d2594399b8268aa2be896626e3f93147226feb432858965fc2f8a2bc44b895->leave($__internal_15d2594399b8268aa2be896626e3f93147226feb432858965fc2f8a2bc44b895_prof);

        
        $__internal_5f9a859b425ac28dfb90ef0de9a4fef4d3abbf98b64b2f71e8aff6fa02c02fc6->leave($__internal_5f9a859b425ac28dfb90ef0de9a4fef4d3abbf98b64b2f71e8aff6fa02c02fc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
