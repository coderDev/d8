<?php

/* core/modules/system/templates/menu-tree.html.twig */
class __TwigTemplate_e13d14115aaf6e0f49bd0f93089aebe936b2b68154ec5230433956a577f3edeb extends Twig_Template
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
        if ((isset($context["tree"]) ? $context["tree"] : null)) {
            // line 30
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 31
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level")) {
                    // line 32
                    echo "<";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo ">";
                } else {
                    // line 34
                    echo "<h2";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</h2>";
                }
            }
            // line 37
            echo "<ul";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
    ";
            // line 38
            echo twig_render_var((isset($context["tree"]) ? $context["tree"] : null));
            echo "
  </ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 38,  35 => 34,  25 => 32,  23 => 31,  43 => 37,  30 => 22,  26 => 21,  21 => 30,  19 => 29,);
    }
}
