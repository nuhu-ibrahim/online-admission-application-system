<?php

/* home/admission.html.twig */
class __TwigTemplate_13e3a46ec856258494f331be302dd789758b731d9eab1cde2769feeccdb97e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/admission.html.twig", 1);
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
        $__internal_ea83c467ba48a493217baf32981d264037c6b20ed1debd01acc9616c60f77c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea83c467ba48a493217baf32981d264037c6b20ed1debd01acc9616c60f77c5b->enter($__internal_ea83c467ba48a493217baf32981d264037c6b20ed1debd01acc9616c60f77c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/admission.html.twig"));

        $__internal_fa5069237d9f8e2985c64195acd327d00f2bd58fb1da76f1d392a4730cd6aeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5069237d9f8e2985c64195acd327d00f2bd58fb1da76f1d392a4730cd6aeb6->enter($__internal_fa5069237d9f8e2985c64195acd327d00f2bd58fb1da76f1d392a4730cd6aeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/admission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea83c467ba48a493217baf32981d264037c6b20ed1debd01acc9616c60f77c5b->leave($__internal_ea83c467ba48a493217baf32981d264037c6b20ed1debd01acc9616c60f77c5b_prof);

        
        $__internal_fa5069237d9f8e2985c64195acd327d00f2bd58fb1da76f1d392a4730cd6aeb6->leave($__internal_fa5069237d9f8e2985c64195acd327d00f2bd58fb1da76f1d392a4730cd6aeb6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_58e9e5b0c7cfb2271310b40553a2c9644267c79c3a3165fdd5e0e22faeecce16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e9e5b0c7cfb2271310b40553a2c9644267c79c3a3165fdd5e0e22faeecce16->enter($__internal_58e9e5b0c7cfb2271310b40553a2c9644267c79c3a3165fdd5e0e22faeecce16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f3dd3164fd3811ba246b34d809568309ce9ecbdc139131db465f1e7b3d0e918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3dd3164fd3811ba246b34d809568309ce9ecbdc139131db465f1e7b3d0e918->enter($__internal_5f3dd3164fd3811ba246b34d809568309ce9ecbdc139131db465f1e7b3d0e918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-8 col-md-offset-2\"> 
            <p style=\"text-align:center;\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["img"] ?? $this->getContext($context, "img"))), "html", null, true);
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
        
        $__internal_5f3dd3164fd3811ba246b34d809568309ce9ecbdc139131db465f1e7b3d0e918->leave($__internal_5f3dd3164fd3811ba246b34d809568309ce9ecbdc139131db465f1e7b3d0e918_prof);

        
        $__internal_58e9e5b0c7cfb2271310b40553a2c9644267c79c3a3165fdd5e0e22faeecce16->leave($__internal_58e9e5b0c7cfb2271310b40553a2c9644267c79c3a3165fdd5e0e22faeecce16_prof);

    }

    public function getTemplateName()
    {
        return "home/admission.html.twig";
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
            <p style=\"text-align:center;\"><img src=\"{{ asset(img) }}\" alt=\"image\" class=\"img-thumbnail\"></p>
            <p style=\"text-align:center;\">Congratulations <strong>{{ name }}!!!</strong> <br/> You have been offered admission for a 2- Year {{ programme }} in Kaduna Polytechnic, Kaduna.<br/> <strong>Course</strong> {{ course }} in the <strong>Department</strong> of {{ course }}.</p>
        </div>
    </div>
{% endblock %}
", "home/admission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\home\\admission.html.twig");
    }
}
