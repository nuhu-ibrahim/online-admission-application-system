<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e1ee567bf886f24c336db718c8d38bc0f75bc591512f01acc2c35641d9965ba1 extends Twig_Template
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
        $__internal_36886d58e5d8fd777a9b9f56c17ee848caab4131493b2a3ed5cd9ace88eec7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36886d58e5d8fd777a9b9f56c17ee848caab4131493b2a3ed5cd9ace88eec7d0->enter($__internal_36886d58e5d8fd777a9b9f56c17ee848caab4131493b2a3ed5cd9ace88eec7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5ed2185621a920a0615e22fd704eea9888eac6c140628f5917f1da16ad32c611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed2185621a920a0615e22fd704eea9888eac6c140628f5917f1da16ad32c611->enter($__internal_5ed2185621a920a0615e22fd704eea9888eac6c140628f5917f1da16ad32c611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_36886d58e5d8fd777a9b9f56c17ee848caab4131493b2a3ed5cd9ace88eec7d0->leave($__internal_36886d58e5d8fd777a9b9f56c17ee848caab4131493b2a3ed5cd9ace88eec7d0_prof);

        
        $__internal_5ed2185621a920a0615e22fd704eea9888eac6c140628f5917f1da16ad32c611->leave($__internal_5ed2185621a920a0615e22fd704eea9888eac6c140628f5917f1da16ad32c611_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
