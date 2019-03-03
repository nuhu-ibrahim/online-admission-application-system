<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_09118331198c78addaf19f009c834b0cb1d660b8f371c2a8522aea90b022cb7d extends Twig_Template
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
        $__internal_c86f99b6aa1c295ee1ace597bff68406d56232717f82c09d368b5bf66d7d4de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86f99b6aa1c295ee1ace597bff68406d56232717f82c09d368b5bf66d7d4de9->enter($__internal_c86f99b6aa1c295ee1ace597bff68406d56232717f82c09d368b5bf66d7d4de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1110dd43528957609e0be43b593ad3de5105bce03162e57b7eb348f33bbab642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1110dd43528957609e0be43b593ad3de5105bce03162e57b7eb348f33bbab642->enter($__internal_1110dd43528957609e0be43b593ad3de5105bce03162e57b7eb348f33bbab642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c86f99b6aa1c295ee1ace597bff68406d56232717f82c09d368b5bf66d7d4de9->leave($__internal_c86f99b6aa1c295ee1ace597bff68406d56232717f82c09d368b5bf66d7d4de9_prof);

        
        $__internal_1110dd43528957609e0be43b593ad3de5105bce03162e57b7eb348f33bbab642->leave($__internal_1110dd43528957609e0be43b593ad3de5105bce03162e57b7eb348f33bbab642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
