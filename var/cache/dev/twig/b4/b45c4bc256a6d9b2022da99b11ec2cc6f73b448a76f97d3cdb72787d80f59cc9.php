<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7dde696fc41b62a9fe087956448c1aac6099364a26be8aaeac0fba03336cdd55 extends Twig_Template
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
        $__internal_06252a0d4e7e300e933fb1f19a3ae8c7f7a568906c2b9968a1a4d94e8d066039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06252a0d4e7e300e933fb1f19a3ae8c7f7a568906c2b9968a1a4d94e8d066039->enter($__internal_06252a0d4e7e300e933fb1f19a3ae8c7f7a568906c2b9968a1a4d94e8d066039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_21f4718366e788deba4b8c9003a3935f4f141afbde60a78f6bd24b657a257da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f4718366e788deba4b8c9003a3935f4f141afbde60a78f6bd24b657a257da6->enter($__internal_21f4718366e788deba4b8c9003a3935f4f141afbde60a78f6bd24b657a257da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06252a0d4e7e300e933fb1f19a3ae8c7f7a568906c2b9968a1a4d94e8d066039->leave($__internal_06252a0d4e7e300e933fb1f19a3ae8c7f7a568906c2b9968a1a4d94e8d066039_prof);

        
        $__internal_21f4718366e788deba4b8c9003a3935f4f141afbde60a78f6bd24b657a257da6->leave($__internal_21f4718366e788deba4b8c9003a3935f4f141afbde60a78f6bd24b657a257da6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f56b4ad7cca38620c4b44ece3fd89783827755369e35b33b839736145a67eccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56b4ad7cca38620c4b44ece3fd89783827755369e35b33b839736145a67eccd->enter($__internal_f56b4ad7cca38620c4b44ece3fd89783827755369e35b33b839736145a67eccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98815fb369318a107d502a3aba393060a109b24a7fd66130ed4cdee77f824c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98815fb369318a107d502a3aba393060a109b24a7fd66130ed4cdee77f824c39->enter($__internal_98815fb369318a107d502a3aba393060a109b24a7fd66130ed4cdee77f824c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_98815fb369318a107d502a3aba393060a109b24a7fd66130ed4cdee77f824c39->leave($__internal_98815fb369318a107d502a3aba393060a109b24a7fd66130ed4cdee77f824c39_prof);

        
        $__internal_f56b4ad7cca38620c4b44ece3fd89783827755369e35b33b839736145a67eccd->leave($__internal_f56b4ad7cca38620c4b44ece3fd89783827755369e35b33b839736145a67eccd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c37f080b2183bafcb4948cc4d11480c56f51f777c7cf21703841d3a0adb5ed25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37f080b2183bafcb4948cc4d11480c56f51f777c7cf21703841d3a0adb5ed25->enter($__internal_c37f080b2183bafcb4948cc4d11480c56f51f777c7cf21703841d3a0adb5ed25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5488a8642c6820f82a3d03c7fffe122422bf12a2d8a492d6cc667c409cb1df94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5488a8642c6820f82a3d03c7fffe122422bf12a2d8a492d6cc667c409cb1df94->enter($__internal_5488a8642c6820f82a3d03c7fffe122422bf12a2d8a492d6cc667c409cb1df94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5488a8642c6820f82a3d03c7fffe122422bf12a2d8a492d6cc667c409cb1df94->leave($__internal_5488a8642c6820f82a3d03c7fffe122422bf12a2d8a492d6cc667c409cb1df94_prof);

        
        $__internal_c37f080b2183bafcb4948cc4d11480c56f51f777c7cf21703841d3a0adb5ed25->leave($__internal_c37f080b2183bafcb4948cc4d11480c56f51f777c7cf21703841d3a0adb5ed25_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f73defa367f281b01c9e3a3bc9e5d882c9721a9238a49c07196e82960ad9298d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73defa367f281b01c9e3a3bc9e5d882c9721a9238a49c07196e82960ad9298d->enter($__internal_f73defa367f281b01c9e3a3bc9e5d882c9721a9238a49c07196e82960ad9298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94e0efd1d8ea4d059ea0a3aec7193ee93638a4a3e90fe4f4a010811a308a5f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e0efd1d8ea4d059ea0a3aec7193ee93638a4a3e90fe4f4a010811a308a5f65->enter($__internal_94e0efd1d8ea4d059ea0a3aec7193ee93638a4a3e90fe4f4a010811a308a5f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_94e0efd1d8ea4d059ea0a3aec7193ee93638a4a3e90fe4f4a010811a308a5f65->leave($__internal_94e0efd1d8ea4d059ea0a3aec7193ee93638a4a3e90fe4f4a010811a308a5f65_prof);

        
        $__internal_f73defa367f281b01c9e3a3bc9e5d882c9721a9238a49c07196e82960ad9298d->leave($__internal_f73defa367f281b01c9e3a3bc9e5d882c9721a9238a49c07196e82960ad9298d_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/black_books/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
