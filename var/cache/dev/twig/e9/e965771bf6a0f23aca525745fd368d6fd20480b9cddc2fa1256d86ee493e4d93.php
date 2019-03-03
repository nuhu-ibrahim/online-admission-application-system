<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_fac3cca00e8ee586589a9e47742477c649667aa7954832c455d4a2690fa97d42 extends Twig_Template
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
        $__internal_a7014b2e9ae1fcd36c090c65d78348117aaf9b9fc40a9ae5538ea4a0cadfdd48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7014b2e9ae1fcd36c090c65d78348117aaf9b9fc40a9ae5538ea4a0cadfdd48->enter($__internal_a7014b2e9ae1fcd36c090c65d78348117aaf9b9fc40a9ae5538ea4a0cadfdd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a823352ff781561f2e05a386fbdfc62b1c85f72ca0d697cc479a3aa839b4f366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a823352ff781561f2e05a386fbdfc62b1c85f72ca0d697cc479a3aa839b4f366->enter($__internal_a823352ff781561f2e05a386fbdfc62b1c85f72ca0d697cc479a3aa839b4f366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a7014b2e9ae1fcd36c090c65d78348117aaf9b9fc40a9ae5538ea4a0cadfdd48->leave($__internal_a7014b2e9ae1fcd36c090c65d78348117aaf9b9fc40a9ae5538ea4a0cadfdd48_prof);

        
        $__internal_a823352ff781561f2e05a386fbdfc62b1c85f72ca0d697cc479a3aa839b4f366->leave($__internal_a823352ff781561f2e05a386fbdfc62b1c85f72ca0d697cc479a3aa839b4f366_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
