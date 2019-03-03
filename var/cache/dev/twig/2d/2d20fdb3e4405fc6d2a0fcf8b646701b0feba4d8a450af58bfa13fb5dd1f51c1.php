<?php

/* :home:admission.html.twig */
class __TwigTemplate_594509fa9d0c3555bc86b43b757c06127a209fe2ad1010421f8f82e9409cc915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:admission.html.twig", 1);
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
        $__internal_efc3d73e7054fba34a5fce0f7c5bf5eae4daaa54f0bb12ed4c8867b483bb267d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc3d73e7054fba34a5fce0f7c5bf5eae4daaa54f0bb12ed4c8867b483bb267d->enter($__internal_efc3d73e7054fba34a5fce0f7c5bf5eae4daaa54f0bb12ed4c8867b483bb267d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:admission.html.twig"));

        $__internal_db93535714d2dd7327729ca8bb8821edac36cd59d99e43ec7c754a68912a3e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db93535714d2dd7327729ca8bb8821edac36cd59d99e43ec7c754a68912a3e09->enter($__internal_db93535714d2dd7327729ca8bb8821edac36cd59d99e43ec7c754a68912a3e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:admission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc3d73e7054fba34a5fce0f7c5bf5eae4daaa54f0bb12ed4c8867b483bb267d->leave($__internal_efc3d73e7054fba34a5fce0f7c5bf5eae4daaa54f0bb12ed4c8867b483bb267d_prof);

        
        $__internal_db93535714d2dd7327729ca8bb8821edac36cd59d99e43ec7c754a68912a3e09->leave($__internal_db93535714d2dd7327729ca8bb8821edac36cd59d99e43ec7c754a68912a3e09_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f27647007d0ea92736d94cc9edd4da1945f84be28bdc1d94eefb1d82cb92814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f27647007d0ea92736d94cc9edd4da1945f84be28bdc1d94eefb1d82cb92814->enter($__internal_8f27647007d0ea92736d94cc9edd4da1945f84be28bdc1d94eefb1d82cb92814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71f91d62e1b592a5db1bda21b4f33c7e397503424b92256d45a70d0306620498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f91d62e1b592a5db1bda21b4f33c7e397503424b92256d45a70d0306620498->enter($__internal_71f91d62e1b592a5db1bda21b4f33c7e397503424b92256d45a70d0306620498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71f91d62e1b592a5db1bda21b4f33c7e397503424b92256d45a70d0306620498->leave($__internal_71f91d62e1b592a5db1bda21b4f33c7e397503424b92256d45a70d0306620498_prof);

        
        $__internal_8f27647007d0ea92736d94cc9edd4da1945f84be28bdc1d94eefb1d82cb92814->leave($__internal_8f27647007d0ea92736d94cc9edd4da1945f84be28bdc1d94eefb1d82cb92814_prof);

    }

    public function getTemplateName()
    {
        return ":home:admission.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-8 col-md-offset-2\"> 
            <p style=\"text-align:center;\"><img src=\"{{ asset('Photo0241.jpg') }}\" alt=\"image\" class=\"img-thumbnail\"></p>
            <p style=\"text-align:center;\">Congratulations <strong>{{ name }}!!!</strong> <br/> You have been offered admission for a 2- Year {{ programme }} in Kaduna Polytechnic, Kaduna.<br/> <strong>Course</strong> {{ course }} in the <strong>Department</strong> of {{ course }}.</p>
        </div>
    </div>
{% endblock %}
", ":home:admission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/home/admission.html.twig");
    }
}
