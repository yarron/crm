<?php

/* common/footer.twig */
class __TwigTemplate_5ed151124c6b74a391d73cb3720fab6f38c132bbdcdfcedd5b248f5628196778 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\"><a href=\"https://www.opencart.com/?utm_source=opencart_install&utm_medium=footer_link&utm_campaign=opencart_install\" target=\"_blank\">";
        // line 2
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"http://docs.opencart.com//?utm_source=opencart_install&utm_medium=footer_link&utm_campaign=opencart_install\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=footer_link&utm_campaign=opencart_install\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a><br />
    </div>
</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container"><a href="https://www.opencart.com/?utm_source=opencart_install&utm_medium=footer_link&utm_campaign=opencart_install" target="_blank">{{ text_project }}</a>|<a href="http://docs.opencart.com//?utm_source=opencart_install&utm_medium=footer_link&utm_campaign=opencart_install" target="_blank">{{ text_documentation }}</a>|<a href="https://forum.opencart.com/?utm_source=opencart_install&utm_medium=footer_link&utm_campaign=opencart_install" target="_blank">{{ text_support }}</a><br />*/
/*     </div>*/
/* </footer>*/
/* </body>*/
/* </html>*/
/* */
