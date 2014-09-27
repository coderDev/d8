<?php

/* core/themes/seven/templates/admin-block-content.html.twig */
class __TwigTemplate_2d3dea484147903f2b8a4bbf48a241468f9b3380d0aa14d465829cc9431f6515 extends Twig_Template
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
        // line 19
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 20
            echo "  <ul";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
    ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "      <li><a href=\"";
                echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"));
                echo "\"><span class=\"label\">";
                echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"));
                echo "</span><div class=\"description\">";
                echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"));
                echo "</div></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 24,  30 => 22,  26 => 21,  21 => 20,  19 => 19,);
    }
}
