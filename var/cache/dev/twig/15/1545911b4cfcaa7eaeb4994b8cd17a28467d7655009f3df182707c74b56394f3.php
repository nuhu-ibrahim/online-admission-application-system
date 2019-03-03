<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_7711557f13741ea06e8922dce65da24232bfb05b392f71f4c3be36e96eb7b742 extends Twig_Template
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
        $__internal_e060bd2d12fd724aaa47cd8ae323b6c58527452ed37362ecaa0a779bc85d30e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e060bd2d12fd724aaa47cd8ae323b6c58527452ed37362ecaa0a779bc85d30e0->enter($__internal_e060bd2d12fd724aaa47cd8ae323b6c58527452ed37362ecaa0a779bc85d30e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_3787a5f4d0436275232306c6cd61d6d74758529ccac7b7e582adb5389a847aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3787a5f4d0436275232306c6cd61d6d74758529ccac7b7e582adb5389a847aec->enter($__internal_3787a5f4d0436275232306c6cd61d6d74758529ccac7b7e582adb5389a847aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e060bd2d12fd724aaa47cd8ae323b6c58527452ed37362ecaa0a779bc85d30e0->leave($__internal_e060bd2d12fd724aaa47cd8ae323b6c58527452ed37362ecaa0a779bc85d30e0_prof);

        
        $__internal_3787a5f4d0436275232306c6cd61d6d74758529ccac7b7e582adb5389a847aec->leave($__internal_3787a5f4d0436275232306c6cd61d6d74758529ccac7b7e582adb5389a847aec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
