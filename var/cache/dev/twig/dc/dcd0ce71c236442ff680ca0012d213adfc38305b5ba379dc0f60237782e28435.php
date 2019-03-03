<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5e42f230b82bdbb79d9d31df12fbfca6a579180557c2f1f64ae5519d266a0cd2 extends Twig_Template
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
        $__internal_c1def6f2c0c573ba65ba86fa29dd0e87ad24a42f76f8a7123f55ae7d758b4a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1def6f2c0c573ba65ba86fa29dd0e87ad24a42f76f8a7123f55ae7d758b4a63->enter($__internal_c1def6f2c0c573ba65ba86fa29dd0e87ad24a42f76f8a7123f55ae7d758b4a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ba6f0f835056f74161e80d3bc19ff1b603071bf3d8d08678b7c4c8e132d606f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6f0f835056f74161e80d3bc19ff1b603071bf3d8d08678b7c4c8e132d606f3->enter($__internal_ba6f0f835056f74161e80d3bc19ff1b603071bf3d8d08678b7c4c8e132d606f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c1def6f2c0c573ba65ba86fa29dd0e87ad24a42f76f8a7123f55ae7d758b4a63->leave($__internal_c1def6f2c0c573ba65ba86fa29dd0e87ad24a42f76f8a7123f55ae7d758b4a63_prof);

        
        $__internal_ba6f0f835056f74161e80d3bc19ff1b603071bf3d8d08678b7c4c8e132d606f3->leave($__internal_ba6f0f835056f74161e80d3bc19ff1b603071bf3d8d08678b7c4c8e132d606f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
