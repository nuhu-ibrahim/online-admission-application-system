<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_17b3f5fc5d843f2f946bca1af818176ac98af4856cb81744127cf8b43e8f628e extends Twig_Template
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
        $__internal_befc146ff01611863cb013c592c876b0b0da67b5fce92bf4bc4cfe7b08df5392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befc146ff01611863cb013c592c876b0b0da67b5fce92bf4bc4cfe7b08df5392->enter($__internal_befc146ff01611863cb013c592c876b0b0da67b5fce92bf4bc4cfe7b08df5392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c52aa0a2738ea4372cbfbdbc2d6455ef91d2b5bd69553891a1de3d6daa20a7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52aa0a2738ea4372cbfbdbc2d6455ef91d2b5bd69553891a1de3d6daa20a7af->enter($__internal_c52aa0a2738ea4372cbfbdbc2d6455ef91d2b5bd69553891a1de3d6daa20a7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_befc146ff01611863cb013c592c876b0b0da67b5fce92bf4bc4cfe7b08df5392->leave($__internal_befc146ff01611863cb013c592c876b0b0da67b5fce92bf4bc4cfe7b08df5392_prof);

        
        $__internal_c52aa0a2738ea4372cbfbdbc2d6455ef91d2b5bd69553891a1de3d6daa20a7af->leave($__internal_c52aa0a2738ea4372cbfbdbc2d6455ef91d2b5bd69553891a1de3d6daa20a7af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
