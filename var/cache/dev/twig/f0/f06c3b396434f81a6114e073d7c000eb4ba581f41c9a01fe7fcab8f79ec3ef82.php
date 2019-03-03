<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d1d351808bfb4e41b3903eea359c57f4a204baf5ac74aaa459ddf52ffb963b43 extends Twig_Template
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
        $__internal_e222582ff2062d9246bf8fc10aea5cce25f1641974c97aa1e57ddb50bd68e53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e222582ff2062d9246bf8fc10aea5cce25f1641974c97aa1e57ddb50bd68e53d->enter($__internal_e222582ff2062d9246bf8fc10aea5cce25f1641974c97aa1e57ddb50bd68e53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_67073f9b1c700493cf7591fc02f2353a66d3608d6d8c1ba8d14c18b1d1e51f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67073f9b1c700493cf7591fc02f2353a66d3608d6d8c1ba8d14c18b1d1e51f17->enter($__internal_67073f9b1c700493cf7591fc02f2353a66d3608d6d8c1ba8d14c18b1d1e51f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e222582ff2062d9246bf8fc10aea5cce25f1641974c97aa1e57ddb50bd68e53d->leave($__internal_e222582ff2062d9246bf8fc10aea5cce25f1641974c97aa1e57ddb50bd68e53d_prof);

        
        $__internal_67073f9b1c700493cf7591fc02f2353a66d3608d6d8c1ba8d14c18b1d1e51f17->leave($__internal_67073f9b1c700493cf7591fc02f2353a66d3608d6d8c1ba8d14c18b1d1e51f17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
