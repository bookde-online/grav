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

/* gia-ca.html.twig */
class __TwigTemplate_d38f3610b909596ccd15b0cd490dfcbc02c18626c8995b89ca8683099946fd29 extends \Twig\Template
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
        echo "/assets/img/favicon.png\" rel=\"icon\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

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

<body class=\"pricing-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.png\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"index.html\">Trang chủ</a></li>
          <li><a href=\"about.html\">Giới thiệu</a></li>
          <li class=\"dropdown\"><a href=\"services.html\"><span>Dịch vụ</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"service-details.html\">Trang web tùy chỉnh</a></li>
              <li><a href=\"service-details-1.html\">Hỗ trợ đặt phòng trực tuyến</a></li>
              <li><a href=\"service-details-2.html\">Giải pháp tối ưu hóa đặt phòng</a></li>
            </ul>
          </li>
          <li><a href=\"pricing.html\" class=\"active\">Giá cả</a></li>
          <li><a href=\"howItWork.html\">Cách hoạt động</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li><a href=\"contact.html\">Liên hệ</a></li>
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
        <h1 class=\"mb-2 mb-lg-0\">Giá cả</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"index.html\">Trang chủ</a></li>
            <li class=\"current\">Giá cả</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3>Website khách sạn tùy chỉnh</h3>
              <p class=\"description\">Xây dựng sự hiện diện trực tuyến độc đáo của khách sạn bạn.</p>
              <h4><sup>\$</sup>0.99<span> / ngày</span></h4>
              <a href=\"contact.html\" class=\"cta-btn\">Liên hệ ngay</a>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Biến đổi sự hiện diện trực tuyến của khách sạn bạn với dịch vụ phát triển trang web tùy chỉnh.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tạo một trang web phù hợp với thương hiệu của bạn.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Toàn quyền kiểm soát đặt phòng và tương tác khách hàng</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Dễ sử dụng-đảm bảo thiết lập nhanh chóng, kết nối trực tiếp với khách và tăng hiệu quả đặt phòng.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nổi bật trong thị trường cạnh tranh với một trang web cá nhân hóa, thúc đẩy nhiều đặt phòng trực tiếp hơn và tối đa hóa doanh thu.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Sở hữu tên miền của bạn và nâng cao thành công của khách sạn ngay hôm nay!</span></li>
                
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
            <div class=\"pricing-item featured\">
              <h3>Dịch vụ hỗ trợ đặt phòng trực tuyến</h3>
              <p class=\"description\">Đơn giản hóa quy trình đặt phòng trực tuyến của khách sạn bạn.</p>
              <h4><sup>\$</sup>1.99<span> / ngày</span></h4>
              <a href=\"contact.html\" class=\"cta-btn\">Liên hệ ngay</a>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Nâng cao quy trình đặt phòng của khách sạn bạn với dịch vụ hỗ trợ toàn diện của chúng tôi.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Hỗ trợ tối ưu hóa hệ thống đặt phòng để tăng số lượng đặt phòng trực tiếp và sự hài lòng của khách hàng.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Đội ngũ chuyên gia giúp bạn thiết lập và quản lý các hệ thống đặt phòng hiệu quả</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Đảm bảo trải nghiệm mượt mà từ duyệt web đến đặt phòng.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Giảm sự phụ thuộc vào các nền tảng bên thứ ba</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tiết kiệm chi phí hoa hồng</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tăng doanh thu</span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
            <div class=\"pricing-item\">
              <h3>Sở hữu tên miền cho khách sạn</h3>
              <p class=\"description\">Đảm bảo quyền sở hữu và bảo mật cho tên miền độc quyền của khách sạn bạn</p>
              <h4><sup>\$</sup>2.99<span> / ngày</span></h4>
              <a href=\"contact.html\" class=\"cta-btn\">Liên hệ ngay</a>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Kiểm soát danh tính trực tuyến của khách sạn bạn với dịch vụ sở hữu tên miền của chúng tôi.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tên miền cá nhân hóa giúp khách sạn của bạn thiết lập sự hiện diện thương hiệu mạnh mẽ.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tăng cường độ tin cậy, tạo sự an tâm cho khách hàng khi đặt phòng.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tên miền riêng giúp khách hàng dễ dàng tìm kiếm và đặt phòng trực tiếp, không cần qua bên trung gian.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nổi bật so với đối thủ cạnh tranh</span></li>
                <li><i class=\"bi bi-check\"></i> <span>xây dựng niềm tin với khách hàng tiềm năng bằng cách bảo mật tên miền của bạn ngay hôm nay!</span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.png\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\" style=\"width: 70%; height: auto;\">
          </a>
          
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"service-details.html\">Trang web khách sạn tùy chỉnh</a></li>
            <li><a href=\"service-details-1.html\">Hỗ trợ đặt phòng trực tuyến</a></li>
            <li><a href=\"service-details-2.html\">Giải pháp tối ưu hóa đặt phòng</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Liên kết hữu ích</h4>
          <ul>
            <li><a href=\"index.html\">Trang chủ</a></li>
            <li><a href=\"about.html\">Giới thiệu</a></li>
            <li><a href=\"services.html\">Dịch vụ</a></li>
            <li><a href=\"contact.html\">Liên hệ</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">ALLXONE</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>F1, Tòa nhà QCoop, 150 Nguyễn Xí, Phường 26</p>
            <p>Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
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
        // line 231
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.js\"></script>
  <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/js/main.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "gia-ca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 241,  320 => 238,  316 => 237,  312 => 236,  308 => 235,  304 => 234,  300 => 233,  296 => 232,  292 => 231,  224 => 166,  101 => 46,  80 => 28,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  47 => 13,  43 => 12,  30 => 1,);
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
  <link href=\"{{ theme_url }}/assets/img/favicon.png\" rel=\"icon\">
  <link href=\"{{ theme_url }}/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

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

