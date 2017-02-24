<?php

/* template.twig */
class __TwigTemplate_a91169ff35af3d6661f0aa2b6bdb595352be24c92b8b7cce8a2028a8238a05d2 extends Twig_Template
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
        $context["current_language"] = $this->getAttribute((isset($context["languages"]) ? $context["languages"] : null), (isset($context["current_language_code"]) ? $context["current_language_code"] : null), array(), "array");
        // line 2
        $context["css_classes_flag"] = trim(("wpml-ls-flag " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_flag", array())));
        // line 3
        $context["css_classes_native"] = trim(("wpml-ls-native " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_native", array())));
        // line 4
        $context["css_classes_display"] = trim(("wpml-ls-display " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_display", array())));
        // line 5
        $context["css_classes_bracket"] = trim(("wpml-ls-bracket " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_bracket", array())));
        // line 6
        echo "
<div ";
        // line 7
        if (twig_in_filter("wpml-ls-touch-device", (isset($context["css_classes"]) ? $context["css_classes"] : null))) {
            echo "onclick=\"WPMLLanguageSwitcherDropdown.toggle(this);\"";
        }
        // line 8
        echo "\t class=\"";
        echo twig_escape_filter($this->env, (isset($context["css_classes"]) ? $context["css_classes"] : null), "html", null, true);
        echo " wpml-ls-legacy-dropdown js-wpml-ls-legacy-dropdown\"";
        if ($this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_id", array())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
\t<ul>

\t\t<li class=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "css_classes", array()), "html", null, true);
        echo " wpml-ls-item-legacy-dropdown\">

\t\t\t<a href=\"#\" ";
        // line 13
        if (twig_in_filter("wpml-ls-touch-device", (isset($context["css_classes"]) ? $context["css_classes"] : null))) {
            echo "onclick=\"return false;\"";
        }
        // line 14
        echo "\t\t\t   class=\"";
        echo twig_escape_filter($this->env, trim(("wpml-ls-item-toggle " . $this->getAttribute($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "backward_compatibility", array()), "css_classes_a", array()))), "html", null, true);
        echo "\">";
        // line 15
        if ($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "flag_url", array())) {
            // line 16
            echo "<img class=\"";
            echo twig_escape_filter($this->env, (isset($context["css_classes_flag"]) ? $context["css_classes_flag"] : null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "flag_url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["current_language_code"]) ? $context["current_language_code"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "display_name", array()), "html", null, true);
            echo "\">";
        }
        // line 19
        if (($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "display_name", array()) || $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "native_name", array()))) {
            // line 20
            $context["current_language_name"] = (($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "display_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "display_name", array()), $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "native_name", array()))) : ($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "native_name", array())));
            // line 21
            echo "<span class=\"";
            echo twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["current_language_name"]) ? $context["current_language_name"] : null), "html", null, true);
            echo "</span>";
        }
        // line 23
        echo "</a>

\t\t\t<ul class=\"wpml-ls-sub-menu\">
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            if ( !$this->getAttribute($context["language"], "is_current", array())) {
                // line 27
                echo "
\t\t\t\t\t<li class=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "css_classes", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "url", array()), "html", null, true);
                echo "\">";
                // line 30
                if ($this->getAttribute($context["language"], "flag_url", array())) {
                    // line 31
                    echo "<img class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_flag"]) ? $context["css_classes_flag"] : null), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", array()), "html", null, true);
                    echo "\">";
                }
                // line 34
                if ($this->getAttribute($context["language"], "native_name", array())) {
                    // line 35
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "native_name", array()), "html", null, true);
                    echo "</span>";
                }
                // line 37
                if ($this->getAttribute($context["language"], "display_name", array())) {
                    // line 38
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_display"]) ? $context["css_classes_display"] : null), "html", null, true);
                    echo "\">";
                    // line 39
                    if ($this->getAttribute($context["language"], "native_name", array())) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\">&nbsp;(</span>";
                    }
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", array()), "html", null, true);
                    // line 41
                    if ($this->getAttribute($context["language"], "native_name", array())) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 42
                    echo "</span>";
                }
                // line 44
                echo "</a>
