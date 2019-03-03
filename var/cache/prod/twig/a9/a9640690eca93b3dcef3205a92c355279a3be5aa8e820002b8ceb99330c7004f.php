<?php

/* :emails:admission.html.twig */
class __TwigTemplate_4aeda4bfdb00aaaa3fbabd43961c175192d208804a0d1f4144742e1ad5302216 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["img"] ?? null))), "html", null, true);
        echo "\" alt=\"image\" class=\"img-thumbnail\"></p>
                    <p style=\"text-align:justify;\">Congratulations ";
        // line 10
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!!! <br/> You have been offered admission for a 2- Year ";
        echo twig_escape_filter($this->env, ($context["programme"] ?? null), "html", null, true);
        echo " in Kaduna Polytechnic, Kaduna.<br/> <strong>Course ";
        echo twig_escape_filter($this->env, ($context["course"] ?? null), "html", null, true);
        echo "</strong> in the <strong>Department</strong> of ";
        echo twig_escape_filter($this->env, ($context["course"] ?? null), "html", null, true);
        echo ".</p>
                </div>
            </div>
        </div>
    </body>
</html>";
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
        return array (  36 => 10,  32 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":emails:admission.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/emails/admission.html.twig");
    }
}
