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

/* en/blog.html.twig */
class __TwigTemplate_b81e6dc55469089ab7cb8568dee3cdedd055c51f0c65905a8e2de017952eebfb extends \Twig\Template
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
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Thiết Kế Website Khách Sạn - Tối Ưu Đặt Phòng & Tăng Doanh Thu</title>
  <meta name=\"description\" content=\"Dịch vụ thiết kế website khách sạn chuyên nghiệp, tối ưu SEO, hỗ trợ đặt phòng & tăng tỉ lệ chuyển đổi. Giải pháp tối ưu giúp chủ khách sạn vận hành hiệu quả.\">
  <meta name=\"keywords\" content=\"thiết kế website khách sạn, làm web khách sạn, xây dựng website khách sạn, đặt phòng trực tuyến, tối ưu SEO khách sạn, giải pháp website khách sạn\">

  <!-- Favicons -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/css/main.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"blog-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
          <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#about\">About</a></li>
          <li class=\"dropdown\"><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\"><span>Services</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\">Website customization</a></li>
              <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\">Online booking support</a></li>
              <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\">Booking optimization solution</a></li>
            </ul>
          </li>
          <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/pricing"], "method"), "url", []), "html", null, true);
        echo "\">Price</a></li>
          <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/howitwork"], "method"), "url", []), "html", null, true);
        echo "\">How it works</a></li>
          <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "url", []), "html", null, true);
        echo "\" class=\"active\">Blog</a></li>
          <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "\">Contact</a></li>
          <div class=\"language-dropdown\">
            <button class=\"dropdown-btn\">
              <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/en.webp\" alt=\"English\"><span class=\"textEng\"><u><b>EN</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i></i>
            </button>
            <div class=\"dropdown-content\">
                <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["page"] ?? null), "url", []), ["/en" => "/vi"]), "html", null, true);
        echo "\" class=\"vi\">
                  <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textVi\">VI</span>
                </a>
              </div>
          </div>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <div class=\"header-social-links\">
        
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>

    </div>
  </header>

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Blog</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
            <li class=\"current\">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id=\"blog-posts\" class=\"blog-posts section\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <b><i style=\"font-size: 1.7rem;\">No posts yet</i></b>
          <!-- begin item -->
          <!-- <div class=\"col-lg-4\">
            <article class=\"position-relative h-100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"";
        // line 113
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
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"BookDe Logo - Hotel Website Design Services\" >
          </a>
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\">Custom Hotel Website</a></li>
            <li><a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\">Online Booking Support</a></li>
            <li><a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\">Booking Optimization Solutions</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#about\">About Us</a></li>
            <li><a href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\">Services</a></li>
            <li><a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\">Contact</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">ALLXONE</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>F1, QCoop Building, 150 Nguyen Xi, Ward 26</p>
            <p>Binh Thanh District, Ho Chi Minh City, Vietnam</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+84 523 734 193</span></p>
            <p><strong>Email:</strong> <span>info@bookde.vn</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">BookDe.vn</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        Designed by <a href=\"#\">AllXone</a>
      </div>
    </div>
</footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.js\"></script>
  <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/js/main.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "en/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 243,  397 => 240,  393 => 239,  389 => 238,  385 => 237,  381 => 236,  377 => 235,  373 => 234,  369 => 233,  332 => 199,  324 => 194,  320 => 193,  316 => 192,  312 => 191,  302 => 184,  298 => 183,  294 => 182,  284 => 175,  280 => 174,  216 => 113,  196 => 96,  167 => 70,  163 => 69,  157 => 66,  151 => 63,  147 => 62,  143 => 61,  139 => 60,  133 => 57,  129 => 56,  125 => 55,  120 => 53,  116 => 52,  112 => 51,  104 => 46,  99 => 44,  80 => 28,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  47 => 13,  43 => 12,  30 => 1,);
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
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Thiết Kế Website Khách Sạn - Tối Ưu Đặt Phòng & Tăng Doanh Thu</title>
  <meta name=\"description\" content=\"Dịch vụ thiết kế website khách sạn chuyên nghiệp, tối ưu SEO, hỗ trợ đặt phòng & tăng tỉ lệ chuyển đổi. Giải pháp tối ưu giúp chủ khách sạn vận hành hiệu quả.\">
  <meta name=\"keywords\" content=\"thiết kế website khách sạn, làm web khách sạn, xây dựng website khách sạn, đặt phòng trực tuyến, tối ưu SEO khách sạn, giải pháp website khách sạn\">

  <!-- Favicons -->
  <link href=\"{{ theme_url }}/assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"{{ theme_url }}/assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ theme_url }}/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"{{ theme_url }}/assets/css/main.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"blog-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"{{ theme_url }}/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ page.find('/home').url }}\">Home</a></li>
          <li><a href=\"{{ page.find('/home').url }}#about\">About</a></li>
          <li class=\"dropdown\"><a href=\"{{ page.find('/home').url }}#services\"><span>Services</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"{{ page.find('/service-details').url }}\">Website customization</a></li>
              <li><a href=\"{{ page.find('/service-details-1').url }}\">Online booking support</a></li>
              <li><a href=\"{{ page.find('/service-details-2').url }}\">Booking optimization solution</a></li>
            </ul>
          </li>
          <li><a href=\"{{ page.find('/pricing').url }}\">Price</a></li>
          <li><a href=\"{{ page.find('/howitwork').url }}\">How it works</a></li>
          <li><a href=\"{{ page.find('/blog').url }}\" class=\"active\">Blog</a></li>
          <li><a href=\"{{ page.find('/contact').url }}\">Contact</a></li>
          <div class=\"language-dropdown\">
            <button class=\"dropdown-btn\">
              <img src=\"{{ theme_url }}/assets/img/en.webp\" alt=\"English\"><span class=\"textEng\"><u><b>EN</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i></i>
            </button>
            <div class=\"dropdown-content\">
                <a href=\"{{ page.url|replace({'/en': '/vi'}) }}\" class=\"vi\">
                  <img src=\"{{ theme_url }}/assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textVi\">VI</span>
                </a>
              </div>
          </div>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <div class=\"header-social-links\">
        
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>

    </div>
  </header>

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Blog</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Home</a></li>
            <li class=\"current\">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id=\"blog-posts\" class=\"blog-posts section\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <b><i style=\"font-size: 1.7rem;\">No posts yet</i></b>
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
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center\">
            <img src=\"{{ theme_url }}/assets/img/logo.webp\" alt=\"BookDe Logo - Hotel Website Design Services\" >
          </a>
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"{{ page.find('/service-details').url }}\">Custom Hotel Website</a></li>
            <li><a href=\"{{ page.find('/service-details-1').url }}\">Online Booking Support</a></li>
            <li><a href=\"{{ page.find('/service-details-2').url }}\">Booking Optimization Solutions</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"{{ page.find('/home').url }}\">Home</a></li>
            <li><a href=\"{{ page.find('/home').url }}#about\">About Us</a></li>
            <li><a href=\"{{ page.find('/home').url }}#services\">Services</a></li>
            <li><a href=\"{{ page.find('/contact').url }}#services\">Contact</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">ALLXONE</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>F1, QCoop Building, 150 Nguyen Xi, Ward 26</p>
            <p>Binh Thanh District, Ho Chi Minh City, Vietnam</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+84 523 734 193</span></p>
            <p><strong>Email:</strong> <span>info@bookde.vn</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">BookDe.vn</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        Designed by <a href=\"#\">AllXone</a>
      </div>
    </div>
</footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"{{ theme_url }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/aos/aos.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"{{ theme_url }}/assets/js/main.js\"></script>

</body>

</html>", "en/blog.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\en\\blog.html.twig");
    }
}
