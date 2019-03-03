<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_06f50d47c482dd3a95fef564859db8fad5e41e29c66bcb77adc826d05fb79ae5 extends Twig_Template
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
        $__internal_fe96c2cfc3abfa83f4bc1635036e09f336daec7bc66f1a40cf599b65b09ecbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe96c2cfc3abfa83f4bc1635036e09f336daec7bc66f1a40cf599b65b09ecbb6->enter($__internal_fe96c2cfc3abfa83f4bc1635036e09f336daec7bc66f1a40cf599b65b09ecbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_341b57d80103ebd48daa533bc7524e6908dbb82679c0a2c9ead4a5ae9d6d370b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341b57d80103ebd48daa533bc7524e6908dbb82679c0a2c9ead4a5ae9d6d370b->enter($__internal_341b57d80103ebd48daa533bc7524e6908dbb82679c0a2c9ead4a5ae9d6d370b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fe96c2cfc3abfa83f4bc1635036e09f336daec7bc66f1a40cf599b65b09ecbb6->leave($__internal_fe96c2cfc3abfa83f4bc1635036e09f336daec7bc66f1a40cf599b65b09ecbb6_prof);

        
        $__internal_341b57d80103ebd48daa533bc7524e6908dbb82679c0a2c9ead4a5ae9d6d370b->leave($__internal_341b57d80103ebd48daa533bc7524e6908dbb82679c0a2c9ead4a5ae9d6d370b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
