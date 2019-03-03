<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8d77cb6948876e6ea96be9e560b5a126ef8b9ce84552dee46889e41d6e8562c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c2ac0b03101182350a54c280ba0f5cc99557a217d9077c2039ce4e3e9721faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2ac0b03101182350a54c280ba0f5cc99557a217d9077c2039ce4e3e9721faa->enter($__internal_9c2ac0b03101182350a54c280ba0f5cc99557a217d9077c2039ce4e3e9721faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d05a5d5beb1de874388962a388dd70e2b4b46a18b7b9cf220b662e2c0ad17c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05a5d5beb1de874388962a388dd70e2b4b46a18b7b9cf220b662e2c0ad17c55->enter($__internal_d05a5d5beb1de874388962a388dd70e2b4b46a18b7b9cf220b662e2c0ad17c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2ac0b03101182350a54c280ba0f5cc99557a217d9077c2039ce4e3e9721faa->leave($__internal_9c2ac0b03101182350a54c280ba0f5cc99557a217d9077c2039ce4e3e9721faa_prof);

        
        $__internal_d05a5d5beb1de874388962a388dd70e2b4b46a18b7b9cf220b662e2c0ad17c55->leave($__internal_d05a5d5beb1de874388962a388dd70e2b4b46a18b7b9cf220b662e2c0ad17c55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0e4c5366d8f50152490d121c57b9bb2b24fbd73c3f57f5af364d2ee5c2e2dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e4c5366d8f50152490d121c57b9bb2b24fbd73c3f57f5af364d2ee5c2e2dd0->enter($__internal_a0e4c5366d8f50152490d121c57b9bb2b24fbd73c3f57f5af364d2ee5c2e2dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_199134ddee33b72fb2128e1fe958d32b8ac0ed8d2734e3a5f2991ec9ae5f3300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199134ddee33b72fb2128e1fe958d32b8ac0ed8d2734e3a5f2991ec9ae5f3300->enter($__internal_199134ddee33b72fb2128e1fe958d32b8ac0ed8d2734e3a5f2991ec9ae5f3300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_199134ddee33b72fb2128e1fe958d32b8ac0ed8d2734e3a5f2991ec9ae5f3300->leave($__internal_199134ddee33b72fb2128e1fe958d32b8ac0ed8d2734e3a5f2991ec9ae5f3300_prof);

        
        $__internal_a0e4c5366d8f50152490d121c57b9bb2b24fbd73c3f57f5af364d2ee5c2e2dd0->leave($__internal_a0e4c5366d8f50152490d121c57b9bb2b24fbd73c3f57f5af364d2ee5c2e2dd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbdea92d2b9b331625e39b8d7734242ccbfab4a08bd95b4806658568d802e289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdea92d2b9b331625e39b8d7734242ccbfab4a08bd95b4806658568d802e289->enter($__internal_bbdea92d2b9b331625e39b8d7734242ccbfab4a08bd95b4806658568d802e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77d87959033cd4a8efb5a134726d466b013f57db2c6fab34aff96ccde869e151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d87959033cd4a8efb5a134726d466b013f57db2c6fab34aff96ccde869e151->enter($__internal_77d87959033cd4a8efb5a134726d466b013f57db2c6fab34aff96ccde869e151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_77d87959033cd4a8efb5a134726d466b013f57db2c6fab34aff96ccde869e151->leave($__internal_77d87959033cd4a8efb5a134726d466b013f57db2c6fab34aff96ccde869e151_prof);

        
        $__internal_bbdea92d2b9b331625e39b8d7734242ccbfab4a08bd95b4806658568d802e289->leave($__internal_bbdea92d2b9b331625e39b8d7734242ccbfab4a08bd95b4806658568d802e289_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
