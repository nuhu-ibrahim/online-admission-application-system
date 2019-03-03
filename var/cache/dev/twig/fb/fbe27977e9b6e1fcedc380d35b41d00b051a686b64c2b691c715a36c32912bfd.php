<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_97ed8e4b1a7bfaf353de1df01c33af4cc351729b5f4520a52d4f84ca8d5f76f2 extends Twig_Template
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
        $__internal_0617acb51223169814f8200becd00718b3c8ff19ba7fa5e00e86aaccd918039c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0617acb51223169814f8200becd00718b3c8ff19ba7fa5e00e86aaccd918039c->enter($__internal_0617acb51223169814f8200becd00718b3c8ff19ba7fa5e00e86aaccd918039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_aedee8f6da2699e65db73fdc09d57fed223df8182be62dddc03dc8b55993ff7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedee8f6da2699e65db73fdc09d57fed223df8182be62dddc03dc8b55993ff7a->enter($__internal_aedee8f6da2699e65db73fdc09d57fed223df8182be62dddc03dc8b55993ff7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0617acb51223169814f8200becd00718b3c8ff19ba7fa5e00e86aaccd918039c->leave($__internal_0617acb51223169814f8200becd00718b3c8ff19ba7fa5e00e86aaccd918039c_prof);

        
        $__internal_aedee8f6da2699e65db73fdc09d57fed223df8182be62dddc03dc8b55993ff7a->leave($__internal_aedee8f6da2699e65db73fdc09d57fed223df8182be62dddc03dc8b55993ff7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
