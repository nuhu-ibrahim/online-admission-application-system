<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a3ad4b70ffd12c680ea97e27e5da63721ff08642bc8c400aaf7297d10706f564 extends Twig_Template
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
        $__internal_684bd2bb918f54fc50ad9f121fb2db5f1795f9172548481090b598a4f0ad911d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684bd2bb918f54fc50ad9f121fb2db5f1795f9172548481090b598a4f0ad911d->enter($__internal_684bd2bb918f54fc50ad9f121fb2db5f1795f9172548481090b598a4f0ad911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3a4394ec9008891d4f7b30be5d8b94b713fb7e81466a2564bb4ee2825efe7add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4394ec9008891d4f7b30be5d8b94b713fb7e81466a2564bb4ee2825efe7add->enter($__internal_3a4394ec9008891d4f7b30be5d8b94b713fb7e81466a2564bb4ee2825efe7add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_684bd2bb918f54fc50ad9f121fb2db5f1795f9172548481090b598a4f0ad911d->leave($__internal_684bd2bb918f54fc50ad9f121fb2db5f1795f9172548481090b598a4f0ad911d_prof);

        
        $__internal_3a4394ec9008891d4f7b30be5d8b94b713fb7e81466a2564bb4ee2825efe7add->leave($__internal_3a4394ec9008891d4f7b30be5d8b94b713fb7e81466a2564bb4ee2825efe7add_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
