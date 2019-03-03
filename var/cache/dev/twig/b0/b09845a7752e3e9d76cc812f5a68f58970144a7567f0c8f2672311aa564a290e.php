<?php

/* :admin:viewInfo.html.twig */
class __TwigTemplate_d49c6934d344e1e0a351df6d4a8712b21d1c1b713a6cd603415352c777134951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", ":admin:viewInfo.html.twig", 1);
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
        $__internal_de8700c2d4b95a277ed662694148d410a65fbd48cc7dcff4aec3856330bb41bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8700c2d4b95a277ed662694148d410a65fbd48cc7dcff4aec3856330bb41bd->enter($__internal_de8700c2d4b95a277ed662694148d410a65fbd48cc7dcff4aec3856330bb41bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:viewInfo.html.twig"));

        $__internal_9c708c6660dfe063af069355df8e6add7aef611927d96955ca02b3ed69fea5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c708c6660dfe063af069355df8e6add7aef611927d96955ca02b3ed69fea5d7->enter($__internal_9c708c6660dfe063af069355df8e6add7aef611927d96955ca02b3ed69fea5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:viewInfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8700c2d4b95a277ed662694148d410a65fbd48cc7dcff4aec3856330bb41bd->leave($__internal_de8700c2d4b95a277ed662694148d410a65fbd48cc7dcff4aec3856330bb41bd_prof);

        
        $__internal_9c708c6660dfe063af069355df8e6add7aef611927d96955ca02b3ed69fea5d7->leave($__internal_9c708c6660dfe063af069355df8e6add7aef611927d96955ca02b3ed69fea5d7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed7c925bf703d2ea01b49abf2485a8e83e175abc094822193e0bb24d06eefaba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7c925bf703d2ea01b49abf2485a8e83e175abc094822193e0bb24d06eefaba->enter($__internal_ed7c925bf703d2ea01b49abf2485a8e83e175abc094822193e0bb24d06eefaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b62eea69a5cb2ad6644f7739ebf84b6244db925ca72cca5d7076d8f227a7c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b62eea69a5cb2ad6644f7739ebf84b6244db925ca72cca5d7076d8f227a7c65->enter($__internal_8b62eea69a5cb2ad6644f7739ebf84b6244db925ca72cca5d7076d8f227a7c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b62eea69a5cb2ad6644f7739ebf84b6244db925ca72cca5d7076d8f227a7c65->leave($__internal_8b62eea69a5cb2ad6644f7739ebf84b6244db925ca72cca5d7076d8f227a7c65_prof);

        
        $__internal_ed7c925bf703d2ea01b49abf2485a8e83e175abc094822193e0bb24d06eefaba->leave($__internal_ed7c925bf703d2ea01b49abf2485a8e83e175abc094822193e0bb24d06eefaba_prof);

    }

    public function getTemplateName()
    {
        return ":admin:viewInfo.html.twig";
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
", ":admin:viewInfo.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/admin/viewInfo.html.twig");
    }
}
