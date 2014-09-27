<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_59b35ffadeb13d83c5d68e03c7cfdb56000d9ae278b1f8ea54791b1433ab773a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 44
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 45
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
  ";
        // line 46
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 47
            echo "    <h2";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "</h2>
  ";
        }
        // line 49
        echo "  ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "

  <div";
        // line 51
        echo twig_render_var((isset($context["content_attributes"]) ? $context["content_attributes"] : null));
        echo ">
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "  </div>
</div>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "      ";
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 52,  45 => 51,  39 => 49,  31 => 47,  20 => 44,  59 => 25,  52 => 23,  46 => 21,  38 => 19,  33 => 17,  121 => 108,  115 => 105,  112 => 104,  110 => 103,  104 => 101,  98 => 98,  95 => 97,  83 => 92,  80 => 91,  72 => 88,  65 => 84,  56 => 81,  42 => 74,  40 => 73,  29 => 46,  27 => 69,  76 => 58,  70 => 56,  67 => 54,  60 => 53,  55 => 49,  51 => 55,  92 => 96,  86 => 93,  78 => 41,  74 => 89,  69 => 37,  64 => 36,  62 => 83,  57 => 52,  54 => 80,  50 => 32,  47 => 47,  36 => 18,  32 => 28,  28 => 27,  24 => 14,  48 => 76,  35 => 72,  25 => 45,  23 => 68,  43 => 46,  30 => 22,  26 => 21,  21 => 13,  19 => 12,);
    }
}
