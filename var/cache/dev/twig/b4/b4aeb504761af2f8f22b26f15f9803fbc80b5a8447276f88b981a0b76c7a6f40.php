<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9eeb70d7a56c5c406734843bfe1b668ceac436c6eb13aedb17372f1514973073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fa38629734c4fa9d7c6a149ddfb6346e8293a59d709c753d035e85a2309eefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa38629734c4fa9d7c6a149ddfb6346e8293a59d709c753d035e85a2309eefd->enter($__internal_1fa38629734c4fa9d7c6a149ddfb6346e8293a59d709c753d035e85a2309eefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ee18cbb847763f63dd7ea64f22f7be96136be3c274085f6cde90c9006e68231b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee18cbb847763f63dd7ea64f22f7be96136be3c274085f6cde90c9006e68231b->enter($__internal_ee18cbb847763f63dd7ea64f22f7be96136be3c274085f6cde90c9006e68231b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa38629734c4fa9d7c6a149ddfb6346e8293a59d709c753d035e85a2309eefd->leave($__internal_1fa38629734c4fa9d7c6a149ddfb6346e8293a59d709c753d035e85a2309eefd_prof);

        
        $__internal_ee18cbb847763f63dd7ea64f22f7be96136be3c274085f6cde90c9006e68231b->leave($__internal_ee18cbb847763f63dd7ea64f22f7be96136be3c274085f6cde90c9006e68231b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a5f5931fe60b6c133a6b47c86458ba6cb55b444fc2bec6778a46055ed5741ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5f5931fe60b6c133a6b47c86458ba6cb55b444fc2bec6778a46055ed5741ae->enter($__internal_5a5f5931fe60b6c133a6b47c86458ba6cb55b444fc2bec6778a46055ed5741ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91816e39b3f0d09671875bf85e0a779584d38579a88af8065a8018152d50f7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91816e39b3f0d09671875bf85e0a779584d38579a88af8065a8018152d50f7be->enter($__internal_91816e39b3f0d09671875bf85e0a779584d38579a88af8065a8018152d50f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_91816e39b3f0d09671875bf85e0a779584d38579a88af8065a8018152d50f7be->leave($__internal_91816e39b3f0d09671875bf85e0a779584d38579a88af8065a8018152d50f7be_prof);

        
        $__internal_5a5f5931fe60b6c133a6b47c86458ba6cb55b444fc2bec6778a46055ed5741ae->leave($__internal_5a5f5931fe60b6c133a6b47c86458ba6cb55b444fc2bec6778a46055ed5741ae_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cabbf2abdfc6895cc1c1b67e098cc228a0f9dd5cde5de2328eec8e4db0a3c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cabbf2abdfc6895cc1c1b67e098cc228a0f9dd5cde5de2328eec8e4db0a3c5c->enter($__internal_8cabbf2abdfc6895cc1c1b67e098cc228a0f9dd5cde5de2328eec8e4db0a3c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_61a9d0d9a3db997a54fdad1f7f64bbe9b83903aeba71d4757e91c5fe14003038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a9d0d9a3db997a54fdad1f7f64bbe9b83903aeba71d4757e91c5fe14003038->enter($__internal_61a9d0d9a3db997a54fdad1f7f64bbe9b83903aeba71d4757e91c5fe14003038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_61a9d0d9a3db997a54fdad1f7f64bbe9b83903aeba71d4757e91c5fe14003038->leave($__internal_61a9d0d9a3db997a54fdad1f7f64bbe9b83903aeba71d4757e91c5fe14003038_prof);

        
        $__internal_8cabbf2abdfc6895cc1c1b67e098cc228a0f9dd5cde5de2328eec8e4db0a3c5c->leave($__internal_8cabbf2abdfc6895cc1c1b67e098cc228a0f9dd5cde5de2328eec8e4db0a3c5c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cd70ef9863b4b688324ceff91986cf104b3e050b9caff92d5eea50c65568450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd70ef9863b4b688324ceff91986cf104b3e050b9caff92d5eea50c65568450->enter($__internal_1cd70ef9863b4b688324ceff91986cf104b3e050b9caff92d5eea50c65568450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_873952e4319be62eb5af8ea2e544656e40ef8daab6330830ba997502e731fe3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873952e4319be62eb5af8ea2e544656e40ef8daab6330830ba997502e731fe3e->enter($__internal_873952e4319be62eb5af8ea2e544656e40ef8daab6330830ba997502e731fe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_873952e4319be62eb5af8ea2e544656e40ef8daab6330830ba997502e731fe3e->leave($__internal_873952e4319be62eb5af8ea2e544656e40ef8daab6330830ba997502e731fe3e_prof);

        
        $__internal_1cd70ef9863b4b688324ceff91986cf104b3e050b9caff92d5eea50c65568450->leave($__internal_1cd70ef9863b4b688324ceff91986cf104b3e050b9caff92d5eea50c65568450_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/black_books/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
