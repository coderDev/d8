<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_e16221e28615f7f2930661472da3c178777909fcfbacf0a037e04cef13d9d651 extends Twig_Template
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
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
    ";
            // line 25
            echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 24,  97 => 42,  91 => 39,  88 => 38,  86 => 37,  81 => 36,  75 => 35,  68 => 30,  64 => 28,  58 => 25,  53 => 24,  50 => 23,  39 => 19,  33 => 17,  31 => 16,  26 => 25,  24 => 14,  19 => 23,);
    }
}
