<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3eefb76aa4eca0cd528d15e2ffb288e936959b4f3d758a545ef2de76815fe274 extends Twig_Template
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
        $__internal_3794eee9f7edeb8e90605088bb0a9ac0d755611f4a20e2e6f4251366f58f1a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3794eee9f7edeb8e90605088bb0a9ac0d755611f4a20e2e6f4251366f58f1a14->enter($__internal_3794eee9f7edeb8e90605088bb0a9ac0d755611f4a20e2e6f4251366f58f1a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_416b0272e14bc34aeaa5c07280ad9d36fb310a7b43995e6aa925b97b46b9c48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416b0272e14bc34aeaa5c07280ad9d36fb310a7b43995e6aa925b97b46b9c48e->enter($__internal_416b0272e14bc34aeaa5c07280ad9d36fb310a7b43995e6aa925b97b46b9c48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3794eee9f7edeb8e90605088bb0a9ac0d755611f4a20e2e6f4251366f58f1a14->leave($__internal_3794eee9f7edeb8e90605088bb0a9ac0d755611f4a20e2e6f4251366f58f1a14_prof);

        
        $__internal_416b0272e14bc34aeaa5c07280ad9d36fb310a7b43995e6aa925b97b46b9c48e->leave($__internal_416b0272e14bc34aeaa5c07280ad9d36fb310a7b43995e6aa925b97b46b9c48e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
