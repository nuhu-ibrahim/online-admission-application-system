<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_83a5ce6483884fd94d52c262c037dc1d3cd6e8a9b97fb9f4fc2eb7c84dc8383d extends Twig_Template
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
        $__internal_cba4d9e7c53fb972ad17e5c39664087762d2ddc7e7576bf24f52dfccb1aab003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba4d9e7c53fb972ad17e5c39664087762d2ddc7e7576bf24f52dfccb1aab003->enter($__internal_cba4d9e7c53fb972ad17e5c39664087762d2ddc7e7576bf24f52dfccb1aab003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_370e5ca061db3f836f89f0ed319fb54a8a574acf6230751fe0db83f85f9682c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370e5ca061db3f836f89f0ed319fb54a8a574acf6230751fe0db83f85f9682c4->enter($__internal_370e5ca061db3f836f89f0ed319fb54a8a574acf6230751fe0db83f85f9682c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cba4d9e7c53fb972ad17e5c39664087762d2ddc7e7576bf24f52dfccb1aab003->leave($__internal_cba4d9e7c53fb972ad17e5c39664087762d2ddc7e7576bf24f52dfccb1aab003_prof);

        
        $__internal_370e5ca061db3f836f89f0ed319fb54a8a574acf6230751fe0db83f85f9682c4->leave($__internal_370e5ca061db3f836f89f0ed319fb54a8a574acf6230751fe0db83f85f9682c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
