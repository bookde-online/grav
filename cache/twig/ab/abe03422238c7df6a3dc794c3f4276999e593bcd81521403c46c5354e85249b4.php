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

/* vi/blog.html.twig */
class __TwigTemplate_f533ce64ac3765397f2e77760ca7e28e2815ffbf6df4a65f50cfe9b76dad5136 extends \Twig\Template
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
        $this->loadTemplate("partials/header_vi.html.twig", "vi/blog.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"blog-page\">
       ";
        // line 9
        $this->loadTemplate("partials/navigation_vi.html.twig", "vi/blog.html.twig", 9)->display($context);
        // line 10
        echo "
      ";
        // line 39
        echo "
  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Blog</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Trang chủ</a></li>
            <li class=\"current\">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id=\"blog-posts\" class=\"blog-posts section\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <b><i style=\"font-size: 1.7rem;\">Chưa có bài viết nào</i></b>
          <!-- begin item -->
          <!-- <div class=\"col-lg-4\">
            <article class=\"position-relative h-100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/blog/blog-1.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">December 12</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">John Doe</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Politics</span>
                  </div>
                </div>

                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                </p>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </article>
          </div>End post list item -->

        </div>
      </div>
    </section>

    <!-- Blog Pagination Section -->
    <!-- <section id=\"blog-pagination\" class=\"blog-pagination section\">

      <div class=\"container\">
        <div class=\"d-flex justify-content-center\">
          <ul>
            <li><a href=\"#\"><i class=\"bi bi-chevron-left\"></i></a></li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\" class=\"active\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li>...</li>
            <li><a href=\"#\">10</a></li>
            <li><a href=\"#\"><i class=\"bi bi-chevron-right\"></i></a></li>
          </ul>
        </div>
      </div>

    </section>/Blog Pagination Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
     ";
        // line 123
        $this->loadTemplate("partials/footer_vi.html.twig", "vi/blog.html.twig", 123)->display($context);
        // line 124
        echo "
  </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "vi/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 124,  140 => 123,  79 => 65,  59 => 48,  48 => 39,  45 => 10,  43 => 9,  38 => 6,  36 => 5,  30 => 1,);
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

<body class=\"blog-page\">
       {% include 'partials/navigation_vi.html.twig' %}

      {# <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ page.find('/home').url }}\">Trang chủ</a></li>
          <li><a href=\"{{ page.find('/home').url }}#about\">Giới thiệu</a></li>
          <li class=\"dropdown\"><a href=\"{{ page.find('/home').url }}#services\"><span>Dịch vụ</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"{{ page.find('/service-details').url }}\">Trang web khách sạn tùy chỉnh</a></li>
              <li><a href=\"{{ page.find('/service-details-1').url }}\">Hỗ trợ đặt phòng trực tuyến</a></li>
              <li><a href=\"{{ page.find('/service-details-2').url }}\">Giải pháp tối ưu hóa đặt phòng</a></li>
            </ul>
          </li>
          <li><a href=\"{{ page.find('/pricing').url }}\">Giá cả</a></li>
          <li><a href=\"{{ page.find('/howitwork').url }}\">Cách hoạt động</a></li>
          <li><a href=\"{{ page.find('/blog').url }}\" class=\"active\">Blog</a></li>
          <li><a href=\"{{ page.find('/contact').url }}\">Liên hệ</a></li>
          <div class=\"language-dropdown\">
            <button class=\"dropdown-btn\">
              <img src=\"{{ theme_url }}/assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textEng\"><u><b>VI</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\"  id=\"lang\"></i>
            </button>
            <div class=\"dropdown-content\">
                <a href=\"{{ base_url }}/en{{ page.route }}\" class=\"vi\">
                  <img src=\"{{ theme_url }}/assets/img/en.webp\" alt=\"English\"><span class=\"textVi\" style=\"left:-12px;\">EN</span>
                </a>
              </div>
          </div>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav> #}

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Blog</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Trang chủ</a></li>
            <li class=\"current\">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id=\"blog-posts\" class=\"blog-posts section\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <b><i style=\"font-size: 1.7rem;\">Chưa có bài viết nào</i></b>
          <!-- begin item -->
          <!-- <div class=\"col-lg-4\">
            <article class=\"position-relative h-100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"{{ theme_url }}/assets/img/blog/blog-1.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">December 12</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">John Doe</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Politics</span>
                  </div>
                </div>

                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                </p>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </article>
          </div>End post list item -->

        </div>
      </div>
    </section>

    <!-- Blog Pagination Section -->
    <!-- <section id=\"blog-pagination\" class=\"blog-pagination section\">

      <div class=\"container\">
        <div class=\"d-flex justify-content-center\">
          <ul>
            <li><a href=\"#\"><i class=\"bi bi-chevron-left\"></i></a></li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\" class=\"active\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li>...</li>
            <li><a href=\"#\">10</a></li>
            <li><a href=\"#\"><i class=\"bi bi-chevron-right\"></i></a></li>
          </ul>
        </div>
      </div>

    </section>/Blog Pagination Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
     {% include 'partials/footer_vi.html.twig' %}

  </footer>

</body>

</html>", "vi/blog.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\vi\\blog.html.twig");
    }
}
