<?php

/* :login:index.html.twig */
class __TwigTemplate_b85b090a7da263dfd136a88b8e826ac181e70b3641e833ad95e4fc3f85305399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":login:index.html.twig", 1);
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
        $__internal_bfdf4b4c2439c63e825d4bea451f674f3465ee3a194abbbd9a131ce0ad9960d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdf4b4c2439c63e825d4bea451f674f3465ee3a194abbbd9a131ce0ad9960d5->enter($__internal_bfdf4b4c2439c63e825d4bea451f674f3465ee3a194abbbd9a131ce0ad9960d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":login:index.html.twig"));

        $__internal_f76d0a78b7d12e43ff1ac0742bef4e5c0958ddd6175aee508b7984016b55836d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76d0a78b7d12e43ff1ac0742bef4e5c0958ddd6175aee508b7984016b55836d->enter($__internal_f76d0a78b7d12e43ff1ac0742bef4e5c0958ddd6175aee508b7984016b55836d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":login:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfdf4b4c2439c63e825d4bea451f674f3465ee3a194abbbd9a131ce0ad9960d5->leave($__internal_bfdf4b4c2439c63e825d4bea451f674f3465ee3a194abbbd9a131ce0ad9960d5_prof);

        
        $__internal_f76d0a78b7d12e43ff1ac0742bef4e5c0958ddd6175aee508b7984016b55836d->leave($__internal_f76d0a78b7d12e43ff1ac0742bef4e5c0958ddd6175aee508b7984016b55836d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d05efc47ce1dfda69d42c49c525ded146e2f00cd8ce59e225dd173e673cfb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d05efc47ce1dfda69d42c49c525ded146e2f00cd8ce59e225dd173e673cfb9d->enter($__internal_1d05efc47ce1dfda69d42c49c525ded146e2f00cd8ce59e225dd173e673cfb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9221f5c65a209e81b91f773408f9ba3528836caeea7516ab7e6988b590d5d291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9221f5c65a209e81b91f773408f9ba3528836caeea7516ab7e6988b590d5d291->enter($__internal_9221f5c65a209e81b91f773408f9ba3528836caeea7516ab7e6988b590d5d291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            <form name=\"login_form\" method=\"POST\" action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
        echo "\">
                <div class=\"alert alert-info\" role=\"alert\"><p style=\"text-align: center\">Login to your Account</p></div>
                ";
        // line 7
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 8
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["errors"] ?? $this->getContext($context, "errors")), "messageKey", array()), $this->getAttribute(($context["errors"] ?? $this->getContext($context, "errors")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 12
        echo "                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    <input type=\"text\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" name=\"_password\" class=\"form-control\" />
                </div>
                <input type=\"submit\" name=\"submit\" value=\"Login\" class=\"btn btn-success\">
            </form>
        </div>
    </div>
";
        
        $__internal_9221f5c65a209e81b91f773408f9ba3528836caeea7516ab7e6988b590d5d291->leave($__internal_9221f5c65a209e81b91f773408f9ba3528836caeea7516ab7e6988b590d5d291_prof);

        
        $__internal_1d05efc47ce1dfda69d42c49c525ded146e2f00cd8ce59e225dd173e673cfb9d->leave($__internal_1d05efc47ce1dfda69d42c49c525ded146e2f00cd8ce59e225dd173e673cfb9d_prof);

    }

    public function getTemplateName()
    {
        return ":login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  69 => 12,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <div class=\"col-md-10 col-md-offset-1\"> 
            <form name=\"login_form\" method=\"POST\" action=\"{{ url(\"login\") }}\">
                <div class=\"alert alert-info\" role=\"alert\"><p style=\"text-align: center\">Login to your Account</p></div>
                {% if errors %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ errors.messageKey|trans(errors.messageData, 'security') }}
                    </div>
                {% endif %}
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    <input type=\"text\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" name=\"_password\" class=\"form-control\" />
                </div>
                <input type=\"submit\" name=\"submit\" value=\"Login\" class=\"btn btn-success\">
            </form>
        </div>
    </div>
{% endblock %}
", ":login:index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/login/index.html.twig");
    }
}
