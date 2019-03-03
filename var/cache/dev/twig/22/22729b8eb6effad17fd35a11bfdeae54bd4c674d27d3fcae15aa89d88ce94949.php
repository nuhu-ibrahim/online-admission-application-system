<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_08adb298b04539176a349e71bc3064ab1267378858e5648c0ba5ad86ac5ba13e extends Twig_Template
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
        $__internal_ca7bc503e6606fdc13c931ca93151a737b29892925a0b966975bff1ad4623264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7bc503e6606fdc13c931ca93151a737b29892925a0b966975bff1ad4623264->enter($__internal_ca7bc503e6606fdc13c931ca93151a737b29892925a0b966975bff1ad4623264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a07dc87028bdf1c789e13652cee7731c45eef6f8bd71105bc1136b613cfa67c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07dc87028bdf1c789e13652cee7731c45eef6f8bd71105bc1136b613cfa67c3->enter($__internal_a07dc87028bdf1c789e13652cee7731c45eef6f8bd71105bc1136b613cfa67c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ca7bc503e6606fdc13c931ca93151a737b29892925a0b966975bff1ad4623264->leave($__internal_ca7bc503e6606fdc13c931ca93151a737b29892925a0b966975bff1ad4623264_prof);

        
        $__internal_a07dc87028bdf1c789e13652cee7731c45eef6f8bd71105bc1136b613cfa67c3->leave($__internal_a07dc87028bdf1c789e13652cee7731c45eef6f8bd71105bc1136b613cfa67c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
