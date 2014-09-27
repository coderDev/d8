<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_760c27e9de4d844da22d81999c1f401deaf0ca2f69339035aae5c3e6246d9806 extends Twig_Template
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_render_var((isset($context["html_attributes"]) ? $context["html_attributes"] : null));
        echo ">
  <head>
    ";
        // line 32
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "head"));
        echo "
    <title>";
        // line 33
        echo twig_render_var((isset($context["head_title"]) ? $context["head_title"] : null));
        echo "</title>
    ";
        // line 34
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "styles"));
        echo "
    ";
        // line 35
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts"));
        echo "
  </head>
  <body";
        // line 37
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_render_var((isset($context["page_top"]) ? $context["page_top"] : null));
        echo "
    ";
        // line 42
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"));
        echo "
    ";
        // line 43
        echo twig_render_var((isset($context["page_bottom"]) ? $context["page_bottom"] : null));
        echo "
    ";
        // line 44
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts", array(0 => "footer"), "method"));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 44,  62 => 43,  54 => 41,  49 => 39,  44 => 37,  35 => 34,  27 => 32,  22 => 30,  77 => 44,  74 => 43,  55 => 37,  51 => 36,  48 => 35,  45 => 34,  36 => 31,  32 => 29,  30 => 28,  23 => 27,  21 => 24,  97 => 42,  91 => 39,  88 => 38,  86 => 37,  81 => 46,  75 => 35,  68 => 41,  64 => 39,  58 => 42,  53 => 24,  50 => 23,  39 => 35,  33 => 17,  31 => 33,  26 => 25,  24 => 14,  19 => 29,);
    }
}
