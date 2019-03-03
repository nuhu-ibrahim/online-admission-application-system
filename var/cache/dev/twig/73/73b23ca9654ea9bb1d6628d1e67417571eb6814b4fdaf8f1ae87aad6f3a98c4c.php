<?php

/* ubase.html.twig */
class __TwigTemplate_006b35b90bf54f973974303581f32e9537043ef57a46817fc671c1d3e9ba94eb extends Twig_Template
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
        $__internal_4ddd5da682515b66e0fe41883f9d126ed3bba0dd10e8ce4f850f2ffaed065fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddd5da682515b66e0fe41883f9d126ed3bba0dd10e8ce4f850f2ffaed065fad->enter($__internal_4ddd5da682515b66e0fe41883f9d126ed3bba0dd10e8ce4f850f2ffaed065fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ubase.html.twig"));

        $__internal_7b162808e2178a6298063a6c4935d57e6f2c6e3e6a5cd109493cb4ad2ecc2634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b162808e2178a6298063a6c4935d57e6f2c6e3e6a5cd109493cb4ad2ecc2634->enter($__internal_7b162808e2178a6298063a6c4935d57e6f2c6e3e6a5cd109493cb4ad2ecc2634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ubase.html.twig"));

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
        // line 100
        echo "   
            ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 117
        echo "        </div>
    </body>
</html>
";
        
        $__internal_4ddd5da682515b66e0fe41883f9d126ed3bba0dd10e8ce4f850f2ffaed065fad->leave($__internal_4ddd5da682515b66e0fe41883f9d126ed3bba0dd10e8ce4f850f2ffaed065fad_prof);

        
        $__internal_7b162808e2178a6298063a6c4935d57e6f2c6e3e6a5cd109493cb4ad2ecc2634->leave($__internal_7b162808e2178a6298063a6c4935d57e6f2c6e3e6a5cd109493cb4ad2ecc2634_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_104f1eacadb38bd904b7376d99e197b6c30d52126f52ad96b82f43eaf5d2b26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104f1eacadb38bd904b7376d99e197b6c30d52126f52ad96b82f43eaf5d2b26b->enter($__internal_104f1eacadb38bd904b7376d99e197b6c30d52126f52ad96b82f43eaf5d2b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_163dd9b5d072772d1a931957c250b259a5d26d7813ec37c7363897988a3325ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163dd9b5d072772d1a931957c250b259a5d26d7813ec37c7363897988a3325ca->enter($__internal_163dd9b5d072772d1a931957c250b259a5d26d7813ec37c7363897988a3325ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Kaduna Polytechnic
            ";
        
        $__internal_163dd9b5d072772d1a931957c250b259a5d26d7813ec37c7363897988a3325ca->leave($__internal_163dd9b5d072772d1a931957c250b259a5d26d7813ec37c7363897988a3325ca_prof);

        
        $__internal_104f1eacadb38bd904b7376d99e197b6c30d52126f52ad96b82f43eaf5d2b26b->leave($__internal_104f1eacadb38bd904b7376d99e197b6c30d52126f52ad96b82f43eaf5d2b26b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62a5e9f35752701d2944225c13ecd1eb52d75d864de55107f32e4d12799abd24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a5e9f35752701d2944225c13ecd1eb52d75d864de55107f32e4d12799abd24->enter($__internal_62a5e9f35752701d2944225c13ecd1eb52d75d864de55107f32e4d12799abd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ccfb48a904026892d491e2bae1962592a3c28e135d5f685bc43c697e002cd9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfb48a904026892d491e2bae1962592a3c28e135d5f685bc43c697e002cd9d3->enter($__internal_ccfb48a904026892d491e2bae1962592a3c28e135d5f685bc43c697e002cd9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ccfb48a904026892d491e2bae1962592a3c28e135d5f685bc43c697e002cd9d3->leave($__internal_ccfb48a904026892d491e2bae1962592a3c28e135d5f685bc43c697e002cd9d3_prof);

        
        $__internal_62a5e9f35752701d2944225c13ecd1eb52d75d864de55107f32e4d12799abd24->leave($__internal_62a5e9f35752701d2944225c13ecd1eb52d75d864de55107f32e4d12799abd24_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_9f3b640fb7837b6ed613f52f9d90d1d7286da307014020c15db867be163d6fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3b640fb7837b6ed613f52f9d90d1d7286da307014020c15db867be163d6fb0->enter($__internal_9f3b640fb7837b6ed613f52f9d90d1d7286da307014020c15db867be163d6fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5f266ba00aafe85db688307495a60d9fbba48b3f7917d22a9f5ca4583ba2359a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f266ba00aafe85db688307495a60d9fbba48b3f7917d22a9f5ca4583ba2359a->enter($__internal_5f266ba00aafe85db688307495a60d9fbba48b3f7917d22a9f5ca4583ba2359a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 63
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "                            
                        ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "                    </div>
                </div>
            ";
        
        $__internal_5f266ba00aafe85db688307495a60d9fbba48b3f7917d22a9f5ca4583ba2359a->leave($__internal_5f266ba00aafe85db688307495a60d9fbba48b3f7917d22a9f5ca4583ba2359a_prof);

        
        $__internal_9f3b640fb7837b6ed613f52f9d90d1d7286da307014020c15db867be163d6fb0->leave($__internal_9f3b640fb7837b6ed613f52f9d90d1d7286da307014020c15db867be163d6fb0_prof);

    }

    // line 30
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ab78c6a3b85d430376249674fdebe7e23367025ad9f724b1b6e015666c179cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab78c6a3b85d430376249674fdebe7e23367025ad9f724b1b6e015666c179cb6->enter($__internal_ab78c6a3b85d430376249674fdebe7e23367025ad9f724b1b6e015666c179cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_80dcd9f2b668116b071f9f55748b0790d5106f888c7933a81758d3564bae45e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dcd9f2b668116b071f9f55748b0790d5106f888c7933a81758d3564bae45e7->enter($__internal_80dcd9f2b668116b071f9f55748b0790d5106f888c7933a81758d3564bae45e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("studentPage");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                                <li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "logout\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Logout</a></li>
                                                <li role=\"presentation\" class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                                    Application <span class=\"caret\"></span>
                                                </a>
                                                    <ul class=\"dropdown-menu nav\">
                                                        <li role=\"presentation\"><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("continueReg");
        echo "\"><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Continue Application</a></li>
                                                        <li role=\"presentation\"><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editLog");
        echo "\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Edit Application</a></li>
                                                        <li role=\"presentation\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addStatus");
        echo "\"><span class=\"glyphicon glyphicon-tasks\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Check Admission Status</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            ";
        
        $__internal_80dcd9f2b668116b071f9f55748b0790d5106f888c7933a81758d3564bae45e7->leave($__internal_80dcd9f2b668116b071f9f55748b0790d5106f888c7933a81758d3564bae45e7_prof);

        
        $__internal_ab78c6a3b85d430376249674fdebe7e23367025ad9f724b1b6e015666c179cb6->leave($__internal_ab78c6a3b85d430376249674fdebe7e23367025ad9f724b1b6e015666c179cb6_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_56aeb2ffe84061d07beacd77b2b5bdf0d659c6ef8637259e7a2c24ca618fa668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56aeb2ffe84061d07beacd77b2b5bdf0d659c6ef8637259e7a2c24ca618fa668->enter($__internal_56aeb2ffe84061d07beacd77b2b5bdf0d659c6ef8637259e7a2c24ca618fa668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_878644dc6c0c9f7e76cd328f3c87eea347f131fb2d0f8f1c8949edd11fc84e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878644dc6c0c9f7e76cd328f3c87eea347f131fb2d0f8f1c8949edd11fc84e78->enter($__internal_878644dc6c0c9f7e76cd328f3c87eea347f131fb2d0f8f1c8949edd11fc84e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_878644dc6c0c9f7e76cd328f3c87eea347f131fb2d0f8f1c8949edd11fc84e78->leave($__internal_878644dc6c0c9f7e76cd328f3c87eea347f131fb2d0f8f1c8949edd11fc84e78_prof);

        
        $__internal_56aeb2ffe84061d07beacd77b2b5bdf0d659c6ef8637259e7a2c24ca618fa668->leave($__internal_56aeb2ffe84061d07beacd77b2b5bdf0d659c6ef8637259e7a2c24ca618fa668_prof);

    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e4eb708541d19746c93f7e8084b0e3a6e7e727ce2068c0dfdd44253403be6356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4eb708541d19746c93f7e8084b0e3a6e7e727ce2068c0dfdd44253403be6356->enter($__internal_e4eb708541d19746c93f7e8084b0e3a6e7e727ce2068c0dfdd44253403be6356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fb316aee8eb0423367dbc7911eb8f237eb7ab9ed088a1eff679b55e8274678ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb316aee8eb0423367dbc7911eb8f237eb7ab9ed088a1eff679b55e8274678ad->enter($__internal_fb316aee8eb0423367dbc7911eb8f237eb7ab9ed088a1eff679b55e8274678ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 66
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
                                    <hr style=\"border: solid green 1px; margin-top: 0px\">
                                </div> 
                            </div>
                        ";
        
        $__internal_fb316aee8eb0423367dbc7911eb8f237eb7ab9ed088a1eff679b55e8274678ad->leave($__internal_fb316aee8eb0423367dbc7911eb8f237eb7ab9ed088a1eff679b55e8274678ad_prof);

        
        $__internal_e4eb708541d19746c93f7e8084b0e3a6e7e727ce2068c0dfdd44253403be6356->leave($__internal_e4eb708541d19746c93f7e8084b0e3a6e7e727ce2068c0dfdd44253403be6356_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4761093cee1910f0835578316cef9ce9f3cdb034e9d4cdfdbc58792c85d20ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4761093cee1910f0835578316cef9ce9f3cdb034e9d4cdfdbc58792c85d20ae->enter($__internal_e4761093cee1910f0835578316cef9ce9f3cdb034e9d4cdfdbc58792c85d20ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aa08971d313aa4b63fc1f0943d902d2976823c9f9dec3718dc14fdffa1d86113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa08971d313aa4b63fc1f0943d902d2976823c9f9dec3718dc14fdffa1d86113->enter($__internal_aa08971d313aa4b63fc1f0943d902d2976823c9f9dec3718dc14fdffa1d86113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 103
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
        
        $__internal_aa08971d313aa4b63fc1f0943d902d2976823c9f9dec3718dc14fdffa1d86113->leave($__internal_aa08971d313aa4b63fc1f0943d902d2976823c9f9dec3718dc14fdffa1d86113_prof);

        
        $__internal_e4761093cee1910f0835578316cef9ce9f3cdb034e9d4cdfdbc58792c85d20ae->leave($__internal_e4761093cee1910f0835578316cef9ce9f3cdb034e9d4cdfdbc58792c85d20ae_prof);

    }

    public function getTemplateName()
    {
        return "ubase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 103,  309 => 102,  300 => 101,  259 => 66,  250 => 65,  233 => 63,  215 => 55,  211 => 54,  207 => 53,  197 => 46,  193 => 45,  177 => 31,  168 => 30,  156 => 98,  154 => 65,  151 => 64,  148 => 63,  146 => 30,  142 => 29,  138 => 27,  129 => 26,  117 => 20,  107 => 13,  103 => 11,  94 => 10,  83 => 7,  74 => 6,  61 => 117,  59 => 101,  56 => 100,  54 => 26,  46 => 22,  44 => 10,  41 => 9,  39 => 6,  32 => 1,);
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
                                                <li role=\"presentation\"><a href=\"{{ url('studentPage') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                                <li role=\"presentation\"><a href=\"{{ url(\"homepage\") }}logout\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Logout</a></li>
                                                <li role=\"presentation\" class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                                    Application <span class=\"caret\"></span>
                                                </a>
                                                    <ul class=\"dropdown-menu nav\">
                                                        <li role=\"presentation\"><a href=\"{{ url(\"continueReg\") }}\"><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Continue Application</a></li>
                                                        <li role=\"presentation\"><a href=\"{{ url(\"editLog\") }}\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Edit Application</a></li>
                                                        <li role=\"presentation\"><a href=\"{{ url(\"addStatus\") }}\"><span class=\"glyphicon glyphicon-tasks\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Check Admission Status</a></li>
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
", "ubase.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\ubase.html.twig");
    }
}
