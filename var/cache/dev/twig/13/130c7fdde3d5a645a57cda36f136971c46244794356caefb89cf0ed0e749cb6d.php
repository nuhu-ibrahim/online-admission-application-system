<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_58aeb8c9913b7cebec0f02ec3beb94c088b18a02b07cac69152cce1cab345344 extends Twig_Template
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
        $__internal_2519dfb43294c0f284da6375dee813af3b2f7d06c62c68e76a45878bdc24b65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2519dfb43294c0f284da6375dee813af3b2f7d06c62c68e76a45878bdc24b65d->enter($__internal_2519dfb43294c0f284da6375dee813af3b2f7d06c62c68e76a45878bdc24b65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d4c7eba6a0129426b2ae40cbe860514653d9a9722d1600b8b0909dce05698226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c7eba6a0129426b2ae40cbe860514653d9a9722d1600b8b0909dce05698226->enter($__internal_d4c7eba6a0129426b2ae40cbe860514653d9a9722d1600b8b0909dce05698226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2519dfb43294c0f284da6375dee813af3b2f7d06c62c68e76a45878bdc24b65d->leave($__internal_2519dfb43294c0f284da6375dee813af3b2f7d06c62c68e76a45878bdc24b65d_prof);

        
        $__internal_d4c7eba6a0129426b2ae40cbe860514653d9a9722d1600b8b0909dce05698226->leave($__internal_d4c7eba6a0129426b2ae40cbe860514653d9a9722d1600b8b0909dce05698226_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
