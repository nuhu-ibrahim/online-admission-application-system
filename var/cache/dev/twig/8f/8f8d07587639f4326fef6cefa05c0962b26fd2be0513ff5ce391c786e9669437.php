<?php

/* ::abase.html.twig */
class __TwigTemplate_bb9315ad136c61204fe04fadecde53387b40fc9694888827a902d2b3de5adf47 extends Twig_Template
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
        $__internal_264d6b31751458b54a34f2bdd8dc9205975850d9820cacecc45ce5ed49544cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264d6b31751458b54a34f2bdd8dc9205975850d9820cacecc45ce5ed49544cc5->enter($__internal_264d6b31751458b54a34f2bdd8dc9205975850d9820cacecc45ce5ed49544cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::abase.html.twig"));

        $__internal_08a33c091bd928dbe571e5e6ec2c8e0b3eec736dcbd407fad629d19c8d27e162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a33c091bd928dbe571e5e6ec2c8e0b3eec736dcbd407fad629d19c8d27e162->enter($__internal_08a33c091bd928dbe571e5e6ec2c8e0b3eec736dcbd407fad629d19c8d27e162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::abase.html.twig"));

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
        // line 92
        echo "   
            ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "        </div>
    </body>
</html>
";
        
        $__internal_264d6b31751458b54a34f2bdd8dc9205975850d9820cacecc45ce5ed49544cc5->leave($__internal_264d6b31751458b54a34f2bdd8dc9205975850d9820cacecc45ce5ed49544cc5_prof);

        
        $__internal_08a33c091bd928dbe571e5e6ec2c8e0b3eec736dcbd407fad629d19c8d27e162->leave($__internal_08a33c091bd928dbe571e5e6ec2c8e0b3eec736dcbd407fad629d19c8d27e162_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0674ac42f43b25ea44289b62e63b58bb886db24a18e5abc34a9ce4c015da06c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0674ac42f43b25ea44289b62e63b58bb886db24a18e5abc34a9ce4c015da06c4->enter($__internal_0674ac42f43b25ea44289b62e63b58bb886db24a18e5abc34a9ce4c015da06c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70334973e359a85010a2bc193cc1e797e86ab4ad1a1f6c8cac1787ecb97005ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70334973e359a85010a2bc193cc1e797e86ab4ad1a1f6c8cac1787ecb97005ce->enter($__internal_70334973e359a85010a2bc193cc1e797e86ab4ad1a1f6c8cac1787ecb97005ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Kaduna Polytechnic
            ";
        
        $__internal_70334973e359a85010a2bc193cc1e797e86ab4ad1a1f6c8cac1787ecb97005ce->leave($__internal_70334973e359a85010a2bc193cc1e797e86ab4ad1a1f6c8cac1787ecb97005ce_prof);

        
        $__internal_0674ac42f43b25ea44289b62e63b58bb886db24a18e5abc34a9ce4c015da06c4->leave($__internal_0674ac42f43b25ea44289b62e63b58bb886db24a18e5abc34a9ce4c015da06c4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4716dfe3d792c53738c7506972011515eae17602171a503b6800396ea1b95728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4716dfe3d792c53738c7506972011515eae17602171a503b6800396ea1b95728->enter($__internal_4716dfe3d792c53738c7506972011515eae17602171a503b6800396ea1b95728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e86efed6ed7ef6d4612133f0760dc3575fb1fab5645f47d3eaf4c63c212a80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e86efed6ed7ef6d4612133f0760dc3575fb1fab5645f47d3eaf4c63c212a80c->enter($__internal_0e86efed6ed7ef6d4612133f0760dc3575fb1fab5645f47d3eaf4c63c212a80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0e86efed6ed7ef6d4612133f0760dc3575fb1fab5645f47d3eaf4c63c212a80c->leave($__internal_0e86efed6ed7ef6d4612133f0760dc3575fb1fab5645f47d3eaf4c63c212a80c_prof);

        
        $__internal_4716dfe3d792c53738c7506972011515eae17602171a503b6800396ea1b95728->leave($__internal_4716dfe3d792c53738c7506972011515eae17602171a503b6800396ea1b95728_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_c88222955b69743fd3c92dc37686798293a70a3a5c674ae38ac38af31e85fd16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88222955b69743fd3c92dc37686798293a70a3a5c674ae38ac38af31e85fd16->enter($__internal_c88222955b69743fd3c92dc37686798293a70a3a5c674ae38ac38af31e85fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_044288d08dbcee4d2bbce183e92346f914c8b88da5a590a15829794731a24e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044288d08dbcee4d2bbce183e92346f914c8b88da5a590a15829794731a24e81->enter($__internal_044288d08dbcee4d2bbce183e92346f914c8b88da5a590a15829794731a24e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\" style=\"border-color: #AAA; margin-top:20px; border-style:solid; border-radius:10px; box-shadow:0px 0px 1em #888;padding-top:20px;\">
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("header.jpg"), "html", null, true);
        echo "\" width=\"100%\" class=\"img-responsive\" alt=\"Responsive image\" />
                        
                        <div class=\"col-md-12\">
                            <br/>
                            ";
        // line 33
        $this->displayBlock('nav', $context, $blocks);
        // line 53
        echo "                        </div>
                        
                        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "                            
                        ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "                    </div>
                </div>
            ";
        
        $__internal_044288d08dbcee4d2bbce183e92346f914c8b88da5a590a15829794731a24e81->leave($__internal_044288d08dbcee4d2bbce183e92346f914c8b88da5a590a15829794731a24e81_prof);

        
        $__internal_c88222955b69743fd3c92dc37686798293a70a3a5c674ae38ac38af31e85fd16->leave($__internal_c88222955b69743fd3c92dc37686798293a70a3a5c674ae38ac38af31e85fd16_prof);

    }

    // line 33
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b481b183aba26a6b9a12d4a4d79bba92349a0a09ca9caf285327533bb4f0b65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b481b183aba26a6b9a12d4a4d79bba92349a0a09ca9caf285327533bb4f0b65b->enter($__internal_b481b183aba26a6b9a12d4a4d79bba92349a0a09ca9caf285327533bb4f0b65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_a337936d466e001ff2389416fd61fd11ed05b17aa531e5be70bf58459db5d1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a337936d466e001ff2389416fd61fd11ed05b17aa531e5be70bf58459db5d1ab->enter($__internal_a337936d466e001ff2389416fd61fd11ed05b17aa531e5be70bf58459db5d1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 34
        echo "                                <ul class=\"nav nav-tabs mynav\">
                                    <li role=\"presentation\"><a target='_blank' href=\"https://www.kadunapolytechnic.edu.ng\">Polytechnic Home</a></li>
                                    <li role=\"presentation\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("adminPage");
        echo "\">Home</a></li>
                                    <li role=\"presentation\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "logout\">Logout</a></li>
                                    <li role=\"presentation\" class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Admin Roles <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li role=\"presentation\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("activate");
        echo "\">Activate Student Payment</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploadlist");
        echo "\">Upload Admission List</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("viewapp");
        echo "\">View Applicants</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("download");
        echo "\">Download Applications</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("studentinfo");
        echo "\">View Applicant's Details</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                <br/>
                            ";
        
        $__internal_a337936d466e001ff2389416fd61fd11ed05b17aa531e5be70bf58459db5d1ab->leave($__internal_a337936d466e001ff2389416fd61fd11ed05b17aa531e5be70bf58459db5d1ab_prof);

        
        $__internal_b481b183aba26a6b9a12d4a4d79bba92349a0a09ca9caf285327533bb4f0b65b->leave($__internal_b481b183aba26a6b9a12d4a4d79bba92349a0a09ca9caf285327533bb4f0b65b_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_448cf75e1ec2e38f188c48f482bdb6e0a9029cb922c993379299d506de5503af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448cf75e1ec2e38f188c48f482bdb6e0a9029cb922c993379299d506de5503af->enter($__internal_448cf75e1ec2e38f188c48f482bdb6e0a9029cb922c993379299d506de5503af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d00b6616aa283ea0f4fbf6260dfaac3026568bab8e8efe75728d97fe3a49128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d00b6616aa283ea0f4fbf6260dfaac3026568bab8e8efe75728d97fe3a49128->enter($__internal_3d00b6616aa283ea0f4fbf6260dfaac3026568bab8e8efe75728d97fe3a49128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d00b6616aa283ea0f4fbf6260dfaac3026568bab8e8efe75728d97fe3a49128->leave($__internal_3d00b6616aa283ea0f4fbf6260dfaac3026568bab8e8efe75728d97fe3a49128_prof);

        
        $__internal_448cf75e1ec2e38f188c48f482bdb6e0a9029cb922c993379299d506de5503af->leave($__internal_448cf75e1ec2e38f188c48f482bdb6e0a9029cb922c993379299d506de5503af_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c9b93158784b8b257281a8218523475e98bb0eb553d7146a0a4185b5e6ed2c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b93158784b8b257281a8218523475e98bb0eb553d7146a0a4185b5e6ed2c1c->enter($__internal_c9b93158784b8b257281a8218523475e98bb0eb553d7146a0a4185b5e6ed2c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_173c2319d95cda36dcca587c196e049f1dae180168bcfff1a786abcef564b95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173c2319d95cda36dcca587c196e049f1dae180168bcfff1a786abcef564b95e->enter($__internal_173c2319d95cda36dcca587c196e049f1dae180168bcfff1a786abcef564b95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 58
        echo "                            <div class=\"col-md-12\">
                                <hr style=\"border: solid green 1px;\">
                                <div class=\"col-sm-6\">
                                    <strong>We are always ready to address your comments or complaints:</strong>
                                    <br><br>
                                    <ul style=\"margin-left: 5%;\">
                                        <li><a href=\"#\">eportaldevelopment@kadunapolytechnic.edu.ng</a></li>
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
                                    <hr style=\"border: solid green 1px; margin-top: 0px\">
                                </div> 
                            </div>
                        ";
        
        $__internal_173c2319d95cda36dcca587c196e049f1dae180168bcfff1a786abcef564b95e->leave($__internal_173c2319d95cda36dcca587c196e049f1dae180168bcfff1a786abcef564b95e_prof);

        
        $__internal_c9b93158784b8b257281a8218523475e98bb0eb553d7146a0a4185b5e6ed2c1c->leave($__internal_c9b93158784b8b257281a8218523475e98bb0eb553d7146a0a4185b5e6ed2c1c_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc74024e6fae83d38d682cda7e6d01da9951bb3bd332a884b298a13921314a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc74024e6fae83d38d682cda7e6d01da9951bb3bd332a884b298a13921314a5d->enter($__internal_cc74024e6fae83d38d682cda7e6d01da9951bb3bd332a884b298a13921314a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4269344e95116d1b46cfb00db6d95a0527a4a2c1783aca816356a6879bfce581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4269344e95116d1b46cfb00db6d95a0527a4a2c1783aca816356a6879bfce581->enter($__internal_4269344e95116d1b46cfb00db6d95a0527a4a2c1783aca816356a6879bfce581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
                    \$('dropdown-toggle').dropdown();
                </script>
            ";
        
        $__internal_4269344e95116d1b46cfb00db6d95a0527a4a2c1783aca816356a6879bfce581->leave($__internal_4269344e95116d1b46cfb00db6d95a0527a4a2c1783aca816356a6879bfce581_prof);

        
        $__internal_cc74024e6fae83d38d682cda7e6d01da9951bb3bd332a884b298a13921314a5d->leave($__internal_cc74024e6fae83d38d682cda7e6d01da9951bb3bd332a884b298a13921314a5d_prof);

    }

    public function getTemplateName()
    {
        return "::abase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 95,  308 => 94,  299 => 93,  258 => 58,  249 => 57,  232 => 55,  216 => 47,  212 => 46,  208 => 45,  204 => 44,  200 => 43,  191 => 37,  187 => 36,  183 => 34,  174 => 33,  162 => 90,  160 => 57,  157 => 56,  155 => 55,  151 => 53,  149 => 33,  142 => 29,  138 => 27,  129 => 26,  117 => 20,  107 => 13,  103 => 11,  94 => 10,  83 => 7,  74 => 6,  61 => 100,  59 => 93,  56 => 92,  54 => 26,  46 => 22,  44 => 10,  41 => 9,  39 => 6,  32 => 1,);
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
                        <img src=\"{{asset('header.jpg')}}\" width=\"100%\" class=\"img-responsive\" alt=\"Responsive image\" />
                        
                        <div class=\"col-md-12\">
                            <br/>
                            {% block nav %}
                                <ul class=\"nav nav-tabs mynav\">
                                    <li role=\"presentation\"><a target='_blank' href=\"https://www.kadunapolytechnic.edu.ng\">Polytechnic Home</a></li>
                                    <li role=\"presentation\"><a href=\"{{ url('adminPage') }}\">Home</a></li>
                                    <li role=\"presentation\"><a href=\"{{ url(\"homepage\") }}logout\">Logout</a></li>
                                    <li role=\"presentation\" class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Admin Roles <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li role=\"presentation\"><a href=\"{{ url(\"activate\") }}\">Activate Student Payment</a></li>
                                        <li role=\"presentation\"><a href=\"{{ url(\"uploadlist\") }}\">Upload Admission List</a></li>
                                        <li role=\"presentation\"><a href=\"{{ url(\"viewapp\") }}\">View Applicants</a></li>
                                        <li role=\"presentation\"><a href=\"{{ url(\"download\") }}\">Download Applications</a></li>
                                        <li role=\"presentation\"><a href=\"{{ url(\"studentinfo\") }}\">View Applicant's Details</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                <br/>
                            {% endblock %}
                        </div>
                        
                        {% block body %}{% endblock %}
                            
                        {% block footer %}
                            <div class=\"col-md-12\">
                                <hr style=\"border: solid green 1px;\">
                                <div class=\"col-sm-6\">
                                    <strong>We are always ready to address your comments or complaints:</strong>
                                    <br><br>
                                    <ul style=\"margin-left: 5%;\">
                                        <li><a href=\"#\">eportaldevelopment@kadunapolytechnic.edu.ng</a></li>
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
                                    <hr style=\"border: solid green 1px; margin-top: 0px\">
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
            {% endblock %}
        </div>
    </body>
</html>
", "::abase.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/abase.html.twig");
    }
}
