<?php

/* preview.twig */
class __TwigTemplate_acb869a9a5f650d0d069778a6a6cdbcad86458b29763657c85d2abcfb78fb7f3 extends Twig_Template
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
        echo "<div class=\"js-wpml-ls-preview-wrapper wpml-ls-preview-wrapper";
        if ((isset($context["class"]) ? $context["class"] : null)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        }
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "css", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["css_link"]) {
            // line 3
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $context["css_link"], "html", null, true);
            echo "\"  property=\"stylesheet\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "js", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["js_link"]) {
            // line 7
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $context["js_link"], "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <strong class=\"wpml-ls-preview-label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", array()), "label_preview", array()), "html", null, true);
        echo "</strong>
    <span class=\"spinner\"></span>
    <div class=\"js-wpml-ls-preview\">";
        // line 12
        echo $this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "html", array());
        echo "</div>

</div>";
    }

    public function getTemplateName()
    {
        return "preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  59 => 10,  56 => 9,  47 => 7,  43 => 6,  40 => 5,  31 => 3,  27 => 2,  19 => 1,);
    }
}
/* <div class="js-wpml-ls-preview-wrapper wpml-ls-preview-wrapper{% if class %} {{ class }}{% endif %}">*/
/*     {% for css_link in preview.css %}*/
/*         <link rel="stylesheet" type="text/css" media="all" href="{{ css_link }}"  property="stylesheet">*/
/*     {% endfor %}*/
/* */
/*     {% for js_link in preview.js %}*/
/*         <script type="text/javascript" src="{{ js_link }}"></script>*/
/*     {% endfor %}*/
/* */
/*     <strong class="wpml-ls-preview-label">{{ strings.misc.label_preview }}</strong>*/
/*     <span class="spinner"></span>*/
/*     <div class="js-wpml-ls-preview">{{ preview.html|raw }}</div>*/
/* */
/* </div>*/
