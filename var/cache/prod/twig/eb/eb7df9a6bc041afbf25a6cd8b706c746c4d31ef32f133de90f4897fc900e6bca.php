<?php

/* continue_registration/index.html.twig */
class __TwigTemplate_8137095224680a0658b15fe0e3791fca8bb1768cb316c589057d80ab1b381db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", "continue_registration/index.html.twig", 1);
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
        <div class=\"col-md-10 col-md-offset-1\"> 
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"alert alert-info\" role=\"alert\"><p style=\"text-align: center\">Login to your Account</p></div>
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
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["error"]);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "                            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                    </div>
                ";
        }
        // line 18
        echo "                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    ";
        // line 20
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors')) {
            // line 21
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 25
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    ";
        // line 29
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'errors')) {
            // line 30
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 31
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 34
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                <hr style=\"border: solid green 1px;\">
                <h3 style=\"text-align: center\">Haven't initiate registration yet? </h3>
                <div class=\"col-md-6 col-md-offset-3\" style=\"margin-bottom:0px\"> 
                    <div class=\"list-group\" style=\"margin-bottom:0px\">
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("startReg");
        echo "\" class=\"list-group-item active\">Start Online Application</a>
                    </div>
                </div>
                <div class=\"col-md-12\"> 
                    <h3 style=\"text-align: center\">Click <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editReg");
        echo "\"><span class=\"label label-default\">here</span></a> to edit your registration.</h3>
                </div>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "continue_registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  127 => 45,  120 => 41,  112 => 36,  106 => 34,  100 => 31,  97 => 30,  95 => 29,  87 => 25,  81 => 22,  78 => 21,  76 => 20,  72 => 18,  68 => 16,  59 => 14,  55 => 13,  52 => 12,  50 => 11,  45 => 9,  42 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "continue_registration/index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\continue_registration\\index.html.twig");
    }
}
