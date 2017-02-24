<?php

/* template.twig */
class __TwigTemplate_cad320e88c93b6fa6b96c54dc62e7bc4ba28506f4204a6032e1ca596a38dd9c3 extends Twig_Template
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
        $context["css_classes_flag"] = trim(("wpml-ls-flag " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_flag", array())));
        // line 2
        $context["css_classes_native"] = trim(("wpml-ls-native " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_native", array())));
        // line 3
        $context["css_classes_display"] = trim(("wpml-ls-display " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_display", array())));
        // line 4
        $context["css_classes_bracket"] = trim(("wpml-ls-bracket " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_bracket", array())));
        // line 5
        echo "
<div class=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["css_classes"]) ? $context["css_classes"] : null), "html", null, true);
        echo " wpml-ls-legacy-list-horizontal\"";
        if ($this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_id", array())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
\t<ul>

\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 10
            echo "\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "css_classes", array()), "html", null, true);
            echo " wpml-ls-item-legacy-list-horizontal\">
\t\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "url", array()), "html", null, true);
            echo "\"";
            if ($this->getAttribute($this->getAttribute($context["language"], "backward_compatibility", array()), "css_classes_a", array())) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["language"], "backward_compatibility", array()), "css_classes_a", array()), "html", null, true);
                echo "\"";
            }
            echo ">";
            // line 12
            if ($this->getAttribute($context["language"], "flag_url", array())) {
                // line 13
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
            // line 16
            if (($this->getAttribute($context["language"], "is_current", array()) && ($this->getAttribute($context["language"], "native_name", array()) || $this->getAttribute($context["language"], "display_name", array())))) {
                // line 18
                $context["current_language_name"] = (($this->getAttribute($context["language"], "native_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["language"], "native_name", array()), $this->getAttribute($context["language"], "display_name", array()))) : ($this->getAttribute($context["language"], "display_name", array())));
                // line 19
                echo "<span class=\"";
                echo twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["current_language_name"]) ? $context["current_language_name"] : null), "html", null, true);
                echo "</span>";
            } else {
                // line 23
                if ($this->getAttribute($context["language"], "native_name", array())) {
                    // line 24
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "native_name", array()), "html", null, true);
                    echo "</span>";
                }
                // line 27
                if ($this->getAttribute($context["language"], "display_name", array())) {
                    // line 28
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_display"]) ? $context["css_classes_display"] : null), "html", null, true);
                    echo "\">";
                    // line 29
                    if ($this->getAttribute($context["language"], "native_name", array())) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\">&nbsp;(</span>";
                    }
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", array()), "html", null, true);
                    // line 31
                    if ($this->getAttribute($context["language"], "native_name", array())) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 32
                    echo "</span>";
                }
            }
            // line 36
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
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
        return array (  125 => 39,  117 => 36,  113 => 32,  107 => 31,  105 => 30,  99 => 29,  95 => 28,  93 => 27,  86 => 24,  84 => 23,  77 => 19,  75 => 18,  73 => 16,  62 => 13,  60 => 12,  51 => 11,  46 => 10,  42 => 9,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set css_classes_flag    = ('wpml-ls-flag ' ~ backward_compatibility.css_classes_flag)|trim %}*/
/* {% set css_classes_native  = ('wpml-ls-native ' ~ backward_compatibility.css_classes_native)|trim %}*/
/* {% set css_classes_display = ('wpml-ls-display ' ~ backward_compatibility.css_classes_display)|trim %}*/
/* {% set css_classes_bracket = ('wpml-ls-bracket ' ~ backward_compatibility.css_classes_bracket)|trim %}*/
/* */
/* <div class="{{ css_classes }} wpml-ls-legacy-list-horizontal"{% if backward_compatibility.css_id %} id="{{ backward_compatibility.css_id }}"{% endif %}>*/
/* 	<ul>*/
/* */
/* 		{% for code, language in languages %}*/
/* 			<li class="{{ language.css_classes }} wpml-ls-item-legacy-list-horizontal">*/
/* 				<a href="{{ language.url }}"{% if language.backward_compatibility.css_classes_a %} class="{{ language.backward_compatibility.css_classes_a }}"{% endif %}>*/
/* 					{%- if language.flag_url -%}*/
/* 						<img class="{{ css_classes_flag }}" src="{{ language.flag_url }}" alt="{{ language.code }}" title="{{ language.display_name }}">*/
/* 					{%- endif -%}*/
/* */
/* 					{%- if language.is_current and (language.native_name or language.display_name)  -%}*/
/* */
/* 						{%- set current_language_name = language.native_name|default(language.display_name) -%}*/
/* 						<span class="{{ css_classes_native }}">{{- current_language_name -}}</span>*/
/* */
/* 					{%- else -%}*/
/* */
/* 						{%- if language.native_name -%}*/
/* 							<span class="{{ css_classes_native }}">{{- language.native_name -}}</span>*/
/* 						{%- endif -%}*/
/* */
/* 						{%- if language.display_name -%}*/
/* 							<span class="{{ css_classes_display }}">*/
/* 							{%- if language.native_name -%}<span class="{{ css_classes_bracket }}">&nbsp;(</span>{%- endif -%}*/
/* 								{{- language.display_name -}}*/
/* 							{%- if language.native_name -%}<span class="{{ css_classes_bracket }}">)</span>{%- endif -%}*/
/* 							</span>*/
/* 						{%- endif -%}*/
/* */
/* 					{%- endif -%}*/
/* 				</a>*/
/* 			</li>*/
/* 		{% endfor %}*/
/* */
/* 	</ul>*/
/* </div>*/
