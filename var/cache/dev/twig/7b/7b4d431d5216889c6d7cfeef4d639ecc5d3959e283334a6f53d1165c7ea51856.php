<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fc1c6f88497683bbc77328b1de11905efdd3fa3989e9c8b6b17373162987ca50 extends Twig_Template
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
        $__internal_f74624a5f3cda27bc6958573159200c3d3ee6e86eb82ccc1a8df48c1ad1e6aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74624a5f3cda27bc6958573159200c3d3ee6e86eb82ccc1a8df48c1ad1e6aab->enter($__internal_f74624a5f3cda27bc6958573159200c3d3ee6e86eb82ccc1a8df48c1ad1e6aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a09cdaea831818bbaed7f43097819eaa3bd79767c749b67377560474afcecb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09cdaea831818bbaed7f43097819eaa3bd79767c749b67377560474afcecb2b->enter($__internal_a09cdaea831818bbaed7f43097819eaa3bd79767c749b67377560474afcecb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f74624a5f3cda27bc6958573159200c3d3ee6e86eb82ccc1a8df48c1ad1e6aab->leave($__internal_f74624a5f3cda27bc6958573159200c3d3ee6e86eb82ccc1a8df48c1ad1e6aab_prof);

        
        $__internal_a09cdaea831818bbaed7f43097819eaa3bd79767c749b67377560474afcecb2b->leave($__internal_a09cdaea831818bbaed7f43097819eaa3bd79767c749b67377560474afcecb2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
