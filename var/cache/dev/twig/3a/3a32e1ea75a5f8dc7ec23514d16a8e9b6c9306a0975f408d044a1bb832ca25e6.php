<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_44f248e653ecf62d8c460f34c9e96abae4140fec0c30bc1ce30719766ff03902 extends Twig_Template
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
        $__internal_3b569fec796821fd34a8ac76ae63c7a997343d166cc29053a27fdc99434f4ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b569fec796821fd34a8ac76ae63c7a997343d166cc29053a27fdc99434f4ced->enter($__internal_3b569fec796821fd34a8ac76ae63c7a997343d166cc29053a27fdc99434f4ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_3e3bb69d4a3ad785694523b0ed2a889d9856caf1f34be185342cca60c3a79b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3bb69d4a3ad785694523b0ed2a889d9856caf1f34be185342cca60c3a79b3e->enter($__internal_3e3bb69d4a3ad785694523b0ed2a889d9856caf1f34be185342cca60c3a79b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3b569fec796821fd34a8ac76ae63c7a997343d166cc29053a27fdc99434f4ced->leave($__internal_3b569fec796821fd34a8ac76ae63c7a997343d166cc29053a27fdc99434f4ced_prof);

        
        $__internal_3e3bb69d4a3ad785694523b0ed2a889d9856caf1f34be185342cca60c3a79b3e->leave($__internal_3e3bb69d4a3ad785694523b0ed2a889d9856caf1f34be185342cca60c3a79b3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
