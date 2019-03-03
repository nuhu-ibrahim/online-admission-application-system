<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1b6b4779f80e8f4017c487b4c27fce8d54d1d908d994f66d7caeba8e0e96479d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6adc134cd3afc48dcb4299471e8c539aceaa94cb6fe949f18fbb92c067d3b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6adc134cd3afc48dcb4299471e8c539aceaa94cb6fe949f18fbb92c067d3b38->enter($__internal_c6adc134cd3afc48dcb4299471e8c539aceaa94cb6fe949f18fbb92c067d3b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f8fca8a3a0c3e0f6ae23f9f5eb016c78d8c2d041221c41d59f6ec12423b0677a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fca8a3a0c3e0f6ae23f9f5eb016c78d8c2d041221c41d59f6ec12423b0677a->enter($__internal_f8fca8a3a0c3e0f6ae23f9f5eb016c78d8c2d041221c41d59f6ec12423b0677a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6adc134cd3afc48dcb4299471e8c539aceaa94cb6fe949f18fbb92c067d3b38->leave($__internal_c6adc134cd3afc48dcb4299471e8c539aceaa94cb6fe949f18fbb92c067d3b38_prof);

        
        $__internal_f8fca8a3a0c3e0f6ae23f9f5eb016c78d8c2d041221c41d59f6ec12423b0677a->leave($__internal_f8fca8a3a0c3e0f6ae23f9f5eb016c78d8c2d041221c41d59f6ec12423b0677a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e998c72d62b4e6f6d85d5a078ffbd01502931185965842c57927bc4085a4606c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e998c72d62b4e6f6d85d5a078ffbd01502931185965842c57927bc4085a4606c->enter($__internal_e998c72d62b4e6f6d85d5a078ffbd01502931185965842c57927bc4085a4606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_453ea3f1bebb7169dfdbb3afe2be40ad783e45244fa0a27040c1fd759b8240f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453ea3f1bebb7169dfdbb3afe2be40ad783e45244fa0a27040c1fd759b8240f2->enter($__internal_453ea3f1bebb7169dfdbb3afe2be40ad783e45244fa0a27040c1fd759b8240f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_453ea3f1bebb7169dfdbb3afe2be40ad783e45244fa0a27040c1fd759b8240f2->leave($__internal_453ea3f1bebb7169dfdbb3afe2be40ad783e45244fa0a27040c1fd759b8240f2_prof);

        
        $__internal_e998c72d62b4e6f6d85d5a078ffbd01502931185965842c57927bc4085a4606c->leave($__internal_e998c72d62b4e6f6d85d5a078ffbd01502931185965842c57927bc4085a4606c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
