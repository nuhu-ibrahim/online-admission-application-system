<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_feb18729f4ac01cc760a1cf04434825b1e067c3a070033a7c7a94437ccb381ac extends Twig_Template
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
        $__internal_39515a6f2cf86861795e79466ea53e6312d66ce3e72a2123372838822e09e515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39515a6f2cf86861795e79466ea53e6312d66ce3e72a2123372838822e09e515->enter($__internal_39515a6f2cf86861795e79466ea53e6312d66ce3e72a2123372838822e09e515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6d61150e88e9da338e3781c941bf4bcd27f262a4cc914f5f59186c454bb2613b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d61150e88e9da338e3781c941bf4bcd27f262a4cc914f5f59186c454bb2613b->enter($__internal_6d61150e88e9da338e3781c941bf4bcd27f262a4cc914f5f59186c454bb2613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_39515a6f2cf86861795e79466ea53e6312d66ce3e72a2123372838822e09e515->leave($__internal_39515a6f2cf86861795e79466ea53e6312d66ce3e72a2123372838822e09e515_prof);

        
        $__internal_6d61150e88e9da338e3781c941bf4bcd27f262a4cc914f5f59186c454bb2613b->leave($__internal_6d61150e88e9da338e3781c941bf4bcd27f262a4cc914f5f59186c454bb2613b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
