<?php

/* cashier/uploadpay.html.twig */
class __TwigTemplate_242c8f2ea9268f5318b062bca0bdf5b16f108dfa0eb4ea9744baeeae46020134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("cashier.html.twig", "cashier/uploadpay.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cashier.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d565d9b22786dc9ca46a0cc902cbba3fc64b36fbb88c0ce0927e70c5097997a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d565d9b22786dc9ca46a0cc902cbba3fc64b36fbb88c0ce0927e70c5097997a->enter($__internal_2d565d9b22786dc9ca46a0cc902cbba3fc64b36fbb88c0ce0927e70c5097997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cashier/uploadpay.html.twig"));

        $__internal_84a1221457dcb3e3c79f99f4dbb013e156f872c9ca2e41acb16ae28797e5fd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a1221457dcb3e3c79f99f4dbb013e156f872c9ca2e41acb16ae28797e5fd09->enter($__internal_84a1221457dcb3e3c79f99f4dbb013e156f872c9ca2e41acb16ae28797e5fd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cashier/uploadpay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d565d9b22786dc9ca46a0cc902cbba3fc64b36fbb88c0ce0927e70c5097997a->leave($__internal_2d565d9b22786dc9ca46a0cc902cbba3fc64b36fbb88c0ce0927e70c5097997a_prof);

        
        $__internal_84a1221457dcb3e3c79f99f4dbb013e156f872c9ca2e41acb16ae28797e5fd09->leave($__internal_84a1221457dcb3e3c79f99f4dbb013e156f872c9ca2e41acb16ae28797e5fd09_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b06d197992bb97599a4a93e22227d771ebe313aa437d16f17a7016c253c057b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06d197992bb97599a4a93e22227d771ebe313aa437d16f17a7016c253c057b5->enter($__internal_b06d197992bb97599a4a93e22227d771ebe313aa437d16f17a7016c253c057b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8390ec8820ec833e3023b499c793f4de3d0f661af96b1a2359eff92e900534b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8390ec8820ec833e3023b499c793f4de3d0f661af96b1a2359eff92e900534b8->enter($__internal_8390ec8820ec833e3023b499c793f4de3d0f661af96b1a2359eff92e900534b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"alert alert-info\" role=\"alert\">Activate Student Payment.</div>
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
                echo "                        <div class=\"alert alert-danger\" role=\"alert\">
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
        echo "                ";
        if (($context["msg"] ?? $this->getContext($context, "msg"))) {
            // line 19
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 23
        echo "                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Invoice Number</label>
                    ";
        // line 25
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invoiceNo", array()), 'errors')) {
            // line 26
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invoiceNo", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 30
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invoiceNo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
                </div>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "validate", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "  
            ";
        // line 33
        if (($context["validated"] ?? $this->getContext($context, "validated"))) {
            // line 34
            echo "                <table class=\"table table-hover\">
                    <tr>
                         <td>Invoice Number:</td>
                         <td>";
            // line 37
            echo twig_escape_filter($this->env, ($context["invoiceNo"] ?? $this->getContext($context, "invoiceNo")), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                         <td>Name:</td>
                         <td>";
            // line 41
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                         <td>Email:</td>
                         <td>";
            // line 45
            echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                         <td>Programme:</td>
                         <td>";
            // line 49
            echo twig_escape_filter($this->env, ($context["programme"] ?? $this->getContext($context, "programme")), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                         <td>Course:</td>
                         <td>";
            // line 53
            echo twig_escape_filter($this->env, ($context["course"] ?? $this->getContext($context, "course")), "html", null, true);
            echo "</td>
                    </tr>
                </table>
            ";
        }
        // line 57
        echo "            ";
        if (($context["validated"] ?? $this->getContext($context, "validated"))) {
            // line 58
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "activate", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
            echo "  
            ";
        } else {
            // line 60
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "activate", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
            echo "
            ";
        }
        // line 62
        echo "            
        ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_8390ec8820ec833e3023b499c793f4de3d0f661af96b1a2359eff92e900534b8->leave($__internal_8390ec8820ec833e3023b499c793f4de3d0f661af96b1a2359eff92e900534b8_prof);

        
        $__internal_b06d197992bb97599a4a93e22227d771ebe313aa437d16f17a7016c253c057b5->leave($__internal_b06d197992bb97599a4a93e22227d771ebe313aa437d16f17a7016c253c057b5_prof);

    }

    public function getTemplateName()
    {
        return "cashier/uploadpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 63,  184 => 62,  178 => 60,  172 => 58,  169 => 57,  162 => 53,  155 => 49,  148 => 45,  141 => 41,  134 => 37,  129 => 34,  127 => 33,  123 => 32,  117 => 30,  111 => 27,  108 => 26,  106 => 25,  102 => 23,  96 => 20,  93 => 19,  90 => 18,  87 => 17,  78 => 14,  75 => 13,  70 => 12,  68 => 11,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'cashier.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"alert alert-info\" role=\"alert\">Activate Student Payment.</div>
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
                {% if msg %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        {{ msg }}
                    </div>
                {% endif %}
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Invoice Number</label>
                    {% if form_errors(form.invoiceNo) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.invoiceNo) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.invoiceNo, {'attr': {'class': 'form-control'}}) }}  
                </div>
                {{ form_widget(form.validate, {'attr': {'class': 'btn btn-success'}}) }}  
            {% if validated %}
                <table class=\"table table-hover\">
                    <tr>
                         <td>Invoice Number:</td>
                         <td>{{ invoiceNo }}</td>
                    </tr>
                    <tr>
                         <td>Name:</td>
                         <td>{{ name }}</td>
                    </tr>
                    <tr>
                         <td>Email:</td>
                         <td>{{ email }}</td>
                    </tr>
                    <tr>
                         <td>Programme:</td>
                         <td>{{ programme }}</td>
                    </tr>
                    <tr>
                         <td>Course:</td>
                         <td>{{ course }}</td>
                    </tr>
                </table>
            {% endif %}
            {% if validated %}
                {{ form_widget(form.activate, {'attr': {'class': 'btn btn-success'}}) }}  
            {% else %}
                {{ form_widget(form.activate, {'attr': {'style' : 'visibility:hidden'}}) }}
            {% endif %}
            
        {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "cashier/uploadpay.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\cashier\\uploadpay.html.twig");
    }
}
