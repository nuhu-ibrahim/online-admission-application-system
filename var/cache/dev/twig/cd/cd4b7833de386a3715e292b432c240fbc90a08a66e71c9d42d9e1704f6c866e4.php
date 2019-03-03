<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_07bebf60d105becd299cb26345d628a2d9eabe32e68381b3b64858a9d48bd8c1 extends Twig_Template
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
        $__internal_d847a2a1c35b579baf3a18075e79a057a1d5feef04244ca7e0e6214f6ae8e1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d847a2a1c35b579baf3a18075e79a057a1d5feef04244ca7e0e6214f6ae8e1d9->enter($__internal_d847a2a1c35b579baf3a18075e79a057a1d5feef04244ca7e0e6214f6ae8e1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ff118c547fa0e59da1683be4f60a2ba6d24f56d211e052b5b57fab1dc0fbc14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff118c547fa0e59da1683be4f60a2ba6d24f56d211e052b5b57fab1dc0fbc14b->enter($__internal_ff118c547fa0e59da1683be4f60a2ba6d24f56d211e052b5b57fab1dc0fbc14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d847a2a1c35b579baf3a18075e79a057a1d5feef04244ca7e0e6214f6ae8e1d9->leave($__internal_d847a2a1c35b579baf3a18075e79a057a1d5feef04244ca7e0e6214f6ae8e1d9_prof);

        
        $__internal_ff118c547fa0e59da1683be4f60a2ba6d24f56d211e052b5b57fab1dc0fbc14b->leave($__internal_ff118c547fa0e59da1683be4f60a2ba6d24f56d211e052b5b57fab1dc0fbc14b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
