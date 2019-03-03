<?php

/* :home:index.html.twig */
class __TwigTemplate_5293f7b5470002f1c3ad49cb00c9bba9ffc9f5c9cabcfd46bf87b068a5d63468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac6197cb5547e8298faf82c6e2d6d322af9c0bcb7ba5e06530c524f443ff3d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6197cb5547e8298faf82c6e2d6d322af9c0bcb7ba5e06530c524f443ff3d20->enter($__internal_ac6197cb5547e8298faf82c6e2d6d322af9c0bcb7ba5e06530c524f443ff3d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:index.html.twig"));

        $__internal_413fed8031e49cfabb78f552c4332e870815ca1f9c7f16bcd19eecb04f421af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413fed8031e49cfabb78f552c4332e870815ca1f9c7f16bcd19eecb04f421af3->enter($__internal_413fed8031e49cfabb78f552c4332e870815ca1f9c7f16bcd19eecb04f421af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6197cb5547e8298faf82c6e2d6d322af9c0bcb7ba5e06530c524f443ff3d20->leave($__internal_ac6197cb5547e8298faf82c6e2d6d322af9c0bcb7ba5e06530c524f443ff3d20_prof);

        
        $__internal_413fed8031e49cfabb78f552c4332e870815ca1f9c7f16bcd19eecb04f421af3->leave($__internal_413fed8031e49cfabb78f552c4332e870815ca1f9c7f16bcd19eecb04f421af3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1702e98c8897563507d4f76009ae164cd0def9e929ee13b9632440cc9d004358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1702e98c8897563507d4f76009ae164cd0def9e929ee13b9632440cc9d004358->enter($__internal_1702e98c8897563507d4f76009ae164cd0def9e929ee13b9632440cc9d004358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3a948b0bf884bfadb790d246243292f261f5d699a2dca5939f668a6c7d84e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a948b0bf884bfadb790d246243292f261f5d699a2dca5939f668a6c7d84e18->enter($__internal_d3a948b0bf884bfadb790d246243292f261f5d699a2dca5939f668a6c7d84e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            
        </div>
        <div class=\"col-md-6 col-md-offset-1\"> 
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("startReg");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Start Online Application</a>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("continueReg");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Continue Online Application</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editLog");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Edit Online Application</a>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addStatus");
        echo "\" class=\"list-group-item active\">Check Admission Status</a>
            </div>
        </div>
    </div>
";
        
        $__internal_d3a948b0bf884bfadb790d246243292f261f5d699a2dca5939f668a6c7d84e18->leave($__internal_d3a948b0bf884bfadb790d246243292f261f5d699a2dca5939f668a6c7d84e18_prof);

        
        $__internal_1702e98c8897563507d4f76009ae164cd0def9e929ee13b9632440cc9d004358->leave($__internal_1702e98c8897563507d4f76009ae164cd0def9e929ee13b9632440cc9d004358_prof);

    }

    public function getTemplateName()
    {
        return ":home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  65 => 11,  61 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            
        </div>
        <div class=\"col-md-6 col-md-offset-1\"> 
            <div class=\"list-group\">
                <a href=\"{{ url(\"startReg\") }}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Start Online Application</a>
                <a href=\"{{ url(\"continueReg\") }}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Continue Online Application</a>
                <a href=\"{{ url(\"editLog\") }}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Edit Online Application</a>
                <a href=\"{{ url(\"addStatus\") }}\" class=\"list-group-item active\">Check Admission Status</a>
            </div>
        </div>
    </div>
{% endblock %}
", ":home:index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/home/index.html.twig");
    }
}
