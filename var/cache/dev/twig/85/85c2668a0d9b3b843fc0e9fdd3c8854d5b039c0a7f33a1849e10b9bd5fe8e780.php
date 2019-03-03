<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c45c61cfffa62e74d66d240bb17d223f46ef05038ccf684282d0a082079a04d6 extends Twig_Template
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
        $__internal_75fea6de0414ebdc0f31fe8bb3f51a206d725937ffaf8c375d0cdd2be32e2f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fea6de0414ebdc0f31fe8bb3f51a206d725937ffaf8c375d0cdd2be32e2f80->enter($__internal_75fea6de0414ebdc0f31fe8bb3f51a206d725937ffaf8c375d0cdd2be32e2f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_672a6952ec5b855efe167f3e8b809d1200f4f8305374799f834a781febe6acb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672a6952ec5b855efe167f3e8b809d1200f4f8305374799f834a781febe6acb1->enter($__internal_672a6952ec5b855efe167f3e8b809d1200f4f8305374799f834a781febe6acb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_75fea6de0414ebdc0f31fe8bb3f51a206d725937ffaf8c375d0cdd2be32e2f80->leave($__internal_75fea6de0414ebdc0f31fe8bb3f51a206d725937ffaf8c375d0cdd2be32e2f80_prof);

        
        $__internal_672a6952ec5b855efe167f3e8b809d1200f4f8305374799f834a781febe6acb1->leave($__internal_672a6952ec5b855efe167f3e8b809d1200f4f8305374799f834a781febe6acb1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
