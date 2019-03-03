<?php

/* :start_registration:slip.html.twig */
class __TwigTemplate_8aa4c662043fec95160b2054a7e570a1c8ddd7cb82c88e5ee8c870806bbca7fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":start_registration:slip.html.twig", 1);
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
        $__internal_5d8690f1d425556d1ddd7801dd5e84c7e0fcd7f399e77c9f942e08e92ff6d98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8690f1d425556d1ddd7801dd5e84c7e0fcd7f399e77c9f942e08e92ff6d98a->enter($__internal_5d8690f1d425556d1ddd7801dd5e84c7e0fcd7f399e77c9f942e08e92ff6d98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":start_registration:slip.html.twig"));

        $__internal_367080b4f26bd3df0f241c2787a44b7b2a2dab8e7d9912fcf32a89c7ba532954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367080b4f26bd3df0f241c2787a44b7b2a2dab8e7d9912fcf32a89c7ba532954->enter($__internal_367080b4f26bd3df0f241c2787a44b7b2a2dab8e7d9912fcf32a89c7ba532954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":start_registration:slip.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d8690f1d425556d1ddd7801dd5e84c7e0fcd7f399e77c9f942e08e92ff6d98a->leave($__internal_5d8690f1d425556d1ddd7801dd5e84c7e0fcd7f399e77c9f942e08e92ff6d98a_prof);

        
        $__internal_367080b4f26bd3df0f241c2787a44b7b2a2dab8e7d9912fcf32a89c7ba532954->leave($__internal_367080b4f26bd3df0f241c2787a44b7b2a2dab8e7d9912fcf32a89c7ba532954_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e497df1b0ea056fa08eca76ebd0eff00f82740f0fddfd5ba454acae0c931a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e497df1b0ea056fa08eca76ebd0eff00f82740f0fddfd5ba454acae0c931a3b->enter($__internal_6e497df1b0ea056fa08eca76ebd0eff00f82740f0fddfd5ba454acae0c931a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db5fcf7e86baeba2f8e77e99b97986d62a3c96ba4f01430698eff3d713bc9df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5fcf7e86baeba2f8e77e99b97986d62a3c96ba4f01430698eff3d713bc9df5->enter($__internal_db5fcf7e86baeba2f8e77e99b97986d62a3c96ba4f01430698eff3d713bc9df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-12\"> 
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
                            <button type=\"submit\" class=\"btn btn-primary\">Print Transaction Slip</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_db5fcf7e86baeba2f8e77e99b97986d62a3c96ba4f01430698eff3d713bc9df5->leave($__internal_db5fcf7e86baeba2f8e77e99b97986d62a3c96ba4f01430698eff3d713bc9df5_prof);

        
        $__internal_6e497df1b0ea056fa08eca76ebd0eff00f82740f0fddfd5ba454acae0c931a3b->leave($__internal_6e497df1b0ea056fa08eca76ebd0eff00f82740f0fddfd5ba454acae0c931a3b_prof);

    }

    public function getTemplateName()
    {
        return ":start_registration:slip.html.twig";
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
        <div class=\"col-md-12\"> 
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
                            <button type=\"submit\" class=\"btn btn-primary\">Print Transaction Slip</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
{% endblock %}
", ":start_registration:slip.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/start_registration/slip.html.twig");
    }
}
