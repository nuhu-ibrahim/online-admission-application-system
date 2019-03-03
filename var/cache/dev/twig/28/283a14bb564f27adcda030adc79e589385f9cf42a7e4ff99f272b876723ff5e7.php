<?php

/* admin/viewInfo.html.twig */
class __TwigTemplate_98fa27a05e399a3e847c3b1e10619a9a1e94e8085c364aaa8c9284bbcb40dfae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", "admin/viewInfo.html.twig", 1);
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
        $__internal_f2add1063b74ab74e2f96c1f75234e55fe52d5ce4d89e6fa66aa41a78ea4e0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2add1063b74ab74e2f96c1f75234e55fe52d5ce4d89e6fa66aa41a78ea4e0cc->enter($__internal_f2add1063b74ab74e2f96c1f75234e55fe52d5ce4d89e6fa66aa41a78ea4e0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/viewInfo.html.twig"));

        $__internal_39031257a4be8f8c34c6645867634a97e7b059c380c6d321651d78d136d77b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39031257a4be8f8c34c6645867634a97e7b059c380c6d321651d78d136d77b7b->enter($__internal_39031257a4be8f8c34c6645867634a97e7b059c380c6d321651d78d136d77b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/viewInfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2add1063b74ab74e2f96c1f75234e55fe52d5ce4d89e6fa66aa41a78ea4e0cc->leave($__internal_f2add1063b74ab74e2f96c1f75234e55fe52d5ce4d89e6fa66aa41a78ea4e0cc_prof);

        
        $__internal_39031257a4be8f8c34c6645867634a97e7b059c380c6d321651d78d136d77b7b->leave($__internal_39031257a4be8f8c34c6645867634a97e7b059c380c6d321651d78d136d77b7b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cacd7a471ea593e0a63c1891b60ea5a4dcd22e146d523ec0b1b07319d39208c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacd7a471ea593e0a63c1891b60ea5a4dcd22e146d523ec0b1b07319d39208c0->enter($__internal_cacd7a471ea593e0a63c1891b60ea5a4dcd22e146d523ec0b1b07319d39208c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40293a7e2791412b19e9c237f8cc5e752881e802e4dd2f7bf3f1cab3a9f40878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40293a7e2791412b19e9c237f8cc5e752881e802e4dd2f7bf3f1cab3a9f40878->enter($__internal_40293a7e2791412b19e9c237f8cc5e752881e802e4dd2f7bf3f1cab3a9f40878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"alert alert-info\" role=\"alert\">Supply Student's Application Number, then click View Information</div>
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
        
        $__internal_40293a7e2791412b19e9c237f8cc5e752881e802e4dd2f7bf3f1cab3a9f40878->leave($__internal_40293a7e2791412b19e9c237f8cc5e752881e802e4dd2f7bf3f1cab3a9f40878_prof);

        
        $__internal_cacd7a471ea593e0a63c1891b60ea5a4dcd22e146d523ec0b1b07319d39208c0->leave($__internal_cacd7a471ea593e0a63c1891b60ea5a4dcd22e146d523ec0b1b07319d39208c0_prof);

    }

    public function getTemplateName()
    {
        return "admin/viewInfo.html.twig";
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
        return new Twig_Source("{% extends 'abase.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"alert alert-info\" role=\"alert\">Supply Student's Application Number, then click View Information</div>
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
", "admin/viewInfo.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\admin\\viewInfo.html.twig");
    }
}
