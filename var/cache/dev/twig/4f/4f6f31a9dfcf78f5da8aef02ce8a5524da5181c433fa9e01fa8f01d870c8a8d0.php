<?php

/* edit_registration/slip.html.twig */
class __TwigTemplate_11aea5666e40292ac4e38bdafda3758a063ade61e22b6f485846b1cc85693011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", "edit_registration/slip.html.twig", 1);
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
        $__internal_843033c7f061e4a426684e7a15214e24c26065972c5183557a42561681f3b0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843033c7f061e4a426684e7a15214e24c26065972c5183557a42561681f3b0bd->enter($__internal_843033c7f061e4a426684e7a15214e24c26065972c5183557a42561681f3b0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit_registration/slip.html.twig"));

        $__internal_9a3e79cbb0993180c4a6476298e04add5462ee8bff2289ac7c29bb78641abbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3e79cbb0993180c4a6476298e04add5462ee8bff2289ac7c29bb78641abbff->enter($__internal_9a3e79cbb0993180c4a6476298e04add5462ee8bff2289ac7c29bb78641abbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit_registration/slip.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_843033c7f061e4a426684e7a15214e24c26065972c5183557a42561681f3b0bd->leave($__internal_843033c7f061e4a426684e7a15214e24c26065972c5183557a42561681f3b0bd_prof);

        
        $__internal_9a3e79cbb0993180c4a6476298e04add5462ee8bff2289ac7c29bb78641abbff->leave($__internal_9a3e79cbb0993180c4a6476298e04add5462ee8bff2289ac7c29bb78641abbff_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_df6bf2dedea86f3edb8766ac4d058450c8025c00bc256f238ca48314c0a92add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6bf2dedea86f3edb8766ac4d058450c8025c00bc256f238ca48314c0a92add->enter($__internal_df6bf2dedea86f3edb8766ac4d058450c8025c00bc256f238ca48314c0a92add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b50d9e375f2be02c22f905961cf615ad01f7fe5347d999f182d4e7c2317adf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50d9e375f2be02c22f905961cf615ad01f7fe5347d999f182d4e7c2317adf4a->enter($__internal_b50d9e375f2be02c22f905961cf615ad01f7fe5347d999f182d4e7c2317adf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-12\" id=\"toPrint\"> 
            <div class=\"alert alert-info\" role=\"alert\">
                Print the transaction slip and pay to any Bank of your choice. You can edit registration after 24 hours of payment.
            </div>
            <h3 style=\"text-align: center;\">Students Edit Application Payment Details - 2016/2017 </h3>
            <h4 style=\"text-align: center;\">Transaction Slip</h4>
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <td>Application #:</td>
                     <td>";
        // line 13
        echo twig_escape_filter($this->env, ($context["appNo"] ?? $this->getContext($context, "appNo")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Name:</td>
                     <td>";
        // line 17
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Programme:</td>
                     <td>";
        // line 21
        echo twig_escape_filter($this->env, ($context["programme"] ?? $this->getContext($context, "programme")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Email:</td>
                     <td>";
        // line 25
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Phone #:</td>
                     <td>";
        // line 29
        echo twig_escape_filter($this->env, ($context["phone"] ?? $this->getContext($context, "phone")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Invoice #:</td>
                     <td>";
        // line 33
        echo twig_escape_filter($this->env, ($context["invoice"] ?? $this->getContext($context, "invoice")), "html", null, true);
        echo "</td>
                </tr>
            </table>
            
            
             <table class=\"table table-hover table-bordered\">
                <tr>
                     <th style=\"text-align: center;\">1</th>
                     <th>Edit HND Application:</th>
                     <th>1000.00</th>
                </tr>
                <tr>
                     <td></td>
                     <th style=\"text-align: right;\" align=\"right\"> Total </th>
                     <th>1000.00</th>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"3\">
                        <form class=\"form-inline\">
                            <button onclick=\"printDiv('toPrint')\" type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Print Transaction Slip</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_b50d9e375f2be02c22f905961cf615ad01f7fe5347d999f182d4e7c2317adf4a->leave($__internal_b50d9e375f2be02c22f905961cf615ad01f7fe5347d999f182d4e7c2317adf4a_prof);

        
        $__internal_df6bf2dedea86f3edb8766ac4d058450c8025c00bc256f238ca48314c0a92add->leave($__internal_df6bf2dedea86f3edb8766ac4d058450c8025c00bc256f238ca48314c0a92add_prof);

    }

    public function getTemplateName()
    {
        return "edit_registration/slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  89 => 29,  82 => 25,  75 => 21,  68 => 17,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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
        <div class=\"col-md-12\" id=\"toPrint\"> 
            <div class=\"alert alert-info\" role=\"alert\">
                Print the transaction slip and pay to any Bank of your choice. You can edit registration after 24 hours of payment.
            </div>
            <h3 style=\"text-align: center;\">Students Edit Application Payment Details - 2016/2017 </h3>
            <h4 style=\"text-align: center;\">Transaction Slip</h4>
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <td>Application #:</td>
                     <td>{{ appNo }}</td>
                </tr>
                <tr>
                     <td>Name:</td>
                     <td>{{ name }}</td>
                </tr>
                <tr>
                     <td>Programme:</td>
                     <td>{{ programme }}</td>
                </tr>
                <tr>
                     <td>Email:</td>
                     <td>{{ email }}</td>
                </tr>
                <tr>
                     <td>Phone #:</td>
                     <td>{{ phone }}</td>
                </tr>
                <tr>
                     <td>Invoice #:</td>
                     <td>{{ invoice }}</td>
                </tr>
            </table>
            
            
             <table class=\"table table-hover table-bordered\">
                <tr>
                     <th style=\"text-align: center;\">1</th>
                     <th>Edit HND Application:</th>
                     <th>1000.00</th>
                </tr>
                <tr>
                     <td></td>
                     <th style=\"text-align: right;\" align=\"right\"> Total </th>
                     <th>1000.00</th>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"3\">
                        <form class=\"form-inline\">
                            <button onclick=\"printDiv('toPrint')\" type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Print Transaction Slip</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
{% endblock %}
", "edit_registration/slip.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\edit_registration\\slip.html.twig");
    }
}
