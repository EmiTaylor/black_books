<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ff3633addd19d68f71cd343146cb1dd7310835e63f523512a2c106df228ddf2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8d38984ea5dc90856b896850572527f2fd450b215a5505e71192680fbf9a1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d38984ea5dc90856b896850572527f2fd450b215a5505e71192680fbf9a1fe->enter($__internal_c8d38984ea5dc90856b896850572527f2fd450b215a5505e71192680fbf9a1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6db7ecfe70fa746691122e8bed5fcc8e065278b7f6ed204f1bd5f2a5c00026d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db7ecfe70fa746691122e8bed5fcc8e065278b7f6ed204f1bd5f2a5c00026d9->enter($__internal_6db7ecfe70fa746691122e8bed5fcc8e065278b7f6ed204f1bd5f2a5c00026d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d38984ea5dc90856b896850572527f2fd450b215a5505e71192680fbf9a1fe->leave($__internal_c8d38984ea5dc90856b896850572527f2fd450b215a5505e71192680fbf9a1fe_prof);

        
        $__internal_6db7ecfe70fa746691122e8bed5fcc8e065278b7f6ed204f1bd5f2a5c00026d9->leave($__internal_6db7ecfe70fa746691122e8bed5fcc8e065278b7f6ed204f1bd5f2a5c00026d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b19b9b70b82dca7068fcca62602e2d96092272ddfe7e8c7020e9a41e17080c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19b9b70b82dca7068fcca62602e2d96092272ddfe7e8c7020e9a41e17080c2a->enter($__internal_b19b9b70b82dca7068fcca62602e2d96092272ddfe7e8c7020e9a41e17080c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_12fb9a8c2a43a4e0b9de64cd37e943a90064f84fab077429c35626925f0d7fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fb9a8c2a43a4e0b9de64cd37e943a90064f84fab077429c35626925f0d7fad->enter($__internal_12fb9a8c2a43a4e0b9de64cd37e943a90064f84fab077429c35626925f0d7fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_12fb9a8c2a43a4e0b9de64cd37e943a90064f84fab077429c35626925f0d7fad->leave($__internal_12fb9a8c2a43a4e0b9de64cd37e943a90064f84fab077429c35626925f0d7fad_prof);

        
        $__internal_b19b9b70b82dca7068fcca62602e2d96092272ddfe7e8c7020e9a41e17080c2a->leave($__internal_b19b9b70b82dca7068fcca62602e2d96092272ddfe7e8c7020e9a41e17080c2a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/black_books/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
