<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0388b2db0cbd64bec236bf07b4049f58d9d5a60e3d57881d56cd34604e0fab8f extends Twig_Template
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
        $__internal_a1c9e2a3d82557f2825a490695ce6949d660246a20a6cfa6f8d5e1c06432dbca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c9e2a3d82557f2825a490695ce6949d660246a20a6cfa6f8d5e1c06432dbca->enter($__internal_a1c9e2a3d82557f2825a490695ce6949d660246a20a6cfa6f8d5e1c06432dbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a64298a89252a77d62e1c12a995ef86a402ca8fd1308ebbc7eff2c7392ee060a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64298a89252a77d62e1c12a995ef86a402ca8fd1308ebbc7eff2c7392ee060a->enter($__internal_a64298a89252a77d62e1c12a995ef86a402ca8fd1308ebbc7eff2c7392ee060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a1c9e2a3d82557f2825a490695ce6949d660246a20a6cfa6f8d5e1c06432dbca->leave($__internal_a1c9e2a3d82557f2825a490695ce6949d660246a20a6cfa6f8d5e1c06432dbca_prof);

        
        $__internal_a64298a89252a77d62e1c12a995ef86a402ca8fd1308ebbc7eff2c7392ee060a->leave($__internal_a64298a89252a77d62e1c12a995ef86a402ca8fd1308ebbc7eff2c7392ee060a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
