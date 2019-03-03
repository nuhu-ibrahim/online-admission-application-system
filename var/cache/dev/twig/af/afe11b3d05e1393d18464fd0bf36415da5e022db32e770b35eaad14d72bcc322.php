<?php

/* home/indexStudent.html.twig */
class __TwigTemplate_e65f32b2ba4171568ce298a461f439b5eaae3eb835fdfff90eff9bedc32b5f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", "home/indexStudent.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ubase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79bbc89073dc074301de5a45e2e1aac5481ca284a8019a242de758e2d15e19d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bbc89073dc074301de5a45e2e1aac5481ca284a8019a242de758e2d15e19d7->enter($__internal_79bbc89073dc074301de5a45e2e1aac5481ca284a8019a242de758e2d15e19d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/indexStudent.html.twig"));

        $__internal_8d7b75adff66ed6236145db0ed1f585c41246c797c2272e439e8812c83b520bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7b75adff66ed6236145db0ed1f585c41246c797c2272e439e8812c83b520bb->enter($__internal_8d7b75adff66ed6236145db0ed1f585c41246c797c2272e439e8812c83b520bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/indexStudent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79bbc89073dc074301de5a45e2e1aac5481ca284a8019a242de758e2d15e19d7->leave($__internal_79bbc89073dc074301de5a45e2e1aac5481ca284a8019a242de758e2d15e19d7_prof);

        
        $__internal_8d7b75adff66ed6236145db0ed1f585c41246c797c2272e439e8812c83b520bb->leave($__internal_8d7b75adff66ed6236145db0ed1f585c41246c797c2272e439e8812c83b520bb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_18e640a4efc93a1d5f572d18a96f572906b08236aa644bedafcc0f17580e5d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e640a4efc93a1d5f572d18a96f572906b08236aa644bedafcc0f17580e5d34->enter($__internal_18e640a4efc93a1d5f572d18a96f572906b08236aa644bedafcc0f17580e5d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e56abe1a7dee965ca9c5d6500bc432c29ef600a90a02882d378cd5930865a25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56abe1a7dee965ca9c5d6500bc432c29ef600a90a02882d378cd5930865a25f->enter($__internal_e56abe1a7dee965ca9c5d6500bc432c29ef600a90a02882d378cd5930865a25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            
        </div>
        <div class=\"col-md-6 col-md-offset-1\"> 
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("continueReg");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Continue Online Application</a>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editLog");
        echo "\" class=\"list-group-item active\"  style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Edit Online Application</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addStatus");
        echo "\" class=\"list-group-item active\">Check Admission Status</a>
            </div>
        </div>
    </div>
";
        
        $__internal_e56abe1a7dee965ca9c5d6500bc432c29ef600a90a02882d378cd5930865a25f->leave($__internal_e56abe1a7dee965ca9c5d6500bc432c29ef600a90a02882d378cd5930865a25f_prof);

        
        $__internal_18e640a4efc93a1d5f572d18a96f572906b08236aa644bedafcc0f17580e5d34->leave($__internal_18e640a4efc93a1d5f572d18a96f572906b08236aa644bedafcc0f17580e5d34_prof);

    }

    public function getTemplateName()
    {
        return "home/indexStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ubase.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            
        </div>
        <div class=\"col-md-6 col-md-offset-1\"> 
            <div class=\"list-group\">
                <a href=\"{{ url(\"continueReg\") }}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Continue Online Application</a>
                <a href=\"{{ url(\"editLog\") }}\" class=\"list-group-item active\"  style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Edit Online Application</a>
                <a href=\"{{ url(\"addStatus\") }}\" class=\"list-group-item active\">Check Admission Status</a>
            </div>
        </div>
    </div>
{% endblock %}
", "home/indexStudent.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\home\\indexStudent.html.twig");
    }
}
