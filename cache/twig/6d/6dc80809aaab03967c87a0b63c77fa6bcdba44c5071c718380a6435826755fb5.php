<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* flex-objects/types/pages/list.html.twig */
class __TwigTemplate_f64dd357b7c96af4007b80cced2963c529bd2e00376c3fab341c9977b6947933 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'back_button' => [$this, 'block_back_button'],
            'create_button' => [$this, 'block_create_button'],
            'content_top' => [$this, 'block_content_top'],
            'content_list' => [$this, 'block_content_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/pages/list.html.twig"));

        // line 3
        $context["can_create"] = true;
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/list.html.twig", "flex-objects/types/pages/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 5
    public function block_back_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "back_button"));

        // line 6
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/pages/buttons/back.html.twig"], "flex-objects/types/pages/list.html.twig", 6)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 9
    public function block_create_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "create_button"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
        foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
            // line 11
            echo "        ";
            if (((($this->getAttribute($context["add_modal"], "show_in", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["add_modal"], "show_in", []), "bar")) : ("bar")) == "bar")) {
                // line 12
                echo "            <a class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", []), "html", null, true);
                echo "\" href=\"#modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-target=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", [])), "html", null, true);
                echo "</a>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), 1 => "flex-objects/types/pages/buttons/add.html.twig"], "flex-objects/types/pages/list.html.twig", 16)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 19
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 21
    public function block_content_list($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_list"));

        // line 22
        echo "    ";
        $context["list_layout"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "layout", 1 => "columns"], "method");
        // line 23
        echo "    ";
        $this->loadTemplate([0 => (((("flex-objects/types/" .         // line 24
($context["target"] ?? null)) . "/list/") . ($context["list_layout"] ?? null)) . ".html.twig"), 1 => (("flex-objects/types/pages/list/" .         // line 25
($context["list_layout"] ?? null)) . ".html.twig"), 2 => (("flex-objects/types/" .         // line 26
($context["target"] ?? null)) . "/list/list.html.twig"), 3 => "flex-objects/types/pages/list/list.html.twig"], "flex-objects/types/pages/list.html.twig", 23)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 26,  130 => 25,  129 => 24,  127 => 23,  124 => 22,  118 => 21,  107 => 19,  100 => 16,  97 => 15,  91 => 14,  79 => 12,  76 => 11,  71 => 10,  65 => 9,  57 => 6,  51 => 5,  43 => 1,  41 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/list.html.twig' %}

{% set can_create = true %}

{% block back_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/pages/buttons/back.html.twig'] %}
{% endblock back_button %}

{% block create_button %}
    {% for key, add_modal in config.plugins.admin.add_modals %}
        {% if add_modal.show_in|default('bar') == 'bar' %}
            <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label|tu }}</a>
        {% endif %}
    {% endfor %}

    {% include ['flex-objects/types/' ~ target ~ '/buttons/add.html.twig', 'flex-objects/types/pages/buttons/add.html.twig'] %}
{% endblock %}

{% block content_top %}{% endblock %}

{% block content_list %}
    {% set list_layout = grav.uri.param('layout', 'columns') %}
    {% include [
        'flex-objects/types/' ~ target ~ '/list/' ~ list_layout ~ '.html.twig',
        'flex-objects/types/pages/list/' ~ list_layout ~ '.html.twig',
        'flex-objects/types/' ~ target ~ '/list/list.html.twig',
        'flex-objects/types/pages/list/list.html.twig'
        ] %}
{% endblock %}
", "flex-objects/types/pages/list.html.twig", "C:\\wamp64\\www\\grav\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\list.html.twig");
    }
}
