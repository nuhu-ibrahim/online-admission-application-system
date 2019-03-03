<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8ece503469416059a03bd59af1a7b8ba6601b2d0a9ac089acd7ea49efeb54b90 extends Twig_Template
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
        $__internal_6e0a989fac923a88e579210c1de65e01ab33170f9418803dfae157c72b086083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0a989fac923a88e579210c1de65e01ab33170f9418803dfae157c72b086083->enter($__internal_6e0a989fac923a88e579210c1de65e01ab33170f9418803dfae157c72b086083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7ecf8bcdb68812687fdca3da4af34e6e9203b96e2d06f330f09476adab7ef30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecf8bcdb68812687fdca3da4af34e6e9203b96e2d06f330f09476adab7ef30a->enter($__internal_7ecf8bcdb68812687fdca3da4af34e6e9203b96e2d06f330f09476adab7ef30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6e0a989fac923a88e579210c1de65e01ab33170f9418803dfae157c72b086083->leave($__internal_6e0a989fac923a88e579210c1de65e01ab33170f9418803dfae157c72b086083_prof);

        
        $__internal_7ecf8bcdb68812687fdca3da4af34e6e9203b96e2d06f330f09476adab7ef30a->leave($__internal_7ecf8bcdb68812687fdca3da4af34e6e9203b96e2d06f330f09476adab7ef30a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
