<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6a4ece7208aff012ccfb38bb693ef97ee4c46a52ecc92b870655cca023c6d0a8 extends Twig_Template
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
        $__internal_cf1a86b76b8e985e5965f4b8c86d8f91c2412e3b76c15348154612d1541f7ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1a86b76b8e985e5965f4b8c86d8f91c2412e3b76c15348154612d1541f7ada->enter($__internal_cf1a86b76b8e985e5965f4b8c86d8f91c2412e3b76c15348154612d1541f7ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2bea6ef1e98f8e90d967fb37ce4e113a95c0260d8ac8f07903c481041899e72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bea6ef1e98f8e90d967fb37ce4e113a95c0260d8ac8f07903c481041899e72a->enter($__internal_2bea6ef1e98f8e90d967fb37ce4e113a95c0260d8ac8f07903c481041899e72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cf1a86b76b8e985e5965f4b8c86d8f91c2412e3b76c15348154612d1541f7ada->leave($__internal_cf1a86b76b8e985e5965f4b8c86d8f91c2412e3b76c15348154612d1541f7ada_prof);

        
        $__internal_2bea6ef1e98f8e90d967fb37ce4e113a95c0260d8ac8f07903c481041899e72a->leave($__internal_2bea6ef1e98f8e90d967fb37ce4e113a95c0260d8ac8f07903c481041899e72a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
