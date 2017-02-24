<?php

/* dropdown-menus.twig */
class __TwigTemplate_435c70e3ddc8f8f1ef37b8273b0a63f2091a0ca46b7136007d315bfac68063f5 extends Twig_Template
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
        echo "<h4><label for=\"wpml-ls-available-menus\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "menus", array()), "select_label", array()), "html", null, true);
        echo ":</label>  ";
        $this->loadTemplate("tooltip.twig", "dropdown-menus.twig", 1)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tooltips", array()), "available_menus", array()))));
        echo "</h4>
<select name=\"wpml_ls_available_menus\" class=\"js-wpml-ls-available-slots js-wpml-ls-available-menus\">
    <option disabled=\"disabled\">-- ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "menus", array()), "select_option_choose", array()), "html", null, true);
        echo " --</option>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["menu_key"] => $context["menu"]) {
            // line 5
            echo "        ";
            if (($context["menu_key"] == (isset($context["slug"]) ? $context["slug"] : null))) {
                // line 6
                echo "            ";
                $context["attr"] = " selected=\"selected\"";
                // line 7
                echo "        ";
            } elseif (twig_in_filter($this->getAttribute($context["menu"], "slug", array()), twig_get_array_keys_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "menus", array())))) {
                // line 8
                echo "            ";
                $context["attr"] = " disabled=\"disabled\"";
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            ";
                $context["attr"] = "";
                // line 11
                echo "        ";
            }
            // line 12
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "slug", array()), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['menu_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "dropdown-menus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  56 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  31 => 4,  27 => 3,  19 => 1,);
    }
}
/* <h4><label for="wpml-ls-available-menus">{{ strings.menus.select_label }}:</label>  {% include 'tooltip.twig' with { "content": strings.tooltips.available_menus } %}</h4>*/
/* <select name="wpml_ls_available_menus" class="js-wpml-ls-available-slots js-wpml-ls-available-menus">*/
/*     <option disabled="disabled">-- {{ strings.menus.select_option_choose }} --</option>*/
/*     {% for menu_key, menu in menus %}*/
/*         {% if menu_key == slug %}*/
/*             {% set attr = ' selected="selected"' %}*/
/*         {% elseif menu.slug in settings.menus|keys %}*/
/*             {% set attr = ' disabled="disabled"' %}*/
/*         {% else %}*/
/*             {% set attr = '' %}*/
/*         {% endif %}*/
/*         <option value="{{ menu.slug }}"{{ attr }}>{{ menu.name }}</option>*/
/*     {% endfor %}*/
/* </select>*/
/* */
