<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ab4284de2589f37ba85b37185505916168da4e861a643d151b3b9865d5168acd extends Twig_Template
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
        $__internal_a518b1be6d66d404ac2f700f8b4590919914d37c5a90cb10f9292892a48e4b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a518b1be6d66d404ac2f700f8b4590919914d37c5a90cb10f9292892a48e4b72->enter($__internal_a518b1be6d66d404ac2f700f8b4590919914d37c5a90cb10f9292892a48e4b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_899ebc5362686f0f2352e18f13c05006231cd26e1cd0598d9a27dace25bcb16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899ebc5362686f0f2352e18f13c05006231cd26e1cd0598d9a27dace25bcb16c->enter($__internal_899ebc5362686f0f2352e18f13c05006231cd26e1cd0598d9a27dace25bcb16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a518b1be6d66d404ac2f700f8b4590919914d37c5a90cb10f9292892a48e4b72->leave($__internal_a518b1be6d66d404ac2f700f8b4590919914d37c5a90cb10f9292892a48e4b72_prof);

        
        $__internal_899ebc5362686f0f2352e18f13c05006231cd26e1cd0598d9a27dace25bcb16c->leave($__internal_899ebc5362686f0f2352e18f13c05006231cd26e1cd0598d9a27dace25bcb16c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
