<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b0fc7c6d56368ec6b5c16444e5370c05b4fcc1e9528e4bcac43275c82170edc6 extends Twig_Template
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
        $__internal_e3cffe0250b497557820a6048c929647838ce62918c772bc6a976bd6a907214e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cffe0250b497557820a6048c929647838ce62918c772bc6a976bd6a907214e->enter($__internal_e3cffe0250b497557820a6048c929647838ce62918c772bc6a976bd6a907214e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_1c1ef95ce55de98fcb89c1ba615c66d928e52a771e7e940ba9e17b0c0d4402e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1ef95ce55de98fcb89c1ba615c66d928e52a771e7e940ba9e17b0c0d4402e6->enter($__internal_1c1ef95ce55de98fcb89c1ba615c66d928e52a771e7e940ba9e17b0c0d4402e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e3cffe0250b497557820a6048c929647838ce62918c772bc6a976bd6a907214e->leave($__internal_e3cffe0250b497557820a6048c929647838ce62918c772bc6a976bd6a907214e_prof);

        
        $__internal_1c1ef95ce55de98fcb89c1ba615c66d928e52a771e7e940ba9e17b0c0d4402e6->leave($__internal_1c1ef95ce55de98fcb89c1ba615c66d928e52a771e7e940ba9e17b0c0d4402e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
