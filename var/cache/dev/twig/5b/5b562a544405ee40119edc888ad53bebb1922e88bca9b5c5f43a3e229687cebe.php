<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7996af2fe733a47ee2faa0646b65277b206d199d81e6ab628b2de4666f12eb7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_dd6a27f7e69289f7eea8f0bb1619823e54f2b1f12814511289ef7cb4abdde98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6a27f7e69289f7eea8f0bb1619823e54f2b1f12814511289ef7cb4abdde98f->enter($__internal_dd6a27f7e69289f7eea8f0bb1619823e54f2b1f12814511289ef7cb4abdde98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8d6e8bbc23ebd0f36261108166daccd711c1d0726a7a893dd76ce11c3d357acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6e8bbc23ebd0f36261108166daccd711c1d0726a7a893dd76ce11c3d357acb->enter($__internal_8d6e8bbc23ebd0f36261108166daccd711c1d0726a7a893dd76ce11c3d357acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd6a27f7e69289f7eea8f0bb1619823e54f2b1f12814511289ef7cb4abdde98f->leave($__internal_dd6a27f7e69289f7eea8f0bb1619823e54f2b1f12814511289ef7cb4abdde98f_prof);

        
        $__internal_8d6e8bbc23ebd0f36261108166daccd711c1d0726a7a893dd76ce11c3d357acb->leave($__internal_8d6e8bbc23ebd0f36261108166daccd711c1d0726a7a893dd76ce11c3d357acb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d34a9db3eb6dfabecf43163847a96628535e596fd4090584cc55e9a44dd3fad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34a9db3eb6dfabecf43163847a96628535e596fd4090584cc55e9a44dd3fad3->enter($__internal_d34a9db3eb6dfabecf43163847a96628535e596fd4090584cc55e9a44dd3fad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4407339dca619b2580d71777100807f5061208b73f2141c75a2732389cdfa86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4407339dca619b2580d71777100807f5061208b73f2141c75a2732389cdfa86e->enter($__internal_4407339dca619b2580d71777100807f5061208b73f2141c75a2732389cdfa86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4407339dca619b2580d71777100807f5061208b73f2141c75a2732389cdfa86e->leave($__internal_4407339dca619b2580d71777100807f5061208b73f2141c75a2732389cdfa86e_prof);

        
        $__internal_d34a9db3eb6dfabecf43163847a96628535e596fd4090584cc55e9a44dd3fad3->leave($__internal_d34a9db3eb6dfabecf43163847a96628535e596fd4090584cc55e9a44dd3fad3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d34dfafe4d02557f4f6e85be90e998592516a53c8a054190bc052e1893dc814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d34dfafe4d02557f4f6e85be90e998592516a53c8a054190bc052e1893dc814->enter($__internal_3d34dfafe4d02557f4f6e85be90e998592516a53c8a054190bc052e1893dc814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0798b95255ab22b62004cb6d57b4e111518980d359441cb4e50f4ab86ff551d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0798b95255ab22b62004cb6d57b4e111518980d359441cb4e50f4ab86ff551d0->enter($__internal_0798b95255ab22b62004cb6d57b4e111518980d359441cb4e50f4ab86ff551d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0798b95255ab22b62004cb6d57b4e111518980d359441cb4e50f4ab86ff551d0->leave($__internal_0798b95255ab22b62004cb6d57b4e111518980d359441cb4e50f4ab86ff551d0_prof);

        
        $__internal_3d34dfafe4d02557f4f6e85be90e998592516a53c8a054190bc052e1893dc814->leave($__internal_3d34dfafe4d02557f4f6e85be90e998592516a53c8a054190bc052e1893dc814_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7c5d24b58b7912bdb69f1580a1fe1ebe2f65eb903887fa8fa4b0eec19759388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c5d24b58b7912bdb69f1580a1fe1ebe2f65eb903887fa8fa4b0eec19759388->enter($__internal_b7c5d24b58b7912bdb69f1580a1fe1ebe2f65eb903887fa8fa4b0eec19759388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43cb2295f45ae4c14da5f52e5e60316feb3a4c489e144ce7700f527f71ca5289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cb2295f45ae4c14da5f52e5e60316feb3a4c489e144ce7700f527f71ca5289->enter($__internal_43cb2295f45ae4c14da5f52e5e60316feb3a4c489e144ce7700f527f71ca5289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_43cb2295f45ae4c14da5f52e5e60316feb3a4c489e144ce7700f527f71ca5289->leave($__internal_43cb2295f45ae4c14da5f52e5e60316feb3a4c489e144ce7700f527f71ca5289_prof);

        
        $__internal_b7c5d24b58b7912bdb69f1580a1fe1ebe2f65eb903887fa8fa4b0eec19759388->leave($__internal_b7c5d24b58b7912bdb69f1580a1fe1ebe2f65eb903887fa8fa4b0eec19759388_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/black_books/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
