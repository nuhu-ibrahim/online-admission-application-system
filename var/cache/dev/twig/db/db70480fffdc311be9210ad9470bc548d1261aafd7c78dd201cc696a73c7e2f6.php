<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_41ad80f4cfaaf0069d336188439cb00af3ac8e735c1d04447effb16012e2bb86 extends Twig_Template
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
        $__internal_a635dee355522c31666149e3792019301f657930e526198810bce784b5de5b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a635dee355522c31666149e3792019301f657930e526198810bce784b5de5b9a->enter($__internal_a635dee355522c31666149e3792019301f657930e526198810bce784b5de5b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4f071aedb6b9ea72b623adc2878edb4b16aab7d2b980c39d357ad7787491e46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f071aedb6b9ea72b623adc2878edb4b16aab7d2b980c39d357ad7787491e46f->enter($__internal_4f071aedb6b9ea72b623adc2878edb4b16aab7d2b980c39d357ad7787491e46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a635dee355522c31666149e3792019301f657930e526198810bce784b5de5b9a->leave($__internal_a635dee355522c31666149e3792019301f657930e526198810bce784b5de5b9a_prof);

        
        $__internal_4f071aedb6b9ea72b623adc2878edb4b16aab7d2b980c39d357ad7787491e46f->leave($__internal_4f071aedb6b9ea72b623adc2878edb4b16aab7d2b980c39d357ad7787491e46f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
