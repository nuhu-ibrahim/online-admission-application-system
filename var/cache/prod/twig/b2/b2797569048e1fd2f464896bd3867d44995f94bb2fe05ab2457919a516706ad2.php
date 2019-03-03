<?php

/* home/index.html.twig */
class __TwigTemplate_27d69501273a01475842f39734d0e34b5b524de1983b1c02f8fd82576e3fcd9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
        <div class=\"col-md-10 col-md-offset-1\"> 
            
        </div>
        <div class=\"col-md-6 col-md-offset-1\"> 
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("startReg");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Start Online Application</a>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("continueReg");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Continue Online Application</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editLog");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Edit Online Application</a>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addStatus");
        echo "\" class=\"list-group-item active\">Check Admission Status</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  47 => 11,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\home\\index.html.twig");
    }
}
