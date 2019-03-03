<?php

/* :home:indexAdmin.html.twig */
class __TwigTemplate_602ebeca867bf660d3d4bfc6fed7d9dba35224d82ba04ac18bd7ef4453ee126f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", ":home:indexAdmin.html.twig", 1);
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
        $__internal_d32693e88cc6593454022236934b3710a3d613216b139ad0023ad30a53c2047b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32693e88cc6593454022236934b3710a3d613216b139ad0023ad30a53c2047b->enter($__internal_d32693e88cc6593454022236934b3710a3d613216b139ad0023ad30a53c2047b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:indexAdmin.html.twig"));

        $__internal_2e3b09ee497f18d64039aa6edd880ae3c2441b648a4dac8ab198e0a5c15d35e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3b09ee497f18d64039aa6edd880ae3c2441b648a4dac8ab198e0a5c15d35e8->enter($__internal_2e3b09ee497f18d64039aa6edd880ae3c2441b648a4dac8ab198e0a5c15d35e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32693e88cc6593454022236934b3710a3d613216b139ad0023ad30a53c2047b->leave($__internal_d32693e88cc6593454022236934b3710a3d613216b139ad0023ad30a53c2047b_prof);

        
        $__internal_2e3b09ee497f18d64039aa6edd880ae3c2441b648a4dac8ab198e0a5c15d35e8->leave($__internal_2e3b09ee497f18d64039aa6edd880ae3c2441b648a4dac8ab198e0a5c15d35e8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4f04be2b365328b3a5954f363335fc17d5f9e4be48d415e78025aad4405bb2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f04be2b365328b3a5954f363335fc17d5f9e4be48d415e78025aad4405bb2f->enter($__internal_e4f04be2b365328b3a5954f363335fc17d5f9e4be48d415e78025aad4405bb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3893fe5200e4c735daa2eaf86f218156403fb20fcee685232270b9a0481d578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3893fe5200e4c735daa2eaf86f218156403fb20fcee685232270b9a0481d578->enter($__internal_c3893fe5200e4c735daa2eaf86f218156403fb20fcee685232270b9a0481d578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            
        </div>
        <div class=\"col-md-6 col-md-offset-1\"> 
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("activate");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Activate Student Payment</a>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploadlist");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Upload Admission List</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("viewapp");
        echo "\" class=\"list-group-item active\"  style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">View Applicants</a>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("download");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">Download Applications</a>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("studentinfo");
        echo "\" class=\"list-group-item active\">View Applicant's Details</a>
            </div>
        </div>
    </div>
";
        
        $__internal_c3893fe5200e4c735daa2eaf86f218156403fb20fcee685232270b9a0481d578->leave($__internal_c3893fe5200e4c735daa2eaf86f218156403fb20fcee685232270b9a0481d578_prof);

        
        $__internal_e4f04be2b365328b3a5954f363335fc17d5f9e4be48d415e78025aad4405bb2f->leave($__internal_e4f04be2b365328b3a5954f363335fc17d5f9e4be48d415e78025aad4405bb2f_prof);

    }

    public function getTemplateName()
    {
        return ":home:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
                <a href=\"{{ url(\"activate\") }}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Activate Student Payment</a>
                <a href=\"{{ url(\"uploadlist\") }}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Upload Admission List</a>
                <a href=\"{{ url(\"viewapp\") }}\" class=\"list-group-item active\"  style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">View Applicants</a>
                <a href=\"{{ url(\"download\")}}\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">Download Applications</a>
                <a href=\"{{ url(\"studentinfo\")}}\" class=\"list-group-item active\">View Applicant's Details</a>
            </div>
        </div>
    </div>
{% endblock %}
", ":home:indexAdmin.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/home/indexAdmin.html.twig");
    }
}
