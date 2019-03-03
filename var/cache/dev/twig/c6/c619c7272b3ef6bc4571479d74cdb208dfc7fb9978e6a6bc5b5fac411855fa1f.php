<?php

/* :edit_registration:index.html.twig */
class __TwigTemplate_02723855a9af5329ebe928a6bfe4e73ed5f722ec48d70a5041c71d2013fb49dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", ":edit_registration:index.html.twig", 1);
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
        $__internal_a12b9600b606f802c49329f9d2d4131979a02d6286bd587f9be5a4ba21b4c299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12b9600b606f802c49329f9d2d4131979a02d6286bd587f9be5a4ba21b4c299->enter($__internal_a12b9600b606f802c49329f9d2d4131979a02d6286bd587f9be5a4ba21b4c299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":edit_registration:index.html.twig"));

        $__internal_7f6b0e2b31cf45f97eb57d867acfb68f0216e672ace699a226dbc6d4908b7a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b0e2b31cf45f97eb57d867acfb68f0216e672ace699a226dbc6d4908b7a1d->enter($__internal_7f6b0e2b31cf45f97eb57d867acfb68f0216e672ace699a226dbc6d4908b7a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":edit_registration:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a12b9600b606f802c49329f9d2d4131979a02d6286bd587f9be5a4ba21b4c299->leave($__internal_a12b9600b606f802c49329f9d2d4131979a02d6286bd587f9be5a4ba21b4c299_prof);

        
        $__internal_7f6b0e2b31cf45f97eb57d867acfb68f0216e672ace699a226dbc6d4908b7a1d->leave($__internal_7f6b0e2b31cf45f97eb57d867acfb68f0216e672ace699a226dbc6d4908b7a1d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_19690f11451ead115f04a879daaf4c1d4f796815e4d61ce265f51b18305ef140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19690f11451ead115f04a879daaf4c1d4f796815e4d61ce265f51b18305ef140->enter($__internal_19690f11451ead115f04a879daaf4c1d4f796815e4d61ce265f51b18305ef140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cd5d72a7621596d75f10730953292171b91632c67dfe9182c2e970941c11616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd5d72a7621596d75f10730953292171b91632c67dfe9182c2e970941c11616->enter($__internal_3cd5d72a7621596d75f10730953292171b91632c67dfe9182c2e970941c11616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"alert alert-info\" role=\"alert\">Supply your Email, then click Continue Edit..</div>
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
                  <label for=\"exampleInputPassword1\">Email</label>
                  ";
        // line 16
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')) {
            // line 17
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 21
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        
        $__internal_3cd5d72a7621596d75f10730953292171b91632c67dfe9182c2e970941c11616->leave($__internal_3cd5d72a7621596d75f10730953292171b91632c67dfe9182c2e970941c11616_prof);

        
        $__internal_19690f11451ead115f04a879daaf4c1d4f796815e4d61ce265f51b18305ef140->leave($__internal_19690f11451ead115f04a879daaf4c1d4f796815e4d61ce265f51b18305ef140_prof);

    }

    public function getTemplateName()
    {
        return ":edit_registration:index.html.twig";
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
        return new Twig_Source("{% extends 'ubase.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"alert alert-info\" role=\"alert\">Supply your Email, then click Continue Edit..</div>
            {% if errors%}
                    {%  for error in errors %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>{{ error }}</li>
                    </div>
                    {% endfor %}
            {% endif %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Email</label>
                  {% if form_errors(form.email) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.email) }}
                        </div>
                    {% endif %}
                  {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                </div>
                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-success'}}) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", ":edit_registration:index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/edit_registration/index.html.twig");
    }
}
