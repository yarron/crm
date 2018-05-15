<?php

/* default/template/common/currency.twig */
class __TwigTemplate_816c03bcdb232e7a05061d863526f8d24fa52938a7946ba7b114116e78494148 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<div class=\"float-left\">
  <form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"dropdown\">
      <button class=\"btn btn-link dropdown-toggle\" type=\"button\" id=\"dropdown-currency\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "        ";
                if (($this->getAttribute($context["currency"], "symbol_left", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    // line 8
                    echo "        <strong>";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "</strong>
        ";
                } elseif (($this->getAttribute(                // line 9
$context["currency"], "symbol_right", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    // line 10
                    echo "        <strong>";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "</strong>
        ";
                }
                // line 12
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        <span class=\"hidden-sm hidden-md\">";
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "</span>
        <i class=\"fa fa-caret-down fa-fw\"></i>
      </button>
      <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown-currency\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 18
                echo "        ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 19
                    echo "        <li>
          <a class=\"currency-select btn btn-sm btn-link btn-block\" name=\"";
                    // line 20
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">
          ";
                    // line 21
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</a>
        </li>
        ";
                } else {
                    // line 24
                    echo "        <li>
          <a class=\"currency-select btn btn-link btn-block\" name=\"";
                    // line 25
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">
          ";
                    // line 26
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</a>
        </li>
        ";
                }
                // line 29
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      </ul>
    </div>

    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 34
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
  </form>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  107 => 30,  101 => 29,  93 => 26,  89 => 25,  86 => 24,  78 => 21,  74 => 20,  71 => 19,  68 => 18,  64 => 17,  56 => 13,  50 => 12,  44 => 10,  42 => 9,  37 => 8,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <div class="float-left">*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*     <div class="dropdown">*/
/*       <button class="btn btn-link dropdown-toggle" type="button" id="dropdown-currency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*         {% for currency in currencies %}*/
/*         {% if currency.symbol_left and currency.code == code %}*/
/*         <strong>{{ currency.symbol_left }}</strong>*/
/*         {% elseif currency.symbol_right and currency.code == code %}*/
/*         <strong>{{ currency.symbol_right }}</strong>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*         <span class="hidden-sm hidden-md">{{ text_currency }}</span>*/
/*         <i class="fa fa-caret-down fa-fw"></i>*/
/*       </button>*/
/*       <ul class="dropdown-menu" aria-labelledby="dropdown-currency">*/
/*         {% for currency in currencies %}*/
/*         {% if currency.symbol_left %}*/
/*         <li>*/
/*           <a class="currency-select btn btn-sm btn-link btn-block" name="{{ currency.code }}">*/
/*           {{ currency.symbol_left }} {{ currency.title }}</a>*/
/*         </li>*/
/*         {% else %}*/
/*         <li>*/
/*           <a class="currency-select btn btn-link btn-block" name="{{ currency.code }}">*/
/*           {{ currency.symbol_right }} {{ currency.title }}</a>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/* */
/*     <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*   </form>*/
/* </div>*/
/* {% endif %}*/
/* */
