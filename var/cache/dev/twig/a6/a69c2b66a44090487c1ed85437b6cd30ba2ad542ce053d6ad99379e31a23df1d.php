<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_31924be06878f326174d4b966ea72a9e0e34ed2dbee83712059b76d735e207c3 extends Twig_Template
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
        $__internal_4cb0e199a47509116d30728354e7dfb9ec423f258798c0a32faf93ac7e6b731c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb0e199a47509116d30728354e7dfb9ec423f258798c0a32faf93ac7e6b731c->enter($__internal_4cb0e199a47509116d30728354e7dfb9ec423f258798c0a32faf93ac7e6b731c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f79039970e6f67f1dbc8d216a0a868ad9ed86b88c1377459c6bc67152a0d8255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79039970e6f67f1dbc8d216a0a868ad9ed86b88c1377459c6bc67152a0d8255->enter($__internal_f79039970e6f67f1dbc8d216a0a868ad9ed86b88c1377459c6bc67152a0d8255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4cb0e199a47509116d30728354e7dfb9ec423f258798c0a32faf93ac7e6b731c->leave($__internal_4cb0e199a47509116d30728354e7dfb9ec423f258798c0a32faf93ac7e6b731c_prof);

        
        $__internal_f79039970e6f67f1dbc8d216a0a868ad9ed86b88c1377459c6bc67152a0d8255->leave($__internal_f79039970e6f67f1dbc8d216a0a868ad9ed86b88c1377459c6bc67152a0d8255_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
