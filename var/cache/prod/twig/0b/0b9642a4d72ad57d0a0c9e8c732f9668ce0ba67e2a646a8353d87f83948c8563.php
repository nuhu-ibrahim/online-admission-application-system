<?php

/* :admin:view_applications.html.twig */
class __TwigTemplate_294fc103ab467ec929fde1d053d3e01b617ce89e99f8b31690a5f17d3ed288f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("abase.html.twig", ":admin:view_applications.html.twig", 2);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"alert alert-info\" style=\"text-align:center;\" role=\"alert\">List of Students that have completed Registration.</div>
        <div class=\"col-md-12 table-responsive\" id=\"toPrint\">
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <th>Application No:</th>
                     <th>Surname:</th>
                     <th>Othername:</th>
                     <th>Firstname:</th>
                     <th>Email:</th>
                     <th>Programme:</th>
                     <th>Course:</th>
                </tr>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "                <tr>
                    <td><a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fullInfo");
            echo "?appNo=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "appno", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "appno", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "surname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "othername", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "firstname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "programme", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "course", array()), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <form class=\"form-inline\">
                            <button type=\"submit\" onclick=\"printDiv('toPrint')\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Print List</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":admin:view_applications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":admin:view_applications.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/admin/view_applications.html.twig");
    }
}
