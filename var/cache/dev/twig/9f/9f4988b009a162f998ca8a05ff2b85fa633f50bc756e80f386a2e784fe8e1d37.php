<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e3d7d144eb9f235769b8853585b5422f378112ecd2fdfd7d0e1d5e12fc9ad92e extends Twig_Template
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
        $__internal_bb7a2b81881c776de9e845bab2aad02414ab0ef9bb100fdb511ccc5b5411250c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7a2b81881c776de9e845bab2aad02414ab0ef9bb100fdb511ccc5b5411250c->enter($__internal_bb7a2b81881c776de9e845bab2aad02414ab0ef9bb100fdb511ccc5b5411250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_088de47d85c7f6e7f79f1d563064e81eddeafce53fc8902dfc43be2669ba883a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088de47d85c7f6e7f79f1d563064e81eddeafce53fc8902dfc43be2669ba883a->enter($__internal_088de47d85c7f6e7f79f1d563064e81eddeafce53fc8902dfc43be2669ba883a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bb7a2b81881c776de9e845bab2aad02414ab0ef9bb100fdb511ccc5b5411250c->leave($__internal_bb7a2b81881c776de9e845bab2aad02414ab0ef9bb100fdb511ccc5b5411250c_prof);

        
        $__internal_088de47d85c7f6e7f79f1d563064e81eddeafce53fc8902dfc43be2669ba883a->leave($__internal_088de47d85c7f6e7f79f1d563064e81eddeafce53fc8902dfc43be2669ba883a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
