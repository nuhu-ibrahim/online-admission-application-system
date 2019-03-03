<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d1210ded42540a029420d10b9a5f918a2a68323d37e61c50375d1094b8ba7d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_ee582861df8dcea3dee22a1f7771232f0e5b76fe37253df9c2439c5c1fb21bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee582861df8dcea3dee22a1f7771232f0e5b76fe37253df9c2439c5c1fb21bf9->enter($__internal_ee582861df8dcea3dee22a1f7771232f0e5b76fe37253df9c2439c5c1fb21bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e953ceb1586809d7e7f7bd438360c490c7e4b3ad876783edfeefffa0e675f601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e953ceb1586809d7e7f7bd438360c490c7e4b3ad876783edfeefffa0e675f601->enter($__internal_e953ceb1586809d7e7f7bd438360c490c7e4b3ad876783edfeefffa0e675f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee582861df8dcea3dee22a1f7771232f0e5b76fe37253df9c2439c5c1fb21bf9->leave($__internal_ee582861df8dcea3dee22a1f7771232f0e5b76fe37253df9c2439c5c1fb21bf9_prof);

        
        $__internal_e953ceb1586809d7e7f7bd438360c490c7e4b3ad876783edfeefffa0e675f601->leave($__internal_e953ceb1586809d7e7f7bd438360c490c7e4b3ad876783edfeefffa0e675f601_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c58ee6a7f3715773f4c91b1296b56adda38471721e722f040e9504c5099ff4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58ee6a7f3715773f4c91b1296b56adda38471721e722f040e9504c5099ff4ea->enter($__internal_c58ee6a7f3715773f4c91b1296b56adda38471721e722f040e9504c5099ff4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ea276c8b7cf55ad168d0c650c6de90d7634952b32641731befc367c181fe5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea276c8b7cf55ad168d0c650c6de90d7634952b32641731befc367c181fe5bd->enter($__internal_5ea276c8b7cf55ad168d0c650c6de90d7634952b32641731befc367c181fe5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5ea276c8b7cf55ad168d0c650c6de90d7634952b32641731befc367c181fe5bd->leave($__internal_5ea276c8b7cf55ad168d0c650c6de90d7634952b32641731befc367c181fe5bd_prof);

        
        $__internal_c58ee6a7f3715773f4c91b1296b56adda38471721e722f040e9504c5099ff4ea->leave($__internal_c58ee6a7f3715773f4c91b1296b56adda38471721e722f040e9504c5099ff4ea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_97428e6bb3f9671218aead7dd86a668f899f61d9b73cd2fbf6f2dccac1c10525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97428e6bb3f9671218aead7dd86a668f899f61d9b73cd2fbf6f2dccac1c10525->enter($__internal_97428e6bb3f9671218aead7dd86a668f899f61d9b73cd2fbf6f2dccac1c10525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3af51083e1ce2e681a9344d96db480992ec16787d060432b67149ba40b34b11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af51083e1ce2e681a9344d96db480992ec16787d060432b67149ba40b34b11a->enter($__internal_3af51083e1ce2e681a9344d96db480992ec16787d060432b67149ba40b34b11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3af51083e1ce2e681a9344d96db480992ec16787d060432b67149ba40b34b11a->leave($__internal_3af51083e1ce2e681a9344d96db480992ec16787d060432b67149ba40b34b11a_prof);

        
        $__internal_97428e6bb3f9671218aead7dd86a668f899f61d9b73cd2fbf6f2dccac1c10525->leave($__internal_97428e6bb3f9671218aead7dd86a668f899f61d9b73cd2fbf6f2dccac1c10525_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
