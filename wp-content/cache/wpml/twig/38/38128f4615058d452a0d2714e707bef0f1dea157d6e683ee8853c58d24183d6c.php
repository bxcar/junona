<?php

/* panel-colors.twig */
class __TwigTemplate_e6cdcecc0cb75f429d09ad9b425fa3ae3594bf4f07d4fe185f7b2189e47aefe0 extends Twig_Template
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
        $context["options"] = array(0 => array("label" => $this->getAttribute($this->getAttribute(        // line 2
(isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "background", array()), "name" => "background", "schemes" => array(0 => "normal"), "default" => ""), 1 => array("label" => $this->getAttribute($this->getAttribute(        // line 3
(isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "border", array()), "name" => "border", "schemes" => array(0 => "normal"), "default" => ""), 2 => array("label" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "font_current", array()), "name" => "font_current", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 3 => array("label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "background_current", array()), "name" => "background_current", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 4 => array("label" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "font_other", array()), "name" => "font_other", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 5 => array("label" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "background_other", array()), "name" => "background_other", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""));
        // line 10
        echo "
";
        // line 11
        $context["css_class"] = ((array_key_exists("css_class", $context)) ? (_twig_default_filter((isset($context["css_class"]) ? $context["css_class"] : null), "js-wpml-ls-colorpicker")) : ("js-wpml-ls-colorpicker"));
        // line 12
        echo "
<div class=\"js-wpml-ls-panel-colors wpml-ls-panel-colors\">
    <h4>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "panel_title", array()), "html", null, true);
        echo "</h4>

    <label for=\"wpml-ls-";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-colorpicker-preset\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "label_color_preset", array()), "html", null, true);
        echo "</label>
    <select name=\"wpml-ls-";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-colorpicker-preset\" class=\"js-wpml-ls-colorpicker-preset\">
        <option value=\"\">-- ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "select_option_choose", array()), "html", null, true);
        echo " --</option>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["color_schemes"]) ? $context["color_schemes"] : null));
        foreach ($context['_seq'] as $context["scheme_id"] => $context["scheme"]) {
            // line 20
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["scheme_id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["scheme"], "label", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['scheme_id'], $context['scheme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </select>

    <div>
        <table>
            <tr>
                <td>
                </td>
                <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "label_normal_scheme", array()), "html", null, true);
        echo "</th>
                <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "color_picker", array()), "label_hover_scheme", array()), "html", null, true);
        echo "</th>
            </tr>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true);
            echo "</td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    ";
            // line 36
            if (twig_in_filter("normal", $this->getAttribute($context["option"], "schemes", array()))) {
                // line 37
                echo "                        ";
                if ((isset($context["name_base"]) ? $context["name_base"] : null)) {
                    // line 38
                    echo "                            ";
                    $context["input_name"] = ((((isset($context["name_base"]) ? $context["name_base"] : null) . "[") . $this->getAttribute($context["option"], "name", array())) . "_normal]");
                    // line 39
                    echo "                        ";
                } else {
                    // line 40
                    echo "                            ";
                    $context["input_name"] = ($this->getAttribute($context["option"], "name", array()) . "_normal");
                    // line 41
                    echo "                        ";
                }
                // line 42
                echo "                        <input class=\"";
                echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : null), "html", null, true);
                echo " js-wpml-ls-color-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                echo "_normal\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                echo "-normal\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : null), "html", null, true);
                echo "\"
                               value=\"";
                // line 44
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["slot_settings"]) ? $context["slot_settings"] : null), ($this->getAttribute($context["option"], "name", array()) . "_normal"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["slot_settings"]) ? $context["slot_settings"] : null), ($this->getAttribute($context["option"], "name", array()) . "_normal"), array(), "array"), $this->getAttribute($context["option"], "default", array()))) : ($this->getAttribute($context["option"], "default", array()))), "html", null, true);
                echo "\" data-default-color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "default", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                    ";
            }
            // line 46
            echo "                </td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    ";
            // line 48
            if (twig_in_filter("hover", $this->getAttribute($context["option"], "schemes", array()))) {
                // line 49
                echo "                        ";
                if ((isset($context["name_base"]) ? $context["name_base"] : null)) {
                    // line 50
                    echo "                            ";
                    $context["input_name"] = ((((isset($context["name_base"]) ? $context["name_base"] : null) . "[") . $this->getAttribute($context["option"], "name", array())) . "_hover]");
                    // line 51
                    echo "                        ";
                } else {
                    // line 52
                    echo "                            ";
                    $context["input_name"] = ($this->getAttribute($context["option"], "name", array()) . "_hover");
                    // line 53
                    echo "                        ";
                }
                // line 54
                echo "                        <input class=\"";
                echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : null), "html", null, true);
                echo " js-wpml-ls-color-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                echo "_hover\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                echo "-hover\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : null), "html", null, true);
                echo "\"
                               value=\"";
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["slot_settings"]) ? $context["slot_settings"] : null), ($this->getAttribute($context["option"], "name", array()) . "_hover"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["slot_settings"]) ? $context["slot_settings"] : null), ($this->getAttribute($context["option"], "name", array()) . "_hover"), array(), "array"), $this->getAttribute($context["option"], "default", array()))) : ($this->getAttribute($context["option"], "default", array()))), "html", null, true);
                echo "\" data-default-color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "default", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                    ";
            }
            // line 58
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </table>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "panel-colors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 61,  182 => 58,  175 => 56,  167 => 55,  160 => 54,  157 => 53,  154 => 52,  151 => 51,  148 => 50,  145 => 49,  143 => 48,  139 => 46,  132 => 44,  124 => 43,  117 => 42,  114 => 41,  111 => 40,  108 => 39,  105 => 38,  102 => 37,  100 => 36,  95 => 34,  92 => 33,  88 => 32,  83 => 30,  79 => 29,  70 => 22,  59 => 20,  55 => 19,  51 => 18,  47 => 17,  41 => 16,  36 => 14,  32 => 12,  30 => 11,  27 => 10,  25 => 7,  24 => 6,  23 => 5,  22 => 4,  21 => 3,  20 => 2,  19 => 1,);
    }
}
/* {% set options = [*/
/*         {'label': strings.color_picker.background,         'name': 'background',         'schemes': ['normal'],          'default': '' },*/
/*         {'label': strings.color_picker.border,             'name': 'border',             'schemes': ['normal'],          'default': '' },*/
/*         {'label': strings.color_picker.font_current,       'name': 'font_current',       'schemes': ['normal', 'hover'], 'default': '' },*/
/*         {'label': strings.color_picker.background_current, 'name': 'background_current', 'schemes': ['normal', 'hover'], 'default': '' },*/
/*         {'label': strings.color_picker.font_other,         'name': 'font_other',         'schemes': ['normal', 'hover'], 'default': '' },*/
/*         {'label': strings.color_picker.background_other,   'name': 'background_other',   'schemes': ['normal', 'hover'], 'default': '' },*/
/*     ]*/
/* %}*/
/* */
/* {% set css_class = css_class|default( 'js-wpml-ls-colorpicker' ) %}*/
/* */
/* <div class="js-wpml-ls-panel-colors wpml-ls-panel-colors">*/
/*     <h4>{{ strings.color_picker.panel_title }}</h4>*/
/* */
/*     <label for="wpml-ls-{{ id }}-colorpicker-preset">{{ strings.color_picker.label_color_preset }}</label>*/
/*     <select name="wpml-ls-{{ id }}-colorpicker-preset" class="js-wpml-ls-colorpicker-preset">*/
/*         <option value="">-- {{ strings.color_picker.select_option_choose }} --</option>*/
/*         {% for scheme_id, scheme in color_schemes %}*/
/*             <option value="{{ scheme_id }}">{{ scheme.label }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/* */
/*     <div>*/
/*         <table>*/
/*             <tr>*/
/*                 <td>*/
/*                 </td>*/
/*                 <th>{{ strings.color_picker.label_normal_scheme }}</th>*/
/*                 <th>{{ strings.color_picker.label_hover_scheme }}</th>*/
/*             </tr>*/
/*             {% for option in options %}*/
/*             <tr>*/
/*                 <td>{{ option.label }}</td>*/
/*                 <td class="js-wpml-ls-colorpicker-wrapper">*/
/*                     {% if 'normal' in option.schemes %}*/
/*                         {% if name_base %}*/
/*                             {% set input_name = name_base ~ '[' ~ option.name ~ '_normal]' %}*/
/*                         {% else %}*/
/*                             {% set input_name =  option.name ~ '_normal' %}*/
/*                         {% endif %}*/
/*                         <input class="{{ css_class }} js-wpml-ls-color-{{ option.name }}_normal" type="text" size="7"*/
/*                                id="wpml-ls-{{ id }}-{{ option.name }}-normal" name="{{ input_name }}"*/
/*                                value="{{ slot_settings[ option.name ~ "_normal" ]|default( option.default ) }}" data-default-color="{{ option.default }}" style="display: none;">*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td class="js-wpml-ls-colorpicker-wrapper">*/
/*                     {% if 'hover' in option.schemes %}*/
/*                         {% if name_base %}*/
/*                             {% set input_name = name_base ~ '[' ~ option.name ~ '_hover]' %}*/
/*                         {% else %}*/
/*                             {% set input_name =  option.name ~ '_hover' %}*/
/*                         {% endif %}*/
/*                         <input class="{{ css_class }} js-wpml-ls-color-{{ option.name }}_hover" type="text" size="7"*/
/*                                id="wpml-ls-{{ id }}-{{ option.name }}-hover" name="{{ input_name }}"*/
/*                                value="{{ slot_settings[ option.name ~ "_hover" ]|default( option.default ) }}" data-default-color="{{ option.default }}" style="display: none;">*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* </div>*/
