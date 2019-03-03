<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2349a0afbe67b23ac08220212d1f9145547fc98d734f6e2bc8798f42cf31d4b3 extends Twig_Template
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
        $__internal_e9c1aa0f2b03f04184c487513ca48051166dde64c08e76560f4551f00a247af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c1aa0f2b03f04184c487513ca48051166dde64c08e76560f4551f00a247af8->enter($__internal_e9c1aa0f2b03f04184c487513ca48051166dde64c08e76560f4551f00a247af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_fa3ec100e55900da18a00b1e8a741effd9af7d9db57afec0a93297cae4d516d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3ec100e55900da18a00b1e8a741effd9af7d9db57afec0a93297cae4d516d7->enter($__internal_fa3ec100e55900da18a00b1e8a741effd9af7d9db57afec0a93297cae4d516d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e9c1aa0f2b03f04184c487513ca48051166dde64c08e76560f4551f00a247af8->leave($__internal_e9c1aa0f2b03f04184c487513ca48051166dde64c08e76560f4551f00a247af8_prof);

        
        $__internal_fa3ec100e55900da18a00b1e8a741effd9af7d9db57afec0a93297cae4d516d7->leave($__internal_fa3ec100e55900da18a00b1e8a741effd9af7d9db57afec0a93297cae4d516d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
