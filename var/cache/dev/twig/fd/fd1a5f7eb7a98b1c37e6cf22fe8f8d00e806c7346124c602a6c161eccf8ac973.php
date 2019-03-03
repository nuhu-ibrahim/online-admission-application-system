<?php

/* login/index.html.twig */
class __TwigTemplate_2692b9009043b81da7ac86257690d7630aa3daa2a4da2492e8818e423326a2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
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
        $__internal_ae203df6d7fd8b293973fbf3fc6b45b55867c633e5cd5d2f9d6050e282ab40ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae203df6d7fd8b293973fbf3fc6b45b55867c633e5cd5d2f9d6050e282ab40ba->enter($__internal_ae203df6d7fd8b293973fbf3fc6b45b55867c633e5cd5d2f9d6050e282ab40ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_9edb7c6ec7fa14dccce7bff14b13cfc420703896693ceff0b1dbd939426ce932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edb7c6ec7fa14dccce7bff14b13cfc420703896693ceff0b1dbd939426ce932->enter($__internal_9edb7c6ec7fa14dccce7bff14b13cfc420703896693ceff0b1dbd939426ce932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae203df6d7fd8b293973fbf3fc6b45b55867c633e5cd5d2f9d6050e282ab40ba->leave($__internal_ae203df6d7fd8b293973fbf3fc6b45b55867c633e5cd5d2f9d6050e282ab40ba_prof);

        
        $__internal_9edb7c6ec7fa14dccce7bff14b13cfc420703896693ceff0b1dbd939426ce932->leave($__internal_9edb7c6ec7fa14dccce7bff14b13cfc420703896693ceff0b1dbd939426ce932_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aaf8260286302698ff73a79a2b6e1c8fb32c7304c305a0e7c8554bdb9a6484a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aaf8260286302698ff73a79a2b6e1c8fb32c7304c305a0e7c8554bdb9a6484a->enter($__internal_1aaf8260286302698ff73a79a2b6e1c8fb32c7304c305a0e7c8554bdb9a6484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5b98d008520d88286e02ec7ab78df1c10a646cb17e87385fbe373adb99986ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b98d008520d88286e02ec7ab78df1c10a646cb17e87385fbe373adb99986ef->enter($__internal_c5b98d008520d88286e02ec7ab78df1c10a646cb17e87385fbe373adb99986ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c5b98d008520d88286e02ec7ab78df1c10a646cb17e87385fbe373adb99986ef->leave($__internal_c5b98d008520d88286e02ec7ab78df1c10a646cb17e87385fbe373adb99986ef_prof);

        
        $__internal_1aaf8260286302698ff73a79a2b6e1c8fb32c7304c305a0e7c8554bdb9a6484a->leave($__internal_1aaf8260286302698ff73a79a2b6e1c8fb32c7304c305a0e7c8554bdb9a6484a_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
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
", "login/index.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\online_admission_application\\app\\Resources\\views\\login\\index.html.twig");
    }
}
