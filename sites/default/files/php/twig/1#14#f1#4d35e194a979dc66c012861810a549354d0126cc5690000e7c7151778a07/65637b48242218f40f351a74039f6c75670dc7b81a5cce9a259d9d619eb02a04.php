<?php

/* core/modules/system/templates/links.html.twig */
class __TwigTemplate_14f14d35e194a979dc66c012861810a549354d0126cc5690000e7c7151778a07 extends Twig_Template
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
        // line 38
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 39
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 40
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level")) {
                    // line 41
                    echo "<";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo ">";
                } else {
                    // line 43
                    echo "<h2";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</h2>";
                }
            }
            // line 46
            echo "<ul";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "<li";
                echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"));
                echo ">";
                // line 49
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link")) {
                    // line 50
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"));
                } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes")) {
                    // line 52
                    echo "<span";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                    echo "</span>";
                } else {
                    // line 54
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                }
                // line 56
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  51 => 48,  92 => 46,  86 => 45,  78 => 41,  74 => 39,  69 => 37,  64 => 36,  62 => 35,  57 => 50,  54 => 33,  50 => 32,  47 => 47,  36 => 29,  32 => 28,  28 => 27,  24 => 26,  48 => 38,  35 => 43,  25 => 41,  23 => 40,  43 => 46,  30 => 22,  26 => 21,  21 => 39,  19 => 38,);
    }
}
