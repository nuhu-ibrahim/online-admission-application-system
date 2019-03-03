<?php

/* start_registration/index.html.twig */
class __TwigTemplate_ceba6b4b0db937ecea44f7b130e89c8c7d5e4f3f6341f48f6edc4c37d925e5a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "start_registration/index.html.twig", 1);
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
        $__internal_7b1f57c4e9edfb0caded135f18161168b47562d7705e0f7e863fe140e3fcc312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1f57c4e9edfb0caded135f18161168b47562d7705e0f7e863fe140e3fcc312->enter($__internal_7b1f57c4e9edfb0caded135f18161168b47562d7705e0f7e863fe140e3fcc312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start_registration/index.html.twig"));

        $__internal_de304d77c37b367f03b1dd273a6e2a91ad84dc4a8259f709d05cd3f9e0d69396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de304d77c37b367f03b1dd273a6e2a91ad84dc4a8259f709d05cd3f9e0d69396->enter($__internal_de304d77c37b367f03b1dd273a6e2a91ad84dc4a8259f709d05cd3f9e0d69396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start_registration/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1f57c4e9edfb0caded135f18161168b47562d7705e0f7e863fe140e3fcc312->leave($__internal_7b1f57c4e9edfb0caded135f18161168b47562d7705e0f7e863fe140e3fcc312_prof);

        
        $__internal_de304d77c37b367f03b1dd273a6e2a91ad84dc4a8259f709d05cd3f9e0d69396->leave($__internal_de304d77c37b367f03b1dd273a6e2a91ad84dc4a8259f709d05cd3f9e0d69396_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_77bf890dd81c11c1ab653e163e168ab0a39ee9e6a6e24aaaff5b0a50e0228ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77bf890dd81c11c1ab653e163e168ab0a39ee9e6a6e24aaaff5b0a50e0228ab8->enter($__internal_77bf890dd81c11c1ab653e163e168ab0a39ee9e6a6e24aaaff5b0a50e0228ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d72eddd40e1bd04e45701368fa0851af68fadcd388e0fdc46cf9f7229e7a9521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72eddd40e1bd04e45701368fa0851af68fadcd388e0fdc46cf9f7229e7a9521->enter($__internal_d72eddd40e1bd04e45701368fa0851af68fadcd388e0fdc46cf9f7229e7a9521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"alert alert-info\" role=\"alert\">Fill the form below appropriately and click Generate Invoice, note that fields marked <span style=\"color:red; font-weight:600; font-size:1.3em;\">*</span> are compulsory.</div>
                ";
        // line 7
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 8
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 9
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                    </div>
                ";
        } elseif (        // line 11
($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>";
                // line 14
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        // line 18
        echo "                <h3>Choose Programme</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Programme</label>
                    ";
        // line 21
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "programme", array()), 'errors')) {
            // line 22
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 23
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "programme", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 26
        echo "                    
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "programme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                   
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Course</label>
                    ";
        // line 31
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course", array()), 'errors')) {
            // line 32
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Personal Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    ";
        // line 41
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'errors')) {
            // line 42
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 46
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    ";
        // line 50
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'errors')) {
            // line 51
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 55
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    ";
        // line 59
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors')) {
            // line 60
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 64
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\"> 
                    <label for=\"exampleInputEmail1\">State of Origin</label>
                    ";
        // line 68
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'errors')) {
            // line 69
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 73
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    ";
        // line 77
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'errors')) {
            // line 78
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 79
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 82
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    ";
        // line 86
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')) {
            // line 87
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 91
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Password</label>
                  ";
        // line 95
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors')) {
            // line 96
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 97
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 100
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                </div>
                <div class=\"alert alert-warning\" role=\"alert\">Note that names, programme and course of choice can not be changed after submission.</div>
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
            ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_d72eddd40e1bd04e45701368fa0851af68fadcd388e0fdc46cf9f7229e7a9521->leave($__internal_d72eddd40e1bd04e45701368fa0851af68fadcd388e0fdc46cf9f7229e7a9521_prof);

        
        $__internal_77bf890dd81c11c1ab653e163e168ab0a39ee9e6a6e24aaaff5b0a50e0228ab8->leave($__internal_77bf890dd81c11c1ab653e163e168ab0a39ee9e6a6e24aaaff5b0a50e0228ab8_prof);

    }

    public function getTemplateName()
    {
        return "start_registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 104,  268 => 103,  261 => 100,  255 => 97,  252 => 96,  250 => 95,  242 => 91,  236 => 88,  233 => 87,  231 => 86,  223 => 82,  217 => 79,  214 => 78,  212 => 77,  204 => 73,  198 => 70,  195 => 69,  193 => 68,  185 => 64,  179 => 61,  176 => 60,  174 => 59,  166 => 55,  160 => 52,  157 => 51,  155 => 50,  147 => 46,  141 => 43,  138 => 42,  136 => 41,  127 => 36,  121 => 33,  118 => 32,  116 => 31,  109 => 27,  106 => 26,  100 => 23,  97 => 22,  95 => 21,  90 => 18,  87 => 17,  78 => 14,  75 => 13,  70 => 12,  68 => 11,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"alert alert-info\" role=\"alert\">Fill the form below appropriately and click Generate Invoice, note that fields marked <span style=\"color:red; font-weight:600; font-size:1.3em;\">*</span> are compulsory.</div>
                {% if form_errors(form) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form) }}
                    </div>
                {% elseif errors%}
                    {%  for error in errors %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>{{ error }}</li>
                    </div>
                    {% endfor %}
                {% endif %}
                <h3>Choose Programme</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Programme</label>
                    {% if form_errors(form.programme) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.programme) }}
                        </div>
                    {% endif %}
                    
                    {{ form_widget(form.programme, {'attr': {'class': 'form-control'}}) }}                   
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Course</label>
                    {% if form_errors(form.course) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.course) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.course, {'attr': {'class': 'form-control'}}) }}
                </div>
                <h3>Personal Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    {% if form_errors(form.surname) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.surname) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.surname, {'attr': {'class': 'form-control'}}) }}      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    {% if form_errors(form.othername) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.othername) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.othername, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    {% if form_errors(form.firstname) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.firstname) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\"> 
                    <label for=\"exampleInputEmail1\">State of Origin</label>
                    {% if form_errors(form.state) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.state) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.state, {'attr': {'class': 'form-control'}}) }}   
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    {% if form_errors(form.mobile) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.mobile) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.mobile, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    {% if form_errors(form.email) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.email) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Password</label>
                  {% if form_errors(form.password) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.password) }}
                        </div>
                    {% endif %}
                  {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }} 
                </div>
                <div class=\"alert alert-warning\" role=\"alert\">Note that names, programme and course of choice can not be changed after submission.</div>
                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-success'}}) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "start_registration/index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\start_registration\\index.html.twig");
    }
}
