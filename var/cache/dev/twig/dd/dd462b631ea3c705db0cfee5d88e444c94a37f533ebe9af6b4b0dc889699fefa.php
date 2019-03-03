<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_edfd69e058774b75be92c397f506ce0f80bb32797701ae877e68c708708a2d9d extends Twig_Template
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
        $__internal_cd3053190cfd80925d0a9d94d25652b3b1d89a9eb3c7bd48c70c3112b1b6d34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3053190cfd80925d0a9d94d25652b3b1d89a9eb3c7bd48c70c3112b1b6d34e->enter($__internal_cd3053190cfd80925d0a9d94d25652b3b1d89a9eb3c7bd48c70c3112b1b6d34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_6a86a795663b4163114dacf9b02f950e1935a14397af3bf6576a2679c7599685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a86a795663b4163114dacf9b02f950e1935a14397af3bf6576a2679c7599685->enter($__internal_6a86a795663b4163114dacf9b02f950e1935a14397af3bf6576a2679c7599685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cd3053190cfd80925d0a9d94d25652b3b1d89a9eb3c7bd48c70c3112b1b6d34e->leave($__internal_cd3053190cfd80925d0a9d94d25652b3b1d89a9eb3c7bd48c70c3112b1b6d34e_prof);

        
        $__internal_6a86a795663b4163114dacf9b02f950e1935a14397af3bf6576a2679c7599685->leave($__internal_6a86a795663b4163114dacf9b02f950e1935a14397af3bf6576a2679c7599685_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
