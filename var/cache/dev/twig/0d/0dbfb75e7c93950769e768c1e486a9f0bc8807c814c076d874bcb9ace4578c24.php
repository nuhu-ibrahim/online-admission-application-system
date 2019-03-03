<?php

/* admin/view_applications.html.twig */
class __TwigTemplate_922b3680ad594341350a174d299cddb20d69e32909c7d84dc2fbf58dda2b2126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("abase.html.twig", "admin/view_applications.html.twig", 2);
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
        $__internal_6e2e2099d1f94ccae79b966aa81f0d250c43a6920f6d8b1ec5a819ee508b0c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2e2099d1f94ccae79b966aa81f0d250c43a6920f6d8b1ec5a819ee508b0c09->enter($__internal_6e2e2099d1f94ccae79b966aa81f0d250c43a6920f6d8b1ec5a819ee508b0c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/view_applications.html.twig"));

        $__internal_8efc059a60bbd41b80bdcc58cd99332be85bc45ed4702127dd358566f9d889de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efc059a60bbd41b80bdcc58cd99332be85bc45ed4702127dd358566f9d889de->enter($__internal_8efc059a60bbd41b80bdcc58cd99332be85bc45ed4702127dd358566f9d889de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/view_applications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e2e2099d1f94ccae79b966aa81f0d250c43a6920f6d8b1ec5a819ee508b0c09->leave($__internal_6e2e2099d1f94ccae79b966aa81f0d250c43a6920f6d8b1ec5a819ee508b0c09_prof);

        
        $__internal_8efc059a60bbd41b80bdcc58cd99332be85bc45ed4702127dd358566f9d889de->leave($__internal_8efc059a60bbd41b80bdcc58cd99332be85bc45ed4702127dd358566f9d889de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c58688298c67b1010da93624a81e1bc34afca16a395e4e0bb6c08b932b23963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c58688298c67b1010da93624a81e1bc34afca16a395e4e0bb6c08b932b23963->enter($__internal_2c58688298c67b1010da93624a81e1bc34afca16a395e4e0bb6c08b932b23963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c08fbc2fe072b3954093c9f73902a86670be23f92890ac2652c15ca339eb4e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08fbc2fe072b3954093c9f73902a86670be23f92890ac2652c15ca339eb4e1d->enter($__internal_c08fbc2fe072b3954093c9f73902a86670be23f92890ac2652c15ca339eb4e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"alert alert-info\" style=\"text-align:center;\" role=\"alert\">List of Students that have completed Registration.</div>
        <div class=\"col-md-12 table-responsive\" id=\"toPrint\">
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <th>Application No:</th>
                     <th>Surname:</th>
                     <th>Othername:</th>
                     <th>Firstname:</th>
                     <th>Email:</th>
                     <th>Programme:</th>
                     <th>Course:</th>
                </tr>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "                <tr>
                    <td><a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fullInfo");
            echo "?appNo=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "appno", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "appno", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "surname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "othername", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "firstname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "programme", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "course", array()), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <form class=\"form-inline\">
                            <button type=\"submit\" onclick=\"printDiv('toPrint')\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Print List</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_c08fbc2fe072b3954093c9f73902a86670be23f92890ac2652c15ca339eb4e1d->leave($__internal_c08fbc2fe072b3954093c9f73902a86670be23f92890ac2652c15ca339eb4e1d_prof);

        
        $__internal_2c58688298c67b1010da93624a81e1bc34afca16a395e4e0bb6c08b932b23963->leave($__internal_2c58688298c67b1010da93624a81e1bc34afca16a395e4e0bb6c08b932b23963_prof);

    }

    public function getTemplateName()
    {
        return "admin/view_applications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends 'abase.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"alert alert-info\" style=\"text-align:center;\" role=\"alert\">List of Students that have completed Registration.</div>
        <div class=\"col-md-12 table-responsive\" id=\"toPrint\">
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <th>Application No:</th>
                     <th>Surname:</th>
                     <th>Othername:</th>
                     <th>Firstname:</th>
                     <th>Email:</th>
                     <th>Programme:</th>
                     <th>Course:</th>
                </tr>
                {% for p in students %}
                <tr>
                    <td><a href=\"{{url('fullInfo')}}?appNo={{ p.appno }}\">{{ p.appno }}</a></td>
                    <td>{{p.surname}}</td>
                    <td>{{p.othername}}</td>
                    <td>{{p.firstname}}</td>
                    <td>{{p.email}}</td>
                    <td>{{p.programme}}</td>
                    <td>{{p.course}}</td>
                </tr>
                {% endfor%}
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <form class=\"form-inline\">
                            <button type=\"submit\" onclick=\"printDiv('toPrint')\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Print List</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
{% endblock %}
", "admin/view_applications.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\admin\\view_applications.html.twig");
    }
}
