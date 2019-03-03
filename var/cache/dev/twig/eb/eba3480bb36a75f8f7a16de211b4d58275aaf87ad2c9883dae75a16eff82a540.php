<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3a9f89dfdc11c39af135f5ec20fa610f61355d2761dfd887a58a4ee92f3f07a9 extends Twig_Template
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
        $__internal_55b1bf6bf68ebc1570186dd1e29b4db82dc088668dd0b856afc9c17284c9b705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b1bf6bf68ebc1570186dd1e29b4db82dc088668dd0b856afc9c17284c9b705->enter($__internal_55b1bf6bf68ebc1570186dd1e29b4db82dc088668dd0b856afc9c17284c9b705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5a652dea51866ad86b0a6c09467c3bb2e3368923375178e4eeb2cbca1f7a7ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a652dea51866ad86b0a6c09467c3bb2e3368923375178e4eeb2cbca1f7a7ae4->enter($__internal_5a652dea51866ad86b0a6c09467c3bb2e3368923375178e4eeb2cbca1f7a7ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_55b1bf6bf68ebc1570186dd1e29b4db82dc088668dd0b856afc9c17284c9b705->leave($__internal_55b1bf6bf68ebc1570186dd1e29b4db82dc088668dd0b856afc9c17284c9b705_prof);

        
        $__internal_5a652dea51866ad86b0a6c09467c3bb2e3368923375178e4eeb2cbca1f7a7ae4->leave($__internal_5a652dea51866ad86b0a6c09467c3bb2e3368923375178e4eeb2cbca1f7a7ae4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
