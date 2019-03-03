<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_faf1d298b010447b60019927a7b51ecf3e0686e00c49c87efdab8c00ab8661b9 extends Twig_Template
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
        $__internal_bf39e00c4f7ec77ab991976bb0d6180f9fcaeccff5ef7cf14cb9c75534344b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf39e00c4f7ec77ab991976bb0d6180f9fcaeccff5ef7cf14cb9c75534344b43->enter($__internal_bf39e00c4f7ec77ab991976bb0d6180f9fcaeccff5ef7cf14cb9c75534344b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e17f453583fe34cf8b74d70929550ca6d9d743933a10469920614b9f54cc0f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17f453583fe34cf8b74d70929550ca6d9d743933a10469920614b9f54cc0f3b->enter($__internal_e17f453583fe34cf8b74d70929550ca6d9d743933a10469920614b9f54cc0f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bf39e00c4f7ec77ab991976bb0d6180f9fcaeccff5ef7cf14cb9c75534344b43->leave($__internal_bf39e00c4f7ec77ab991976bb0d6180f9fcaeccff5ef7cf14cb9c75534344b43_prof);

        
        $__internal_e17f453583fe34cf8b74d70929550ca6d9d743933a10469920614b9f54cc0f3b->leave($__internal_e17f453583fe34cf8b74d70929550ca6d9d743933a10469920614b9f54cc0f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
