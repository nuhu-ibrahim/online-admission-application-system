<?php

/* cashier.html.twig */
class __TwigTemplate_d8f736fac8326fef6bf80e00beb58a212c0e9f5451e02246483d1bcd746f4bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd333e9d42067f618a61ff376d05ea7c5f2550820a84f45cb65da6a40e878fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd333e9d42067f618a61ff376d05ea7c5f2550820a84f45cb65da6a40e878fab->enter($__internal_cd333e9d42067f618a61ff376d05ea7c5f2550820a84f45cb65da6a40e878fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cashier.html.twig"));

        $__internal_e1f286c23cdc7c7a49b7f17bb416f0a0736a01635fcab19cb5cee53e95e4d7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f286c23cdc7c7a49b7f17bb416f0a0736a01635fcab19cb5cee53e95e4d7f2->enter($__internal_e1f286c23cdc7c7a49b7f17bb416f0a0736a01635fcab19cb5cee53e95e4d7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cashier.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container-fluid\">
            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 98
        echo "   
            ";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "        </div>
    </body>
</html>
";
        
        $__internal_cd333e9d42067f618a61ff376d05ea7c5f2550820a84f45cb65da6a40e878fab->leave($__internal_cd333e9d42067f618a61ff376d05ea7c5f2550820a84f45cb65da6a40e878fab_prof);

        
        $__internal_e1f286c23cdc7c7a49b7f17bb416f0a0736a01635fcab19cb5cee53e95e4d7f2->leave($__internal_e1f286c23cdc7c7a49b7f17bb416f0a0736a01635fcab19cb5cee53e95e4d7f2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f93e4741f47f7ac93b1cb836d2d089883bf9e390ec2113827f974d9f86406bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93e4741f47f7ac93b1cb836d2d089883bf9e390ec2113827f974d9f86406bf2->enter($__internal_f93e4741f47f7ac93b1cb836d2d089883bf9e390ec2113827f974d9f86406bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1631357f16ab1b8d0d071c637b168431027e6e561a79e96022c0f74c0b0d51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1631357f16ab1b8d0d071c637b168431027e6e561a79e96022c0f74c0b0d51f->enter($__internal_c1631357f16ab1b8d0d071c637b168431027e6e561a79e96022c0f74c0b0d51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Kaduna Polytechnic
            ";
        
        $__internal_c1631357f16ab1b8d0d071c637b168431027e6e561a79e96022c0f74c0b0d51f->leave($__internal_c1631357f16ab1b8d0d071c637b168431027e6e561a79e96022c0f74c0b0d51f_prof);

        
        $__internal_f93e4741f47f7ac93b1cb836d2d089883bf9e390ec2113827f974d9f86406bf2->leave($__internal_f93e4741f47f7ac93b1cb836d2d089883bf9e390ec2113827f974d9f86406bf2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49ba2bb1595a793326e2c8dd21ea87faecce7e8dbe13f7eecc842e23d36888d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ba2bb1595a793326e2c8dd21ea87faecce7e8dbe13f7eecc842e23d36888d7->enter($__internal_49ba2bb1595a793326e2c8dd21ea87faecce7e8dbe13f7eecc842e23d36888d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bcf19efd5be49c84316879d9fd19f59b50a52e1df4474fe40b0b2b9413ab535d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf19efd5be49c84316879d9fd19f59b50a52e1df4474fe40b0b2b9413ab535d->enter($__internal_bcf19efd5be49c84316879d9fd19f59b50a52e1df4474fe40b0b2b9413ab535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <style>
                body{
                    background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bg.png"), "html", null, true);
        echo "); 
                    background-repeat: repeat-x;
                }
                .mynav{
                    background-color:white;
                }
            </style>
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_bcf19efd5be49c84316879d9fd19f59b50a52e1df4474fe40b0b2b9413ab535d->leave($__internal_bcf19efd5be49c84316879d9fd19f59b50a52e1df4474fe40b0b2b9413ab535d_prof);

        
        $__internal_49ba2bb1595a793326e2c8dd21ea87faecce7e8dbe13f7eecc842e23d36888d7->leave($__internal_49ba2bb1595a793326e2c8dd21ea87faecce7e8dbe13f7eecc842e23d36888d7_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_d51bc878acd0455fe19c8a836cdd09737462cfb1a1692591e3591e9aace4792d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51bc878acd0455fe19c8a836cdd09737462cfb1a1692591e3591e9aace4792d->enter($__internal_d51bc878acd0455fe19c8a836cdd09737462cfb1a1692591e3591e9aace4792d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c44b986098160ce59a6ac0d334b6b11c63528ece49205ed38930f1d1952531c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44b986098160ce59a6ac0d334b6b11c63528ece49205ed38930f1d1952531c8->enter($__internal_c44b986098160ce59a6ac0d334b6b11c63528ece49205ed38930f1d1952531c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\" style=\"border-color: #AAA; margin-top:20px; border-style:solid; border-radius:10px; box-shadow:0px 0px 1em #888;padding-top:20px;\">
                        <!--<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icon.jpg"), "html", null, true);
        echo "\" width=\"100%\" class=\"img-responsive\" alt=\"Responsive image\" />-->
                        ";
        // line 30
        $this->displayBlock('nav', $context, $blocks);
        // line 61
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "                            
                        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "                    </div>
                </div>
            ";
        
        $__internal_c44b986098160ce59a6ac0d334b6b11c63528ece49205ed38930f1d1952531c8->leave($__internal_c44b986098160ce59a6ac0d334b6b11c63528ece49205ed38930f1d1952531c8_prof);

        
        $__internal_d51bc878acd0455fe19c8a836cdd09737462cfb1a1692591e3591e9aace4792d->leave($__internal_d51bc878acd0455fe19c8a836cdd09737462cfb1a1692591e3591e9aace4792d_prof);

    }

    // line 30
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f7d24b1e544160a9e34051df23de1d97134c2fe8e9d4da57920b602029e32c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d24b1e544160a9e34051df23de1d97134c2fe8e9d4da57920b602029e32c3c->enter($__internal_f7d24b1e544160a9e34051df23de1d97134c2fe8e9d4da57920b602029e32c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_67dd3358c62ee2e90910db5040db33d4aa01a7107a6a28e3dd44bc67efec934a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dd3358c62ee2e90910db5040db33d4aa01a7107a6a28e3dd44bc67efec934a->enter($__internal_67dd3358c62ee2e90910db5040db33d4aa01a7107a6a28e3dd44bc67efec934a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 31
        echo "                                <nav class=\"navbar navbar-inverse\" role=\"navigation\">
                                    <div class=\"col-md-12\">
                                        <div class=\"navbar-header\">
                                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                                    <span class=\"sr-only\">Toggle navigation</span>
                                                    <span class=\"icon-bar\"></span>
                                                    <span class=\"icon-bar\"></span>
                                                    <span class=\"icon-bar\"></span>
                                            </button>
                                            <a class=\"navbar-brand\" href=\"#\">Nuhu Bamali Polytechnic</a>
                                        </div>
                                        <div class=\"collapse navbar-collapse\" id='bs-example-navbar-collapse-1'>
                                            <ul class=\"nav navbar-nav\">
                                                <li role=\"presentation\"><a target='_blank' href=\"https://www.kadunapolytechnic.edu.ng\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Polytechnic Home</a></li>
                                                <li role=\"presentation\"><a href=\"#\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                                <li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "logout\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"><span style='visibility:hidden;'>i</span></span>Logout</a></li>
                                                <li role=\"presentation\" class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                                        Cashier Role <span class=\"caret\"></span>
                                                    </a>
                                                    <ul class=\"dropdown-menu nav\">
                                                        <li role=\"presentation\"><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("activate");
        echo "\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Activate Student Payment</a></li>                 
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            ";
        
        $__internal_67dd3358c62ee2e90910db5040db33d4aa01a7107a6a28e3dd44bc67efec934a->leave($__internal_67dd3358c62ee2e90910db5040db33d4aa01a7107a6a28e3dd44bc67efec934a_prof);

        
        $__internal_f7d24b1e544160a9e34051df23de1d97134c2fe8e9d4da57920b602029e32c3c->leave($__internal_f7d24b1e544160a9e34051df23de1d97134c2fe8e9d4da57920b602029e32c3c_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec645167e605c7bd1baad3179b0a75e723625a4c84f83a13c3b0fb7ea7d7832d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec645167e605c7bd1baad3179b0a75e723625a4c84f83a13c3b0fb7ea7d7832d->enter($__internal_ec645167e605c7bd1baad3179b0a75e723625a4c84f83a13c3b0fb7ea7d7832d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7431f70debc927b4c5361b946bc727603632e20fc3d2156207d6d9aa1194c5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7431f70debc927b4c5361b946bc727603632e20fc3d2156207d6d9aa1194c5a0->enter($__internal_7431f70debc927b4c5361b946bc727603632e20fc3d2156207d6d9aa1194c5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7431f70debc927b4c5361b946bc727603632e20fc3d2156207d6d9aa1194c5a0->leave($__internal_7431f70debc927b4c5361b946bc727603632e20fc3d2156207d6d9aa1194c5a0_prof);

        
        $__internal_ec645167e605c7bd1baad3179b0a75e723625a4c84f83a13c3b0fb7ea7d7832d->leave($__internal_ec645167e605c7bd1baad3179b0a75e723625a4c84f83a13c3b0fb7ea7d7832d_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_40e45da36eb741710c10b9fa03f05416a469b1493cb2cf79816bf8a1216652b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e45da36eb741710c10b9fa03f05416a469b1493cb2cf79816bf8a1216652b4->enter($__internal_40e45da36eb741710c10b9fa03f05416a469b1493cb2cf79816bf8a1216652b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9d62e1bcea3b474bf224aa472be413c25a6fcb74367ccf1e15f7324b7f7be5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d62e1bcea3b474bf224aa472be413c25a6fcb74367ccf1e15f7324b7f7be5a4->enter($__internal_9d62e1bcea3b474bf224aa472be413c25a6fcb74367ccf1e15f7324b7f7be5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "                            <div class=\"col-md-12\">
                                <hr style=\"border: solid green 1px;\">
                                <div class=\"col-sm-6\">
                                    <strong>We are always ready to address your comments or complaints:</strong>
                                    <br><br>
                                    <ul style=\"margin-left: 5%;\">
                                        <li><a href=\"#\">eportal@kadpoly.edu.ng</a></li>
                                        <li><a href=\"#\">+234 (0) 7067430505</a></li>
                                        <li><a href=\"#\">+234 (0) 7067430512</a></li>
                                        <li><a href=\"#\">+234 (0) 7067430531</a></li>
                                        <li><a href=\"#\">+234 (0) 7067430539</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-6\">
                                    <strong>To get help fast:</strong>
                                    <br><br>
                                    <ol>
                                        <li>Please do <strong>NOT</strong> call with hidden or 'private' numbers.</li>
                                        <li>Please always go straight to the point, other people are waiting to get help too.</li>
                                        <li>On week days (Monday - Friday), please call between <strong>10:00AM &nbsp;—&nbsp; 4:00PM only.</strong></li>
                                        <li>Kaduna Polytechic Call Centre support services run only on week days; <strong>please do NOT call on weekends.</strong></li>
                                        <li><strong><font color=\"#FF0000\">Your calls will NOT be answered if you fail to comply with the above.</font></strong> Thank you.</li>
                                    </ol>
                                </div>
                                <div style=\"clear: both;\"></div>
                                <div class=\"col-md-5 col-md-offset-7\">
                                    <br />
                                    <span>© 2017: Kaduna Polytechnic, Kaduna - Nigeria.</span>
                                    <hr style=\"border: solid green 1px; margin-top:0px\">
                                </div> 
                            </div>
                        ";
        
        $__internal_9d62e1bcea3b474bf224aa472be413c25a6fcb74367ccf1e15f7324b7f7be5a4->leave($__internal_9d62e1bcea3b474bf224aa472be413c25a6fcb74367ccf1e15f7324b7f7be5a4_prof);

        
        $__internal_40e45da36eb741710c10b9fa03f05416a469b1493cb2cf79816bf8a1216652b4->leave($__internal_40e45da36eb741710c10b9fa03f05416a469b1493cb2cf79816bf8a1216652b4_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b596af954da54c5944b5a6c85ac7f22886856549b55adbaac111afd58015481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b596af954da54c5944b5a6c85ac7f22886856549b55adbaac111afd58015481->enter($__internal_6b596af954da54c5944b5a6c85ac7f22886856549b55adbaac111afd58015481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4212b7cd860a24411c6c1e9d93794918b1b7065e35e64602a4f955397ede893b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4212b7cd860a24411c6c1e9d93794918b1b7065e35e64602a4f955397ede893b->enter($__internal_4212b7cd860a24411c6c1e9d93794918b1b7065e35e64602a4f955397ede893b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
                    \$('dropdown-toggle').dropdown();
                </script>
                <script>
                      function printDiv(divName){
                          var printContents= document.getElementById(divName).innerHTML;
                          var originalContents=document.body.innerHTML;
                          document.body.innerHTML=printContents;
                          window.print();
                          document.body.innerHTML=originalContents;
                      }
                </script>
            ";
        
        $__internal_4212b7cd860a24411c6c1e9d93794918b1b7065e35e64602a4f955397ede893b->leave($__internal_4212b7cd860a24411c6c1e9d93794918b1b7065e35e64602a4f955397ede893b_prof);

        
        $__internal_6b596af954da54c5944b5a6c85ac7f22886856549b55adbaac111afd58015481->leave($__internal_6b596af954da54c5944b5a6c85ac7f22886856549b55adbaac111afd58015481_prof);

    }

    public function getTemplateName()
    {
        return "cashier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 101,  298 => 100,  289 => 99,  248 => 64,  239 => 63,  222 => 61,  204 => 53,  194 => 46,  177 => 31,  168 => 30,  156 => 96,  154 => 63,  151 => 62,  148 => 61,  146 => 30,  142 => 29,  138 => 27,  129 => 26,  117 => 20,  107 => 13,  103 => 11,  94 => 10,  83 => 7,  74 => 6,  61 => 115,  59 => 99,  56 => 98,  54 => 26,  46 => 22,  44 => 10,  41 => 9,  39 => 6,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            {% block title %}
                Kaduna Polytechnic
            {% endblock %}
        </title>
        {% block stylesheets %}
            <style>
                body{
                    background-image:url({{ asset('bg.png') }}); 
                    background-repeat: repeat-x;
                }
                .mynav{
                    background-color:white;
                }
            </style>
            <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container-fluid\">
            {% block header %}
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\" style=\"border-color: #AAA; margin-top:20px; border-style:solid; border-radius:10px; box-shadow:0px 0px 1em #888;padding-top:20px;\">
                        <!--<img src=\"{{asset('icon.jpg')}}\" width=\"100%\" class=\"img-responsive\" alt=\"Responsive image\" />-->
                        {% block nav %}
                                <nav class=\"navbar navbar-inverse\" role=\"navigation\">
                                    <div class=\"col-md-12\">
                                        <div class=\"navbar-header\">
                                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                                    <span class=\"sr-only\">Toggle navigation</span>
                                                    <span class=\"icon-bar\"></span>
                                                    <span class=\"icon-bar\"></span>
                                                    <span class=\"icon-bar\"></span>
                                            </button>
                                            <a class=\"navbar-brand\" href=\"#\">Nuhu Bamali Polytechnic</a>
                                        </div>
                                        <div class=\"collapse navbar-collapse\" id='bs-example-navbar-collapse-1'>
                                            <ul class=\"nav navbar-nav\">
                                                <li role=\"presentation\"><a target='_blank' href=\"https://www.kadunapolytechnic.edu.ng\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Polytechnic Home</a></li>
                                                <li role=\"presentation\"><a href=\"#\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                                <li role=\"presentation\"><a href=\"{{ url(\"homepage\") }}logout\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"><span style='visibility:hidden;'>i</span></span>Logout</a></li>
                                                <li role=\"presentation\" class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                                        Cashier Role <span class=\"caret\"></span>
                                                    </a>
                                                    <ul class=\"dropdown-menu nav\">
                                                        <li role=\"presentation\"><a href=\"{{ url(\"activate\") }}\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Activate Student Payment</a></li>                 
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            {% endblock %}
                        {% block body %}{% endblock %}
                            
                        {% block footer %}
                            <div class=\"col-md-12\">
                                <hr style=\"border: solid green 1px;\">
                                <div class=\"col-sm-6\">
                                    <strong>We are always ready to address your comments or complaints:</strong>
                                    <br><br>
                                    <ul style=\"margin-left: 5%;\">
                                        <li><a href=\"#\">eportal@kadpoly.edu.ng</a></li>
                                        <li><a href=\"#\">+234 (0) 7067430505</a></li>
                                        <li><a href=\"#\">+234 (0) 7067430512</a></li>
                                        <li><a href=\"#\">+234 (0) 7067430531</a></li>
                                        <li><a href=\"#\">+234 (0) 7067430539</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-6\">
                                    <strong>To get help fast:</strong>
                                    <br><br>
                                    <ol>
                                        <li>Please do <strong>NOT</strong> call with hidden or 'private' numbers.</li>
                                        <li>Please always go straight to the point, other people are waiting to get help too.</li>
                                        <li>On week days (Monday - Friday), please call between <strong>10:00AM &nbsp;—&nbsp; 4:00PM only.</strong></li>
                                        <li>Kaduna Polytechic Call Centre support services run only on week days; <strong>please do NOT call on weekends.</strong></li>
                                        <li><strong><font color=\"#FF0000\">Your calls will NOT be answered if you fail to comply with the above.</font></strong> Thank you.</li>
                                    </ol>
                                </div>
                                <div style=\"clear: both;\"></div>
                                <div class=\"col-md-5 col-md-offset-7\">
                                    <br />
                                    <span>© 2017: Kaduna Polytechnic, Kaduna - Nigeria.</span>
                                    <hr style=\"border: solid green 1px; margin-top:0px\">
                                </div> 
                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}   
            {% block javascripts %}
                <script type=\"text/javascript\" src=\"{{ asset('js/jquery.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>
                <script type=\"text/javascript\">
                    \$('dropdown-toggle').dropdown();
                </script>
                <script>
                      function printDiv(divName){
                          var printContents= document.getElementById(divName).innerHTML;
                          var originalContents=document.body.innerHTML;
                          document.body.innerHTML=printContents;
                          window.print();
                          document.body.innerHTML=originalContents;
                      }
                </script>
            {% endblock %}
        </div>
    </body>
</html>
", "cashier.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\cashier.html.twig");
    }
}
