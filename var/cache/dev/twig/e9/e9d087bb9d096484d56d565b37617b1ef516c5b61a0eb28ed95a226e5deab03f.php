<?php

/* :continue_registration:application_details.html.twig */
class __TwigTemplate_414336958f507bb4726775952f1896faf0e368fc45b81cfa4dcdb68f1ef3ee82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", ":continue_registration:application_details.html.twig", 1);
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
        $__internal_0a38e3e06ac319d187027cb800e74ebec498d2a96cee1b5947cb413b9217a916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a38e3e06ac319d187027cb800e74ebec498d2a96cee1b5947cb413b9217a916->enter($__internal_0a38e3e06ac319d187027cb800e74ebec498d2a96cee1b5947cb413b9217a916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":continue_registration:application_details.html.twig"));

        $__internal_84d8135e72108abe66ca503dcba4751eaaa078aab3450390aa1033dbbb65a8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d8135e72108abe66ca503dcba4751eaaa078aab3450390aa1033dbbb65a8c6->enter($__internal_84d8135e72108abe66ca503dcba4751eaaa078aab3450390aa1033dbbb65a8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":continue_registration:application_details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a38e3e06ac319d187027cb800e74ebec498d2a96cee1b5947cb413b9217a916->leave($__internal_0a38e3e06ac319d187027cb800e74ebec498d2a96cee1b5947cb413b9217a916_prof);

        
        $__internal_84d8135e72108abe66ca503dcba4751eaaa078aab3450390aa1033dbbb65a8c6->leave($__internal_84d8135e72108abe66ca503dcba4751eaaa078aab3450390aa1033dbbb65a8c6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_65bbcd675bad2375ee5101dc755a1080a0c7cd70abb7d466b2026b7cbfdb887e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bbcd675bad2375ee5101dc755a1080a0c7cd70abb7d466b2026b7cbfdb887e->enter($__internal_65bbcd675bad2375ee5101dc755a1080a0c7cd70abb7d466b2026b7cbfdb887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe2ebb3dc514040b2baa16ed2725733bba8aab692659ce8cc68495035bc15f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2ebb3dc514040b2baa16ed2725733bba8aab692659ce8cc68495035bc15f2f->enter($__internal_fe2ebb3dc514040b2baa16ed2725733bba8aab692659ce8cc68495035bc15f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <h3 style=\"text-align: center;\">Students Application Details</h3>
        <div class=\"col-md-12 table-bordered\"> 
            
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <th colspan=\"2\">Personal Details:</th>
                </tr>
                <tr>
                     <td colspan=\"2\"><p style=\"text-align:center;\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Photo0241.jpg"), "html", null, true);
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
                            <button type=\"submit\" class=\"btn btn-primary\">Print Application Slip</button>
                        </form>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>
";
        
        $__internal_fe2ebb3dc514040b2baa16ed2725733bba8aab692659ce8cc68495035bc15f2f->leave($__internal_fe2ebb3dc514040b2baa16ed2725733bba8aab692659ce8cc68495035bc15f2f_prof);

        
        $__internal_65bbcd675bad2375ee5101dc755a1080a0c7cd70abb7d466b2026b7cbfdb887e->leave($__internal_65bbcd675bad2375ee5101dc755a1080a0c7cd70abb7d466b2026b7cbfdb887e_prof);

    }

    public function getTemplateName()
    {
        return ":continue_registration:application_details.html.twig";
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
        return new Twig_Source("{% extends 'ubase.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <h3 style=\"text-align: center;\">Students Application Details</h3>
        <div class=\"col-md-12 table-bordered\"> 
            
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <th colspan=\"2\">Personal Details:</th>
                </tr>
                <tr>
                     <td colspan=\"2\"><p style=\"text-align:center;\"><img src=\"{{ asset('Photo0241.jpg') }} \"/></p></td>
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
                            <button type=\"submit\" class=\"btn btn-primary\">Print Application Slip</button>
                        </form>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>
{% endblock %}
", ":continue_registration:application_details.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/continue_registration/application_details.html.twig");
    }
}
