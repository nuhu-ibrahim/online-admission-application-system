<?php

/* admin/application_details.html.twig */
class __TwigTemplate_51b892ab408f8dc141ed8530deee634783140c7ef921eaa5ffcf1817dcd31ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", "admin/application_details.html.twig", 1);
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
        $__internal_6ad259761868baaf20a5c42902dddfcd5f1784fee371c6654b2a69a0233bb2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad259761868baaf20a5c42902dddfcd5f1784fee371c6654b2a69a0233bb2cd->enter($__internal_6ad259761868baaf20a5c42902dddfcd5f1784fee371c6654b2a69a0233bb2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/application_details.html.twig"));

        $__internal_fe7839661b7e5d36782de89c803f7778f376457146fde7ecc031b806fa9fb894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7839661b7e5d36782de89c803f7778f376457146fde7ecc031b806fa9fb894->enter($__internal_fe7839661b7e5d36782de89c803f7778f376457146fde7ecc031b806fa9fb894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/application_details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad259761868baaf20a5c42902dddfcd5f1784fee371c6654b2a69a0233bb2cd->leave($__internal_6ad259761868baaf20a5c42902dddfcd5f1784fee371c6654b2a69a0233bb2cd_prof);

        
        $__internal_fe7839661b7e5d36782de89c803f7778f376457146fde7ecc031b806fa9fb894->leave($__internal_fe7839661b7e5d36782de89c803f7778f376457146fde7ecc031b806fa9fb894_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4162914e1366a6e738dcca8d272591c294010b018644bef1fa9c571a510fafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4162914e1366a6e738dcca8d272591c294010b018644bef1fa9c571a510fafe->enter($__internal_d4162914e1366a6e738dcca8d272591c294010b018644bef1fa9c571a510fafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_938aa1f609a28ff8284eaa4748911dd5ce04a4155af498244f435ec9bf917e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938aa1f609a28ff8284eaa4748911dd5ce04a4155af498244f435ec9bf917e29->enter($__internal_938aa1f609a28ff8284eaa4748911dd5ce04a4155af498244f435ec9bf917e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <h3 style=\"text-align: center;\">Students Application Details</h3>
        <div class=\"col-md-12 table-bordered\" id=\"toPrint\"> 
            
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <th colspan=\"2\">Personal Details:</th>
                </tr>
                <tr>
                     <td colspan=\"2\"><p style=\"text-align:center;\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["img"] ?? $this->getContext($context, "img"))), "html", null, true);
        echo " \"/></p></td>
                </tr>
                <tr>
                     <td>Surname:</td>
                     <td>";
        // line 16
        echo twig_escape_filter($this->env, ($context["sname"] ?? $this->getContext($context, "sname")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Firstname:</td>
                     <td>";
        // line 20
        echo twig_escape_filter($this->env, ($context["fname"] ?? $this->getContext($context, "fname")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Othername:</td>
                     <td>";
        // line 24
        echo twig_escape_filter($this->env, ($context["oname"] ?? $this->getContext($context, "oname")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Date of Birth:</td>
                     <td>";
        // line 28
        echo twig_escape_filter($this->env, ($context["dob"] ?? $this->getContext($context, "dob")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Gender:</td>
                     <td>";
        // line 32
        echo twig_escape_filter($this->env, ($context["gender"] ?? $this->getContext($context, "gender")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Email:</td>
                     <td>";
        // line 36
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Phone:</td>
                     <td>";
        // line 40
        echo twig_escape_filter($this->env, ($context["phone"] ?? $this->getContext($context, "phone")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <th colspan=\"2\">Programme Details:</th>
                </tr>
                <tr>
                     <td>Application No:</td>
                     <td>";
        // line 47
        echo twig_escape_filter($this->env, ($context["appNo"] ?? $this->getContext($context, "appNo")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Programme:</td>
                     <td>";
        // line 51
        echo twig_escape_filter($this->env, ($context["programme"] ?? $this->getContext($context, "programme")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Course:</td>
                     <td>";
        // line 55
        echo twig_escape_filter($this->env, ($context["course"] ?? $this->getContext($context, "course")), "html", null, true);
        echo "</td>
                </tr>
                
                
                <tr>
                     <th colspan=\"2\">A - Level Details:</th>
                </tr>
                <tr>
                     <td>Name of Institution:</td>
                     <td>";
        // line 64
        echo twig_escape_filter($this->env, ($context["inst"] ?? $this->getContext($context, "inst")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Qualification</td>
                     <td>";
        // line 68
        echo twig_escape_filter($this->env, ($context["qual"] ?? $this->getContext($context, "qual")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Registration Number:</td>
                     <td>";
        // line 72
        echo twig_escape_filter($this->env, ($context["reg_no"] ?? $this->getContext($context, "reg_no")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <td>Field of Study</td>
                     <td>";
        // line 76
        echo twig_escape_filter($this->env, ($context["field"] ?? $this->getContext($context, "field")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <form class=\"form-inline\">
                            <button onclick=\"printDiv('toPrint')\" li type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                        Print Application Slip</button>
                        </form>
                    </td>
                </tr>
            </table>       
        </div>
    </div>
";
        
        $__internal_938aa1f609a28ff8284eaa4748911dd5ce04a4155af498244f435ec9bf917e29->leave($__internal_938aa1f609a28ff8284eaa4748911dd5ce04a4155af498244f435ec9bf917e29_prof);

        
        $__internal_d4162914e1366a6e738dcca8d272591c294010b018644bef1fa9c571a510fafe->leave($__internal_d4162914e1366a6e738dcca8d272591c294010b018644bef1fa9c571a510fafe_prof);

    }

    public function getTemplateName()
    {
        return "admin/application_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 76,  159 => 72,  152 => 68,  145 => 64,  133 => 55,  126 => 51,  119 => 47,  109 => 40,  102 => 36,  95 => 32,  88 => 28,  81 => 24,  74 => 20,  67 => 16,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
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
        <h3 style=\"text-align: center;\">Students Application Details</h3>
        <div class=\"col-md-12 table-bordered\" id=\"toPrint\"> 
            
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <th colspan=\"2\">Personal Details:</th>
                </tr>
                <tr>
                     <td colspan=\"2\"><p style=\"text-align:center;\"><img src=\"{{ asset(img) }} \"/></p></td>
                </tr>
                <tr>
                     <td>Surname:</td>
                     <td>{{sname}}</td>
                </tr>
                <tr>
                     <td>Firstname:</td>
                     <td>{{fname}}</td>
                </tr>
                <tr>
                     <td>Othername:</td>
                     <td>{{oname}}</td>
                </tr>
                <tr>
                     <td>Date of Birth:</td>
                     <td>{{dob}}</td>
                </tr>
                <tr>
                     <td>Gender:</td>
                     <td>{{gender}}</td>
                </tr>
                <tr>
                     <td>Email:</td>
                     <td>{{email}}</td>
                </tr>
                <tr>
                     <td>Phone:</td>
                     <td>{{phone}}</td>
                </tr>
                <tr>
                     <th colspan=\"2\">Programme Details:</th>
                </tr>
                <tr>
                     <td>Application No:</td>
                     <td>{{appNo}}</td>
                </tr>
                <tr>
                     <td>Programme:</td>
                     <td>{{programme}}</td>
                </tr>
                <tr>
                     <td>Course:</td>
                     <td>{{course}}</td>
                </tr>
                
                
                <tr>
                     <th colspan=\"2\">A - Level Details:</th>
                </tr>
                <tr>
                     <td>Name of Institution:</td>
                     <td>{{inst}}</td>
                </tr>
                <tr>
                     <td>Qualification</td>
                     <td>{{qual}}</td>
                </tr>
                <tr>
                     <td>Registration Number:</td>
                     <td>{{reg_no}}</td>
                </tr>
                <tr>
                     <td>Field of Study</td>
                     <td>{{field}}</td>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <form class=\"form-inline\">
                            <button onclick=\"printDiv('toPrint')\" li type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                        Print Application Slip</button>
                        </form>
                    </td>
                </tr>
            </table>       
        </div>
    </div>
{% endblock %}
", "admin/application_details.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\admin\\application_details.html.twig");
    }
}
