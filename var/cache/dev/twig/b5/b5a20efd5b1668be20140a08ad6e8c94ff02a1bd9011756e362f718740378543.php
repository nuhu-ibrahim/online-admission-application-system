<?php

/* :home:checkAdmission.html.twig */
class __TwigTemplate_2eb6941e60f1dd9a74df8da62319ced83f5c792d7baaa0dd54972c2316270040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:checkAdmission.html.twig", 1);
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
        $__internal_c2d1ec26c81642a775d56a5086bfa55f90ebe45e476a22793373c1e870e5ec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d1ec26c81642a775d56a5086bfa55f90ebe45e476a22793373c1e870e5ec11->enter($__internal_c2d1ec26c81642a775d56a5086bfa55f90ebe45e476a22793373c1e870e5ec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:checkAdmission.html.twig"));

        $__internal_7b38cd9b051a691b641af75324dc6dc529f2cc54bb916eee8b86ec60c274239a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b38cd9b051a691b641af75324dc6dc529f2cc54bb916eee8b86ec60c274239a->enter($__internal_7b38cd9b051a691b641af75324dc6dc529f2cc54bb916eee8b86ec60c274239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:checkAdmission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d1ec26c81642a775d56a5086bfa55f90ebe45e476a22793373c1e870e5ec11->leave($__internal_c2d1ec26c81642a775d56a5086bfa55f90ebe45e476a22793373c1e870e5ec11_prof);

        
        $__internal_7b38cd9b051a691b641af75324dc6dc529f2cc54bb916eee8b86ec60c274239a->leave($__internal_7b38cd9b051a691b641af75324dc6dc529f2cc54bb916eee8b86ec60c274239a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b38643cb36b67180ed604d714351fc31f2568962f09fb259ac950d9d0286971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b38643cb36b67180ed604d714351fc31f2568962f09fb259ac950d9d0286971->enter($__internal_4b38643cb36b67180ed604d714351fc31f2568962f09fb259ac950d9d0286971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f00d38edd67c84ca9959a4df447036e4e7c89fb4c8542d9ca014a158575d2b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00d38edd67c84ca9959a4df447036e4e7c89fb4c8542d9ca014a158575d2b3f->enter($__internal_f00d38edd67c84ca9959a4df447036e4e7c89fb4c8542d9ca014a158575d2b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"alert alert-info\" role=\"alert\">Supply your Application Number, then click Check Admission Status.</div>
            ";
        // line 6
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 7
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>";
                // line 9
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            ";
        }
        // line 13
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Application Number</label>
                  ";
        // line 16
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "app_no", array()), 'errors')) {
            // line 17
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "app_no", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 21
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "app_no", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_f00d38edd67c84ca9959a4df447036e4e7c89fb4c8542d9ca014a158575d2b3f->leave($__internal_f00d38edd67c84ca9959a4df447036e4e7c89fb4c8542d9ca014a158575d2b3f_prof);

        
        $__internal_4b38643cb36b67180ed604d714351fc31f2568962f09fb259ac950d9d0286971->leave($__internal_4b38643cb36b67180ed604d714351fc31f2568962f09fb259ac950d9d0286971_prof);

    }

    public function getTemplateName()
    {
        return ":home:checkAdmission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  100 => 23,  94 => 21,  88 => 18,  85 => 17,  83 => 16,  76 => 13,  73 => 12,  64 => 9,  61 => 8,  56 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            <div class=\"alert alert-info\" role=\"alert\">Supply your Application Number, then click Check Admission Status.</div>
            {% if errors%}
                    {%  for error in errors %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>{{ error }}</li>
                    </div>
                    {% endfor %}
            {% endif %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Application Number</label>
                  {% if form_errors(form.app_no) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.app_no) }}
                        </div>
                    {% endif %}
                  {{ form_widget(form.app_no, {'attr': {'class': 'form-control'}}) }}
                </div>
                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-success'}}) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", ":home:checkAdmission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/home/checkAdmission.html.twig");
    }
}
