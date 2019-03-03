<?php

/* home/checkAdmission.html.twig */
class __TwigTemplate_4efee741e04b5f6ebd7366ca06aab7ca416f71cf5e3932133ff50ba9c759bf28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/checkAdmission.html.twig", 1);
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
        $__internal_97e40f5bd318c6115b448715a8469a0df35a44a68a1b1b370bd8cfbb33d043cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e40f5bd318c6115b448715a8469a0df35a44a68a1b1b370bd8cfbb33d043cd->enter($__internal_97e40f5bd318c6115b448715a8469a0df35a44a68a1b1b370bd8cfbb33d043cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/checkAdmission.html.twig"));

        $__internal_9735bf8cb9794fef1d251b6c3874cc10789bc78ccc43bfa3c28ef51d496509d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9735bf8cb9794fef1d251b6c3874cc10789bc78ccc43bfa3c28ef51d496509d5->enter($__internal_9735bf8cb9794fef1d251b6c3874cc10789bc78ccc43bfa3c28ef51d496509d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/checkAdmission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e40f5bd318c6115b448715a8469a0df35a44a68a1b1b370bd8cfbb33d043cd->leave($__internal_97e40f5bd318c6115b448715a8469a0df35a44a68a1b1b370bd8cfbb33d043cd_prof);

        
        $__internal_9735bf8cb9794fef1d251b6c3874cc10789bc78ccc43bfa3c28ef51d496509d5->leave($__internal_9735bf8cb9794fef1d251b6c3874cc10789bc78ccc43bfa3c28ef51d496509d5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_72d4318c7a57444a0c13490fe0d3337cd2d97e92fbf445e3c2d20a4034c2d1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d4318c7a57444a0c13490fe0d3337cd2d97e92fbf445e3c2d20a4034c2d1c8->enter($__internal_72d4318c7a57444a0c13490fe0d3337cd2d97e92fbf445e3c2d20a4034c2d1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bbbcde7bbf1ead0cea5b324eb44c79e0dc5c43263372dd3dc1937bb3cdb618e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbbcde7bbf1ead0cea5b324eb44c79e0dc5c43263372dd3dc1937bb3cdb618e->enter($__internal_3bbbcde7bbf1ead0cea5b324eb44c79e0dc5c43263372dd3dc1937bb3cdb618e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3bbbcde7bbf1ead0cea5b324eb44c79e0dc5c43263372dd3dc1937bb3cdb618e->leave($__internal_3bbbcde7bbf1ead0cea5b324eb44c79e0dc5c43263372dd3dc1937bb3cdb618e_prof);

        
        $__internal_72d4318c7a57444a0c13490fe0d3337cd2d97e92fbf445e3c2d20a4034c2d1c8->leave($__internal_72d4318c7a57444a0c13490fe0d3337cd2d97e92fbf445e3c2d20a4034c2d1c8_prof);

    }

    public function getTemplateName()
    {
        return "home/checkAdmission.html.twig";
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
", "home/checkAdmission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\home\\checkAdmission.html.twig");
    }
}
