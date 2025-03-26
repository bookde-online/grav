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

/* modular/about.html.twig */
class __TwigTemplate_2d7967e68ea87bc8c59989b900695931f7c35a3abfba433ae4866e10f61aca29 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/about.html.twig"));

        // line 1
        echo "
<section id=\"about\" class=\"about section\">
      <div class=\"container\">

        <div class=\"row position-relative\">
          <div class=\"circle-bg circle-1\"></div>
          <div class=\"circle-bg circle-2\"></div>

          <div class=\"row align-items-center\">
            <!-- Phần văn bản -->
            <div class=\"col-lg-5 col-md-12 about-text\" style=\"margin-top: 30px;\">
                  <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h2>
                  ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            </div>
            <div class=\"col-lg-1 col-md-12\"></div>
            <!-- Phần hình ảnh -->
            <div class=\"col-lg-6 col-md-12 about-image text-center\">
              <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []), "name", []), "html", null, true);
        echo "\" style=\"width: 100%;\" loading=\"lazy\">
            </div>
        </div>

      </div>

</section><!-- /About Section -->";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  50 => 13,  46 => 12,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<section id=\"about\" class=\"about section\">
      <div class=\"container\">

        <div class=\"row position-relative\">
          <div class=\"circle-bg circle-1\"></div>
          <div class=\"circle-bg circle-2\"></div>

          <div class=\"row align-items-center\">
            <!-- Phần văn bản -->
            <div class=\"col-lg-5 col-md-12 about-text\" style=\"margin-top: 30px;\">
                  <h2>{{ page.header.title }}</h2>
                  {{ page.content|raw }}
            </div>
            <div class=\"col-lg-1 col-md-12\"></div>
            <!-- Phần hình ảnh -->
            <div class=\"col-lg-6 col-md-12 about-image text-center\">
              <img src=\"{{ page.media.images|first.url }}\" alt=\"{{ page.media.images|first.url.name }}\" style=\"width: 100%;\" loading=\"lazy\">
            </div>
        </div>

      </div>

</section><!-- /About Section -->", "modular/about.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\modular\\about.html.twig");
    }
}
