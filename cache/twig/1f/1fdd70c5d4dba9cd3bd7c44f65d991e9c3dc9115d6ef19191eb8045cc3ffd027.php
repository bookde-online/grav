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

/* modular/demo.html.twig */
class __TwigTemplate_a508ba85873f24853d1587a5d873894e4fcf0e20b68b0f5093cd672d459f1994 extends \Twig\Template
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
        echo "
<section id=\"demo\" class=\"py-5 mt-5\" style=\"background-color: #f9f9f9\">
   <div class=\"container\">
    <div class=\"row align-items-center\">
      <!-- Left Side -->
      <div class=\"col-md-6 mb-5 mb-md-0\">
        <h1 class=\"display-5 fw-bold\">
            ";
        // line 8
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Schedule a meeting with us today!") : ("Lên lịch cuộc họp với chúng tôi trong hôm nay !"));
        // line 10
        echo "
        </h1>
        <p class=\"text-muted\">
            ";
        // line 13
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("We are excited to meet you and share great ideas during our upcoming meeting. Feel free to reach out if you have any questions before then!") : ("Chúng tôi rất mong đợi để được gặp bạn và cùng nhau trao đổi những ý tưởng tuyệt vời trong buổi hẹn sắp tới. Nếu bạn có bất kỳ câu hỏi nào trước đó, đừng ngần ngại liên hệ với chúng tôi!"));
        // line 15
        echo "
        </p>

        <!-- Email Form Box -->
        <div class=\"form-box mt-4 d-flex align-items-center\">
        
           <button  class=\"btn btn-primary btn-lg cta-button open-contact-modal\">
                         ";
        // line 22
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Booking service") : ("Đăng ký dịch vụ"));
        echo "
                    </button>
        </div>

        <div class=\"mt-3 text-success\">
          <i class=\"bi bi-info-circle\"></i>
          ";
        // line 28
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("We’ll come back within 24 hours respectively 😇") : ("Chúng tôi sẽ trả lời bạn sớm nhất trong vòng 24 giờ 😇"));
        echo " 
        </div>
      </div>

      <!-- Right Side -->
      <div class=\"col-md-6 text-center\">
        ";
        // line 34
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            // line 35
            echo "                    ";
            $context["image"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])), "name", []);
            // line 36
            echo "                    ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array")) {
                // line 37
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array"), "url", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []));
                echo "\" class=\"img-fluid rounded shadow-sm\">
                    ";
            }
            // line 39
            echo "                ";
        }
        // line 40
        echo "      </div>
    </div>
  </div>
</div>
                 
 
   
<div class=\"modal fade\" id=\"contactModal\" tabindex=\"-1\" aria-labelledby=\"contactModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"contactModalLabel\">
                    ";
        // line 52
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Meeting request form") : ("Biểu mẫu yêu cầu cuộc họp"));
        echo "
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 57
        $this->loadTemplate("forms/contact-form.twig", "modular/demo.html.twig", 57)->display($context);
        // line 58
        echo "            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactButtons = document.querySelectorAll('.open-contact-modal');
    const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
 

    contactButtons.forEach(button => {
        button.addEventListener('click', function() {
            contactModal.show();
        });
    });

});
</script>

<script>

window.addEventListener('DOMContentLoaded', () => {
    const tzSelect = document.getElementById('timezone');
    const browserTz = Intl.DateTimeFormat().resolvedOptions().timeZone;

    if (browserTz && tzSelect) {
        const option = Array.from(tzSelect.options).find(opt => opt.value === browserTz);
        if (option) option.selected = true;
    }
});
</script>

</section>";
    }

    public function getTemplateName()
    {
        return "modular/demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 58,  116 => 57,  108 => 52,  94 => 40,  91 => 39,  83 => 37,  80 => 36,  77 => 35,  75 => 34,  66 => 28,  57 => 22,  48 => 15,  46 => 13,  41 => 10,  39 => 8,  30 => 1,);
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
<section id=\"demo\" class=\"py-5 mt-5\" style=\"background-color: #f9f9f9\">
   <div class=\"container\">
    <div class=\"row align-items-center\">
      <!-- Left Side -->
      <div class=\"col-md-6 mb-5 mb-md-0\">
        <h1 class=\"display-5 fw-bold\">
            {{ grav.language.getLanguage == 'en' ? 
            'Schedule a meeting with us today!' : 
            'Lên lịch cuộc họp với chúng tôi trong hôm nay !' }}
        </h1>
        <p class=\"text-muted\">
            {{ grav.language.getLanguage == 'en' ?
             'We are excited to meet you and share great ideas during our upcoming meeting. Feel free to reach out if you have any questions before then!' : 
             'Chúng tôi rất mong đợi để được gặp bạn và cùng nhau trao đổi những ý tưởng tuyệt vời trong buổi hẹn sắp tới. Nếu bạn có bất kỳ câu hỏi nào trước đó, đừng ngần ngại liên hệ với chúng tôi!' }}
        </p>

        <!-- Email Form Box -->
        <div class=\"form-box mt-4 d-flex align-items-center\">
        
           <button  class=\"btn btn-primary btn-lg cta-button open-contact-modal\">
                         {{ grav.language.getLanguage == 'en' ? 'Booking service' : 'Đăng ký dịch vụ' }}
                    </button>
        </div>

        <div class=\"mt-3 text-success\">
          <i class=\"bi bi-info-circle\"></i>
          {{ grav.language.getLanguage == 'en' ? 'We’ll come back within 24 hours respectively 😇' : 'Chúng tôi sẽ trả lời bạn sớm nhất trong vòng 24 giờ 😇' }} 
        </div>
      </div>

      <!-- Right Side -->
      <div class=\"col-md-6 text-center\">
        {% if page.header.image %}
                    {% set image = page.header.image|first.name %}
                    {% if page.media[image] %}
                        <img src=\"{{ page.media[image].url }}\" alt=\"{{ page.header.title|e }}\" class=\"img-fluid rounded shadow-sm\">
                    {% endif %}
                {% endif %}
      </div>
    </div>
  </div>
</div>
                 
 
   
<div class=\"modal fade\" id=\"contactModal\" tabindex=\"-1\" aria-labelledby=\"contactModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"contactModalLabel\">
                    {{ grav.language.getLanguage == 'en' ? 'Meeting request form' : 'Biểu mẫu yêu cầu cuộc họp' }}
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                {% include 'forms/contact-form.twig' %}
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactButtons = document.querySelectorAll('.open-contact-modal');
    const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
 

    contactButtons.forEach(button => {
        button.addEventListener('click', function() {
            contactModal.show();
        });
    });

});
</script>

<script>

window.addEventListener('DOMContentLoaded', () => {
    const tzSelect = document.getElementById('timezone');
    const browserTz = Intl.DateTimeFormat().resolvedOptions().timeZone;

    if (browserTz && tzSelect) {
        const option = Array.from(tzSelect.options).find(opt => opt.value === browserTz);
        if (option) option.selected = true;
    }
});
</script>

</section>", "modular/demo.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\modular\\demo.html.twig");
    }
}
