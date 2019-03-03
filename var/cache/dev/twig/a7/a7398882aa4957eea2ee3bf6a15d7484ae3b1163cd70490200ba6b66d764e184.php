<?php

/* home/indexAdmin.html.twig */
class __TwigTemplate_b969fef938274556e0feb09866e8e2617ab28c62647663c5879ad05ae82264be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", "home/indexAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_778f944e3852e0285d9c15678919518d13d82b2dfa104ac1ccca4c073a060587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778f944e3852e0285d9c15678919518d13d82b2dfa104ac1ccca4c073a060587->enter($__internal_778f944e3852e0285d9c15678919518d13d82b2dfa104ac1ccca4c073a060587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/indexAdmin.html.twig"));

        $__internal_00858aab53387b0d4e91f2e5321835aab106fd6b168d7ab8af42c4ba37ed1cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00858aab53387b0d4e91f2e5321835aab106fd6b168d7ab8af42c4ba37ed1cfc->enter($__internal_00858aab53387b0d4e91f2e5321835aab106fd6b168d7ab8af42c4ba37ed1cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778f944e3852e0285d9c15678919518d13d82b2dfa104ac1ccca4c073a060587->leave($__internal_778f944e3852e0285d9c15678919518d13d82b2dfa104ac1ccca4c073a060587_prof);

        
        $__internal_00858aab53387b0d4e91f2e5321835aab106fd6b168d7ab8af42c4ba37ed1cfc->leave($__internal_00858aab53387b0d4e91f2e5321835aab106fd6b168d7ab8af42c4ba37ed1cfc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1398ed4ce2bc12208190153bdb007ac96319ae8d8ddb3659e2fcc821ee49dbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1398ed4ce2bc12208190153bdb007ac96319ae8d8ddb3659e2fcc821ee49dbf6->enter($__internal_1398ed4ce2bc12208190153bdb007ac96319ae8d8ddb3659e2fcc821ee49dbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bada2e98efb5a0798be37a53885033d24543798c3f9e3616278f25833a8abef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bada2e98efb5a0798be37a53885033d24543798c3f9e3616278f25833a8abef->enter($__internal_5bada2e98efb5a0798be37a53885033d24543798c3f9e3616278f25833a8abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            
        </div>
        <div class=\"col-md-6 col-md-offset-1\"> 
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploadlist");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Upload Admission List</a>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("viewapp");
        echo "\" class=\"list-group-item active\"  style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">View Applicants</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("download");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">Download Applications</a>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("studentinfo");
        echo "\" class=\"list-group-item active\">View Applicant's Details</a>
            </div>
        </div>
    </div>
";
        
        $__internal_5bada2e98efb5a0798be37a53885033d24543798c3f9e3616278f25833a8abef->leave($__internal_5bada2e98efb5a0798be37a53885033d24543798c3f9e3616278f25833a8abef_prof);

        
        $__internal_1398ed4ce2bc12208190153bdb007ac96319ae8d8ddb3659e2fcc821ee49dbf6->leave($__internal_1398ed4ce2bc12208190153bdb007ac96319ae8d8ddb3659e2fcc821ee49dbf6_prof);

    }

    public function getTemplateName()
    {
        return "home/indexAdmin.html.twig";
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
        return new Twig_Source("{% extends 'abase.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            
        </div>
        <div class=\"col-md-6 col-md-offset-1\"> 
            <div class=\"list-group\">
                <a href=\"{{ url(\"uploadlist\") }}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Upload Admission List</a>
                <a href=\"{{ url(\"viewapp\") }}\" class=\"list-group-item active\"  style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">View Applicants</a>
                <a href=\"{{ url(\"download\")}}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">Download Applications</a>
                <a href=\"{{ url(\"studentinfo\")}}\" class=\"list-group-item active\">View Applicant's Details</a>
            </div>
        </div>
    </div>
{% endblock %}
", "home/indexAdmin.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\online_admission_application\\app\\Resources\\views\\home\\indexAdmin.html.twig");
    }
}
