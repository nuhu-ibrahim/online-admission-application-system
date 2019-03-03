<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_dae4ebaed5b30cb135ea071fb4e38ec2911bd61bde15140491915a01a6e0b698 extends Twig_Template
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
        $__internal_2c22f3c250a10cd25b69fbebfd38a99d272b20f274df303808063312cd5e7a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c22f3c250a10cd25b69fbebfd38a99d272b20f274df303808063312cd5e7a70->enter($__internal_2c22f3c250a10cd25b69fbebfd38a99d272b20f274df303808063312cd5e7a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_13ac7e1ff65330ed4a5249659fe9c10c3bf35e07814347c40c85b7888f4ff511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ac7e1ff65330ed4a5249659fe9c10c3bf35e07814347c40c85b7888f4ff511->enter($__internal_13ac7e1ff65330ed4a5249659fe9c10c3bf35e07814347c40c85b7888f4ff511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2c22f3c250a10cd25b69fbebfd38a99d272b20f274df303808063312cd5e7a70->leave($__internal_2c22f3c250a10cd25b69fbebfd38a99d272b20f274df303808063312cd5e7a70_prof);

        
        $__internal_13ac7e1ff65330ed4a5249659fe9c10c3bf35e07814347c40c85b7888f4ff511->leave($__internal_13ac7e1ff65330ed4a5249659fe9c10c3bf35e07814347c40c85b7888f4ff511_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
