<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_65502b3bdab463a3aed1fc571927078cd0599c5b540b878e7f2a96b85f1c7cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e97a6634ee22b18a7205b6e33c72404ea8205c901d2ae7b187f68cf5cf8afe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e97a6634ee22b18a7205b6e33c72404ea8205c901d2ae7b187f68cf5cf8afe9->enter($__internal_5e97a6634ee22b18a7205b6e33c72404ea8205c901d2ae7b187f68cf5cf8afe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_a6f7a32bc5826c3df12998bf72db6ca45704f26888086633ed2e00d4c21b09c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f7a32bc5826c3df12998bf72db6ca45704f26888086633ed2e00d4c21b09c0->enter($__internal_a6f7a32bc5826c3df12998bf72db6ca45704f26888086633ed2e00d4c21b09c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5e97a6634ee22b18a7205b6e33c72404ea8205c901d2ae7b187f68cf5cf8afe9->leave($__internal_5e97a6634ee22b18a7205b6e33c72404ea8205c901d2ae7b187f68cf5cf8afe9_prof);

        
        $__internal_a6f7a32bc5826c3df12998bf72db6ca45704f26888086633ed2e00d4c21b09c0->leave($__internal_a6f7a32bc5826c3df12998bf72db6ca45704f26888086633ed2e00d4c21b09c0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
