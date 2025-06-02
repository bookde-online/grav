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

/* blog.html.twig */
class __TwigTemplate_1f8a6c1261e5974e538f081958335c2a9d4b8c1ca4f616f78329e1079cc7c239 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 5
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 6
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 7
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 16
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scopedQuerySelectorShim.min.js"], "method");
    }

    // line 20
    public function block_hero($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->loadTemplate("partials/place.html.twig", "blog.html.twig", 21)->display($context);
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        // line 25
        echo "<section id=\"body-wrapper\" class=\"section blog-listing\">
    <div class=\"container ";
        // line 26
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 27
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 28
            echo "            <div class=\"row mb-3\">
                <div class=\"col-12\">
                    ";
            // line 30
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 30)->display($context);
            // line 31
            echo "                </div>
            </div>
        ";
        }
        // line 34
        echo "
        <div class=\"row gy-4\">
           
                <div class=\"row gy-4\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 39
            echo "                        <div class=\"col-lg-6 col-md-12 col-12 justify-content-center align-items-center\">
                            ";
            // line 40
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 40)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 41
            echo "                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>

                ";
        // line 45
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 46
            echo "                    <div id=\"listing-footer\" class=\"mt-4\">
                        ";
            // line 47
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 47)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 48
            echo "                    </div>
                ";
        }
        // line 50
        echo "            </div>
            ";
        // line 51
        if (($context["show_sidebar"] ?? null)) {
            // line 52
            echo "            <div class=\"col-lg-4 col-md-12\">
                ";
            // line 53
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 53)->display($context);
            // line 54
            echo "            </div>
            ";
        }
        // line 56
        echo "        </div>
    </div>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
</section>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 56,  182 => 54,  180 => 53,  177 => 52,  175 => 51,  172 => 50,  168 => 48,  166 => 47,  163 => 46,  161 => 45,  157 => 43,  142 => 41,  140 => 40,  137 => 39,  120 => 38,  114 => 34,  109 => 31,  107 => 30,  103 => 28,  101 => 27,  97 => 26,  94 => 25,  91 => 24,  86 => 21,  83 => 20,  78 => 17,  76 => 16,  71 => 15,  68 => 14,  61 => 11,  58 => 10,  55 => 9,  50 => 1,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  40 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}

{% block hero %}
    {% include 'partials/place.html.twig' %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <div class=\"container {{ grid_size }}\">
        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            <div class=\"row mb-3\">
                <div class=\"col-12\">
                    {% include 'partials/breadcrumbs.html.twig' %}
                </div>
            </div>
        {% endif %}

        <div class=\"row gy-4\">
           
                <div class=\"row gy-4\">
                    {% for child in collection %}
                        <div class=\"col-lg-6 col-md-12 col-12 justify-content-center align-items-center\">
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        </div>
                    {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\" class=\"mt-4\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}
            </div>
            {% if show_sidebar %}
            <div class=\"col-lg-4 col-md-12\">
                {% include 'partials/sidebar.html.twig' %}
            </div>
            {% endif %}
        </div>
    </div>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
</section>
{% endblock %}



", "blog.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\blog.html.twig");
    }
}
