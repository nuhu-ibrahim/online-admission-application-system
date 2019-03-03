<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9995628667246029c69973fdcd1dae188d8d837d8e0adb147f1ea11d4267f5a3 extends Twig_Template
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
        $__internal_900357aa7d3cedbeb326f69b1d29e9b45732fbc684f192cacef7ba53cbb90fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900357aa7d3cedbeb326f69b1d29e9b45732fbc684f192cacef7ba53cbb90fbb->enter($__internal_900357aa7d3cedbeb326f69b1d29e9b45732fbc684f192cacef7ba53cbb90fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_24c3f9519e6b303733673dda63c1e8bffeaa5635b2efa2dd3d3d7ecdd8f95bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c3f9519e6b303733673dda63c1e8bffeaa5635b2efa2dd3d3d7ecdd8f95bed->enter($__internal_24c3f9519e6b303733673dda63c1e8bffeaa5635b2efa2dd3d3d7ecdd8f95bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_900357aa7d3cedbeb326f69b1d29e9b45732fbc684f192cacef7ba53cbb90fbb->leave($__internal_900357aa7d3cedbeb326f69b1d29e9b45732fbc684f192cacef7ba53cbb90fbb_prof);

        
        $__internal_24c3f9519e6b303733673dda63c1e8bffeaa5635b2efa2dd3d3d7ecdd8f95bed->leave($__internal_24c3f9519e6b303733673dda63c1e8bffeaa5635b2efa2dd3d3d7ecdd8f95bed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
