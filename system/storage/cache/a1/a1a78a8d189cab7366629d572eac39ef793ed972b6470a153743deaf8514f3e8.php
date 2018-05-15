<?php

/* common/header.twig */
class __TwigTemplate_7b9d2e7fd79d2f0e7bbd0f999ea89acefb74c312a2106ef45bec64f8f05746d4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
  <base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
  ";
        // line 7
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 8
            echo "    <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\"/>
  ";
        }
        // line 10
        echo "  ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 11
            echo "    <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\"/>
  ";
        }
        // line 13
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <link type=\"text/css\" href=\"view/stylesheet/bootstrap.css\" rel=\"stylesheet\"/>
  <link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\"/>
  <link type=\"text/css\" href=\"view/javascript/font-awesome/css/fontawesome-all.css\" rel=\"stylesheet\"/>
  <link type=\"text/css\" href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\" media=\"screen\"/>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-3.3.1.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/popper.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.js\"></script>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            echo "    <link type=\"text/css\" href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 28
            echo "    <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  <script type=\"text/javascript\" src=\"view/javascript/common.js\"></script>
  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 32
            echo "    <script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</head>
<body>
<div id=\"container\">
  <header id=\"header\" class=\"navbar navbar-expand navbar-light bg-light\">
    <div class=\"container-fluid\">
      <a href=\"";
        // line 39
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\" class=\"navbar-brand d-none d-md-block border-right\"><img src=\"view/image/logo.png\" alt=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" title=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\"/></a>
      ";
        // line 40
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 41
            echo "        <a href=\"#\" id=\"button-menu\" class=\"d-inline-block d-md-none border-right\"><span class=\"fas fa-bars\"></span></a>
        <ul class=\"navbar-nav\">
          <li class=\"nav-item dropdown border-left\">
            <a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\"><img src=\"";
            // line 44
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "\" title=\"";
            echo (isset($context["username"]) ? $context["username"] : null);
            echo "\" id=\"user-profile\" class=\"rounded-circle\"/>&nbsp;&nbsp; ";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo " <i class=\"fas fa-caret-down fa-fw\"></i></a>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <a href=\"";
            // line 46
            echo (isset($context["profile"]) ? $context["profile"] : null);
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-user-circle fa-fw\"></i> ";
            echo (isset($context["text_profile"]) ? $context["text_profile"] : null);
            echo "</a>
              <div class=\"dropdown-divider\"></div>
              <h6 class=\"dropdown-header\">";
            // line 48
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h6>
              ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 50
                echo "                <a href=\"";
                echo $this->getAttribute($context["store"], "href", array());
                echo "\" target=\"_blank\" class=\"dropdown-item\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "              <div class=\"dropdown-divider\"></div>
              <h6 class=\"dropdown-header\">";
            // line 53
            echo (isset($context["text_help"]) ? $context["text_help"] : null);
            echo "</h6>
              <a href=\"http://www.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fab fa-opencart fa-fw\"></i> ";
            // line 54
            echo (isset($context["text_homepage"]) ? $context["text_homepage"] : null);
            echo "</a> <a href=\"http://docs.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fas fa-file-alt fa-fw\"></i> ";
            echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
            echo "</a> <a href=\"http://forum.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fas fa-comments fa-fw\"></i> ";
            echo (isset($context["text_support"]) ? $context["text_support"] : null);
            echo "</a>
            </div>
          </li>
          <li class=\"nav-item border-left\"><a href=\"";
            // line 57
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" class=\"nav-link\"><i class=\"fas fa-sign-out-alt\"></i> <span class=\"d-none d-md-inline\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</span></a></li>
        </ul>
      ";
        }
        // line 60
        echo "    </div>
  </header>
