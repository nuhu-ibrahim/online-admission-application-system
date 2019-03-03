<?php

/* admin/uploadlist.html.twig */
class __TwigTemplate_8658b4dcbf556365bed31721d65e55a4fece63c0cb5c9b8ae0048fe23f434f71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", "admin/uploadlist.html.twig", 1);
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
            <div class=\"alert alert-info\" role=\"alert\">Choose the Excel file containing the list, then click Upload List</div>
            ";
        // line 6
        if (($context["success"] ?? null)) {
            // line 7
            echo "                <div class=\"alert alert-info\" role=\"alert\">Students uploaded and congratulatory mails sent successfully.</div>
            ";
        }
        // line 9
        echo "            ";
        if (($context["errors"] ?? null)) {
            // line 10
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>";
                // line 12
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            ";
        }
        // line 16
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Excel File</label>
                  ";
        // line 19
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'errors')) {
            // line 20
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 24
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget');
        echo "
                </div>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/uploadlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  89 => 26,  83 => 24,  77 => 21,  74 => 20,  72 => 19,  65 => 16,  62 => 15,  53 => 12,  50 => 11,  45 => 10,  42 => 9,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/uploadlist.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\admin\\uploadlist.html.twig");
    }
}
