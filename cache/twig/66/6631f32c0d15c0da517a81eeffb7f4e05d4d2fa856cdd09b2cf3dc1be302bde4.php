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

/* vi/howItWork.html.twig */
class __TwigTemplate_3f45dea8b1a3e253be31103e64018ba22c4fb0b6c2613993b0054b408142ac97 extends \Twig\Template
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
        $this->loadTemplate("partials/header_vi.html.twig", "vi/howItWork.html.twig", 5)->display($context);
        // line 6
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets\\css\\howitwork.css\">

</head>

<body class=\"blog-page\">

      ";
        // line 12
        $this->loadTemplate("partials/navigation_vi.html.twig", "vi/howItWork.html.twig", 12)->display($context);
        // line 13
        echo "
  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Cách hoạt động</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Trang chủ</a></li>
            <li class=\"current\">Cách hoạt động</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class=\"container my-5\">
      <h2 class=\"text-center fw-bold\">Các bước đơn giản để khởi chạy trang web của khách sạn bạn</h2>
    
      <div class=\"timeline\">
          <!-- Bước 1 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                  <h4 style=\"color: #379777;\"><b>Phát triển trang web tùy chỉnh</b></h4>
                  <p>Tạo một trang web tùy chỉnh với tên miền riêng của bạn để thu hút đặt phòng trực tiếp.</p>
                  <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work1.webp\" alt=\"Ảnh phát triển website khách sạn\" style=\"width: 50%; border-radius: 20px;\">
              </div>
          </div>
  
          <!-- Bước 2 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Tối ưu hóa đặt phòng trực tiếp</b></h4>
                  <p>Tối ưu hóa trang web của bạn để tăng đặt phòng trực tiếp và giảm phí hoa hồng.</p>
                  <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work2.webp\" alt=\"Ảnh đặt phòng khách sạn\" style=\"width: 50%; border-radius: 20px;\">
              </div>
          </div>
  
          <!-- Bước 3 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Tối đa hóa khả năng hiển thị trực tuyến & Doanh thu</b></h4>
                  <p>Tăng khả năng hiển thị và tối đa hóa đặt phòng với phân tích thông minh.</p>
                  <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work3.webp\" alt=\"Ảnh tăng doanh thu khi sử dụng dịch vụ\" style=\"width: 50%; border-radius: 20px;\">
              </div>
          </div>
      </div>
  
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
         ";
        // line 66
        $this->loadTemplate("partials/footer_vi.html.twig", "vi/howItWork.html.twig", 66)->display($context);
        // line 67
        echo "
  </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "vi/howItWork.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 67,  117 => 66,  104 => 56,  92 => 47,  80 => 38,  61 => 22,  50 => 13,  48 => 12,  38 => 6,  36 => 5,  30 => 1,);
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
  <link rel=\"stylesheet\" href=\"{{ theme_url }}/assets\\css\\howitwork.css\">

</head>

<body class=\"blog-page\">

      {% include 'partials/navigation_vi.html.twig' %}

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Cách hoạt động</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Trang chủ</a></li>
            <li class=\"current\">Cách hoạt động</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class=\"container my-5\">
      <h2 class=\"text-center fw-bold\">Các bước đơn giản để khởi chạy trang web của khách sạn bạn</h2>
    
      <div class=\"timeline\">
          <!-- Bước 1 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                  <h4 style=\"color: #379777;\"><b>Phát triển trang web tùy chỉnh</b></h4>
                  <p>Tạo một trang web tùy chỉnh với tên miền riêng của bạn để thu hút đặt phòng trực tiếp.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work1.webp\" alt=\"Ảnh phát triển website khách sạn\" style=\"width: 50%; border-radius: 20px;\">
              </div>
          </div>
  
          <!-- Bước 2 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Tối ưu hóa đặt phòng trực tiếp</b></h4>
                  <p>Tối ưu hóa trang web của bạn để tăng đặt phòng trực tiếp và giảm phí hoa hồng.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work2.webp\" alt=\"Ảnh đặt phòng khách sạn\" style=\"width: 50%; border-radius: 20px;\">
              </div>
          </div>
  
          <!-- Bước 3 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Tối đa hóa khả năng hiển thị trực tuyến & Doanh thu</b></h4>
                  <p>Tăng khả năng hiển thị và tối đa hóa đặt phòng với phân tích thông minh.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work3.webp\" alt=\"Ảnh tăng doanh thu khi sử dụng dịch vụ\" style=\"width: 50%; border-radius: 20px;\">
              </div>
          </div>
      </div>
  
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
         {% include 'partials/footer_vi.html.twig' %}

  </footer>

</body>

</html>", "vi/howItWork.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\vi\\howItWork.html.twig");
    }
}
