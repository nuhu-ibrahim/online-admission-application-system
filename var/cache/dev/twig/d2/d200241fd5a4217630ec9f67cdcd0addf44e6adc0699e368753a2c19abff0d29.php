<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9e695d74caf6d836d54d612076b5f6d97a0911ae6a22f8c427f81e94b9db4d1e extends Twig_Template
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
        $__internal_dfb65299232fa501b8739796e0c43fcbccf0147939e0bbb3f702c9d80106a0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb65299232fa501b8739796e0c43fcbccf0147939e0bbb3f702c9d80106a0cf->enter($__internal_dfb65299232fa501b8739796e0c43fcbccf0147939e0bbb3f702c9d80106a0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b498787cb60143d19343527ee3c18026d78edb1c5bd65f97321524ecbd93cdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b498787cb60143d19343527ee3c18026d78edb1c5bd65f97321524ecbd93cdcf->enter($__internal_b498787cb60143d19343527ee3c18026d78edb1c5bd65f97321524ecbd93cdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dfb65299232fa501b8739796e0c43fcbccf0147939e0bbb3f702c9d80106a0cf->leave($__internal_dfb65299232fa501b8739796e0c43fcbccf0147939e0bbb3f702c9d80106a0cf_prof);

        
        $__internal_b498787cb60143d19343527ee3c18026d78edb1c5bd65f97321524ecbd93cdcf->leave($__internal_b498787cb60143d19343527ee3c18026d78edb1c5bd65f97321524ecbd93cdcf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
