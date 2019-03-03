<?php

/* edit_registration/index.html.twig */
class __TwigTemplate_632af77631cb0cb2d2f2b18b73204f8f2460b95f66ed3b7b9465255e70e7dd73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", "edit_registration/index.html.twig", 1);
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
        $__internal_f9e36d9381b39c8d714a2dfb517304f4ee53229090ae4f7e20e40440e77cdb83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e36d9381b39c8d714a2dfb517304f4ee53229090ae4f7e20e40440e77cdb83->enter($__internal_f9e36d9381b39c8d714a2dfb517304f4ee53229090ae4f7e20e40440e77cdb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit_registration/index.html.twig"));

        $__internal_e4e20df3eb0be5693a7db43e556d52fda6b1403349402eaaca7e07fae4559725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e20df3eb0be5693a7db43e556d52fda6b1403349402eaaca7e07fae4559725->enter($__internal_e4e20df3eb0be5693a7db43e556d52fda6b1403349402eaaca7e07fae4559725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit_registration/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9e36d9381b39c8d714a2dfb517304f4ee53229090ae4f7e20e40440e77cdb83->leave($__internal_f9e36d9381b39c8d714a2dfb517304f4ee53229090ae4f7e20e40440e77cdb83_prof);

        
        $__internal_e4e20df3eb0be5693a7db43e556d52fda6b1403349402eaaca7e07fae4559725->leave($__internal_e4e20df3eb0be5693a7db43e556d52fda6b1403349402eaaca7e07fae4559725_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_92f14d4235fd8384627aaddd2b8f9cc619483edee2897597f05a01912b0df7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f14d4235fd8384627aaddd2b8f9cc619483edee2897597f05a01912b0df7b0->enter($__internal_92f14d4235fd8384627aaddd2b8f9cc619483edee2897597f05a01912b0df7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7ee5556c39e8114e3cae614a143390de7f087e379e241a5b1cb86b3ccc52f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ee5556c39e8114e3cae614a143390de7f087e379e241a5b1cb86b3ccc52f5c->enter($__internal_a7ee5556c39e8114e3cae614a143390de7f087e379e241a5b1cb86b3ccc52f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7ee5556c39e8114e3cae614a143390de7f087e379e241a5b1cb86b3ccc52f5c->leave($__internal_a7ee5556c39e8114e3cae614a143390de7f087e379e241a5b1cb86b3ccc52f5c_prof);

        
        $__internal_92f14d4235fd8384627aaddd2b8f9cc619483edee2897597f05a01912b0df7b0->leave($__internal_92f14d4235fd8384627aaddd2b8f9cc619483edee2897597f05a01912b0df7b0_prof);

    }

    public function getTemplateName()
    {
        return "edit_registration/index.html.twig";
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
", "edit_registration/index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\edit_registration\\index.html.twig");
    }
}
