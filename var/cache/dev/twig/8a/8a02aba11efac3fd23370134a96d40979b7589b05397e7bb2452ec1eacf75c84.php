<?php

/* LibraryBundle:Admin:books.html.twig */
class __TwigTemplate_841bc6546979f855cafd29e9155a3f4b18cc533f7fb41a9407c0b12b6da7c75f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LibraryBundle:Admin:books.html.twig", 1);
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
        $__internal_3da3be02172a43fcf0c5961e61c5ab4a7fabae17c7c2e4e2ed2f47f38ae104bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da3be02172a43fcf0c5961e61c5ab4a7fabae17c7c2e4e2ed2f47f38ae104bb->enter($__internal_3da3be02172a43fcf0c5961e61c5ab4a7fabae17c7c2e4e2ed2f47f38ae104bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LibraryBundle:Admin:books.html.twig"));

        $__internal_f4920cfbf154464c79fe445c19fe24c368f3361f53bba10cbe5485a00e4c0c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4920cfbf154464c79fe445c19fe24c368f3361f53bba10cbe5485a00e4c0c8d->enter($__internal_f4920cfbf154464c79fe445c19fe24c368f3361f53bba10cbe5485a00e4c0c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LibraryBundle:Admin:books.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da3be02172a43fcf0c5961e61c5ab4a7fabae17c7c2e4e2ed2f47f38ae104bb->leave($__internal_3da3be02172a43fcf0c5961e61c5ab4a7fabae17c7c2e4e2ed2f47f38ae104bb_prof);

        
        $__internal_f4920cfbf154464c79fe445c19fe24c368f3361f53bba10cbe5485a00e4c0c8d->leave($__internal_f4920cfbf154464c79fe445c19fe24c368f3361f53bba10cbe5485a00e4c0c8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4df5b5c9c236ee984b055e98abc70f575cae179baf8425ff71dc8685298dcc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4df5b5c9c236ee984b055e98abc70f575cae179baf8425ff71dc8685298dcc9->enter($__internal_d4df5b5c9c236ee984b055e98abc70f575cae179baf8425ff71dc8685298dcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_011e5cf5944316cf14780af16a625d49244ced4b43c9d30a4b29120389256f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011e5cf5944316cf14780af16a625d49244ced4b43c9d30a4b29120389256f7d->enter($__internal_011e5cf5944316cf14780af16a625d49244ced4b43c9d30a4b29120389256f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Books list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Categorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new Twig_Error_Runtime('Variable "books" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_books_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "auteur", array()), "html", null, true);
            echo "</td></br>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "categorie", array()), "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_books_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_books_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
        </br>
    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_books_new");
        echo "\">Create a new book</a>
        </li>
    </ul>
";
        
        $__internal_011e5cf5944316cf14780af16a625d49244ced4b43c9d30a4b29120389256f7d->leave($__internal_011e5cf5944316cf14780af16a625d49244ced4b43c9d30a4b29120389256f7d_prof);

        
        $__internal_d4df5b5c9c236ee984b055e98abc70f575cae179baf8425ff71dc8685298dcc9->leave($__internal_d4df5b5c9c236ee984b055e98abc70f575cae179baf8425ff71dc8685298dcc9_prof);

    }

    public function getTemplateName()
    {
        return "LibraryBundle:Admin:books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Books list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Categorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for book in books %}
            <tr>
                <td><a href=\"{{ path('admin_books_show', { 'id': book.id }) }}\">{{ book.id }}</a></td>
                <td>{{ book.titre }}</td>
                <td>{{ book.auteur }}</td></br>
                <td>{{ book.categorie.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_books_show', { 'id': book.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_books_edit', { 'id': book.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
        </br>
    <ul>
        <li>
            <a href=\"{{ path('admin_books_new') }}\">Create a new book</a>
        </li>
    </ul>
{% endblock %}
", "LibraryBundle:Admin:books.html.twig", "/var/www/html/black_books/src/LibraryBundle/Resources/views/Admin/books.html.twig");
    }
}
