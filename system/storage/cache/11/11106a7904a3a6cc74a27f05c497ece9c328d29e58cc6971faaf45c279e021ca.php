<?php

/* sale/order_form.twig */
class __TwigTemplate_38e4cff591e49f12a3326cb5b9bc4a285d77c97f652534625880bc028aac9099 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\"><a href=\"";
        // line 5
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a></div>
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div id=\"collapse\">
      <div class=\"card\">
        <div class=\"card-header\"><i class=\"fas fa-user fa-fw\"></i> ";
        // line 17
        echo (isset($context["text_customer_detail"]) ? $context["text_customer_detail"] : null);
        echo "</div>
        <div id=\"collapse-customer\" data-parent=\"#collapse\" class=\"collapse show\">
          <div class=\"card-body\">
            <form>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-store\">";
        // line 22
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 26
            echo "                      ";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) {
                // line 27
                echo "                        <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 29
                echo "                        <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                      ";
            }
            // line 31
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-currency\">";
        // line 36
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 40
            echo "                      ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["currency_code"]) ? $context["currency_code"] : null))) {
                // line 41
                echo "                        <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 43
                echo "                        <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                      ";
            }
            // line 45
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-customer\">";
        // line 50
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"customer\" value=\"";
        // line 52
        echo (isset($context["customer"]) ? $context["customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\"/> <input type=\"hidden\" name=\"customer_id\" value=\"";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-customer-group\">";
        // line 56
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 60
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 61
                echo "                        <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 63
                echo "                        <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      ";
            }
            // line 65
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-firstname\">";
        // line 70
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 72
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-lastname\">";
        // line 76
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 78
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 82
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"email\" value=\"";
        // line 84
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-telephone\">";
        // line 88
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"telephone\" value=\"";
        // line 90
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                </div>
              </div>
              ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 94
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 95
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 96
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 97
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                    // line 99
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                          <option value=\"\">";
                    // line 100
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                          ";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 102
                        echo "                            ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 103
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 105
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 107
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "                        </select>
                      </div>
                    </div>
                  ";
                }
                // line 112
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 113
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 114
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-custom-field";
                    // line 116
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                          ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 118
                        echo "                            <label class=\"form-check\">
                              ";
                        // line 119
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 120
                            echo "                                <input type=\"radio\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" class=\"form-check-input\"/>
                                ";
                            // line 121
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        } else {
                            // line 123
                            echo "                                <input type=\"radio\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                                ";
                            // line 124
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        }
                        // line 126
                        echo "                            </label>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 132
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 133
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 134
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-custom-field";
                    // line 136
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                          ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 138
                        echo "                            <label class=\"form-check\">
                              ";
                        // line 139
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 140
                            echo "                                <input type=\"checkbox\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" class=\"form-check-input\"/>
                                ";
                            // line 141
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        } else {
                            // line 143
                            echo "                                <input type=\"checkbox\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                                ";
                            // line 144
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        }
                        // line 146
                        echo "                            </label>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 152
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 153
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 154
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 156
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  ";
                }
                // line 160
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 161
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 162
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[";
                    // line 164
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
                      </div>
                    </div>
                  ";
                }
                // line 168
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 169
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 170
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" id=\"button-custom-field";
                    // line 172
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                    // line 173
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"/>
                      </div>
                    </div>
                  ";
                }
                // line 177
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 178
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 179
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 182
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 190
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 191
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 192
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group time\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 195
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 203
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 204
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 205
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group datetime\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 208
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 216
                echo "                ";
            }
            // line 217
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "            </form>
            <div class=\"text-right\">
              <buttton id=\"button-customer\" data-loading-text=\"";
        // line 220
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-right\"></i> ";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</buttton>
            </div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header\"><i class=\"fas fa-shopping-cart fa-fw\"></i> ";
        // line 226
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</div>
        <div id=\"collapse-cart\" data-parent=\"#collapse\" class=\"collapse\">
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
        // line 233
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 234
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 235
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 236
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 237
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                    <td>";
        // line 238
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                  </tr>
                </thead>
                <tbody id=\"cart\">
                  ";
        // line 242
        if (((isset($context["order_products"]) ? $context["order_products"] : null) || (isset($context["order_vouchers"]) ? $context["order_vouchers"] : null))) {
            // line 243
            echo "                  ";
            $context["product_row"] = 0;
            // line 244
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order_products"]) ? $context["order_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 245
                echo "                    <tr>
                      <td class=\"text-left\">";
                // line 246
                echo $this->getAttribute($context["order_product"], "name", array());
                echo "
                        <br/>
                        <input type=\"hidden\" name=\"product[";
                // line 248
                echo (isset($context["product_row"]) ? $context["product_row"] : null);
                echo "][product_id]\" value=\"";
                echo $this->getAttribute($context["order_product"], "product_id", array());
                echo "\"/>
                        ";
                // line 249
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order_product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 250
                    echo "                          -
                          <small>";
                    // line 251
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
                          <br/>
                          ";
                    // line 253
                    if (((($this->getAttribute($context["option"], "type", array()) == "select") || ($this->getAttribute($context["option"], "type", array()) == "radio")) || ($this->getAttribute($context["option"], "type", array()) == "image"))) {
                        // line 254
                        echo "                            <input type=\"hidden\" name=\"product[";
                        echo (isset($context["product_row"]) ? $context["product_row"] : null);
                        echo "][option][";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "product_option_value_id", array());
                        echo "\"/>
                          ";
                    }
                    // line 256
                    echo "                          ";
                    if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                        // line 257
                        echo "                            <input type=\"hidden\" name=\"product[";
                        echo (isset($context["product_row"]) ? $context["product_row"] : null);
                        echo "][option][";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option"], "product_option_value_id", array());
                        echo "\"/>
                          ";
                    }
                    // line 259
                    echo "                          ";
                    if ((((((($this->getAttribute($context["option"], "type", array()) == "text") || ($this->getAttribute($context["option"], "type", array()) == "textarea")) || ($this->getAttribute($context["option"], "type", array()) == "file")) || ($this->getAttribute($context["option"], "type", array()) == "date")) || ($this->getAttribute($context["option"], "type", array()) == "datetime")) || ($this->getAttribute($context["option"], "type", array()) == "time"))) {
                        // line 260
                        echo "                            <input type=\"hidden\" name=\"product[";
                        echo (isset($context["product_row"]) ? $context["product_row"] : null);
                        echo "][option][";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\"/>
                          ";
                    }
                    // line 262
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
                      <td class=\"text-left\">";
                // line 263
                echo $this->getAttribute($context["order_product"], "model", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 264
                echo $this->getAttribute($context["order_product"], "quantity", array());
                echo "
                        <input type=\"hidden\" name=\"product[";
                // line 265
                echo (isset($context["product_row"]) ? $context["product_row"] : null);
                echo "][quantity]\" value=\"";
                echo $this->getAttribute($context["order_product"], "quantity", array());
                echo "\"/></td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-center\"></td>
                    </tr>
                    ";
                // line 270
                $context["product_row"] = ((isset($context["product_row"]) ? $context["product_row"] : null) + 1);
                // line 271
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "                  ";
            $context["voucher_row"] = 0;
            // line 273
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order_vouchers"]) ? $context["order_vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_voucher"]) {
                // line 274
                echo "                    <tr>
                      <td class=\"text-left\">";
                // line 275
                echo $this->getAttribute($context["order_voucher"], "description", array());
                echo "
                        <input type=\"hidden\" name=\"voucher[";
                // line 276
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][voucher_id]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "voucher_id", array());
                echo "\"/> <input type=\"hidden\" name=\"voucher[";
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][description]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "description", array());
                echo "\"/> <input type=\"hidden\" name=\"voucher[";
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][code]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "code", array());
                echo "\"/> <input type=\"hidden\" name=\"voucher[";
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][from_name]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "from_name", array());
                echo "\"/> <input type=\"hidden\" name=\"voucher[";
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][from_email]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "from_email", array());
                echo "\"/> <input type=\"hidden\" name=\"voucher[";
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][to_name]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "to_name", array());
                echo "\"/> <input type=\"hidden\" name=\"voucher[";
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][to_email]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "to_email", array());
                echo "\"/> <input type=\"hidden\" name=\"voucher[";
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][voucher_theme_id]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "voucher_theme_id", array());
                echo "\"/> <input type=\"hidden\" name=\"voucher[";
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][message]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "message", array());
                echo "\"/>
                        <input type=\"hidden\" name=\"voucher[";
                // line 277
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][amount]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "amount", array());
                echo "\"/></td>
                      <td class=\"text-left\"></td>
                      <td class=\"text-right\">1</td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-center\"></td>
                    </tr>
                    ";
                // line 284
                $context["voucher_row"] = ((isset($context["voucher_row"]) ? $context["voucher_row"] : null) + 1);
                // line 285
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "                  ";
        } else {
            // line 287
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"6\">";
            // line 288
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                </tbody>
                ";
        }
        // line 292
        echo "              </table>
            </div>
            <form>
              <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"nav-item\"><a href=\"#tab-product\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 296
        echo (isset($context["tab_product"]) ? $context["tab_product"] : null);
        echo "</a></li>
                <li class=\"nav-item\"><a href=\"#tab-voucher\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 297
        echo (isset($context["tab_voucher"]) ? $context["tab_voucher"] : null);
        echo "</a></li>
              </ul>
              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-product\">
                  <fieldset>
                    <legend>";
        // line 302
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-product\">";
        // line 304
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product\" value=\"\" id=\"input-product\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"\"/>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-quantity\">";
        // line 310
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"quantity\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"option\"></div>
                  </fieldset>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-product-add\" data-loading-text=\"";
        // line 318
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> ";
        echo (isset($context["button_product_add"]) ? $context["button_product_add"] : null);
        echo "</button>
                  </div>
                </div>
                <div class=\"tab-pane\" id=\"tab-voucher\">
                  <fieldset>
                    <legend>";
        // line 323
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                    <div class=\"form-group row required\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-to-name\">";
        // line 325
        echo (isset($context["entry_to_name"]) ? $context["entry_to_name"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"to_name\" value=\"\" id=\"input-to-name\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-to-email\">";
        // line 331
        echo (isset($context["entry_to_email"]) ? $context["entry_to_email"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"to_email\" value=\"\" id=\"input-to-email\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-from-name\">";
        // line 337
        echo (isset($context["entry_from_name"]) ? $context["entry_from_name"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"from_name\" value=\"\" id=\"input-from-name\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-from-email\">";
        // line 343
        echo (isset($context["entry_from_email"]) ? $context["entry_from_email"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"from_email\" value=\"\" id=\"input-from-email\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-theme\">";
        // line 349
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-control\">
                          ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voucher_themes"]) ? $context["voucher_themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 353
            echo "                            <option value=\"";
            echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
            echo "\">";
            echo $this->getAttribute($context["voucher_theme"], "name", array());
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo "                        </select>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-message\">";
        // line 359
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"message\" rows=\"5\" id=\"input-message\" class=\"form-control\"></textarea>
                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-amount\">";
        // line 365
        echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"amount\" value=\"";
        // line 367
        echo (isset($context["voucher_min"]) ? $context["voucher_min"] : null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                      </div>
                    </div>
                  </fieldset>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-voucher-add\" data-loading-text=\"";
        // line 372
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> ";
        echo (isset($context["button_voucher_add"]) ? $context["button_voucher_add"] : null);
        echo "</button>
                  </div>
                </div>
              </div>
            </form>
            <br/>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">
                <a href=\"#collapse-customer\" data-toggle=\"collapse\" data-parent=\"#collapse\" class=\"btn btn-light\"><i class=\"fas fa-arrow-left\"></i> ";
        // line 380
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
              </div>
              <div class=\"col-sm-6 text-right\">
                <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-right\"></i> ";
        // line 383
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header\"><i class=\"fas fa-credit-card fa-fw\"></i> ";
        // line 390
        echo (isset($context["text_payment_detail"]) ? $context["text_payment_detail"] : null);
        echo "</div>
        <div id=\"collapse-payment\" data-parent=\"#collapse\" class=\"collapse\">
          <div class=\"card-body\">
            <form>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-address\">";
        // line 395
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_address\" id=\"input-payment-address\" class=\"form-control\">
                    <option value=\"0\" selected=\"selected\">";
        // line 398
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                    ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 400
            echo "                      <option value=\"";
            echo $this->getAttribute($context["address"], "address_id", array());
            echo "\">";
            echo $this->getAttribute($context["address"], "firstname", array());
            echo " ";
            echo $this->getAttribute($context["address"], "lastname", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "address_1", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "city", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "country", array());
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-firstname\">";
        // line 406
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 408
        echo (isset($context["payment_firstname"]) ? $context["payment_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-lastname\">";
        // line 412
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 414
        echo (isset($context["payment_lastname"]) ? $context["payment_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-company\">";
        // line 418
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"company\" value=\"";
        // line 420
        echo (isset($context["payment_company"]) ? $context["payment_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-address-1\">";
        // line 424
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 426
        echo (isset($context["payment_address_1"]) ? $context["payment_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-address-2\">";
        // line 430
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 432
        echo (isset($context["payment_address_2"]) ? $context["payment_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-city\">";
        // line 436
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"city\" value=\"";
        // line 438
        echo (isset($context["payment_city"]) ? $context["payment_city"] : null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-postcode\">";
        // line 442
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 444
        echo (isset($context["payment_postcode"]) ? $context["payment_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-country\">";
        // line 448
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 451
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                    ";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 453
            echo "                      ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["payment_country_id"]) ? $context["payment_country_id"] : null))) {
                // line 454
                echo "                        <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 456
                echo "                        <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                      ";
            }
            // line 458
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 459
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-payment-zone\">";
        // line 463
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\"> </select>
                </div>
              </div>
              ";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 469
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 470
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 471
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                    // line 472
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                    // line 474
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                          <option value=\"\">";
                    // line 475
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                          ";
                    // line 476
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 477
                        echo "                            ";
                        if (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 478
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 480
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 482
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 483
                    echo "                        </select>
                      </div>
                    </div>
                  ";
                }
                // line 487
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 488
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 489
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-payment-custom-field";
                    // line 491
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                          ";
                    // line 492
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 493
                        echo "                            <label class=\"form-check\">
                            ";
                        // line 494
                        if (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 495
                            echo "                              <input type=\"radio\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                            // line 496
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                            ";
                        } else {
                            // line 498
                            echo "                              <input type=\"radio\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                              ";
                            // line 499
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                            ";
                        }
                        // line 501
                        echo "                            </label>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 503
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 507
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 508
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 509
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-payment-custom-field";
                    // line 511
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                          ";
                    // line 512
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 513
                        echo "                            <label class=\"form-check\">
                              ";
                        // line 514
                        if (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 515
                            echo "                                <input type=\"checkbox\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" class=\"form-check-input\"/>
                                ";
                            // line 516
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        } else {
                            // line 518
                            echo "                                <input type=\"checkbox\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                                ";
                            // line 519
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        }
                        // line 521
                        echo "                            </label>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 523
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 527
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 528
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                    // line 529
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 531
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  ";
                }
                // line 535
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 536
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                    // line 537
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[";
                    // line 539
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                      </div>
                    </div>
                  ";
                }
                // line 543
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 544
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 545
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 547
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                    // line 548
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"/>
                      </div>
                    </div>
                  ";
                }
                // line 552
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 553
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                    // line 554
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 557
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 565
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 566
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                    // line 567
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group time\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 570
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 578
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 579
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                    // line 580
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group datetime\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 583
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 591
                echo "                ";
            }
            // line 592
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 593
        echo "            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">
                <a href=\"#collapse-cart\" data-toggle=\"collapse\" data-parent=\"#collapse\" class=\"btn btn-light\"><i class=\"fas fa-arrow-left\"></i> ";
        // line 596
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
              </div>
              <div class=\"col-sm-6 text-right\">
                <button type=\"button\" id=\"button-payment-address\" data-loading-text=\"";
        // line 599
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-right\"></i> ";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header\"><i class=\"fas fa-truck fa-fw\"></i> ";
        // line 606
        echo (isset($context["text_shipping_detail"]) ? $context["text_shipping_detail"] : null);
        echo "</div>
        <div id=\"collapse-shipping\" data-parent=\"#collapse\" class=\"collapse\">
          <div class=\"card-body\">
            <form>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-address\">";
        // line 611
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"shipping_address\" id=\"input-shipping-address\" class=\"form-control\">
                    <option value=\"0\" selected=\"selected\">";
        // line 614
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                    ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 616
            echo "                      <option value=\"";
            echo $this->getAttribute($context["address"], "address_id", array());
            echo "\">";
            echo $this->getAttribute($context["address"], "firstname", array());
            echo " ";
            echo $this->getAttribute($context["address"], "lastname", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "address_1", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "city", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "country", array());
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-firstname\">";
        // line 622
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 624
        echo (isset($context["shipping_firstname"]) ? $context["shipping_firstname"] : null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-lastname\">";
        // line 628
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 630
        echo (isset($context["shipping_lastname"]) ? $context["shipping_lastname"] : null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-company\">";
        // line 634
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"company\" value=\"";
        // line 636
        echo (isset($context["shipping_company"]) ? $context["shipping_company"] : null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-address-1\">";
        // line 640
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 642
        echo (isset($context["shipping_address_1"]) ? $context["shipping_address_1"] : null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-address-2\">";
        // line 646
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 648
        echo (isset($context["shipping_address_2"]) ? $context["shipping_address_2"] : null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-city\">";
        // line 652
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"city\" value=\"";
        // line 654
        echo (isset($context["shipping_city"]) ? $context["shipping_city"] : null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-postcode\">";
        // line 658
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 660
        echo (isset($context["shipping_postcode"]) ? $context["shipping_postcode"] : null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-country\">";
        // line 664
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 667
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                    ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 669
            echo "                      ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["shipping_country_id"]) ? $context["shipping_country_id"] : null))) {
                // line 670
                echo "                        <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 672
                echo "                        <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                      ";
            }
            // line 674
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-zone\">";
        // line 679
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\"></select>
                </div>
              </div>
              ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 685
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 686
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 687
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-custom-field";
                    // line 688
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                    // line 690
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                          <option value=\"\">";
                    // line 691
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                          ";
                    // line 692
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 693
                        echo "                            ";
                        if (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 694
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 696
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 698
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 699
                    echo "                        </select>
                      </div>
                    </div>
                  ";
                }
                // line 703
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 704
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 705
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-shipping-custom-field";
                    // line 707
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                          ";
                    // line 708
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 709
                        echo "                            <label class=\"form-check\">
                              ";
                        // line 710
                        if (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 711
                            echo "                                <input type=\"radio\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" class=\"form-check-input\"/>
                                ";
                            // line 712
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        } else {
                            // line 714
                            echo "                                <input type=\"radio\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                                ";
                            // line 715
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        }
                        // line 717
                        echo "                            </label>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 719
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 723
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 724
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 725
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-shipping-custom-field";
                    // line 727
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                          ";
                    // line 728
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 729
                        echo "                            <label class=\"form-check\">
                              ";
                        // line 730
                        if (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 731
                            echo "                                <input type=\"checkbox\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" class=\"form-check-input\"/>
                                ";
                            // line 732
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        } else {
                            // line 734
                            echo "                                <input type=\"checkbox\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                                ";
                            // line 735
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
                              ";
                        }
                        // line 737
                        echo "                            </label>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 739
                    echo "                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 743
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 744
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-custom-field";
                    // line 745
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 747
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  ";
                }
                // line 751
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 752
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-custom-field";
                    // line 753
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[";
                    // line 755
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                      </div>
                    </div>
                  ";
                }
                // line 759
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 760
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 761
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" id=\"button-shipping-custom-field";
                    // line 763
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                    // line 764
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"/>
                      </div>
                    </div>
                  ";
                }
                // line 768
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 769
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-custom-field";
                    // line 770
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 773
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 781
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 782
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-custom-field";
                    // line 783
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group time\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 786
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 794
                echo "                  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 795
                    echo "                    <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-custom-field";
                    // line 796
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group datetime\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 799
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          <div class=\"input-group-append\">
                            <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
                // line 807
                echo "                ";
            }
            // line 808
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        echo "            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">
                <a href=\"#collapse-payment\" data-toggle=\"collapse\" data-parent=\"#collapse\" class=\"btn btn-light\"><i class=\"fas fa-arrow-left\"></i> ";
        // line 812
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
              </div>
              <div class=\"col-sm-6 text-right\">
                <button type=\"button\" id=\"button-shipping-address\" data-loading-text=\"";
        // line 815
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-right\"></i> ";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header\"><i class=\"fas fa-dollar-sign fa-fw\"></i> ";
        // line 822
        echo (isset($context["text_total_detail"]) ? $context["text_total_detail"] : null);
        echo "</div>
        <div id=\"collapse-total\" data-parent=\"#collapse\" class=\"collapse\">
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
        // line 829
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 830
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 831
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 832
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 833
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                  </tr>
                </thead>
                <tbody id=\"total\">
                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
        // line 838
        echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
        echo "</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <form>
              <fieldset>
                <legend>";
        // line 845
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</legend>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-shipping-method\">";
        // line 847
        echo (isset($context["entry_shipping_method"]) ? $context["entry_shipping_method"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"shipping_method\" id=\"input-shipping-method\" class=\"form-control\">
                        <option value=\"\">";
        // line 851
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                        ";
        // line 852
        if ((isset($context["shipping_code"]) ? $context["shipping_code"] : null)) {
            // line 853
            echo "                          <option value=\"";
            echo (isset($context["shipping_code"]) ? $context["shipping_code"] : null);
            echo "\" selected=\"selected\">";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo "</option>
                        ";
        }
        // line 855
        echo "                      </select>
                      <div class=\"input-group-append\">
                        <button type=\"button\" id=\"button-shipping-method\" data-loading-text=\"";
        // line 857
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-payment-method\">";
        // line 863
        echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-control\">
                        <option value=\"\">";
        // line 867
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                        ";
        // line 868
        if ((isset($context["payment_code"]) ? $context["payment_code"] : null)) {
            // line 869
            echo "                          <option value=\"";
            echo (isset($context["payment_code"]) ? $context["payment_code"] : null);
            echo "\" selected=\"selected\">";
            echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
            echo "</option>
                        ";
        }
        // line 871
        echo "                      </select>
                      <div class=\"input-group-append\">
                        <button type=\"button\" id=\"button-payment-method\" data-loading-text=\"";
        // line 873
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-coupon\">";
        // line 879
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"coupon\" value=\"";
        // line 882
        echo (isset($context["coupon"]) ? $context["coupon"] : null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <button type=\"button\" id=\"button-coupon\" data-loading-text=\"";
        // line 884
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-voucher\">";
        // line 890
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"voucher\" value=\"";
        // line 893
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\" id=\"input-voucher\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <button type=\"button\" id=\"button-voucher\" data-loading-text=\"";
        // line 895
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-reward\">";
        // line 901
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"reward\" value=\"";
        // line 904
        echo (isset($context["reward"]) ? $context["reward"] : null);
        echo "\" id=\"input-reward\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
        // line 906
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-order-status\">";
        // line 912
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 915
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 916
            echo "                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["order_status_id"]) ? $context["order_status_id"] : null))) {
                // line 917
                echo "                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 919
                echo "                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                        ";
            }
            // line 921
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        echo "                    </select> <input type=\"hidden\" name=\"order_id\" value=\"";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-comment\">";
        // line 926
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"5\" id=\"input-comment\" class=\"form-control\">";
        // line 928
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate\">";
        // line 932
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"affiliate\" value=\"";
        // line 934
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\" id=\"input-affiliate\" class=\"form-control\"/> <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        echo (isset($context["affiliate_id"]) ? $context["affiliate_id"] : null);
        echo "\"/>
                  </div>
                </div>
              </fieldset>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">
                <button type=\"button\" onclick=\"\$('select[name=\\'shipping_method\\']').prop('disabled') ? \$('#collapse-payment').collapse('show') : \$('#collapse-shipping').collapse('show');\" class=\"btn btn-light\"><i class=\"fas fa-arrow-left\"></i> ";
        // line 941
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</button>
              </div>
              <div class=\"col-sm-6 text-right\">
                <button type=\"button\" id=\"button-refresh\" data-toggle=\"tooltip\" title=\"";
        // line 944
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></button>
                <button type=\"button\" id=\"button-save\" class=\"btn btn-primary\"><i class=\"fas fa-check-circle\"></i> ";
        // line 945
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
// Currency
\$('select[name=\\'currency\\']').on('change', function() {
\t\$.ajax({
\t\turl: '";
        // line 958
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/currency&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'currency=' + \$('select[name=\\'currency\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'currency\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'currency\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\t\$('#collapse-customer .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'currency\\']').addClass('is-invalid');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'currency\\']').trigger('change');

// Customer
\$('input[name=\\'customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 992
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcustomer_id: '0',
\t\t\t\t\tcustomer_group_id: '";
        // line 997
        echo (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null);
        echo "',
\t\t\t\t\tname: '";
        // line 998
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "',
\t\t\t\t\tcustomer_group: '',
\t\t\t\t\tfirstname: '',
\t\t\t\t\tlastname: '',
\t\t\t\t\temail: '',
\t\t\t\t\ttelephone: '',
\t\t\t\t\tcustom_field: [],
\t\t\t\t\taddress: []
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['customer_group'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id'],
\t\t\t\t\t\tcustomer_group_id: item['customer_group_id'],
\t\t\t\t\t\tfirstname: item['firstname'],
\t\t\t\t\t\tlastname: item['lastname'],
\t\t\t\t\t\temail: item['email'],
\t\t\t\t\t\ttelephone: item['telephone'],
\t\t\t\t\t\tcustom_field: item['custom_field'],
\t\t\t\t\t\taddress: item['address']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t// Reset all custom fields
\t\t\$('#collapse-customer input[type=\\'text\\'], #collapse-customer textarea').not('#collapse-customer input[name=\\'customer\\'], #collapse-customer input[name=\\'customer_id\\']').val('');
\t\t\$('#collapse-customer select option').not(\$('#collapse-customer select[name=\\'store_id\\'] option, #collapse-customer select[name=\\'currency\\'] option')).removeAttr('selected');
\t\t\$('#collapse-customer input[type=\\'checkbox\\'], #collapse-customer input[type=\\'radio\\']').removeAttr('checked');

\t\t\$('#collapse-customer input[name=\\'customer\\']').val(item['label']);
\t\t\$('#collapse-customer input[name=\\'customer_id\\']').val(item['value']);
\t\t\$('#collapse-customer select[name=\\'customer_group_id\\']').val(item['customer_group_id']);
\t\t\$('#collapse-customer input[name=\\'firstname\\']').val(item['firstname']);
\t\t\$('#collapse-customer input[name=\\'lastname\\']').val(item['lastname']);
\t\t\$('#collapse-customer input[name=\\'email\\']').val(item['email']);
\t\t\$('#collapse-customer input[name=\\'telephone\\']').val(item['telephone']);

\t\tfor (i in item.custom_field) {
\t\t\t\$('#collapse-customer select[name=\\'custom_field[' + i + ']\\']').val(item.custom_field[i]);
\t\t\t\$('#collapse-customer textarea[name=\\'custom_field[' + i + ']\\']').val(item.custom_field[i]);
\t\t\t\$('#collapse-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(item.custom_field[i]);
\t\t\t\$('#collapse-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(item.custom_field[i]);
\t\t\t\$('#collapse-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + item.custom_field[i] + '\\']').prop('checked', true);

\t\t\tif (item.custom_field[i] instanceof Array) {
\t\t\t\tfor (j = 0; j < item.custom_field[i].length; j++) {
\t\t\t\t\t\$('#collapse-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + item.custom_field[i][j] + '\\']').prop('checked', true);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t\$('select[name=\\'customer_group_id\\']').trigger('change');

\t\thtml = '<option value=\"0\">";
        // line 1055
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';

\t\tfor (i in  item['address']) {
\t\t\thtml += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
\t\t}

\t\t\$('select[name=\\'payment_address\\']').html(html);
\t\t\$('select[name=\\'shipping_address\\']').html(html);
\t}
});

// Custom Fields
\$('select[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/customfield&user_token=";
        // line 1069
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'customer_group_id\\']').trigger('change');

\$('#button-customer').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1095
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/customer&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#collapse-customer input[type=\\'text\\'], #collapse-customer input[type=\\'hidden\\'], #collapse-customer input[type=\\'radio\\']:checked, #collapse-customer input[type=\\'checkbox\\']:checked, #collapse-customer select, #collapse-customer textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-customer').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-customer').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-customer .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-' + i.replace('_', '-'));

\t\t\t\t\telement.addClass('is-invalid');

\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"invalid-tooltip d-block\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"invalid-tooltip d-block\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 1129
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/voucher/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdata: \$('#cart input[name^=\\'voucher\\'][type=\\'hidden\\']'),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tcrossDomain: true,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$('#button-voucher-add').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-voucher-add').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\t\t\t\tif (json['error'] && json['error']['warning']) {
\t\t\t\t\t\t\t\$('#collapse-customer .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).then(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: '";
        // line 1153
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdata: \$('#cart input[name^=\\'product\\'][type=\\'text\\'], #cart input[name^=\\'product\\'][type=\\'hidden\\'], #cart input[name^=\\'product\\'][type=\\'radio\\']:checked, #cart input[name^=\\'product\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'product\\'], #cart textarea[name^=\\'product\\']'),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tcrossDomain: true,
\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\$('#button-product-add').button('loading');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\$('#button-product-add').button('reset');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\t\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\t\t\t\t\tif (json['error'] && json['error']['warning']) {
\t\t\t\t\t\t\t\t\$('#collapse-customer .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t}).done(function() {
\t\t\t\t\t\t\$('#button-refresh').trigger('click');

\t\t\t\t\t\t\$('#collapse-cart').collapse('toggle');
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#tab-product input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1192
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id'],
\t\t\t\t\t\tmodel: item['model'],
\t\t\t\t\t\toption: item['option'],
\t\t\t\t\t\tprice: item['price']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('#tab-product input[name=\\'product\\']').val(item['label']);
\t\t\$('#tab-product input[name=\\'product_id\\']').val(item['value']);

\t\tif (item['option'] != '') {
\t\t\thtml = '<fieldset>';
\t\t\thtml += '  <legend>";
        // line 1213
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "</legend>';

\t\t\tfor (i = 0; i < item['option'].length; i++) {
\t\t\t\toption = item['option'][i];

\t\t\t\tif (option['type'] == 'select') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1223
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'radio') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1247
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'checkbox') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <div id=\"input-option' + option['product_option_id'] + '\">';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<label class=\"form-check\"><input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" class=\"form-check-input\" /> ' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</label>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </div>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'image') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1294
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'text') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'textarea') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\"><textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'file') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <button type=\"button\" id=\"button-upload' + option['product_option_id'] + '\" data-loading-text=\"";
        // line 1331
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "</button>';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option' + option['product_option_id'] + '\" />';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'date') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\"  id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'datetime') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group datetime\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'time') {
\t\t\t\t\thtml += '<div class=\"form-group row' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 col-form-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group time\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}
\t\t\t}

\t\t\thtml += '</fieldset>';

\t\t\t\$('#option').html(html);

\t\t\t\$('.date').datetimepicker({
\t\t\t\t'format': 'YYYY-MM-DD',
\t\t\t\t'locale': '";
        // line 1365
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t\t'allowInputToggle': true
\t\t\t});

\t\t\t\$('.time').datetimepicker({
\t\t\t\t'format': 'HH:mm',
\t\t\t\t'locale': '";
        // line 1371
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t\t'allowInputToggle': true
\t\t\t});

\t\t\t\$('.datetime').datetimepicker({
\t\t\t\t'format': 'YYYY-MM-DD HH:mm',
\t\t\t\t'locale': '";
        // line 1377
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t\t'allowInputToggle': true
\t\t\t});
\t\t} else {
\t\t\t\$('#option').html('');
\t\t}
\t}
});

\$('#button-product-add').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1388
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-product input[name=\\'product_id\\'], #tab-product input[name=\\'quantity\\'], #tab-product input[name^=\\'option\\'][type=\\'text\\'], #tab-product input[name^=\\'option\\'][type=\\'hidden\\'], #tab-product input[name^=\\'option\\'][type=\\'radio\\']:checked, #tab-product input[name^=\\'option\\'][type=\\'checkbox\\']:checked, #tab-product select[name^=\\'option\\'], #tab-product textarea[name^=\\'option\\']'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-product-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-product-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#tab-product').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\t\$(element).addClass('is-invalid');

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"invalid-tooltip d-block\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"invalid-tooltip d-block\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['store']) {
\t\t\t\t\t\$('#tab-product').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['store'] + '</div>');
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Voucher
\$('#button-voucher-add').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1440
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/voucher/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-voucher input[type=\\'text\\'], #tab-voucher input[type=\\'hidden\\'], #tab-voucher input[type=\\'radio\\']:checked, #tab-voucher input[type=\\'checkbox\\']:checked, #tab-voucher select, #tab-voucher textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#tab-voucher').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-' + i.replace('_', '-'));

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$(element).addClass('is-invalid');

\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"invalid-tooltip d-block\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"invalid-tooltip d-block\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$('input[name=\\'from_name\\']').val('');
\t\t\t\t\$('input[name=\\'from_email\\']').val('');
\t\t\t\t\$('input[name=\\'to_name\\']').val('');
\t\t\t\t\$('input[name=\\'to_email\\']').val('');
\t\t\t\t\$('textarea[name=\\'message\\']').val('');
\t\t\t\t\$('input[name=\\'amount\\']').val('";
        // line 1478
        echo twig_escape_filter($this->env, (isset($context["voucher_min"]) ? $context["voucher_min"] : null), "js");
        echo "');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#cart').on('click', '.btn-danger', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: '";
        // line 1494
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/remove&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'key=' + encodeURIComponent(this.value),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\t\$('#collapse-cart .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t} else {
\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#cart').on('click', '.btn-primary', function() {
\tvar element = this;

\t// Refresh products, vouchers and totals
\t\$.ajax({
\t\turl: '";
        // line 1527
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#cart input[name^=\\'product\\'][type=\\'text\\'], #cart input[name^=\\'product\\'][type=\\'hidden\\'], #cart input[name^=\\'product\\'][type=\\'radio\\']:checked, #cart input[name^=\\'product\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'product\\'], #cart textarea[name^=\\'product\\']'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error'] && json['error']['warning']) {
\t\t\t\t\$('#collapse-cart .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#collapse-cart .card-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t}).done(function() {
\t\t\$('#button-refresh').trigger('click');
\t});
});

\$('#button-cart').on('click', function() {
\t\$('#collapse-payment').collapse('toggle');
});

// Payment Address
\$('select[name=\\'payment_address\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/address&user_token=";
        // line 1565
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&address_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'payment_address\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'payment_address\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t// Reset all fields
\t\t\t\$('#collapse-payment input[type=\\'text\\'], #collapse-payment input[type=\\'text\\'], #collapse-payment textarea').val('');
\t\t\t\$('#collapse-payment select option').not('#collapse-payment select[name=\\'payment_address\\']').removeAttr('selected');
\t\t\t\$('#collapse-payment input[type=\\'checkbox\\'], #collapse-payment input[type=\\'radio\\']').removeAttr('checked');

\t\t\t\$('#collapse-payment input[name=\\'firstname\\']').val(json['firstname']);
\t\t\t\$('#collapse-payment input[name=\\'lastname\\']').val(json['lastname']);
\t\t\t\$('#collapse-payment input[name=\\'company\\']').val(json['company']);
\t\t\t\$('#collapse-payment input[name=\\'address_1\\']').val(json['address_1']);
\t\t\t\$('#collapse-payment input[name=\\'address_2\\']').val(json['address_2']);
\t\t\t\$('#collapse-payment input[name=\\'city\\']').val(json['city']);
\t\t\t\$('#collapse-payment input[name=\\'postcode\\']').val(json['postcode']);
\t\t\t\$('#collapse-payment select[name=\\'country_id\\']').val(json['country_id']);

\t\t\tpayment_zone_id = json['zone_id'];

\t\t\tfor (i in json['custom_field']) {
\t\t\t\t\$('#collapse-payment select[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#collapse-payment textarea[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#collapse-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#collapse-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#collapse-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);
\t\t\t\t\$('#collapse-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);

\t\t\t\tif (json['custom_field'][i] instanceof Array) {
\t\t\t\t\tfor (j = 0; j < json['custom_field'][i].length; j++) {
\t\t\t\t\t\t\$('#collapse-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i][j] + '\\']').prop('checked', true);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t\$('#collapse-payment select[name=\\'country_id\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

var payment_zone_id = '";
        // line 1613
        echo (isset($context["payment_zone_id"]) ? $context["payment_zone_id"] : null);
        echo "';

\$('#collapse-payment select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1617
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-payment select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-payment select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment input[name=\\'postcode\\']').closest('.form-group').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment input[name=\\'postcode\\']').closest('.form-group').removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 1632
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == payment_zone_id) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1645
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment select[name=\\'country_id\\']').trigger('change');

\$('#button-payment-address').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1660
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/payment/address&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#collapse-payment input[type=\\'text\\'], #collapse-payment input[type=\\'hidden\\'], #collapse-payment input[type=\\'radio\\']:checked, #collapse-payment input[type=\\'checkbox\\']:checked, #collapse-payment select, #collapse-payment textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-payment-address').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-payment-address').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-payment .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$(element).addClass('is-invalid');

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"invalid-tooltip d-block\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"invalid-tooltip d-block\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// Payment Methods
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 1696
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/payment/methods&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tcrossDomain: true,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$('#button-payment-address').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-payment-address').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#collapse-payment .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\thtml = '<option value=\"\">";
        // line 1709
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\t\t\tif (json['payment_methods']) {
\t\t\t\t\t\t\t\tfor (i in json['payment_methods']) {
\t\t\t\t\t\t\t\t\tif (json['payment_methods'][i]['code'] == \$('select[name=\\'payment_method\\'] option:selected').val()) {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['payment_methods'][i]['code'] + '\" selected=\"selected\">' + json['payment_methods'][i]['title'] + '</option>';
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['payment_methods'][i]['code'] + '\">' + json['payment_methods'][i]['title'] + '</option>';
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('select[name=\\'payment_method\\']').html(html);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
\t\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\t\$('#button-refresh').trigger('click');

\t\t\t\t\t// If shipping required got to shipping tab else total tabs
\t\t\t\t\tif (\$('select[name=\\'shipping_method\\']').prop('disabled')) {
\t\t\t\t\t\t\$('#collapse-total').collapse('toggle');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#collapse-shipping').collapse('toggle');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Shipping Address
\$('select[name=\\'shipping_address\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/address&user_token=";
        // line 1749
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&address_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'shipping_address\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'shipping_address\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t// Reset all fields
\t\t\t\$('#collapse-shipping input[type=\\'text\\'], #collapse-shipping input[type=\\'text\\'], #collapse-shipping textarea').val('');
\t\t\t\$('#collapse-shipping select option').not('#collapse-shipping select[name=\\'shipping_address\\']').removeAttr('selected');
\t\t\t\$('#collapse-shipping input[type=\\'checkbox\\'], #collapse-shipping input[type=\\'radio\\']').removeAttr('checked');

\t\t\t\$('#collapse-shipping input[name=\\'firstname\\']').val(json['firstname']);
\t\t\t\$('#collapse-shipping input[name=\\'lastname\\']').val(json['lastname']);
\t\t\t\$('#collapse-shipping input[name=\\'company\\']').val(json['company']);
\t\t\t\$('#collapse-shipping input[name=\\'address_1\\']').val(json['address_1']);
\t\t\t\$('#collapse-shipping input[name=\\'address_2\\']').val(json['address_2']);
\t\t\t\$('#collapse-shipping input[name=\\'city\\']').val(json['city']);
\t\t\t\$('#collapse-shipping input[name=\\'postcode\\']').val(json['postcode']);
\t\t\t\$('#collapse-shipping select[name=\\'country_id\\']').val(json['country_id']);

\t\t\tshipping_zone_id = json['zone_id'];

\t\t\tfor (i in json['custom_field']) {
\t\t\t\t\$('#collapse-shipping select[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#collapse-shipping textarea[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#collapse-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#collapse-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#collapse-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);
\t\t\t\t\$('#collapse-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);

\t\t\t\tif (json['custom_field'][i] instanceof Array) {
\t\t\t\t\tfor (j = 0; j < json['custom_field'][i].length; j++) {
\t\t\t\t\t\t\$('#collapse-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i][j] + '\\']').prop('checked', true);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t\$('#collapse-shipping select[name=\\'country_id\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

var shipping_zone_id = '";
        // line 1797
        echo (isset($context["shipping_zone_id"]) ? $context["shipping_zone_id"] : null);
        echo "';

\$('#collapse-shipping select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1801
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-shipping select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-shipping select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-shipping input[name=\\'postcode\\']').closest('.form-group').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-shipping input[name=\\'postcode\\']').closest('.form-group').removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 1816
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == shipping_zone_id) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1829
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-shipping select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-shipping select[name=\\'country_id\\']').trigger('change');

\$('#button-shipping-address').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1844
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/shipping/address&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#collapse-shipping input[type=\\'text\\'], #collapse-shipping input[type=\\'hidden\\'], #collapse-shipping input[type=\\'radio\\']:checked, #collapse-shipping input[type=\\'checkbox\\']:checked, #collapse-shipping select, #collapse-shipping textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping-address').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-shipping .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$(element).addClass('is-invalid');

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"invalid-tooltip d-block\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"invalid-tooltip d-block\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// Shipping Methods
\t\t\t\tvar request = \$.ajax({
\t\t\t\t\turl: '";
        // line 1880
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/shipping/methods&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$('#button-shipping-address').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-shipping-address').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#collapse-shipping .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Shipping Methods
\t\t\t\t\t\t\thtml = '<option value=\"\">";
        // line 1893
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\t\t\tif (json['shipping_methods']) {
\t\t\t\t\t\t\t\tfor (i in json['shipping_methods']) {
\t\t\t\t\t\t\t\t\thtml += '<optgroup label=\"' + json['shipping_methods'][i]['title'] + '\">';

\t\t\t\t\t\t\t\t\tif (!json['shipping_methods'][i]['error']) {
\t\t\t\t\t\t\t\t\t\tfor (j in json['shipping_methods'][i]['quote']) {
\t\t\t\t\t\t\t\t\t\t\tif (json['shipping_methods'][i]['quote'][j]['code'] == \$('select[name=\\'shipping_method\\'] option:selected').val()) {
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" selected=\"selected\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"\" style=\"color: #F00;\" disabled=\"disabled\">' + json['shipping_method'][i]['error'] + '</option>';
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\thtml += '</optgroup>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('select[name=\\'shipping_method\\']').html(html);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
\t\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\t\$('#button-refresh').trigger('click');

\t\t\t\t\t\$('#collapse-total').collapse('toggle');
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Shipping Method
\$('#button-shipping-method').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1938
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/shipping/method&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'shipping_method=' + \$('select[name=\\'shipping_method\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping-method').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping-method').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'shipping_method\\']').addClass('is-invalid');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Payment Method
\$('#button-payment-method').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1976
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/payment/method&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'payment_method=' + \$('select[name=\\'payment_method\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-payment-method').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-payment-method').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'payment_method\\']').addClass('is-invalid');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Coupon
\$('#button-coupon').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2014
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/coupon&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'coupon=' + \$('input[name=\\'coupon\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'coupon\\']').addClass('is-invalid');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Voucher
\$('#button-voucher').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2052
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/voucher&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'voucher=' + \$('input[name=\\'voucher\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'voucher\\']').addClass('is-invalid');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Reward
\$('#button-reward').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2090
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/reward&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'reward=' + \$('input[name=\\'reward\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();
\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\tif (json['error']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'reward\\']').addClass('is-invalid');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Affiliate
\$('input[name=\\'affiliate\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 2129
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcustomer_id: 0,
\t\t\t\t\tname: '";
        // line 2134
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'affiliate\\']').val(item['label']);
\t\t\$('input[name=\\'affiliate_id\\']').val(item['value']);
\t}
});

// Checkout
\$('#button-save').on('click', function() {
\tif (\$('input[name=\\'order_id\\']').val() == 0) {
\t\tvar url = '";
        // line 2155
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val();
\t} else {
\t\tvar url = '";
        // line 2157
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/edit&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val() + '&order_id=' + \$('input[name=\\'order_id\\']').val();
\t}

\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('select[name=\\'payment_method\\'] option:selected, select[name=\\'shipping_method\\'] option:selected,  #collapse-total select[name=\\'order_status_id\\'], #collapse-total select, textarea[name=\\'comment\\'], input[name=\\'affiliate_id\\']'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-save').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-save').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#collapse-total .card-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['order_id']) {
\t\t\t\t\$('input[name=\\'order_id\\']').val(json['order_id']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#content').on('click', 'button[id^=\\'button-upload\\'], button[id^=\\'button-custom-field\\'], button[id^=\\'button-payment-custom-field\\'], button[id^=\\'button-shipping-custom-field\\']', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload/upload&user_token=";
        // line 2211
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.invalid-tooltip').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').after('<div class=\"invalid-tooltip d-block\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}

\t\t\t\t\tif (json['code']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 2249
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 2255
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 2261
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#collapse-customer .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-customer .form-group').length) {
\t\t\$('#collapse-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-customer .form-group').length) {
\t\t\$('#collapse-customer .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-customer .form-group').length) {
\t\t\$('#collapse-customer .form-group:first').before(this);
\t}
});

// Sort the custom fields
\$('#collapse-payment .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-payment .form-group').length) {
\t\t\$('#collapse-payment .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-payment .form-group').length) {
\t\t\$('#collapse-payment .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-payment .form-group').length) {
\t\t\$('#collapse-payment .form-group:first').before(this);
\t}
});

\$('#collapse-shipping .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-shipping .form-group').length) {
\t\t\$('#collapse-shipping .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-shipping .form-group').length) {
\t\t\$('#collapse-shipping .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-shipping .form-group').length) {
\t\t\$('#collapse-shipping .form-group:first').before(this);
\t}
});

// Add all products to the cart using the api
\$('#button-refresh').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2313
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/products&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-refresh').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-refresh').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['stock'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['minimum']) {
\t\t\t\t\tfor (i in json['error']['minimum']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['minimum'][i] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tvar shipping = false;

\t\t\thtml = '';

\t\t\tif (json['products'].length) {
\t\t\t\tfor (i = 0; i < json['products'].length; i++) {
\t\t\t\t\tproduct = json['products'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['name'] + ' ' + (!product['stock'] ? '<span class=\"text-danger\">***</span>' : '') + '<br />';
\t\t\t\t\thtml += '  <input type=\"hidden\" name=\"product[' + i + '][product_id]\" value=\"' + product['product_id'] + '\" />';

\t\t\t\t\tif (product['option']) {
\t\t\t\t\t\tfor (j = 0; j < product['option'].length; j++) {
\t\t\t\t\t\t\toption = product['option'][j];

\t\t\t\t\t\t\thtml += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';

\t\t\t\t\t\t\tif (option['type'] == 'select' || option['type'] == 'radio' || option['type'] == 'image') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (option['type'] == 'checkbox') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" />';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\thtml += '</td>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['model'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\"><div class=\"input-group\"><input type=\"text\" name=\"product[' + i + '][quantity]\" value=\"' + product['quantity'] + '\" class=\"form-control\" /><div class=\"input-group-append\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 2376
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-sync\"></i></button></div></div></td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['total'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-center\" style=\"width: 3px;\"><button type=\"button\" value=\"' + product['cart_id'] + '\" data-toggle=\"tooltip\" title=\"";
        // line 2379
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\t\t\t\thtml += '</tr>';

\t\t\t\t\tif (product['shipping'] != 0) {
\t\t\t\t\t\tshipping = true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif (!shipping) {
\t\t\t\t\$('select[name=\\'shipping_method\\'] option').removeAttr('selected');
\t\t\t\t\$('select[name=\\'shipping_method\\']').prop('disabled', true);
\t\t\t\t\$('#button-shipping-method').prop('disabled', true);
\t\t\t} else {
\t\t\t\t\$('select[name=\\'shipping_method\\']').prop('disabled', false);
\t\t\t\t\$('#button-shipping-method').prop('disabled', false);
\t\t\t}

\t\t\tif (json['vouchers'].length) {
\t\t\t\tfor (i in json['vouchers']) {
\t\t\t\t\tvoucher = json['vouchers'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + voucher['description'];
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][code]\" value=\"' + voucher['code'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][description]\" value=\"' + voucher['description'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][from_name]\" value=\"' + voucher['from_name'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][from_email]\" value=\"' + voucher['from_email'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][to_name]\" value=\"' + voucher['to_name'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][to_email]\" value=\"' + voucher['to_email'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][voucher_theme_id]\" value=\"' + voucher['voucher_theme_id'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][message]\" value=\"' + voucher['message'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][amount]\" value=\"' + voucher['amount'] + '\" />';
\t\t\t\t\thtml += '  </td>';
\t\t\t\t\thtml += '  <td class=\"text-left\"></td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">1</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-center\" style=\"width: 3px;\"><button type=\"button\" value=\"' + voucher['code'] + '\" data-toggle=\"tooltip\" title=\"";
        // line 2417
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (!json['products'].length && !json['vouchers'].length) {
\t\t\t\thtml += '<tr>';
\t\t\t\thtml += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2424
        echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
        echo "</td>';
\t\t\t\thtml += '</tr>';
\t\t\t}

\t\t\t\$('#cart').html(html);

\t\t\t// Totals
\t\t\thtml = '';

\t\t\tif (json['products'].length) {
\t\t\t\tfor (i = 0; i < json['products'].length; i++) {
\t\t\t\t\tproduct = json['products'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['name'] + ' ' + (!product['stock'] ? '<span class=\"text-danger\">***</span>' : '') + '<br />';

\t\t\t\t\tif (product['option']) {
\t\t\t\t\t\tfor (j = 0; j < product['option'].length; j++) {
\t\t\t\t\t\t\toption = product['option'][j];

\t\t\t\t\t\t\thtml += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\thtml += '  </td>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['model'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['quantity'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['total'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['vouchers'].length) {
\t\t\t\tfor (i in json['vouchers']) {
\t\t\t\t\tvoucher = json['vouchers'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + voucher['description'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-left\"></td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">1</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['amount'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['amount'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['totals'].length) {
\t\t\t\tfor (i in json['totals']) {
\t\t\t\t\ttotal = json['totals'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-right\" colspan=\"4\">' + total['title'] + ':</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + total['text'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (!json['totals'].length && !json['products'].length && !json['vouchers'].length) {
\t\t\t\thtml += '<tr>';
\t\t\t\thtml += '  <td colspan=\"5\" class=\"text-center\">";
        // line 2484
        echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
        echo "</td>';
\t\t\t\thtml += '</tr>';
\t\t\t}

\t\t\t\$('#total').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 2496
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "sale/order_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4359 => 2496,  4344 => 2484,  4281 => 2424,  4269 => 2417,  4226 => 2379,  4218 => 2376,  4150 => 2313,  4095 => 2261,  4086 => 2255,  4077 => 2249,  4036 => 2211,  3977 => 2157,  3970 => 2155,  3946 => 2134,  3938 => 2129,  3894 => 2090,  3851 => 2052,  3808 => 2014,  3765 => 1976,  3722 => 1938,  3674 => 1893,  3656 => 1880,  3615 => 1844,  3597 => 1829,  3581 => 1816,  3563 => 1801,  3556 => 1797,  3505 => 1749,  3462 => 1709,  3444 => 1696,  3403 => 1660,  3385 => 1645,  3369 => 1632,  3351 => 1617,  3344 => 1613,  3293 => 1565,  3250 => 1527,  3212 => 1494,  3193 => 1478,  3150 => 1440,  3093 => 1388,  3079 => 1377,  3070 => 1371,  3061 => 1365,  3022 => 1331,  2982 => 1294,  2932 => 1247,  2905 => 1223,  2892 => 1213,  2868 => 1192,  2824 => 1153,  2795 => 1129,  2756 => 1095,  2727 => 1069,  2710 => 1055,  2650 => 998,  2646 => 997,  2638 => 992,  2599 => 958,  2583 => 945,  2577 => 944,  2571 => 941,  2559 => 934,  2554 => 932,  2547 => 928,  2542 => 926,  2534 => 922,  2528 => 921,  2520 => 919,  2512 => 917,  2509 => 916,  2505 => 915,  2499 => 912,  2488 => 906,  2481 => 904,  2475 => 901,  2464 => 895,  2457 => 893,  2451 => 890,  2440 => 884,  2435 => 882,  2429 => 879,  2418 => 873,  2414 => 871,  2406 => 869,  2404 => 868,  2400 => 867,  2393 => 863,  2382 => 857,  2378 => 855,  2370 => 853,  2368 => 852,  2364 => 851,  2357 => 847,  2352 => 845,  2342 => 838,  2334 => 833,  2330 => 832,  2326 => 831,  2322 => 830,  2318 => 829,  2308 => 822,  2296 => 815,  2290 => 812,  2285 => 809,  2279 => 808,  2276 => 807,  2259 => 799,  2251 => 796,  2244 => 795,  2241 => 794,  2224 => 786,  2216 => 783,  2209 => 782,  2206 => 781,  2189 => 773,  2181 => 770,  2174 => 769,  2171 => 768,  2160 => 764,  2152 => 763,  2147 => 761,  2140 => 760,  2137 => 759,  2124 => 755,  2117 => 753,  2110 => 752,  2107 => 751,  2094 => 747,  2087 => 745,  2080 => 744,  2077 => 743,  2071 => 739,  2064 => 737,  2059 => 735,  2052 => 734,  2047 => 732,  2040 => 731,  2038 => 730,  2035 => 729,  2031 => 728,  2027 => 727,  2022 => 725,  2015 => 724,  2012 => 723,  2006 => 719,  1999 => 717,  1994 => 715,  1987 => 714,  1982 => 712,  1975 => 711,  1973 => 710,  1970 => 709,  1966 => 708,  1962 => 707,  1957 => 705,  1950 => 704,  1947 => 703,  1941 => 699,  1935 => 698,  1927 => 696,  1919 => 694,  1916 => 693,  1912 => 692,  1908 => 691,  1902 => 690,  1895 => 688,  1888 => 687,  1885 => 686,  1882 => 685,  1878 => 684,  1870 => 679,  1864 => 675,  1858 => 674,  1850 => 672,  1842 => 670,  1839 => 669,  1835 => 668,  1831 => 667,  1825 => 664,  1818 => 660,  1813 => 658,  1806 => 654,  1801 => 652,  1794 => 648,  1789 => 646,  1782 => 642,  1777 => 640,  1770 => 636,  1765 => 634,  1758 => 630,  1753 => 628,  1746 => 624,  1741 => 622,  1735 => 618,  1716 => 616,  1712 => 615,  1708 => 614,  1702 => 611,  1694 => 606,  1682 => 599,  1676 => 596,  1671 => 593,  1665 => 592,  1662 => 591,  1645 => 583,  1637 => 580,  1630 => 579,  1627 => 578,  1610 => 570,  1602 => 567,  1595 => 566,  1592 => 565,  1575 => 557,  1567 => 554,  1560 => 553,  1557 => 552,  1546 => 548,  1538 => 547,  1533 => 545,  1526 => 544,  1523 => 543,  1510 => 539,  1503 => 537,  1496 => 536,  1493 => 535,  1480 => 531,  1473 => 529,  1466 => 528,  1463 => 527,  1457 => 523,  1450 => 521,  1445 => 519,  1438 => 518,  1433 => 516,  1426 => 515,  1424 => 514,  1421 => 513,  1417 => 512,  1413 => 511,  1408 => 509,  1401 => 508,  1398 => 507,  1392 => 503,  1385 => 501,  1380 => 499,  1373 => 498,  1368 => 496,  1361 => 495,  1359 => 494,  1356 => 493,  1352 => 492,  1348 => 491,  1343 => 489,  1336 => 488,  1333 => 487,  1327 => 483,  1321 => 482,  1313 => 480,  1305 => 478,  1302 => 477,  1298 => 476,  1294 => 475,  1288 => 474,  1281 => 472,  1274 => 471,  1271 => 470,  1268 => 469,  1264 => 468,  1256 => 463,  1250 => 459,  1244 => 458,  1236 => 456,  1228 => 454,  1225 => 453,  1221 => 452,  1217 => 451,  1211 => 448,  1204 => 444,  1199 => 442,  1192 => 438,  1187 => 436,  1180 => 432,  1175 => 430,  1168 => 426,  1163 => 424,  1156 => 420,  1151 => 418,  1144 => 414,  1139 => 412,  1132 => 408,  1127 => 406,  1121 => 402,  1102 => 400,  1098 => 399,  1094 => 398,  1088 => 395,  1080 => 390,  1070 => 383,  1064 => 380,  1051 => 372,  1043 => 367,  1038 => 365,  1029 => 359,  1023 => 355,  1012 => 353,  1008 => 352,  1002 => 349,  993 => 343,  984 => 337,  975 => 331,  966 => 325,  961 => 323,  951 => 318,  940 => 310,  931 => 304,  926 => 302,  918 => 297,  914 => 296,  908 => 292,  901 => 288,  898 => 287,  895 => 286,  889 => 285,  887 => 284,  875 => 277,  837 => 276,  833 => 275,  830 => 274,  825 => 273,  822 => 272,  816 => 271,  814 => 270,  804 => 265,  800 => 264,  796 => 263,  788 => 262,  778 => 260,  775 => 259,  765 => 257,  762 => 256,  752 => 254,  750 => 253,  743 => 251,  740 => 250,  736 => 249,  730 => 248,  725 => 246,  722 => 245,  717 => 244,  714 => 243,  712 => 242,  705 => 238,  701 => 237,  697 => 236,  693 => 235,  689 => 234,  685 => 233,  675 => 226,  664 => 220,  660 => 218,  654 => 217,  651 => 216,  634 => 208,  626 => 205,  619 => 204,  616 => 203,  599 => 195,  591 => 192,  584 => 191,  581 => 190,  564 => 182,  556 => 179,  549 => 178,  546 => 177,  535 => 173,  529 => 172,  524 => 170,  517 => 169,  514 => 168,  501 => 164,  494 => 162,  487 => 161,  484 => 160,  471 => 156,  464 => 154,  457 => 153,  454 => 152,  448 => 148,  441 => 146,  436 => 144,  429 => 143,  424 => 141,  417 => 140,  415 => 139,  412 => 138,  408 => 137,  404 => 136,  399 => 134,  392 => 133,  389 => 132,  383 => 128,  376 => 126,  371 => 124,  364 => 123,  359 => 121,  352 => 120,  350 => 119,  347 => 118,  343 => 117,  339 => 116,  334 => 114,  327 => 113,  324 => 112,  318 => 108,  312 => 107,  304 => 105,  296 => 103,  293 => 102,  289 => 101,  285 => 100,  279 => 99,  272 => 97,  265 => 96,  262 => 95,  259 => 94,  255 => 93,  249 => 90,  244 => 88,  237 => 84,  232 => 82,  225 => 78,  220 => 76,  213 => 72,  208 => 70,  202 => 66,  196 => 65,  188 => 63,  180 => 61,  177 => 60,  173 => 59,  167 => 56,  156 => 52,  151 => 50,  145 => 46,  139 => 45,  131 => 43,  123 => 41,  120 => 40,  116 => 39,  110 => 36,  104 => 32,  98 => 31,  90 => 29,  82 => 27,  79 => 26,  75 => 25,  69 => 22,  61 => 17,  53 => 11,  42 => 9,  38 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="float-right"><a href="{{ cancel }}" class="btn btn-light"><i class="fas fa-reply"></i> {{ button_cancel }}</a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ol class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li class="breadcrumb-item"><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ol>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div id="collapse">*/
/*       <div class="card">*/
/*         <div class="card-header"><i class="fas fa-user fa-fw"></i> {{ text_customer_detail }}</div>*/
/*         <div id="collapse-customer" data-parent="#collapse" class="collapse show">*/
/*           <div class="card-body">*/
/*             <form>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-store">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="store_id" id="input-store" class="form-control">*/
/*                     {% for store in stores %}*/
/*                       {% if store.store_id == store_id %}*/
/*                         <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-currency">{{ entry_currency }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="currency" id="input-currency" class="form-control">*/
/*                     {% for currency in currencies %}*/
/*                       {% if currency.code == currency_code %}*/
/*                         <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-customer">{{ entry_customer }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="customer" value="{{ customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control"/> <input type="hidden" name="customer_id" value="{{ customer_id }}"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="customer_group_id" id="input-customer-group" class="form-control">*/
/*                     {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == customer_group_id %}*/
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="firstname" value="{{ firstname }}" id="input-firstname" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="lastname" value="{{ lastname }}" id="input-lastname" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="telephone" value="{{ telephone }}" id="input-telephone" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               {% for custom_field in custom_fields %}*/
/*                 {% if custom_field.location == 'account' %}*/
/*                   {% if custom_field.type == 'select' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                           <option value="">{{ text_select }}</option>*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                             {% else %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                             {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'radio' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div id="input-custom-field{{ custom_field.custom_field_id }}">*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <label class="form-check">*/
/*                               {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                                 <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% else %}*/
/*                                 <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% endif %}*/
/*                             </label>*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'checkbox' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" style="height: 150px; overflow: auto;">*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <label class="form-check">*/
/*                               {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                                 <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% else %}*/
/*                                 <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% endif %}*/
/*                             </label>*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'text' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'textarea' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'file' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" class="btn btn-light"><i class="fas fa-upload"></i> {{ button_upload }}</button>*/
/*                         <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'date' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group date">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'time' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group time">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'datetime' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group datetime">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </form>*/
/*             <div class="text-right">*/
/*               <buttton id="button-customer" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fas fa-arrow-right"></i> {{ button_continue }}</buttton>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="card">*/
/*         <div class="card-header"><i class="fas fa-shopping-cart fa-fw"></i> {{ text_cart }}</div>*/
/*         <div id="collapse-cart" data-parent="#collapse" class="collapse">*/
/*           <div class="card-body">*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td class="text-left">{{ column_product }}</td>*/
/*                     <td class="text-left">{{ column_model }}</td>*/
/*                     <td class="text-right">{{ column_quantity }}</td>*/
/*                     <td class="text-right">{{ column_price }}</td>*/
/*                     <td class="text-right">{{ column_total }}</td>*/
/*                     <td>{{ column_action }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody id="cart">*/
/*                   {% if order_products or order_vouchers %}*/
/*                   {% set product_row = 0 %}*/
/*                   {% for order_product in order_products %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ order_product.name }}*/
/*                         <br/>*/
/*                         <input type="hidden" name="product[{{ product_row }}][product_id]" value="{{ order_product.product_id }}"/>*/
/*                         {% for option in order_product.option %}*/
/*                           -*/
/*                           <small>{{ option.name }}: {{ option.value }}</small>*/
/*                           <br/>*/
/*                           {% if option.type == 'select' or option.type == 'radio' or option.type == 'image' %}*/
/*                             <input type="hidden" name="product[{{ product_row }}][option][{{ option.product_option_id }}]" value="{{ option.product_option_value_id }}"/>*/
/*                           {% endif %}*/
/*                           {% if option.type == 'checkbox' %}*/
/*                             <input type="hidden" name="product[{{ product_row }}][option][{{ option.product_option_id }}][]" value="{{ option.product_option_value_id }}"/>*/
/*                           {% endif %}*/
/*                           {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}*/
/*                             <input type="hidden" name="product[{{ product_row }}][option][{{ option.product_option_id }}]" value="{{ option.value }}"/>*/
/*                           {% endif %}*/
/*                         {% endfor %}</td>*/
/*                       <td class="text-left">{{ order_product.model }}</td>*/
/*                       <td class="text-right">{{ order_product.quantity }}*/
/*                         <input type="hidden" name="product[{{ product_row }}][quantity]" value="{{ order_product.quantity }}"/></td>*/
/*                       <td class="text-right"></td>*/
/*                       <td class="text-right"></td>*/
/*                       <td class="text-center"></td>*/
/*                     </tr>*/
/*                     {% set product_row = product_row + 1 %}*/
/*                   {% endfor %}*/
/*                   {% set voucher_row = 0 %}*/
/*                   {% for order_voucher in order_vouchers %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ order_voucher.description }}*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][voucher_id]" value="{{ order_voucher.voucher_id }}"/> <input type="hidden" name="voucher[{{ voucher_row }}][description]" value="{{ order_voucher.description }}"/> <input type="hidden" name="voucher[{{ voucher_row }}][code]" value="{{ order_voucher.code }}"/> <input type="hidden" name="voucher[{{ voucher_row }}][from_name]" value="{{ order_voucher.from_name }}"/> <input type="hidden" name="voucher[{{ voucher_row }}][from_email]" value="{{ order_voucher.from_email }}"/> <input type="hidden" name="voucher[{{ voucher_row }}][to_name]" value="{{ order_voucher.to_name }}"/> <input type="hidden" name="voucher[{{ voucher_row }}][to_email]" value="{{ order_voucher.to_email }}"/> <input type="hidden" name="voucher[{{ voucher_row }}][voucher_theme_id]" value="{{ order_voucher.voucher_theme_id }}"/> <input type="hidden" name="voucher[{{ voucher_row }}][message]" value="{{ order_voucher.message }}"/>*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][amount]" value="{{ order_voucher.amount }}"/></td>*/
/*                       <td class="text-left"></td>*/
/*                       <td class="text-right">1</td>*/
/*                       <td class="text-right"></td>*/
/*                       <td class="text-right"></td>*/
/*                       <td class="text-center"></td>*/
/*                     </tr>*/
/*                     {% set voucher_row = voucher_row + 1 %}*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*                 {% endif %}*/
/*               </table>*/
/*             </div>*/
/*             <form>*/
/*               <ul class="nav nav-tabs nav-justified">*/
/*                 <li class="nav-item"><a href="#tab-product" data-toggle="tab" class="nav-link active">{{ tab_product }}</a></li>*/
/*                 <li class="nav-item"><a href="#tab-voucher" data-toggle="tab" class="nav-link">{{ tab_voucher }}</a></li>*/
/*               </ul>*/
/*               <div class="tab-content">*/
/*                 <div class="tab-pane active" id="tab-product">*/
/*                   <fieldset>*/
/*                     <legend>{{ text_product }}</legend>*/
/*                     <div class="form-group row">*/
/*                       <label class="col-sm-2 col-form-label" for="input-product">{{ entry_product }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="product" value="" id="input-product" class="form-control"/> <input type="hidden" name="product_id" value=""/>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group row">*/
/*                       <label class="col-sm-2 col-form-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="quantity" value="1" id="input-quantity" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div id="option"></div>*/
/*                   </fieldset>*/
/*                   <div class="text-right">*/
/*                     <button type="button" id="button-product-add" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> {{ button_product_add }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="tab-pane" id="tab-voucher">*/
/*                   <fieldset>*/
/*                     <legend>{{ text_voucher }}</legend>*/
/*                     <div class="form-group row required">*/
/*                       <label class="col-sm-2 col-form-label" for="input-to-name">{{ entry_to_name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="to_name" value="" id="input-to-name" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group row required">*/
/*                       <label class="col-sm-2 col-form-label" for="input-to-email">{{ entry_to_email }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="to_email" value="" id="input-to-email" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group row required">*/
/*                       <label class="col-sm-2 col-form-label" for="input-from-name">{{ entry_from_name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="from_name" value="" id="input-from-name" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group row required">*/
/*                       <label class="col-sm-2 col-form-label" for="input-from-email">{{ entry_from_email }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="from_email" value="" id="input-from-email" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group row required">*/
/*                       <label class="col-sm-2 col-form-label" for="input-theme">{{ entry_theme }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <select name="voucher_theme_id" id="input-theme" class="form-control">*/
/*                           {% for voucher_theme in voucher_themes %}*/
/*                             <option value="{{ voucher_theme.voucher_theme_id }}">{{ voucher_theme.name }}</option>*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group row">*/
/*                       <label class="col-sm-2 col-form-label" for="input-message">{{ entry_message }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="message" rows="5" id="input-message" class="form-control"></textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group row required">*/
/*                       <label class="col-sm-2 col-form-label" for="input-amount">{{ entry_amount }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="amount" value="{{ voucher_min }}" id="input-amount" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   </fieldset>*/
/*                   <div class="text-right">*/
/*                     <button type="button" id="button-voucher-add" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> {{ button_voucher_add }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </form>*/
/*             <br/>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">*/
/*                 <a href="#collapse-customer" data-toggle="collapse" data-parent="#collapse" class="btn btn-light"><i class="fas fa-arrow-left"></i> {{ button_back }}</a>*/
/*               </div>*/
/*               <div class="col-sm-6 text-right">*/
/*                 <button type="button" id="button-cart" class="btn btn-primary"><i class="fas fa-arrow-right"></i> {{ button_continue }}</button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="card">*/
/*         <div class="card-header"><i class="fas fa-credit-card fa-fw"></i> {{ text_payment_detail }}</div>*/
/*         <div id="collapse-payment" data-parent="#collapse" class="collapse">*/
/*           <div class="card-body">*/
/*             <form>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_address" id="input-payment-address" class="form-control">*/
/*                     <option value="0" selected="selected">{{ text_none }}</option>*/
/*                     {% for address in addresses %}*/
/*                       <option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.country }}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="firstname" value="{{ payment_firstname }}" id="input-payment-firstname" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="lastname" value="{{ payment_lastname }}" id="input-payment-lastname" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-company">{{ entry_company }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="company" value="{{ payment_company }}" id="input-payment-company" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="address_1" value="{{ payment_address_1 }}" id="input-payment-address-1" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="address_2" value="{{ payment_address_2 }}" id="input-payment-address-2" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-city">{{ entry_city }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="city" value="{{ payment_city }}" id="input-payment-city" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-postcode">{{ entry_postcode }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="postcode" value="{{ payment_postcode }}" id="input-payment-postcode" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="country_id" id="input-payment-country" class="form-control">*/
/*                     <option value="">{{ text_select }}</option>*/
/*                     {% for country in countries %}*/
/*                       {% if country.country_id == payment_country_id %}*/
/*                         <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-payment-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="zone_id" id="input-payment-zone" class="form-control"> </select>*/
/*                 </div>*/
/*               </div>*/
/*               {% for custom_field in custom_fields %}*/
/*                 {% if custom_field.location == 'address' %}*/
/*                   {% if custom_field.type == 'select' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                           <option value="">{{ text_select }}</option>*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             {% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                             {% else %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                             {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'radio' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <label class="form-check">*/
/*                             {% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %}*/
/*                               <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" class="form-check-input"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                             {% else %}*/
/*                               <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="form-check-input"/>*/
/*                               {{ custom_field_value.name }}*/
/*                             {% endif %}*/
/*                             </label>*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'checkbox' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" style="height: 150px; overflow: auto;">*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <label class="form-check">*/
/*                               {% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in payment_custom_field[custom_field.custom_field_id] %}*/
/*                                 <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% else %}*/
/*                                 <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% endif %}*/
/*                             </label>*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'text' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'textarea' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'file' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-light"><i class="fas fa-upload"></i> {{ button_upload }}</button>*/
/*                         <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'date' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group date">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'time' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group time">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'datetime' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group datetime">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">*/
/*                 <a href="#collapse-cart" data-toggle="collapse" data-parent="#collapse" class="btn btn-light"><i class="fas fa-arrow-left"></i> {{ button_back }}</a>*/
/*               </div>*/
/*               <div class="col-sm-6 text-right">*/
/*                 <button type="button" id="button-payment-address" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fas fa-arrow-right"></i> {{ button_continue }}</button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="card">*/
/*         <div class="card-header"><i class="fas fa-truck fa-fw"></i> {{ text_shipping_detail }}</div>*/
/*         <div id="collapse-shipping" data-parent="#collapse" class="collapse">*/
/*           <div class="card-body">*/
/*             <form>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="shipping_address" id="input-shipping-address" class="form-control">*/
/*                     <option value="0" selected="selected">{{ text_none }}</option>*/
/*                     {% for address in addresses %}*/
/*                       <option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.country }}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-firstname">{{ entry_firstname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="firstname" value="{{ shipping_firstname }}" id="input-shipping-firstname" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-lastname">{{ entry_lastname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="lastname" value="{{ shipping_lastname }}" id="input-shipping-lastname" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-company">{{ entry_company }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="company" value="{{ shipping_company }}" id="input-shipping-company" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-address-1">{{ entry_address_1 }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="address_1" value="{{ shipping_address_1 }}" id="input-shipping-address-1" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-address-2">{{ entry_address_2 }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="address_2" value="{{ shipping_address_2 }}" id="input-shipping-address-2" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-city">{{ entry_city }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="city" value="{{ shipping_city }}" id="input-shipping-city" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-postcode">{{ entry_postcode }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="postcode" value="{{ shipping_postcode }}" id="input-shipping-postcode" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="country_id" id="input-shipping-country" class="form-control">*/
/*                     <option value="">{{ text_select }}</option>*/
/*                     {% for country in countries %}*/
/*                       {% if country.country_id == shipping_country_id %}*/
/*                         <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-shipping-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="zone_id" id="input-shipping-zone" class="form-control"></select>*/
/*                 </div>*/
/*               </div>*/
/*               {% for custom_field in custom_fields %}*/
/*                 {% if custom_field.location == 'address' %}*/
/*                   {% if custom_field.type == 'select' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                           <option value="">{{ text_select }}</option>*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             {% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                             {% else %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                             {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'radio' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <label class="form-check">*/
/*                               {% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %}*/
/*                                 <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% else %}*/
/*                                 <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% endif %}*/
/*                             </label>*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'checkbox' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" style="height: 150px; overflow: auto;">*/
/*                           {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <label class="form-check">*/
/*                               {% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %}*/
/*                                 <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% else %}*/
/*                                 <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="form-check-input"/>*/
/*                                 {{ custom_field_value.name }}*/
/*                               {% endif %}*/
/*                             </label>*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'text' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'textarea' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'file' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <button type="button" id="button-shipping-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-light"><i class="fas fa-upload"></i> {{ button_upload }}</button>*/
/*                         <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'date' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group date">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'time' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group time">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'datetime' %}*/
/*                     <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                       <label class="col-sm-2 col-form-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <div class="input-group datetime">*/
/*                           <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                           <div class="input-group-append">*/
/*                             <div class="input-group-text"><i class="fas fa-calendar"></i></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">*/
/*                 <a href="#collapse-payment" data-toggle="collapse" data-parent="#collapse" class="btn btn-light"><i class="fas fa-arrow-left"></i> {{ button_back }}</a>*/
/*               </div>*/
/*               <div class="col-sm-6 text-right">*/
/*                 <button type="button" id="button-shipping-address" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fas fa-arrow-right"></i> {{ button_continue }}</button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="card">*/
/*         <div class="card-header"><i class="fas fa-dollar-sign fa-fw"></i> {{ text_total_detail }}</div>*/
/*         <div id="collapse-total" data-parent="#collapse" class="collapse">*/
/*           <div class="card-body">*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td class="text-left">{{ column_product }}</td>*/
/*                     <td class="text-left">{{ column_model }}</td>*/
/*                     <td class="text-right">{{ column_quantity }}</td>*/
/*                     <td class="text-right">{{ column_price }}</td>*/
/*                     <td class="text-right">{{ column_total }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody id="total">*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*               </table>*/
/*             </div>*/
/*             <form>*/
/*               <fieldset>*/
/*                 <legend>{{ text_order_detail }}</legend>*/
/*                 <div class="form-group row required">*/
/*                   <label class="col-sm-2 col-form-label" for="input-shipping-method">{{ entry_shipping_method }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <select name="shipping_method" id="input-shipping-method" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% if shipping_code %}*/
/*                           <option value="{{ shipping_code }}" selected="selected">{{ shipping_method }}</option>*/
/*                         {% endif %}*/
/*                       </select>*/
/*                       <div class="input-group-append">*/
/*                         <button type="button" id="button-shipping-method" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row required">*/
/*                   <label class="col-sm-2 col-form-label" for="input-payment-method">{{ entry_payment_method }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <select name="payment_method" id="input-payment-method" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% if payment_code %}*/
/*                           <option value="{{ payment_code }}" selected="selected">{{ payment_method }}</option>*/
/*                         {% endif %}*/
/*                       </select>*/
/*                       <div class="input-group-append">*/
/*                         <button type="button" id="button-payment-method" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-coupon">{{ entry_coupon }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <input type="text" name="coupon" value="{{ coupon }}" id="input-coupon" class="form-control"/>*/
/*                       <div class="input-group-append">*/
/*                         <button type="button" id="button-coupon" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-voucher">{{ entry_voucher }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <input type="text" name="voucher" value="{{ voucher }}" id="input-voucher" data-loading-text="{{ text_loading }}" class="form-control"/>*/
/*                       <div class="input-group-append">*/
/*                         <button type="button" id="button-voucher" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-reward">{{ entry_reward }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <input type="text" name="reward" value="{{ reward }}" id="input-reward" data-loading-text="{{ text_loading }}" class="form-control"/>*/
/*                       <div class="input-group-append">*/
/*                         <button type="button" id="button-reward" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="order_status_id" id="input-order-status" class="form-control">*/
/*                       {% for order_status in order_statuses %}*/
/*                         {% if order_status.order_status_id == order_status_id %}*/
/*                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select> <input type="hidden" name="order_id" value="{{ order_id }}"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-comment">{{ entry_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="5" id="input-comment" class="form-control">{{ comment }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-affiliate">{{ entry_affiliate }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="affiliate" value="{{ affiliate }}" id="input-affiliate" class="form-control"/> <input type="hidden" name="affiliate_id" value="{{ affiliate_id }}"/>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">*/
/*                 <button type="button" onclick="$('select[name=\'shipping_method\']').prop('disabled') ? $('#collapse-payment').collapse('show') : $('#collapse-shipping').collapse('show');" class="btn btn-light"><i class="fas fa-arrow-left"></i> {{ button_back }}</button>*/
/*               </div>*/
/*               <div class="col-sm-6 text-right">*/
/*                 <button type="button" id="button-refresh" data-toggle="tooltip" title="{{ button_refresh }}" data-loading-text="{{ text_loading }}" class="btn btn-warning"><i class="fas fa-sync"></i></button>*/
/*                 <button type="button" id="button-save" class="btn btn-primary"><i class="fas fa-check-circle"></i> {{ button_save }}</button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* // Currency*/
/* $('select[name=\'currency\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/currency&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'currency=' + $('select[name=\'currency\'] option:selected').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'currency\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'currency\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#collapse-customer .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('select[name=\'currency\']').addClass('is-invalid');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'currency\']').trigger('change');*/
/* */
/* // Customer*/
/* $('input[name=\'customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					customer_id: '0',*/
/* 					customer_group_id: '{{ customer_group_id }}',*/
/* 					name: '{{ text_none }}',*/
/* 					customer_group: '',*/
/* 					firstname: '',*/
/* 					lastname: '',*/
/* 					email: '',*/
/* 					telephone: '',*/
/* 					custom_field: [],*/
/* 					address: []*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						category: item['customer_group'],*/
/* 						label: item['name'],*/
/* 						value: item['customer_id'],*/
/* 						customer_group_id: item['customer_group_id'],*/
/* 						firstname: item['firstname'],*/
/* 						lastname: item['lastname'],*/
/* 						email: item['email'],*/
/* 						telephone: item['telephone'],*/
/* 						custom_field: item['custom_field'],*/
/* 						address: item['address']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		// Reset all custom fields*/
/* 		$('#collapse-customer input[type=\'text\'], #collapse-customer textarea').not('#collapse-customer input[name=\'customer\'], #collapse-customer input[name=\'customer_id\']').val('');*/
/* 		$('#collapse-customer select option').not($('#collapse-customer select[name=\'store_id\'] option, #collapse-customer select[name=\'currency\'] option')).removeAttr('selected');*/
/* 		$('#collapse-customer input[type=\'checkbox\'], #collapse-customer input[type=\'radio\']').removeAttr('checked');*/
/* */
/* 		$('#collapse-customer input[name=\'customer\']').val(item['label']);*/
/* 		$('#collapse-customer input[name=\'customer_id\']').val(item['value']);*/
/* 		$('#collapse-customer select[name=\'customer_group_id\']').val(item['customer_group_id']);*/
/* 		$('#collapse-customer input[name=\'firstname\']').val(item['firstname']);*/
/* 		$('#collapse-customer input[name=\'lastname\']').val(item['lastname']);*/
/* 		$('#collapse-customer input[name=\'email\']').val(item['email']);*/
/* 		$('#collapse-customer input[name=\'telephone\']').val(item['telephone']);*/
/* */
/* 		for (i in item.custom_field) {*/
/* 			$('#collapse-customer select[name=\'custom_field[' + i + ']\']').val(item.custom_field[i]);*/
/* 			$('#collapse-customer textarea[name=\'custom_field[' + i + ']\']').val(item.custom_field[i]);*/
/* 			$('#collapse-customer input[name^=\'custom_field[' + i + ']\'][type=\'text\']').val(item.custom_field[i]);*/
/* 			$('#collapse-customer input[name^=\'custom_field[' + i + ']\'][type=\'hidden\']').val(item.custom_field[i]);*/
/* 			$('#collapse-customer input[name^=\'custom_field[' + i + ']\'][type=\'radio\'][value=\'' + item.custom_field[i] + '\']').prop('checked', true);*/
/* */
/* 			if (item.custom_field[i] instanceof Array) {*/
/* 				for (j = 0; j < item.custom_field[i].length; j++) {*/
/* 					$('#collapse-customer input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + item.custom_field[i][j] + '\']').prop('checked', true);*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		$('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/* 		html = '<option value="0">{{ text_none }}</option>';*/
/* */
/* 		for (i in  item['address']) {*/
/* 			html += '<option value="' + item['address'][i]['address_id'] + '">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';*/
/* 		}*/
/* */
/* 		$('select[name=\'payment_address\']').html(html);*/
/* 		$('select[name=\'shipping_address\']').html(html);*/
/* 	}*/
/* });*/
/* */
/* // Custom Fields*/
/* $('select[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/customfield&user_token={{ user_token }}&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('.custom-field').hide();*/
/* 			$('.custom-field').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('.custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('.custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/* $('#button-customer').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/customer&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#collapse-customer input[type=\'text\'], #collapse-customer input[type=\'hidden\'], #collapse-customer input[type=\'radio\']:checked, #collapse-customer input[type=\'checkbox\']:checked, #collapse-customer select, #collapse-customer textarea'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-customer').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-customer').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-customer .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-' + i.replace('_', '-'));*/
/* */
/* 					element.addClass('is-invalid');*/
/* */
/* 					if (element.parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="invalid-tooltip d-block">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="invalid-tooltip d-block">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				// Refresh products, vouchers and totals*/
/* 				$.ajax({*/
/* 					url: '{{ catalog }}index.php?route=api/voucher/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 					type: 'post',*/
/* 					data: $('#cart input[name^=\'voucher\'][type=\'hidden\']'),*/
/* 					dataType: 'json',*/
/* 					crossDomain: true,*/
/* 					beforeSend: function() {*/
/* 						$('#button-voucher-add').button('loading');*/
/* 					},*/
/* 					complete: function() {*/
/* 						$('#button-voucher-add').button('reset');*/
/* 					},*/
/* 					success: function(json) {*/
/* 						$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 						$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 						if (json['error'] && json['error']['warning']) {*/
/* 							$('#collapse-customer .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				}).then(function() {*/
/* 					$.ajax({*/
/* 						url: '{{ catalog }}index.php?route=api/cart/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 						type: 'post',*/
/* 						data: $('#cart input[name^=\'product\'][type=\'text\'], #cart input[name^=\'product\'][type=\'hidden\'], #cart input[name^=\'product\'][type=\'radio\']:checked, #cart input[name^=\'product\'][type=\'checkbox\']:checked, #cart select[name^=\'product\'], #cart textarea[name^=\'product\']'),*/
/* 						dataType: 'json',*/
/* 						crossDomain: true,*/
/* 						beforeSend: function() {*/
/* 							$('#button-product-add').button('loading');*/
/* 						},*/
/* 						complete: function() {*/
/* 							$('#button-product-add').button('reset');*/
/* 						},*/
/* 						success: function(json) {*/
/* 							$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 							$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 							if (json['error'] && json['error']['warning']) {*/
/* 								$('#collapse-customer .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 							}*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					}).done(function() {*/
/* 						$('#button-refresh').trigger('click');*/
/* */
/* 						$('#collapse-cart').collapse('toggle');*/
/* 					});*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#tab-product input[name=\'product\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id'],*/
/* 						model: item['model'],*/
/* 						option: item['option'],*/
/* 						price: item['price']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('#tab-product input[name=\'product\']').val(item['label']);*/
/* 		$('#tab-product input[name=\'product_id\']').val(item['value']);*/
/* */
/* 		if (item['option'] != '') {*/
/* 			html = '<fieldset>';*/
/* 			html += '  <legend>{{ entry_option }}</legend>';*/
/* */
/* 			for (i = 0; i < item['option'].length; i++) {*/
/* 				option = item['option'][i];*/
/* */
/* 				if (option['type'] == 'select') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <select name="option[' + option['product_option_id'] + ']" id="input-option' + option['product_option_id'] + '" class="form-control">';*/
/* 					html += '      <option value="">{{ text_select }}</option>';*/
/* */
/* 					for (j = 0; j < option['product_option_value'].length; j++) {*/
/* 						option_value = option['product_option_value'][j];*/
/* */
/* 						html += '<option value="' + option_value['product_option_value_id'] + '">' + option_value['name'];*/
/* */
/* 						if (option_value['price']) {*/
/* 							html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';*/
/* 						}*/
/* */
/* 						html += '</option>';*/
/* 					}*/
/* */
/* 					html += '    </select>';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'radio') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <select name="option[' + option['product_option_id'] + ']" id="input-option' + option['product_option_id'] + '" class="form-control">';*/
/* 					html += '      <option value="">{{ text_select }}</option>';*/
/* */
/* 					for (j = 0; j < option['product_option_value'].length; j++) {*/
/* 						option_value = option['product_option_value'][j];*/
/* */
/* 						html += '<option value="' + option_value['product_option_value_id'] + '">' + option_value['name'];*/
/* */
/* 						if (option_value['price']) {*/
/* 							html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';*/
/* 						}*/
/* */
/* 						html += '</option>';*/
/* 					}*/
/* */
/* 					html += '    </select>';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'checkbox') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <div id="input-option' + option['product_option_id'] + '">';*/
/* */
/* 					for (j = 0; j < option['product_option_value'].length; j++) {*/
/* 						option_value = option['product_option_value'][j];*/
/* */
/* 						html += '<label class="form-check"><input type="checkbox" name="option[' + option['product_option_id'] + '][]" value="' + option_value['product_option_value_id'] + '" class="form-check-input" /> ' + option_value['name'];*/
/* */
/* 						if (option_value['price']) {*/
/* 							html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';*/
/* 						}*/
/* */
/* 						html += '</label>';*/
/* 					}*/
/* */
/* 					html += '    </div>';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'image') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <select name="option[' + option['product_option_id'] + ']" id="input-option' + option['product_option_id'] + '" class="form-control">';*/
/* 					html += '      <option value="">{{ text_select }}</option>';*/
/* */
/* 					for (j = 0; j < option['product_option_value'].length; j++) {*/
/* 						option_value = option['product_option_value'][j];*/
/* */
/* 						html += '<option value="' + option_value['product_option_value_id'] + '">' + option_value['name'];*/
/* */
/* 						if (option_value['price']) {*/
/* 							html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';*/
/* 						}*/
/* */
/* 						html += '</option>';*/
/* 					}*/
/* */
/* 					html += '    </select>';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'text') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10"><input type="text" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" id="input-option' + option['product_option_id'] + '" class="form-control" /></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'textarea') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10"><textarea name="option[' + option['product_option_id'] + ']" rows="5" id="input-option' + option['product_option_id'] + '" class="form-control">' + option['value'] + '</textarea></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'file') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <button type="button" id="button-upload' + option['product_option_id'] + '" data-loading-text="{{ text_loading }}" class="btn btn-light"><i class="fas fa-upload"></i> {{ button_upload }}</button>';*/
/* 					html += '    <input type="hidden" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" id="input-option' + option['product_option_id'] + '" />';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'date') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-3"><div class="input-group date"><input type="text" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" placeholder="' + option['name'] + '"  id="input-option' + option['product_option_id'] + '" class="form-control" /><div class="input-group-append"><div class="input-group-text"><i class="fas fa-calendar"></i></div></div></div></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'datetime') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-3"><div class="input-group datetime"><input type="text" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" placeholder="' + option['name'] + '" id="input-option' + option['product_option_id'] + '" class="form-control" /><div class="input-group-append"><div class="input-group-text"><i class="fas fa-calendar"></i></div></div></div></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'time') {*/
/* 					html += '<div class="form-group row' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 col-form-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-3"><div class="input-group time"><input type="text" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" placeholder="' + option['name'] + '" id="input-option' + option['product_option_id'] + '" class="form-control" /><div class="input-group-append"><div class="input-group-text"><i class="fas fa-calendar"></i></div></div></div></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* 			}*/
/* */
/* 			html += '</fieldset>';*/
/* */
/* 			$('#option').html(html);*/
/* */
/* 			$('.date').datetimepicker({*/
/* 				'format': 'YYYY-MM-DD',*/
/* 				'locale': '{{ datepicker }}',*/
/* 				'allowInputToggle': true*/
/* 			});*/
/* */
/* 			$('.time').datetimepicker({*/
/* 				'format': 'HH:mm',*/
/* 				'locale': '{{ datepicker }}',*/
/* 				'allowInputToggle': true*/
/* 			});*/
/* */
/* 			$('.datetime').datetimepicker({*/
/* 				'format': 'YYYY-MM-DD HH:mm',*/
/* 				'locale': '{{ datepicker }}',*/
/* 				'allowInputToggle': true*/
/* 			});*/
/* 		} else {*/
/* 			$('#option').html('');*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* $('#button-product-add').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/cart/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#tab-product input[name=\'product_id\'], #tab-product input[name=\'quantity\'], #tab-product input[name^=\'option\'][type=\'text\'], #tab-product input[name^=\'option\'][type=\'hidden\'], #tab-product input[name^=\'option\'][type=\'radio\']:checked, #tab-product input[name^=\'option\'][type=\'checkbox\']:checked, #tab-product select[name^=\'option\'], #tab-product textarea[name^=\'option\']'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-product-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-product-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#tab-product').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						// Highlight any found errors*/
/* 						$(element).addClass('is-invalid');*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="invalid-tooltip d-block">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="invalid-tooltip d-block">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['store']) {*/
/* 					$('#tab-product').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['store'] + '</div>');*/
/* 				}*/
/* 			} else {*/
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Voucher*/
/* $('#button-voucher-add').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/voucher/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#tab-voucher input[type=\'text\'], #tab-voucher input[type=\'hidden\'], #tab-voucher input[type=\'radio\']:checked, #tab-voucher input[type=\'checkbox\']:checked, #tab-voucher select, #tab-voucher textarea'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#tab-voucher').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-' + i.replace('_', '-'));*/
/* */
/* 					// Highlight any found errors*/
/* 					$(element).addClass('is-invalid');*/
/* */
/* 					if (element.parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="invalid-tooltip d-block">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="invalid-tooltip d-block">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				$('input[name=\'from_name\']').val('');*/
/* 				$('input[name=\'from_email\']').val('');*/
/* 				$('input[name=\'to_name\']').val('');*/
/* 				$('input[name=\'to_email\']').val('');*/
/* 				$('textarea[name=\'message\']').val('');*/
/* 				$('input[name=\'amount\']').val('{{ voucher_min|escape('js') }}');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#cart').on('click', '.btn-danger', function() {*/
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/cart/remove&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'key=' + encodeURIComponent(this.value),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* */
/* 			// Check for errors*/
/* 			if (json['error']) {*/
/* 				$('#collapse-cart .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			} else {*/
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#cart').on('click', '.btn-primary', function() {*/
/* 	var element = this;*/
/* */
/* 	// Refresh products, vouchers and totals*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/cart/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#cart input[name^=\'product\'][type=\'text\'], #cart input[name^=\'product\'][type=\'hidden\'], #cart input[name^=\'product\'][type=\'radio\']:checked, #cart input[name^=\'product\'][type=\'checkbox\']:checked, #cart select[name^=\'product\'], #cart textarea[name^=\'product\']'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error'] && json['error']['warning']) {*/
/* 				$('#collapse-cart .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#collapse-cart .card-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	}).done(function() {*/
/* 		$('#button-refresh').trigger('click');*/
/* 	});*/
/* });*/
/* */
/* $('#button-cart').on('click', function() {*/
/* 	$('#collapse-payment').collapse('toggle');*/
/* });*/
/* */
/* // Payment Address*/
/* $('select[name=\'payment_address\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/address&user_token={{ user_token }}&address_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'payment_address\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'payment_address\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			// Reset all fields*/
/* 			$('#collapse-payment input[type=\'text\'], #collapse-payment input[type=\'text\'], #collapse-payment textarea').val('');*/
/* 			$('#collapse-payment select option').not('#collapse-payment select[name=\'payment_address\']').removeAttr('selected');*/
/* 			$('#collapse-payment input[type=\'checkbox\'], #collapse-payment input[type=\'radio\']').removeAttr('checked');*/
/* */
/* 			$('#collapse-payment input[name=\'firstname\']').val(json['firstname']);*/
/* 			$('#collapse-payment input[name=\'lastname\']').val(json['lastname']);*/
/* 			$('#collapse-payment input[name=\'company\']').val(json['company']);*/
/* 			$('#collapse-payment input[name=\'address_1\']').val(json['address_1']);*/
/* 			$('#collapse-payment input[name=\'address_2\']').val(json['address_2']);*/
/* 			$('#collapse-payment input[name=\'city\']').val(json['city']);*/
/* 			$('#collapse-payment input[name=\'postcode\']').val(json['postcode']);*/
/* 			$('#collapse-payment select[name=\'country_id\']').val(json['country_id']);*/
/* */
/* 			payment_zone_id = json['zone_id'];*/
/* */
/* 			for (i in json['custom_field']) {*/
/* 				$('#collapse-payment select[name=\'custom_field[' + i + ']\']').val(json['custom_field'][i]);*/
/* 				$('#collapse-payment textarea[name=\'custom_field[' + i + ']\']').val(json['custom_field'][i]);*/
/* 				$('#collapse-payment input[name^=\'custom_field[' + i + ']\'][type=\'text\']').val(json['custom_field'][i]);*/
/* 				$('#collapse-payment input[name^=\'custom_field[' + i + ']\'][type=\'hidden\']').val(json['custom_field'][i]);*/
/* 				$('#collapse-payment input[name^=\'custom_field[' + i + ']\'][type=\'radio\'][value=\'' + json['custom_field'][i] + '\']').prop('checked', true);*/
/* 				$('#collapse-payment input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + json['custom_field'][i] + '\']').prop('checked', true);*/
/* */
/* 				if (json['custom_field'][i] instanceof Array) {*/
/* 					for (j = 0; j < json['custom_field'][i].length; j++) {*/
/* 						$('#collapse-payment input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + json['custom_field'][i][j] + '\']').prop('checked', true);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			$('#collapse-payment select[name=\'country_id\']').trigger('change');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* var payment_zone_id = '{{ payment_zone_id }}';*/
/* */
/* $('#collapse-payment select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#collapse-payment select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#collapse-payment select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#collapse-payment input[name=\'postcode\']').closest('.form-group').addClass('required');*/
/* 			} else {*/
/* 				$('#collapse-payment input[name=\'postcode\']').closest('.form-group').removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == payment_zone_id) {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#collapse-payment select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment select[name=\'country_id\']').trigger('change');*/
/* */
/* $('#button-payment-address').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/payment/address&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#collapse-payment input[type=\'text\'], #collapse-payment input[type=\'hidden\'], #collapse-payment input[type=\'radio\']:checked, #collapse-payment input[type=\'checkbox\']:checked, #collapse-payment select, #collapse-payment textarea'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-payment-address').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-payment-address').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			// Check for errors*/
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-payment .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					// Highlight any found errors*/
/* 					$(element).addClass('is-invalid');*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="invalid-tooltip d-block">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="invalid-tooltip d-block">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				// Payment Methods*/
/* 				$.ajax({*/
/* 					url: '{{ catalog }}index.php?route=api/payment/methods&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 					dataType: 'json',*/
/* 					crossDomain: true,*/
/* 					beforeSend: function() {*/
/* 						$('#button-payment-address').button('loading');*/
/* 					},*/
/* 					complete: function() {*/
/* 						$('#button-payment-address').button('reset');*/
/* 					},*/
/* 					success: function(json) {*/
/* 						if (json['error']) {*/
/* 							$('#collapse-payment .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 						} else {*/
/* 							html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 							if (json['payment_methods']) {*/
/* 								for (i in json['payment_methods']) {*/
/* 									if (json['payment_methods'][i]['code'] == $('select[name=\'payment_method\'] option:selected').val()) {*/
/* 										html += '<option value="' + json['payment_methods'][i]['code'] + '" selected="selected">' + json['payment_methods'][i]['title'] + '</option>';*/
/* 									} else {*/
/* 										html += '<option value="' + json['payment_methods'][i]['code'] + '">' + json['payment_methods'][i]['title'] + '</option>';*/
/* 									}*/
/* 								}*/
/* 							}*/
/* */
/* 							$('select[name=\'payment_method\']').html(html);*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				}).done(function() {*/
/* 					// Refresh products, vouchers and totals*/
/* 					$('#button-refresh').trigger('click');*/
/* */
/* 					// If shipping required got to shipping tab else total tabs*/
/* 					if ($('select[name=\'shipping_method\']').prop('disabled')) {*/
/* 						$('#collapse-total').collapse('toggle');*/
/* 					} else {*/
/* 						$('#collapse-shipping').collapse('toggle');*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Shipping Address*/
/* $('select[name=\'shipping_address\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/address&user_token={{ user_token }}&address_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'shipping_address\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'shipping_address\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			// Reset all fields*/
/* 			$('#collapse-shipping input[type=\'text\'], #collapse-shipping input[type=\'text\'], #collapse-shipping textarea').val('');*/
/* 			$('#collapse-shipping select option').not('#collapse-shipping select[name=\'shipping_address\']').removeAttr('selected');*/
/* 			$('#collapse-shipping input[type=\'checkbox\'], #collapse-shipping input[type=\'radio\']').removeAttr('checked');*/
/* */
/* 			$('#collapse-shipping input[name=\'firstname\']').val(json['firstname']);*/
/* 			$('#collapse-shipping input[name=\'lastname\']').val(json['lastname']);*/
/* 			$('#collapse-shipping input[name=\'company\']').val(json['company']);*/
/* 			$('#collapse-shipping input[name=\'address_1\']').val(json['address_1']);*/
/* 			$('#collapse-shipping input[name=\'address_2\']').val(json['address_2']);*/
/* 			$('#collapse-shipping input[name=\'city\']').val(json['city']);*/
/* 			$('#collapse-shipping input[name=\'postcode\']').val(json['postcode']);*/
/* 			$('#collapse-shipping select[name=\'country_id\']').val(json['country_id']);*/
/* */
/* 			shipping_zone_id = json['zone_id'];*/
/* */
/* 			for (i in json['custom_field']) {*/
/* 				$('#collapse-shipping select[name=\'custom_field[' + i + ']\']').val(json['custom_field'][i]);*/
/* 				$('#collapse-shipping textarea[name=\'custom_field[' + i + ']\']').val(json['custom_field'][i]);*/
/* 				$('#collapse-shipping input[name^=\'custom_field[' + i + ']\'][type=\'text\']').val(json['custom_field'][i]);*/
/* 				$('#collapse-shipping input[name^=\'custom_field[' + i + ']\'][type=\'hidden\']').val(json['custom_field'][i]);*/
/* 				$('#collapse-shipping input[name^=\'custom_field[' + i + ']\'][type=\'radio\'][value=\'' + json['custom_field'][i] + '\']').prop('checked', true);*/
/* 				$('#collapse-shipping input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + json['custom_field'][i] + '\']').prop('checked', true);*/
/* */
/* 				if (json['custom_field'][i] instanceof Array) {*/
/* 					for (j = 0; j < json['custom_field'][i].length; j++) {*/
/* 						$('#collapse-shipping input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + json['custom_field'][i][j] + '\']').prop('checked', true);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			$('#collapse-shipping select[name=\'country_id\']').trigger('change');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* var shipping_zone_id = '{{ shipping_zone_id }}';*/
/* */
/* $('#collapse-shipping select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#collapse-shipping select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#collapse-shipping select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#collapse-shipping input[name=\'postcode\']').closest('.form-group').addClass('required');*/
/* 			} else {*/
/* 				$('#collapse-shipping input[name=\'postcode\']').closest('.form-group').removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == shipping_zone_id) {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#collapse-shipping select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-shipping select[name=\'country_id\']').trigger('change');*/
/* */
/* $('#button-shipping-address').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/shipping/address&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#collapse-shipping input[type=\'text\'], #collapse-shipping input[type=\'hidden\'], #collapse-shipping input[type=\'radio\']:checked, #collapse-shipping input[type=\'checkbox\']:checked, #collapse-shipping select, #collapse-shipping textarea'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-shipping-address').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-shipping-address').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			// Check for errors*/
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-shipping .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					// Highlight any found errors*/
/* 					$(element).addClass('is-invalid');*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="invalid-tooltip d-block">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="invalid-tooltip d-block">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				// Shipping Methods*/
/* 				var request = $.ajax({*/
/* 					url: '{{ catalog }}index.php?route=api/shipping/methods&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 					dataType: 'json',*/
/* 					beforeSend: function() {*/
/* 						$('#button-shipping-address').button('loading');*/
/* 					},*/
/* 					complete: function() {*/
/* 						$('#button-shipping-address').button('reset');*/
/* 					},*/
/* 					success: function(json) {*/
/* 						if (json['error']) {*/
/* 							$('#collapse-shipping .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 						} else {*/
/* 							// Shipping Methods*/
/* 							html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 							if (json['shipping_methods']) {*/
/* 								for (i in json['shipping_methods']) {*/
/* 									html += '<optgroup label="' + json['shipping_methods'][i]['title'] + '">';*/
/* */
/* 									if (!json['shipping_methods'][i]['error']) {*/
/* 										for (j in json['shipping_methods'][i]['quote']) {*/
/* 											if (json['shipping_methods'][i]['quote'][j]['code'] == $('select[name=\'shipping_method\'] option:selected').val()) {*/
/* 												html += '<option value="' + json['shipping_methods'][i]['quote'][j]['code'] + '" selected="selected">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';*/
/* 											} else {*/
/* 												html += '<option value="' + json['shipping_methods'][i]['quote'][j]['code'] + '">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';*/
/* 											}*/
/* 										}*/
/* 									} else {*/
/* 										html += '<option value="" style="color: #F00;" disabled="disabled">' + json['shipping_method'][i]['error'] + '</option>';*/
/* 									}*/
/* */
/* 									html += '</optgroup>';*/
/* 								}*/
/* 							}*/
/* */
/* 							$('select[name=\'shipping_method\']').html(html);*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				}).done(function() {*/
/* 					// Refresh products, vouchers and totals*/
/* 					$('#button-refresh').trigger('click');*/
/* */
/* 					$('#collapse-total').collapse('toggle');*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Shipping Method*/
/* $('#button-shipping-method').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/shipping/method&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'shipping_method=' + $('select[name=\'shipping_method\'] option:selected').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-shipping-method').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-shipping-method').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('select[name=\'shipping_method\']').addClass('is-invalid');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Payment Method*/
/* $('#button-payment-method').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/payment/method&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'payment_method=' + $('select[name=\'payment_method\'] option:selected').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-payment-method').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-payment-method').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('select[name=\'payment_method\']').addClass('is-invalid');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Coupon*/
/* $('#button-coupon').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/coupon&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'coupon=' + $('input[name=\'coupon\']').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-coupon').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-coupon').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'coupon\']').addClass('is-invalid');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Voucher*/
/* $('#button-voucher').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/voucher&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'voucher=' + $('input[name=\'voucher\']').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'voucher\']').addClass('is-invalid');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Reward*/
/* $('#button-reward').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/reward&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'reward=' + $('input[name=\'reward\']').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* 			$('.is-invalid').removeClass('is-invalid');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'reward\']').addClass('is-invalid');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Affiliate*/
/* $('input[name=\'affiliate\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_affiliate=1&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					customer_id: 0,*/
/* 					name: '{{ text_none }}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'affiliate\']').val(item['label']);*/
/* 		$('input[name=\'affiliate_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* */
/* // Checkout*/
/* $('#button-save').on('click', function() {*/
/* 	if ($('input[name=\'order_id\']').val() == 0) {*/
/* 		var url = '{{ catalog }}index.php?route=api/order/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val();*/
/* 	} else {*/
/* 		var url = '{{ catalog }}index.php?route=api/order/edit&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val() + '&order_id=' + $('input[name=\'order_id\']').val();*/
/* 	}*/
/* */
/* 	$.ajax({*/
/* 		url: url,*/
/* 		type: 'post',*/
/* 		data: $('select[name=\'payment_method\'] option:selected, select[name=\'shipping_method\'] option:selected,  #collapse-total select[name=\'order_status_id\'], #collapse-total select, textarea[name=\'comment\'], input[name=\'affiliate_id\']'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-save').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-save').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#collapse-total .card-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['order_id']) {*/
/* 				$('input[name=\'order_id\']').val(json['order_id']);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#content').on('click', 'button[id^=\'button-upload\'], button[id^=\'button-custom-field\'], button[id^=\'button-payment-custom-field\'], button[id^=\'button-shipping-custom-field\']', function() {*/
/* 	var element = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/* 		clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload/upload&user_token={{ user_token }}',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(element).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(element).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(element).parent().find('.invalid-tooltip').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(element).parent().find('input[type=\'hidden\']').after('<div class="invalid-tooltip d-block">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* 					}*/
/* */
/* 					if (json['code']) {*/
/* 						$(element).parent().find('input[type=\'hidden\']').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* */
/* $('.date').datetimepicker({*/
/* 	'format': 'YYYY-MM-DD',*/
/* 	'locale': '{{ datepicker }}',*/
/* 	'allowInputToggle': true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	'format': 'HH:mm',*/
/* 	'locale': '{{ datepicker }}',*/
/* 	'allowInputToggle': true*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	'format': 'YYYY-MM-DD HH:mm',*/
/* 	'locale': '{{ datepicker }}',*/
/* 	'allowInputToggle': true*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* // Sort the custom fields*/
/* $('#collapse-customer .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-customer .form-group').length) {*/
/* 		$('#collapse-customer .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#collapse-customer .form-group').length) {*/
/* 		$('#collapse-customer .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#collapse-customer .form-group').length) {*/
/* 		$('#collapse-customer .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* // Sort the custom fields*/
/* $('#collapse-payment .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-payment .form-group').length) {*/
/* 		$('#collapse-payment .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#collapse-payment .form-group').length) {*/
/* 		$('#collapse-payment .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#collapse-payment .form-group').length) {*/
/* 		$('#collapse-payment .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('#collapse-shipping .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-shipping .form-group').length) {*/
/* 		$('#collapse-shipping .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#collapse-shipping .form-group').length) {*/
/* 		$('#collapse-shipping .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#collapse-shipping .form-group').length) {*/
/* 		$('#collapse-shipping .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* // Add all products to the cart using the api*/
/* $('#button-refresh').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/cart/products&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-refresh').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-refresh').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			// Check for errors*/
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['stock']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['stock'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['minimum']) {*/
/* 					for (i in json['error']['minimum']) {*/
/* 						$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error']['minimum'][i] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			var shipping = false;*/
/* */
/* 			html = '';*/
/* */
/* 			if (json['products'].length) {*/
/* 				for (i = 0; i < json['products'].length; i++) {*/
/* 					product = json['products'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-left">' + product['name'] + ' ' + (!product['stock'] ? '<span class="text-danger">***</span>' : '') + '<br />';*/
/* 					html += '  <input type="hidden" name="product[' + i + '][product_id]" value="' + product['product_id'] + '" />';*/
/* */
/* 					if (product['option']) {*/
/* 						for (j = 0; j < product['option'].length; j++) {*/
/* 							option = product['option'][j];*/
/* */
/* 							html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';*/
/* */
/* 							if (option['type'] == 'select' || option['type'] == 'radio' || option['type'] == 'image') {*/
/* 								html += '<input type="hidden" name="product[' + i + '][option][' + option['product_option_id'] + ']" value="' + option['product_option_value_id'] + '" />';*/
/* 							}*/
/* */
/* 							if (option['type'] == 'checkbox') {*/
/* 								html += '<input type="hidden" name="product[' + i + '][option][' + option['product_option_id'] + '][]" value="' + option['product_option_value_id'] + '" />';*/
/* 							}*/
/* */
/* 							if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {*/
/* 								html += '<input type="hidden" name="product[' + i + '][option][' + option['product_option_id'] + ']" value="' + option['value'] + '" />';*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					html += '</td>';*/
/* 					html += '  <td class="text-left">' + product['model'] + '</td>';*/
/* 					html += '  <td class="text-right"><div class="input-group"><input type="text" name="product[' + i + '][quantity]" value="' + product['quantity'] + '" class="form-control" /><div class="input-group-append"><button type="button" data-toggle="tooltip" title="{{ button_refresh }}" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fas fa-sync"></i></button></div></div></td>';*/
/* 					html += '  <td class="text-right">' + product['price'] + '</td>';*/
/* 					html += '  <td class="text-right">' + product['total'] + '</td>';*/
/* 					html += '  <td class="text-center" style="width: 3px;"><button type="button" value="' + product['cart_id'] + '" data-toggle="tooltip" title="{{ button_remove }}" data-loading-text="{{ text_loading }}" class="btn btn-danger"><i class="fas fa-minus-circle"></i></button></td>';*/
/* 					html += '</tr>';*/
/* */
/* 					if (product['shipping'] != 0) {*/
/* 						shipping = true;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			if (!shipping) {*/
/* 				$('select[name=\'shipping_method\'] option').removeAttr('selected');*/
/* 				$('select[name=\'shipping_method\']').prop('disabled', true);*/
/* 				$('#button-shipping-method').prop('disabled', true);*/
/* 			} else {*/
/* 				$('select[name=\'shipping_method\']').prop('disabled', false);*/
/* 				$('#button-shipping-method').prop('disabled', false);*/
/* 			}*/
/* */
/* 			if (json['vouchers'].length) {*/
/* 				for (i in json['vouchers']) {*/
/* 					voucher = json['vouchers'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-left">' + voucher['description'];*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][code]" value="' + voucher['code'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][description]" value="' + voucher['description'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][from_name]" value="' + voucher['from_name'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][from_email]" value="' + voucher['from_email'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][to_name]" value="' + voucher['to_name'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][to_email]" value="' + voucher['to_email'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][voucher_theme_id]" value="' + voucher['voucher_theme_id'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][message]" value="' + voucher['message'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][amount]" value="' + voucher['amount'] + '" />';*/
/* 					html += '  </td>';*/
/* 					html += '  <td class="text-left"></td>';*/
/* 					html += '  <td class="text-right">1</td>';*/
/* 					html += '  <td class="text-right">' + voucher['price'] + '</td>';*/
/* 					html += '  <td class="text-right">' + voucher['price'] + '</td>';*/
/* 					html += '  <td class="text-center" style="width: 3px;"><button type="button" value="' + voucher['code'] + '" data-toggle="tooltip" title="{{ button_remove }}" data-loading-text="{{ text_loading }}" class="btn btn-danger"><i class="fas fa-minus-circle"></i></button></td>';*/
/* 					html += '</tr>';*/
/* 				}*/
/* 			}*/
/* */
/* 			if (!json['products'].length && !json['vouchers'].length) {*/
/* 				html += '<tr>';*/
/* 				html += '  <td colspan="6" class="text-center">{{ text_no_results }}</td>';*/
/* 				html += '</tr>';*/
/* 			}*/
/* */
/* 			$('#cart').html(html);*/
/* */
/* 			// Totals*/
/* 			html = '';*/
/* */
/* 			if (json['products'].length) {*/
/* 				for (i = 0; i < json['products'].length; i++) {*/
/* 					product = json['products'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-left">' + product['name'] + ' ' + (!product['stock'] ? '<span class="text-danger">***</span>' : '') + '<br />';*/
/* */
/* 					if (product['option']) {*/
/* 						for (j = 0; j < product['option'].length; j++) {*/
/* 							option = product['option'][j];*/
/* */
/* 							html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';*/
/* 						}*/
/* 					}*/
/* */
/* 					html += '  </td>';*/
/* 					html += '  <td class="text-left">' + product['model'] + '</td>';*/
/* 					html += '  <td class="text-right">' + product['quantity'] + '</td>';*/
/* 					html += '  <td class="text-right">' + product['price'] + '</td>';*/
/* 					html += '  <td class="text-right">' + product['total'] + '</td>';*/
/* 					html += '</tr>';*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['vouchers'].length) {*/
/* 				for (i in json['vouchers']) {*/
/* 					voucher = json['vouchers'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-left">' + voucher['description'] + '</td>';*/
/* 					html += '  <td class="text-left"></td>';*/
/* 					html += '  <td class="text-right">1</td>';*/
/* 					html += '  <td class="text-right">' + voucher['amount'] + '</td>';*/
/* 					html += '  <td class="text-right">' + voucher['amount'] + '</td>';*/
/* 					html += '</tr>';*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['totals'].length) {*/
/* 				for (i in json['totals']) {*/
/* 					total = json['totals'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-right" colspan="4">' + total['title'] + ':</td>';*/
/* 					html += '  <td class="text-right">' + total['text'] + '</td>';*/
/* 					html += '</tr>';*/
/* 				}*/
/* 			}*/
/* */
/* 			if (!json['totals'].length && !json['products'].length && !json['vouchers'].length) {*/
/* 				html += '<tr>';*/
/* 				html += '  <td colspan="5" class="text-center">{{ text_no_results }}</td>';*/
/* 				html += '</tr>';*/
/* 			}*/
/* */
/* 			$('#total').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
