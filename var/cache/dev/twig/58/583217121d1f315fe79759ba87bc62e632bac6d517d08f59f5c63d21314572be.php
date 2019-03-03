<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3379f85f25d04b63a5511022a88dd05ce23c03bf8d509c470b65fddad8dfbd64 extends Twig_Template
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
        $__internal_f69d658b3c3808525fc4c1bf5898ded0702ce1681b94370ba4c5d12905bf06e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69d658b3c3808525fc4c1bf5898ded0702ce1681b94370ba4c5d12905bf06e5->enter($__internal_f69d658b3c3808525fc4c1bf5898ded0702ce1681b94370ba4c5d12905bf06e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_de5f4849e55010db02310e1c44b04c5e7f4bb6ef1eef2e649aa72e46b0b76826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5f4849e55010db02310e1c44b04c5e7f4bb6ef1eef2e649aa72e46b0b76826->enter($__internal_de5f4849e55010db02310e1c44b04c5e7f4bb6ef1eef2e649aa72e46b0b76826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f69d658b3c3808525fc4c1bf5898ded0702ce1681b94370ba4c5d12905bf06e5->leave($__internal_f69d658b3c3808525fc4c1bf5898ded0702ce1681b94370ba4c5d12905bf06e5_prof);

        
        $__internal_de5f4849e55010db02310e1c44b04c5e7f4bb6ef1eef2e649aa72e46b0b76826->leave($__internal_de5f4849e55010db02310e1c44b04c5e7f4bb6ef1eef2e649aa72e46b0b76826_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
