<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_06c8dc83ac59771465df75457798819d2ba01d490a1b0eef7b4d746cea97b62f extends Twig_Template
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
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("Breadcrumb"));
            echo "</h2>
    <ol>
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>
        ";
                // line 18
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url")) {
                    // line 19
                    echo "          <a href=\"";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"));
                    echo "\">";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                    echo "</a>
        ";
                } else {
                    // line 21
                    echo "          ";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                    echo "
        ";
                }
                // line 23
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 25,  52 => 23,  46 => 21,  38 => 19,  33 => 17,  121 => 108,  115 => 105,  112 => 104,  110 => 103,  104 => 101,  98 => 98,  95 => 97,  83 => 92,  80 => 91,  72 => 88,  65 => 84,  56 => 81,  42 => 74,  40 => 73,  29 => 16,  27 => 69,  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  51 => 48,  92 => 96,  86 => 93,  78 => 41,  74 => 89,  69 => 37,  64 => 36,  62 => 83,  57 => 50,  54 => 80,  50 => 32,  47 => 47,  36 => 18,  32 => 28,  28 => 27,  24 => 14,  48 => 76,  35 => 72,  25 => 41,  23 => 68,  43 => 46,  30 => 22,  26 => 21,  21 => 13,  19 => 12,);
    }
}
