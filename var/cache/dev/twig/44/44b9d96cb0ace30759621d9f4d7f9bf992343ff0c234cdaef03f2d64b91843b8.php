<?php

/* :emails:admission.html.twig */
class __TwigTemplate_23229498174b912d47ac43e5072fe1b358783382dea88e390b054bf52fc7680b extends Twig_Template
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
        $__internal_4966d3c625d78c03a9305c2452227ee976ee08f7969b6d14039b1717b319f9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4966d3c625d78c03a9305c2452227ee976ee08f7969b6d14039b1717b319f9ab->enter($__internal_4966d3c625d78c03a9305c2452227ee976ee08f7969b6d14039b1717b319f9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":emails:admission.html.twig"));

        $__internal_da98cf19a25fc7ba91e6d692d60a39e98370bcdda33c441c31ad6530a744a8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da98cf19a25fc7ba91e6d692d60a39e98370bcdda33c441c31ad6530a744a8a9->enter($__internal_da98cf19a25fc7ba91e6d692d60a39e98370bcdda33c441c31ad6530a744a8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":emails:admission.html.twig"));

        // line 1
        echo "<html>
    <head>
            <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p style=\"text-align:center;\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("passports/201716")), "html", null, true);
        echo "\" alt=\"image\" class=\"img-thumbnail\"></p>
                    <p style=\"text-align:justify;\">Congratulations ";
        // line 10
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "!!! <br/> You have been offered admission for a 2- Year ";
        echo twig_escape_filter($this->env, ($context["programme"] ?? $this->getContext($context, "programme")), "html", null, true);
        echo " in Kaduna Polytechnic, Kaduna.<br/> <strong>Course ";
        echo twig_escape_filter($this->env, ($context["course"] ?? $this->getContext($context, "course")), "html", null, true);
        echo "</strong> in the <strong>Department</strong> of ";
        echo twig_escape_filter($this->env, ($context["course"] ?? $this->getContext($context, "course")), "html", null, true);
        echo ".</p>
                </div>
            </div>
        </div>
    </body>
</html>";
        
        $__internal_4966d3c625d78c03a9305c2452227ee976ee08f7969b6d14039b1717b319f9ab->leave($__internal_4966d3c625d78c03a9305c2452227ee976ee08f7969b6d14039b1717b319f9ab_prof);

        
        $__internal_da98cf19a25fc7ba91e6d692d60a39e98370bcdda33c441c31ad6530a744a8a9->leave($__internal_da98cf19a25fc7ba91e6d692d60a39e98370bcdda33c441c31ad6530a744a8a9_prof);

    }

    public function getTemplateName()
    {
        return ":emails:admission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
            <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p style=\"text-align:center;\"><img src=\"{{ absolute_url(asset( \"passports/201716\" )) }}\" alt=\"image\" class=\"img-thumbnail\"></p>
                    <p style=\"text-align:justify;\">Congratulations {{ name }}!!! <br/> You have been offered admission for a 2- Year {{ programme }} in Kaduna Polytechnic, Kaduna.<br/> <strong>Course {{ course }}</strong> in the <strong>Department</strong> of {{ course }}.</p>
                </div>
            </div>
        </div>
    </body>
</html>", ":emails:admission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/emails/admission.html.twig");
    }
}
