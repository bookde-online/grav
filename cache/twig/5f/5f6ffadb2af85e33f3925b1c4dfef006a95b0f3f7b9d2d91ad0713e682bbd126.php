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

/* vi/home.html.twig */
class __TwigTemplate_91b3a61707b17b34144982338814fdc6d78ff5f999f9f1f817a10e3497e5add9 extends \Twig\Template
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
        $this->loadTemplate("partials/header_vi.html.twig", "vi/home.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"index-page\">

       ";
        // line 10
        $this->loadTemplate("partials/navigation_vi.html.twig", "vi/home.html.twig", 10)->display($context);
        // line 11
        echo "
  <main class=\"main\">

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">

      <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

        <div class=\"carousel-item active\">
          <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/hero-carousel/banner1.webp\" alt=\"Xây dựng thương hiệu cho khách sạn\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Thương Hiệu Của Bạn</h2>
            <p>Tạo Trang Web Đặt Phòng Riêng Cho Khách Sạn Của Bạn</p>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"btn-get-started\">Dịch vụ</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/hero-carousel/banner2.webp\" alt=\"Xây dựng tên miền riêng cho bạn\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Tên Miền Của Bạn</h2>
            <p>Kiểm Soát Hoàn Toàn Với Trang Web Tùy Chỉnh – Không Chia Sẻ Hệ Thống</p>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"btn-get-started\">Dịch vụ</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/hero-carousel/banner3.webp\" alt=\"Xây dựng tệp khách hàng cho khách sạn của bạn\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Khách Hàng Của Bạn</h2>
            <p>Kết Nối Trực Tiếp Với Khách Hàng – Không Phí Hoa Hồng</p>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"btn-get-started\">Dịch vụ</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
        </a>

        <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
        </a>

        <ol class=\"carousel-indicators\"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\">

        <div class=\"row position-relative\">
          <div class=\"circle-bg circle-1\"></div>
          <div class=\"circle-bg circle-2\"></div>

          <div class=\"row align-items-center\">
            <!-- Phần văn bản -->
            <div class=\"col-lg-6 col-md-12 about-text\" style=\"margin-top: 30px;\">
                <h2>Về chúng tôi!</h2>
                <h5 style=\"font-weight: 700;\">Tăng cường đặt phòng bằng trang web khách sạn của riêng bạn</h4>
                <p>
                    Tại <strong>BookDe.vn</strong>, chúng tôi trao quyền cho các khách sạn tại Việt Nam để kiểm soát hoàn toàn sự hiện diện trực tuyến của họ. Dịch vụ của chúng tôi cho phép bạn tạo một trang web tùy chỉnh với tên miền của riêng bạn, cho phép bạn tương tác trực tiếp với khách hàng.
                </p>
                <h5 style=\"font-weight: 700;\">Một nền tảng, quản lý tất cả các khách sạn, khách hàng và giao dịch của bạn.</h5>
                <p>
                  Kiểm soát tất cả các khách sạn và dữ liệu của bạn chỉ bằng một trang web. Quản lý dữ liệu của khách hàng, đặt phòng, phòng, khách sạn,... Tạo sự kiện, phiếu giảm giá trong web. <br><br>
                  Việc sở hữu trang web khách sạn cho riêng bạn không chỉ giúp khách hàng dễ dàng tìm thấy bạn trên internet mà còn tối ưu hóa trải nghiệm đặt phòng trực tuyến, giúp việc quản lý trở nên đơn giản, hiệu quả hơn, tiết kiệm thời gian và tối ưu doanh thu một cách tốt nhất.
                </p>
            </div>

            <!-- Phần hình ảnh -->
            <div class=\"col-lg-6 col-md-12 about-image text-center\">
                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/about.webp\" alt=\"Hotel Booking Website\" style=\"width: 100%;\">
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id=\"services\" class=\"services section light-background\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <h2 class=\"inner-title\"><b>Nâng cao khách sạn của bạn trực tuyến </b></h2>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                </svg>
                <i class=\"bi bi-easel\"></i>
                
              </div>
              <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\" class=\"stretched-link\">
                <h3>Trang web khách sạn tùy chỉnh</h3>
              </a>
              <p>Tạo một nhận diện trực tuyến độc đáo với trang web tùy chỉnh.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"service-item item-cyan position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426\"></path>
                </svg>
                <i class=\"bi bi-broadcast\"></i>
                
              </div>
              <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\" class=\"stretched-link\">
                <h3>Hỗ trợ đặt phòng trực tuyến</h3>
              </a>
              <p>Đơn giản hóa quy trình đặt phòng trực tuyến của khách sạn bạn một cách dễ dàng.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-item item-teal position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174\"></path>
                </svg>
                <i class=\"bi bi-activity\"></i>
              </div>
              <a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\" class=\"stretched-link\">
                <h3>Giải pháp tối ưu hóa đặt phòng</h3>
              </a>
              <p>Tối đa hóa số lượng đặt phòng của bạn với các công cụ tối ưu hóa của chúng tôi.</p>
            </div>
          </div><!-- End Service Item -->
        </div>
        <hr>
        <h3 style=\"font-size: 20px; font-family: inter; display: flex; justify-content: center; margin-top: 50px; text-align: center;\"><i>Khởi chạy trang web đặt phòng của riêng bạn hôm nay!</i></h3>

      </div>

    </section><!-- /Services Section -->

    <!-- benefit -->
    <section class=\"benefits-section text-center\">
      <div class=\"container\">
        <div class=\"benefits-section\">
            <!-- Phần văn bản -->
            <div class=\"benefits-text\">
                <h2><strong>Lợi ích khi sử dụng dịch vụ của chúng tôi</strong></h2>
                <p>Giúp khách sạn của bạn hoạt động trơn tru hơn, tiết kiệm thời gian và tối ưu hóa doanh thu với nền tảng thiết kế website hiện đại, chuyên nghiệp.</p>
            </div>
    
            <!-- Card hình ảnh -->
            <div class=\"card-wrapper\">
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/professional.webp\" alt=\"Chuyên nghiệp\">
                    </div>
                    <div class=\"text-overlay\">Chuyên nghiệp</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/modern.webp\" alt=\"Hiện đại\">
                    </div>
                    <div class=\"text-overlay\">Hiện đại</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/effective.webp\" alt=\"Hiệu quả\">
                    </div>
                    <div class=\"text-overlay\">Hiệu quả</div>
                </div>
            </div>
        </div>
    </div>
  </section>  

  <section id=\"team\" class=\"team section light-background\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Ai sử dụng dịch vụ của chúng tôi?</h2>
    </div><!-- End Section Title -->

    <div class=\"container\">

      <div class=\"row gy-4\">

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/about/hotel.webp\" class=\"img-fluid\" alt=\"Ảnh phòng khách sạn\">
              <h4 class=\"text-overlay\">HOTELS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/about/spa.webp\" class=\"img-fluid\" alt=\"Ảnh dịch vụ spa\">
              <h4 class=\"text-overlay\">SPA</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/about/tours.webp\" class=\"img-fluid\" alt=\"Ảnh dịch vụ du lịch\">
              <h4 class=\"text-overlay\">TOURS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->

  
  <section>
    <div class=\"container-fluid custom-section\">
      <div class=\"container\">
          <div class=\"row align-items-center flex-md-row flex-column-reverse\">
            <div class=\"col-md-6 text-center\">
              <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/demo.webp\" alt=\"Hotel Launch\" class=\"img-fluid w-100 rounded\">
            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-5 text-center text-md-start\">
                <h2 id=\"launch\">Bạn đã sẵn sàng đưa khách sạn của mình lên web chưa?</h2>
                <a href=\"#\" class=\"demo-btn\">Xem bản demo!</a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <div class=\"text-center mt-4\" style=\"margin-bottom: 40px; margin-top: 5px;\" >
    <a href=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"btn btn-contact\">Liên hệ ngay</a>
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
         ";
        // line 265
        $this->loadTemplate("partials/footer_vi.html.twig", "vi/home.html.twig", 265)->display($context);
        // line 266
        echo "
  </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "vi/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 266,  356 => 265,  347 => 259,  331 => 246,  310 => 228,  298 => 219,  286 => 210,  260 => 187,  250 => 180,  240 => 173,  209 => 145,  191 => 130,  172 => 114,  141 => 86,  94 => 42,  87 => 38,  79 => 33,  72 => 29,  64 => 24,  57 => 20,  46 => 11,  44 => 10,  38 => 6,  36 => 5,  30 => 1,);
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

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">

      <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

        <div class=\"carousel-item active\">
          <img src=\"{{ theme_url }}/assets/img/hero-carousel/banner1.webp\" alt=\"Xây dựng thương hiệu cho khách sạn\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Thương Hiệu Của Bạn</h2>
            <p>Tạo Trang Web Đặt Phòng Riêng Cho Khách Sạn Của Bạn</p>
            <a href=\"{{ page.find('/home').url }}#services\" class=\"btn-get-started\">Dịch vụ</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"{{ theme_url }}/assets/img/hero-carousel/banner2.webp\" alt=\"Xây dựng tên miền riêng cho bạn\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Tên Miền Của Bạn</h2>
            <p>Kiểm Soát Hoàn Toàn Với Trang Web Tùy Chỉnh – Không Chia Sẻ Hệ Thống</p>
            <a href=\"{{ page.find('/home').url }}#services\" class=\"btn-get-started\">Dịch vụ</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"{{ theme_url }}/assets/img/hero-carousel/banner3.webp\" alt=\"Xây dựng tệp khách hàng cho khách sạn của bạn\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Khách Hàng Của Bạn</h2>
            <p>Kết Nối Trực Tiếp Với Khách Hàng – Không Phí Hoa Hồng</p>
            <a href=\"{{ page.find('/home').url }}#services\" class=\"btn-get-started\">Dịch vụ</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
        </a>

        <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
        </a>

        <ol class=\"carousel-indicators\"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\">

        <div class=\"row position-relative\">
          <div class=\"circle-bg circle-1\"></div>
          <div class=\"circle-bg circle-2\"></div>

          <div class=\"row align-items-center\">
            <!-- Phần văn bản -->
            <div class=\"col-lg-6 col-md-12 about-text\" style=\"margin-top: 30px;\">
                <h2>Về chúng tôi!</h2>
                <h5 style=\"font-weight: 700;\">Tăng cường đặt phòng bằng trang web khách sạn của riêng bạn</h4>
                <p>
                    Tại <strong>BookDe.vn</strong>, chúng tôi trao quyền cho các khách sạn tại Việt Nam để kiểm soát hoàn toàn sự hiện diện trực tuyến của họ. Dịch vụ của chúng tôi cho phép bạn tạo một trang web tùy chỉnh với tên miền của riêng bạn, cho phép bạn tương tác trực tiếp với khách hàng.
                </p>
                <h5 style=\"font-weight: 700;\">Một nền tảng, quản lý tất cả các khách sạn, khách hàng và giao dịch của bạn.</h5>
                <p>
                  Kiểm soát tất cả các khách sạn và dữ liệu của bạn chỉ bằng một trang web. Quản lý dữ liệu của khách hàng, đặt phòng, phòng, khách sạn,... Tạo sự kiện, phiếu giảm giá trong web. <br><br>
                  Việc sở hữu trang web khách sạn cho riêng bạn không chỉ giúp khách hàng dễ dàng tìm thấy bạn trên internet mà còn tối ưu hóa trải nghiệm đặt phòng trực tuyến, giúp việc quản lý trở nên đơn giản, hiệu quả hơn, tiết kiệm thời gian và tối ưu doanh thu một cách tốt nhất.
                </p>
            </div>

            <!-- Phần hình ảnh -->
            <div class=\"col-lg-6 col-md-12 about-image text-center\">
                <img src=\"{{ theme_url }}/assets/img/about.webp\" alt=\"Hotel Booking Website\" style=\"width: 100%;\">
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id=\"services\" class=\"services section light-background\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <h2 class=\"inner-title\"><b>Nâng cao khách sạn của bạn trực tuyến </b></h2>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                </svg>
                <i class=\"bi bi-easel\"></i>
                
              </div>
              <a href=\"{{ page.find('/service-details').url }}\" class=\"stretched-link\">
                <h3>Trang web khách sạn tùy chỉnh</h3>
              </a>
              <p>Tạo một nhận diện trực tuyến độc đáo với trang web tùy chỉnh.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"service-item item-cyan position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426\"></path>
                </svg>
                <i class=\"bi bi-broadcast\"></i>
                
              </div>
              <a href=\"{{ page.find('/service-details-1').url }}\" class=\"stretched-link\">
                <h3>Hỗ trợ đặt phòng trực tuyến</h3>
              </a>
              <p>Đơn giản hóa quy trình đặt phòng trực tuyến của khách sạn bạn một cách dễ dàng.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-item item-teal position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174\"></path>
                </svg>
                <i class=\"bi bi-activity\"></i>
              </div>
              <a href=\"{{ page.find('/service-details-2').url }}\" class=\"stretched-link\">
                <h3>Giải pháp tối ưu hóa đặt phòng</h3>
              </a>
              <p>Tối đa hóa số lượng đặt phòng của bạn với các công cụ tối ưu hóa của chúng tôi.</p>
            </div>
          </div><!-- End Service Item -->
        </div>
        <hr>
        <h3 style=\"font-size: 20px; font-family: inter; display: flex; justify-content: center; margin-top: 50px; text-align: center;\"><i>Khởi chạy trang web đặt phòng của riêng bạn hôm nay!</i></h3>

      </div>

    </section><!-- /Services Section -->

    <!-- benefit -->
    <section class=\"benefits-section text-center\">
      <div class=\"container\">
        <div class=\"benefits-section\">
            <!-- Phần văn bản -->
            <div class=\"benefits-text\">
                <h2><strong>Lợi ích khi sử dụng dịch vụ của chúng tôi</strong></h2>
                <p>Giúp khách sạn của bạn hoạt động trơn tru hơn, tiết kiệm thời gian và tối ưu hóa doanh thu với nền tảng thiết kế website hiện đại, chuyên nghiệp.</p>
            </div>
    
            <!-- Card hình ảnh -->
            <div class=\"card-wrapper\">
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"{{ theme_url }}/assets/img/professional.webp\" alt=\"Chuyên nghiệp\">
                    </div>
                    <div class=\"text-overlay\">Chuyên nghiệp</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"{{ theme_url }}/assets/img/modern.webp\" alt=\"Hiện đại\">
                    </div>
                    <div class=\"text-overlay\">Hiện đại</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"{{ theme_url }}/assets/img/effective.webp\" alt=\"Hiệu quả\">
                    </div>
                    <div class=\"text-overlay\">Hiệu quả</div>
                </div>
            </div>
        </div>
    </div>
  </section>  

  <section id=\"team\" class=\"team section light-background\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Ai sử dụng dịch vụ của chúng tôi?</h2>
    </div><!-- End Section Title -->

    <div class=\"container\">

      <div class=\"row gy-4\">

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"{{ theme_url }}/assets/img/about/hotel.webp\" class=\"img-fluid\" alt=\"Ảnh phòng khách sạn\">
              <h4 class=\"text-overlay\">HOTELS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"{{ theme_url }}/assets/img/about/spa.webp\" class=\"img-fluid\" alt=\"Ảnh dịch vụ spa\">
              <h4 class=\"text-overlay\">SPA</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"{{ theme_url }}/assets/img/about/tours.webp\" class=\"img-fluid\" alt=\"Ảnh dịch vụ du lịch\">
              <h4 class=\"text-overlay\">TOURS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->

  
  <section>
    <div class=\"container-fluid custom-section\">
      <div class=\"container\">
          <div class=\"row align-items-center flex-md-row flex-column-reverse\">
            <div class=\"col-md-6 text-center\">
              <img src=\"{{ theme_url }}/assets/img/services/demo.webp\" alt=\"Hotel Launch\" class=\"img-fluid w-100 rounded\">
            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-5 text-center text-md-start\">
                <h2 id=\"launch\">Bạn đã sẵn sàng đưa khách sạn của mình lên web chưa?</h2>
                <a href=\"#\" class=\"demo-btn\">Xem bản demo!</a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <div class=\"text-center mt-4\" style=\"margin-bottom: 40px; margin-top: 5px;\" >
    <a href=\"{{ page.find('/contact').url }}#services\" class=\"btn btn-contact\">Liên hệ ngay</a>
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
         {% include 'partials/footer_vi.html.twig' %}

  </footer>

</body>

</html>", "vi/home.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\vi\\home.html.twig");
    }
}
