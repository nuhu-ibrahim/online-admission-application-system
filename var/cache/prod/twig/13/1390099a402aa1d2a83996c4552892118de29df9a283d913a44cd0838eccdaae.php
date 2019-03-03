<?php

/* admin/uploadpay.html.twig */
class __TwigTemplate_8b895207de0c1b65aba42a3a417de7db75bf4c23404e6b0540afef34ae81640b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("abase.html.twig", "admin/uploadpay.html.twig", 1);
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
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"alert alert-info\" role=\"alert\">Activate Student Payment.</div>
                ";
        // line 7
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors')) {
            // line 8
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 9
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                    </div>
                ";
        } elseif (        // line 11
($context["errors"] ?? null)) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            <li>";
                // line 14
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        // line 18
        echo "                ";
        if (($context["msg"] ?? null)) {
            // line 19
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 23
        echo "                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Invoice Number</label>
                    ";
        // line 25
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invoiceNo", array()), 'errors')) {
            // line 26
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invoiceNo", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 30
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invoiceNo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
                </div>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "validate", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "  
            ";
        // line 33
        if (($context["validated"] ?? null)) {
            // line 34
            echo "                <table class=\"table table-hover\">
                    <tr>
                         <td>Invoice Number:</td>
                         <td>";
            // line 37
            echo twig_escape_filter($this->env, ($context["invoiceNo"] ?? null), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                         <td>Name:</td>
                         <td>";
            // line 41
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                         <td>Email:</td>
                         <td>";
            // line 45
            echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                         <td>Programme:</td>
                         <td>";
            // line 49
            echo twig_escape_filter($this->env, ($context["programme"] ?? null), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                         <td>Course:</td>
                         <td>";
            // line 53
            echo twig_escape_filter($this->env, ($context["course"] ?? null), "html", null, true);
            echo "</td>
                    </tr>
                </table>
            ";
        }
        // line 57
        echo "            ";
        if (($context["validated"] ?? null)) {
            // line 58
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "activate", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
            echo "  
            ";
        } else {
            // line 60
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "activate", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
            echo "
            ";
        }
        // line 62
        echo "            
        ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/uploadpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  166 => 62,  160 => 60,  154 => 58,  151 => 57,  144 => 53,  137 => 49,  130 => 45,  123 => 41,  116 => 37,  111 => 34,  109 => 33,  105 => 32,  99 => 30,  93 => 27,  90 => 26,  88 => 25,  84 => 23,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  60 => 14,  57 => 13,  52 => 12,  50 => 11,  45 => 9,  42 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/uploadpay.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\admin\\uploadpay.html.twig");
    }
}
