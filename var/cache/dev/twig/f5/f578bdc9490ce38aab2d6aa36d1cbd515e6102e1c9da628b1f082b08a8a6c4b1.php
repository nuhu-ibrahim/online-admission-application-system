<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3a5423e6de9a1eba4cbed342fe70ada5b5fbaa2146aed1b095e333f1d8564225 extends Twig_Template
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
        $__internal_c52c36cbecdc748c2ebca48fd81ba1f63b1ef4ccb661940bc3fe391723a902ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52c36cbecdc748c2ebca48fd81ba1f63b1ef4ccb661940bc3fe391723a902ad->enter($__internal_c52c36cbecdc748c2ebca48fd81ba1f63b1ef4ccb661940bc3fe391723a902ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4ffbb747a27f8b536687047084ae9f922d4579ded04086324dc9f16953f20160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffbb747a27f8b536687047084ae9f922d4579ded04086324dc9f16953f20160->enter($__internal_4ffbb747a27f8b536687047084ae9f922d4579ded04086324dc9f16953f20160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c52c36cbecdc748c2ebca48fd81ba1f63b1ef4ccb661940bc3fe391723a902ad->leave($__internal_c52c36cbecdc748c2ebca48fd81ba1f63b1ef4ccb661940bc3fe391723a902ad_prof);

        
        $__internal_4ffbb747a27f8b536687047084ae9f922d4579ded04086324dc9f16953f20160->leave($__internal_4ffbb747a27f8b536687047084ae9f922d4579ded04086324dc9f16953f20160_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
