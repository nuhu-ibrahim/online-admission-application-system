<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_19a6ceba61c38fbd3df3d0b2d5c45a787698089f436301f044692ee5edd38366 extends Twig_Template
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
        $__internal_e8c309613dfe2059e82a39087b5607a5385322758b2ad6987b51356f5516288c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c309613dfe2059e82a39087b5607a5385322758b2ad6987b51356f5516288c->enter($__internal_e8c309613dfe2059e82a39087b5607a5385322758b2ad6987b51356f5516288c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4d2b45724bd2857a6d90c99e4d0fb94ff7f00111767beb0d59475a901a8ae53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2b45724bd2857a6d90c99e4d0fb94ff7f00111767beb0d59475a901a8ae53b->enter($__internal_4d2b45724bd2857a6d90c99e4d0fb94ff7f00111767beb0d59475a901a8ae53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e8c309613dfe2059e82a39087b5607a5385322758b2ad6987b51356f5516288c->leave($__internal_e8c309613dfe2059e82a39087b5607a5385322758b2ad6987b51356f5516288c_prof);

        
        $__internal_4d2b45724bd2857a6d90c99e4d0fb94ff7f00111767beb0d59475a901a8ae53b->leave($__internal_4d2b45724bd2857a6d90c99e4d0fb94ff7f00111767beb0d59475a901a8ae53b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
