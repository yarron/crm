<?php

/* common/column_left.twig */
class __TwigTemplate_962c977cfa1cfb085e3701c728536c8561cfabbe2b8758dbeec63e9e04864787 extends Twig_Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fas fa-bars\"></span> ";
        // line 2
        echo (isset($context["text_navigation"]) ? $context["text_navigation"] : null);
        echo "</div>
  <ul id=\"menu\">
    ";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "      <li id=\"";
            echo $this->getAttribute($context["menu"], "id", array());
            echo "\">";
            if ($this->getAttribute($context["menu"], "href", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["menu"], "href", array());
                echo "\"><i class=\"fas ";
                echo $this->getAttribute($context["menu"], "icon", array());
                echo " fw\"></i> ";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</a>";
            } else {
                echo "<a href=\"#collapse";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fas ";
                echo $this->getAttribute($context["menu"], "icon", array());
                echo " fw\"></i> ";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</a>";
            }
            // line 7
            echo "        ";
            if ($this->getAttribute($context["menu"], "children", array())) {
                // line 8
                echo "          <ul id=\"collapse";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" class=\"collapse\">
            ";
                // line 9
                $context["j"] = 0;
                // line 10
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 11
                    echo "              <li>";
                    if ($this->getAttribute($context["children_1"], "href", array())) {
                        // line 12
                        echo "                  <a href=\"";
                        echo $this->getAttribute($context["children_1"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["children_1"], "name", array());
                        echo "</a>
                ";
                    } else {
                        // line 14
                        echo "                  <a href=\"#collapse";
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo "-";
                        echo (isset($context["j"]) ? $context["j"] : null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        echo $this->getAttribute($context["children_1"], "name", array());
                        echo "</a>
                ";
                    }
                    // line 16
                    echo "                ";
                    if ($this->getAttribute($context["children_1"], "children", array())) {
                        // line 17
                        echo "                  <ul id=\"collapse";
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo "-";
                        echo (isset($context["j"]) ? $context["j"] : null);
                        echo "\" class=\"collapse\">
                    ";
                        // line 18
                        $context["k"] = 0;
                        // line 19
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_1"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 20
                            echo "                      <li>";
                            if ($this->getAttribute($context["children_2"], "href", array())) {
                                // line 21
                                echo "                          <a href=\"";
                                echo $this->getAttribute($context["children_2"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["children_2"], "name", array());
                                echo "</a>
                        ";
                            } else {
                                // line 23
                                echo "                          <a href=\"#collapse-";
                                echo (isset($context["i"]) ? $context["i"] : null);
                                echo "-";
                                echo (isset($context["j"]) ? $context["j"] : null);
                                echo "-";
                                echo (isset($context["k"]) ? $context["k"] : null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                echo $this->getAttribute($context["children_2"], "name", array());
                                echo "</a>
                        ";
                            }
                            // line 25
                            echo "                        ";
                            if ($this->getAttribute($context["children_2"], "children", array())) {
                                // line 26
                                echo "                          <ul id=\"collapse-";
                                echo (isset($context["i"]) ? $context["i"] : null);
                                echo "-";
                                echo (isset($context["j"]) ? $context["j"] : null);
                                echo "-";
                                echo (isset($context["k"]) ? $context["k"] : null);
                                echo "\" class=\"collapse\">
                            ";
                                // line 27
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_2"], "children", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 28
                                    echo "                              <li><a href=\"";
                                    echo $this->getAttribute($context["children_3"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["children_3"], "name", array());
                                    echo "</a></li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 30
                                echo "                          </ul>
                        ";
                            }
                            // line 31
                            echo "</li>
                      ";
                            // line 32
                            $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                            // line 33
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "                  </ul>
                ";
                    }
                    // line 35
                    echo " </li>
              ";
                    // line 36
                    $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                    // line 37
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "          </ul>
        ";
            }
            // line 40
            echo "      </li>
      ";
            // line 41
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 47
        echo (isset($context["text_complete_status"]) ? $context["text_complete_status"] : null);
        echo " <span class=\"float-right\">";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 49
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%\"><span class=\"sr-only\">";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 53
        echo (isset($context["text_processing_status"]) ? $context["text_processing_status"] : null);
        echo " <span class=\"float-right\">";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 55
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%\"><span class=\"sr-only\">";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 59
        echo (isset($context["text_other_status"]) ? $context["text_other_status"] : null);
        echo " <span class=\"float-right\">";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 61
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%\"><span class=\"sr-only\">";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 61,  245 => 59,  234 => 55,  227 => 53,  216 => 49,  209 => 47,  203 => 43,  197 => 42,  195 => 41,  192 => 40,  188 => 38,  182 => 37,  180 => 36,  177 => 35,  173 => 34,  167 => 33,  165 => 32,  162 => 31,  158 => 30,  147 => 28,  143 => 27,  134 => 26,  131 => 25,  119 => 23,  111 => 21,  108 => 20,  103 => 19,  101 => 18,  94 => 17,  91 => 16,  81 => 14,  73 => 12,  70 => 11,  65 => 10,  63 => 9,  58 => 8,  55 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <nav id="column-left">*/
/*   <div id="navigation"><span class="fas fa-bars"></span> {{ text_navigation }}</div>*/
/*   <ul id="menu">*/
/*     {% set i = 0 %}*/
/*     {% for menu in menus %}*/
/*       <li id="{{ menu.id }}">{% if menu.href %}<a href="{{ menu.href }}"><i class="fas {{ menu.icon }} fw"></i> {{ menu.name }}</a>{% else %}<a href="#collapse{{ i }}" data-toggle="collapse" class="parent collapsed"><i class="fas {{ menu.icon }} fw"></i> {{ menu.name }}</a>{% endif %}*/
/*         {% if menu.children %}*/
/*           <ul id="collapse{{ i }}" class="collapse">*/
/*             {% set j = 0 %}*/
/*             {% for children_1 in menu.children %}*/
/*               <li>{% if children_1.href %}*/
/*                   <a href="{{ children_1.href }}">{{ children_1.name }}</a>*/
/*                 {% else %}*/
/*                   <a href="#collapse{{ i }}-{{ j }}" data-toggle="collapse" class="parent collapsed">{{ children_1.name }}</a>*/
/*                 {% endif %}*/
/*                 {% if children_1.children %}*/
/*                   <ul id="collapse{{ i }}-{{ j }}" class="collapse">*/
/*                     {% set k = 0 %}*/
/*                     {% for children_2 in children_1.children %}*/
/*                       <li>{% if children_2.href %}*/
/*                           <a href="{{ children_2.href }}">{{ children_2.name }}</a>*/
/*                         {% else %}*/
/*                           <a href="#collapse-{{ i }}-{{ j }}-{{ k }}" data-toggle="collapse" class="parent collapsed">{{ children_2.name }}</a>*/
/*                         {% endif %}*/
/*                         {% if children_2.children %}*/
/*                           <ul id="collapse-{{ i }}-{{ j }}-{{ k }}" class="collapse">*/
/*                             {% for children_3 in children_2.children %}*/
/*                               <li><a href="{{ children_3.href }}">{{ children_3.name }}</a></li>*/
/*                             {% endfor %}*/
/*                           </ul>*/
/*                         {% endif %}</li>*/
/*                       {% set k = k + 1 %}*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                 {% endif %} </li>*/
/*               {% set j = j + 1 %}*/
/*             {% endfor %}*/
/*           </ul>*/
/*         {% endif %}*/
/*       </li>*/
/*       {% set i = i + 1 %}*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div id="stats">*/
/*     <ul>*/
/*       <li>*/
/*         <div>{{ text_complete_status }} <span class="float-right">{{ complete_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ complete_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ complete_status }}%"><span class="sr-only">{{ complete_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <div>{{ text_processing_status }} <span class="float-right">{{ processing_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ processing_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ processing_status }}%"><span class="sr-only">{{ processing_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <div>{{ text_other_status }} <span class="float-right">{{ other_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ other_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ other_status }}%"><span class="sr-only">{{ other_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*     </ul>*/
/*   </div>*/
/* </nav>*/
