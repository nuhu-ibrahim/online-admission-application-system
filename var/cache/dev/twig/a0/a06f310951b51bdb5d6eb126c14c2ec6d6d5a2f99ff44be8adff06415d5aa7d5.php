<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9ebadddb7d8b98de454d27ac5f9531afcf7d1f57744c5b5af354581df147ba33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_8711d96935e7a9f511c57a70ac0d3a444b84a36db9552af5f301f4ebaacc185e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8711d96935e7a9f511c57a70ac0d3a444b84a36db9552af5f301f4ebaacc185e->enter($__internal_8711d96935e7a9f511c57a70ac0d3a444b84a36db9552af5f301f4ebaacc185e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_fc46bfe36a54444fd484ffc5a3ec512c553c20451f4797c444673c3054232d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc46bfe36a54444fd484ffc5a3ec512c553c20451f4797c444673c3054232d63->enter($__internal_fc46bfe36a54444fd484ffc5a3ec512c553c20451f4797c444673c3054232d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8711d96935e7a9f511c57a70ac0d3a444b84a36db9552af5f301f4ebaacc185e->leave($__internal_8711d96935e7a9f511c57a70ac0d3a444b84a36db9552af5f301f4ebaacc185e_prof);

        
        $__internal_fc46bfe36a54444fd484ffc5a3ec512c553c20451f4797c444673c3054232d63->leave($__internal_fc46bfe36a54444fd484ffc5a3ec512c553c20451f4797c444673c3054232d63_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7ff36671abf57b10fd0e396f38c31e67dbe693f3b003182005f556840aeb5428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff36671abf57b10fd0e396f38c31e67dbe693f3b003182005f556840aeb5428->enter($__internal_7ff36671abf57b10fd0e396f38c31e67dbe693f3b003182005f556840aeb5428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ca25a034e4859c95948a3ec5c7e7092ca1c892fb9d6e47c6bde84722207060d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca25a034e4859c95948a3ec5c7e7092ca1c892fb9d6e47c6bde84722207060d5->enter($__internal_ca25a034e4859c95948a3ec5c7e7092ca1c892fb9d6e47c6bde84722207060d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ca25a034e4859c95948a3ec5c7e7092ca1c892fb9d6e47c6bde84722207060d5->leave($__internal_ca25a034e4859c95948a3ec5c7e7092ca1c892fb9d6e47c6bde84722207060d5_prof);

        
        $__internal_7ff36671abf57b10fd0e396f38c31e67dbe693f3b003182005f556840aeb5428->leave($__internal_7ff36671abf57b10fd0e396f38c31e67dbe693f3b003182005f556840aeb5428_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea70c27083c25c2250481ca61d2716da4237582014352006bbd3d4de270abef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea70c27083c25c2250481ca61d2716da4237582014352006bbd3d4de270abef4->enter($__internal_ea70c27083c25c2250481ca61d2716da4237582014352006bbd3d4de270abef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6cb6cbb151ec5e19370f9e751c116588a53175105658bd63a3180a39579ea12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb6cbb151ec5e19370f9e751c116588a53175105658bd63a3180a39579ea12e->enter($__internal_6cb6cbb151ec5e19370f9e751c116588a53175105658bd63a3180a39579ea12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6cb6cbb151ec5e19370f9e751c116588a53175105658bd63a3180a39579ea12e->leave($__internal_6cb6cbb151ec5e19370f9e751c116588a53175105658bd63a3180a39579ea12e_prof);

        
        $__internal_ea70c27083c25c2250481ca61d2716da4237582014352006bbd3d4de270abef4->leave($__internal_ea70c27083c25c2250481ca61d2716da4237582014352006bbd3d4de270abef4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