\t\t\t\t\t</li>

\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t</ul>

\t\t</li>

\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  151 => 44,  148 => 42,  142 => 41,  140 => 40,  134 => 39,  130 => 38,  128 => 37,  121 => 35,  119 => 34,  108 => 31,  106 => 30,  103 => 29,  99 => 28,  96 => 27,  91 => 26,  86 => 23,  79 => 21,  77 => 20,  75 => 19,  64 => 16,  62 => 15,  58 => 14,  54 => 13,  49 => 11,  36 => 8,  32 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set current_language    = languages[ current_language_code ] %}*/
/* {% set css_classes_flag    = ('wpml-ls-flag ' ~ backward_compatibility.css_classes_flag)|trim %}*/
/* {% set css_classes_native  = ('wpml-ls-native ' ~ backward_compatibility.css_classes_native)|trim %}*/
/* {% set css_classes_display = ('wpml-ls-display ' ~ backward_compatibility.css_classes_display)|trim %}*/
/* {% set css_classes_bracket = ('wpml-ls-bracket ' ~ backward_compatibility.css_classes_bracket)|trim %}*/
/* */
/* <div {% if 'wpml-ls-touch-device' in css_classes %}onclick="WPMLLanguageSwitcherDropdown.toggle(this);"{% endif %}*/
/* 	 class="{{ css_classes }} wpml-ls-legacy-dropdown js-wpml-ls-legacy-dropdown"{% if backward_compatibility.css_id %} id="{{ backward_compatibility.css_id }}"{% endif %}>*/
/* 	<ul>*/
/* */
/* 		<li class="{{ current_language.css_classes }} wpml-ls-item-legacy-dropdown">*/
/* */
/* 			<a href="#" {% if 'wpml-ls-touch-device' in css_classes %}onclick="return false;"{% endif %}*/
/* 			   class="{{ ('wpml-ls-item-toggle ' ~ current_language.backward_compatibility.css_classes_a)|trim }}">*/
/* 				{%- if current_language.flag_url -%}*/
/* 					<img class="{{ css_classes_flag }}" src="{{ current_language.flag_url }}" alt="{{ current_language_code }}" title="{{ current_language.display_name }}">*/
/* 				{%- endif -%}*/
/* */
/* 				{%- if current_language.display_name or current_language.native_name -%}*/
/* 					{%- set current_language_name = current_language.display_name|default(current_language.native_name) -%}*/
/* 					<span class="{{ css_classes_native }}">{{- current_language_name -}}</span>*/
/* 				{%- endif -%}*/
/* 			</a>*/
/* */
/* 			<ul class="wpml-ls-sub-menu">*/
/* 				{% for language in languages if not language.is_current %}*/
/* */
/* 					<li class="{{ language.css_classes }}">*/
/* 						<a href="{{ language.url }}">*/
/* 							{%- if language.flag_url -%}*/
/* 								<img class="{{ css_classes_flag }}" src="{{ language.flag_url }}" alt="{{ language.code }}" title="{{ language.display_name }}">*/
/* 							{%- endif -%}*/
/* */
/* 							{%- if language.native_name -%}*/
/* 							<span class="{{ css_classes_native }}">{{ language.native_name }}</span>*/
/* 							{%- endif -%}*/
/* 							{%- if language.display_name -%}*/
/* 								<span class="{{ css_classes_display }}">*/
/* 									{%- if language.native_name -%}<span class="{{ css_classes_bracket }}">&nbsp;(</span>{%- endif -%}*/
/* 										{{- language.display_name -}}*/
/* 									{%- if language.native_name -%}<span class="{{ css_classes_bracket }}">)</span>{%- endif -%}*/
/* 								</span>*/
/* 							{%- endif -%}*/
/* 						</a>*/
/* 					</li>*/
/* */
/* 				{% endfor %}*/
/* 			</ul>*/
/* */
/* 		</li>*/
/* */
/* 	</ul>*/
/* </div>*/
