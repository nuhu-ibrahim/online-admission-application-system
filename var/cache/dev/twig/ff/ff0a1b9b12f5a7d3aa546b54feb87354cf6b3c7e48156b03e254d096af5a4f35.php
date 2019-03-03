<?php

/* :home:indexStudent.html.twig */
class __TwigTemplate_3dddedb03ef9b6cdfef2e2881427d75c804d66b3f1601f6fa4dba0df79cea244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", ":home:indexStudent.html.twig", 1);
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
        $__internal_52f330100a2e6ed17904de8af8f47c005b0056b35eab903a9ed75099237c577e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f330100a2e6ed17904de8af8f47c005b0056b35eab903a9ed75099237c577e->enter($__internal_52f330100a2e6ed17904de8af8f47c005b0056b35eab903a9ed75099237c577e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:indexStudent.html.twig"));

        $__internal_86980b78b1a22baffd813e01bdb677cd121a9157994a60420c9f5c6494c1b5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86980b78b1a22baffd813e01bdb677cd121a9157994a60420c9f5c6494c1b5c4->enter($__internal_86980b78b1a22baffd813e01bdb677cd121a9157994a60420c9f5c6494c1b5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:indexStudent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f330100a2e6ed17904de8af8f47c005b0056b35eab903a9ed75099237c577e->leave($__internal_52f330100a2e6ed17904de8af8f47c005b0056b35eab903a9ed75099237c577e_prof);

        
        $__internal_86980b78b1a22baffd813e01bdb677cd121a9157994a60420c9f5c6494c1b5c4->leave($__internal_86980b78b1a22baffd813e01bdb677cd121a9157994a60420c9f5c6494c1b5c4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc9577c524c70c8249226c095c5c2f5c753f0df94a1307b337d203dc5a16a5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9577c524c70c8249226c095c5c2f5c753f0df94a1307b337d203dc5a16a5a9->enter($__internal_bc9577c524c70c8249226c095c5c2f5c753f0df94a1307b337d203dc5a16a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ded4d5e06c25419329f00ca9bc6e09c3fe6c85b7a43a504435b052a024f6ba26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded4d5e06c25419329f00ca9bc6e09c3fe6c85b7a43a504435b052a024f6ba26->enter($__internal_ded4d5e06c25419329f00ca9bc6e09c3fe6c85b7a43a504435b052a024f6ba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ded4d5e06c25419329f00ca9bc6e09c3fe6c85b7a43a504435b052a024f6ba26->leave($__internal_ded4d5e06c25419329f00ca9bc6e09c3fe6c85b7a43a504435b052a024f6ba26_prof);

        
        $__internal_bc9577c524c70c8249226c095c5c2f5c753f0df94a1307b337d203dc5a16a5a9->leave($__internal_bc9577c524c70c8249226c095c5c2f5c753f0df94a1307b337d203dc5a16a5a9_prof);

    }

    public function getTemplateName()
    {
        return ":home:indexStudent.html.twig";
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
", ":home:indexStudent.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/home/indexStudent.html.twig");
    }
}
