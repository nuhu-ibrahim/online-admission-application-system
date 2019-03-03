<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9e5c7b3eb08186b52ed5bf85170835223603dd01b1979f782a290afa86ac32b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b410b70ac5751280ff6fa20640ed1c1ba9079bbf1092effd988e1494a9e2031f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b410b70ac5751280ff6fa20640ed1c1ba9079bbf1092effd988e1494a9e2031f->enter($__internal_b410b70ac5751280ff6fa20640ed1c1ba9079bbf1092effd988e1494a9e2031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_6160242999daac180688ab496e3843fa80fadf65d2d085ff80a147538f1fe17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6160242999daac180688ab496e3843fa80fadf65d2d085ff80a147538f1fe17e->enter($__internal_6160242999daac180688ab496e3843fa80fadf65d2d085ff80a147538f1fe17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b410b70ac5751280ff6fa20640ed1c1ba9079bbf1092effd988e1494a9e2031f->leave($__internal_b410b70ac5751280ff6fa20640ed1c1ba9079bbf1092effd988e1494a9e2031f_prof);

        
        $__internal_6160242999daac180688ab496e3843fa80fadf65d2d085ff80a147538f1fe17e->leave($__internal_6160242999daac180688ab496e3843fa80fadf65d2d085ff80a147538f1fe17e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_996d4c527ef90c7486bb9d6c4e8b1d07a0de6450a0e6a6bcf29b344027be7014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996d4c527ef90c7486bb9d6c4e8b1d07a0de6450a0e6a6bcf29b344027be7014->enter($__internal_996d4c527ef90c7486bb9d6c4e8b1d07a0de6450a0e6a6bcf29b344027be7014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_036ae1df758d0141e2b63c7287ae84b4b8b10b0b90dcd0da1d0d0970f85d3225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036ae1df758d0141e2b63c7287ae84b4b8b10b0b90dcd0da1d0d0970f85d3225->enter($__internal_036ae1df758d0141e2b63c7287ae84b4b8b10b0b90dcd0da1d0d0970f85d3225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_036ae1df758d0141e2b63c7287ae84b4b8b10b0b90dcd0da1d0d0970f85d3225->leave($__internal_036ae1df758d0141e2b63c7287ae84b4b8b10b0b90dcd0da1d0d0970f85d3225_prof);

        
        $__internal_996d4c527ef90c7486bb9d6c4e8b1d07a0de6450a0e6a6bcf29b344027be7014->leave($__internal_996d4c527ef90c7486bb9d6c4e8b1d07a0de6450a0e6a6bcf29b344027be7014_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d596c00eb7ff7da81ce8248db426427b47428e2e5169a4796dda949fa4ef3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d596c00eb7ff7da81ce8248db426427b47428e2e5169a4796dda949fa4ef3e5->enter($__internal_7d596c00eb7ff7da81ce8248db426427b47428e2e5169a4796dda949fa4ef3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fb2fca78d6a476791546d5fa76616aa77f37b1d155f7bb43d95e08cb12eefe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb2fca78d6a476791546d5fa76616aa77f37b1d155f7bb43d95e08cb12eefe9->enter($__internal_5fb2fca78d6a476791546d5fa76616aa77f37b1d155f7bb43d95e08cb12eefe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5fb2fca78d6a476791546d5fa76616aa77f37b1d155f7bb43d95e08cb12eefe9->leave($__internal_5fb2fca78d6a476791546d5fa76616aa77f37b1d155f7bb43d95e08cb12eefe9_prof);

        
        $__internal_7d596c00eb7ff7da81ce8248db426427b47428e2e5169a4796dda949fa4ef3e5->leave($__internal_7d596c00eb7ff7da81ce8248db426427b47428e2e5169a4796dda949fa4ef3e5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea09b31b5d9575bf5f77c458bc1255d54dc84414797979369ecb95426a9f6287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea09b31b5d9575bf5f77c458bc1255d54dc84414797979369ecb95426a9f6287->enter($__internal_ea09b31b5d9575bf5f77c458bc1255d54dc84414797979369ecb95426a9f6287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43e79eeee3c931a2d2c0e81f8e06ec51f523f272699f95246457eea7aeddd886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e79eeee3c931a2d2c0e81f8e06ec51f523f272699f95246457eea7aeddd886->enter($__internal_43e79eeee3c931a2d2c0e81f8e06ec51f523f272699f95246457eea7aeddd886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_43e79eeee3c931a2d2c0e81f8e06ec51f523f272699f95246457eea7aeddd886->leave($__internal_43e79eeee3c931a2d2c0e81f8e06ec51f523f272699f95246457eea7aeddd886_prof);

        
        $__internal_ea09b31b5d9575bf5f77c458bc1255d54dc84414797979369ecb95426a9f6287->leave($__internal_ea09b31b5d9575bf5f77c458bc1255d54dc84414797979369ecb95426a9f6287_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
