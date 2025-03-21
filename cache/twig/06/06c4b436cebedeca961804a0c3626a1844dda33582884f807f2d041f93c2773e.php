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

/* vi/pricing.html.twig */
class __TwigTemplate_fec9fa747701f1cfeee2fd2a0df5462152adb157eb124f8045fd034b771f1725 extends \Twig\Template
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
        $this->loadTemplate("partials/header_vi.html.twig", "vi/pricing.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"pricing-page\">

      ";
        // line 10
        $this->loadTemplate("partials/navigation_vi.html.twig", "vi/pricing.html.twig", 10)->display($context);
        // line 11
        echo "
  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Giá cả</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Trang chủ</a></li>
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
                    <h3 style=\"font-size: 25px;\">Dùng thử</h3>
                    <h4><sup>\$</sup>0<span> trong 6 tháng đầu</span></h4>
                    <p>Trên mỗi tài khoản/tháng, thanh toán hàng năm</p>
                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"cta-btn\">Liên hệ ngay</a><br>
                    <h5 style=\"font-size: 16px; font-weight: 600;\">Trải nghiệm trang web của riêng bạn</h5>
            
                    <ul>
                        <li><i class=\"bi bi-check\"></i> <span>Miễn phí tên miền.</span></li>
                        <li><i class=\"bi bi-check\"></i> <span>Hình ảnh, thông tin khách sạn,...</span></li>
                        <li><i class=\"bi bi-check\"></i> <span>Tích hợp với dịch vụ bên thứ ba</span></li>
                        <li><i class=\"bi bi-x\" style=\"color: red;\"></i> <span>Không có đặt phòng trực tuyến</span></li>
                        <li><i class=\"bi bi-x\" style=\"color: red;\"></i> <span>Không có thanh toán trực tuyến qua web</span></li>
                        <li><i class=\"bi bi-check\"></i> <span><b>Một khách sạn</b></span></li>
                    </ul>
                </div>
            </div>
            <!-- End Pricing Item -->

            <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <div class=\"pricing-item\">
                  <h3 style=\"font-size: 25px;\">Gói Cơ Bản</h3>
                  <h4><sup>\$</sup>1.99</h4>
                  <p>Trên mỗi tài khoản/tháng, thanh toán hàng năm</p>
                  <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"cta-btn\">Liên hệ ngay</a><br>
                  <h5 style=\"font-size: 16px; font-weight: 600;\">Trải nghiệm trang web của riêng bạn</h5>
          
                  <ul>
                      <li><i class=\"bi bi-check\"></i> <span>Miễn phí tên miền.</span></li>
                      <li><i class=\"bi bi-check\"></i> <span>Hình ảnh, thông tin khách sạn,...</span></li>
                      <li><i class=\"bi bi-check\"></i> <span>Tích hợp với dịch vụ bên thứ ba</span></li>
                      <li><i class=\"bi bi-check\"></i> <span>Đặt phòng trực tuyến</span></li>
                      <li><i class=\"bi bi-check\"></i> <span>Thanh toán trực tuyến qua web</span></li>
                      <li><i class=\"bi bi-check\"></i> <span><b>Một khách sạn</b></span></li>
                  </ul>
              </div>
          </div>
          <!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
                <h3 style=\"font-size: 25px;\">Gói Cao Cấp</h3>
                <h4><sup>\$</sup>2.99</h4>
                <p>Trên mỗi tài khoản/tháng, thanh toán hàng năm</p>
                <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"cta-btn\">Liên hệ ngay</a><br>
                <h5 style=\"font-size: 16px; font-weight: 600;\">Trải nghiệm trang web của riêng bạn</h5>
        
                <ul>
                    <li><i class=\"bi bi-check\"></i> <span>Miễn phí tên miền.</span></li>
                    <li><i class=\"bi bi-check\"></i> <span>Hình ảnh, thông tin khách sạn,...</span></li>
                    <li><i class=\"bi bi-check\"></i> <span>Tích hợp với dịch vụ bên thứ ba</span></li>
                    <li><i class=\"bi bi-check\"></i> <span>Đặt phòng trực tuyến</span></li>
                    <li><i class=\"bi bi-check\"></i> <span>Thanh toán trực tuyến qua web</span></li>
                    <li><i class=\"bi bi-check\"></i> <span><b>Hai hoặc nhiều khách sạn</b></span></li>
                </ul>
            </div>
        </div>
        <!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->


  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
         ";
        // line 104
        $this->loadTemplate("partials/footer_vi.html.twig", "vi/pricing.html.twig", 104)->display($context);
        // line 105
        echo "  </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "vi/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 105,  153 => 104,  125 => 79,  102 => 59,  79 => 39,  57 => 20,  46 => 11,  44 => 10,  38 => 6,  36 => 5,  30 => 1,);
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

