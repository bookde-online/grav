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

/* @Page:C:/xampp/htdocs/bookdevn/user/pages/05.contact/02._form */
class __TwigTemplate_874cc1f8c7c077e126a8b4336e711f4e8ea39d845d2ef625d0e60ac1a8ddaa96 extends \Twig\Template
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
        echo "<div class=\"col-lg-8\">
    
    



                    










<form
        name=\"contact\"
    action=\"/bookdevn/en/contact\"
    method=\"POST\"
    id=\"contact\"                  class=\" \"          >
        
                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Name              <span class=\"required\">*</span></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"text\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                        <div class=\"form-input-wrapper \">
                                    <input
              name=\"data[name]\"
              value=\"\"
                  type=\"text\"
                  class=\"form-input \"
        placeholder=\"Your&#x20;name\"        autocomplete=\"on\"          required=\"required\"    
    
    
            />
                                      </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Phone              <span class=\"required\">*</span></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"tel\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                        <div class=\"form-input-wrapper \">
                                    <input
              name=\"data[phone]\"
              value=\"\"
                  type=\"tel\"
                  class=\"form-input \"
        placeholder=\"Your&#x20;phone\"                  required=\"required\"    
    
    
            />
                                  </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Email              <span class=\"required\">*</span></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"email\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                        <div class=\"form-input-wrapper \">
                                    <input
              name=\"data[email]\"
              value=\"\"
                  type=\"email\"
                      class=\"form-input \"
        placeholder=\"Your&#x20;email\"                  required=\"required\"    
    
    
            />
                                  </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Message              <span class=\"required\">*</span></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"textarea\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                  <div class=\"form-textarea-wrapper  \">
                <textarea
                        name=\"data[message]\"
                                        class=\"form-input  \"
                                                                placeholder=\"Leave your message\"                                                                                                required=\"required\"                                                                                                                                                        ></textarea>
                            </div>
                </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" ></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"captcha\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                    <script type=\"application/javascript\">
        var captchaOnloadCallback_contact = function captchaOnloadCallback_contact() {
            grecaptcha.render('g-recaptcha-contact', {
                'sitekey': \"6Lf1J0ErAAAAAEZJBw9HwXxZYe7XDnslVd5perNH\",
                'callback': captchaValidatedCallback_contact,
                'expired-callback': captchaExpiredCallback_contact
            });
        };

        var captchaValidatedCallback_contact = function captchaValidatedCallback_contact() {};
        var captchaExpiredCallback_contact = function captchaExpiredCallback_contact() {
            grecaptcha.reset();
        };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_contact&render=explicit&hl=en&theme=light \"
        async defer></script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha-contact\" data-theme=\"light\"></div>
                  </div>
  </div>
                            

        <input type=\"hidden\" name=\"__form-name__\" value=\"contact\" />
            <input type=\"hidden\" name=\"__unique_form_id__\" value=\"axm3u8o74plyrutxcafj\" />
    <input type=\"hidden\" name=\"form-nonce\" value=\"95637fd47351a49c040e5cb196ffc4a7\" />
    
      
            <div class=\"button-wrapper\">
  

                    
      
      
  <button
                                                                  type=\"submit\"
                                            class=\"btn \"
                  >Submit</button>

                    
        </div>
  
  </form>


    <div class=\"my-3\">
                    </div>
</div>

</div><!-- End Row -->
  </div><!-- End Container -->
</section><!-- End Contact Section -->
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/bookdevn/user/pages/05.contact/02._form";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-8\">
    
    



                    










<form
        name=\"contact\"
    action=\"/bookdevn/en/contact\"
    method=\"POST\"
    id=\"contact\"                  class=\" \"          >
        
                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Name              <span class=\"required\">*</span></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"text\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                        <div class=\"form-input-wrapper \">
                                    <input
              name=\"data[name]\"
              value=\"\"
                  type=\"text\"
                  class=\"form-input \"
        placeholder=\"Your&#x20;name\"        autocomplete=\"on\"          required=\"required\"    
    
    
            />
                                      </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Phone              <span class=\"required\">*</span></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"tel\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                        <div class=\"form-input-wrapper \">
                                    <input
              name=\"data[phone]\"
              value=\"\"
                  type=\"tel\"
                  class=\"form-input \"
        placeholder=\"Your&#x20;phone\"                  required=\"required\"    
    
    
            />
                                  </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Email              <span class=\"required\">*</span></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"email\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                        <div class=\"form-input-wrapper \">
                                    <input
              name=\"data[email]\"
              value=\"\"
                  type=\"email\"
                      class=\"form-input \"
        placeholder=\"Your&#x20;email\"                  required=\"required\"    
    
    
            />
                                  </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Message              <span class=\"required\">*</span></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"textarea\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                  <div class=\"form-textarea-wrapper  \">
                <textarea
                        name=\"data[message]\"
                                        class=\"form-input  \"
                                                                placeholder=\"Leave your message\"                                                                                                required=\"required\"                                                                                                                                                        ></textarea>
                            </div>
                </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" ></label>
      </div>
        <div class=\"form-data\"
          data-grav-field=\"captcha\"
  data-grav-disabled=\"\"
  data-grav-default=\"null\"
    >
                    <script type=\"application/javascript\">
        var captchaOnloadCallback_contact = function captchaOnloadCallback_contact() {
            grecaptcha.render('g-recaptcha-contact', {
                'sitekey': \"6Lf1J0ErAAAAAEZJBw9HwXxZYe7XDnslVd5perNH\",
                'callback': captchaValidatedCallback_contact,
                'expired-callback': captchaExpiredCallback_contact
            });
        };

        var captchaValidatedCallback_contact = function captchaValidatedCallback_contact() {};
        var captchaExpiredCallback_contact = function captchaExpiredCallback_contact() {
            grecaptcha.reset();
        };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_contact&render=explicit&hl=en&theme=light \"
        async defer></script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha-contact\" data-theme=\"light\"></div>
                  </div>
  </div>
                            

        <input type=\"hidden\" name=\"__form-name__\" value=\"contact\" />
            <input type=\"hidden\" name=\"__unique_form_id__\" value=\"axm3u8o74plyrutxcafj\" />
    <input type=\"hidden\" name=\"form-nonce\" value=\"95637fd47351a49c040e5cb196ffc4a7\" />
    
      
            <div class=\"button-wrapper\">
  

                    
      
      
  <button
                                                                  type=\"submit\"
                                            class=\"btn \"
                  >Submit</button>

                    
        </div>
  
  </form>


    <div class=\"my-3\">
                    </div>
</div>

</div><!-- End Row -->
  </div><!-- End Container -->
</section><!-- End Contact Section -->
", "@Page:C:/xampp/htdocs/bookdevn/user/pages/05.contact/02._form", "");
    }
}
