<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_db68338940f86c58df0cf1ea2918569eecf7d28be43f6da574e7366175b67beb extends Twig_Template
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
        $__internal_5fb1c7a27f00b34f96cded56553d73f463bbad66aced5ddc8377e129af8f9266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb1c7a27f00b34f96cded56553d73f463bbad66aced5ddc8377e129af8f9266->enter($__internal_5fb1c7a27f00b34f96cded56553d73f463bbad66aced5ddc8377e129af8f9266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_962becb3139b3a7f21faba88f612419721943abaa5447877bb2637c692d046ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962becb3139b3a7f21faba88f612419721943abaa5447877bb2637c692d046ea->enter($__internal_962becb3139b3a7f21faba88f612419721943abaa5447877bb2637c692d046ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5fb1c7a27f00b34f96cded56553d73f463bbad66aced5ddc8377e129af8f9266->leave($__internal_5fb1c7a27f00b34f96cded56553d73f463bbad66aced5ddc8377e129af8f9266_prof);

        
        $__internal_962becb3139b3a7f21faba88f612419721943abaa5447877bb2637c692d046ea->leave($__internal_962becb3139b3a7f21faba88f612419721943abaa5447877bb2637c692d046ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
