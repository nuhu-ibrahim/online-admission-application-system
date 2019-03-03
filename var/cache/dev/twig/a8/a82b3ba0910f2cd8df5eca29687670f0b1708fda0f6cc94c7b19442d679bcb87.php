<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8c9db537def957e6d70ed1e01fc6169947cb1ed1650b375ee08d97771677fcc7 extends Twig_Template
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
        $__internal_6fc7832154be915c2e40a6d357b3e3d1fce95efe48d0e05172de00e34b097319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc7832154be915c2e40a6d357b3e3d1fce95efe48d0e05172de00e34b097319->enter($__internal_6fc7832154be915c2e40a6d357b3e3d1fce95efe48d0e05172de00e34b097319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_17a8fc3a6817ce8ac3c1649c75d2e853691e09f431797c9e1df33018793d7730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a8fc3a6817ce8ac3c1649c75d2e853691e09f431797c9e1df33018793d7730->enter($__internal_17a8fc3a6817ce8ac3c1649c75d2e853691e09f431797c9e1df33018793d7730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6fc7832154be915c2e40a6d357b3e3d1fce95efe48d0e05172de00e34b097319->leave($__internal_6fc7832154be915c2e40a6d357b3e3d1fce95efe48d0e05172de00e34b097319_prof);

        
        $__internal_17a8fc3a6817ce8ac3c1649c75d2e853691e09f431797c9e1df33018793d7730->leave($__internal_17a8fc3a6817ce8ac3c1649c75d2e853691e09f431797c9e1df33018793d7730_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
