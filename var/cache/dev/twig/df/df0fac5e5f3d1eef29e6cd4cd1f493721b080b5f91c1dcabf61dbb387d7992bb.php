<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_683ac421c4f35b4f5d19fd26d85feea6c962d68fab9668bd977df1201d419a84 extends Twig_Template
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
        $__internal_7e7504bd48b4a2657006e7412e6cc4f6aa46258196f0e110b473f7617f0615b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7504bd48b4a2657006e7412e6cc4f6aa46258196f0e110b473f7617f0615b8->enter($__internal_7e7504bd48b4a2657006e7412e6cc4f6aa46258196f0e110b473f7617f0615b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_56999ab3f01b74ed1e7f600c27ce97fd789a3ae44f190c93e8b0b4702eff198a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56999ab3f01b74ed1e7f600c27ce97fd789a3ae44f190c93e8b0b4702eff198a->enter($__internal_56999ab3f01b74ed1e7f600c27ce97fd789a3ae44f190c93e8b0b4702eff198a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7e7504bd48b4a2657006e7412e6cc4f6aa46258196f0e110b473f7617f0615b8->leave($__internal_7e7504bd48b4a2657006e7412e6cc4f6aa46258196f0e110b473f7617f0615b8_prof);

        
        $__internal_56999ab3f01b74ed1e7f600c27ce97fd789a3ae44f190c93e8b0b4702eff198a->leave($__internal_56999ab3f01b74ed1e7f600c27ce97fd789a3ae44f190c93e8b0b4702eff198a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
