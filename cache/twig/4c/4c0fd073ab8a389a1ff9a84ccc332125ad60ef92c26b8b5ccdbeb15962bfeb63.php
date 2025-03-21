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

/* default.html.twig */
class __TwigTemplate_3c006c0319e952d02447c8449dc04667904c0f5cb9cdec59bac90f10b5606fe1 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"vi\">

<head>
        ";
        // line 5
        $this->loadTemplate("partials/header_vi.html.twig", "default.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"index-page\">

      ";
        // line 10
        $this->loadTemplate("partials/navigation_vi.html.twig", "default.html.twig", 10)->display($context);
        // line 11
        echo "
  <main class=\"main\">
      ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->dump($this->env, $context, ($context["pages"] ?? null)), "html", null, true);
        echo "

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
        ";
        // line 19
        $this->loadTemplate("partials/footer_vi.html.twig", "default.html.twig", 19)->display($context);
        // line 20
        echo "
  </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  62 => 19,  54 => 14,  50 => 13,  46 => 11,  44 => 10,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"vi\">

<head>
        {% include 'partials/header_vi.html.twig' %}
</head>

<body class=\"index-page\">

      {% include 'partials/navigation_vi.html.twig' %}

  <main class=\"main\">
      {{ page.content|raw }}
      {{ dump(pages) }}

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
        {% include 'partials/footer_vi.html.twig' %}

  </footer>

</body>

</html>", "default.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\vi\\default.html.twig");
    }
}
