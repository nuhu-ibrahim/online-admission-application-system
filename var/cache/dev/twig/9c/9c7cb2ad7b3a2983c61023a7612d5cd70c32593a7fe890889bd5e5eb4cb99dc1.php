<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_474c907591b71465b044a60ce9ad8c45acaf0e764c26f04da26048e12032a2aa extends Twig_Template
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
        $__internal_0fdbaeaa9c6dc70406be3b7c5dde37b67a8730e04153e0b28fd41a4b6b1d1888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdbaeaa9c6dc70406be3b7c5dde37b67a8730e04153e0b28fd41a4b6b1d1888->enter($__internal_0fdbaeaa9c6dc70406be3b7c5dde37b67a8730e04153e0b28fd41a4b6b1d1888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7e59c8b8677a0aa9e379478a1a1a1e5e8940ecab1faaf1489f7d5c0fe39b586c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e59c8b8677a0aa9e379478a1a1a1e5e8940ecab1faaf1489f7d5c0fe39b586c->enter($__internal_7e59c8b8677a0aa9e379478a1a1a1e5e8940ecab1faaf1489f7d5c0fe39b586c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0fdbaeaa9c6dc70406be3b7c5dde37b67a8730e04153e0b28fd41a4b6b1d1888->leave($__internal_0fdbaeaa9c6dc70406be3b7c5dde37b67a8730e04153e0b28fd41a4b6b1d1888_prof);

        
        $__internal_7e59c8b8677a0aa9e379478a1a1a1e5e8940ecab1faaf1489f7d5c0fe39b586c->leave($__internal_7e59c8b8677a0aa9e379478a1a1a1e5e8940ecab1faaf1489f7d5c0fe39b586c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
