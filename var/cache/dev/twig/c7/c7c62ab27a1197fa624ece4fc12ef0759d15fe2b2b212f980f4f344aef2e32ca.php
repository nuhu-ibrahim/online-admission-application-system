<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_007ddbb7d0eba1c1746c036d4424e8bf49612a9d4c91bfa659b14afcb64fe551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_3b0638bfd7a80b63fc94a74d328de2cef66d8ee54f89f79e95041a7fb0da8658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0638bfd7a80b63fc94a74d328de2cef66d8ee54f89f79e95041a7fb0da8658->enter($__internal_3b0638bfd7a80b63fc94a74d328de2cef66d8ee54f89f79e95041a7fb0da8658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_db505c4639846af00b2f9c981db466e7597422ba6fb986b0dd889840bdca525b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db505c4639846af00b2f9c981db466e7597422ba6fb986b0dd889840bdca525b->enter($__internal_db505c4639846af00b2f9c981db466e7597422ba6fb986b0dd889840bdca525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b0638bfd7a80b63fc94a74d328de2cef66d8ee54f89f79e95041a7fb0da8658->leave($__internal_3b0638bfd7a80b63fc94a74d328de2cef66d8ee54f89f79e95041a7fb0da8658_prof);

        
        $__internal_db505c4639846af00b2f9c981db466e7597422ba6fb986b0dd889840bdca525b->leave($__internal_db505c4639846af00b2f9c981db466e7597422ba6fb986b0dd889840bdca525b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39ca02746f1ad7c8cf92d12a532207a4ae51ff902f32e05dcb1abb7612cd3a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ca02746f1ad7c8cf92d12a532207a4ae51ff902f32e05dcb1abb7612cd3a90->enter($__internal_39ca02746f1ad7c8cf92d12a532207a4ae51ff902f32e05dcb1abb7612cd3a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_720bd3eb7d9069669e5dfa578f7027336b4741101795006d23b5afb2fd2759c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720bd3eb7d9069669e5dfa578f7027336b4741101795006d23b5afb2fd2759c9->enter($__internal_720bd3eb7d9069669e5dfa578f7027336b4741101795006d23b5afb2fd2759c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_720bd3eb7d9069669e5dfa578f7027336b4741101795006d23b5afb2fd2759c9->leave($__internal_720bd3eb7d9069669e5dfa578f7027336b4741101795006d23b5afb2fd2759c9_prof);

        
        $__internal_39ca02746f1ad7c8cf92d12a532207a4ae51ff902f32e05dcb1abb7612cd3a90->leave($__internal_39ca02746f1ad7c8cf92d12a532207a4ae51ff902f32e05dcb1abb7612cd3a90_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e44253e1eab29342a706aa35a24f654cabdaa244da4951b017160a59cdbb9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e44253e1eab29342a706aa35a24f654cabdaa244da4951b017160a59cdbb9a5->enter($__internal_2e44253e1eab29342a706aa35a24f654cabdaa244da4951b017160a59cdbb9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44b958aea6811e9adbe996fb22c852c594b926e57befdf550d579f942b6a54b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b958aea6811e9adbe996fb22c852c594b926e57befdf550d579f942b6a54b8->enter($__internal_44b958aea6811e9adbe996fb22c852c594b926e57befdf550d579f942b6a54b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_44b958aea6811e9adbe996fb22c852c594b926e57befdf550d579f942b6a54b8->leave($__internal_44b958aea6811e9adbe996fb22c852c594b926e57befdf550d579f942b6a54b8_prof);

        
        $__internal_2e44253e1eab29342a706aa35a24f654cabdaa244da4951b017160a59cdbb9a5->leave($__internal_2e44253e1eab29342a706aa35a24f654cabdaa244da4951b017160a59cdbb9a5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fd8dab94852363500ca41a58bc28a0e498d2e64f78d1a6c306bb11573a81972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd8dab94852363500ca41a58bc28a0e498d2e64f78d1a6c306bb11573a81972->enter($__internal_2fd8dab94852363500ca41a58bc28a0e498d2e64f78d1a6c306bb11573a81972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd5357b9d94b3d6a6fa59ec3aa30ecad50b986be2936576bdb2efe56d2245239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5357b9d94b3d6a6fa59ec3aa30ecad50b986be2936576bdb2efe56d2245239->enter($__internal_cd5357b9d94b3d6a6fa59ec3aa30ecad50b986be2936576bdb2efe56d2245239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cd5357b9d94b3d6a6fa59ec3aa30ecad50b986be2936576bdb2efe56d2245239->leave($__internal_cd5357b9d94b3d6a6fa59ec3aa30ecad50b986be2936576bdb2efe56d2245239_prof);

        
        $__internal_2fd8dab94852363500ca41a58bc28a0e498d2e64f78d1a6c306bb11573a81972->leave($__internal_2fd8dab94852363500ca41a58bc28a0e498d2e64f78d1a6c306bb11573a81972_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
