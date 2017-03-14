<?php

/* ::base.html.twig */
class __TwigTemplate_46a15c8922a7ff222241ce6a104aacc403ba2e367db90031a4300d96a8025138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c87b2bd3f9c8b74e77b69a946da3f2ce2ac2b3880b28a099000673550c82ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c87b2bd3f9c8b74e77b69a946da3f2ce2ac2b3880b28a099000673550c82ff1->enter($__internal_6c87b2bd3f9c8b74e77b69a946da3f2ce2ac2b3880b28a099000673550c82ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7093a0e8df60e230159249aa142a0cf656a478124b7822e763c39f33f5903b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7093a0e8df60e230159249aa142a0cf656a478124b7822e763c39f33f5903b45->enter($__internal_7093a0e8df60e230159249aa142a0cf656a478124b7822e763c39f33f5903b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6c87b2bd3f9c8b74e77b69a946da3f2ce2ac2b3880b28a099000673550c82ff1->leave($__internal_6c87b2bd3f9c8b74e77b69a946da3f2ce2ac2b3880b28a099000673550c82ff1_prof);

        
        $__internal_7093a0e8df60e230159249aa142a0cf656a478124b7822e763c39f33f5903b45->leave($__internal_7093a0e8df60e230159249aa142a0cf656a478124b7822e763c39f33f5903b45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_70e29cdfa3aa167ca218a6c2484ad5d94500a883244226edc46b891247300944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e29cdfa3aa167ca218a6c2484ad5d94500a883244226edc46b891247300944->enter($__internal_70e29cdfa3aa167ca218a6c2484ad5d94500a883244226edc46b891247300944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cdf4a41d2f1a4f45885b45058d689f5fab7bc6f19c4c9c3cb2e67d9bd44c8b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf4a41d2f1a4f45885b45058d689f5fab7bc6f19c4c9c3cb2e67d9bd44c8b3f->enter($__internal_cdf4a41d2f1a4f45885b45058d689f5fab7bc6f19c4c9c3cb2e67d9bd44c8b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cdf4a41d2f1a4f45885b45058d689f5fab7bc6f19c4c9c3cb2e67d9bd44c8b3f->leave($__internal_cdf4a41d2f1a4f45885b45058d689f5fab7bc6f19c4c9c3cb2e67d9bd44c8b3f_prof);

        
        $__internal_70e29cdfa3aa167ca218a6c2484ad5d94500a883244226edc46b891247300944->leave($__internal_70e29cdfa3aa167ca218a6c2484ad5d94500a883244226edc46b891247300944_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0480db632982da186d479bf310730141bf61e23cdf6307c526f56ad32de9ebd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0480db632982da186d479bf310730141bf61e23cdf6307c526f56ad32de9ebd3->enter($__internal_0480db632982da186d479bf310730141bf61e23cdf6307c526f56ad32de9ebd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2c901d3f2640c5a6a313856969c9dd1f12db055453027976aa7bdb6db08fd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c901d3f2640c5a6a313856969c9dd1f12db055453027976aa7bdb6db08fd42->enter($__internal_f2c901d3f2640c5a6a313856969c9dd1f12db055453027976aa7bdb6db08fd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2c901d3f2640c5a6a313856969c9dd1f12db055453027976aa7bdb6db08fd42->leave($__internal_f2c901d3f2640c5a6a313856969c9dd1f12db055453027976aa7bdb6db08fd42_prof);

        
        $__internal_0480db632982da186d479bf310730141bf61e23cdf6307c526f56ad32de9ebd3->leave($__internal_0480db632982da186d479bf310730141bf61e23cdf6307c526f56ad32de9ebd3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_08faacedbd3cee0b220ad74a359f37191f1a52866210918eb69143940e6b2c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08faacedbd3cee0b220ad74a359f37191f1a52866210918eb69143940e6b2c44->enter($__internal_08faacedbd3cee0b220ad74a359f37191f1a52866210918eb69143940e6b2c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26459cbd65b30be82068b32bfbc7f5641c5b7594dbaf00cd142625274d3fbc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26459cbd65b30be82068b32bfbc7f5641c5b7594dbaf00cd142625274d3fbc66->enter($__internal_26459cbd65b30be82068b32bfbc7f5641c5b7594dbaf00cd142625274d3fbc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26459cbd65b30be82068b32bfbc7f5641c5b7594dbaf00cd142625274d3fbc66->leave($__internal_26459cbd65b30be82068b32bfbc7f5641c5b7594dbaf00cd142625274d3fbc66_prof);

        
        $__internal_08faacedbd3cee0b220ad74a359f37191f1a52866210918eb69143940e6b2c44->leave($__internal_08faacedbd3cee0b220ad74a359f37191f1a52866210918eb69143940e6b2c44_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3db556842990a1b6fab00ed04b453222b7f6615b63078e63887cfe1e3ae4ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3db556842990a1b6fab00ed04b453222b7f6615b63078e63887cfe1e3ae4ece->enter($__internal_e3db556842990a1b6fab00ed04b453222b7f6615b63078e63887cfe1e3ae4ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bcb2b3a241ad6e5558ffc30003c10a95e2294766a372306429381e65ca1e20f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb2b3a241ad6e5558ffc30003c10a95e2294766a372306429381e65ca1e20f2->enter($__internal_bcb2b3a241ad6e5558ffc30003c10a95e2294766a372306429381e65ca1e20f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bcb2b3a241ad6e5558ffc30003c10a95e2294766a372306429381e65ca1e20f2->leave($__internal_bcb2b3a241ad6e5558ffc30003c10a95e2294766a372306429381e65ca1e20f2_prof);

        
        $__internal_e3db556842990a1b6fab00ed04b453222b7f6615b63078e63887cfe1e3ae4ece->leave($__internal_e3db556842990a1b6fab00ed04b453222b7f6615b63078e63887cfe1e3ae4ece_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/black_books/app/Resources/views/base.html.twig");
    }
}
