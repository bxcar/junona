<?php

/* section-menus.twig */
class __TwigTemplate_bf6ec5f70059479ac08db6010c8ef87a43f3bca8e3ecf597128c48fb48188fe9 extends Twig_Template
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
        $this->loadTemplate("table-slots.twig", "section-menus.twig", 3)->display(array_merge($context, array("slot_type" => "menus", "slots_settings" => $this->getAttribute(        // line 6
(isset($context["settings"]) ? $context["settings"] : null), "menus", array()), "slots" => $this->getAttribute(        // line 7
(isset($context["data"]) ? $context["data"] : null), "menus", array()))));
        // line 10
        echo "
<p class=\"alignright\">
    ";
        // line 12
        $context["disabled"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "menus", array())) >= twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "menus", array())));
        // line 13
        echo "    <span class=\"js-wpml-ls-tooltip-wrapper";
        if ( !(isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " hidden";
        }
        echo "\">
        ";
        // line 14
        $this->loadTemplate("tooltip.twig", "section-menus.twig", 14)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tooltips", array()), "add_menu_disabled", array()))));
        // line 15
        echo "    </span>

    <button class=\"js-wpml-ls-open-dialog button-secondary\"";
        // line 17
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 18
        echo "            data-target=\"#wpml-ls-new-menu-template\">+ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "menus", array()), "add_button_label", array()), "html", null, true);
        echo "</button>
</p>

<script type=\"text/html\" id=\"wpml-ls-new-menu-template\" class=\"js-wpml-ls-template\">
    <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "menus", array()), "dialog_title_new", array()), "html", null, true);
        echo "\" data-item-slug=\"";
        echo twig_escape_filter($this->env, (isset($context["slug_placeholder"]) ? $context["slug_placeholder"] : null), "html", null, true);
        echo "\" data-item-type=\"menus\">

        ";
        // line 24
        $this->loadTemplate("slot-subform-menus.twig", "section-menus.twig", 24)->display(array_merge($context, array("slug" =>         // line 26
(isset($context["slug_placeholder"]) ? $context["slug_placeholder"] : null), "slots_settings" =>         // line 27
(isset($context["slots_settings"]) ? $context["slots_settings"] : null), "slots" => $this->getAttribute(        // line 28
(isset($context["data"]) ? $context["data"] : null), "menus", array()), "preview" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["previews"]) ? $context["previews"] : null), "menu", array()), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"))));
        // line 32
        echo "    </div>
</script>

<script type=\"text/html\" id=\"wpml-ls-new-menus-row-template\" class=\"js-wpml-ls-template\">
    ";
        // line 36
        $this->loadTemplate("table-slot-row.twig", "section-menus.twig", 36)->display(array_merge($context, array("slug" =>         // line 38
(isset($context["slug_placeholder"]) ? $context["slug_placeholder"] : null), "slots" =>         // line 39
(isset($context["menus"]) ? $context["menus"] : null))));
        // line 42
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "section-menus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 42,  80 => 39,  79 => 38,  78 => 36,  72 => 32,  70 => 29,  69 => 28,  68 => 27,  67 => 26,  66 => 24,  59 => 22,  51 => 18,  47 => 17,  43 => 15,  41 => 14,  34 => 13,  32 => 12,  28 => 10,  26 => 7,  25 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set slug_placeholder = '%id%' %}*/
/* */
/* {% include 'table-slots.twig'*/
/*     with {*/
/*         "slot_type": "menus",*/
/*         "slots_settings": settings.menus,*/
/*         "slots"    : data.menus,*/
/*     }*/
/* %}*/
/* */
/* <p class="alignright">*/
/*     {% set disabled = settings.menus|length >=  data.menus|length %}*/
/*     <span class="js-wpml-ls-tooltip-wrapper{% if not disabled %} hidden{% endif %}">*/
/*         {% include 'tooltip.twig' with { "content": strings.tooltips.add_menu_disabled } %}*/
/*     </span>*/
/* */
/*     <button class="js-wpml-ls-open-dialog button-secondary"{% if disabled %} disabled="disabled"{% endif %}*/
/*             data-target="#wpml-ls-new-menu-template">+ {{ strings.menus.add_button_label }}</button>*/
/* </p>*/
/* */
/* <script type="text/html" id="wpml-ls-new-menu-template" class="js-wpml-ls-template">*/
/*     <div class="js-wpml-ls-subform wpml-ls-subform" data-title="{{ strings.menus.dialog_title_new }}" data-item-slug="{{ slug_placeholder }}" data-item-type="menus">*/
/* */
/*         {% include 'slot-subform-menus.twig'*/
/*         with {*/
/*             "slug":     slug_placeholder,*/
/*             "slots_settings": slots_settings,*/
/*             "slots":    data.menus,*/
/*             "preview": previews.menu[ slug ],*/
/*         }*/
/*         %}*/
/*     </div>*/
/* </script>*/
/* */
/* <script type="text/html" id="wpml-ls-new-menus-row-template" class="js-wpml-ls-template">*/
/*     {% include 'table-slot-row.twig'*/
/*         with {*/
/*             "slug": slug_placeholder,*/
/*             "slots": menus*/
/*         }*/
/*     %}*/
/* </script>*/
