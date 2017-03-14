<?php

/* LibraryBundle:Admin:bookedit.html.twig */
class __TwigTemplate_fbe9963ef74e938d0ac20286a7f4e393c39deb40e91ac74e273fa80459294959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LibraryBundle:Admin:bookedit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57f4e76e2ec02921c7bee0971361624fdc125ad37b6d9421d1a44e1b101ce137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f4e76e2ec02921c7bee0971361624fdc125ad37b6d9421d1a44e1b101ce137->enter($__internal_57f4e76e2ec02921c7bee0971361624fdc125ad37b6d9421d1a44e1b101ce137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LibraryBundle:Admin:bookedit.html.twig"));

        $__internal_ed92790b30d08e33be342d3ff9d818740eea3ca3521f5a76b8186a201d5f5aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed92790b30d08e33be342d3ff9d818740eea3ca3521f5a76b8186a201d5f5aaf->enter($__internal_ed92790b30d08e33be342d3ff9d818740eea3ca3521f5a76b8186a201d5f5aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LibraryBundle:Admin:bookedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f4e76e2ec02921c7bee0971361624fdc125ad37b6d9421d1a44e1b101ce137->leave($__internal_57f4e76e2ec02921c7bee0971361624fdc125ad37b6d9421d1a44e1b101ce137_prof);

        
        $__internal_ed92790b30d08e33be342d3ff9d818740eea3ca3521f5a76b8186a201d5f5aaf->leave($__internal_ed92790b30d08e33be342d3ff9d818740eea3ca3521f5a76b8186a201d5f5aaf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d628f2e7510f67844f6f312a8c3dcb0d7da02d5497173700c1a1daaeb10e8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d628f2e7510f67844f6f312a8c3dcb0d7da02d5497173700c1a1daaeb10e8b1->enter($__internal_9d628f2e7510f67844f6f312a8c3dcb0d7da02d5497173700c1a1daaeb10e8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b9389b668c52c114fe8784fb24887c2d757885aa64bcba98dc6240f17d616f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9389b668c52c114fe8784fb24887c2d757885aa64bcba98dc6240f17d616f6->enter($__internal_3b9389b668c52c114fe8784fb24887c2d757885aa64bcba98dc6240f17d616f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_books_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3b9389b668c52c114fe8784fb24887c2d757885aa64bcba98dc6240f17d616f6->leave($__internal_3b9389b668c52c114fe8784fb24887c2d757885aa64bcba98dc6240f17d616f6_prof);

        
        $__internal_9d628f2e7510f67844f6f312a8c3dcb0d7da02d5497173700c1a1daaeb10e8b1->leave($__internal_9d628f2e7510f67844f6f312a8c3dcb0d7da02d5497173700c1a1daaeb10e8b1_prof);

    }

    public function getTemplateName()
    {
        return "LibraryBundle:Admin:bookedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Category edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_books_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "LibraryBundle:Admin:bookedit.html.twig", "/var/www/html/black_books/src/LibraryBundle/Resources/views/Admin/bookedit.html.twig");
    }
}
