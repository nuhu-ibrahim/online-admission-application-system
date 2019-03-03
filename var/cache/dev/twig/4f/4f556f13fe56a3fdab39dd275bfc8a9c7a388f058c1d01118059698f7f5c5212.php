<?php

/* start_registration/slip.html.twig */
class __TwigTemplate_7df615fecbb5a88687ce06ec60b5dfbaa166732006ab4fdd349a2c89aa7c4802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "start_registration/slip.html.twig", 1);
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
        $__internal_403eb1838b600e6e7c6813ce5d590d16567ade41503c15970b85138486419d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403eb1838b600e6e7c6813ce5d590d16567ade41503c15970b85138486419d83->enter($__internal_403eb1838b600e6e7c6813ce5d590d16567ade41503c15970b85138486419d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start_registration/slip.html.twig"));

        $__internal_901701e7e680c86ddc9bc4145639c8d619e151f188699faaa5b5a3d4d4ce62ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901701e7e680c86ddc9bc4145639c8d619e151f188699faaa5b5a3d4d4ce62ed->enter($__internal_901701e7e680c86ddc9bc4145639c8d619e151f188699faaa5b5a3d4d4ce62ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start_registration/slip.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_403eb1838b600e6e7c6813ce5d590d16567ade41503c15970b85138486419d83->leave($__internal_403eb1838b600e6e7c6813ce5d590d16567ade41503c15970b85138486419d83_prof);

        
        $__internal_901701e7e680c86ddc9bc4145639c8d619e151f188699faaa5b5a3d4d4ce62ed->leave($__internal_901701e7e680c86ddc9bc4145639c8d619e151f188699faaa5b5a3d4d4ce62ed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_97afec258037a78142a0b4e7f89b4b73e3b81326126b366eba48c72190fa48ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97afec258037a78142a0b4e7f89b4b73e3b81326126b366eba48c72190fa48ec->enter($__internal_97afec258037a78142a0b4e7f89b4b73e3b81326126b366eba48c72190fa48ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_671f815d0d51f29b562f55b7c9bf542888765bb68b2c61a4faac91a44c8d9d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671f815d0d51f29b562f55b7c9bf542888765bb68b2c61a4faac91a44c8d9d07->enter($__internal_671f815d0d51f29b562f55b7c9bf542888765bb68b2c61a4faac91a44c8d9d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-12\" id=\"toPrint\"> 
            <div class=\"alert alert-info\" role=\"alert\">
                Print the transaction slip and pay to any Bank of your choice. You can continue registration after 24 hours of payment.
            </div>
            <h3 style=\"text-align: center;\">Students Application Payment Details - 2016/2017 </h3>
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
                     <th>HND Application:</th>
                     <th>10000.00</th>
                </tr>
                <tr>
                     <td></td>
                     <th style=\"text-align: right;\" align=\"right\"> Total </th>
                     <th>10000.00</th>
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
        
        $__internal_671f815d0d51f29b562f55b7c9bf542888765bb68b2c61a4faac91a44c8d9d07->leave($__internal_671f815d0d51f29b562f55b7c9bf542888765bb68b2c61a4faac91a44c8d9d07_prof);

        
        $__internal_97afec258037a78142a0b4e7f89b4b73e3b81326126b366eba48c72190fa48ec->leave($__internal_97afec258037a78142a0b4e7f89b4b73e3b81326126b366eba48c72190fa48ec_prof);

    }

    public function getTemplateName()
    {
        return "start_registration/slip.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-12\" id=\"toPrint\"> 
            <div class=\"alert alert-info\" role=\"alert\">
                Print the transaction slip and pay to any Bank of your choice. You can continue registration after 24 hours of payment.
            </div>
            <h3 style=\"text-align: center;\">Students Application Payment Details - 2016/2017 </h3>
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
                     <th>HND Application:</th>
                     <th>10000.00</th>
                </tr>
                <tr>
                     <td></td>
                     <th style=\"text-align: right;\" align=\"right\"> Total </th>
                     <th>10000.00</th>
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
", "start_registration/slip.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\start_registration\\slip.html.twig");
    }
}
