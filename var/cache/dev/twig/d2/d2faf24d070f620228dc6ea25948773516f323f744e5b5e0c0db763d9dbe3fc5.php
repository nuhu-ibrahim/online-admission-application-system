<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_810298a5cf84a4861084b532468a3c5c37f63efe0183f3d130d5cfe5b974bb9f extends Twig_Template
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
        $__internal_a70a885e759c2b87f4eef6b3ea84034ea6cff234bce7896d79426ab017c4853e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70a885e759c2b87f4eef6b3ea84034ea6cff234bce7896d79426ab017c4853e->enter($__internal_a70a885e759c2b87f4eef6b3ea84034ea6cff234bce7896d79426ab017c4853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bc527f2f1903e1c41cae32291858c6baeedbcca639826193424d9398a2e9fd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc527f2f1903e1c41cae32291858c6baeedbcca639826193424d9398a2e9fd7c->enter($__internal_bc527f2f1903e1c41cae32291858c6baeedbcca639826193424d9398a2e9fd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a70a885e759c2b87f4eef6b3ea84034ea6cff234bce7896d79426ab017c4853e->leave($__internal_a70a885e759c2b87f4eef6b3ea84034ea6cff234bce7896d79426ab017c4853e_prof);

        
        $__internal_bc527f2f1903e1c41cae32291858c6baeedbcca639826193424d9398a2e9fd7c->leave($__internal_bc527f2f1903e1c41cae32291858c6baeedbcca639826193424d9398a2e9fd7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
