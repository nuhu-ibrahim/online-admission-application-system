<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6c62b7404bcd9f2457cc27fa3e17d46929e8088c53b1a23efae1604d8228435d extends Twig_Template
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
        $__internal_e0b0edcbe4f5df70fe806131100f5645fd58bc10fac6d7edf952578c185d04d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b0edcbe4f5df70fe806131100f5645fd58bc10fac6d7edf952578c185d04d9->enter($__internal_e0b0edcbe4f5df70fe806131100f5645fd58bc10fac6d7edf952578c185d04d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2489a7ef8e3472cde0745b626ad43c9ced8434445ce64aea9b42dce3305173cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2489a7ef8e3472cde0745b626ad43c9ced8434445ce64aea9b42dce3305173cf->enter($__internal_2489a7ef8e3472cde0745b626ad43c9ced8434445ce64aea9b42dce3305173cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_e0b0edcbe4f5df70fe806131100f5645fd58bc10fac6d7edf952578c185d04d9->leave($__internal_e0b0edcbe4f5df70fe806131100f5645fd58bc10fac6d7edf952578c185d04d9_prof);

        
        $__internal_2489a7ef8e3472cde0745b626ad43c9ced8434445ce64aea9b42dce3305173cf->leave($__internal_2489a7ef8e3472cde0745b626ad43c9ced8434445ce64aea9b42dce3305173cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
