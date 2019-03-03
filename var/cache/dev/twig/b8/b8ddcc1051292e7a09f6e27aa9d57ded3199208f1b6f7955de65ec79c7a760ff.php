<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_5cc2b24f2b720b33510588c288f6f61b06cf8973379b60e7e47093f78b1ac8a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c26e53a11697b3bac2ab3cefe98e72392606e03865a5cb9c58da745341bff3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26e53a11697b3bac2ab3cefe98e72392606e03865a5cb9c58da745341bff3fa->enter($__internal_c26e53a11697b3bac2ab3cefe98e72392606e03865a5cb9c58da745341bff3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d8ff9ba71289c1a2735317c8febdbdcc8d3906da416c5aeec667003ff69ac1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ff9ba71289c1a2735317c8febdbdcc8d3906da416c5aeec667003ff69ac1d2->enter($__internal_d8ff9ba71289c1a2735317c8febdbdcc8d3906da416c5aeec667003ff69ac1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c26e53a11697b3bac2ab3cefe98e72392606e03865a5cb9c58da745341bff3fa->leave($__internal_c26e53a11697b3bac2ab3cefe98e72392606e03865a5cb9c58da745341bff3fa_prof);

        
        $__internal_d8ff9ba71289c1a2735317c8febdbdcc8d3906da416c5aeec667003ff69ac1d2->leave($__internal_d8ff9ba71289c1a2735317c8febdbdcc8d3906da416c5aeec667003ff69ac1d2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2128ceeae6edf500bc9977ad715ea1e1ba42b271aab64434d7e7bd7e72e6497a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2128ceeae6edf500bc9977ad715ea1e1ba42b271aab64434d7e7bd7e72e6497a->enter($__internal_2128ceeae6edf500bc9977ad715ea1e1ba42b271aab64434d7e7bd7e72e6497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e764f94e6f99fac83050fe3902eeef67aabd746ade0ab9c5901e9c41d19edbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e764f94e6f99fac83050fe3902eeef67aabd746ade0ab9c5901e9c41d19edbcf->enter($__internal_e764f94e6f99fac83050fe3902eeef67aabd746ade0ab9c5901e9c41d19edbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e764f94e6f99fac83050fe3902eeef67aabd746ade0ab9c5901e9c41d19edbcf->leave($__internal_e764f94e6f99fac83050fe3902eeef67aabd746ade0ab9c5901e9c41d19edbcf_prof);

        
        $__internal_2128ceeae6edf500bc9977ad715ea1e1ba42b271aab64434d7e7bd7e72e6497a->leave($__internal_2128ceeae6edf500bc9977ad715ea1e1ba42b271aab64434d7e7bd7e72e6497a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe36713424e39b4f4c79de395f280e2e18bc8844cd8c0181406dc52d73594b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe36713424e39b4f4c79de395f280e2e18bc8844cd8c0181406dc52d73594b74->enter($__internal_fe36713424e39b4f4c79de395f280e2e18bc8844cd8c0181406dc52d73594b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e70e729c4520ab3ec3b311fe2a6aa94d749f34e82520661d1414eac3f82fa7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70e729c4520ab3ec3b311fe2a6aa94d749f34e82520661d1414eac3f82fa7c9->enter($__internal_e70e729c4520ab3ec3b311fe2a6aa94d749f34e82520661d1414eac3f82fa7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e70e729c4520ab3ec3b311fe2a6aa94d749f34e82520661d1414eac3f82fa7c9->leave($__internal_e70e729c4520ab3ec3b311fe2a6aa94d749f34e82520661d1414eac3f82fa7c9_prof);

        
        $__internal_fe36713424e39b4f4c79de395f280e2e18bc8844cd8c0181406dc52d73594b74->leave($__internal_fe36713424e39b4f4c79de395f280e2e18bc8844cd8c0181406dc52d73594b74_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
