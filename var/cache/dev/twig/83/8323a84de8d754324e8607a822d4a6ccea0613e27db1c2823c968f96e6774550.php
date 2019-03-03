<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_27bca4f2f3cdc674f325c7d8fa1fe3708cd30ed9d11c15668dc1f2438c3dd19c extends Twig_Template
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
        $__internal_877427fadc156fe18244d771f7ce6e2f871a33a81d35c4f0f24cd0b1c8b33d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877427fadc156fe18244d771f7ce6e2f871a33a81d35c4f0f24cd0b1c8b33d28->enter($__internal_877427fadc156fe18244d771f7ce6e2f871a33a81d35c4f0f24cd0b1c8b33d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_851ba17b37a9f58b1b3bca2d9b3416ab2d2f2589bc5a0a269bf379b655dff040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851ba17b37a9f58b1b3bca2d9b3416ab2d2f2589bc5a0a269bf379b655dff040->enter($__internal_851ba17b37a9f58b1b3bca2d9b3416ab2d2f2589bc5a0a269bf379b655dff040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_877427fadc156fe18244d771f7ce6e2f871a33a81d35c4f0f24cd0b1c8b33d28->leave($__internal_877427fadc156fe18244d771f7ce6e2f871a33a81d35c4f0f24cd0b1c8b33d28_prof);

        
        $__internal_851ba17b37a9f58b1b3bca2d9b3416ab2d2f2589bc5a0a269bf379b655dff040->leave($__internal_851ba17b37a9f58b1b3bca2d9b3416ab2d2f2589bc5a0a269bf379b655dff040_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
