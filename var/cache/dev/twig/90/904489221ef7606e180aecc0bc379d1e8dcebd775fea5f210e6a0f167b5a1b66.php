<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3acac5513e4f808676fa14ae85cf19cecb8887283daf40c7a75bf9e29bc0c78a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_7923392217094ac7fbc944884f271f724d74c3e3756e728931abd2ad9da73bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7923392217094ac7fbc944884f271f724d74c3e3756e728931abd2ad9da73bae->enter($__internal_7923392217094ac7fbc944884f271f724d74c3e3756e728931abd2ad9da73bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6a435291ee5723d62146bc9960be2e00c3cb4511748a465997757392600aac04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a435291ee5723d62146bc9960be2e00c3cb4511748a465997757392600aac04->enter($__internal_6a435291ee5723d62146bc9960be2e00c3cb4511748a465997757392600aac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7923392217094ac7fbc944884f271f724d74c3e3756e728931abd2ad9da73bae->leave($__internal_7923392217094ac7fbc944884f271f724d74c3e3756e728931abd2ad9da73bae_prof);

        
        $__internal_6a435291ee5723d62146bc9960be2e00c3cb4511748a465997757392600aac04->leave($__internal_6a435291ee5723d62146bc9960be2e00c3cb4511748a465997757392600aac04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a34890c26cb3f4ec7233b4696fa2e56eb10518295820aab66a80c66a5245c929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34890c26cb3f4ec7233b4696fa2e56eb10518295820aab66a80c66a5245c929->enter($__internal_a34890c26cb3f4ec7233b4696fa2e56eb10518295820aab66a80c66a5245c929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0fde51921891739a253f87f0924d767e4defa57cea4f0d7026abf3afbdfe104e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fde51921891739a253f87f0924d767e4defa57cea4f0d7026abf3afbdfe104e->enter($__internal_0fde51921891739a253f87f0924d767e4defa57cea4f0d7026abf3afbdfe104e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fde51921891739a253f87f0924d767e4defa57cea4f0d7026abf3afbdfe104e->leave($__internal_0fde51921891739a253f87f0924d767e4defa57cea4f0d7026abf3afbdfe104e_prof);

        
        $__internal_a34890c26cb3f4ec7233b4696fa2e56eb10518295820aab66a80c66a5245c929->leave($__internal_a34890c26cb3f4ec7233b4696fa2e56eb10518295820aab66a80c66a5245c929_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e35eebbae4ee71b6ec2b528ecaa5720ab0cacbdea375159238904f87bd6b19fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35eebbae4ee71b6ec2b528ecaa5720ab0cacbdea375159238904f87bd6b19fe->enter($__internal_e35eebbae4ee71b6ec2b528ecaa5720ab0cacbdea375159238904f87bd6b19fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ace9abf481b66217a15c5ca6d228bbcc65be129718c559b7b3b40e851f865b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ace9abf481b66217a15c5ca6d228bbcc65be129718c559b7b3b40e851f865b0->enter($__internal_0ace9abf481b66217a15c5ca6d228bbcc65be129718c559b7b3b40e851f865b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ace9abf481b66217a15c5ca6d228bbcc65be129718c559b7b3b40e851f865b0->leave($__internal_0ace9abf481b66217a15c5ca6d228bbcc65be129718c559b7b3b40e851f865b0_prof);

        
        $__internal_e35eebbae4ee71b6ec2b528ecaa5720ab0cacbdea375159238904f87bd6b19fe->leave($__internal_e35eebbae4ee71b6ec2b528ecaa5720ab0cacbdea375159238904f87bd6b19fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a659e31f3ac2ef74fde014b1e82950fba96e0cd9f7800937292db8aef4a15b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a659e31f3ac2ef74fde014b1e82950fba96e0cd9f7800937292db8aef4a15b49->enter($__internal_a659e31f3ac2ef74fde014b1e82950fba96e0cd9f7800937292db8aef4a15b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18c154a67102bae65fd6f22dc32382266a01f235db710fb1f214a1ba28a13bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c154a67102bae65fd6f22dc32382266a01f235db710fb1f214a1ba28a13bcc->enter($__internal_18c154a67102bae65fd6f22dc32382266a01f235db710fb1f214a1ba28a13bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18c154a67102bae65fd6f22dc32382266a01f235db710fb1f214a1ba28a13bcc->leave($__internal_18c154a67102bae65fd6f22dc32382266a01f235db710fb1f214a1ba28a13bcc_prof);

        
        $__internal_a659e31f3ac2ef74fde014b1e82950fba96e0cd9f7800937292db8aef4a15b49->leave($__internal_a659e31f3ac2ef74fde014b1e82950fba96e0cd9f7800937292db8aef4a15b49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
