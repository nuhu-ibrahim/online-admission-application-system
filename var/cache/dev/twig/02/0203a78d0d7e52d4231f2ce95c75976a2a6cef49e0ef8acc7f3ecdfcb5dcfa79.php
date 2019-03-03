<?php

/* abase.html.twig */
class __TwigTemplate_5e91f5143498e23123b14f16b2bd9a2c7bc7f8d4b9bcad4cdafa4530f07b048c extends Twig_Template
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
        $__internal_ebd067fd5a6527e22195a7b2bb7dfeecb3b96b58b903cac841eb7377b8dfc856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd067fd5a6527e22195a7b2bb7dfeecb3b96b58b903cac841eb7377b8dfc856->enter($__internal_ebd067fd5a6527e22195a7b2bb7dfeecb3b96b58b903cac841eb7377b8dfc856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "abase.html.twig"));

        $__internal_d7d5ddcf1b27419545f107887a71d3ab8ddc6e00f1662b76e4f81f9a2c83887a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d5ddcf1b27419545f107887a71d3ab8ddc6e00f1662b76e4f81f9a2c83887a->enter($__internal_d7d5ddcf1b27419545f107887a71d3ab8ddc6e00f1662b76e4f81f9a2c83887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "abase.html.twig"));

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
        // line 102
        echo "   
            ";
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "        </div>
    </body>
