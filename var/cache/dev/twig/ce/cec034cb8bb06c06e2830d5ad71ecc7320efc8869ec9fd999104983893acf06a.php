<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_395b1ce59036f2f07933fb345c24f32cf12192374b59a62d378102d0bd0bb38c extends Twig_Template
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
        $__internal_af1d53c953914457d81e8c0daa830028c84cb75c2828bc73c679b4884af11576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1d53c953914457d81e8c0daa830028c84cb75c2828bc73c679b4884af11576->enter($__internal_af1d53c953914457d81e8c0daa830028c84cb75c2828bc73c679b4884af11576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_cf7e6897d4a3ac04497cfd1becf3b4d21399665e987b1d80f43dabd909ac7652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7e6897d4a3ac04497cfd1becf3b4d21399665e987b1d80f43dabd909ac7652->enter($__internal_cf7e6897d4a3ac04497cfd1becf3b4d21399665e987b1d80f43dabd909ac7652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_af1d53c953914457d81e8c0daa830028c84cb75c2828bc73c679b4884af11576->leave($__internal_af1d53c953914457d81e8c0daa830028c84cb75c2828bc73c679b4884af11576_prof);

        
        $__internal_cf7e6897d4a3ac04497cfd1becf3b4d21399665e987b1d80f43dabd909ac7652->leave($__internal_cf7e6897d4a3ac04497cfd1becf3b4d21399665e987b1d80f43dabd909ac7652_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
