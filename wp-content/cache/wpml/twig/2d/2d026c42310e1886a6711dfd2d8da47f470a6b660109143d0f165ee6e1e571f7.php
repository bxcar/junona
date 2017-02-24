<?php

/* section-options.twig */
class __TwigTemplate_979b0342c87a1a37d9b0117dc20d2da87ab2ef6ac56d483444070fd37c5e167d extends Twig_Template
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
        echo "<div class=\"js-wpml-ls-option\">
\t<h4><label>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "label_language_order", array()), "html", null, true);
        echo "</label> ";
        $this->loadTemplate("tooltip.twig", "section-options.twig", 2)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tooltips", array()), "languages_order", array()))));
        // line 3
        echo "\t\t";
        $this->loadTemplate("save-notification.twig", "section-options.twig", 3)->display($context);
        // line 4
        echo "\t</h4>
\t<p class=\"explanation-text\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "tip_drag_languages", array()), "html", null, true);
        echo "</p>
\t<ul id=\"wpml-ls-languages-order\" class=\"wpml-ls-languages-order\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordered_languages"]) ? $context["ordered_languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 8
            echo "\t\t<li class=\"js-wpml-languages-order-item\" data-language-code=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", array()), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_url", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", array()), "html", null, true);
            echo "<input type=\"hidden\" name=\"languages_order[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", array()), "html", null, true);
            echo "\">
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>
</div>

<div class=\"js-wpml-ls-option\">
\t<h4><label>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "label_languages_with_no_translations", array()), "html", null, true);
        echo " ";
        $this->loadTemplate("tooltip.twig", "section-options.twig", 16)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tooltips", array()), "languages_without_translation", array()))));
        // line 17
        echo "\t\t</label>
\t\t";
        // line 18
        $this->loadTemplate("save-notification.twig", "section-options.twig", 18)->display($context);
        // line 19
        echo "\t</h4>
\t<ul>
\t\t<li>
\t\t\t<label for=\"link_empty_off\">
\t\t\t\t<input type=\"radio\" name=\"link_empty\" id=\"link_empty_off\"
\t\t\t\t\t   class=\"js-wpml-ls-trigger-save\"
\t\t\t\t\t   value=\"0\"";
        // line 25
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "link_empty", array())) {
            echo " checked=\"checked\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "option_skip_link", array()), "html", null, true);
        echo "
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<label for=\"link_empty_on\">
\t\t\t\t<input type=\"radio\" name=\"link_empty\" id=\"link_empty_on\"
\t\t\t\t\t   class=\"js-wpml-ls-trigger-save\"
\t\t\t\t\t   value=\"1\"";
        // line 32
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "link_empty", array())) {
            echo " checked=\"checked\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "option_link_home", array()), "html", null, true);
        echo "
\t\t\t</label>
\t\t</li>
\t</ul>
</div>

<div class=\"js-wpml-ls-option\">
\t<p class=\"wpml-ls-form-line\">
\t\t";
        // line 40
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "copy_parameters", array())) {
            echo "<a href=\"#\" class=\"js-wpml-ls-toggle-once\">";
        }
        // line 41
        echo "\t\t\t<label for=\"copy_parameters\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "label_preserve_url_args", array()), "html", null, true);
        echo "
\t\t\t\t";
        // line 42
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "copy_parameters", array())) {
            echo "<span class=\"dashicons dashicons-arrow-down js-arrow-toggle\"></span>";
        }
        // line 43
        echo "</label>";
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "copy_parameters", array())) {
            echo "</a>";
        }
        // line 44
        echo "
\t\t";
        // line 45
        $this->loadTemplate("tooltip.twig", "section-options.twig", 45)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tooltips", array()), "preserve_url_arguments", array()))));
        // line 46
        echo "
\t\t";
        // line 47
        $this->loadTemplate("save-notification.twig", "section-options.twig", 47)->display($context);
        // line 48
        echo "
\t\t<input type=\"text\" size=\"100\" id=\"copy_parameters\" name=\"copy_parameters\"
\t\t\t   value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "copy_parameters", array()), "html", null, true);
        echo "\"
\t\t\t   class=\"js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save";
        // line 51
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "copy_parameters", array())) {
            echo " js-wpml-ls-toggle-target hidden";
        }
        echo "\">
\t</p>
</div>

<div class=\"js-wpml-ls-option\">
\t<p class=\"wpml-ls-form-line\">
\t\t";
        // line 57
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "additional_css", array())) {
            echo "<a href=\"#\" class=\"js-wpml-ls-toggle-once\">";
        }
        // line 58
        echo "\t\t\t<label for=\"additional_css\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "label_additional_css", array()), "html", null, true);
        echo "
\t\t\t\t";
        // line 59
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "additional_css", array())) {
            echo "<span class=\"dashicons dashicons-arrow-down js-arrow-toggle\"></span>";
        }
        // line 60
        echo "</label>";
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "additional_css", array())) {
            echo "</a>";
        }
        // line 61
        echo "
\t\t";
        // line 62
        $this->loadTemplate("tooltip.twig", "section-options.twig", 62)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tooltips", array()), "additional_css", array()))));
        // line 63
        echo "
\t\t";
        // line 64
        $this->loadTemplate("save-notification.twig", "section-options.twig", 64)->display($context);
        // line 65
        echo "
