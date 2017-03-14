<?php

/* categories/index.html.twig */
class __TwigTemplate_590ab9ecbb3e79e8a044b247ebda0991761122a96f8f8a7de3e30b1a565f7ba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categories/index.html.twig", 1);
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
        $__internal_16409a88928f32c95bb0f1551932b481a141d7382d79d89de86897bd7bba1323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16409a88928f32c95bb0f1551932b481a141d7382d79d89de86897bd7bba1323->enter($__internal_16409a88928f32c95bb0f1551932b481a141d7382d79d89de86897bd7bba1323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $__internal_8422050e4828f9453bdc4e90e4d23cdb330eff268aafb44a5370e74424eb6984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8422050e4828f9453bdc4e90e4d23cdb330eff268aafb44a5370e74424eb6984->enter($__internal_8422050e4828f9453bdc4e90e4d23cdb330eff268aafb44a5370e74424eb6984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16409a88928f32c95bb0f1551932b481a141d7382d79d89de86897bd7bba1323->leave($__internal_16409a88928f32c95bb0f1551932b481a141d7382d79d89de86897bd7bba1323_prof);

        
        $__internal_8422050e4828f9453bdc4e90e4d23cdb330eff268aafb44a5370e74424eb6984->leave($__internal_8422050e4828f9453bdc4e90e4d23cdb330eff268aafb44a5370e74424eb6984_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0af47794ed05ce5ccded2765d7d7d5462cbe89473b2f15416c0e44a37f5d6b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af47794ed05ce5ccded2765d7d7d5462cbe89473b2f15416c0e44a37f5d6b17->enter($__internal_0af47794ed05ce5ccded2765d7d7d5462cbe89473b2f15416c0e44a37f5d6b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e903012c6634c7da93d8babd5685b00322d2a4f3e8d6abbed00608c946bda60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e903012c6634c7da93d8babd5685b00322d2a4f3e8d6abbed00608c946bda60->enter($__internal_4e903012c6634c7da93d8babd5685b00322d2a4f3e8d6abbed00608c946bda60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admincategories_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admincategories_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admincategories_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admincategories_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_4e903012c6634c7da93d8babd5685b00322d2a4f3e8d6abbed00608c946bda60->leave($__internal_4e903012c6634c7da93d8babd5685b00322d2a4f3e8d6abbed00608c946bda60_prof);

        
        $__internal_0af47794ed05ce5ccded2765d7d7d5462cbe89473b2f15416c0e44a37f5d6b17->leave($__internal_0af47794ed05ce5ccded2765d7d7d5462cbe89473b2f15416c0e44a37f5d6b17_prof);

    }

    public function getTemplateName()
    {
        return "categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('admincategories_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.nom }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admincategories_show', { 'id': category.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admincategories_edit', { 'id': category.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admincategories_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "categories/index.html.twig", "/var/www/html/black_books/app/Resources/views/categories/index.html.twig");
    }
}
