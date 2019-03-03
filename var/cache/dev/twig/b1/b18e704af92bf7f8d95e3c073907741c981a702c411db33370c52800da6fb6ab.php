<?php

/* home/index.html.twig */
class __TwigTemplate_e22a4eadff08247b4265731f3febe4d6dd5e3236d082b2be4b9928d2baa99dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        $__internal_3afa4368bc0b41e05edcaaade6105426d7e6ad9988d7667e827a32c72d81e91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afa4368bc0b41e05edcaaade6105426d7e6ad9988d7667e827a32c72d81e91e->enter($__internal_3afa4368bc0b41e05edcaaade6105426d7e6ad9988d7667e827a32c72d81e91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_2ba84f365a44798f18ba0e119ec603c17e68152a86e922cd507b6a750a8ad2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba84f365a44798f18ba0e119ec603c17e68152a86e922cd507b6a750a8ad2ed->enter($__internal_2ba84f365a44798f18ba0e119ec603c17e68152a86e922cd507b6a750a8ad2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3afa4368bc0b41e05edcaaade6105426d7e6ad9988d7667e827a32c72d81e91e->leave($__internal_3afa4368bc0b41e05edcaaade6105426d7e6ad9988d7667e827a32c72d81e91e_prof);

        
        $__internal_2ba84f365a44798f18ba0e119ec603c17e68152a86e922cd507b6a750a8ad2ed->leave($__internal_2ba84f365a44798f18ba0e119ec603c17e68152a86e922cd507b6a750a8ad2ed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_903597a3c601d7bf91af840976fe9d0b05409c401cbfc0fa964a5dd1ed84762a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903597a3c601d7bf91af840976fe9d0b05409c401cbfc0fa964a5dd1ed84762a->enter($__internal_903597a3c601d7bf91af840976fe9d0b05409c401cbfc0fa964a5dd1ed84762a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2f607df6210cebc6bed2dfaa21884b97ffaf825464be5b4d15d8168b49b6b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f607df6210cebc6bed2dfaa21884b97ffaf825464be5b4d15d8168b49b6b84->enter($__internal_c2f607df6210cebc6bed2dfaa21884b97ffaf825464be5b4d15d8168b49b6b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c2f607df6210cebc6bed2dfaa21884b97ffaf825464be5b4d15d8168b49b6b84->leave($__internal_c2f607df6210cebc6bed2dfaa21884b97ffaf825464be5b4d15d8168b49b6b84_prof);

        
        $__internal_903597a3c601d7bf91af840976fe9d0b05409c401cbfc0fa964a5dd1ed84762a->leave($__internal_903597a3c601d7bf91af840976fe9d0b05409c401cbfc0fa964a5dd1ed84762a_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
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
", "home/index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\home\\index.html.twig");
    }
}
