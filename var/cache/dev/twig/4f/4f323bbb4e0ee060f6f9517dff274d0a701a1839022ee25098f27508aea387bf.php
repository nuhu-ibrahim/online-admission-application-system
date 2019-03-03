<?php

/* base.html.twig */
class __TwigTemplate_d729328c7e90570bce8f1b31d2d88b65b7ee333fe584c0b4c35aa3c5447c14ac extends Twig_Template
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
        $__internal_cf5ac8ce4eacbaf912eb0dcf342cb35899ea1e8920ec02a5a98f6da1c3cb5f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5ac8ce4eacbaf912eb0dcf342cb35899ea1e8920ec02a5a98f6da1c3cb5f1d->enter($__internal_cf5ac8ce4eacbaf912eb0dcf342cb35899ea1e8920ec02a5a98f6da1c3cb5f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_98d00b58e03bb8f18d3d3d602b81b0654e083e46683d4c50824b2f526d0003a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d00b58e03bb8f18d3d3d602b81b0654e083e46683d4c50824b2f526d0003a4->enter($__internal_98d00b58e03bb8f18d3d3d602b81b0654e083e46683d4c50824b2f526d0003a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 101
        echo "   
            ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "        </div>
    </body>
</html>
";
        
        $__internal_cf5ac8ce4eacbaf912eb0dcf342cb35899ea1e8920ec02a5a98f6da1c3cb5f1d->leave($__internal_cf5ac8ce4eacbaf912eb0dcf342cb35899ea1e8920ec02a5a98f6da1c3cb5f1d_prof);

        
        $__internal_98d00b58e03bb8f18d3d3d602b81b0654e083e46683d4c50824b2f526d0003a4->leave($__internal_98d00b58e03bb8f18d3d3d602b81b0654e083e46683d4c50824b2f526d0003a4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b077d96c4fee44bb2eb5be7cecf8348ef46df3976a2923155c3420459a361c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b077d96c4fee44bb2eb5be7cecf8348ef46df3976a2923155c3420459a361c4->enter($__internal_9b077d96c4fee44bb2eb5be7cecf8348ef46df3976a2923155c3420459a361c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14fe074fcd80c3baab10d8a4a0908efea6b9cb4b3eb020db0c8a6d867baf1af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fe074fcd80c3baab10d8a4a0908efea6b9cb4b3eb020db0c8a6d867baf1af2->enter($__internal_14fe074fcd80c3baab10d8a4a0908efea6b9cb4b3eb020db0c8a6d867baf1af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Kaduna Polytechnic
            ";
        
        $__internal_14fe074fcd80c3baab10d8a4a0908efea6b9cb4b3eb020db0c8a6d867baf1af2->leave($__internal_14fe074fcd80c3baab10d8a4a0908efea6b9cb4b3eb020db0c8a6d867baf1af2_prof);

        
        $__internal_9b077d96c4fee44bb2eb5be7cecf8348ef46df3976a2923155c3420459a361c4->leave($__internal_9b077d96c4fee44bb2eb5be7cecf8348ef46df3976a2923155c3420459a361c4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d49b8784e0c9e10443da6e011f8696f6f91cf009837bc450d039a94e187fdcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d49b8784e0c9e10443da6e011f8696f6f91cf009837bc450d039a94e187fdcb->enter($__internal_7d49b8784e0c9e10443da6e011f8696f6f91cf009837bc450d039a94e187fdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b0f02630be964ad6013aad77f1b2ebb006569ac5e3e25c1d370930b9c84ea05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0f02630be964ad6013aad77f1b2ebb006569ac5e3e25c1d370930b9c84ea05->enter($__internal_9b0f02630be964ad6013aad77f1b2ebb006569ac5e3e25c1d370930b9c84ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9b0f02630be964ad6013aad77f1b2ebb006569ac5e3e25c1d370930b9c84ea05->leave($__internal_9b0f02630be964ad6013aad77f1b2ebb006569ac5e3e25c1d370930b9c84ea05_prof);

        
        $__internal_7d49b8784e0c9e10443da6e011f8696f6f91cf009837bc450d039a94e187fdcb->leave($__internal_7d49b8784e0c9e10443da6e011f8696f6f91cf009837bc450d039a94e187fdcb_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_c00883dedcc51f12eea596e8cbbc1d7dee84e0f30a9048b73efd1c384213744a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00883dedcc51f12eea596e8cbbc1d7dee84e0f30a9048b73efd1c384213744a->enter($__internal_c00883dedcc51f12eea596e8cbbc1d7dee84e0f30a9048b73efd1c384213744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_daf91e901e832b4d344c24060ec704f1902ce8f1cb393ff7bd32e2666bb25d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf91e901e832b4d344c24060ec704f1902ce8f1cb393ff7bd32e2666bb25d97->enter($__internal_daf91e901e832b4d344c24060ec704f1902ce8f1cb393ff7bd32e2666bb25d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 64
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "                            
                        ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "                    </div>
                </div>
            ";
        
        $__internal_daf91e901e832b4d344c24060ec704f1902ce8f1cb393ff7bd32e2666bb25d97->leave($__internal_daf91e901e832b4d344c24060ec704f1902ce8f1cb393ff7bd32e2666bb25d97_prof);

        
        $__internal_c00883dedcc51f12eea596e8cbbc1d7dee84e0f30a9048b73efd1c384213744a->leave($__internal_c00883dedcc51f12eea596e8cbbc1d7dee84e0f30a9048b73efd1c384213744a_prof);

    }

    // line 30
    public function block_nav($context, array $blocks = array())
    {
        $__internal_63affbf59b3728ae6fab4702e478f242fb3a3f9a6ceb94e636ae6b8d6e323927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63affbf59b3728ae6fab4702e478f242fb3a3f9a6ceb94e636ae6b8d6e323927->enter($__internal_63affbf59b3728ae6fab4702e478f242fb3a3f9a6ceb94e636ae6b8d6e323927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_0b2c2a2bd12fb9eeaad15e15f39408067053cb8ee7d8beb7eb657ae06f86a976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2c2a2bd12fb9eeaad15e15f39408067053cb8ee7d8beb7eb657ae06f86a976->enter($__internal_0b2c2a2bd12fb9eeaad15e15f39408067053cb8ee7d8beb7eb657ae06f86a976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 31
        echo "                            <nav class=\"navbar navbar-inverse\" role=\"navigation\">
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                            <!--<li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("adminPage");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Admin</a></li>-->
                                            <li role=\"presentation\" class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                                Application <span class=\"caret\"></span>
                                            </a>
                                                <ul class=\"dropdown-menu nav\">
                                                    <li role=\"presentation\"><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("startReg");
        echo "\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Start Application</a></li>
                                                    <li role=\"presentation\"><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("continueReg");
        echo "\"><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Continue Application</a></li>
                                                    <li role=\"presentation\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editLog");
        echo "\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Edit Application</a></li>
                                                    <li role=\"presentation\"><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addStatus");
        echo "\"><span class=\"glyphicon glyphicon-tasks\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Check Admission Status</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        ";
        
        $__internal_0b2c2a2bd12fb9eeaad15e15f39408067053cb8ee7d8beb7eb657ae06f86a976->leave($__internal_0b2c2a2bd12fb9eeaad15e15f39408067053cb8ee7d8beb7eb657ae06f86a976_prof);

        
        $__internal_63affbf59b3728ae6fab4702e478f242fb3a3f9a6ceb94e636ae6b8d6e323927->leave($__internal_63affbf59b3728ae6fab4702e478f242fb3a3f9a6ceb94e636ae6b8d6e323927_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c19a79d7abb9d36938db7ada10cbfc41a4e64c32590e400b9027e345ea2195a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c19a79d7abb9d36938db7ada10cbfc41a4e64c32590e400b9027e345ea2195a->enter($__internal_1c19a79d7abb9d36938db7ada10cbfc41a4e64c32590e400b9027e345ea2195a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6823654ea8012e2f029233ad9857741c1926d597bf72ebd74f7d3d10b999820e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6823654ea8012e2f029233ad9857741c1926d597bf72ebd74f7d3d10b999820e->enter($__internal_6823654ea8012e2f029233ad9857741c1926d597bf72ebd74f7d3d10b999820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6823654ea8012e2f029233ad9857741c1926d597bf72ebd74f7d3d10b999820e->leave($__internal_6823654ea8012e2f029233ad9857741c1926d597bf72ebd74f7d3d10b999820e_prof);

        
        $__internal_1c19a79d7abb9d36938db7ada10cbfc41a4e64c32590e400b9027e345ea2195a->leave($__internal_1c19a79d7abb9d36938db7ada10cbfc41a4e64c32590e400b9027e345ea2195a_prof);

    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c6930ff3a5bfefa6d79b1655c20813d5f09c56c33ea5dca1ddbcb3c5bb18d633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6930ff3a5bfefa6d79b1655c20813d5f09c56c33ea5dca1ddbcb3c5bb18d633->enter($__internal_c6930ff3a5bfefa6d79b1655c20813d5f09c56c33ea5dca1ddbcb3c5bb18d633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7c1cdd9e63af8b043c149a7777f75eb5c2c5995a6e27667b22a538444bc7b4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1cdd9e63af8b043c149a7777f75eb5c2c5995a6e27667b22a538444bc7b4b6->enter($__internal_7c1cdd9e63af8b043c149a7777f75eb5c2c5995a6e27667b22a538444bc7b4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 67
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
        
        $__internal_7c1cdd9e63af8b043c149a7777f75eb5c2c5995a6e27667b22a538444bc7b4b6->leave($__internal_7c1cdd9e63af8b043c149a7777f75eb5c2c5995a6e27667b22a538444bc7b4b6_prof);

        
        $__internal_c6930ff3a5bfefa6d79b1655c20813d5f09c56c33ea5dca1ddbcb3c5bb18d633->leave($__internal_c6930ff3a5bfefa6d79b1655c20813d5f09c56c33ea5dca1ddbcb3c5bb18d633_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_785aca96bbe1c0c70ed53f9a4c3ead394dc734acc36ed74c75f0d6af3567d4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785aca96bbe1c0c70ed53f9a4c3ead394dc734acc36ed74c75f0d6af3567d4e4->enter($__internal_785aca96bbe1c0c70ed53f9a4c3ead394dc734acc36ed74c75f0d6af3567d4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2242b6cec56bf9215e112eddd7f3a67e237b18982dacd7cc041ef94537e0213c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2242b6cec56bf9215e112eddd7f3a67e237b18982dacd7cc041ef94537e0213c->enter($__internal_2242b6cec56bf9215e112eddd7f3a67e237b18982dacd7cc041ef94537e0213c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 104
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
        
        $__internal_2242b6cec56bf9215e112eddd7f3a67e237b18982dacd7cc041ef94537e0213c->leave($__internal_2242b6cec56bf9215e112eddd7f3a67e237b18982dacd7cc041ef94537e0213c_prof);

        
        $__internal_785aca96bbe1c0c70ed53f9a4c3ead394dc734acc36ed74c75f0d6af3567d4e4->leave($__internal_785aca96bbe1c0c70ed53f9a4c3ead394dc734acc36ed74c75f0d6af3567d4e4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 104,  313 => 103,  304 => 102,  263 => 67,  254 => 66,  237 => 64,  219 => 56,  215 => 55,  211 => 54,  207 => 53,  197 => 46,  193 => 45,  177 => 31,  168 => 30,  156 => 99,  154 => 66,  151 => 65,  148 => 64,  146 => 30,  142 => 29,  138 => 27,  129 => 26,  117 => 20,  107 => 13,  103 => 11,  94 => 10,  83 => 7,  74 => 6,  61 => 118,  59 => 102,  56 => 101,  54 => 26,  46 => 22,  44 => 10,  41 => 9,  39 => 6,  32 => 1,);
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
                                            <li role=\"presentation\"><a href=\"{{ url('homepage') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                            <!--<li role=\"presentation\"><a href=\"{{ url(\"adminPage\") }}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Admin</a></li>-->
                                            <li role=\"presentation\" class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                                Application <span class=\"caret\"></span>
                                            </a>
                                                <ul class=\"dropdown-menu nav\">
                                                    <li role=\"presentation\"><a href=\"{{ url(\"startReg\") }}\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Start Application</a></li>
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
", "base.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\online_admission_application\\app\\Resources\\views\\base.html.twig");
    }
}
