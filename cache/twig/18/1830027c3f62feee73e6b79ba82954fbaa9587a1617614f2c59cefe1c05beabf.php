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

/* en/howItWork.html.twig */
class __TwigTemplate_19c3674c81bed485ed9cd9fd0fb8f0368ae45461ac4e838805e8deb3f688d732 extends \Twig\Template
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
<html lang=\"en\">

<head>
    ";
        // line 5
        $this->loadTemplate("partials/header_en.html.twig", "en/howItWork.html.twig", 5)->display($context);
        // line 6
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/css/howitwork.css\" rel=\"stylesheet\">
</head>

<body class=\"blog-page\">

  ";
        // line 12
        echo "   ";
        $this->loadTemplate("partials/navigation_en.html.twig", "en/howItWork.html.twig", 12)->display($context);
        // line 13
        echo "
  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">How It Works</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
            <li class=\"current\">How It Works</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class=\"container my-5\">
      <h2 class=\"text-center fw-bold\">Simple Steps to Launch Your Hotel Website</h2>
    
      <div class=\"timeline\">
          <!-- Step 1 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                  <h4 style=\"color: #379777;\"><b>Develop a Custom Website</b></h4>
                  <p>Create a custom website with your own domain to attract direct bookings.</p>
                  <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work1.webp\" alt=\"Hotel website development\" >
              </div>
          </div>
  
          <!-- Step 2 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Optimize Direct Bookings</b></h4>
                  <p>Optimize your website to increase direct bookings and reduce commission fees.</p>
                  <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work2.webp\" alt=\"Hotel booking optimization\" >
              </div>
          </div>
  
          <!-- Step 3 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Maximize Online Visibility & Revenue</b></h4>
                  <p>Enhance visibility and maximize bookings with intelligent analytics.</p>
                  <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work3.webp\" alt=\"Increase revenue using services\">
              </div>
          </div>
      </div>
  
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           ";
        // line 66
        $this->loadTemplate("partials/footer_en.html.twig", "en/howItWork.html.twig", 66)->display($context);
        // line 67
        echo "</footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "en/howItWork.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 67,  117 => 66,  104 => 56,  92 => 47,  80 => 38,  61 => 22,  50 => 13,  47 => 12,  38 => 6,  36 => 5,  30 => 1,);
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
<html lang=\"en\">

<head>
    {% include 'partials/header_en.html.twig' %}
      <link href=\"{{ theme_url }}/assets/css/howitwork.css\" rel=\"stylesheet\">
</head>

<body class=\"blog-page\">

  {# Menu #}
   {% include 'partials/navigation_en.html.twig' %}

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">How It Works</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Home</a></li>
            <li class=\"current\">How It Works</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class=\"container my-5\">
      <h2 class=\"text-center fw-bold\">Simple Steps to Launch Your Hotel Website</h2>
    
      <div class=\"timeline\">
          <!-- Step 1 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                  <h4 style=\"color: #379777;\"><b>Develop a Custom Website</b></h4>
                  <p>Create a custom website with your own domain to attract direct bookings.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work1.webp\" alt=\"Hotel website development\" >
              </div>
          </div>
  
          <!-- Step 2 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Optimize Direct Bookings</b></h4>
                  <p>Optimize your website to increase direct bookings and reduce commission fees.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work2.webp\" alt=\"Hotel booking optimization\" >
              </div>
          </div>
  
          <!-- Step 3 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Maximize Online Visibility & Revenue</b></h4>
                  <p>Enhance visibility and maximize bookings with intelligent analytics.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work3.webp\" alt=\"Increase revenue using services\">
              </div>
          </div>
      </div>
  
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           {% include 'partials/footer_en.html.twig' %}
</footer>

</body>

</html>", "en/howItWork.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\en\\howItWork.html.twig");
    }
}
