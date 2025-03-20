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

/* vi/service-details-1.html.twig */
class __TwigTemplate_cc3dd3cea9fd2a1fd9334d2d6a88bb7e3cfd62381c59078b31f48767e2725aa6 extends \Twig\Template
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
        // line 11
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"";
        // line 27
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

<body class=\"service-details-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Trang chủ</a></li>
          <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#about\">Giới thiệu</a></li>
          <li class=\"dropdown\"><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\"><span>Dịch vụ</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\" class=\"active\">Trang web khách sạn tùy chỉnh</a></li>
              <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\">Hỗ trợ đặt phòng trực tuyến</a></li>
              <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\">Giải pháp tối ưu hóa đặt phòng</a></li>
            </ul>
          </li>
          <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/pricing"], "method"), "url", []), "html", null, true);
        echo "\">Giá cả</a></li>
          <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/howitwork"], "method"), "url", []), "html", null, true);
        echo "\">Cách hoạt động</a></li>
          <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "url", []), "html", null, true);
        echo "\">Blog</a></li>
          <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "\">Liên hệ</a></li>
          <div class=\"language-dropdown\">
            <button class=\"dropdown-btn\">
              <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textEng\"><u><b>VI</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\"  id=\"lang\"></i>
            </button>
            <div class=\"dropdown-content\">
                <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/en";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "route", []), "html", null, true);
        echo "\" class=\"vi\">
                  <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/en.webp\" alt=\"English\"><span class=\"textVi\" style=\"left:-12px;\">EN</span>
                </a>
              </div>
          </div>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <div class=\"header-social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
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
        <h1 class=\"mb-2 mb-lg-0\">Chi tiết dịch vụ</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Trang chủ</a></li>
            <li class=\"current\">Chi tiết dịch vụ</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id=\"service-details\" class=\"service-details section\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"services-list\">
              <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\">Trang web khách sạn tùy chỉnh</a>
              <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\" class=\"active\">Hỗ trợ đặt phòng trực tuyến</a>
              <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\">Giải pháp tối ưu hóa đặt phòng</a>
            </div>

            <h4>Đơn giản hóa quy trình đặt phòng trực tuyến của khách sạn bạn một cách dễ dàng.</h4>
            <p>Biến quy trình đặt phòng trực tuyến của khách sạn bạn trở nên nhanh chóng và thuận tiện hơn bao giờ hết. Với giao diện thân thiện, thao tác đơn giản và tích hợp tối ưu, khách hàng có thể đặt phòng chỉ trong vài bước, giúp bạn tăng tỷ lệ chuyển đổi và nâng cao trải nghiệm người dùng.</p>
          </div>

          <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/ser2.webp\" alt=\"Ảnh đặt phòng trực tuyến\" class=\"img-fluid services-img\">
            <h3 style=\"display: flex; justify-content: center; text-align: center; margin: 10px;\">Hỗ trợ đặt phòng trực tuyến</h3>
            <p>
              Biến đổi khả năng đặt phòng của khách sạn bạn với dịch vụ hỗ trợ đặt phòng trực tuyến toàn diện của chúng tôi.
            </p>
            <ul>
              <li><i class=\"bi bi-check-circle\"></i> <span>Dễ dàng quản lý đặt phòng.</span></li>
              <li><i class=\"bi bi-check-circle\"></i> <span>Giao diện thân thiện với người dùng, đảm bảo trải nghiệm liền mạch cho cả nhân viên và khách hàng.</span></li>
              <li><i class=\"bi bi-check-circle\"></i> <span>Hệ thống backend tiên tiến của chúng tôi cung cấp cập nhật và phân tích theo thời gian thực để tối ưu hóa hoạt động, giảm lỗi và nâng cao sự hài lòng của khách hàng.</span></li>
            </ul>
            <p>
              Giải pháp này không chỉ nâng cao nhận diện thương hiệu mà còn tạo điều kiện cho cách đặt phòng trực tiếp, loại bỏ sự phụ thuộc vào các nền tảng bên thứ ba.
            </p>
            <p>
              Với thiết kế trực quan và chức năng tối ưu, thu hút nhiều khách hơn và tăng tỷ lệ lấp đầy. Đầu tư vào tương lai của khách sạn của bạn bằng cách thiết lập một sự hiện diện trực tuyến mạnh mẽ, phù hợp với đối tượng mục tiêu của bạn.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\" style=\"width: 70%; height: auto;\">
          </a>
          
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\">Trang web khách sạn tùy chỉnh</a></li>
            <li><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\">Hỗ trợ đặt phòng trực tuyến</a></li>
            <li><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\">Giải pháp tối ưu hóa đặt phòng</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Liên kết hữu ích</h4>
          <ul>
            <li><a href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Trang chủ</a></li>
            <li><a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#about\">Giới thiệu</a></li>
            <li><a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\">Dịch vụ</a></li>
            <li><a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\">Liên hệ</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">ALLXONE</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>F1, Tòa nhà QCoop, 150 Nguyễn Xí, Phường 26</p>
            <p>Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
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
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

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
        // line 216
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.js\"></script>
  <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/js/main.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "vi/service-details-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 226,  391 => 223,  387 => 222,  383 => 221,  379 => 220,  375 => 219,  371 => 218,  367 => 217,  363 => 216,  321 => 177,  313 => 172,  309 => 171,  305 => 170,  301 => 169,  291 => 162,  287 => 161,  283 => 160,  272 => 152,  268 => 151,  235 => 121,  224 => 113,  220 => 112,  216 => 111,  197 => 95,  168 => 69,  162 => 68,  156 => 65,  150 => 62,  146 => 61,  142 => 60,  138 => 59,  132 => 56,  128 => 55,  124 => 54,  119 => 52,  115 => 51,  111 => 50,  103 => 45,  98 => 43,  79 => 27,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  46 => 12,  42 => 11,  30 => 1,);
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

