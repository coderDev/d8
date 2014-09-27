<?php

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_a5770ec3614507c58ca122672af844205af6cd09f61ea315c7db52e20e9ea75f extends Twig_Template
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
        // line 25
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  <nav";
        // line 26
        echo twig_render_var((isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : null));
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 27
        echo twig_render_var((isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : null));
        echo "</h2>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 29
            echo "      <div";
            echo twig_render_var($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "attributes"));
            echo ">";
            echo twig_render_var($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "link"));
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </nav>
  ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trays"]) ? $context["trays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tray"]) {
            // line 33
            echo "    ";
            ob_start();
            // line 34
            echo "    <div";
            echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "attributes"));
            echo ">
    ";
            // line 35
            if ($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label")) {
                // line 36
                echo "      <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"));
                echo "\">
          <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 37
                echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"));
                echo "</h3>
    ";
            } else {
                // line 39
                echo "      <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
    ";
            }
            // line 41
            echo "        ";
            echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "links"));
            echo "
      </nav>
    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 45
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  ";
        echo twig_render_var((isset($context["remainder"]) ? $context["remainder"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  86 => 45,  78 => 41,  74 => 39,  69 => 37,  64 => 36,  62 => 35,  57 => 34,  54 => 33,  50 => 32,  47 => 31,  36 => 29,  32 => 28,  28 => 27,  24 => 26,  48 => 38,  35 => 34,  25 => 32,  23 => 31,  43 => 37,  30 => 22,  26 => 21,  21 => 30,  19 => 25,);
    }
}
