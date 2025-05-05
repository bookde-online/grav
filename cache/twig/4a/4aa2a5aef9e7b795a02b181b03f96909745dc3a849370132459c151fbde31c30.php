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

/* modular/form.html.twig */
class __TwigTemplate_b6aacb9d2ec66cef8cdcc6e90682c40df7e1e9e82946229bc733dc1926c41365 extends \Twig\Template
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
        echo "<div class=\"col-lg-8\">
    
    ";
        // line 3
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 3)->display($context);
        // line 4
        echo "    <div class=\"my-3\">
        ";
        // line 5
        if ($this->getAttribute(($context["form"] ?? null), "message", [])) {
            // line 6
            echo "            <div class=\"sent-message\" style=\"color: green\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "message", []), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", []), "error", [])) {
            // line 9
            echo "        <div class=\"error-message\" style=\"color: red\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", [], "any", false, true), "error", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", [], "any", false, true), "error", []), "Có lỗi xảy ra!")) : ("Có lỗi xảy ra!")), "html", null, true);
            echo "</div>
        ";
        }
        // line 11
        echo "    </div>
</div

</div><!-- End Row -->
  </div><!-- End Container -->
</section><!-- End Contact Section -->
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  50 => 9,  47 => 8,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-8\">
    
    {% include ('forms/form.html.twig') %}
    <div class=\"my-3\">
        {% if form.message %}
            <div class=\"sent-message\" style=\"color: green\">{{ form.message }}</div>
        {% endif %}
        {% if form.messages.error %}
        <div class=\"error-message\" style=\"color: red\">{{ form.messages.error|default('Có lỗi xảy ra!') }}</div>
        {% endif %}
    </div>
</div

</div><!-- End Row -->
  </div><!-- End Container -->
</section><!-- End Contact Section -->
", "modular/form.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\modular\\form.html.twig");
    }
}
