<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4c9c633d2629dec8b2d2db41d73bbedf9cd477012fee4d62822d25a112b8ff19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_638720575df152a21e69c387adbe2591b53e67690de1fe6442937ecb774f282c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638720575df152a21e69c387adbe2591b53e67690de1fe6442937ecb774f282c->enter($__internal_638720575df152a21e69c387adbe2591b53e67690de1fe6442937ecb774f282c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5fcc26917e57d8769cfeb78ef6c11de168c7cb2fce0943ccb437790aa0efa872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcc26917e57d8769cfeb78ef6c11de168c7cb2fce0943ccb437790aa0efa872->enter($__internal_5fcc26917e57d8769cfeb78ef6c11de168c7cb2fce0943ccb437790aa0efa872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_638720575df152a21e69c387adbe2591b53e67690de1fe6442937ecb774f282c->leave($__internal_638720575df152a21e69c387adbe2591b53e67690de1fe6442937ecb774f282c_prof);

        
        $__internal_5fcc26917e57d8769cfeb78ef6c11de168c7cb2fce0943ccb437790aa0efa872->leave($__internal_5fcc26917e57d8769cfeb78ef6c11de168c7cb2fce0943ccb437790aa0efa872_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed3da3a5f77e59f13ee5a58aaae0e5c1d84ae8919d0f006b1e449d8c083a75bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3da3a5f77e59f13ee5a58aaae0e5c1d84ae8919d0f006b1e449d8c083a75bf->enter($__internal_ed3da3a5f77e59f13ee5a58aaae0e5c1d84ae8919d0f006b1e449d8c083a75bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e8e6df0d940dc8d96c1cb8a3bb27ce6c715fd36dd5ba2075d6a35e2ad2b2695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8e6df0d940dc8d96c1cb8a3bb27ce6c715fd36dd5ba2075d6a35e2ad2b2695->enter($__internal_6e8e6df0d940dc8d96c1cb8a3bb27ce6c715fd36dd5ba2075d6a35e2ad2b2695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6e8e6df0d940dc8d96c1cb8a3bb27ce6c715fd36dd5ba2075d6a35e2ad2b2695->leave($__internal_6e8e6df0d940dc8d96c1cb8a3bb27ce6c715fd36dd5ba2075d6a35e2ad2b2695_prof);

        
        $__internal_ed3da3a5f77e59f13ee5a58aaae0e5c1d84ae8919d0f006b1e449d8c083a75bf->leave($__internal_ed3da3a5f77e59f13ee5a58aaae0e5c1d84ae8919d0f006b1e449d8c083a75bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcd28002c0dcb1e6b038a4f5d3f2c0075f4a8298fe0d8da827c95b844a52e3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd28002c0dcb1e6b038a4f5d3f2c0075f4a8298fe0d8da827c95b844a52e3ea->enter($__internal_bcd28002c0dcb1e6b038a4f5d3f2c0075f4a8298fe0d8da827c95b844a52e3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b9e089450ddb24535ddbc9d316be840dcb4deb9a664b31d714478dfaee3a0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9e089450ddb24535ddbc9d316be840dcb4deb9a664b31d714478dfaee3a0d0->enter($__internal_4b9e089450ddb24535ddbc9d316be840dcb4deb9a664b31d714478dfaee3a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4b9e089450ddb24535ddbc9d316be840dcb4deb9a664b31d714478dfaee3a0d0->leave($__internal_4b9e089450ddb24535ddbc9d316be840dcb4deb9a664b31d714478dfaee3a0d0_prof);

        
        $__internal_bcd28002c0dcb1e6b038a4f5d3f2c0075f4a8298fe0d8da827c95b844a52e3ea->leave($__internal_bcd28002c0dcb1e6b038a4f5d3f2c0075f4a8298fe0d8da827c95b844a52e3ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
