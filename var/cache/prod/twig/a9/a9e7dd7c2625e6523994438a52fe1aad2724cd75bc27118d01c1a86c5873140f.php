<?php

/* ::abase.html.twig */
class __TwigTemplate_372d07f75dea250fa152e52d439dcfb11d5c6b93dbcf634fc07803562d0408a1 extends Twig_Template
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
        // line 93
        echo "   
            ";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                Kaduna Polytechnic
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\" style=\"border-color: #AAA; margin-top:20px; border-style:solid; border-radius:10px; box-shadow:0px 0px 1em #888;padding-top:20px;\">
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icon.jpg"), "html", null, true);
        echo "\" width=\"100%\" class=\"img-responsive\" alt=\"Responsive image\" />
                        
                        <div class=\"col-md-12\">
                            <br/>
                            ";
        // line 33
        $this->displayBlock('nav', $context, $blocks);
        // line 54
        echo "                        </div>
                        
                        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "                            
                        ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "                    </div>
                </div>
            ";
    }

    // line 33
    public function block_nav($context, array $blocks = array())
    {
        // line 34
        echo "                                <ul class=\"nav nav-tabs mynav\">
                                    <li role=\"presentation\"><a target='_blank' href=\"https://www.kadunapolytechnic.edu.ng\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Polytechnic Home</a></li>
                                    <li role=\"presentation\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("adminPage");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Home</a></li>
                                    <li role=\"presentation\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "logout\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"><span style='visibility:hidden;'>i</span></span>Logout</a></li>
                                    <li role=\"presentation\" class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>
                                        Admin Roles <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li role=\"presentation\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("activate");
        echo "\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Activate Student Payment</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploadlist");
        echo "\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Upload Admission List</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("viewapp");
        echo "\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>View Applicants</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("download");
        echo "\"><span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Download Applications</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("studentinfo");
        echo "\"><span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>View Applicant's Details</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                <br/>
                            ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
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
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 96
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
        return array (  224 => 96,  219 => 95,  216 => 94,  181 => 59,  178 => 58,  173 => 56,  163 => 48,  159 => 47,  155 => 46,  151 => 45,  147 => 44,  137 => 37,  133 => 36,  129 => 34,  126 => 33,  120 => 91,  118 => 58,  115 => 57,  113 => 56,  109 => 54,  107 => 33,  100 => 29,  96 => 27,  93 => 26,  87 => 20,  77 => 13,  73 => 11,  70 => 10,  65 => 7,  62 => 6,  55 => 110,  53 => 94,  50 => 93,  48 => 26,  40 => 22,  38 => 10,  35 => 9,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::abase.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/abase.html.twig");
    }
}
