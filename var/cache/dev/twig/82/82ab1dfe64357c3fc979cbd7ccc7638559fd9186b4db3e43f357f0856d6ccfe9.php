<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c28dd0a7d2435cd5efa7f72166808e41ed3228b4aa8af2b8ce35af4f527b711b extends Twig_Template
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
        $__internal_a1bfb5b148231525eff13b87a3fea3320efd518c03a983fa051d644a8f639da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1bfb5b148231525eff13b87a3fea3320efd518c03a983fa051d644a8f639da6->enter($__internal_a1bfb5b148231525eff13b87a3fea3320efd518c03a983fa051d644a8f639da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3901564f7a7a4d4abd55aa78f8f922a8ffb03c42479228240eb24779794f60f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3901564f7a7a4d4abd55aa78f8f922a8ffb03c42479228240eb24779794f60f2->enter($__internal_3901564f7a7a4d4abd55aa78f8f922a8ffb03c42479228240eb24779794f60f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a1bfb5b148231525eff13b87a3fea3320efd518c03a983fa051d644a8f639da6->leave($__internal_a1bfb5b148231525eff13b87a3fea3320efd518c03a983fa051d644a8f639da6_prof);

        
        $__internal_3901564f7a7a4d4abd55aa78f8f922a8ffb03c42479228240eb24779794f60f2->leave($__internal_3901564f7a7a4d4abd55aa78f8f922a8ffb03c42479228240eb24779794f60f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
