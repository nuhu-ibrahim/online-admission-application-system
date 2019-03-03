<?php

/* :continue_registration:fullInfo.html.twig */
class __TwigTemplate_c3f4a456f8755836d5693838cda498668a9216e475bcee8e13c48684c984ce97 extends Twig_Template
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
                <div class=\"alert alert-info\" role=\"alert\">Complete the form below appropriately and click submit, note that fields marked <span style=\"color:red; font-weight:600; font-size:1.3em;\">*</span> are compulsory.</div>
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
                    <label for=\"exampleInputEmail1\">Application Number</label>
                    ";
        // line 41
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appNo", array()), 'errors')) {
            // line 42
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appNo", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 46
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appNo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    ";
        // line 50
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "surname", array()), 'errors')) {
            // line 51
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "surname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 55
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "surname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    ";
        // line 59
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "othername", array()), 'errors')) {
            // line 60
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "othername", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 64
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "othername", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    ";
        // line 68
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'errors')) {
            // line 69
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 73
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Date of Birth (yyyy-MM-dd)</label>
                    ";
        // line 77
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dob", array()), 'errors')) {
            // line 78
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 79
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dob", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 82
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dob", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Gender</label>
                    ";
        // line 87
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sex", array()), 'errors')) {
            // line 88
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sex", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 92
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sex", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\"> 
                    <label for=\"exampleInputEmail1\">State of Origin</label>
                    ";
        // line 97
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state", array()), 'errors')) {
            // line 98
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 102
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Home Towm</label>
                    ";
        // line 107
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hometown", array()), 'errors')) {
            // line 108
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hometown", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 112
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hometown", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Marital Status</label>
                    ";
        // line 117
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mstatus", array()), 'errors')) {
            // line 118
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mstatus", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 122
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mstatus", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Physical Disability</label>
                    ";
        // line 127
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "disability", array()), 'errors')) {
            // line 128
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 129
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "disability", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 132
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "disability", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Contact Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Personal Address</label>
                    ";
        // line 137
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'errors')) {
            // line 138
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 142
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    ";
        // line 147
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'errors')) {
            // line 148
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 149
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 152
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    ";
        // line 157
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors')) {
            // line 158
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 162
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Next of Kin Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Surname</label>
                    ";
        // line 167
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtsname", array()), 'errors')) {
            // line 168
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 169
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtsname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 172
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtsname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Othername</label>
                    ";
        // line 177
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtoname", array()), 'errors')) {
            // line 178
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 179
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtoname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 182
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtoname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Firstname</label>
                    ";
        // line 187
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtfname", array()), 'errors')) {
            // line 188
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 189
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtfname", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 192
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtfname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mobile</label>
                    ";
        // line 197
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtmobile", array()), 'errors')) {
            // line 198
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 199
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtmobile", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 202
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtmobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Relationship</label>
                    ";
        // line 207
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtrel", array()), 'errors')) {
            // line 208
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 209
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtrel", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 212
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nxtrel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Extra Curriculum Activities</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Activities</label>
                    ";
        // line 217
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "extra_act", array()), 'errors')) {
            // line 218
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 219
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "extra_act", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 222
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "extra_act", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Sponsorship Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Sponsorship Means</label>
                    ";
        // line 227
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scholarship_means", array()), 'errors')) {
            // line 228
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 229
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scholarship_means", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 232
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scholarship_means", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Name of Scholarship Donor</label>
                    ";
        // line 236
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scholarship_donor_name", array()), 'errors')) {
            // line 237
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 238
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scholarship_donor_name", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 241
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scholarship_donor_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>A Level Information</h3>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Name of Institution</label>
                    ";
        // line 246
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "inst_name", array()), 'errors')) {
            // line 247
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 248
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "inst_name", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 251
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "inst_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Location</label>
                    ";
        // line 255
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "location", array()), 'errors')) {
            // line 256
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 257
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "location", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 260
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "location", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Registration Number</label>
                    ";
        // line 264
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reg_no", array()), 'errors')) {
            // line 265
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 266
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reg_no", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 269
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reg_no", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Date of Graduation (yyyy-MM-dd)</label>
                    ";
        // line 273
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date_of_grad", array()), 'errors')) {
            // line 274
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 275
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date_of_grad", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 278
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date_of_grad", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Qualification</label>
                    ";
        // line 282
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "qual", array()), 'errors')) {
            // line 283
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 284
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "qual", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 287
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "qual", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Field of Study</label>
                    ";
        // line 291
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "field", array()), 'errors')) {
            // line 292
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 293
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "field", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 296
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "field", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <h3>Passport</h3>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Passport</label>
                  ";
        // line 301
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "passport", array()), 'errors')) {
            // line 302
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 303
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "passport", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 306
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "passport", array()), 'widget');
        echo " 
                </div>
                <div class=\"alert alert-warning\" role=\"alert\">Note that names, programme, passport and course of choice can not be changed after submission. However, editing any other detail will attract the sum of #1000</div>
                ";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
            ";
        // line 310
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
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
        return array (  670 => 310,  666 => 309,  659 => 306,  653 => 303,  650 => 302,  648 => 301,  639 => 296,  633 => 293,  630 => 292,  628 => 291,  620 => 287,  614 => 284,  611 => 283,  609 => 282,  601 => 278,  595 => 275,  592 => 274,  590 => 273,  582 => 269,  576 => 266,  573 => 265,  571 => 264,  563 => 260,  557 => 257,  554 => 256,  552 => 255,  544 => 251,  538 => 248,  535 => 247,  533 => 246,  524 => 241,  518 => 238,  515 => 237,  513 => 236,  505 => 232,  499 => 229,  496 => 228,  494 => 227,  485 => 222,  479 => 219,  476 => 218,  474 => 217,  465 => 212,  459 => 209,  456 => 208,  454 => 207,  445 => 202,  439 => 199,  436 => 198,  434 => 197,  425 => 192,  419 => 189,  416 => 188,  414 => 187,  405 => 182,  399 => 179,  396 => 178,  394 => 177,  385 => 172,  379 => 169,  376 => 168,  374 => 167,  365 => 162,  359 => 159,  356 => 158,  354 => 157,  345 => 152,  339 => 149,  336 => 148,  334 => 147,  325 => 142,  319 => 139,  316 => 138,  314 => 137,  305 => 132,  299 => 129,  296 => 128,  294 => 127,  285 => 122,  279 => 119,  276 => 118,  274 => 117,  265 => 112,  259 => 109,  256 => 108,  254 => 107,  245 => 102,  239 => 99,  236 => 98,  234 => 97,  225 => 92,  219 => 89,  216 => 88,  214 => 87,  205 => 82,  199 => 79,  196 => 78,  194 => 77,  186 => 73,  180 => 70,  177 => 69,  175 => 68,  167 => 64,  161 => 61,  158 => 60,  156 => 59,  148 => 55,  142 => 52,  139 => 51,  137 => 50,  129 => 46,  123 => 43,  120 => 42,  118 => 41,  109 => 36,  103 => 33,  100 => 32,  98 => 31,  91 => 27,  88 => 26,  82 => 23,  79 => 22,  77 => 21,  72 => 18,  69 => 17,  60 => 14,  57 => 13,  52 => 12,  50 => 11,  45 => 9,  42 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":continue_registration:fullInfo.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/continue_registration/fullInfo.html.twig");
    }
}
