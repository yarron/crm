<?php

/* default/template/checkout/shipping_method.twig */
class __TwigTemplate_b47eca5ac456ec7c22b28f81342a1e734a8bb5f4337eb690ffd1b472e7f043ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 2
            echo "<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
";
        }
        // line 4
        if ((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) {
            // line 5
            echo "<p>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</p>
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 7
                echo "<p><strong>";
                echo $this->getAttribute($context["shipping_method"], "title", array());
                echo "</strong></p>
";
                // line 8
                if ( !$this->getAttribute($context["shipping_method"], "error", array())) {
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 10
                        echo "
<div class=\"form-check\">
  <label> ";
                        // line 12
                        if ((($this->getAttribute($context["quote"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                            // line 13
                            echo "    ";
                            $context["code"] = $this->getAttribute($context["quote"], "code", array());
                            // line 14
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" class=\"form-check-input\" checked=\"checked\" />
    ";
                        } else {
                            // line 16
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" class=\"form-check-input\" />
    ";
                        }
                        // line 18
                        echo "    ";
                        echo $this->getAttribute($context["quote"], "title", array());
                        echo " - ";
                        echo $this->getAttribute($context["quote"], "text", array());
                        echo "</label>
</div>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 22
                    echo "<div class=\"alert alert-danger alert-dismissible\">";
                    echo $this->getAttribute($context["shipping_method"], "error", array());
                    echo "</div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 26
        echo "<p><strong>";
        echo (isset($context["text_comments"]) ? $context["text_comments"] : null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 28
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
</p>
<div class=\"buttons\">
  <div class=\"float-right\">
    <input type=\"button\" value=\"";
        // line 32
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-shipping-method\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  100 => 28,  94 => 26,  83 => 22,  70 => 18,  64 => 16,  58 => 14,  55 => 13,  53 => 12,  49 => 10,  45 => 9,  43 => 8,  38 => 7,  34 => 6,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if error_warning %}*/
/* <div class="alert alert-warning alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/* {% endif %}*/
/* {% if shipping_methods %}*/
/* <p>{{ text_shipping_method }}</p>*/
/* {% for shipping_method in shipping_methods %}*/
/* <p><strong>{{ shipping_method.title }}</strong></p>*/
/* {% if not shipping_method.error %}*/
/* {% for quote in shipping_method.quote %}*/
/* */
/* <div class="form-check">*/
/*   <label> {% if quote.code == code or not code %}*/
/*     {% set code = quote.code %}*/
/*     <input type="radio" name="shipping_method" value="{{ quote.code }}" class="form-check-input" checked="checked" />*/
/*     {% else %}*/
/*     <input type="radio" name="shipping_method" value="{{ quote.code }}" class="form-check-input" />*/
/*     {% endif %}*/
/*     {{ quote.title }} - {{ quote.text }}</label>*/
/* </div>*/
/* {% endfor %}*/
/* {% else %}*/
/* <div class="alert alert-danger alert-dismissible">{{ shipping_method.error }}</div>*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* <p><strong>{{ text_comments }}</strong></p>*/
/* <p>*/
/*   <textarea name="comment" rows="8" class="form-control">{{ comment }}</textarea>*/
/* </p>*/
/* <div class="buttons">*/
/*   <div class="float-right">*/
/*     <input type="button" value="{{ button_continue }}" id="button-shipping-method" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* */
