<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a7a85a6b3af2ad98a1319b7fdc1c78c1cc9f4e125f74d72a4495ff618d5f6811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_afa67a02155ae1daf7adef7a7ce8837e4f2c26b1646b923b4cb80922111bba75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa67a02155ae1daf7adef7a7ce8837e4f2c26b1646b923b4cb80922111bba75->enter($__internal_afa67a02155ae1daf7adef7a7ce8837e4f2c26b1646b923b4cb80922111bba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c8f673bff819ad2e7bcdb09988f3a5a452e45603730023ee68dae42bc1b3c0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f673bff819ad2e7bcdb09988f3a5a452e45603730023ee68dae42bc1b3c0c2->enter($__internal_c8f673bff819ad2e7bcdb09988f3a5a452e45603730023ee68dae42bc1b3c0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa67a02155ae1daf7adef7a7ce8837e4f2c26b1646b923b4cb80922111bba75->leave($__internal_afa67a02155ae1daf7adef7a7ce8837e4f2c26b1646b923b4cb80922111bba75_prof);

        
        $__internal_c8f673bff819ad2e7bcdb09988f3a5a452e45603730023ee68dae42bc1b3c0c2->leave($__internal_c8f673bff819ad2e7bcdb09988f3a5a452e45603730023ee68dae42bc1b3c0c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c3baea75c0a07fc683ae5e29d7b001da51b9d89c805cbf4cdefc8d8fa2afbba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3baea75c0a07fc683ae5e29d7b001da51b9d89c805cbf4cdefc8d8fa2afbba->enter($__internal_0c3baea75c0a07fc683ae5e29d7b001da51b9d89c805cbf4cdefc8d8fa2afbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_726294ea6f93d564fab92bb62264d0f4328b994a821422dfa5f1877d04ce525b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726294ea6f93d564fab92bb62264d0f4328b994a821422dfa5f1877d04ce525b->enter($__internal_726294ea6f93d564fab92bb62264d0f4328b994a821422dfa5f1877d04ce525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_726294ea6f93d564fab92bb62264d0f4328b994a821422dfa5f1877d04ce525b->leave($__internal_726294ea6f93d564fab92bb62264d0f4328b994a821422dfa5f1877d04ce525b_prof);

        
        $__internal_0c3baea75c0a07fc683ae5e29d7b001da51b9d89c805cbf4cdefc8d8fa2afbba->leave($__internal_0c3baea75c0a07fc683ae5e29d7b001da51b9d89c805cbf4cdefc8d8fa2afbba_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_342604f3ee91b3868166c3c52375032920b64821a12f094ce31e752332415572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342604f3ee91b3868166c3c52375032920b64821a12f094ce31e752332415572->enter($__internal_342604f3ee91b3868166c3c52375032920b64821a12f094ce31e752332415572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95cf61184ac2636b6600f926ad11a3aeb03c4bd9ba2b4b807c08533ede23694b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cf61184ac2636b6600f926ad11a3aeb03c4bd9ba2b4b807c08533ede23694b->enter($__internal_95cf61184ac2636b6600f926ad11a3aeb03c4bd9ba2b4b807c08533ede23694b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95cf61184ac2636b6600f926ad11a3aeb03c4bd9ba2b4b807c08533ede23694b->leave($__internal_95cf61184ac2636b6600f926ad11a3aeb03c4bd9ba2b4b807c08533ede23694b_prof);

        
        $__internal_342604f3ee91b3868166c3c52375032920b64821a12f094ce31e752332415572->leave($__internal_342604f3ee91b3868166c3c52375032920b64821a12f094ce31e752332415572_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5be7d5988b808ffaa76f92668c76c5ab2c10dd021a4584c7f4f4ae826193f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5be7d5988b808ffaa76f92668c76c5ab2c10dd021a4584c7f4f4ae826193f53->enter($__internal_c5be7d5988b808ffaa76f92668c76c5ab2c10dd021a4584c7f4f4ae826193f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0210d58f72bfd132e0c43615a4c59ef71f142c58b408878661486c7d88f5a453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0210d58f72bfd132e0c43615a4c59ef71f142c58b408878661486c7d88f5a453->enter($__internal_0210d58f72bfd132e0c43615a4c59ef71f142c58b408878661486c7d88f5a453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0210d58f72bfd132e0c43615a4c59ef71f142c58b408878661486c7d88f5a453->leave($__internal_0210d58f72bfd132e0c43615a4c59ef71f142c58b408878661486c7d88f5a453_prof);

        
        $__internal_c5be7d5988b808ffaa76f92668c76c5ab2c10dd021a4584c7f4f4ae826193f53->leave($__internal_c5be7d5988b808ffaa76f92668c76c5ab2c10dd021a4584c7f4f4ae826193f53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
