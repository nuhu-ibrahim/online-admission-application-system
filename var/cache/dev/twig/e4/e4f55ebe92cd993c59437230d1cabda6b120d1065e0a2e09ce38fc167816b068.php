<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cd273c88bdd96db15069e273b71c304d481d40144d51a85aebb6a58f4642bc8c extends Twig_Template
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
        $__internal_531896e9d2a69f6722f382b4d7b7caa36d0db35da18d2090e6199086c83fad61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531896e9d2a69f6722f382b4d7b7caa36d0db35da18d2090e6199086c83fad61->enter($__internal_531896e9d2a69f6722f382b4d7b7caa36d0db35da18d2090e6199086c83fad61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_0e27a7170e492b76ac0e12656f8288bee780b2207c6a36d14ab1e3628a7b3180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e27a7170e492b76ac0e12656f8288bee780b2207c6a36d14ab1e3628a7b3180->enter($__internal_0e27a7170e492b76ac0e12656f8288bee780b2207c6a36d14ab1e3628a7b3180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_531896e9d2a69f6722f382b4d7b7caa36d0db35da18d2090e6199086c83fad61->leave($__internal_531896e9d2a69f6722f382b4d7b7caa36d0db35da18d2090e6199086c83fad61_prof);

        
        $__internal_0e27a7170e492b76ac0e12656f8288bee780b2207c6a36d14ab1e3628a7b3180->leave($__internal_0e27a7170e492b76ac0e12656f8288bee780b2207c6a36d14ab1e3628a7b3180_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
