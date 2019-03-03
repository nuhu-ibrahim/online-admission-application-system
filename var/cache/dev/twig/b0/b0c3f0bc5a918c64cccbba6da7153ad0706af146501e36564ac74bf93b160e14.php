<?php

/* ::base.html.twig */
class __TwigTemplate_e72fb4c4de284d963648637b1f2698d150f97de027a39b0ee8271f5d22b17973 extends Twig_Template
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
        $__internal_6839c4dd43a2a79d606be0edffadd2b3dc9c1d3174396c07ce182db7f2373472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6839c4dd43a2a79d606be0edffadd2b3dc9c1d3174396c07ce182db7f2373472->enter($__internal_6839c4dd43a2a79d606be0edffadd2b3dc9c1d3174396c07ce182db7f2373472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_86fc40f56268acbd65f886f7aec4f1a6e92ddd79523efc8465006b1c7a9c8406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fc40f56268acbd65f886f7aec4f1a6e92ddd79523efc8465006b1c7a9c8406->enter($__internal_86fc40f56268acbd65f886f7aec4f1a6e92ddd79523efc8465006b1c7a9c8406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 91
        echo "   
            ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "        </div>
    </body>
</html>
";
        
        $__internal_6839c4dd43a2a79d606be0edffadd2b3dc9c1d3174396c07ce182db7f2373472->leave($__internal_6839c4dd43a2a79d606be0edffadd2b3dc9c1d3174396c07ce182db7f2373472_prof);

        
        $__internal_86fc40f56268acbd65f886f7aec4f1a6e92ddd79523efc8465006b1c7a9c8406->leave($__internal_86fc40f56268acbd65f886f7aec4f1a6e92ddd79523efc8465006b1c7a9c8406_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0bd90dc718824d4bc804c3407ed35e5166306d3cd630e25da477b2afff676d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bd90dc718824d4bc804c3407ed35e5166306d3cd630e25da477b2afff676d9->enter($__internal_d0bd90dc718824d4bc804c3407ed35e5166306d3cd630e25da477b2afff676d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f371d9a6bb3dfc76e521e65b998aae154fc0fa4ecedc4a969e80ebd83e5ce2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f371d9a6bb3dfc76e521e65b998aae154fc0fa4ecedc4a969e80ebd83e5ce2f5->enter($__internal_f371d9a6bb3dfc76e521e65b998aae154fc0fa4ecedc4a969e80ebd83e5ce2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Kaduna Polytechnic
            ";
        
        $__internal_f371d9a6bb3dfc76e521e65b998aae154fc0fa4ecedc4a969e80ebd83e5ce2f5->leave($__internal_f371d9a6bb3dfc76e521e65b998aae154fc0fa4ecedc4a969e80ebd83e5ce2f5_prof);

        
        $__internal_d0bd90dc718824d4bc804c3407ed35e5166306d3cd630e25da477b2afff676d9->leave($__internal_d0bd90dc718824d4bc804c3407ed35e5166306d3cd630e25da477b2afff676d9_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67879b14dc04f26bdbfaee7764a92aafe89251ecca8deb197c357f0362691793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67879b14dc04f26bdbfaee7764a92aafe89251ecca8deb197c357f0362691793->enter($__internal_67879b14dc04f26bdbfaee7764a92aafe89251ecca8deb197c357f0362691793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7ff5573441cbffafd1ad70cc57a928ec22fc57394a38e9094f070de4b4f9095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ff5573441cbffafd1ad70cc57a928ec22fc57394a38e9094f070de4b4f9095->enter($__internal_b7ff5573441cbffafd1ad70cc57a928ec22fc57394a38e9094f070de4b4f9095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b7ff5573441cbffafd1ad70cc57a928ec22fc57394a38e9094f070de4b4f9095->leave($__internal_b7ff5573441cbffafd1ad70cc57a928ec22fc57394a38e9094f070de4b4f9095_prof);

        
        $__internal_67879b14dc04f26bdbfaee7764a92aafe89251ecca8deb197c357f0362691793->leave($__internal_67879b14dc04f26bdbfaee7764a92aafe89251ecca8deb197c357f0362691793_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_233fb9d9d52ad910564b66b47a38417e0abdb57a9ae486ae5ae15cebe8dbdd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233fb9d9d52ad910564b66b47a38417e0abdb57a9ae486ae5ae15cebe8dbdd55->enter($__internal_233fb9d9d52ad910564b66b47a38417e0abdb57a9ae486ae5ae15cebe8dbdd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_dfff6501e1197a1ea26c6dbf3f093f4b163bd938884d518f835adadd3918c4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfff6501e1197a1ea26c6dbf3f093f4b163bd938884d518f835adadd3918c4be->enter($__internal_dfff6501e1197a1ea26c6dbf3f093f4b163bd938884d518f835adadd3918c4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 52
        echo "                        </div>
                        
                        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "                            
                        ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "                    </div>
                </div>
            ";
        
        $__internal_dfff6501e1197a1ea26c6dbf3f093f4b163bd938884d518f835adadd3918c4be->leave($__internal_dfff6501e1197a1ea26c6dbf3f093f4b163bd938884d518f835adadd3918c4be_prof);

        
        $__internal_233fb9d9d52ad910564b66b47a38417e0abdb57a9ae486ae5ae15cebe8dbdd55->leave($__internal_233fb9d9d52ad910564b66b47a38417e0abdb57a9ae486ae5ae15cebe8dbdd55_prof);

    }

    // line 33
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ccecbb2219634f6216034a253ec149b7d1f6c7efa6346191fb35ced7d4b40fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccecbb2219634f6216034a253ec149b7d1f6c7efa6346191fb35ced7d4b40fa7->enter($__internal_ccecbb2219634f6216034a253ec149b7d1f6c7efa6346191fb35ced7d4b40fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_a8dc7d27219519522d948c2f9febe4ad21fdb2ae3d728d8caf5e893d55b80f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dc7d27219519522d948c2f9febe4ad21fdb2ae3d728d8caf5e893d55b80f0c->enter($__internal_a8dc7d27219519522d948c2f9febe4ad21fdb2ae3d728d8caf5e893d55b80f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 34
        echo "                                <ul class=\"nav nav-tabs mynav\">
                                    <li role=\"presentation\"><a target='_blank' href=\"https://www.kadunapolytechnic.edu.ng\">Polytechnic Home</a></li>
                                    <li role=\"presentation\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "\">Home</a></li>
                                    <li role=\"presentation\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("adminPage");
        echo "\">Admin</a></li>
                                    <li role=\"presentation\" class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Application <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li role=\"presentation\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("startReg");
        echo "\">Start Application</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("continueReg");
        echo "\">Continue Application</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editLog");
        echo "\">Edit Application</a></li>
                                        <li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addStatus");
        echo "\">Check Admission Status</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                <br/>
                            ";
        
        $__internal_a8dc7d27219519522d948c2f9febe4ad21fdb2ae3d728d8caf5e893d55b80f0c->leave($__internal_a8dc7d27219519522d948c2f9febe4ad21fdb2ae3d728d8caf5e893d55b80f0c_prof);

        
        $__internal_ccecbb2219634f6216034a253ec149b7d1f6c7efa6346191fb35ced7d4b40fa7->leave($__internal_ccecbb2219634f6216034a253ec149b7d1f6c7efa6346191fb35ced7d4b40fa7_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa486be47e29245cdff49187b47082ac7118579bd276993fd7688424354bdded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa486be47e29245cdff49187b47082ac7118579bd276993fd7688424354bdded->enter($__internal_fa486be47e29245cdff49187b47082ac7118579bd276993fd7688424354bdded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_651c0f59bb3afcdf1b8bf5624a5ebbb586e2c53aaf3665a6a98c64ac0a5ac578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651c0f59bb3afcdf1b8bf5624a5ebbb586e2c53aaf3665a6a98c64ac0a5ac578->enter($__internal_651c0f59bb3afcdf1b8bf5624a5ebbb586e2c53aaf3665a6a98c64ac0a5ac578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_651c0f59bb3afcdf1b8bf5624a5ebbb586e2c53aaf3665a6a98c64ac0a5ac578->leave($__internal_651c0f59bb3afcdf1b8bf5624a5ebbb586e2c53aaf3665a6a98c64ac0a5ac578_prof);

        
        $__internal_fa486be47e29245cdff49187b47082ac7118579bd276993fd7688424354bdded->leave($__internal_fa486be47e29245cdff49187b47082ac7118579bd276993fd7688424354bdded_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8a3833a8962dfe9fce0a608fb4144ad505a95d76da02203eb612c2897253fa42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3833a8962dfe9fce0a608fb4144ad505a95d76da02203eb612c2897253fa42->enter($__internal_8a3833a8962dfe9fce0a608fb4144ad505a95d76da02203eb612c2897253fa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_519d4087d5f8d7a1a8a2b8fb5109f2b06b8a79bc562dc02b2d780b62b2da6ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519d4087d5f8d7a1a8a2b8fb5109f2b06b8a79bc562dc02b2d780b62b2da6ca8->enter($__internal_519d4087d5f8d7a1a8a2b8fb5109f2b06b8a79bc562dc02b2d780b62b2da6ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
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
        
        $__internal_519d4087d5f8d7a1a8a2b8fb5109f2b06b8a79bc562dc02b2d780b62b2da6ca8->leave($__internal_519d4087d5f8d7a1a8a2b8fb5109f2b06b8a79bc562dc02b2d780b62b2da6ca8_prof);

        
        $__internal_8a3833a8962dfe9fce0a608fb4144ad505a95d76da02203eb612c2897253fa42->leave($__internal_8a3833a8962dfe9fce0a608fb4144ad505a95d76da02203eb612c2897253fa42_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3eb023c358a466e4d28aab8bb83b5f3a472440049d5ff7cb85de412cb221e414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb023c358a466e4d28aab8bb83b5f3a472440049d5ff7cb85de412cb221e414->enter($__internal_3eb023c358a466e4d28aab8bb83b5f3a472440049d5ff7cb85de412cb221e414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8a4e9008685047f52ffab387628e6e77c83bdb0f388b5c4a7dd552bb10864c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4e9008685047f52ffab387628e6e77c83bdb0f388b5c4a7dd552bb10864c12->enter($__internal_8a4e9008685047f52ffab387628e6e77c83bdb0f388b5c4a7dd552bb10864c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
                    \$('dropdown-toggle').dropdown();
                </script>
            ";
        
        $__internal_8a4e9008685047f52ffab387628e6e77c83bdb0f388b5c4a7dd552bb10864c12->leave($__internal_8a4e9008685047f52ffab387628e6e77c83bdb0f388b5c4a7dd552bb10864c12_prof);

        
        $__internal_3eb023c358a466e4d28aab8bb83b5f3a472440049d5ff7cb85de412cb221e414->leave($__internal_3eb023c358a466e4d28aab8bb83b5f3a472440049d5ff7cb85de412cb221e414_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 94,  304 => 93,  295 => 92,  254 => 57,  245 => 56,  228 => 54,  212 => 46,  208 => 45,  204 => 44,  200 => 43,  191 => 37,  187 => 36,  183 => 34,  174 => 33,  162 => 89,  160 => 56,  157 => 55,  155 => 54,  151 => 52,  149 => 33,  142 => 29,  138 => 27,  129 => 26,  117 => 20,  107 => 13,  103 => 11,  94 => 10,  83 => 7,  74 => 6,  61 => 99,  59 => 92,  56 => 91,  54 => 26,  46 => 22,  44 => 10,  41 => 9,  39 => 6,  32 => 1,);
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
                                    <li role=\"presentation\"><a href=\"{{ url('homepage') }}\">Home</a></li>
                                    <li role=\"presentation\"><a href=\"{{ url(\"adminPage\") }}\">Admin</a></li>
                                    <li role=\"presentation\" class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Application <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li role=\"presentation\"><a href=\"{{ url(\"startReg\") }}\">Start Application</a></li>
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
", "::base.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app/Resources\\views/base.html.twig");
    }
}
