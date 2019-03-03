<?php

/* home/uadmission.html.twig */
class __TwigTemplate_8361b9ba8508b1355a1c721f75dc0365157c4eb5a6463e6f73726284a42f85e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", "home/uadmission.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ubase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-8 col-md-offset-2\"> 
            <p style=\"text-align:center;\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["img"] ?? null)), "html", null, true);
        echo "\" alt=\"image\" class=\"img-thumbnail\"></p>
            <p style=\"text-align:center;\">Congratulations <strong>";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!!!</strong> <br/> You have been offered admission for a 2- Year ";
        echo twig_escape_filter($this->env, ($context["programme"] ?? null), "html", null, true);
        echo " in Kaduna Polytechnic, Kaduna.<br/> <strong>Course</strong> ";
        echo twig_escape_filter($this->env, ($context["course"] ?? null), "html", null, true);
        echo " in the <strong>Department</strong> of ";
        echo twig_escape_filter($this->env, ($context["course"] ?? null), "html", null, true);
        echo ".</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/uadmission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/uadmission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\home\\uadmission.html.twig");
    }
}
