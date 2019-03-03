<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_65477288dec58e2949255e5576fee01dadcda77c307c1f031466a61f045ed40d extends Twig_Template
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
        $__internal_abeec254b3aee07c7dab85bc91ceb288c6d097b3d1b150e36ac102e763b41d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abeec254b3aee07c7dab85bc91ceb288c6d097b3d1b150e36ac102e763b41d46->enter($__internal_abeec254b3aee07c7dab85bc91ceb288c6d097b3d1b150e36ac102e763b41d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e23d1e0eaa1bb19346b0d1fadca9071298598dff2271a431d66928a744da5d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23d1e0eaa1bb19346b0d1fadca9071298598dff2271a431d66928a744da5d10->enter($__internal_e23d1e0eaa1bb19346b0d1fadca9071298598dff2271a431d66928a744da5d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_abeec254b3aee07c7dab85bc91ceb288c6d097b3d1b150e36ac102e763b41d46->leave($__internal_abeec254b3aee07c7dab85bc91ceb288c6d097b3d1b150e36ac102e763b41d46_prof);

        
        $__internal_e23d1e0eaa1bb19346b0d1fadca9071298598dff2271a431d66928a744da5d10->leave($__internal_e23d1e0eaa1bb19346b0d1fadca9071298598dff2271a431d66928a744da5d10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
