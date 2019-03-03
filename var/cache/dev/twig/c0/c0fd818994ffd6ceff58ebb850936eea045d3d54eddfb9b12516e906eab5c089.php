<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1ba5a0204572698d0b65ffe3abb659bbb7e6f0e7367c9e92bde63e7e12dd5bdf extends Twig_Template
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
        $__internal_10d80ee9b03f6635ef06557212d5300c34ef5fc5b8d903d64428386c2b071b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d80ee9b03f6635ef06557212d5300c34ef5fc5b8d903d64428386c2b071b4c->enter($__internal_10d80ee9b03f6635ef06557212d5300c34ef5fc5b8d903d64428386c2b071b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c711c96f7c952e5ed18642285149d376497b55d97ffdda6942f48f847285bad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c711c96f7c952e5ed18642285149d376497b55d97ffdda6942f48f847285bad8->enter($__internal_c711c96f7c952e5ed18642285149d376497b55d97ffdda6942f48f847285bad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_10d80ee9b03f6635ef06557212d5300c34ef5fc5b8d903d64428386c2b071b4c->leave($__internal_10d80ee9b03f6635ef06557212d5300c34ef5fc5b8d903d64428386c2b071b4c_prof);

        
        $__internal_c711c96f7c952e5ed18642285149d376497b55d97ffdda6942f48f847285bad8->leave($__internal_c711c96f7c952e5ed18642285149d376497b55d97ffdda6942f48f847285bad8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
