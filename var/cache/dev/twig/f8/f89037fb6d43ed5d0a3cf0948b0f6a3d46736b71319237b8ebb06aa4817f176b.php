<?php

/* LibraryBundle:Admin:bookshow.html.twig */
class __TwigTemplate_f58e6eb14ecb743d8b8912b2d73ed1071d994a3c1e3a8d924076aafe5f09eb8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LibraryBundle:Admin:bookshow.html.twig", 1);
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
        $__internal_2fde464076266aec2b6c7d908602a455d3d4a09150d8e4fe54acf9c0606e9517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fde464076266aec2b6c7d908602a455d3d4a09150d8e4fe54acf9c0606e9517->enter($__internal_2fde464076266aec2b6c7d908602a455d3d4a09150d8e4fe54acf9c0606e9517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LibraryBundle:Admin:bookshow.html.twig"));

        $__internal_1b9b7c7fd59a31a7f249f6e547faf318903d3326c7defe7a41b29e406948f498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9b7c7fd59a31a7f249f6e547faf318903d3326c7defe7a41b29e406948f498->enter($__internal_1b9b7c7fd59a31a7f249f6e547faf318903d3326c7defe7a41b29e406948f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LibraryBundle:Admin:bookshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fde464076266aec2b6c7d908602a455d3d4a09150d8e4fe54acf9c0606e9517->leave($__internal_2fde464076266aec2b6c7d908602a455d3d4a09150d8e4fe54acf9c0606e9517_prof);

        
        $__internal_1b9b7c7fd59a31a7f249f6e547faf318903d3326c7defe7a41b29e406948f498->leave($__internal_1b9b7c7fd59a31a7f249f6e547faf318903d3326c7defe7a41b29e406948f498_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40d8690c7c9577206063c5eb9f5af328fa9ac68113a3843941810b5acb6c519e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d8690c7c9577206063c5eb9f5af328fa9ac68113a3843941810b5acb6c519e->enter($__internal_40d8690c7c9577206063c5eb9f5af328fa9ac68113a3843941810b5acb6c519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df5f59fd48bb255f91eee31036e5c538a52d864f3da215820a172e369f27968d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5f59fd48bb255f91eee31036e5c538a52d864f3da215820a172e369f27968d->enter($__internal_df5f59fd48bb255f91eee31036e5c538a52d864f3da215820a172e369f27968d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Book</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 14, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 18, $this->getSourceContext()); })()), "auteur", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_books_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_books_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_df5f59fd48bb255f91eee31036e5c538a52d864f3da215820a172e369f27968d->leave($__internal_df5f59fd48bb255f91eee31036e5c538a52d864f3da215820a172e369f27968d_prof);

        
        $__internal_40d8690c7c9577206063c5eb9f5af328fa9ac68113a3843941810b5acb6c519e->leave($__internal_40d8690c7c9577206063c5eb9f5af328fa9ac68113a3843941810b5acb6c519e_prof);

    }

    public function getTemplateName()
    {
        return "LibraryBundle:Admin:bookshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Book</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ book.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ book.titre }}</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>{{ book.auteur }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_books_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_books_edit', { 'id': book.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "LibraryBundle:Admin:bookshow.html.twig", "/var/www/html/black_books/src/LibraryBundle/Resources/views/Admin/bookshow.html.twig");
    }
}
