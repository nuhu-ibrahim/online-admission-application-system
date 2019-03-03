<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_75cd60d1be520dc51619e6c68f9a1cdb7c4017293bd8ccafad42482ed410db39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_84d66231a8225112d181034bd653817f6a18396867dd15daee97a9c16e4948b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d66231a8225112d181034bd653817f6a18396867dd15daee97a9c16e4948b7->enter($__internal_84d66231a8225112d181034bd653817f6a18396867dd15daee97a9c16e4948b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e286665d943a6c4db58736b368f8befa088ab33a17428bc1bde89c799f7db3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e286665d943a6c4db58736b368f8befa088ab33a17428bc1bde89c799f7db3be->enter($__internal_e286665d943a6c4db58736b368f8befa088ab33a17428bc1bde89c799f7db3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84d66231a8225112d181034bd653817f6a18396867dd15daee97a9c16e4948b7->leave($__internal_84d66231a8225112d181034bd653817f6a18396867dd15daee97a9c16e4948b7_prof);

        
        $__internal_e286665d943a6c4db58736b368f8befa088ab33a17428bc1bde89c799f7db3be->leave($__internal_e286665d943a6c4db58736b368f8befa088ab33a17428bc1bde89c799f7db3be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1e9dd5185fc63dce2aafaf426825d24fc00b986830cfcda80a9c134e3ff9eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e9dd5185fc63dce2aafaf426825d24fc00b986830cfcda80a9c134e3ff9eaf->enter($__internal_d1e9dd5185fc63dce2aafaf426825d24fc00b986830cfcda80a9c134e3ff9eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c3ad25dc36e443b1ae64fd00828a1058af811cdfff4960e41410bac99a10d810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ad25dc36e443b1ae64fd00828a1058af811cdfff4960e41410bac99a10d810->enter($__internal_c3ad25dc36e443b1ae64fd00828a1058af811cdfff4960e41410bac99a10d810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3ad25dc36e443b1ae64fd00828a1058af811cdfff4960e41410bac99a10d810->leave($__internal_c3ad25dc36e443b1ae64fd00828a1058af811cdfff4960e41410bac99a10d810_prof);

        
        $__internal_d1e9dd5185fc63dce2aafaf426825d24fc00b986830cfcda80a9c134e3ff9eaf->leave($__internal_d1e9dd5185fc63dce2aafaf426825d24fc00b986830cfcda80a9c134e3ff9eaf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_591477c9a1bc8fc928823b145f95844f0bc9e1dc2235d9dc59f9d34067adb027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591477c9a1bc8fc928823b145f95844f0bc9e1dc2235d9dc59f9d34067adb027->enter($__internal_591477c9a1bc8fc928823b145f95844f0bc9e1dc2235d9dc59f9d34067adb027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_146901e68594e774e888c4af71be7c45277df5b7dbc8e5e073b9d47b340cec81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146901e68594e774e888c4af71be7c45277df5b7dbc8e5e073b9d47b340cec81->enter($__internal_146901e68594e774e888c4af71be7c45277df5b7dbc8e5e073b9d47b340cec81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_146901e68594e774e888c4af71be7c45277df5b7dbc8e5e073b9d47b340cec81->leave($__internal_146901e68594e774e888c4af71be7c45277df5b7dbc8e5e073b9d47b340cec81_prof);

        
        $__internal_591477c9a1bc8fc928823b145f95844f0bc9e1dc2235d9dc59f9d34067adb027->leave($__internal_591477c9a1bc8fc928823b145f95844f0bc9e1dc2235d9dc59f9d34067adb027_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_149dabccd7f101e25e5f6e28d5a322a0871833c17993ba7b7486bd2b3f1f7e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149dabccd7f101e25e5f6e28d5a322a0871833c17993ba7b7486bd2b3f1f7e39->enter($__internal_149dabccd7f101e25e5f6e28d5a322a0871833c17993ba7b7486bd2b3f1f7e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c66a9743d28445149652895447c3ffa335d142b57cc77c3c574d263682956881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66a9743d28445149652895447c3ffa335d142b57cc77c3c574d263682956881->enter($__internal_c66a9743d28445149652895447c3ffa335d142b57cc77c3c574d263682956881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c66a9743d28445149652895447c3ffa335d142b57cc77c3c574d263682956881->leave($__internal_c66a9743d28445149652895447c3ffa335d142b57cc77c3c574d263682956881_prof);

        
        $__internal_149dabccd7f101e25e5f6e28d5a322a0871833c17993ba7b7486bd2b3f1f7e39->leave($__internal_149dabccd7f101e25e5f6e28d5a322a0871833c17993ba7b7486bd2b3f1f7e39_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
