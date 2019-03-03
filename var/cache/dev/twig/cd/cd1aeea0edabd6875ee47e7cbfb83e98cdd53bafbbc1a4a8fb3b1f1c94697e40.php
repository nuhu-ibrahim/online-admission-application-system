<?php

/* :admin:uploadlist.html.twig */
class __TwigTemplate_8fb409632a51eb1a020450d9a28873f52a2be6034f0b26c0297730113c888f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", ":admin:uploadlist.html.twig", 1);
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
        $__internal_4d5fb131aec7fd3afd61dc38958a33f5d33a25832be23dcc3c1a669f998e32af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5fb131aec7fd3afd61dc38958a33f5d33a25832be23dcc3c1a669f998e32af->enter($__internal_4d5fb131aec7fd3afd61dc38958a33f5d33a25832be23dcc3c1a669f998e32af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:uploadlist.html.twig"));

        $__internal_22b846e0182e7d41bd6fc54ff14cad6177c477f3e0218ff6f98c1ab394f9f202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b846e0182e7d41bd6fc54ff14cad6177c477f3e0218ff6f98c1ab394f9f202->enter($__internal_22b846e0182e7d41bd6fc54ff14cad6177c477f3e0218ff6f98c1ab394f9f202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:uploadlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d5fb131aec7fd3afd61dc38958a33f5d33a25832be23dcc3c1a669f998e32af->leave($__internal_4d5fb131aec7fd3afd61dc38958a33f5d33a25832be23dcc3c1a669f998e32af_prof);

        
        $__internal_22b846e0182e7d41bd6fc54ff14cad6177c477f3e0218ff6f98c1ab394f9f202->leave($__internal_22b846e0182e7d41bd6fc54ff14cad6177c477f3e0218ff6f98c1ab394f9f202_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d231a3a746e2ba5f111659284dd4a45f8dbbb51dddc8cff2ad569ecf7b2e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d231a3a746e2ba5f111659284dd4a45f8dbbb51dddc8cff2ad569ecf7b2e50->enter($__internal_a2d231a3a746e2ba5f111659284dd4a45f8dbbb51dddc8cff2ad569ecf7b2e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c768c926e2bfc56126e8872136719ab8248d95aa78787fa5bd636f56571434fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c768c926e2bfc56126e8872136719ab8248d95aa78787fa5bd636f56571434fa->enter($__internal_c768c926e2bfc56126e8872136719ab8248d95aa78787fa5bd636f56571434fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"alert alert-info\" role=\"alert\">Choose the Excel file containing the list, then click Upload List</div>
            ";
        // line 6
        if (($context["success"] ?? $this->getContext($context, "success"))) {
            // line 7
            echo "                <div class=\"alert alert-info\" role=\"alert\">Students uploaded and congratulatory mails sent successfully.</div>
            ";
        }
        // line 9
        echo "            ";
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 10
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>";
                // line 12
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            ";
        }
        // line 16
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Excel File</label>
                  ";
        // line 19
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors')) {
            // line 20
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 24
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                </div>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_c768c926e2bfc56126e8872136719ab8248d95aa78787fa5bd636f56571434fa->leave($__internal_c768c926e2bfc56126e8872136719ab8248d95aa78787fa5bd636f56571434fa_prof);

        
        $__internal_a2d231a3a746e2ba5f111659284dd4a45f8dbbb51dddc8cff2ad569ecf7b2e50->leave($__internal_a2d231a3a746e2ba5f111659284dd4a45f8dbbb51dddc8cff2ad569ecf7b2e50_prof);

    }

    public function getTemplateName()
    {
        return ":admin:uploadlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  107 => 26,  101 => 24,  95 => 21,  92 => 20,  90 => 19,  83 => 16,  80 => 15,  71 => 12,  68 => 11,  63 => 10,  60 => 9,  56 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            <div class=\"alert alert-info\" role=\"alert\">Choose the Excel file containing the list, then click Upload List</div>
            {% if success%}
                <div class=\"alert alert-info\" role=\"alert\">Students uploaded and congratulatory mails sent successfully.</div>
            {% endif %}
            {% if errors%}
                    {%  for error in errors %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>{{ error }}</li>
                    </div>
                    {% endfor %}
            {% endif %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Excel File</label>
                  {% if form_errors(form.file) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.file) }}
                        </div>
                    {% endif %}
                  {{ form_widget(form.file) }}
                </div>
                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-success'}}) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", ":admin:uploadlist.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/admin/uploadlist.html.twig");
    }
}
