<?php

/* sale/order_info.twig */
class __TwigTemplate_50459db254441d8007f6f649df0965f86800c75d6e5e81d8fb705c2c0ad2fa5f extends Twig_Template
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
        echo (isset($context["invoice"]) ? $context["invoice"] : null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_invoice_print"]) ? $context["button_invoice_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fas fa-print\"></i></a> <a href=\"";
        echo (isset($context["shipping"]) ? $context["shipping"] : null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_shipping_print"]) ? $context["button_shipping_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fas fa-truck\"></i></a> <a href=\"";
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a> <a href=\"";
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
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
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"card mb-3\">
          <div class=\"card-header\"><i class=\"fas fa-shopping-cart\"></i> ";
        // line 18
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td style=\"width: 1%;\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 22
        echo (isset($context["text_store"]) ? $context["text_store"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fas fa-shopping-cart fa-fw\"></i></button></td>
                <td><a href=\"";
        // line 23
        echo (isset($context["store_url"]) ? $context["store_url"] : null);
        echo "\" target=\"_blank\">";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "</a></td>
              </tr>
              <tr>
                <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 26
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fas fa-calendar fa-fw\"></i></button></td>
                <td>";
        // line 27
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</td>
              </tr>
              <tr>
                <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 30
        echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fas fa-credit-card fa-fw\"></i></button></td>
                <td>";
        // line 31
        echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
        echo "</td>
              </tr>
              ";
        // line 33
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 34
            echo "                <tr>
                  <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 35
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fas fa-truck fa-fw\"></i></button></td>
                  <td>";
            // line 36
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo "</td>
                </tr>
              ";
        }
        // line 39
        echo "            </tbody>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"card mb-3\">
          <div class=\"card-header\"><i class=\"fas fa-user\"></i> ";
        // line 45
        echo (isset($context["text_customer_detail"]) ? $context["text_customer_detail"] : null);
        echo "</div>
          <table class=\"table\">
            <tr>
              <td style=\"width: 1%;\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 48
        echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fas fa-user fa-fw\"></i></button></td>
              <td>";
        // line 49
        if ((isset($context["customer"]) ? $context["customer"] : null)) {
            echo " <a href=\"";
            echo (isset($context["customer"]) ? $context["customer"] : null);
            echo "\" target=\"_blank\">";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "</a> ";
        } else {
            // line 50
            echo "                  ";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "
                ";
        }
        // line 51
        echo "</td>
            </tr>
            <tr>
              <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 54
        echo (isset($context["text_customer_group"]) ? $context["text_customer_group"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fas fa-users fa-fw\"></i></button></td>
              <td>";
        // line 55
        echo (isset($context["customer_group"]) ? $context["customer_group"] : null);
        echo "</td>
            </tr>
            <tr>
              <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 58
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fas fa-envelope fa-fw\"></i></button></td>
              <td><a href=\"mailto:";
        // line 59
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\">";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a></td>
            </tr>
            <tr>
              <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 62
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fas fa-phone fa-fw\"></i></button></td>
              <td>";
        // line 63
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"card mb-3\">
          <div class=\"card-header\"><i class=\"fas fa-cog\"></i> ";
        // line 70
        echo (isset($context["text_option"]) ? $context["text_option"] : null);
        echo "</div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td>";
        // line 74
        echo (isset($context["text_invoice"]) ? $context["text_invoice"] : null);
        echo "</td>
                <td id=\"invoice\" class=\"text-right\">";
        // line 75
        echo (isset($context["invoice_no"]) ? $context["invoice_no"] : null);
        echo "</td>
                <td style=\"width: 1%;\" class=\"text-center\">";
        // line 76
        if ( !(isset($context["invoice_no"]) ? $context["invoice_no"] : null)) {
            // line 77
            echo "                    <button type=\"button\" id=\"button-invoice\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_generate"]) ? $context["button_generate"] : null);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-cog\"></i></button>
                  ";
        } else {
            // line 79
            echo "                    <button type=\"button\" disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-cog\"></i></button>
                  ";
        }
        // line 80
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 83
        echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 84
        echo (isset($context["reward"]) ? $context["reward"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 85
        if (((isset($context["customer"]) ? $context["customer"] : null) && (isset($context["reward"]) ? $context["reward"] : null))) {
            // line 86
            echo "                    ";
            if ( !(isset($context["reward_total"]) ? $context["reward_total"] : null)) {
                // line 87
                echo "                      <button type=\"button\" id=\"button-reward-add\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 89
                echo "                      <button type=\"button\" id=\"button-reward-remove\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reward_remove"]) ? $context["button_reward_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fas fa-minus-circle\"></i></button>
                    ";
            }
            // line 91
            echo "                  ";
        } else {
            // line 92
            echo "                    <button type=\"button\" disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-plus-circle\"></i></button>
                  ";
        }
        // line 93
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 96
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "
                  ";
        // line 97
        if ((isset($context["affiliate"]) ? $context["affiliate"] : null)) {
            // line 98
            echo "                    (<a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["affiliate_firstname"]) ? $context["affiliate_firstname"] : null);
            echo " ";
            echo (isset($context["affiliate_lastname"]) ? $context["affiliate_lastname"] : null);
            echo "</a>)
                  ";
        }
        // line 99
        echo "</td>
                <td class=\"text-right\">";
        // line 100
        echo (isset($context["commission"]) ? $context["commission"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 101
        if ((isset($context["affiliate"]) ? $context["affiliate"] : null)) {
            // line 102
            echo "                    ";
            if ( !(isset($context["commission_total"]) ? $context["commission_total"] : null)) {
                // line 103
                echo "                      <button type=\"button\" id=\"button-commission-add\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_commission_add"]) ? $context["button_commission_add"] : null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 105
                echo "                      <button type=\"button\" id=\"button-commission-remove\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_commission_remove"]) ? $context["button_commission_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fas fa-minus-circle\"></i></button>
                    ";
            }
            // line 107
            echo "                  ";
        } else {
            // line 108
            echo "                    <button type=\"button\" disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-plus-circle\"></i></button>
                  ";
        }
        // line 109
        echo "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fas fa-info-circle\"></i> ";
        // line 117
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</div>
      <div class=\"card-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
        // line 122
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
              ";
        // line 123
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 124
            echo "                <td style=\"width: 50%;\" class=\"text-left\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
              ";
        }
        // line 125
        echo " </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 129
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
              ";
        // line 130
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 131
            echo "                <td class=\"text-left\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
              ";
        }
        // line 132
        echo " </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 138
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 139
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 140
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 141
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 142
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 147
            echo "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 148
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a>
                  ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 150
                echo "                    <br/>
                    ";
                // line 151
                if (($this->getAttribute($context["option"], "type", array()) != "file")) {
                    echo "&nbsp;
                      <small> - ";
                    // line 152
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
                    ";
                } else {
                    // line 154
                    echo "                      &nbsp;
                      <small> - ";
                    // line 155
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": <a href=\"";
                    echo $this->getAttribute($context["option"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</a></small>
                    ";
                }
                // line 157
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-left\">";
            // line 158
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
                <td class=\"text-right\">";
            // line 159
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
                <td class=\"text-right\">";
            // line 160
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
                <td class=\"text-right\">";
            // line 161
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 165
            echo "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 166
            echo $this->getAttribute($context["voucher"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</a></td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
            // line 169
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                <td class=\"text-right\">";
            // line 170
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 174
            echo "              <tr>
                <td colspan=\"4\" class=\"text-right\">";
            // line 175
            echo $this->getAttribute($context["total"], "title", array());
            echo "</td>
                <td class=\"text-right\">";
            // line 176
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "          </tbody>
        </table>
        ";
        // line 181
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 182
            echo "          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td>";
            // line 185
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
            // line 190
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
              </tr>
            </tbody>
          </table>
        ";
        }
        // line 194
        echo "</div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fas fa-comment\"></i> ";
        // line 197
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 200
        echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 201
        echo (isset($context["tab_additional"]) ? $context["tab_additional"] : null);
        echo "</a></li>
          ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 203
            echo "            <li class=\"nav-item\"><a href=\"#tab-";
            echo $this->getAttribute($context["tab"], "code", array());
            echo "\" data-toggle=\"tab\" class=\"nav-link\">";
            echo $this->getAttribute($context["tab"], "title", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br/>
            <fieldset>
              <legend>";
        // line 211
        echo (isset($context["text_history_add"]) ? $context["text_history_add"] : null);
        echo "</legend>
              <form>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-order-status\">";
        // line 214
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 218
            echo "                        ";
            if (($this->getAttribute($context["order_statuses"], "order_status_id", array()) == (isset($context["order_status_id"]) ? $context["order_status_id"] : null))) {
                // line 219
                echo "                          <option value=\"";
                echo $this->getAttribute($context["order_statuses"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_statuses"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 221
                echo "                          <option value=\"";
                echo $this->getAttribute($context["order_statuses"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_statuses"], "name", array());
                echo "</option>
                        ";
            }
            // line 223
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-override\">";
        // line 228
        echo (isset($context["entry_override"]) ? $context["entry_override"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"override\" value=\"1\"/> ";
        // line 231
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</label> <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"override\" value=\"0\" checked=\"checked\"/> ";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</label>
                    </div>
                    <small class=\"form-text text-muted\">";
        // line 233
        echo (isset($context["help_override"]) ? $context["help_override"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-notify\">";
        // line 237
        echo (isset($context["entry_notify"]) ? $context["entry_notify"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"notify\" value=\"1\"/> ";
        // line 240
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</label> <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"notify\" value=\"0\" checked=\"checked\"/> ";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-comment\">";
        // line 245
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class=\"text-right\">
              <button id=\"button-history\" data-loading-text=\"";
        // line 253
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> ";
        echo (isset($context["button_history_add"]) ? $context["button_history_add"] : null);
        echo "</button>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-additional\"> ";
        // line 256
        if ((isset($context["account_custom_fields"]) ? $context["account_custom_fields"] : null)) {
            // line 257
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 261
            echo (isset($context["text_account_custom_field"]) ? $context["text_account_custom_field"] : null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["account_custom_fields"]) ? $context["account_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 266
                echo "                      <tr>
                        <td>";
                // line 267
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                        <td>";
                // line 268
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "                  </tbody>
                </table>
              </div>
            ";
        }
        // line 275
        echo "            ";
        if ((isset($context["payment_custom_fields"]) ? $context["payment_custom_fields"] : null)) {
            // line 276
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 280
            echo (isset($context["text_payment_custom_field"]) ? $context["text_payment_custom_field"] : null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_custom_fields"]) ? $context["payment_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 285
                echo "                      <tr>
                        <td>";
                // line 286
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                        <td>";
                // line 287
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            echo "                  </tbody>
                </table>
              </div>
            ";
        }
        // line 294
        echo "            ";
        if (((isset($context["shipping_method"]) ? $context["shipping_method"] : null) && (isset($context["shipping_custom_fields"]) ? $context["shipping_custom_fields"] : null))) {
            // line 295
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 299
            echo (isset($context["text_shipping_custom_field"]) ? $context["text_shipping_custom_field"] : null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shipping_custom_fields"]) ? $context["shipping_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 304
                echo "                      <tr>
                        <td>";
                // line 305
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                        <td>";
                // line 306
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            echo "                  </tbody>
                </table>
              </div>
            ";
        }
        // line 313
        echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 317
        echo (isset($context["text_browser"]) ? $context["text_browser"] : null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 322
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</td>
                    <td>";
        // line 323
        echo (isset($context["ip"]) ? $context["ip"] : null);
        echo "</td>
                  </tr>
                  ";
        // line 325
        if ((isset($context["forwarded_ip"]) ? $context["forwarded_ip"] : null)) {
            // line 326
            echo "                    <tr>
                      <td>";
            // line 327
            echo (isset($context["text_forwarded_ip"]) ? $context["text_forwarded_ip"] : null);
            echo "</td>
                      <td>";
            // line 328
            echo (isset($context["forwarded_ip"]) ? $context["forwarded_ip"] : null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 331
        echo "                  <tr>
                    <td>";
        // line 332
        echo (isset($context["text_user_agent"]) ? $context["text_user_agent"] : null);
        echo "</td>
                    <td>";
        // line 333
        echo (isset($context["user_agent"]) ? $context["user_agent"] : null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 336
        echo (isset($context["text_accept_language"]) ? $context["text_accept_language"] : null);
        echo "</td>
                    <td>";
        // line 337
        echo (isset($context["accept_language"]) ? $context["accept_language"] : null);
        echo "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 344
            echo "            <div class=\"tab-pane\" id=\"tab-";
            echo $this->getAttribute($context["tab"], "code", array());
            echo "\">";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "</div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$(document).on('click', '#button-invoice', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/createinvoiceno&user_token=";
        // line 353
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-invoice').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-invoice').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['invoice_no']) {
\t\t\t\t\$('#invoice').html(json['invoice_no']);

\t\t\t\t\$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-cog\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).on('click', '#button-reward-add', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/addreward&user_token=";
        // line 382
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-reward-add').replaceWith('<button id=\"button-reward-remove\" data-toggle=\"tooltip\" title=\"";
        // line 401
        echo (isset($context["button_reward_remove"]) ? $context["button_reward_remove"] : null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fas fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).on('click', '#button-reward-remove', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/removereward&user_token=";
        // line 412
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward-remove').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward-remove').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-reward-remove').replaceWith('<button id=\"button-reward-add\" data-toggle=\"tooltip\" title=\"";
        // line 431
        echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).on('click', '#button-commission-add', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/addcommission&user_token=";
        // line 442
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-commission-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-commission-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-commission-add').replaceWith('<button id=\"button-commission-remove\" data-toggle=\"tooltip\" title=\"";
        // line 461
        echo (isset($context["button_commission_remove"]) ? $context["button_commission_remove"] : null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fas fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).on('click', '#button-commission-remove', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/removecommission&user_token=";
        // line 472
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-commission-remove').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-commission-remove').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-commission-remove').replaceWith('<button id=\"button-commission-add\" data-toggle=\"tooltip\" title=\"";
        // line 491
        echo (isset($context["button_commission_add"]) ? $context["button_commission_add"] : null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fas fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#history').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 506
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');

\$('#button-history').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 510
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/history&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=";
        echo (isset($context["store_id"]) ? $context["store_id"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'order_status_id=' + encodeURIComponent(\$('select[name=\\'order_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&override=' + (\$('input[name=\\'override\\']').prop('checked') ? 1 : 0) + '&append=' + (\$('input[name=\\'append\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-history').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-history').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 528
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');

\t\t\t\t\$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 541
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1160 => 541,  1142 => 528,  1115 => 510,  1106 => 506,  1088 => 491,  1064 => 472,  1050 => 461,  1026 => 442,  1012 => 431,  988 => 412,  974 => 401,  950 => 382,  916 => 353,  906 => 345,  895 => 344,  891 => 343,  882 => 337,  878 => 336,  872 => 333,  868 => 332,  865 => 331,  859 => 328,  855 => 327,  852 => 326,  850 => 325,  845 => 323,  841 => 322,  833 => 317,  827 => 313,  821 => 309,  812 => 306,  808 => 305,  805 => 304,  801 => 303,  794 => 299,  788 => 295,  785 => 294,  779 => 290,  770 => 287,  766 => 286,  763 => 285,  759 => 284,  752 => 280,  746 => 276,  743 => 275,  737 => 271,  728 => 268,  724 => 267,  721 => 266,  717 => 265,  710 => 261,  704 => 257,  702 => 256,  694 => 253,  683 => 245,  673 => 240,  667 => 237,  660 => 233,  653 => 231,  647 => 228,  641 => 224,  635 => 223,  627 => 221,  619 => 219,  616 => 218,  612 => 217,  606 => 214,  600 => 211,  592 => 205,  581 => 203,  577 => 202,  573 => 201,  569 => 200,  563 => 197,  558 => 194,  550 => 190,  542 => 185,  537 => 182,  535 => 181,  531 => 179,  522 => 176,  518 => 175,  515 => 174,  510 => 173,  501 => 170,  497 => 169,  489 => 166,  486 => 165,  481 => 164,  472 => 161,  468 => 160,  464 => 159,  460 => 158,  452 => 157,  443 => 155,  440 => 154,  433 => 152,  429 => 151,  426 => 150,  422 => 149,  416 => 148,  413 => 147,  409 => 146,  402 => 142,  398 => 141,  394 => 140,  390 => 139,  386 => 138,  378 => 132,  372 => 131,  370 => 130,  366 => 129,  360 => 125,  354 => 124,  352 => 123,  348 => 122,  340 => 117,  330 => 109,  326 => 108,  323 => 107,  315 => 105,  307 => 103,  304 => 102,  302 => 101,  298 => 100,  295 => 99,  285 => 98,  283 => 97,  279 => 96,  274 => 93,  270 => 92,  267 => 91,  259 => 89,  251 => 87,  248 => 86,  246 => 85,  242 => 84,  238 => 83,  233 => 80,  229 => 79,  221 => 77,  219 => 76,  215 => 75,  211 => 74,  204 => 70,  194 => 63,  190 => 62,  182 => 59,  178 => 58,  172 => 55,  168 => 54,  163 => 51,  155 => 50,  145 => 49,  141 => 48,  135 => 45,  127 => 39,  121 => 36,  117 => 35,  114 => 34,  112 => 33,  107 => 31,  103 => 30,  97 => 27,  93 => 26,  85 => 23,  81 => 22,  74 => 18,  65 => 11,  54 => 9,  50 => 8,  45 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="float-right"><a href="{{ invoice }}" target="_blank" data-toggle="tooltip" title="{{ button_invoice_print }}" class="btn btn-info"><i class="fas fa-print"></i></a> <a href="{{ shipping }}" target="_blank" data-toggle="tooltip" title="{{ button_shipping_print }}" class="btn btn-info"><i class="fas fa-truck"></i></a> <a href="{{ edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a> <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-light"><i class="fas fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ol class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li class="breadcrumb-item"><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ol>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-md-4">*/
/*         <div class="card mb-3">*/
/*           <div class="card-header"><i class="fas fa-shopping-cart"></i> {{ text_order_detail }}</div>*/
/*           <table class="table">*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td style="width: 1%;"><button type="button" data-toggle="tooltip" title="{{ text_store }}" class="btn btn-info btn-xs"><i class="fas fa-shopping-cart fa-fw"></i></button></td>*/
/*                 <td><a href="{{ store_url }}" target="_blank">{{ store_name }}</a></td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td><button type="button" data-toggle="tooltip" title="{{ text_date_added }}" class="btn btn-info btn-xs"><i class="fas fa-calendar fa-fw"></i></button></td>*/
/*                 <td>{{ date_added }}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td><button type="button" data-toggle="tooltip" title="{{ text_payment_method }}" class="btn btn-info btn-xs"><i class="fas fa-credit-card fa-fw"></i></button></td>*/
/*                 <td>{{ payment_method }}</td>*/
/*               </tr>*/
/*               {% if shipping_method %}*/
/*                 <tr>*/
/*                   <td><button type="button" data-toggle="tooltip" title="{{ text_shipping_method }}" class="btn btn-info btn-xs"><i class="fas fa-truck fa-fw"></i></button></td>*/
/*                   <td>{{ shipping_method }}</td>*/
/*                 </tr>*/
/*               {% endif %}*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*         <div class="card mb-3">*/
/*           <div class="card-header"><i class="fas fa-user"></i> {{ text_customer_detail }}</div>*/
/*           <table class="table">*/
/*             <tr>*/
/*               <td style="width: 1%;"><button type="button" data-toggle="tooltip" title="{{ text_customer }}" class="btn btn-info btn-xs"><i class="fas fa-user fa-fw"></i></button></td>*/
/*               <td>{% if customer %} <a href="{{ customer }}" target="_blank">{{ firstname }} {{ lastname }}</a> {% else %}*/
/*                   {{ firstname }} {{ lastname }}*/
/*                 {% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button type="button" data-toggle="tooltip" title="{{ text_customer_group }}" class="btn btn-info btn-xs"><i class="fas fa-users fa-fw"></i></button></td>*/
/*               <td>{{ customer_group }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button type="button" data-toggle="tooltip" title="{{ text_email }}" class="btn btn-info btn-xs"><i class="fas fa-envelope fa-fw"></i></button></td>*/
/*               <td><a href="mailto:{{ email }}">{{ email }}</a></td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button type="button" data-toggle="tooltip" title="{{ text_telephone }}" class="btn btn-info btn-xs"><i class="fas fa-phone fa-fw"></i></button></td>*/
/*               <td>{{ telephone }}</td>*/
/*             </tr>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*         <div class="card mb-3">*/
/*           <div class="card-header"><i class="fas fa-cog"></i> {{ text_option }}</div>*/
/*           <table class="table">*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_invoice }}</td>*/
/*                 <td id="invoice" class="text-right">{{ invoice_no }}</td>*/
/*                 <td style="width: 1%;" class="text-center">{% if not invoice_no %}*/
/*                     <button type="button" id="button-invoice" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_generate }}" class="btn btn-success btn-xs"><i class="fas fa-cog"></i></button>*/
/*                   {% else %}*/
/*                     <button type="button" disabled="disabled" class="btn btn-success btn-xs"><i class="fas fa-cog"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_reward }}</td>*/
/*                 <td class="text-right">{{ reward }}</td>*/
/*                 <td class="text-center">{% if customer and reward %}*/
/*                     {% if not reward_total %}*/
/*                       <button type="button" id="button-reward-add" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_reward_add }}" class="btn btn-success btn-xs"><i class="fas fa-plus-circle"></i></button>*/
/*                     {% else %}*/
/*                       <button type="button" id="button-reward-remove" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_reward_remove }}" class="btn btn-danger btn-xs"><i class="fas fa-minus-circle"></i></button>*/
/*                     {% endif %}*/
/*                   {% else %}*/
/*                     <button type="button" disabled="disabled" class="btn btn-success btn-xs"><i class="fas fa-plus-circle"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_affiliate }}*/
/*                   {% if affiliate %}*/
/*                     (<a href="{{ affiliate }}">{{ affiliate_firstname }} {{ affiliate_lastname }}</a>)*/
/*                   {% endif %}</td>*/
/*                 <td class="text-right">{{ commission }}</td>*/
/*                 <td class="text-center">{% if affiliate %}*/
/*                     {% if not commission_total %}*/
/*                       <button type="button" id="button-commission-add" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_commission_add }}" class="btn btn-success btn-xs"><i class="fas fa-plus-circle"></i></button>*/
/*                     {% else %}*/
/*                       <button type="button" id="button-commission-remove" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_commission_remove }}" class="btn btn-danger btn-xs"><i class="fas fa-minus-circle"></i></button>*/
/*                     {% endif %}*/
/*                   {% else %}*/
/*                     <button type="button" disabled="disabled" class="btn btn-success btn-xs"><i class="fas fa-plus-circle"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="card mb-3">*/
/*       <div class="card-header"><i class="fas fa-info-circle"></i> {{ text_order }}</div>*/
/*       <div class="card-body">*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td style="width: 50%;" class="text-left">{{ text_payment_address }}</td>*/
/*               {% if shipping_method %}*/
/*                 <td style="width: 50%;" class="text-left">{{ text_shipping_address }}</td>*/
/*               {% endif %} </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td class="text-left">{{ payment_address }}</td>*/
/*               {% if shipping_method %}*/
/*                 <td class="text-left">{{ shipping_address }}</td>*/
/*               {% endif %} </tr>*/
/*           </tbody>*/
/*         </table>*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_product }}</td>*/
/*               <td class="text-left">{{ column_model }}</td>*/
/*               <td class="text-right">{{ column_quantity }}</td>*/
/*               <td class="text-right">{{ column_price }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% for product in products %}*/
/*               <tr>*/
/*                 <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a>*/
/*                   {% for option in product.option %}*/
/*                     <br/>*/
/*                     {% if option.type != 'file' %}&nbsp;*/
/*                       <small> - {{ option.name }}: {{ option.value }}</small>*/
/*                     {% else %}*/
/*                       &nbsp;*/
/*                       <small> - {{ option.name }}: <a href="{{ option.href }}">{{ option.value }}</a></small>*/
/*                     {% endif %}*/
/*                   {% endfor %}</td>*/
/*                 <td class="text-left">{{ product.model }}</td>*/
/*                 <td class="text-right">{{ product.quantity }}</td>*/
/*                 <td class="text-right">{{ product.price }}</td>*/
/*                 <td class="text-right">{{ product.total }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*               <tr>*/
/*                 <td class="text-left"><a href="{{ voucher.href }}">{{ voucher.description }}</a></td>*/
/*                 <td class="text-left"></td>*/
/*                 <td class="text-right">1</td>*/
/*                 <td class="text-right">{{ voucher.amount }}</td>*/
/*                 <td class="text-right">{{ voucher.amount }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% for total in totals %}*/
/*               <tr>*/
/*                 <td colspan="4" class="text-right">{{ total.title }}</td>*/
/*                 <td class="text-right">{{ total.text }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*         {% if comment %}*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td>{{ text_comment }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ comment }}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         {% endif %}</div>*/
/*     </div>*/
/*     <div class="card mb-3">*/
/*       <div class="card-header"><i class="fas fa-comment"></i> {{ text_history }}</div>*/
/*       <div class="card-body">*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="nav-item"><a href="#tab-history" data-toggle="tab" class="nav-link active">{{ tab_history }}</a></li>*/
/*           <li class="nav-item"><a href="#tab-additional" data-toggle="tab" class="nav-link">{{ tab_additional }}</a></li>*/
/*           {% for tab in tabs %}*/
/*             <li class="nav-item"><a href="#tab-{{ tab.code }}" data-toggle="tab" class="nav-link">{{ tab.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-history">*/
/*             <div id="history"></div>*/
/*             <br/>*/
/*             <fieldset>*/
/*               <legend>{{ text_history_add }}</legend>*/
/*               <form>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="order_status_id" id="input-order-status" class="form-control">*/
/*                       {% for order_statuses in order_statuses %}*/
/*                         {% if order_statuses.order_status_id == order_status_id %}*/
/*                           <option value="{{ order_statuses.order_status_id }}" selected="selected">{{ order_statuses.name }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ order_statuses.order_status_id }}">{{ order_statuses.name }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-override">{{ entry_override }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       <label class="btn btn-outline-secondary"><input type="radio" name="override" value="1"/> {{ text_yes }}</label> <label class="btn btn-outline-secondary active"><input type="radio" name="override" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_override }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-notify">{{ entry_notify }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       <label class="btn btn-outline-secondary"><input type="radio" name="notify" value="1"/> {{ text_yes }}</label> <label class="btn btn-outline-secondary active"><input type="radio" name="notify" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-comment">{{ entry_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="8" id="input-comment" class="form-control"></textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </form>*/
/*             </fieldset>*/
/*             <div class="text-right">*/
/*               <button id="button-history" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> {{ button_history_add }}</button>*/
/*             </div>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-additional"> {% if account_custom_fields %}*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td colspan="2">{{ text_account_custom_field }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for custom_field in account_custom_fields %}*/
/*                       <tr>*/
/*                         <td>{{ custom_field.name }}</td>*/
/*                         <td>{{ custom_field.value }}</td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if payment_custom_fields %}*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td colspan="2">{{ text_payment_custom_field }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for custom_field in payment_custom_fields %}*/
/*                       <tr>*/
/*                         <td>{{ custom_field.name }}</td>*/
/*                         <td>{{ custom_field.value }}</td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if shipping_method and shipping_custom_fields %}*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td colspan="2">{{ text_shipping_custom_field }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for custom_field in shipping_custom_fields %}*/
/*                       <tr>*/
/*                         <td>{{ custom_field.name }}</td>*/
/*                         <td>{{ custom_field.value }}</td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             {% endif %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_browser }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   <tr>*/
/*                     <td>{{ text_ip }}</td>*/
/*                     <td>{{ ip }}</td>*/
/*                   </tr>*/
/*                   {% if forwarded_ip %}*/
/*                     <tr>*/
/*                       <td>{{ text_forwarded_ip }}</td>*/
/*                       <td>{{ forwarded_ip }}</td>*/
/*                     </tr>*/
/*                   {% endif %}*/
/*                   <tr>*/
/*                     <td>{{ text_user_agent }}</td>*/
/*                     <td>{{ user_agent }}</td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>{{ text_accept_language }}</td>*/
/*                     <td>{{ accept_language }}</td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*               </table>*/
/*             </div>*/
/*           </div>*/
/*           {% for tab in tabs %}*/
/*             <div class="tab-pane" id="tab-{{ tab.code }}">{{ tab.content }}</div>*/
/*           {% endfor %}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $(document).on('click', '#button-invoice', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/createinvoiceno&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-invoice').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-invoice').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['invoice_no']) {*/
/* 				$('#invoice').html(json['invoice_no']);*/
/* */
/* 				$('#button-invoice').replaceWith('<button disabled="disabled" class="btn btn-success btn-xs"><i class="fas fa-cog"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-reward-add', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/addreward&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-reward-add').replaceWith('<button id="button-reward-remove" data-toggle="tooltip" title="{{ button_reward_remove }}" class="btn btn-danger btn-xs"><i class="fas fa-minus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-reward-remove', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/removereward&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward-remove').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward-remove').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-reward-remove').replaceWith('<button id="button-reward-add" data-toggle="tooltip" title="{{ button_reward_add }}" class="btn btn-success btn-xs"><i class="fas fa-plus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-commission-add', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/addcommission&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-commission-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-commission-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-commission-add').replaceWith('<button id="button-commission-remove" data-toggle="tooltip" title="{{ button_commission_remove }}" class="btn btn-danger btn-xs"><i class="fas fa-minus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-commission-remove', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/removecommission&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-commission-remove').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-commission-remove').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-commission-remove').replaceWith('<button id="button-commission-add" data-toggle="tooltip" title="{{ button_commission_add }}" class="btn btn-success btn-xs"><i class="fas fa-plus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#history').on('click', '.pagination a', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#history').load(this.href);*/
/* });*/
/* */
/* $('#history').load('index.php?route=sale/order/history&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* */
/* $('#button-history').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/order/history&api_token={{ api_token }}&store_id={{ store_id }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'order_status_id=' + encodeURIComponent($('select[name=\'order_status_id\']').val()) + '&notify=' + ($('input[name=\'notify\']').prop('checked') ? 1 : 0) + '&override=' + ($('input[name=\'override\']').prop('checked') ? 1 : 0) + '&append=' + ($('input[name=\'append\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent($('textarea[name=\'comment\']').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-history').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-history').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#history').before('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#history').load('index.php?route=sale/order/history&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* */
/* 				$('#history').before('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('textarea[name=\'comment\']').val('');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }} */
