<?php

/* default/template/common/language.twig */
class __TwigTemplate_869ae88a19298c00760bef1a99f93f7a3998409a3b98b336cb2b00df645958a4 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "<div class=\"float-left\">
  <div class=\"dropdown\">
    <button class=\"btn btn-link dropdown-toggle\" type=\"button\" id=\"dropdown-language\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "      ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 7
                    echo "      <img src=\"catalog/language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\">
      ";
                }
                // line 9
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "      <span class=\"hidden-sm hidden-md\">";
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo "</span>
      <i class=\"fa fa-caret-down fa-fw\"></i>
    </button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown-language\">
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 15
                echo "      <li>
        <a href=\"";
                // line 16
                echo $this->getAttribute($context["language"], "href", array());
                echo "\" class=\"language-select btn btn-sm btn-link btn-block\" name=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\"><img src=\"catalog/language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" alt=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a>
      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </ul>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  66 => 16,  63 => 15,  59 => 14,  51 => 10,  45 => 9,  33 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* <div class="float-left">*/
/*   <div class="dropdown">*/
/*     <button class="btn btn-link dropdown-toggle" type="button" id="dropdown-language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*       {% for language in languages %}*/
/*       {% if language.code == code %}*/
/*       <img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}">*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*       <span class="hidden-sm hidden-md">{{ text_language }}</span>*/
/*       <i class="fa fa-caret-down fa-fw"></i>*/
/*     </button>*/
/*     <ul class="dropdown-menu" aria-labelledby="dropdown-language">*/
/*       {% for language in languages %}*/
/*       <li>*/
/*         <a href="{{ language.href }}" class="language-select btn btn-sm btn-link btn-block" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" /> {{ language.name }}</a>*/
/*       </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* */
