<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f6b0b017b93dff3dab2bed06f93470517b6cf4d015368738462c0f0b26a4f1c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcf4a837dfb3d4a050af90a5ec22fd0693d0fc13934e2b10765ac3f0bee1c6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf4a837dfb3d4a050af90a5ec22fd0693d0fc13934e2b10765ac3f0bee1c6ad->enter($__internal_dcf4a837dfb3d4a050af90a5ec22fd0693d0fc13934e2b10765ac3f0bee1c6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_628e01dc99f372fea5e4e3177848676319cd41cda2527340695004c5db5f8920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628e01dc99f372fea5e4e3177848676319cd41cda2527340695004c5db5f8920->enter($__internal_628e01dc99f372fea5e4e3177848676319cd41cda2527340695004c5db5f8920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcf4a837dfb3d4a050af90a5ec22fd0693d0fc13934e2b10765ac3f0bee1c6ad->leave($__internal_dcf4a837dfb3d4a050af90a5ec22fd0693d0fc13934e2b10765ac3f0bee1c6ad_prof);

        
        $__internal_628e01dc99f372fea5e4e3177848676319cd41cda2527340695004c5db5f8920->leave($__internal_628e01dc99f372fea5e4e3177848676319cd41cda2527340695004c5db5f8920_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f8060a419c081cc2816108a2f580e0818274abc9657c3b59aed82cb13e4c269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8060a419c081cc2816108a2f580e0818274abc9657c3b59aed82cb13e4c269->enter($__internal_7f8060a419c081cc2816108a2f580e0818274abc9657c3b59aed82cb13e4c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1429a4f187ad6239e56f6e71f60e4c59d986d7f239581d04cf7e3c37a18b36d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1429a4f187ad6239e56f6e71f60e4c59d986d7f239581d04cf7e3c37a18b36d3->enter($__internal_1429a4f187ad6239e56f6e71f60e4c59d986d7f239581d04cf7e3c37a18b36d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1429a4f187ad6239e56f6e71f60e4c59d986d7f239581d04cf7e3c37a18b36d3->leave($__internal_1429a4f187ad6239e56f6e71f60e4c59d986d7f239581d04cf7e3c37a18b36d3_prof);

        
        $__internal_7f8060a419c081cc2816108a2f580e0818274abc9657c3b59aed82cb13e4c269->leave($__internal_7f8060a419c081cc2816108a2f580e0818274abc9657c3b59aed82cb13e4c269_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e130128da4e1b22027434ad3039fe2f9010316ae2cf4f220a878b9ecf939122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e130128da4e1b22027434ad3039fe2f9010316ae2cf4f220a878b9ecf939122->enter($__internal_0e130128da4e1b22027434ad3039fe2f9010316ae2cf4f220a878b9ecf939122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bcfc96df0b0a5d0c89ef5a52fdbac894c73ce29df012a18b418000c2a448d511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfc96df0b0a5d0c89ef5a52fdbac894c73ce29df012a18b418000c2a448d511->enter($__internal_bcfc96df0b0a5d0c89ef5a52fdbac894c73ce29df012a18b418000c2a448d511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bcfc96df0b0a5d0c89ef5a52fdbac894c73ce29df012a18b418000c2a448d511->leave($__internal_bcfc96df0b0a5d0c89ef5a52fdbac894c73ce29df012a18b418000c2a448d511_prof);

        
        $__internal_0e130128da4e1b22027434ad3039fe2f9010316ae2cf4f220a878b9ecf939122->leave($__internal_0e130128da4e1b22027434ad3039fe2f9010316ae2cf4f220a878b9ecf939122_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1773be45e064316e62d81625906b9905a2491cb34b03d2734ab04bed5b57966a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1773be45e064316e62d81625906b9905a2491cb34b03d2734ab04bed5b57966a->enter($__internal_1773be45e064316e62d81625906b9905a2491cb34b03d2734ab04bed5b57966a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e138be2a27a1f940f7d542e88173755f4f42f818668ee880949bc4cc67e2c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e138be2a27a1f940f7d542e88173755f4f42f818668ee880949bc4cc67e2c81->enter($__internal_3e138be2a27a1f940f7d542e88173755f4f42f818668ee880949bc4cc67e2c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3e138be2a27a1f940f7d542e88173755f4f42f818668ee880949bc4cc67e2c81->leave($__internal_3e138be2a27a1f940f7d542e88173755f4f42f818668ee880949bc4cc67e2c81_prof);

        
        $__internal_1773be45e064316e62d81625906b9905a2491cb34b03d2734ab04bed5b57966a->leave($__internal_1773be45e064316e62d81625906b9905a2491cb34b03d2734ab04bed5b57966a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
