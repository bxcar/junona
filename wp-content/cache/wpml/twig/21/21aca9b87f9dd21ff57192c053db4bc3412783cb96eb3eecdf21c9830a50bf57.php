<?php

/* table-slots.twig */
class __TwigTemplate_aaf4ae3bac10a10167e3fa0d14d09b36c6f438a2aea1b62b58b160b5c370ae9f extends Twig_Template
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
        if (((isset($context["slot_type"]) ? $context["slot_type"] : null) == "statics")) {
            // line 2
            echo "\t";
            $context["is_static"] = true;
            // line 3
            echo "\t";
            $context["table_id"] = ((("wpml-ls-slot-list-" . (isset($context["slot_type"]) ? $context["slot_type"] : null)) . "-") . (isset($context["slug"]) ? $context["slug"] : null));
        } else {
            // line 5
            echo "\t";
            $context["table_id"] = ("wpml-ls-slot-list-" . (isset($context["slot_type"]) ? $context["slot_type"] : null));
        }
        // line 7
        echo "
<table id=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["table_id"]) ? $context["table_id"] : null), "html", null, true);
        echo "\" class=\"js-wpml-ls-slot-list wpml-ls-slot-list\"";
        if ( !(isset($context["slots_settings"]) ? $context["slots_settings"] : null)) {
            echo " style=\"display:none;\"";
        }
        echo ">
    <thead>
    <tr>
        <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", array()), "label_preview", array()), "html", null, true);
        echo "</th>
        ";
        // line 12
        if ( !(isset($context["is_static"]) ? $context["is_static"] : null)) {
            echo "<th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", array()), "label_position", array()), "html", null, true);
            echo "</th>";
        }
        // line 13
        echo "        <th";
        if ( !(isset($context["is_static"]) ? $context["is_static"] : null)) {
            echo " colspan=\"2\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", array()), "label_actions", array()), "html", null, true);
        echo "</th></tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slots_settings"]) ? $context["slots_settings"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["slug"] => $context["slot_settings"]) {
            // line 17
            echo "        ";
            $this->loadTemplate("table-slot-row.twig", "table-slots.twig", 17)->display(array_merge($context, array("slug" =>             // line 19
$context["slug"], "slot_type" =>             // line 20
(isset($context["slot_type"]) ? $context["slot_type"] : null), "slot_settings" =>             // line 21
$context["slot_settings"], "slots" =>             // line 22
(isset($context["slots"]) ? $context["slots"] : null))));
            // line 25
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['slot_settings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "table-slots.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  90 => 25,  88 => 22,  87 => 21,  86 => 20,  85 => 19,  83 => 17,  66 => 16,  55 => 13,  49 => 12,  45 => 11,  35 => 8,  32 => 7,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if slot_type == 'statics' %}*/
/* 	{% set is_static = true %}*/
/* 	{% set table_id = 'wpml-ls-slot-list-' ~ slot_type ~ '-' ~ slug %}*/
/* {% else %}*/
/* 	{% set table_id = 'wpml-ls-slot-list-' ~ slot_type %}*/
/* {% endif %}*/
/* */
/* <table id="{{ table_id }}" class="js-wpml-ls-slot-list wpml-ls-slot-list"{% if not slots_settings %} style="display:none;"{% endif %}>*/
/*     <thead>*/
/*     <tr>*/
/*         <th>{{ strings.misc.label_preview }}</th>*/
/*         {% if not is_static %}<th>{{ strings.misc.label_position }}</th>{% endif %}*/
/*         <th{% if not is_static %} colspan="2"{% endif %}>{{ strings.misc.label_actions }}</th></tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for slug, slot_settings in slots_settings %}*/
/*         {% include 'table-slot-row.twig'*/
/*             with {*/
/*                 "slug": slug,*/
/*                 "slot_type": slot_type,*/
/*                 "slot_settings": slot_settings,*/
/*                 "slots": slots,*/
/*             }*/
/*         %}*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
