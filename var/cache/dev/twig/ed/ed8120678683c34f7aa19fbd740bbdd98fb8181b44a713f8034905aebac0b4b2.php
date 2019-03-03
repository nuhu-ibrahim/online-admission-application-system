<?php

/* :edit_registration:slip.html.twig */
class __TwigTemplate_58a63bf6b209cdb97cbedfd0ee6e33fb5807f6a229285606388b7b8686d9132b extends Twig_Template
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
        $__internal_a8469f5b95957e155242185c154f52712bfa6aa2edac04d1860a66e1b0c4a17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8469f5b95957e155242185c154f52712bfa6aa2edac04d1860a66e1b0c4a17d->enter($__internal_a8469f5b95957e155242185c154f52712bfa6aa2edac04d1860a66e1b0c4a17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":edit_registration:slip.html.twig"));

        $__internal_6fba544680478ce3711c07d01e26cd698fe38971173f192aabaf3ac83ff71214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fba544680478ce3711c07d01e26cd698fe38971173f192aabaf3ac83ff71214->enter($__internal_6fba544680478ce3711c07d01e26cd698fe38971173f192aabaf3ac83ff71214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":edit_registration:slip.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8469f5b95957e155242185c154f52712bfa6aa2edac04d1860a66e1b0c4a17d->leave($__internal_a8469f5b95957e155242185c154f52712bfa6aa2edac04d1860a66e1b0c4a17d_prof);

        
        $__internal_6fba544680478ce3711c07d01e26cd698fe38971173f192aabaf3ac83ff71214->leave($__internal_6fba544680478ce3711c07d01e26cd698fe38971173f192aabaf3ac83ff71214_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7172b3eb943df1761c7fb95cf26b8fafba0f13327a689bbb13323329ec9d92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7172b3eb943df1761c7fb95cf26b8fafba0f13327a689bbb13323329ec9d92d->enter($__internal_c7172b3eb943df1761c7fb95cf26b8fafba0f13327a689bbb13323329ec9d92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_988259a6996d4dae51b15fcd198b04a92834f3f008f850277111043fc5e361c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988259a6996d4dae51b15fcd198b04a92834f3f008f850277111043fc5e361c4->enter($__internal_988259a6996d4dae51b15fcd198b04a92834f3f008f850277111043fc5e361c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-12\"> 
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
                            <button type=\"submit\" class=\"btn btn-primary\">Print Transaction Slip</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_988259a6996d4dae51b15fcd198b04a92834f3f008f850277111043fc5e361c4->leave($__internal_988259a6996d4dae51b15fcd198b04a92834f3f008f850277111043fc5e361c4_prof);

        
        $__internal_c7172b3eb943df1761c7fb95cf26b8fafba0f13327a689bbb13323329ec9d92d->leave($__internal_c7172b3eb943df1761c7fb95cf26b8fafba0f13327a689bbb13323329ec9d92d_prof);

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
        <div class=\"col-md-12\"> 
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
                            <button type=\"submit\" class=\"btn btn-primary\">Print Transaction Slip</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
{% endblock %}
", ":edit_registration:slip.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/edit_registration/slip.html.twig");
    }
}
