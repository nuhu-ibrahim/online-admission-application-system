<?php

/* home/indexAdmin.html.twig */
class __TwigTemplate_1dc4315a351597350a62ba30294af8c6a980ecfb37017c1ca05b359ac25d9fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", "home/indexAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "abase.html.twig";
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("activate");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Activate Student Payment</a>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploadlist");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px; \">Upload Admission List</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("viewapp");
        echo "\" class=\"list-group-item active\"  style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">View Applicants</a>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("download");
        echo "\" class=\"list-group-item active\" style=\"border-bottom-color: white; border-bottom-style: solid; border-bottom-width: 3px;\">Download Applications</a>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("studentinfo");
        echo "\" class=\"list-group-item active\">View Applicant's Details</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/indexAdmin.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\home\\indexAdmin.html.twig");
    }
}
