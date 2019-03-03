<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_adbd0827083a1493f7de58c995b4ab819eb8a5f617eac76247e55ee7c8552e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8516c07cc6b8a61a7c4d418874182f6f8642cd517bbde824d64767a0cabc8d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8516c07cc6b8a61a7c4d418874182f6f8642cd517bbde824d64767a0cabc8d7e->enter($__internal_8516c07cc6b8a61a7c4d418874182f6f8642cd517bbde824d64767a0cabc8d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_0293e5bd45d5b02f78a11e9fe36c672820a84a124b5bccdc50c3e456bccb7066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0293e5bd45d5b02f78a11e9fe36c672820a84a124b5bccdc50c3e456bccb7066->enter($__internal_0293e5bd45d5b02f78a11e9fe36c672820a84a124b5bccdc50c3e456bccb7066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8516c07cc6b8a61a7c4d418874182f6f8642cd517bbde824d64767a0cabc8d7e->leave($__internal_8516c07cc6b8a61a7c4d418874182f6f8642cd517bbde824d64767a0cabc8d7e_prof);

        
        $__internal_0293e5bd45d5b02f78a11e9fe36c672820a84a124b5bccdc50c3e456bccb7066->leave($__internal_0293e5bd45d5b02f78a11e9fe36c672820a84a124b5bccdc50c3e456bccb7066_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
