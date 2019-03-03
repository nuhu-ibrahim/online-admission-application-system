<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5246ffc02f1dcd8d4ae42bbb230bed46f918e635e7c3295b0900b973a37a689f extends Twig_Template
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
        $__internal_93204cca6ca736fc431409c9972822ea89a06e6056c3e6d08fdbbf2376263ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93204cca6ca736fc431409c9972822ea89a06e6056c3e6d08fdbbf2376263ce8->enter($__internal_93204cca6ca736fc431409c9972822ea89a06e6056c3e6d08fdbbf2376263ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a6f7260007845e932e223e3bf457f38af720f41160085d9f0ed2a3adb3d37d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f7260007845e932e223e3bf457f38af720f41160085d9f0ed2a3adb3d37d9a->enter($__internal_a6f7260007845e932e223e3bf457f38af720f41160085d9f0ed2a3adb3d37d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_93204cca6ca736fc431409c9972822ea89a06e6056c3e6d08fdbbf2376263ce8->leave($__internal_93204cca6ca736fc431409c9972822ea89a06e6056c3e6d08fdbbf2376263ce8_prof);

        
        $__internal_a6f7260007845e932e223e3bf457f38af720f41160085d9f0ed2a3adb3d37d9a->leave($__internal_a6f7260007845e932e223e3bf457f38af720f41160085d9f0ed2a3adb3d37d9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
