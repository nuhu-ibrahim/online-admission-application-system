<?php

/* :edit_registration:slip.html.twig */
class __TwigTemplate_285e03671aa4e10357fa2a586dd38486f8bbecb98e0fab5cce69db1c2e44ce15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", ":edit_registration:slip.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["appNo"] ?? null), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Name:</td>
                     <td>";
        // line 17
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Programme:</td>
                     <td>";
        // line 21
        echo twig_escape_filter($this->env, ($context["programme"] ?? null), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Email:</td>
                     <td>";
        // line 25
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Phone #:</td>
                     <td>";
        // line 29
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Invoice #:</td>
                     <td>";
        // line 33
        echo twig_escape_filter($this->env, ($context["invoice"] ?? null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return ":edit_registration:slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  71 => 29,  64 => 25,  57 => 21,  50 => 17,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":edit_registration:slip.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/edit_registration/slip.html.twig");
    }
}
