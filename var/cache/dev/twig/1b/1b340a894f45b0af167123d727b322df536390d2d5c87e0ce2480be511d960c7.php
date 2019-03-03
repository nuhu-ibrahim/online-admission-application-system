<?php

/* ::ubase.html.twig */
class __TwigTemplate_b238217e8f0dfc82249fbfc2cd2a0485c6152a46a83badc69dfe8c3321b74c6d extends Twig_Template
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
        $__internal_dd4684cdffe0340f3b8c76e0db802cb9e2db6c11349a5c197c309f86d95b76a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4684cdffe0340f3b8c76e0db802cb9e2db6c11349a5c197c309f86d95b76a7->enter($__internal_dd4684cdffe0340f3b8c76e0db802cb9e2db6c11349a5c197c309f86d95b76a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ubase.html.twig"));

        $__internal_3e744398683ae435dfea6cf3d9d671f8415c9d0475992a726645e9db3fbfc857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e744398683ae435dfea6cf3d9d671f8415c9d0475992a726645e9db3fbfc857->enter($__internal_3e744398683ae435dfea6cf3d9d671f8415c9d0475992a726645e9db3fbfc857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ubase.html.twig"));

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
        // line 90
        echo "   
            ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "        </div>
    </body>
</html>
";
        
        $__internal_dd4684cdffe0340f3b8c76e0db802cb9e2db6c11349a5c197c309f86d95b76a7->leave($__internal_dd4684cdffe0340f3b8c76e0db802cb9e2db6c11349a5c197c309f86d95b76a7_prof);

        
        $__internal_3e744398683ae435dfea6cf3d9d671f8415c9d0475992a726645e9db3fbfc857->leave($__internal_3e744398683ae435dfea6cf3d9d671f8415c9d0475992a726645e9db3fbfc857_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_47fda77a9e25c83fb5e32af5fe2e02cd23fbdb650827c8d1c1b91308db37641a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fda77a9e25c83fb5e32af5fe2e02cd23fbdb650827c8d1c1b91308db37641a->enter($__internal_47fda77a9e25c83fb5e32af5fe2e02cd23fbdb650827c8d1c1b91308db37641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef15fc25289387d0c0e31459e725d37493290d04590955afbd7e118385af60bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef15fc25289387d0c0e31459e725d37493290d04590955afbd7e118385af60bb->enter($__internal_ef15fc25289387d0c0e31459e725d37493290d04590955afbd7e118385af60bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Kaduna Polytechnic
            ";
        
        $__internal_ef15fc25289387d0c0e31459e725d37493290d04590955afbd7e118385af60bb->leave($__internal_ef15fc25289387d0c0e31459e725d37493290d04590955afbd7e118385af60bb_prof);

        
        $__internal_47fda77a9e25c83fb5e32af5fe2e02cd23fbdb650827c8d1c1b91308db37641a->leave($__internal_47fda77a9e25c83fb5e32af5fe2e02cd23fbdb650827c8d1c1b91308db37641a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a5693253abcfeaf8ea9853f6a864f737dae3d6c0c079a84d52c4ce51263b746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5693253abcfeaf8ea9853f6a864f737dae3d6c0c079a84d52c4ce51263b746->enter($__internal_3a5693253abcfeaf8ea9853f6a864f737dae3d6c0c079a84d52c4ce51263b746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_20a8bbff850ec7f188a3c38ccd1ca80f0316fc8353a960ef4e093f772c51ba14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a8bbff850ec7f188a3c38ccd1ca80f0316fc8353a960ef4e093f772c51ba14->enter($__internal_20a8bbff850ec7f188a3c38ccd1ca80f0316fc8353a960ef4e093f772c51ba14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_20a8bbff850ec7f188a3c38ccd1ca80f0316fc8353a960ef4e093f772c51ba14->leave($__internal_20a8bbff850ec7f188a3c38ccd1ca80f0316fc8353a960ef4e093f772c51ba14_prof);

        
        $__internal_3a5693253abcfeaf8ea9853f6a864f737dae3d6c0c079a84d52c4ce51263b746->leave($__internal_3a5693253abcfeaf8ea9853f6a864f737dae3d6c0c079a84d52c4ce51263b746_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_e43453da06b349a0cf08fe8c33d2bd2269b76e9fbc09d3c854cb22faf592f834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43453da06b349a0cf08fe8c33d2bd2269b76e9fbc09d3c854cb22faf592f834->enter($__internal_e43453da06b349a0cf08fe8c33d2bd2269b76e9fbc09d3c854cb22faf592f834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c181e25c76136dd10521148df90d71dd54e1da8358f54fa51c33de92d5a69c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c181e25c76136dd10521148df90d71dd54e1da8358f54fa51c33de92d5a69c7f->enter($__internal_c181e25c76136dd10521148df90d71dd54e1da8358f54fa51c33de92d5a69c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 51
        echo "                        </div>
                        
                        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "                            
                        ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "                    </div>
                </div>
            ";
        
        $__internal_c181e25c76136dd10521148df90d71dd54e1da8358f54fa51c33de92d5a69c7f->leave($__internal_c181e25c76136dd10521148df90d71dd54e1da8358f54fa51c33de92d5a69c7f_prof);

        
        $__internal_e43453da06b349a0cf08fe8c33d2bd2269b76e9fbc09d3c854cb22faf592f834->leave($__internal_e43453da06b349a0cf08fe8c33d2bd2269b76e9fbc09d3c854cb22faf592f834_prof);

    }

    // line 33
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c0f0a828520d0150124e177ba231052a73b0ccc3720cb5ebed3db7e9e188a573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f0a828520d0150124e177ba231052a73b0ccc3720cb5ebed3db7e9e188a573->enter($__internal_c0f0a828520d0150124e177ba231052a73b0ccc3720cb5ebed3db7e9e188a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_7590bdbf53686e39088c0f927ff92c0a328a223f3461e716a50edcb8019e79b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7590bdbf53686e39088c0f927ff92c0a328a223f3461e716a50edcb8019e79b4->enter($__internal_7590bdbf53686e39088c0f927ff92c0a328a223f3461e716a50edcb8019e79b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 34
        echo "                                <ul class=\"nav nav-tabs mynav\">
                                    <li role=\"presentation\"><a target='_blank' href=\"https://www.kadunapolytechnic.edu.ng\">Polytechnic Home</a></li>
                                    <li role=\"presentation\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("studentPage");
        echo "\">Home</a></li>
                                    <li role=\"presentation\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "logout\">Logout</a></li>
                                    <li role=\"presentation\" class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Application <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li role=\"presentation\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("continueReg");
        echo "\">Continue Application</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editLog");
        echo "\">Edit Application</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addStatus");
        echo "\">Check Admission Status</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                <br/>
                            ";
        
        $__internal_7590bdbf53686e39088c0f927ff92c0a328a223f3461e716a50edcb8019e79b4->leave($__internal_7590bdbf53686e39088c0f927ff92c0a328a223f3461e716a50edcb8019e79b4_prof);

        
        $__internal_c0f0a828520d0150124e177ba231052a73b0ccc3720cb5ebed3db7e9e188a573->leave($__internal_c0f0a828520d0150124e177ba231052a73b0ccc3720cb5ebed3db7e9e188a573_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_12573bb61bf7f27ad888b201da81d09b3358c6e1cb40ef5d1be2854c22822e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12573bb61bf7f27ad888b201da81d09b3358c6e1cb40ef5d1be2854c22822e93->enter($__internal_12573bb61bf7f27ad888b201da81d09b3358c6e1cb40ef5d1be2854c22822e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8321db7454fa6e45f52a3422adb7e3b600212ebb452adc03d22c7b89c2f7f62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8321db7454fa6e45f52a3422adb7e3b600212ebb452adc03d22c7b89c2f7f62f->enter($__internal_8321db7454fa6e45f52a3422adb7e3b600212ebb452adc03d22c7b89c2f7f62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8321db7454fa6e45f52a3422adb7e3b600212ebb452adc03d22c7b89c2f7f62f->leave($__internal_8321db7454fa6e45f52a3422adb7e3b600212ebb452adc03d22c7b89c2f7f62f_prof);

        
        $__internal_12573bb61bf7f27ad888b201da81d09b3358c6e1cb40ef5d1be2854c22822e93->leave($__internal_12573bb61bf7f27ad888b201da81d09b3358c6e1cb40ef5d1be2854c22822e93_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5b23f1ff525c8db9058d5200ea53ae3f26f0301e01c420c3a328b7571d95e475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b23f1ff525c8db9058d5200ea53ae3f26f0301e01c420c3a328b7571d95e475->enter($__internal_5b23f1ff525c8db9058d5200ea53ae3f26f0301e01c420c3a328b7571d95e475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_095a1dffab666e5f238e5a554c843bfc44ac505066ce9e05621b53806a8a2835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095a1dffab666e5f238e5a554c843bfc44ac505066ce9e05621b53806a8a2835->enter($__internal_095a1dffab666e5f238e5a554c843bfc44ac505066ce9e05621b53806a8a2835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
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
        
        $__internal_095a1dffab666e5f238e5a554c843bfc44ac505066ce9e05621b53806a8a2835->leave($__internal_095a1dffab666e5f238e5a554c843bfc44ac505066ce9e05621b53806a8a2835_prof);

        
        $__internal_5b23f1ff525c8db9058d5200ea53ae3f26f0301e01c420c3a328b7571d95e475->leave($__internal_5b23f1ff525c8db9058d5200ea53ae3f26f0301e01c420c3a328b7571d95e475_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efe8231db68aafaf4d3e9a3d8ba665158893cbb935ead384f936b803a2155b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe8231db68aafaf4d3e9a3d8ba665158893cbb935ead384f936b803a2155b35->enter($__internal_efe8231db68aafaf4d3e9a3d8ba665158893cbb935ead384f936b803a2155b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_580be4482201f540d9e21369d3dfe39719ee7b4857d477cded3aea24e4d45528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580be4482201f540d9e21369d3dfe39719ee7b4857d477cded3aea24e4d45528->enter($__internal_580be4482201f540d9e21369d3dfe39719ee7b4857d477cded3aea24e4d45528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
                    \$('dropdown-toggle').dropdown();
                </script>
            ";
        
        $__internal_580be4482201f540d9e21369d3dfe39719ee7b4857d477cded3aea24e4d45528->leave($__internal_580be4482201f540d9e21369d3dfe39719ee7b4857d477cded3aea24e4d45528_prof);

        
        $__internal_efe8231db68aafaf4d3e9a3d8ba665158893cbb935ead384f936b803a2155b35->leave($__internal_efe8231db68aafaf4d3e9a3d8ba665158893cbb935ead384f936b803a2155b35_prof);

    }

    public function getTemplateName()
    {
        return "::ubase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 93,  300 => 92,  291 => 91,  250 => 56,  241 => 55,  224 => 53,  208 => 45,  204 => 44,  200 => 43,  191 => 37,  187 => 36,  183 => 34,  174 => 33,  162 => 88,  160 => 55,  157 => 54,  155 => 53,  151 => 51,  149 => 33,  142 => 29,  138 => 27,  129 => 26,  117 => 20,  107 => 13,  103 => 11,  94 => 10,  83 => 7,  74 => 6,  61 => 98,  59 => 91,  56 => 90,  54 => 26,  46 => 22,  44 => 10,  41 => 9,  39 => 6,  32 => 1,);
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
                                    <li role=\"presentation\"><a href=\"{{ url('studentPage') }}\">Home</a></li>
                                    <li role=\"presentation\"><a href=\"{{ url(\"homepage\") }}logout\">Logout</a></li>
                                    <li role=\"presentation\" class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Application <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li role=\"presentation\"><a href=\"{{ url(\"continueReg\") }}\">Continue Application</a></li>
                                        <li role=\"presentation\"><a href=\"{{ url(\"editLog\") }}\">Edit Application</a></li>
                                        <li role=\"presentation\"><a href=\"{{ url(\"addStatus\") }}\">Check Admission Status</a></li>
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
", "::ubase.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/ubase.html.twig");
    }
}
