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

/* forms/data.html.twig */
class __TwigTemplate_e22420112a0f2c84bf74c55fafbee4ba66390a836a7cfaf4039bb6986dbd814a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["page_con"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/_config"], "method");
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: rgb(217, 248, 238);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
            font-size: 22px;
        }
        p {
            font-size: 16px;
            color: #555;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            border: 0.01px solid rgb(55, 103, 90);
        }
        th {
            background-color: #fff;
            color: black;
            font-weight: bold;
        }
        td {
            background: #fff;
            color: #222;
        }
        ul {
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 5px;
        }
        .highlight {
            color:rgb(0, 99, 73);
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <!-- Cột bên trái: Logo -->
            ";
        // line 70
        echo "            <!-- Cột bên phải: Tiêu đề & Thông tin -->
            <div class=\"col-md-9\">
                <h2>Thông tin liên hệ mới</h2>
                <p>Bạn nhận được một liên hệ mới từ website: <span class=\"highlight\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</span></p>
            </div>
        </div>

        ";
        // line 147
        echo "
        ";
        // line 148
        $context["macro"] = $this;
        // line 149
        echo "
        ";
        // line 150
        echo $context["macro"]->getrender_field(($context["form"] ?? null), $this->getAttribute(($context["form"] ?? null), "fields", []), "");
        echo "
    </div>
</body>
</html>
";
    }

    // line 77
    public function getrender_field($__form__ = null, $__fields__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "fields" => $__fields__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 78
            echo "            ";
            $context["self"] = $this;
            // line 79
            echo "
            <table>
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 82
                $context["show_field"] = ((($this->getAttribute($context["field"], "input@", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "input@")))) ? ($this->getAttribute($context["field"], "input@")) : (((($this->getAttribute($context["field"], "store", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "store", [])))) ? ($this->getAttribute($context["field"], "store", [])) : (true))));
                // line 83
                echo "                    ";
                if ($this->getAttribute($context["field"], "fields", [])) {
                    // line 84
                    $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", [])) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", [])) . ".")) : (($context["scope"] ?? null)));
                    // line 85
                    echo $context["self"]->getrender_field(($context["form"] ?? null), $this->getAttribute($context["field"], "fields", []), ($context["new_scope"] ?? null));
                    echo "
                    ";
                } else {
                    // line 87
                    echo "                        ";
                    if (($context["show_field"] ?? null)) {
                        // line 88
                        $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["index"])))], "method");
                        // line 89
                        if (($context["value"] ?? null)) {
                            // line 90
                            echo "                                <tr>
                                    <th>";
                            // line 91
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($context["field"], "label", [])));
                            echo "</th>
                                    <td>
                                        ";
                            // line 93
                            if (($this->getAttribute($context["field"], "type", []) == "checkboxes")) {
                                // line 94
                                echo "                                            <ul>
                                                ";
                                // line 95
                                $context["use_keys"] = ($this->getAttribute($context["field"], "use", [], "any", true, true) && ($this->getAttribute($context["field"], "use", []) == "keys"));
                                // line 96
                                echo "                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))], "method"));
                                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                                    // line 97
                                    echo "                                                    ";
                                    $context["index"] = ((($context["use_keys"] ?? null)) ? ($context["key"]) : ($context["value"]));
                                    // line 98
                                    echo "                                                    <li>";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute($context["field"], "options", []), $context["index"], [], "array")));
                                    echo "</li>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 100
                                echo "                                            </ul>
                                        ";
                            } elseif (($this->getAttribute(                            // line 101
$context["field"], "type", []) == "radio")) {
                                // line 102
                                echo "                                            ";
                                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))], "method");
                                // line 103
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute($context["field"], "options", []), ($context["value"] ?? null), [], "array")));
                                echo "
                                        ";
                            } elseif (($this->getAttribute(                            // line 104
$context["field"], "type", []) == "checkbox")) {
                                // line 105
                                echo "                                            ";
                                echo ((($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))], "method") == 1)) ? ("Có") : ("Không"));
                                echo "
                                        ";
                            } elseif (($this->getAttribute(                            // line 106
$context["field"], "type", []) == "select")) {
                                // line 107
                                echo "                                            ";
                                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))], "method");
                                // line 108
                                echo "                                            ";
                                if (twig_test_iterable(($context["value"] ?? null))) {
                                    // line 109
                                    echo "                                                <ul>
                                                    ";
                                    // line 110
                                    $context["use_keys"] = ($this->getAttribute($context["field"], "use", [], "any", true, true) && ($this->getAttribute($context["field"], "use", []) == "keys"));
                                    // line 111
                                    echo "                                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                                        // line 112
                                        echo "                                                        ";
                                        $context["index"] = ((($context["use_keys"] ?? null)) ? ($context["key"]) : ($context["val"]));
                                        // line 113
                                        echo "                                                        <li>";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute($context["field"], "options", []), $context["index"], [], "array")));
                                        echo "</li>
                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 115
                                    echo "                                                </ul>
                                            ";
                                } else {
                                    // line 117
                                    echo "                                                ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute($context["field"], "options", []), ($context["value"] ?? null), [], "array")));
                                    echo "
                                            ";
                                }
                                // line 119
                                echo "                                        ";
                            } else {
                                // line 120
                                echo "                                            ";
                                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))], "method");
                                // line 121
                                echo "                                            ";
                                if (twig_test_iterable(($context["value"] ?? null))) {
                                    // line 122
                                    echo "                                                <ul>
                                                    ";
                                    // line 123
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                                        // line 124
                                        echo "                                                        ";
                                        if (twig_test_iterable($context["val"])) {
                                            // line 125
                                            echo "                                                            <ul>
                                                                ";
                                            // line 126
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($context["val"]);
                                            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                                                // line 127
                                                echo "                                                                    <li>";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($context["v"]));
                                                echo "</li>
                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 129
                                            echo "                                                            </ul>
                                                        ";
                                        } else {
                                            // line 131
                                            echo "                                                            <li>";
                                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($context["val"]));
                                            echo "</li>
                                                        ";
                                        }
                                        // line 133
                                        echo "                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 134
                                    echo "                                                </ul>
                                            ";
                                } else {
                                    // line 136
                                    echo "                                                ";
                                    echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
                                    echo "
                                            ";
                                }
                                // line 138
                                echo "                                        ";
                            }
                            // line 139
                            echo "                                    </td>
                                </tr>
                            ";
                        }
                        // line 142
                        echo "                        ";
                    }
                    // line 143
                    echo "                    ";
                }
                // line 144
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "            </table>
        ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 145,  339 => 144,  336 => 143,  333 => 142,  328 => 139,  325 => 138,  319 => 136,  315 => 134,  309 => 133,  303 => 131,  299 => 129,  290 => 127,  286 => 126,  283 => 125,  280 => 124,  276 => 123,  273 => 122,  270 => 121,  267 => 120,  264 => 119,  258 => 117,  254 => 115,  245 => 113,  242 => 112,  237 => 111,  235 => 110,  232 => 109,  229 => 108,  226 => 107,  224 => 106,  219 => 105,  217 => 104,  212 => 103,  209 => 102,  207 => 101,  204 => 100,  195 => 98,  192 => 97,  187 => 96,  185 => 95,  182 => 94,  180 => 93,  175 => 91,  172 => 90,  170 => 89,  168 => 88,  165 => 87,  160 => 85,  158 => 84,  155 => 83,  153 => 82,  149 => 81,  145 => 79,  142 => 78,  128 => 77,  119 => 150,  116 => 149,  114 => 148,  111 => 147,  104 => 73,  99 => 70,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set page_con = page.find('/_config') %}

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: rgb(217, 248, 238);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
            font-size: 22px;
        }
        p {
            font-size: 16px;
            color: #555;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            border: 0.01px solid rgb(55, 103, 90);
        }
        th {
            background-color: #fff;
            color: black;
            font-weight: bold;
        }
        td {
            background: #fff;
            color: #222;
        }
        ul {
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 5px;
        }
        .highlight {
            color:rgb(0, 99, 73);
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <!-- Cột bên trái: Logo -->
            {# <div class=\"col-md-3 text-center\">
                {% include 'partials/logo.html.twig' %}
            </div> #}
            <!-- Cột bên phải: Tiêu đề & Thông tin -->
            <div class=\"col-md-9\">
                <h2>Thông tin liên hệ mới</h2>
                <p>Bạn nhận được một liên hệ mới từ website: <span class=\"highlight\">{{ page_con.header.title }}</span></p>
            </div>
        </div>

        {% macro render_field(form, fields, scope) %}
            {% import _self as self %}

            <table>
                {% for index, field in fields %}
                    {%- set show_field = attribute(field, \"input@\") ?? field.store ?? true %}
                    {% if field.fields %}
                        {%- set new_scope = field.nest_id ? scope ~ field.name ~ '.' : scope -%}
                        {{- self.render_field(form, field.fields, new_scope) }}
                    {% else %}
                        {% if show_field %}
                            {%- set value = form.value(scope ~ (field.name ?? index)) -%}
                            {% if value %}
                                <tr>
                                    <th>{{ field.label|t|e }}</th>
                                    <td>
                                        {% if field.type == 'checkboxes' %}
                                            <ul>
                                                {% set use_keys = field.use is defined and field.use == 'keys' %}
                                                {% for key,value in form.value(scope ~ field.name) %}
                                                    {% set index = (use_keys ? key : value) %}
                                                    <li>{{ field.options[index]|t|e }}</li>
                                                {% endfor %}
                                            </ul>
                                        {% elseif field.type == 'radio' %}
                                            {% set value = form.value(scope ~ field.name) %}
                                            {{ field.options[value]|t|e }}
                                        {% elseif field.type == 'checkbox' %}
                                            {{ (form.value(scope ~ field.name) == 1) ? \"Có\" : \"Không\" }}
                                        {% elseif field.type == 'select' %}
                                            {% set value = form.value(scope ~ field.name) %}
                                            {% if value is iterable %}
                                                <ul>
                                                    {% set use_keys = field.use is defined and field.use == 'keys' %}
                                                    {% for key, val in value %}
                                                        {% set index = (use_keys ? key : val) %}
                                                        <li>{{ field.options[index]|t|e }}</li>
                                                    {% endfor %}
                                                </ul>
                                            {% else %}
                                                {{ field.options[value]|t|e }}
                                            {% endif %}
                                        {% else %}
                                            {% set value = form.value(scope ~ field.name) %}
                                            {% if value is iterable %}
                                                <ul>
                                                    {% for val in value %}
                                                        {% if val is iterable %}
                                                            <ul>
                                                                {% for v in val %}
                                                                    <li>{{ string(v)|e }}</li>
                                                                {% endfor %}
                                                            </ul>
                                                        {% else %}
                                                            <li>{{ string(val)|e }}</li>
                                                        {% endif %}
                                                    {% endfor %}
                                                </ul>
                                            {% else %}
                                                {{ string(value)|e|nl2br }}
                                            {% endif %}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </table>
        {% endmacro %}

        {% import _self as macro %}

        {{ macro.render_field(form, form.fields, '') }}
    </div>
</body>
</html>
", "forms/data.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\forms\\data.html.twig");
    }
}