<body class=\"service-details-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"{{ theme_url }}/assets/img/logo.webp\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ page.find('/home').url }}\">Trang chủ</a></li>
          <li><a href=\"{{ page.find('/home').url }}#about\">Giới thiệu</a></li>
          <li class=\"dropdown\"><a href=\"{{ page.find('/home').url }}#services\"><span>Dịch vụ</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"{{ page.find('/service-details').url }}\" class=\"active\">Trang web khách sạn tùy chỉnh</a></li>
              <li><a href=\"{{ page.find('/service-details-1').url }}\">Hỗ trợ đặt phòng trực tuyến</a></li>
              <li><a href=\"{{ page.find('/service-details-2').url }}\">Giải pháp tối ưu hóa đặt phòng</a></li>
            </ul>
          </li>
          <li><a href=\"{{ page.find('/pricing').url }}\">Giá cả</a></li>
          <li><a href=\"{{ page.find('/howitwork').url }}\">Cách hoạt động</a></li>
          <li><a href=\"{{ page.find('/blog').url }}\">Blog</a></li>
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
      </nav>

      <div class=\"header-social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
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
        <h1 class=\"mb-2 mb-lg-0\">Chi tiết dịch vụ</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Trang chủ</a></li>
            <li class=\"current\">Chi tiết dịch vụ</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id=\"service-details\" class=\"service-details section\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"services-list\">
              <a href=\"{{ page.find('/service-details').url }}\">Trang web khách sạn tùy chỉnh</a>
              <a href=\"{{ page.find('/service-details-1').url }}\" class=\"active\">Hỗ trợ đặt phòng trực tuyến</a>
              <a href=\"{{ page.find('/service-details-2').url }}\">Giải pháp tối ưu hóa đặt phòng</a>
            </div>

            <h4>Đơn giản hóa quy trình đặt phòng trực tuyến của khách sạn bạn một cách dễ dàng.</h4>
            <p>Biến quy trình đặt phòng trực tuyến của khách sạn bạn trở nên nhanh chóng và thuận tiện hơn bao giờ hết. Với giao diện thân thiện, thao tác đơn giản và tích hợp tối ưu, khách hàng có thể đặt phòng chỉ trong vài bước, giúp bạn tăng tỷ lệ chuyển đổi và nâng cao trải nghiệm người dùng.</p>
          </div>

          <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <img src=\"{{ theme_url }}/assets/img/services/ser2.webp\" alt=\"Ảnh đặt phòng trực tuyến\" class=\"img-fluid services-img\">
            <h3 style=\"display: flex; justify-content: center; text-align: center; margin: 10px;\">Hỗ trợ đặt phòng trực tuyến</h3>
            <p>
              Biến đổi khả năng đặt phòng của khách sạn bạn với dịch vụ hỗ trợ đặt phòng trực tuyến toàn diện của chúng tôi.
            </p>
            <ul>
              <li><i class=\"bi bi-check-circle\"></i> <span>Dễ dàng quản lý đặt phòng.</span></li>
              <li><i class=\"bi bi-check-circle\"></i> <span>Giao diện thân thiện với người dùng, đảm bảo trải nghiệm liền mạch cho cả nhân viên và khách hàng.</span></li>
              <li><i class=\"bi bi-check-circle\"></i> <span>Hệ thống backend tiên tiến của chúng tôi cung cấp cập nhật và phân tích theo thời gian thực để tối ưu hóa hoạt động, giảm lỗi và nâng cao sự hài lòng của khách hàng.</span></li>
            </ul>
            <p>
              Giải pháp này không chỉ nâng cao nhận diện thương hiệu mà còn tạo điều kiện cho cách đặt phòng trực tiếp, loại bỏ sự phụ thuộc vào các nền tảng bên thứ ba.
            </p>
            <p>
              Với thiết kế trực quan và chức năng tối ưu, thu hút nhiều khách hơn và tăng tỷ lệ lấp đầy. Đầu tư vào tương lai của khách sạn của bạn bằng cách thiết lập một sự hiện diện trực tuyến mạnh mẽ, phù hợp với đối tượng mục tiêu của bạn.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center\">
            <img src=\"{{ theme_url }}/assets/img/logo.webp\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\" style=\"width: 70%; height: auto;\">
          </a>
          
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"{{ page.find('/service-details').url }}\">Trang web khách sạn tùy chỉnh</a></li>
            <li><a href=\"{{ page.find('/service-details-1').url }}\">Hỗ trợ đặt phòng trực tuyến</a></li>
            <li><a href=\"{{ page.find('/service-details-2').url }}\">Giải pháp tối ưu hóa đặt phòng</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Liên kết hữu ích</h4>
          <ul>
            <li><a href=\"{{ page.find('/home').url }}\">Trang chủ</a></li>
            <li><a href=\"{{ page.find('/home').url }}#about\">Giới thiệu</a></li>
            <li><a href=\"{{ page.find('/home').url }}#services\">Dịch vụ</a></li>
            <li><a href=\"{{ page.find('/contact').url }}#services\">Liên hệ</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">ALLXONE</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>F1, Tòa nhà QCoop, 150 Nguyễn Xí, Phường 26</p>
            <p>Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
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
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

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

</html>", "vi/service-details-1.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\vi\\service-details-1.html.twig");
    }
}
