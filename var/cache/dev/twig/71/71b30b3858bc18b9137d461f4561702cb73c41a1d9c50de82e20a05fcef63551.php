<?php

/* :home:uadmission.html.twig */
class __TwigTemplate_d5c5713db0023c48eb048c75c49dc846fb9e4143dc69872a7d543e308c03aa97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", ":home:uadmission.html.twig", 1);
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
        $__internal_533dbaa74d38fc686ebd17154fec25286f14550ae7645c6298f330ef4bb3f8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533dbaa74d38fc686ebd17154fec25286f14550ae7645c6298f330ef4bb3f8c4->enter($__internal_533dbaa74d38fc686ebd17154fec25286f14550ae7645c6298f330ef4bb3f8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:uadmission.html.twig"));

        $__internal_dde29f630275e87bc3c7fe56aeae3da8b581f61fa3399e79c7495b24215292ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde29f630275e87bc3c7fe56aeae3da8b581f61fa3399e79c7495b24215292ca->enter($__internal_dde29f630275e87bc3c7fe56aeae3da8b581f61fa3399e79c7495b24215292ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:uadmission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533dbaa74d38fc686ebd17154fec25286f14550ae7645c6298f330ef4bb3f8c4->leave($__internal_533dbaa74d38fc686ebd17154fec25286f14550ae7645c6298f330ef4bb3f8c4_prof);

        
        $__internal_dde29f630275e87bc3c7fe56aeae3da8b581f61fa3399e79c7495b24215292ca->leave($__internal_dde29f630275e87bc3c7fe56aeae3da8b581f61fa3399e79c7495b24215292ca_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e98c06b973e9b5db7308ce92f7f3c7b7667e518fcd8c86a5689c2e7212128709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98c06b973e9b5db7308ce92f7f3c7b7667e518fcd8c86a5689c2e7212128709->enter($__internal_e98c06b973e9b5db7308ce92f7f3c7b7667e518fcd8c86a5689c2e7212128709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20738781d197aec829668553c09a16e05fdc3a8c4778de7fafeeaece243f3dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20738781d197aec829668553c09a16e05fdc3a8c4778de7fafeeaece243f3dbf->enter($__internal_20738781d197aec829668553c09a16e05fdc3a8c4778de7fafeeaece243f3dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-8 col-md-offset-2\"> 
            <p style=\"text-align:center;\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Photo0241.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"img-thumbnail\"></p>
            <p style=\"text-align:center;\">Congratulations <strong>";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "!!!</strong> <br/> You have been offered admission for a 2- Year ";
        echo twig_escape_filter($this->env, ($context["programme"] ?? $this->getContext($context, "programme")), "html", null, true);
        echo " in Kaduna Polytechnic, Kaduna.<br/> <strong>Course</strong> ";
        echo twig_escape_filter($this->env, ($context["course"] ?? $this->getContext($context, "course")), "html", null, true);
        echo " in the <strong>Department</strong> of ";
        echo twig_escape_filter($this->env, ($context["course"] ?? $this->getContext($context, "course")), "html", null, true);
        echo ".</p>
        </div>
    </div>
";
        
        $__internal_20738781d197aec829668553c09a16e05fdc3a8c4778de7fafeeaece243f3dbf->leave($__internal_20738781d197aec829668553c09a16e05fdc3a8c4778de7fafeeaece243f3dbf_prof);

        
        $__internal_e98c06b973e9b5db7308ce92f7f3c7b7667e518fcd8c86a5689c2e7212128709->leave($__internal_e98c06b973e9b5db7308ce92f7f3c7b7667e518fcd8c86a5689c2e7212128709_prof);

    }

    public function getTemplateName()
    {
        return ":home:uadmission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <div class=\"col-md-8 col-md-offset-2\"> 
            <p style=\"text-align:center;\"><img src=\"{{ asset('Photo0241.jpg') }}\" alt=\"image\" class=\"img-thumbnail\"></p>
            <p style=\"text-align:center;\">Congratulations <strong>{{ name }}!!!</strong> <br/> You have been offered admission for a 2- Year {{ programme }} in Kaduna Polytechnic, Kaduna.<br/> <strong>Course</strong> {{ course }} in the <strong>Department</strong> of {{ course }}.</p>
        </div>
    </div>
{% endblock %}
", ":home:uadmission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/home/uadmission.html.twig");
    }
}
