<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_20039952464a343808166744ea02e161f73af18effd9048d5fb4ae980d706e20 extends Twig_Template
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
        $__internal_d10c5e8027ac8b9fed93ac3181e5c02536dc0943eef146c2e768b52234006244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10c5e8027ac8b9fed93ac3181e5c02536dc0943eef146c2e768b52234006244->enter($__internal_d10c5e8027ac8b9fed93ac3181e5c02536dc0943eef146c2e768b52234006244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_497bd8164368ffa563b820be7566672f7ba74b8d9df30f89066b02f68eb2bcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497bd8164368ffa563b820be7566672f7ba74b8d9df30f89066b02f68eb2bcd9->enter($__internal_497bd8164368ffa563b820be7566672f7ba74b8d9df30f89066b02f68eb2bcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d10c5e8027ac8b9fed93ac3181e5c02536dc0943eef146c2e768b52234006244->leave($__internal_d10c5e8027ac8b9fed93ac3181e5c02536dc0943eef146c2e768b52234006244_prof);

        
        $__internal_497bd8164368ffa563b820be7566672f7ba74b8d9df30f89066b02f68eb2bcd9->leave($__internal_497bd8164368ffa563b820be7566672f7ba74b8d9df30f89066b02f68eb2bcd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
