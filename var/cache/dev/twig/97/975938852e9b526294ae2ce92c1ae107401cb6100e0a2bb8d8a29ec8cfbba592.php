<?php

/* :continue_registration:fullInfo.html.twig */
class __TwigTemplate_420e987471c3d54b7f012ce800fa97494fca95de6bc911958c0780cc7fac6b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", ":continue_registration:fullInfo.html.twig", 1);
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
        $__internal_170cd7b1e6cc20fc6fbf134b2cf1c7b194e4bcaf39f5135f45df40549659659c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170cd7b1e6cc20fc6fbf134b2cf1c7b194e4bcaf39f5135f45df40549659659c->enter($__internal_170cd7b1e6cc20fc6fbf134b2cf1c7b194e4bcaf39f5135f45df40549659659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":continue_registration:fullInfo.html.twig"));

        $__internal_99a7057dba0a79458c5c65844e37e890fe617cda722997aa55dceb42bf468d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a7057dba0a79458c5c65844e37e890fe617cda722997aa55dceb42bf468d2d->enter($__internal_99a7057dba0a79458c5c65844e37e890fe617cda722997aa55dceb42bf468d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":continue_registration:fullInfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170cd7b1e6cc20fc6fbf134b2cf1c7b194e4bcaf39f5135f45df40549659659c->leave($__internal_170cd7b1e6cc20fc6fbf134b2cf1c7b194e4bcaf39f5135f45df40549659659c_prof);

        
        $__internal_99a7057dba0a79458c5c65844e37e890fe617cda722997aa55dceb42bf468d2d->leave($__internal_99a7057dba0a79458c5c65844e37e890fe617cda722997aa55dceb42bf468d2d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_68a48ea2fe650792c87f2bbd53acef2ec244dd4af9f6c1fbf5190e6abc900407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a48ea2fe650792c87f2bbd53acef2ec244dd4af9f6c1fbf5190e6abc900407->enter($__internal_68a48ea2fe650792c87f2bbd53acef2ec244dd4af9f6c1fbf5190e6abc900407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef9f433816c9767a33956a6fb503d2016c47bbbb55ee5886aa4fd2cccf67f275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9f433816c9767a33956a6fb503d2016c47bbbb55ee5886aa4fd2cccf67f275->enter($__internal_ef9f433816c9767a33956a6fb503d2016c47bbbb55ee5886aa4fd2cccf67f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"alert alert-info\" role=\"alert\">Complete the form below appropriately and click submit, note that fields marked <span style=\"color:red; font-weight:600; font-size:1.3em;\">*</span> are compulsory.</div>
                ";
        // line 7
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 8
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 9
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                    </div>
                ";
        } elseif (        // line 11
($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "programme", array()), 'errors')) {
            // line 22
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 23
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "programme", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 26
        echo "                    
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "programme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "                   
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Course</label>
                    ";
        // line 31
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course", array()), 'errors')) {
            // line 32
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Personal Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Application Number</label>
                    ";
        // line 41
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "appNo", array()), 'errors')) {
            // line 42
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "appNo", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 46
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "appNo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    ";
        // line 50
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'errors')) {
            // line 51
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 55
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    ";
        // line 59
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'errors')) {
            // line 60
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 64
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    ";
        // line 68
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors')) {
            // line 69
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 73
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Date of Birth (yyyy-MM-dd)</label>
                    ";
        // line 77
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dob", array()), 'errors')) {
            // line 78
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 79
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dob", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 82
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dob", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Gender</label>
                    ";
        // line 87
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()), 'errors')) {
            // line 88
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 92
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\"> 
                    <label for=\"exampleInputEmail1\">State of Origin</label>
                    ";
        // line 97
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'errors')) {
            // line 98
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 102
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Home Towm</label>
                    ";
        // line 107
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hometown", array()), 'errors')) {
            // line 108
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hometown", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 112
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hometown", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Marital Status</label>
                    ";
        // line 117
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mstatus", array()), 'errors')) {
            // line 118
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mstatus", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 122
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mstatus", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Physical Disability</label>
                    ";
        // line 127
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disability", array()), 'errors')) {
            // line 128
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 129
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disability", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 132
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disability", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Contact Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Personal Address</label>
                    ";
        // line 137
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'errors')) {
            // line 138
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 142
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    ";
        // line 147
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'errors')) {
            // line 148
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 149
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 152
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    ";
        // line 157
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')) {
            // line 158
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 162
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Next of Kin Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    ";
        // line 167
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtsname", array()), 'errors')) {
            // line 168
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 169
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtsname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 172
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtsname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    ";
        // line 177
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtoname", array()), 'errors')) {
            // line 178
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 179
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtoname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 182
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtoname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    ";
        // line 187
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtfname", array()), 'errors')) {
            // line 188
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 189
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtfname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 192
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtfname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    ";
        // line 197
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtmobile", array()), 'errors')) {
            // line 198
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 199
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtmobile", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 202
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtmobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Relationship</label>
                    ";
        // line 207
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtrel", array()), 'errors')) {
            // line 208
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 209
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtrel", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 212
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nxtrel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Extra Curriculum Activities</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Activities</label>
                    ";
        // line 217
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "extra_act", array()), 'errors')) {
            // line 218
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 219
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "extra_act", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 222
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "extra_act", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Sponsorship Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Sponsorship Means</label>
                    ";
        // line 227
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "scholarship_means", array()), 'errors')) {
            // line 228
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 229
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "scholarship_means", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 232
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "scholarship_means", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Name of Scholarship Donor</label>
                    ";
        // line 236
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "scholarship_donor_name", array()), 'errors')) {
            // line 237
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 238
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "scholarship_donor_name", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 241
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "scholarship_donor_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>A Level Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Name of Institution</label>
                    ";
        // line 246
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "inst_name", array()), 'errors')) {
            // line 247
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 248
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "inst_name", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 251
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "inst_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Location</label>
                    ";
        // line 255
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), 'errors')) {
            // line 256
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 257
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 260
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Registration Number</label>
                    ";
        // line 264
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reg_no", array()), 'errors')) {
            // line 265
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 266
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reg_no", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 269
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reg_no", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Date of Graduation (yyyy-MM-dd)</label>
                    ";
        // line 273
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_of_grad", array()), 'errors')) {
            // line 274
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 275
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_of_grad", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 278
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_of_grad", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Qualification</label>
                    ";
        // line 282
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "qual", array()), 'errors')) {
            // line 283
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 284
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "qual", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 287
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "qual", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Field of Study</label>
                    ";
        // line 291
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "field", array()), 'errors')) {
            // line 292
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 293
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "field", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 296
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "field", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Passport</h3>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Passport</label>
                  ";
        // line 301
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "passport", array()), 'errors')) {
            // line 302
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 303
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "passport", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 306
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "passport", array()), 'widget');
        echo " 
                </div>
                <div class=\"alert alert-warning\" role=\"alert\">Note that names, programme, passport and course of choice can not be changed after submission. However, editing any other detail will attract the sum of #1000</div>
                ";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
            ";
        // line 310
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_ef9f433816c9767a33956a6fb503d2016c47bbbb55ee5886aa4fd2cccf67f275->leave($__internal_ef9f433816c9767a33956a6fb503d2016c47bbbb55ee5886aa4fd2cccf67f275_prof);

        
        $__internal_68a48ea2fe650792c87f2bbd53acef2ec244dd4af9f6c1fbf5190e6abc900407->leave($__internal_68a48ea2fe650792c87f2bbd53acef2ec244dd4af9f6c1fbf5190e6abc900407_prof);

    }

    public function getTemplateName()
    {
        return ":continue_registration:fullInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  688 => 310,  684 => 309,  677 => 306,  671 => 303,  668 => 302,  666 => 301,  657 => 296,  651 => 293,  648 => 292,  646 => 291,  638 => 287,  632 => 284,  629 => 283,  627 => 282,  619 => 278,  613 => 275,  610 => 274,  608 => 273,  600 => 269,  594 => 266,  591 => 265,  589 => 264,  581 => 260,  575 => 257,  572 => 256,  570 => 255,  562 => 251,  556 => 248,  553 => 247,  551 => 246,  542 => 241,  536 => 238,  533 => 237,  531 => 236,  523 => 232,  517 => 229,  514 => 228,  512 => 227,  503 => 222,  497 => 219,  494 => 218,  492 => 217,  483 => 212,  477 => 209,  474 => 208,  472 => 207,  463 => 202,  457 => 199,  454 => 198,  452 => 197,  443 => 192,  437 => 189,  434 => 188,  432 => 187,  423 => 182,  417 => 179,  414 => 178,  412 => 177,  403 => 172,  397 => 169,  394 => 168,  392 => 167,  383 => 162,  377 => 159,  374 => 158,  372 => 157,  363 => 152,  357 => 149,  354 => 148,  352 => 147,  343 => 142,  337 => 139,  334 => 138,  332 => 137,  323 => 132,  317 => 129,  314 => 128,  312 => 127,  303 => 122,  297 => 119,  294 => 118,  292 => 117,  283 => 112,  277 => 109,  274 => 108,  272 => 107,  263 => 102,  257 => 99,  254 => 98,  252 => 97,  243 => 92,  237 => 89,  234 => 88,  232 => 87,  223 => 82,  217 => 79,  214 => 78,  212 => 77,  204 => 73,  198 => 70,  195 => 69,  193 => 68,  185 => 64,  179 => 61,  176 => 60,  174 => 59,  166 => 55,  160 => 52,  157 => 51,  155 => 50,  147 => 46,  141 => 43,  138 => 42,  136 => 41,  127 => 36,  121 => 33,  118 => 32,  116 => 31,  109 => 27,  106 => 26,  100 => 23,  97 => 22,  95 => 21,  90 => 18,  87 => 17,  78 => 14,  75 => 13,  70 => 12,  68 => 11,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ubase.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"alert alert-info\" role=\"alert\">Complete the form below appropriately and click submit, note that fields marked <span style=\"color:red; font-weight:600; font-size:1.3em;\">*</span> are compulsory.</div>
                {% if form_errors(form) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form) }}
                    </div>
                {% elseif errors%}
                    {%  for error in errors %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>{{ error }}</li>
                    </div>
                    {% endfor %}
                {% endif %}
                <h3>Choose Programme</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Programme</label>
                    {% if form_errors(form.programme) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.programme) }}
                        </div>
                    {% endif %}
                    
                    {{ form_widget(form.programme, {'attr': {'class': 'form-control'}}) }}                   
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Course</label>
                    {% if form_errors(form.course) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.course) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.course, {'attr': {'class': 'form-control'}}) }}
                </div>
                <h3>Personal Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Application Number</label>
                    {% if form_errors(form.appNo) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.appNo) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.appNo, {'attr': {'class': 'form-control'}}) }}      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    {% if form_errors(form.surname) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.surname) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.surname, {'attr': {'class': 'form-control'}}) }}      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    {% if form_errors(form.othername) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.othername) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.othername, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    {% if form_errors(form.firstname) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.firstname) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Date of Birth (yyyy-MM-dd)</label>
                    {% if form_errors(form.dob) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.dob) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.dob, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Gender</label>
                    {% if form_errors(form.sex) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.sex) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.sex, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\"> 
                    <label for=\"exampleInputEmail1\">State of Origin</label>
                    {% if form_errors(form.state) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.state) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.state, {'attr': {'class': 'form-control'}}) }}   
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Home Towm</label>
                    {% if form_errors(form.hometown) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.hometown) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.hometown, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Marital Status</label>
                    {% if form_errors(form.mstatus) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.mstatus) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.mstatus, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Physical Disability</label>
                    {% if form_errors(form.disability) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.disability) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.disability, {'attr': {'class': 'form-control'}}) }}
                </div>
                <h3>Contact Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Personal Address</label>
                    {% if form_errors(form.address) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.address) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    {% if form_errors(form.mobile) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.mobile) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.mobile, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    {% if form_errors(form.email) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.email) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                </div>
                <h3>Next of Kin Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    {% if form_errors(form.nxtsname) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.nxtsname) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.nxtsname, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    {% if form_errors(form.nxtoname) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.nxtoname) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.nxtoname, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    {% if form_errors(form.nxtfname) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.nxtfname) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.nxtfname, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    {% if form_errors(form.nxtmobile) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.nxtmobile) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.nxtmobile, {'attr': {'class': 'form-control'}}) }}
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Relationship</label>
                    {% if form_errors(form.nxtrel) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.nxtrel) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.nxtrel, {'attr': {'class': 'form-control'}}) }}
                </div>
                <h3>Extra Curriculum Activities</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Activities</label>
                    {% if form_errors(form.extra_act) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.extra_act) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.extra_act, {'attr': {'class': 'form-control'}}) }}
                </div>
                <h3>Sponsorship Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Sponsorship Means</label>
                    {% if form_errors(form.scholarship_means) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.scholarship_means) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.scholarship_means, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Name of Scholarship Donor</label>
                    {% if form_errors(form.scholarship_donor_name) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.scholarship_donor_name) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.scholarship_donor_name, {'attr': {'class': 'form-control'}}) }}
                </div>
                <h3>A Level Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Name of Institution</label>
                    {% if form_errors(form.inst_name) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.inst_name) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.inst_name, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Location</label>
                    {% if form_errors(form.location) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.location) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.location, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Registration Number</label>
                    {% if form_errors(form.reg_no) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.reg_no) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.reg_no, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Date of Graduation (yyyy-MM-dd)</label>
                    {% if form_errors(form.date_of_grad) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.date_of_grad) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.date_of_grad, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Qualification</label>
                    {% if form_errors(form.qual) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.qual) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.qual, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Field of Study</label>
                    {% if form_errors(form.field) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.field) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.field, {'attr': {'class': 'form-control'}}) }}
                </div>
                <h3>Passport</h3>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Passport</label>
                  {% if form_errors(form.passport) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.passport) }}
                        </div>
                    {% endif %}
                  {{ form_widget(form.passport) }} 
                </div>
                <div class=\"alert alert-warning\" role=\"alert\">Note that names, programme, passport and course of choice can not be changed after submission. However, editing any other detail will attract the sum of #1000</div>
                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-success'}}) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", ":continue_registration:fullInfo.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/continue_registration/fullInfo.html.twig");
    }
}
