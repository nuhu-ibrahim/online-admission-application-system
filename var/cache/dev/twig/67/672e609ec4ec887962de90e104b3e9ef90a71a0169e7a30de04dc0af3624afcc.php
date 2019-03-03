<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_09fa5f1ca65044b3a3fbb920fb715bbb5a1bac10c4176faa0169427eb5a8b6b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bc60b140783de67bc1a3ed0400b14b70f33246ab6afce835031a12a6cdd9a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc60b140783de67bc1a3ed0400b14b70f33246ab6afce835031a12a6cdd9a27->enter($__internal_0bc60b140783de67bc1a3ed0400b14b70f33246ab6afce835031a12a6cdd9a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8092da4c3a777816368055bfe314f6fd7d520125d91b7047b1521601f27e74fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8092da4c3a777816368055bfe314f6fd7d520125d91b7047b1521601f27e74fa->enter($__internal_8092da4c3a777816368055bfe314f6fd7d520125d91b7047b1521601f27e74fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc60b140783de67bc1a3ed0400b14b70f33246ab6afce835031a12a6cdd9a27->leave($__internal_0bc60b140783de67bc1a3ed0400b14b70f33246ab6afce835031a12a6cdd9a27_prof);

        
        $__internal_8092da4c3a777816368055bfe314f6fd7d520125d91b7047b1521601f27e74fa->leave($__internal_8092da4c3a777816368055bfe314f6fd7d520125d91b7047b1521601f27e74fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdd38745f24b438c3d12fc9853e065f8068ad37907a6f01084f99b62f77ab203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd38745f24b438c3d12fc9853e065f8068ad37907a6f01084f99b62f77ab203->enter($__internal_fdd38745f24b438c3d12fc9853e065f8068ad37907a6f01084f99b62f77ab203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08a256c30790c91a4247e79209d3f870f19d176e27076ff7a24b59f556c6e96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a256c30790c91a4247e79209d3f870f19d176e27076ff7a24b59f556c6e96b->enter($__internal_08a256c30790c91a4247e79209d3f870f19d176e27076ff7a24b59f556c6e96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_08a256c30790c91a4247e79209d3f870f19d176e27076ff7a24b59f556c6e96b->leave($__internal_08a256c30790c91a4247e79209d3f870f19d176e27076ff7a24b59f556c6e96b_prof);

        
        $__internal_fdd38745f24b438c3d12fc9853e065f8068ad37907a6f01084f99b62f77ab203->leave($__internal_fdd38745f24b438c3d12fc9853e065f8068ad37907a6f01084f99b62f77ab203_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b886c4b8ddbb7e2e0c08ac9242b2ea50a29b519290db302b6cf0d16bdc039058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b886c4b8ddbb7e2e0c08ac9242b2ea50a29b519290db302b6cf0d16bdc039058->enter($__internal_b886c4b8ddbb7e2e0c08ac9242b2ea50a29b519290db302b6cf0d16bdc039058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34fd97ebc1d34926f26857f655e3c73124972c0095497844484d5b091aafc89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fd97ebc1d34926f26857f655e3c73124972c0095497844484d5b091aafc89d->enter($__internal_34fd97ebc1d34926f26857f655e3c73124972c0095497844484d5b091aafc89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_34fd97ebc1d34926f26857f655e3c73124972c0095497844484d5b091aafc89d->leave($__internal_34fd97ebc1d34926f26857f655e3c73124972c0095497844484d5b091aafc89d_prof);

        
        $__internal_b886c4b8ddbb7e2e0c08ac9242b2ea50a29b519290db302b6cf0d16bdc039058->leave($__internal_b886c4b8ddbb7e2e0c08ac9242b2ea50a29b519290db302b6cf0d16bdc039058_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
