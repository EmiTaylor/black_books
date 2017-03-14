<?php

/* LibraryBundle:Consulting:books.html.twig */
class __TwigTemplate_157322be32adf04bdc87478a2d1e1a4d02c89f5543a8f343c9c99db06f224480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LibraryBundle:Consulting:books.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30d7a0a5712145696324a48351b320c1bd5c68b7cb1aa912a7f8eb955b671ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d7a0a5712145696324a48351b320c1bd5c68b7cb1aa912a7f8eb955b671ae9->enter($__internal_30d7a0a5712145696324a48351b320c1bd5c68b7cb1aa912a7f8eb955b671ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LibraryBundle:Consulting:books.html.twig"));

        $__internal_b1220460ec840871da59c823696ed65809a883b368575f82d1125744754bf4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1220460ec840871da59c823696ed65809a883b368575f82d1125744754bf4b6->enter($__internal_b1220460ec840871da59c823696ed65809a883b368575f82d1125744754bf4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LibraryBundle:Consulting:books.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d7a0a5712145696324a48351b320c1bd5c68b7cb1aa912a7f8eb955b671ae9->leave($__internal_30d7a0a5712145696324a48351b320c1bd5c68b7cb1aa912a7f8eb955b671ae9_prof);

        
        $__internal_b1220460ec840871da59c823696ed65809a883b368575f82d1125744754bf4b6->leave($__internal_b1220460ec840871da59c823696ed65809a883b368575f82d1125744754bf4b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a377e968bcd660bd13f16e576d5cc30c082bb2c7ce7ab8f946a1045fb5aa85cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a377e968bcd660bd13f16e576d5cc30c082bb2c7ce7ab8f946a1045fb5aa85cd->enter($__internal_a377e968bcd660bd13f16e576d5cc30c082bb2c7ce7ab8f946a1045fb5aa85cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_677fbece32be127d3a0dc58318145ccc4d2cbb3cd84c1b88d222bef7eaacd842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677fbece32be127d3a0dc58318145ccc4d2cbb3cd84c1b88d222bef7eaacd842->enter($__internal_677fbece32be127d3a0dc58318145ccc4d2cbb3cd84c1b88d222bef7eaacd842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LibraryBundle:Consulting:books";
        
        $__internal_677fbece32be127d3a0dc58318145ccc4d2cbb3cd84c1b88d222bef7eaacd842->leave($__internal_677fbece32be127d3a0dc58318145ccc4d2cbb3cd84c1b88d222bef7eaacd842_prof);

        
        $__internal_a377e968bcd660bd13f16e576d5cc30c082bb2c7ce7ab8f946a1045fb5aa85cd->leave($__internal_a377e968bcd660bd13f16e576d5cc30c082bb2c7ce7ab8f946a1045fb5aa85cd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fee2f081041bd0f532b5d03063c985993e3729e9a4ba0c9e23a3476b39aa4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fee2f081041bd0f532b5d03063c985993e3729e9a4ba0c9e23a3476b39aa4dc->enter($__internal_9fee2f081041bd0f532b5d03063c985993e3729e9a4ba0c9e23a3476b39aa4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3bf525543b1586fc4374563f3e667a9589b6aa82e72f8ed88945316472c5309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bf525543b1586fc4374563f3e667a9589b6aa82e72f8ed88945316472c5309->enter($__internal_f3bf525543b1586fc4374563f3e667a9589b6aa82e72f8ed88945316472c5309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Books list</h1>

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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new Twig_Error_Runtime('Variable "books" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminbooks_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "auteur", array()), "html", null, true);
            echo "</td></br>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "categorie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminbooks_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["book"], "id", array()))), "html", null, true);
            echo "\">show</a>
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
    
";
        
        $__internal_f3bf525543b1586fc4374563f3e667a9589b6aa82e72f8ed88945316472c5309->leave($__internal_f3bf525543b1586fc4374563f3e667a9589b6aa82e72f8ed88945316472c5309_prof);

        
        $__internal_9fee2f081041bd0f532b5d03063c985993e3729e9a4ba0c9e23a3476b39aa4dc->leave($__internal_9fee2f081041bd0f532b5d03063c985993e3729e9a4ba0c9e23a3476b39aa4dc_prof);

    }

    public function getTemplateName()
    {
        return "LibraryBundle:Consulting:books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  111 => 28,  104 => 24,  100 => 23,  96 => 22,  90 => 21,  87 => 20,  83 => 19,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}LibraryBundle:Consulting:books{% endblock %}

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
                <td><a href=\"{{ path('adminbooks_show', { 'id': book.id }) }}\">{{ book.id }}</a></td>
                <td>{{ book.titre }}</td>
                <td>{{ book.auteur }}</td></br>
                <td>{{ book.categorie.nom }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminbooks_show', { 'id': book.id }) }}\">show</a>
                        </li>
                        
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
        </br>
    
{% endblock %}
", "LibraryBundle:Consulting:books.html.twig", "/var/www/html/black_books/src/LibraryBundle/Resources/views/Consulting/books.html.twig");
    }
}
