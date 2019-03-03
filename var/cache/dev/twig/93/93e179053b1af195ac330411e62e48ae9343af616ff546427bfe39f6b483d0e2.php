<?php

/* home/uadmission.html.twig */
class __TwigTemplate_5801e4d745e124073e35f3faf71ad2b9abae5549508c34d1b0f40c265dfbebd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", "home/uadmission.html.twig", 1);
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
        $__internal_d075af7eedbac409fa686e7af8f571f9c101e01f6236aa09cffc75d6602d362b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d075af7eedbac409fa686e7af8f571f9c101e01f6236aa09cffc75d6602d362b->enter($__internal_d075af7eedbac409fa686e7af8f571f9c101e01f6236aa09cffc75d6602d362b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/uadmission.html.twig"));

        $__internal_823170654489f03f7b2b07501afa52ff9a844c825bbc489a8bf79365d33a9ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823170654489f03f7b2b07501afa52ff9a844c825bbc489a8bf79365d33a9ab2->enter($__internal_823170654489f03f7b2b07501afa52ff9a844c825bbc489a8bf79365d33a9ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/uadmission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d075af7eedbac409fa686e7af8f571f9c101e01f6236aa09cffc75d6602d362b->leave($__internal_d075af7eedbac409fa686e7af8f571f9c101e01f6236aa09cffc75d6602d362b_prof);

        
        $__internal_823170654489f03f7b2b07501afa52ff9a844c825bbc489a8bf79365d33a9ab2->leave($__internal_823170654489f03f7b2b07501afa52ff9a844c825bbc489a8bf79365d33a9ab2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_734ee5e32ac841ff31c849b57fa7c294d3a9618ff181e1a74eafeebe1f534a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734ee5e32ac841ff31c849b57fa7c294d3a9618ff181e1a74eafeebe1f534a7e->enter($__internal_734ee5e32ac841ff31c849b57fa7c294d3a9618ff181e1a74eafeebe1f534a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d16683a42307af88dc8b6cc22f425efc270384b54a2b78d4c62c3944a52afaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16683a42307af88dc8b6cc22f425efc270384b54a2b78d4c62c3944a52afaef->enter($__internal_d16683a42307af88dc8b6cc22f425efc270384b54a2b78d4c62c3944a52afaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d16683a42307af88dc8b6cc22f425efc270384b54a2b78d4c62c3944a52afaef->leave($__internal_d16683a42307af88dc8b6cc22f425efc270384b54a2b78d4c62c3944a52afaef_prof);

        
        $__internal_734ee5e32ac841ff31c849b57fa7c294d3a9618ff181e1a74eafeebe1f534a7e->leave($__internal_734ee5e32ac841ff31c849b57fa7c294d3a9618ff181e1a74eafeebe1f534a7e_prof);

    }

    public function getTemplateName()
    {
        return "home/uadmission.html.twig";
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
", "home/uadmission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\home\\uadmission.html.twig");
    }
}
