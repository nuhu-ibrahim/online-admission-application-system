<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ac126946ac28a78cf71ef24b269e70e893c1f1a24b9a35a2db1cae6f71bd2ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_c8186bc12a2093271e69c17bbec72ea8f8d1b0f777d5a698fc6a64d18c3eab97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8186bc12a2093271e69c17bbec72ea8f8d1b0f777d5a698fc6a64d18c3eab97->enter($__internal_c8186bc12a2093271e69c17bbec72ea8f8d1b0f777d5a698fc6a64d18c3eab97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_4dfc99df801c261e214c8fec4691a466f941662feb720816e75085a5aa6d16fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfc99df801c261e214c8fec4691a466f941662feb720816e75085a5aa6d16fd->enter($__internal_4dfc99df801c261e214c8fec4691a466f941662feb720816e75085a5aa6d16fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8186bc12a2093271e69c17bbec72ea8f8d1b0f777d5a698fc6a64d18c3eab97->leave($__internal_c8186bc12a2093271e69c17bbec72ea8f8d1b0f777d5a698fc6a64d18c3eab97_prof);

        
        $__internal_4dfc99df801c261e214c8fec4691a466f941662feb720816e75085a5aa6d16fd->leave($__internal_4dfc99df801c261e214c8fec4691a466f941662feb720816e75085a5aa6d16fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c02459a1de704a23febdf9723d3b71a605b854e33a8e610a0193162d27b523a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c02459a1de704a23febdf9723d3b71a605b854e33a8e610a0193162d27b523a->enter($__internal_4c02459a1de704a23febdf9723d3b71a605b854e33a8e610a0193162d27b523a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7ae2563bb8034be6727e44a1608b6c7eab49667174fa39dd308f6019882ee97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ae2563bb8034be6727e44a1608b6c7eab49667174fa39dd308f6019882ee97->enter($__internal_f7ae2563bb8034be6727e44a1608b6c7eab49667174fa39dd308f6019882ee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f7ae2563bb8034be6727e44a1608b6c7eab49667174fa39dd308f6019882ee97->leave($__internal_f7ae2563bb8034be6727e44a1608b6c7eab49667174fa39dd308f6019882ee97_prof);

        
        $__internal_4c02459a1de704a23febdf9723d3b71a605b854e33a8e610a0193162d27b523a->leave($__internal_4c02459a1de704a23febdf9723d3b71a605b854e33a8e610a0193162d27b523a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