<body class=\"pricing-page\">

      {% include 'partials/navigation_vi.html.twig' %}

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Giá cả</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Trang chủ</a></li>
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
                    <h3 style=\"font-size: 25px;\">Dùng thử</h3>
                    <h4><sup>\$</sup>0<span> trong 6 tháng đầu</span></h4>
                    <p>Trên mỗi tài khoản/tháng, thanh toán hàng năm</p>
                    <a href=\"{{ page.find('/contact').url }}#services\" class=\"cta-btn\">Liên hệ ngay</a><br>
                    <h5 style=\"font-size: 16px; font-weight: 600;\">Trải nghiệm trang web của riêng bạn</h5>
            
                    <ul>
                        <li><i class=\"bi bi-check\"></i> <span>Miễn phí tên miền.</span></li>
                        <li><i class=\"bi bi-check\"></i> <span>Hình ảnh, thông tin khách sạn,...</span></li>
                        <li><i class=\"bi bi-check\"></i> <span>Tích hợp với dịch vụ bên thứ ba</span></li>
                        <li><i class=\"bi bi-x\" style=\"color: red;\"></i> <span>Không có đặt phòng trực tuyến</span></li>
                        <li><i class=\"bi bi-x\" style=\"color: red;\"></i> <span>Không có thanh toán trực tuyến qua web</span></li>
                        <li><i class=\"bi bi-check\"></i> <span><b>Một khách sạn</b></span></li>
                    </ul>
                </div>
            </div>
            <!-- End Pricing Item -->

            <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <div class=\"pricing-item\">
                  <h3 style=\"font-size: 25px;\">Gói Cơ Bản</h3>
                  <h4><sup>\$</sup>1.99</h4>
                  <p>Trên mỗi tài khoản/tháng, thanh toán hàng năm</p>
                  <a href=\"{{ page.find('/contact').url }}#services\" class=\"cta-btn\">Liên hệ ngay</a><br>
                  <h5 style=\"font-size: 16px; font-weight: 600;\">Trải nghiệm trang web của riêng bạn</h5>
          
                  <ul>
                      <li><i class=\"bi bi-check\"></i> <span>Miễn phí tên miền.</span></li>
                      <li><i class=\"bi bi-check\"></i> <span>Hình ảnh, thông tin khách sạn,...</span></li>
                      <li><i class=\"bi bi-check\"></i> <span>Tích hợp với dịch vụ bên thứ ba</span></li>
                      <li><i class=\"bi bi-check\"></i> <span>Đặt phòng trực tuyến</span></li>
                      <li><i class=\"bi bi-check\"></i> <span>Thanh toán trực tuyến qua web</span></li>
                      <li><i class=\"bi bi-check\"></i> <span><b>Một khách sạn</b></span></li>
                  </ul>
              </div>
          </div>
          <!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
                <h3 style=\"font-size: 25px;\">Gói Cao Cấp</h3>
                <h4><sup>\$</sup>2.99</h4>
                <p>Trên mỗi tài khoản/tháng, thanh toán hàng năm</p>
                <a href=\"{{ page.find('/contact').url }}#services\" class=\"cta-btn\">Liên hệ ngay</a><br>
                <h5 style=\"font-size: 16px; font-weight: 600;\">Trải nghiệm trang web của riêng bạn</h5>
        
                <ul>
                    <li><i class=\"bi bi-check\"></i> <span>Miễn phí tên miền.</span></li>
                    <li><i class=\"bi bi-check\"></i> <span>Hình ảnh, thông tin khách sạn,...</span></li>
                    <li><i class=\"bi bi-check\"></i> <span>Tích hợp với dịch vụ bên thứ ba</span></li>
                    <li><i class=\"bi bi-check\"></i> <span>Đặt phòng trực tuyến</span></li>
                    <li><i class=\"bi bi-check\"></i> <span>Thanh toán trực tuyến qua web</span></li>
                    <li><i class=\"bi bi-check\"></i> <span><b>Hai hoặc nhiều khách sạn</b></span></li>
                </ul>
            </div>
        </div>
        <!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->


  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
         {% include 'partials/footer_vi.html.twig' %}
  </footer>

</body>

</html>", "vi/pricing.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\vi\\pricing.html.twig");
    }
}
