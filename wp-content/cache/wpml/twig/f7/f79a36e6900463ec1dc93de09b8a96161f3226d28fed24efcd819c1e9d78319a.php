<?php

/* section-shortcode-action.twig */
class __TwigTemplate_d901690998610c35bd63da0fba28804cb227897675dd5683418d311d1468f170 extends Twig_Template
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
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "shortcode_actions", array()), "section_description", array()), "html", null, true);
        echo "</p>
<pre>
&lt;?php do_action('wpml_add_language_selector'); ?&gt;
</pre>

<div class=\"hidden\">
    ";
        // line 7
        $context["slot_settings"] = array();
        // line 8
        echo "    ";
        $context["slot_settings"] = twig_array_merge((isset($context["slot_settings"]) ? $context["slot_settings"] : null), array("shortcode_actions" => $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "statics", array()), "footer", array())));
        // line 9
        echo "
    ";
        // line 10
        $this->loadTemplate("table-slots.twig", "section-shortcode-action.twig", 10)->display(array_merge($context, array("slot_type" => "statics", "slots_settings" =>         // line 13
(isset($context["slot_settings"]) ? $context["slot_settings"] : null), "slug" => "shortcode_actions")));
        // line 17
        echo "
</div>

<div class=\"alignleft\">
    <button class=\"js-wpml-ls-open-dialog button-secondary\"
            data-target=\"#wpml-ls-slot-list-statics-shortcode_actions\"
            name=\"wpml-ls-customize\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "shortcode_actions", array()), "customize_button_label", array()), "html", null, true);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "section-shortcode-action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 23,  40 => 17,  38 => 13,  37 => 10,  34 => 9,  31 => 8,  29 => 7,  19 => 1,);
    }
}
/* <p>{{ strings.shortcode_actions.section_description }}</p>*/
/* <pre>*/
/* &lt;?php do_action('wpml_add_language_selector'); ?&gt;*/
/* </pre>*/
/* */
/* <div class="hidden">*/
/*     {% set slot_settings = [] %}*/
/*     {% set slot_settings = slot_settings|merge({'shortcode_actions': settings.statics.footer}) %}*/
/* */
/*     {% include 'table-slots.twig'*/
/*         with {*/
/*             "slot_type": "statics",*/
/*             "slots_settings": slot_settings,*/
/*             "slug"     : 'shortcode_actions',*/
/*         }*/
/*     %}*/
/* */
/* </div>*/
/* */
/* <div class="alignleft">*/
/*     <button class="js-wpml-ls-open-dialog button-secondary"*/
/*             data-target="#wpml-ls-slot-list-statics-shortcode_actions"*/
/*             name="wpml-ls-customize">{{ strings.shortcode_actions.customize_button_label }}</button>*/
/* </div>*/
