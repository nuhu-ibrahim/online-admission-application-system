<?php

/* :start_registration:index.html.twig */
class __TwigTemplate_490ac7b92c73f55b1d40c7610dd7fd7586d65a0ec01c7af344420250d8973794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":start_registration:index.html.twig", 1);
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
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"alert alert-info\" role=\"alert\">Fill the form below appropriately and click Generate Invoice, note that fields marked <span style=\"color:red; font-weight:600; font-size:1.3em;\">*</span> are compulsory.</div>
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
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
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
        echo "                <h3>Choose Programme</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Programme</label>
                    ";
        // line 21
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "programme", array()), 'errors')) {
            // line 22
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 23
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "programme", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 26
        echo "                    
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "programme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                   
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Course</label>
                    ";
        // line 31
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "course", array()), 'errors')) {
            // line 32
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "course", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "course", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Personal Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    ";
        // line 41
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "surname", array()), 'errors')) {
            // line 42
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "surname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 46
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "surname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    ";
        // line 50
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "othername", array()), 'errors')) {
            // line 51
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "othername", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 55
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "othername", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    ";
        // line 59
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'errors')) {
            // line 60
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 64
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\"> 
                    <label for=\"exampleInputEmail1\">State of Origin</label>
                    ";
        // line 68
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state", array()), 'errors')) {
            // line 69
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 73
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    ";
        // line 77
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'errors')) {
            // line 78
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 79
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 82
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    ";
        // line 86
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors')) {
            // line 87
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 91
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Password</label>
                  ";
        // line 95
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'errors')) {
            // line 96
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 97
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 100
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                </div>
                <div class=\"alert alert-warning\" role=\"alert\">Note that names, programme and course of choice can not be changed after submission.</div>
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
            ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":start_registration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 104,  250 => 103,  243 => 100,  237 => 97,  234 => 96,  232 => 95,  224 => 91,  218 => 88,  215 => 87,  213 => 86,  205 => 82,  199 => 79,  196 => 78,  194 => 77,  186 => 73,  180 => 70,  177 => 69,  175 => 68,  167 => 64,  161 => 61,  158 => 60,  156 => 59,  148 => 55,  142 => 52,  139 => 51,  137 => 50,  129 => 46,  123 => 43,  120 => 42,  118 => 41,  109 => 36,  103 => 33,  100 => 32,  98 => 31,  91 => 27,  88 => 26,  82 => 23,  79 => 22,  77 => 21,  72 => 18,  69 => 17,  60 => 14,  57 => 13,  52 => 12,  50 => 11,  45 => 9,  42 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":start_registration:index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/start_registration/index.html.twig");
    }
}
