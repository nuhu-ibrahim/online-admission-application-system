<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c5873105d17a558b9416e017f3845d0cdcec0769fc5d81dbb1bbf9c4ea280353 extends Twig_Template
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
        $__internal_f487eeb6fb5e98ce80ca6fb9cf0101643034124a331ec3b29f3a407a7e4c31bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f487eeb6fb5e98ce80ca6fb9cf0101643034124a331ec3b29f3a407a7e4c31bb->enter($__internal_f487eeb6fb5e98ce80ca6fb9cf0101643034124a331ec3b29f3a407a7e4c31bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_efd23064a9855979250f772e1e754ecc40731b55d4f37740b3f8c329e6929c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd23064a9855979250f772e1e754ecc40731b55d4f37740b3f8c329e6929c6b->enter($__internal_efd23064a9855979250f772e1e754ecc40731b55d4f37740b3f8c329e6929c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f487eeb6fb5e98ce80ca6fb9cf0101643034124a331ec3b29f3a407a7e4c31bb->leave($__internal_f487eeb6fb5e98ce80ca6fb9cf0101643034124a331ec3b29f3a407a7e4c31bb_prof);

        
        $__internal_efd23064a9855979250f772e1e754ecc40731b55d4f37740b3f8c329e6929c6b->leave($__internal_efd23064a9855979250f772e1e754ecc40731b55d4f37740b3f8c329e6929c6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
