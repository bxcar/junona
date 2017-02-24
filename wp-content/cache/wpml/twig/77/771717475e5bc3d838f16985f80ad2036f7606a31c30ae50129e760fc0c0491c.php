<?php

/* template.twig */
class __TwigTemplate_2976c3b4e6423b311f7e563113f1d74d8f21dd12d2af9afb6da691e16a575735 extends Twig_Template
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
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 7
            echo "    <span class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "css_classes", array()), "html", null, true);
            echo " wpml-ls-item-legacy-post-translations\">
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "url", array()), "html", null, true);
            echo "\"";
            if ($this->getAttribute($this->getAttribute($context["language"], "backward_compatibility", array()), "css_classes_a", array())) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["language"], "backward_compatibility", array()), "css_classes_a", array()), "html", null, true);
                echo "\"";
            }
            echo ">";
            // line 9
            if ($this->getAttribute($context["language"], "flag_url", array())) {
                // line 10
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
            // line 13
            if (($this->getAttribute($context["language"], "is_current", array()) && ($this->getAttribute($context["language"], "native_name", array()) || $this->getAttribute($context["language"], "display_name", array())))) {
                // line 15
                $context["current_language_name"] = (($this->getAttribute($context["language"], "native_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["language"], "native_name", array()), $this->getAttribute($context["language"], "display_name", array()))) : ($this->getAttribute($context["language"], "display_name", array())));
                // line 16
                echo "<span class=\"";
                echo twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["current_language_name"]) ? $context["current_language_name"] : null), "html", null, true);
                echo "</span>";
            } else {
                // line 20
                if ($this->getAttribute($context["language"], "native_name", array())) {
                    // line 21
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "native_name", array()), "html", null, true);
                    echo "</span>";
                }
                // line 24
                if ($this->getAttribute($context["language"], "display_name", array())) {
                    // line 25
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_display"]) ? $context["css_classes_display"] : null), "html", null, true);
                    echo "\">";
                    // line 26
                    if ($this->getAttribute($context["language"], "native_name", array())) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\">&nbsp;(</span>";
                    }
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", array()), "html", null, true);
                    // line 28
                    if ($this->getAttribute($context["language"], "native_name", array())) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 29
                    echo "</span>";
                }
            }
            // line 33
            echo "</a>
    </span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  105 => 33,  101 => 29,  95 => 28,  93 => 27,  87 => 26,  83 => 25,  81 => 24,  74 => 21,  72 => 20,  65 => 16,  63 => 15,  61 => 13,  50 => 10,  48 => 9,  39 => 8,  34 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set css_classes_flag    = ('wpml-ls-flag ' ~ backward_compatibility.css_classes_flag)|trim %}*/
/* {% set css_classes_native  = ('wpml-ls-native ' ~ backward_compatibility.css_classes_native)|trim %}*/
/* {% set css_classes_display = ('wpml-ls-display ' ~ backward_compatibility.css_classes_display)|trim %}*/
/* {% set css_classes_bracket = ('wpml-ls-bracket ' ~ backward_compatibility.css_classes_bracket)|trim %}*/
/* */
/* {% for code, language in languages %}*/
/*     <span class="{{ language.css_classes }} wpml-ls-item-legacy-post-translations">*/
/*         <a href="{{ language.url }}"{% if language.backward_compatibility.css_classes_a %} class="{{ language.backward_compatibility.css_classes_a }}"{% endif %}>*/
/*             {%- if language.flag_url -%}*/
/*                 <img class="{{ css_classes_flag }}" src="{{ language.flag_url }}" alt="{{ language.code }}" title="{{ language.display_name }}">*/
/*             {%- endif -%}*/
/* */
/*             {%- if language.is_current and (language.native_name or language.display_name)  -%}*/
/* */
/*                 {%- set current_language_name = language.native_name|default(language.display_name) -%}*/
/*                 <span class="{{ css_classes_native }}">{{- current_language_name -}}</span>*/
/* */
/*             {%- else -%}*/
/* */
/*                 {%- if language.native_name -%}*/
/*                     <span class="{{ css_classes_native }}">{{- language.native_name -}}</span>*/
/*                 {%- endif -%}*/
/* */
/*                 {%- if language.display_name -%}*/
/*                     <span class="{{ css_classes_display }}">*/
/*                     {%- if language.native_name -%}<span class="{{ css_classes_bracket }}">&nbsp;(</span>{%- endif -%}*/
/*                         {{- language.display_name -}}*/
/*                         {%- if language.native_name -%}<span class="{{ css_classes_bracket }}">)</span>{%- endif -%}*/
/*                     </span>*/
/*                 {%- endif -%}*/
/* */
/*             {%- endif -%}*/
/*         </a>*/
/*     </span>*/
/* {% endfor %}*/
