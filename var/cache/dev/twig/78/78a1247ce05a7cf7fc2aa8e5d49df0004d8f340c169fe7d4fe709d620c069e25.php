<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_236bc0b62683c37d425555ed1eb9f0dd62536e5813cb5f34b03edded0a4d2714 extends Twig_Template
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
        $__internal_7953f38f252a3bcfc8536416f43bbc8c9036bb36eb9ef5fde7726ab316f39cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7953f38f252a3bcfc8536416f43bbc8c9036bb36eb9ef5fde7726ab316f39cee->enter($__internal_7953f38f252a3bcfc8536416f43bbc8c9036bb36eb9ef5fde7726ab316f39cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_bc7dab26541308caf2faf251e1efe4ec9f2447e5f5263500c623d2c279d2818e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7dab26541308caf2faf251e1efe4ec9f2447e5f5263500c623d2c279d2818e->enter($__internal_bc7dab26541308caf2faf251e1efe4ec9f2447e5f5263500c623d2c279d2818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7953f38f252a3bcfc8536416f43bbc8c9036bb36eb9ef5fde7726ab316f39cee->leave($__internal_7953f38f252a3bcfc8536416f43bbc8c9036bb36eb9ef5fde7726ab316f39cee_prof);

        
        $__internal_bc7dab26541308caf2faf251e1efe4ec9f2447e5f5263500c623d2c279d2818e->leave($__internal_bc7dab26541308caf2faf251e1efe4ec9f2447e5f5263500c623d2c279d2818e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
