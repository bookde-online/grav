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
class __TwigTemplate_e322d7ce036b53887c534c4b030568a0e6ad1bf80072a6a840d1368de23a3b4e extends \Twig\Template
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
    action=\"/bookdevn/vi/lien-he\"
    method=\"POST\"
    id=\"contact\"                  class=\" \"          >
        
                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Tên              <span class=\"required\">*</span></label>
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
        placeholder=\"T&#x00EA;n&#x20;c&#x1EE7;a&#x20;b&#x1EA1;n\"        autocomplete=\"on\"          required=\"required\"    
    
    
            />
                                      </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Số điện thoại              <span class=\"required\">*</span></label>
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
        placeholder=\"S&#x1ED1;&#x20;&#x0111;i&#x1EC7;n&#x20;tho&#x1EA1;i&#x20;c&#x1EE7;a&#x20;b&#x1EA1;n\"                  required=\"required\"    
    
    
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
        placeholder=\"Email&#x20;c&#x1EE7;a&#x20;b&#x1EA1;n\"                  required=\"required\"    
    
    
            />
                                  </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Lời nhắn              <span class=\"required\">*</span></label>
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
                                                                placeholder=\"Để lại lời nhắn của bạn\"                                                                                                required=\"required\"                                                                                                                                                        ></textarea>
                            </div>
                </div>
  </div>
                            

        <input type=\"hidden\" name=\"__form-name__\" value=\"contact\" />
            <input type=\"hidden\" name=\"__unique_form_id__\" value=\"w3yahol1eowug74sccjq\" />
    <input type=\"hidden\" name=\"form-nonce\" value=\"95637fd47351a49c040e5cb196ffc4a7\" />
    
      
            <div class=\"button-wrapper\">
  

                    
      
      
  <button
                                                                  type=\"submit\"
                                            class=\"btn btn btn-primary\"
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
    action=\"/bookdevn/vi/lien-he\"
    method=\"POST\"
    id=\"contact\"                  class=\" \"          >
        
                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Tên              <span class=\"required\">*</span></label>
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
        placeholder=\"T&#x00EA;n&#x20;c&#x1EE7;a&#x20;b&#x1EA1;n\"        autocomplete=\"on\"          required=\"required\"    
    
    
            />
                                      </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Số điện thoại              <span class=\"required\">*</span></label>
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
        placeholder=\"S&#x1ED1;&#x20;&#x0111;i&#x1EC7;n&#x20;tho&#x1EA1;i&#x20;c&#x1EE7;a&#x20;b&#x1EA1;n\"                  required=\"required\"    
    
    
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
        placeholder=\"Email&#x20;c&#x1EE7;a&#x20;b&#x1EA1;n\"                  required=\"required\"    
    
    
            />
                                  </div>
                        </div>
  </div>
                                                      
                          <div class=\"form-field form-group \">
            <div class=\"form-label-wrapper\"><label class=\"form-label\" >Lời nhắn              <span class=\"required\">*</span></label>
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
                                                                placeholder=\"Để lại lời nhắn của bạn\"                                                                                                required=\"required\"                                                                                                                                                        ></textarea>
                            </div>
                </div>
  </div>
                            

        <input type=\"hidden\" name=\"__form-name__\" value=\"contact\" />
            <input type=\"hidden\" name=\"__unique_form_id__\" value=\"w3yahol1eowug74sccjq\" />
    <input type=\"hidden\" name=\"form-nonce\" value=\"95637fd47351a49c040e5cb196ffc4a7\" />
    
      
            <div class=\"button-wrapper\">
  

                    
      
      
  <button
                                                                  type=\"submit\"
                                            class=\"btn btn btn-primary\"
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