</html>
";
        
        $__internal_ebd067fd5a6527e22195a7b2bb7dfeecb3b96b58b903cac841eb7377b8dfc856->leave($__internal_ebd067fd5a6527e22195a7b2bb7dfeecb3b96b58b903cac841eb7377b8dfc856_prof);

        
        $__internal_d7d5ddcf1b27419545f107887a71d3ab8ddc6e00f1662b76e4f81f9a2c83887a->leave($__internal_d7d5ddcf1b27419545f107887a71d3ab8ddc6e00f1662b76e4f81f9a2c83887a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae4639ca03be9dd87a17db22f458039426ce9ee9344fe125a4a2381a405bd32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4639ca03be9dd87a17db22f458039426ce9ee9344fe125a4a2381a405bd32d->enter($__internal_ae4639ca03be9dd87a17db22f458039426ce9ee9344fe125a4a2381a405bd32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cfd7ef2020a533331cfe4e4b2f5691b1365eef6e970bd46e6ea3e8890e7c6f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd7ef2020a533331cfe4e4b2f5691b1365eef6e970bd46e6ea3e8890e7c6f04->enter($__internal_cfd7ef2020a533331cfe4e4b2f5691b1365eef6e970bd46e6ea3e8890e7c6f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Kaduna Polytechnic
            ";
        
        $__internal_cfd7ef2020a533331cfe4e4b2f5691b1365eef6e970bd46e6ea3e8890e7c6f04->leave($__internal_cfd7ef2020a533331cfe4e4b2f5691b1365eef6e970bd46e6ea3e8890e7c6f04_prof);

        
        $__internal_ae4639ca03be9dd87a17db22f458039426ce9ee9344fe125a4a2381a405bd32d->leave($__internal_ae4639ca03be9dd87a17db22f458039426ce9ee9344fe125a4a2381a405bd32d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b41f1961ddfc5b9aa2d137b90ea7c887c783ce540f70ff5600b555b31922748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b41f1961ddfc5b9aa2d137b90ea7c887c783ce540f70ff5600b555b31922748->enter($__internal_6b41f1961ddfc5b9aa2d137b90ea7c887c783ce540f70ff5600b555b31922748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_64cea25d9add9d5843bcb1f981eaf415b06cde8ea62f2703e06816dac7c21180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cea25d9add9d5843bcb1f981eaf415b06cde8ea62f2703e06816dac7c21180->enter($__internal_64cea25d9add9d5843bcb1f981eaf415b06cde8ea62f2703e06816dac7c21180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_64cea25d9add9d5843bcb1f981eaf415b06cde8ea62f2703e06816dac7c21180->leave($__internal_64cea25d9add9d5843bcb1f981eaf415b06cde8ea62f2703e06816dac7c21180_prof);

        
        $__internal_6b41f1961ddfc5b9aa2d137b90ea7c887c783ce540f70ff5600b555b31922748->leave($__internal_6b41f1961ddfc5b9aa2d137b90ea7c887c783ce540f70ff5600b555b31922748_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_1ada2daf5386e1bd05e534bdb7cbc72825d6522273608b3cd176938d77b868fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ada2daf5386e1bd05e534bdb7cbc72825d6522273608b3cd176938d77b868fc->enter($__internal_1ada2daf5386e1bd05e534bdb7cbc72825d6522273608b3cd176938d77b868fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bafc050e1aa91e681077de1e5342c482bd64614d4e2956daa78c1359635da870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafc050e1aa91e681077de1e5342c482bd64614d4e2956daa78c1359635da870->enter($__internal_bafc050e1aa91e681077de1e5342c482bd64614d4e2956daa78c1359635da870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 65
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "                            
                        ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 100
        echo "                    </div>
                </div>
            ";
        
        $__internal_bafc050e1aa91e681077de1e5342c482bd64614d4e2956daa78c1359635da870->leave($__internal_bafc050e1aa91e681077de1e5342c482bd64614d4e2956daa78c1359635da870_prof);

        
        $__internal_1ada2daf5386e1bd05e534bdb7cbc72825d6522273608b3cd176938d77b868fc->leave($__internal_1ada2daf5386e1bd05e534bdb7cbc72825d6522273608b3cd176938d77b868fc_prof);

    }

    // line 30
    public function block_nav($context, array $blocks = array())
    {
        $__internal_88b067c539233d2be10986447639539ad6266106e13ec61ca4802722263610d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b067c539233d2be10986447639539ad6266106e13ec61ca4802722263610d5->enter($__internal_88b067c539233d2be10986447639539ad6266106e13ec61ca4802722263610d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_df655bef2cce6969139db9018031bd1065c169b53a2f6eb2ae9234c8492b0b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df655bef2cce6969139db9018031bd1065c169b53a2f6eb2ae9234c8492b0b44->enter($__internal_df655bef2cce6969139db9018031bd1065c169b53a2f6eb2ae9234c8492b0b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
                                                <li role=\"presentation\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("adminPage");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                                <li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "logout\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"><span style='visibility:hidden;'>i</span></span>Logout</a></li>
                                                <li role=\"presentation\" class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                                        Admin Roles <span class=\"caret\"></span>
                                                    </a>
                                                    <ul class=\"dropdown-menu nav\">
                                                        <!--<li role=\"presentation\"><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("activate");
        echo "\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Activate Student Payment</a></li>-->
                                                        <li role=\"presentation\"><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploadlist");
        echo "\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Upload Admission List</a></li>
                                                        <li role=\"presentation\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("viewapp");
        echo "\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>View Applicants</a></li>
                                                        <li role=\"presentation\"><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("download");
        echo "\"><span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Download Applications</a></li>
                                                        <li role=\"presentation\"><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("studentinfo");
        echo "\"><span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>View Applicant's Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            ";
        
        $__internal_df655bef2cce6969139db9018031bd1065c169b53a2f6eb2ae9234c8492b0b44->leave($__internal_df655bef2cce6969139db9018031bd1065c169b53a2f6eb2ae9234c8492b0b44_prof);

        
        $__internal_88b067c539233d2be10986447639539ad6266106e13ec61ca4802722263610d5->leave($__internal_88b067c539233d2be10986447639539ad6266106e13ec61ca4802722263610d5_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_515b6e573b2013d5ea62ffb9d7d61cab45af10accf745ad9a3f35834ba65de1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515b6e573b2013d5ea62ffb9d7d61cab45af10accf745ad9a3f35834ba65de1e->enter($__internal_515b6e573b2013d5ea62ffb9d7d61cab45af10accf745ad9a3f35834ba65de1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe6b2f6317d87ecd037a486602d641721861d3d57951c43ca0fd4db11fe92d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6b2f6317d87ecd037a486602d641721861d3d57951c43ca0fd4db11fe92d66->enter($__internal_fe6b2f6317d87ecd037a486602d641721861d3d57951c43ca0fd4db11fe92d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe6b2f6317d87ecd037a486602d641721861d3d57951c43ca0fd4db11fe92d66->leave($__internal_fe6b2f6317d87ecd037a486602d641721861d3d57951c43ca0fd4db11fe92d66_prof);

        
        $__internal_515b6e573b2013d5ea62ffb9d7d61cab45af10accf745ad9a3f35834ba65de1e->leave($__internal_515b6e573b2013d5ea62ffb9d7d61cab45af10accf745ad9a3f35834ba65de1e_prof);

    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1260201bf2c6fbbcb65aa2885d90bffac6ca8a127639fd9ba782be35d135349f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1260201bf2c6fbbcb65aa2885d90bffac6ca8a127639fd9ba782be35d135349f->enter($__internal_1260201bf2c6fbbcb65aa2885d90bffac6ca8a127639fd9ba782be35d135349f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e3393d9f1ede34ae24c7a60f8360d66ee3dce1c9fbc7fe1989fcfe8d12d902d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3393d9f1ede34ae24c7a60f8360d66ee3dce1c9fbc7fe1989fcfe8d12d902d4->enter($__internal_e3393d9f1ede34ae24c7a60f8360d66ee3dce1c9fbc7fe1989fcfe8d12d902d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 68
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
        
        $__internal_e3393d9f1ede34ae24c7a60f8360d66ee3dce1c9fbc7fe1989fcfe8d12d902d4->leave($__internal_e3393d9f1ede34ae24c7a60f8360d66ee3dce1c9fbc7fe1989fcfe8d12d902d4_prof);

        
        $__internal_1260201bf2c6fbbcb65aa2885d90bffac6ca8a127639fd9ba782be35d135349f->leave($__internal_1260201bf2c6fbbcb65aa2885d90bffac6ca8a127639fd9ba782be35d135349f_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7eddcbbfa880a801776a5923bb234d1ffcd545c091886692137289a12d04a5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eddcbbfa880a801776a5923bb234d1ffcd545c091886692137289a12d04a5b2->enter($__internal_7eddcbbfa880a801776a5923bb234d1ffcd545c091886692137289a12d04a5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3fd212c7c9ff5251d7b9b38aaac1bf7aeac35fad89b12dc738fe272b4e1524ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd212c7c9ff5251d7b9b38aaac1bf7aeac35fad89b12dc738fe272b4e1524ad->enter($__internal_3fd212c7c9ff5251d7b9b38aaac1bf7aeac35fad89b12dc738fe272b4e1524ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 105
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
        
        $__internal_3fd212c7c9ff5251d7b9b38aaac1bf7aeac35fad89b12dc738fe272b4e1524ad->leave($__internal_3fd212c7c9ff5251d7b9b38aaac1bf7aeac35fad89b12dc738fe272b4e1524ad_prof);

        
        $__internal_7eddcbbfa880a801776a5923bb234d1ffcd545c091886692137289a12d04a5b2->leave($__internal_7eddcbbfa880a801776a5923bb234d1ffcd545c091886692137289a12d04a5b2_prof);

    }

    public function getTemplateName()
    {
        return "abase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 105,  317 => 104,  308 => 103,  267 => 68,  258 => 67,  241 => 65,  223 => 57,  219 => 56,  215 => 55,  211 => 54,  207 => 53,  197 => 46,  193 => 45,  177 => 31,  168 => 30,  156 => 100,  154 => 67,  151 => 66,  148 => 65,  146 => 30,  142 => 29,  138 => 27,  129 => 26,  117 => 20,  107 => 13,  103 => 11,  94 => 10,  83 => 7,  74 => 6,  61 => 119,  59 => 103,  56 => 102,  54 => 26,  46 => 22,  44 => 10,  41 => 9,  39 => 6,  32 => 1,);
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
                                                <li role=\"presentation\"><a href=\"{{ url('adminPage') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                                <li role=\"presentation\"><a href=\"{{ url(\"homepage\") }}logout\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"><span style='visibility:hidden;'>i</span></span>Logout</a></li>
                                                <li role=\"presentation\" class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                                        Admin Roles <span class=\"caret\"></span>
                                                    </a>
                                                    <ul class=\"dropdown-menu nav\">
                                                        <!--<li role=\"presentation\"><a href=\"{{ url(\"activate\") }}\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Activate Student Payment</a></li>-->
                                                        <li role=\"presentation\"><a href=\"{{ url(\"uploadlist\") }}\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Upload Admission List</a></li>
                                                        <li role=\"presentation\"><a href=\"{{ url(\"viewapp\") }}\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>View Applicants</a></li>
                                                        <li role=\"presentation\"><a href=\"{{ url(\"download\") }}\"><span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Download Applications</a></li>
                                                        <li role=\"presentation\"><a href=\"{{ url(\"studentinfo\") }}\"><span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>View Applicant's Details</a></li>
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
", "abase.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\online_admission_application\\app\\Resources\\views\\abase.html.twig");
    }
}
