<?php

/* section-sidebars.twig */
class __TwigTemplate_f6a45c199af80c71c7c05c85662cc3c55c8c7c21986140abf663b446f9bcf535 extends Twig_Template
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
        $context["slug_placeholder"] = "%id%";
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("table-slots.twig", "section-sidebars.twig", 3)->display(array_merge($context, array("slot_type" => "sidebars", "slots_settings" => $this->getAttribute(        // line 6
(isset($context["settings"]) ? $context["settings"] : null), "sidebars", array()), "slots" => $this->getAttribute(        // line 7
(isset($context["data"]) ? $context["data"] : null), "sidebars", array()))));
        // line 10
        echo "
<p class=\"alignright\">
    ";
        // line 12
        $context["disabled"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebars", array())) >= twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sidebars", array())));
        // line 13
        echo "    <span class=\"js-wpml-ls-tooltip-wrapper";
        if ( !(isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " hidden";
        }
        echo "\">
        ";
        // line 14
        $this->loadTemplate("tooltip.twig", "section-sidebars.twig", 14)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tooltips", array()), "add_sidebar_disabled", array()))));
        // line 15
        echo "    </span>

    <button class=\"js-wpml-ls-open-dialog button-secondary\"";
        // line 17
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 18
        echo "            data-target=\"#wpml-ls-new-sidebars-template\">+ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "sidebars", array()), "add_button_label", array()), "html", null, true);
        echo "</button>
</p>

<script type=\"text/html\" id=\"wpml-ls-new-sidebars-template\" class=\"js-wpml-ls-template\">
    <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "sidebars", array()), "dialog_title_new", array()), "html", null, true);
        echo "\" data-item-slug=\"";
        echo twig_escape_filter($this->env, (isset($context["slug_placeholder"]) ? $context["slug_placeholder"] : null), "html", null, true);
        echo "\" data-item-type=\"sidebars\">

        ";
        // line 24
        $this->loadTemplate("slot-subform-sidebars.twig", "section-sidebars.twig", 24)->display(array_merge($context, array("slug" =>         // line 26
(isset($context["slug_placeholder"]) ? $context["slug_placeholder"] : null), "slots_settings" =>         // line 27
(isset($context["slots_settings"]) ? $context["slots_settings"] : null), "slots" => $this->getAttribute(        // line 28
(isset($context["data"]) ? $context["data"] : null), "sidebars", array()), "preview" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["previews"]) ? $context["previews"] : null), "sidebars", array()), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"))));
        // line 32
        echo "
    </div>
</script>

<script type=\"text/html\" id=\"wpml-ls-new-sidebars-row-template\" class=\"js-wpml-ls-template\">
    ";
        // line 37
        $this->loadTemplate("table-slot-row.twig", "section-sidebars.twig", 37)->display(array_merge($context, array("slug" =>         // line 39
(isset($context["slug_placeholder"]) ? $context["slug_placeholder"] : null), "slots" =>         // line 40
(isset($context["sidebars"]) ? $context["sidebars"] : null))));
        // line 43
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "section-sidebars.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 43,  81 => 40,  80 => 39,  79 => 37,  72 => 32,  70 => 29,  69 => 28,  68 => 27,  67 => 26,  66 => 24,  59 => 22,  51 => 18,  47 => 17,  43 => 15,  41 => 14,  34 => 13,  32 => 12,  28 => 10,  26 => 7,  25 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set slug_placeholder = '%id%' %}*/
/* */
/* {% include 'table-slots.twig'*/
/* with {*/
/* "slot_type": "sidebars",*/
/* "slots_settings": settings.sidebars,*/
/* "slots"    : data.sidebars,*/
/* }*/
/* %}*/
/* */
/* <p class="alignright">*/
/*     {% set disabled = settings.sidebars|length >=  data.sidebars|length %}*/
/*     <span class="js-wpml-ls-tooltip-wrapper{% if not disabled %} hidden{% endif %}">*/
/*         {% include 'tooltip.twig' with { "content": strings.tooltips.add_sidebar_disabled } %}*/
/*     </span>*/
/* */
/*     <button class="js-wpml-ls-open-dialog button-secondary"{% if disabled %} disabled="disabled"{% endif %}*/
/*             data-target="#wpml-ls-new-sidebars-template">+ {{ strings.sidebars.add_button_label }}</button>*/
/* </p>*/
/* */
/* <script type="text/html" id="wpml-ls-new-sidebars-template" class="js-wpml-ls-template">*/
/*     <div class="js-wpml-ls-subform wpml-ls-subform" data-title="{{ strings.sidebars.dialog_title_new }}" data-item-slug="{{ slug_placeholder }}" data-item-type="sidebars">*/
/* */
/*         {% include 'slot-subform-sidebars.twig'*/
/*             with {*/
/*                 "slug":     slug_placeholder,*/
/*                 "slots_settings": slots_settings,*/
/*                 "slots":    data.sidebars,*/
/*                 "preview": previews.sidebars[ slug ],*/
/*             }*/
/*         %}*/
/* */
/*     </div>*/
/* </script>*/
/* */
/* <script type="text/html" id="wpml-ls-new-sidebars-row-template" class="js-wpml-ls-template">*/
/*     {% include 'table-slot-row.twig'*/
/*     with {*/
/*     "slug": slug_placeholder,*/
/*     "slots": sidebars*/
/*     }*/
/*     %}*/
/* </script>*/
