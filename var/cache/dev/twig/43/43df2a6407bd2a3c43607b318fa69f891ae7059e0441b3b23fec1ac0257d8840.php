<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_99508a88e165e874c197aae078c3320e8abdc8c632bda195b922092d9102e800 extends Twig_Template
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
        $__internal_6fa2189172673501ee08b5099de765ed55039bbe35f06b3117c4d3adb5b355d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa2189172673501ee08b5099de765ed55039bbe35f06b3117c4d3adb5b355d7->enter($__internal_6fa2189172673501ee08b5099de765ed55039bbe35f06b3117c4d3adb5b355d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_20a50049a0bf219e355bef670e03fa10677301928179182ae1efd83d03ed888b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a50049a0bf219e355bef670e03fa10677301928179182ae1efd83d03ed888b->enter($__internal_20a50049a0bf219e355bef670e03fa10677301928179182ae1efd83d03ed888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_6fa2189172673501ee08b5099de765ed55039bbe35f06b3117c4d3adb5b355d7->leave($__internal_6fa2189172673501ee08b5099de765ed55039bbe35f06b3117c4d3adb5b355d7_prof);

        
        $__internal_20a50049a0bf219e355bef670e03fa10677301928179182ae1efd83d03ed888b->leave($__internal_20a50049a0bf219e355bef670e03fa10677301928179182ae1efd83d03ed888b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
