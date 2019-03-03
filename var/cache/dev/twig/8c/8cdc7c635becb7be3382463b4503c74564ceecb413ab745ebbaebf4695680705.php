<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7b1b43ade8862d8e1e257e49e30695e242d32a9df70940b58ec75e322bf1941c extends Twig_Template
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
        $__internal_fa7e8b3b2c9926adc060607e79d151b1674574c07c7ecf115c6257131d440d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7e8b3b2c9926adc060607e79d151b1674574c07c7ecf115c6257131d440d92->enter($__internal_fa7e8b3b2c9926adc060607e79d151b1674574c07c7ecf115c6257131d440d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5236fa99c42f7b280755af33b728d3b6760216b3fbc169f793df29b222822b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5236fa99c42f7b280755af33b728d3b6760216b3fbc169f793df29b222822b3e->enter($__internal_5236fa99c42f7b280755af33b728d3b6760216b3fbc169f793df29b222822b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fa7e8b3b2c9926adc060607e79d151b1674574c07c7ecf115c6257131d440d92->leave($__internal_fa7e8b3b2c9926adc060607e79d151b1674574c07c7ecf115c6257131d440d92_prof);

        
        $__internal_5236fa99c42f7b280755af33b728d3b6760216b3fbc169f793df29b222822b3e->leave($__internal_5236fa99c42f7b280755af33b728d3b6760216b3fbc169f793df29b222822b3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
