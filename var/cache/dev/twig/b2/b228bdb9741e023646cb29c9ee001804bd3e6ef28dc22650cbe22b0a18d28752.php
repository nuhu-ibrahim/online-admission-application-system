<?php

/* admin/uploadlist.html.twig */
class __TwigTemplate_35deeff655c08cb255c8fff64e5f8975d41929734e61961f719519ab7c1b17be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", "admin/uploadlist.html.twig", 1);
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
        $__internal_f23ce5c5d9cd487f68eab7c1af22d439e33c9a95cf354f655d007f0539d21527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23ce5c5d9cd487f68eab7c1af22d439e33c9a95cf354f655d007f0539d21527->enter($__internal_f23ce5c5d9cd487f68eab7c1af22d439e33c9a95cf354f655d007f0539d21527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/uploadlist.html.twig"));

        $__internal_a97ce1bb01c36228aeb28d4821e61c332906e109599b976ed81dd56afa50705f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97ce1bb01c36228aeb28d4821e61c332906e109599b976ed81dd56afa50705f->enter($__internal_a97ce1bb01c36228aeb28d4821e61c332906e109599b976ed81dd56afa50705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/uploadlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23ce5c5d9cd487f68eab7c1af22d439e33c9a95cf354f655d007f0539d21527->leave($__internal_f23ce5c5d9cd487f68eab7c1af22d439e33c9a95cf354f655d007f0539d21527_prof);

        
        $__internal_a97ce1bb01c36228aeb28d4821e61c332906e109599b976ed81dd56afa50705f->leave($__internal_a97ce1bb01c36228aeb28d4821e61c332906e109599b976ed81dd56afa50705f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_583d3ff7d4356366fbcacf62f8ab14a8508d8593bebe52b0f9a27d508c4cb45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583d3ff7d4356366fbcacf62f8ab14a8508d8593bebe52b0f9a27d508c4cb45f->enter($__internal_583d3ff7d4356366fbcacf62f8ab14a8508d8593bebe52b0f9a27d508c4cb45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18e7b0493ad895e27c59ed414cda87d813185e4694bdf888cc4efd0af7b793b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e7b0493ad895e27c59ed414cda87d813185e4694bdf888cc4efd0af7b793b4->enter($__internal_18e7b0493ad895e27c59ed414cda87d813185e4694bdf888cc4efd0af7b793b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18e7b0493ad895e27c59ed414cda87d813185e4694bdf888cc4efd0af7b793b4->leave($__internal_18e7b0493ad895e27c59ed414cda87d813185e4694bdf888cc4efd0af7b793b4_prof);

        
        $__internal_583d3ff7d4356366fbcacf62f8ab14a8508d8593bebe52b0f9a27d508c4cb45f->leave($__internal_583d3ff7d4356366fbcacf62f8ab14a8508d8593bebe52b0f9a27d508c4cb45f_prof);

    }

    public function getTemplateName()
    {
        return "admin/uploadlist.html.twig";
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
", "admin/uploadlist.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\online_admission_application\\app\\Resources\\views\\admin\\uploadlist.html.twig");
    }
}
