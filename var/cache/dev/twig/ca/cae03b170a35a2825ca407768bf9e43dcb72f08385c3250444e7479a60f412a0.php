<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4aa1022b45a0a5942f1654ab5f89b255311d6eaeaa950947223920e4c5d993e0 extends Twig_Template
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
        $__internal_d614100fc7f17cd676b769d199202134a400879d1e1d0e2dbbb998fed236da5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d614100fc7f17cd676b769d199202134a400879d1e1d0e2dbbb998fed236da5f->enter($__internal_d614100fc7f17cd676b769d199202134a400879d1e1d0e2dbbb998fed236da5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_316ebe19365acb879e4030aaae5e4e2aa705a4a69289e938f96352c691c07f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316ebe19365acb879e4030aaae5e4e2aa705a4a69289e938f96352c691c07f3f->enter($__internal_316ebe19365acb879e4030aaae5e4e2aa705a4a69289e938f96352c691c07f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d614100fc7f17cd676b769d199202134a400879d1e1d0e2dbbb998fed236da5f->leave($__internal_d614100fc7f17cd676b769d199202134a400879d1e1d0e2dbbb998fed236da5f_prof);

        
        $__internal_316ebe19365acb879e4030aaae5e4e2aa705a4a69289e938f96352c691c07f3f->leave($__internal_316ebe19365acb879e4030aaae5e4e2aa705a4a69289e938f96352c691c07f3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