<body class=\"pricing-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"{{ theme_url }}/assets/img/logo.png\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"index.html\">Trang chủ</a></li>
          <li><a href=\"about.html\">Giới thiệu</a></li>
          <li class=\"dropdown\"><a href=\"services.html\"><span>Dịch vụ</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"service-details.html\">Trang web tùy chỉnh</a></li>
              <li><a href=\"service-details-1.html\">Hỗ trợ đặt phòng trực tuyến</a></li>
              <li><a href=\"service-details-2.html\">Giải pháp tối ưu hóa đặt phòng</a></li>
            </ul>
          </li>
          <li><a href=\"pricing.html\" class=\"active\">Giá cả</a></li>
          <li><a href=\"howItWork.html\">Cách hoạt động</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li><a href=\"contact.html\">Liên hệ</a></li>
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
        <h1 class=\"mb-2 mb-lg-0\">Giá cả</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"index.html\">Trang chủ</a></li>
            <li class=\"current\">Giá cả</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3>Website khách sạn tùy chỉnh</h3>
              <p class=\"description\">Xây dựng sự hiện diện trực tuyến độc đáo của khách sạn bạn.</p>
              <h4><sup>\$</sup>0.99<span> / ngày</span></h4>
              <a href=\"contact.html\" class=\"cta-btn\">Liên hệ ngay</a>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Biến đổi sự hiện diện trực tuyến của khách sạn bạn với dịch vụ phát triển trang web tùy chỉnh.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tạo một trang web phù hợp với thương hiệu của bạn.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Toàn quyền kiểm soát đặt phòng và tương tác khách hàng</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Dễ sử dụng-đảm bảo thiết lập nhanh chóng, kết nối trực tiếp với khách và tăng hiệu quả đặt phòng.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nổi bật trong thị trường cạnh tranh với một trang web cá nhân hóa, thúc đẩy nhiều đặt phòng trực tiếp hơn và tối đa hóa doanh thu.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Sở hữu tên miền của bạn và nâng cao thành công của khách sạn ngay hôm nay!</span></li>
                
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
            <div class=\"pricing-item featured\">
              <h3>Dịch vụ hỗ trợ đặt phòng trực tuyến</h3>
              <p class=\"description\">Đơn giản hóa quy trình đặt phòng trực tuyến của khách sạn bạn.</p>
              <h4><sup>\$</sup>1.99<span> / ngày</span></h4>
              <a href=\"contact.html\" class=\"cta-btn\">Liên hệ ngay</a>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Nâng cao quy trình đặt phòng của khách sạn bạn với dịch vụ hỗ trợ toàn diện của chúng tôi.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Hỗ trợ tối ưu hóa hệ thống đặt phòng để tăng số lượng đặt phòng trực tiếp và sự hài lòng của khách hàng.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Đội ngũ chuyên gia giúp bạn thiết lập và quản lý các hệ thống đặt phòng hiệu quả</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Đảm bảo trải nghiệm mượt mà từ duyệt web đến đặt phòng.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Giảm sự phụ thuộc vào các nền tảng bên thứ ba</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tiết kiệm chi phí hoa hồng</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tăng doanh thu</span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
            <div class=\"pricing-item\">
              <h3>Sở hữu tên miền cho khách sạn</h3>
              <p class=\"description\">Đảm bảo quyền sở hữu và bảo mật cho tên miền độc quyền của khách sạn bạn</p>
              <h4><sup>\$</sup>2.99<span> / ngày</span></h4>
              <a href=\"contact.html\" class=\"cta-btn\">Liên hệ ngay</a>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Kiểm soát danh tính trực tuyến của khách sạn bạn với dịch vụ sở hữu tên miền của chúng tôi.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tên miền cá nhân hóa giúp khách sạn của bạn thiết lập sự hiện diện thương hiệu mạnh mẽ.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tăng cường độ tin cậy, tạo sự an tâm cho khách hàng khi đặt phòng.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Tên miền riêng giúp khách hàng dễ dàng tìm kiếm và đặt phòng trực tiếp, không cần qua bên trung gian.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nổi bật so với đối thủ cạnh tranh</span></li>
                <li><i class=\"bi bi-check\"></i> <span>xây dựng niềm tin với khách hàng tiềm năng bằng cách bảo mật tên miền của bạn ngay hôm nay!</span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"{{ theme_url }}/assets/img/logo.png\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\" style=\"width: 70%; height: auto;\">
          </a>
          
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"service-details.html\">Trang web khách sạn tùy chỉnh</a></li>
            <li><a href=\"service-details-1.html\">Hỗ trợ đặt phòng trực tuyến</a></li>
            <li><a href=\"service-details-2.html\">Giải pháp tối ưu hóa đặt phòng</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Liên kết hữu ích</h4>
          <ul>
            <li><a href=\"index.html\">Trang chủ</a></li>
            <li><a href=\"about.html\">Giới thiệu</a></li>
            <li><a href=\"services.html\">Dịch vụ</a></li>
            <li><a href=\"contact.html\">Liên hệ</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">ALLXONE</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>F1, Tòa nhà QCoop, 150 Nguyễn Xí, Phường 26</p>
            <p>Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
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

</html>", "gia-ca.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\vi\\gia-ca.html.twig");
    }
}