\t\t<textarea id=\"additional_css\" name=\"additional_css\" rows=\"4\"
\t\t\t\t  class=\"large-text js-wpml-ls-additional-css js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save";
        // line 67
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "additional_css", array())) {
            echo " js-wpml-ls-toggle-target hidden";
        }
        echo "\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "additional_css", array()), "html", null, true);
        // line 69
        echo "</textarea>
\t</p>
</div>";
    }

    public function getTemplateName()
    {
        return "section-options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 69,  195 => 68,  190 => 67,  186 => 65,  184 => 64,  181 => 63,  179 => 62,  176 => 61,  171 => 60,  167 => 59,  162 => 58,  158 => 57,  147 => 51,  143 => 50,  139 => 48,  137 => 47,  134 => 46,  132 => 45,  129 => 44,  124 => 43,  120 => 42,  115 => 41,  111 => 40,  96 => 32,  82 => 25,  74 => 19,  72 => 18,  69 => 17,  65 => 16,  59 => 12,  46 => 9,  41 => 8,  37 => 7,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="js-wpml-ls-option">*/
/* 	<h4><label>{{ strings.options.label_language_order }}</label> {% include 'tooltip.twig' with { "content": strings.tooltips.languages_order } %}*/
/* 		{% include 'save-notification.twig' %}*/
/* 	</h4>*/
/* 	<p class="explanation-text">{{ strings.options.tip_drag_languages }}</p>*/
/* 	<ul id="wpml-ls-languages-order" class="wpml-ls-languages-order">*/
/* 		{% for language in ordered_languages %}*/
/* 		<li class="js-wpml-languages-order-item" data-language-code="{{ language.code }}">*/
/* 			<img src="{{ language.flag_url }}"> {{ language.display_name }}<input type="hidden" name="languages_order[]" value="{{ language.code }}">*/
/* 		</li>*/
/* 		{%  endfor %}*/
/* 	</ul>*/
/* </div>*/
/* */
/* <div class="js-wpml-ls-option">*/
/* 	<h4><label>{{ strings.options.label_languages_with_no_translations }} {% include 'tooltip.twig' with { "content": strings.tooltips.languages_without_translation } %}*/
/* 		</label>*/
/* 		{% include 'save-notification.twig' %}*/
/* 	</h4>*/
/* 	<ul>*/
/* 		<li>*/
/* 			<label for="link_empty_off">*/
/* 				<input type="radio" name="link_empty" id="link_empty_off"*/
/* 					   class="js-wpml-ls-trigger-save"*/
/* 					   value="0"{% if not settings.link_empty %} checked="checked"{% endif %}>{{ strings.options.option_skip_link }}*/
/* 			</label>*/
/* 		</li>*/
/* 		<li>*/
/* 			<label for="link_empty_on">*/
/* 				<input type="radio" name="link_empty" id="link_empty_on"*/
/* 					   class="js-wpml-ls-trigger-save"*/
/* 					   value="1"{% if settings.link_empty %} checked="checked"{% endif %}>{{ strings.options.option_link_home }}*/
/* 			</label>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* <div class="js-wpml-ls-option">*/
/* 	<p class="wpml-ls-form-line">*/
/* 		{% if not settings.copy_parameters %}<a href="#" class="js-wpml-ls-toggle-once">{% endif %}*/
/* 			<label for="copy_parameters">{{ strings.options.label_preserve_url_args }}*/
/* 				{% if not settings.copy_parameters -%}<span class="dashicons dashicons-arrow-down js-arrow-toggle"></span>{%- endif -%}*/
/* 			</label>{% if not settings.copy_parameters %}</a>{% endif %}*/
/* */
/* 		{% include 'tooltip.twig' with { "content": strings.tooltips.preserve_url_arguments } %}*/
/* */
/* 		{% include 'save-notification.twig' %}*/
/* */
/* 		<input type="text" size="100" id="copy_parameters" name="copy_parameters"*/
/* 			   value="{{ settings.copy_parameters }}"*/
/* 			   class="js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save{% if not settings.copy_parameters %} js-wpml-ls-toggle-target hidden{% endif %}">*/
/* 	</p>*/
/* </div>*/
/* */
/* <div class="js-wpml-ls-option">*/
/* 	<p class="wpml-ls-form-line">*/
/* 		{% if not settings.additional_css %}<a href="#" class="js-wpml-ls-toggle-once">{% endif %}*/
/* 			<label for="additional_css">{{ strings.options.label_additional_css }}*/
/* 				{% if not settings.additional_css %}<span class="dashicons dashicons-arrow-down js-arrow-toggle"></span>{%- endif -%}*/
/* 			</label>{% if not settings.additional_css %}</a>{% endif %}*/
/* */
/* 		{% include 'tooltip.twig' with { "content": strings.tooltips.additional_css } %}*/
/* */
/* 		{% include 'save-notification.twig' %}*/
/* */
/* 		<textarea id="additional_css" name="additional_css" rows="4"*/
/* 				  class="large-text js-wpml-ls-additional-css js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save{% if not settings.additional_css %} js-wpml-ls-toggle-target hidden{% endif %}">*/
/* 			{{- settings.additional_css -}}*/
/* 		</textarea>*/
/* 	</p>*/
/* </div>*/
