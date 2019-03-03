<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2b6e086fdef5c6e89e089e9848d7b7e47ce5c63471e9162b4c3d0cc799dba40f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b907e563fb85b6f7d685152cb0b7702647b996163aa13d03f09cff582b560ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b907e563fb85b6f7d685152cb0b7702647b996163aa13d03f09cff582b560ef->enter($__internal_3b907e563fb85b6f7d685152cb0b7702647b996163aa13d03f09cff582b560ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_555a07aec440f8c8b56b069027731612eaad33191403d67add52195b9f59ff05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555a07aec440f8c8b56b069027731612eaad33191403d67add52195b9f59ff05->enter($__internal_555a07aec440f8c8b56b069027731612eaad33191403d67add52195b9f59ff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3b907e563fb85b6f7d685152cb0b7702647b996163aa13d03f09cff582b560ef->leave($__internal_3b907e563fb85b6f7d685152cb0b7702647b996163aa13d03f09cff582b560ef_prof);

        
        $__internal_555a07aec440f8c8b56b069027731612eaad33191403d67add52195b9f59ff05->leave($__internal_555a07aec440f8c8b56b069027731612eaad33191403d67add52195b9f59ff05_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b51ad9ad7ef66b5d018aaef19a5f42fcb349e77f5b4c2222cad75ad0e1f12051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51ad9ad7ef66b5d018aaef19a5f42fcb349e77f5b4c2222cad75ad0e1f12051->enter($__internal_b51ad9ad7ef66b5d018aaef19a5f42fcb349e77f5b4c2222cad75ad0e1f12051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_85c65408915ab0f705ab195a36239ad4bbabf552f18da810efb2836e3fa5a3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c65408915ab0f705ab195a36239ad4bbabf552f18da810efb2836e3fa5a3e4->enter($__internal_85c65408915ab0f705ab195a36239ad4bbabf552f18da810efb2836e3fa5a3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_85c65408915ab0f705ab195a36239ad4bbabf552f18da810efb2836e3fa5a3e4->leave($__internal_85c65408915ab0f705ab195a36239ad4bbabf552f18da810efb2836e3fa5a3e4_prof);

        
        $__internal_b51ad9ad7ef66b5d018aaef19a5f42fcb349e77f5b4c2222cad75ad0e1f12051->leave($__internal_b51ad9ad7ef66b5d018aaef19a5f42fcb349e77f5b4c2222cad75ad0e1f12051_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