";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 60,  197 => 57,  187 => 54,  183 => 53,  180 => 52,  169 => 50,  165 => 49,  161 => 48,  154 => 46,  139 => 44,  134 => 41,  132 => 40,  124 => 39,  117 => 34,  108 => 32,  104 => 31,  101 => 30,  90 => 28,  85 => 27,  72 => 25,  68 => 24,  55 => 13,  49 => 11,  46 => 10,  40 => 8,  38 => 7,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/*   <meta charset="UTF-8"/>*/
/*   <title>{{ title }}</title>*/
/*   <base href="{{ base }}"/>*/
/*   {% if description %}*/
/*     <meta name="description" content="{{ description }}"/>*/
/*   {% endif %}*/
/*   {% if keywords %}*/
/*     <meta name="keywords" content="{{ keywords }}"/>*/
/*   {% endif %}*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>*/
/*   <link type="text/css" href="view/stylesheet/bootstrap.css" rel="stylesheet"/>*/
/*   <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen"/>*/
/*   <link type="text/css" href="view/javascript/font-awesome/css/fontawesome-all.css" rel="stylesheet"/>*/
/*   <link type="text/css" href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"/>*/
/*   <script type="text/javascript" src="view/javascript/jquery/jquery-3.3.1.min.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/popper.min.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/jquery/datetimepicker/moment/moment.min.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.js"></script>*/
/*   {% for style in styles %}*/
/*     <link type="text/css" href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}"/>*/
/*   {% endfor %}*/
/*   {% for link in links %}*/
/*     <link href="{{ link.href }}" rel="{{ link.rel }}"/>*/
/*   {% endfor %}*/
/*   <script type="text/javascript" src="view/javascript/common.js"></script>*/
/*   {% for script in scripts %}*/
/*     <script type="text/javascript" src="{{ script }}"></script>*/
/*   {% endfor %}*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*   <header id="header" class="navbar navbar-expand navbar-light bg-light">*/
/*     <div class="container-fluid">*/
/*       <a href="{{ home }}" class="navbar-brand d-none d-md-block border-right"><img src="view/image/logo.png" alt="{{ heading_title }}" title="{{ heading_title }}"/></a>*/
/*       {% if logged %}*/
/*         <a href="#" id="button-menu" class="d-inline-block d-md-none border-right"><span class="fas fa-bars"></span></a>*/
/*         <ul class="navbar-nav">*/
/*           <li class="nav-item dropdown border-left">*/
/*             <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle"><img src="{{ image }}" alt="{{ firstname }} {{ lastname }}" title="{{ username }}" id="user-profile" class="rounded-circle"/>&nbsp;&nbsp; {{ firstname }} {{ lastname }} <i class="fas fa-caret-down fa-fw"></i></a>*/
/*             <div class="dropdown-menu dropdown-menu-right">*/
/*               <a href="{{ profile }}" class="dropdown-item"><i class="fas fa-user-circle fa-fw"></i> {{ text_profile }}</a>*/
/*               <div class="dropdown-divider"></div>*/
/*               <h6 class="dropdown-header">{{ text_store }}</h6>*/
/*               {% for store in stores %}*/
/*                 <a href="{{ store.href }}" target="_blank" class="dropdown-item">{{ store.name }}</a>*/
/*               {% endfor %}*/
/*               <div class="dropdown-divider"></div>*/
/*               <h6 class="dropdown-header">{{ text_help }}</h6>*/
/*               <a href="http://www.opencart.com" target="_blank" class="dropdown-item"><i class="fab fa-opencart fa-fw"></i> {{ text_homepage }}</a> <a href="http://docs.opencart.com" target="_blank" class="dropdown-item"><i class="fas fa-file-alt fa-fw"></i> {{ text_documentation }}</a> <a href="http://forum.opencart.com" target="_blank" class="dropdown-item"><i class="fas fa-comments fa-fw"></i> {{ text_support }}</a>*/
/*             </div>*/
/*           </li>*/
/*           <li class="nav-item border-left"><a href="{{ logout }}" class="nav-link"><i class="fas fa-sign-out-alt"></i> <span class="d-none d-md-inline">{{ text_logout }}</span></a></li>*/
/*         </ul>*/
/*       {% endif %}*/
/*     </div>*/
/*   </header>*/
/* */
