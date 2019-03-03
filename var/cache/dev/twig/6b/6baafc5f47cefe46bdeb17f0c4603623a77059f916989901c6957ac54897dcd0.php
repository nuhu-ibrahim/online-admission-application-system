<?php

/* :admin:view_applications.html.twig */
class __TwigTemplate_dab711f56c9698405035211c01ce92e655b2c01bd4773a3fa55aa5ec6b4a6668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("abase.html.twig", ":admin:view_applications.html.twig", 2);
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
        $__internal_1b392694996917a3774964c7c04b07185d6783ef2fac858dfcbac8e3187db713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b392694996917a3774964c7c04b07185d6783ef2fac858dfcbac8e3187db713->enter($__internal_1b392694996917a3774964c7c04b07185d6783ef2fac858dfcbac8e3187db713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view_applications.html.twig"));

        $__internal_0647188a2bfe088fc243e31cedca97cc1fd2cba25089d0dee38316875a164073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0647188a2bfe088fc243e31cedca97cc1fd2cba25089d0dee38316875a164073->enter($__internal_0647188a2bfe088fc243e31cedca97cc1fd2cba25089d0dee38316875a164073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view_applications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b392694996917a3774964c7c04b07185d6783ef2fac858dfcbac8e3187db713->leave($__internal_1b392694996917a3774964c7c04b07185d6783ef2fac858dfcbac8e3187db713_prof);

        
        $__internal_0647188a2bfe088fc243e31cedca97cc1fd2cba25089d0dee38316875a164073->leave($__internal_0647188a2bfe088fc243e31cedca97cc1fd2cba25089d0dee38316875a164073_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d5f78f5bf15537c3a6a2201617dca360d892934c4112d268137319bcb32e39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5f78f5bf15537c3a6a2201617dca360d892934c4112d268137319bcb32e39c->enter($__internal_2d5f78f5bf15537c3a6a2201617dca360d892934c4112d268137319bcb32e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3838ecec106bfb86f43a1bbaced95b48945b17a3bd0688e086f1642083ce5fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3838ecec106bfb86f43a1bbaced95b48945b17a3bd0688e086f1642083ce5fb9->enter($__internal_3838ecec106bfb86f43a1bbaced95b48945b17a3bd0688e086f1642083ce5fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"alert alert-info\" style=\"text-align:center;\" role=\"alert\">List of Students that have completed Registration.</div>
        <div class=\"col-md-12 table-responsive\">
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
                            <button type=\"submit\" class=\"btn btn-primary\">Print List</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_3838ecec106bfb86f43a1bbaced95b48945b17a3bd0688e086f1642083ce5fb9->leave($__internal_3838ecec106bfb86f43a1bbaced95b48945b17a3bd0688e086f1642083ce5fb9_prof);

        
        $__internal_2d5f78f5bf15537c3a6a2201617dca360d892934c4112d268137319bcb32e39c->leave($__internal_2d5f78f5bf15537c3a6a2201617dca360d892934c4112d268137319bcb32e39c_prof);

    }

    public function getTemplateName()
    {
        return ":admin:view_applications.html.twig";
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
        <div class=\"col-md-12 table-responsive\">
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
                            <button type=\"submit\" class=\"btn btn-primary\">Print List</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
{% endblock %}
", ":admin:view_applications.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/admin/view_applications.html.twig");
    }
}
