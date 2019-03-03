<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_0183ef1736a114f92672f8476570864910d70a942ee9acff03f6decbc41d0a17 extends Twig_Template
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
        $__internal_c6c07bdc79d93a9892e5ab0831d272251d534a05a3ca637c57fa3fd41b1d4df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c07bdc79d93a9892e5ab0831d272251d534a05a3ca637c57fa3fd41b1d4df2->enter($__internal_c6c07bdc79d93a9892e5ab0831d272251d534a05a3ca637c57fa3fd41b1d4df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_77979c6a0263dbe3ac2e4b8e8f19b40159db76f95f8c35fdf4267a3cf8355c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77979c6a0263dbe3ac2e4b8e8f19b40159db76f95f8c35fdf4267a3cf8355c89->enter($__internal_77979c6a0263dbe3ac2e4b8e8f19b40159db76f95f8c35fdf4267a3cf8355c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_c6c07bdc79d93a9892e5ab0831d272251d534a05a3ca637c57fa3fd41b1d4df2->leave($__internal_c6c07bdc79d93a9892e5ab0831d272251d534a05a3ca637c57fa3fd41b1d4df2_prof);

        
        $__internal_77979c6a0263dbe3ac2e4b8e8f19b40159db76f95f8c35fdf4267a3cf8355c89->leave($__internal_77979c6a0263dbe3ac2e4b8e8f19b40159db76f95f8c35fdf4267a3cf8355c89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
