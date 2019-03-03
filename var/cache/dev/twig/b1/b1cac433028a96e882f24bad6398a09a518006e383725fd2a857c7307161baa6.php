<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8f5dec710ca0f0a81af0536342ba7ff73071d025651fc098ceb0d4b4d6893d84 extends Twig_Template
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
        $__internal_e5cf9ccfecdbd5d42f466e79da8654ef1ddd638e6b516eca4ec7364329fd9f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cf9ccfecdbd5d42f466e79da8654ef1ddd638e6b516eca4ec7364329fd9f8b->enter($__internal_e5cf9ccfecdbd5d42f466e79da8654ef1ddd638e6b516eca4ec7364329fd9f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9d946d048f15bc6d3f4268f325a521739dbc5c3f9652fb6baaf80df0f3b829af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d946d048f15bc6d3f4268f325a521739dbc5c3f9652fb6baaf80df0f3b829af->enter($__internal_9d946d048f15bc6d3f4268f325a521739dbc5c3f9652fb6baaf80df0f3b829af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e5cf9ccfecdbd5d42f466e79da8654ef1ddd638e6b516eca4ec7364329fd9f8b->leave($__internal_e5cf9ccfecdbd5d42f466e79da8654ef1ddd638e6b516eca4ec7364329fd9f8b_prof);

        
        $__internal_9d946d048f15bc6d3f4268f325a521739dbc5c3f9652fb6baaf80df0f3b829af->leave($__internal_9d946d048f15bc6d3f4268f325a521739dbc5c3f9652fb6baaf80df0f3b829af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
