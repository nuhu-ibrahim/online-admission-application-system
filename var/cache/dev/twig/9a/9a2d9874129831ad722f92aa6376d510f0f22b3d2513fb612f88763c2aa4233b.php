<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_42caf4244531e24759ce08b7970e05180c57c5802906f1757bac214d0502fb25 extends Twig_Template
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
        $__internal_6b7d6cf676bc4bcbd32ef0679de29549f67a2a4ce211f18c180e2c58fa060076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7d6cf676bc4bcbd32ef0679de29549f67a2a4ce211f18c180e2c58fa060076->enter($__internal_6b7d6cf676bc4bcbd32ef0679de29549f67a2a4ce211f18c180e2c58fa060076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_df74e3e75f5b8788a97cf94226ade083643d18bbc83211ee4d6c40fa3dd64fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df74e3e75f5b8788a97cf94226ade083643d18bbc83211ee4d6c40fa3dd64fb9->enter($__internal_df74e3e75f5b8788a97cf94226ade083643d18bbc83211ee4d6c40fa3dd64fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6b7d6cf676bc4bcbd32ef0679de29549f67a2a4ce211f18c180e2c58fa060076->leave($__internal_6b7d6cf676bc4bcbd32ef0679de29549f67a2a4ce211f18c180e2c58fa060076_prof);

        
        $__internal_df74e3e75f5b8788a97cf94226ade083643d18bbc83211ee4d6c40fa3dd64fb9->leave($__internal_df74e3e75f5b8788a97cf94226ade083643d18bbc83211ee4d6c40fa3dd64fb9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0d2384b7d0d4776f28536b370b81a61341960e368ee905679e041c39a84009e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d2384b7d0d4776f28536b370b81a61341960e368ee905679e041c39a84009e->enter($__internal_b0d2384b7d0d4776f28536b370b81a61341960e368ee905679e041c39a84009e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c157a48af4ff5cf104ed2f0882eedcf7b2201f50b6bd92701605dd83485452f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c157a48af4ff5cf104ed2f0882eedcf7b2201f50b6bd92701605dd83485452f8->enter($__internal_c157a48af4ff5cf104ed2f0882eedcf7b2201f50b6bd92701605dd83485452f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c157a48af4ff5cf104ed2f0882eedcf7b2201f50b6bd92701605dd83485452f8->leave($__internal_c157a48af4ff5cf104ed2f0882eedcf7b2201f50b6bd92701605dd83485452f8_prof);

        
        $__internal_b0d2384b7d0d4776f28536b370b81a61341960e368ee905679e041c39a84009e->leave($__internal_b0d2384b7d0d4776f28536b370b81a61341960e368ee905679e041c39a84009e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
