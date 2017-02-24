<?php

/* layout.twig */
class __TwigTemplate_48b073880542c0d589d5a5d55df88e0cfe9dec30bc916ce9e1239662c9762027 extends Twig_Template
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
        echo "<form id=\"wpml-ls-settings-form\" name=\"wpml_ls_settings_form\">

\t<input type=\"hidden\" name=\"wpml-ls-refresh-on-browser-back-button\" id=\"wpml-ls-refresh-on-browser-back-button\" value=\"no\">

    ";
        // line 5
        if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "css_not_loaded", array())) {
            // line 6
            echo "        <div class=\"wpml-ls-message notice notice-info\">
            <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "css_not_loaded", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 10
        echo "
    <div id=\"wpml-language-switcher-options\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "section_title", array()), "html", null, true);
        echo "</h3>
\t\t\t<p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "options", array()), "section_description", array()), "html", null, true);
        echo "</p>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 18
        $this->loadTemplate("section-options.twig", "layout.twig", 18)->display($context);
        // line 19
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-menus\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "menus", array()), "section_title", array()), "html", null, true);
        echo "
                ";
        // line 27
        echo "            </h3>
            ";
        // line 28
        $this->loadTemplate("save-notification.twig", "layout.twig", 28)->display($context);
        // line 29
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 32
        $this->loadTemplate("section-menus.twig", "layout.twig", 32)->display($context);
        // line 33
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-sidebars\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "sidebars", array()), "section_title", array()), "html", null, true);
        echo "
                ";
        // line 41
        echo "            </h3>
            ";
        // line 42
        $this->loadTemplate("save-notification.twig", "layout.twig", 42)->display($context);
        // line 43
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 46
        $this->loadTemplate("section-sidebars.twig", "layout.twig", 46)->display($context);
        // line 47
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-footer\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "footer", array()), "section_title", array()), "html", null, true);
        echo "
                ";
        // line 55
        echo "            </h3>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 59
        $this->loadTemplate("section-footer.twig", "layout.twig", 59)->display($context);
        // line 60
        echo "        </div>

    </div>

    <div id=\"wpml-language-switcher-post-translations\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "post_translations", array()), "section_title", array()), "html", null, true);
        echo "
                ";
        // line 69
        echo "            </h3>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 73
        $this->loadTemplate("section-post-translations.twig", "layout.twig", 73)->display($context);
        // line 74
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-shortcode-action\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "shortcode_actions", array()), "section_title", array()), "html", null, true);
        echo "
                ";
        // line 82
        echo "            </h3>
            ";
        // line 83
        $this->loadTemplate("save-notification.twig", "layout.twig", 83)->display($context);
        // line 84
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 87
        $this->loadTemplate("section-shortcode-action.twig", "layout.twig", 87)->display($context);
        // line 88
        echo "        </div>
    </div>

    ";
        // line 91
        $this->loadTemplate("setup-wizard-buttons.twig", "layout.twig", 91)->display($context);
        // line 92
        echo "
    ";
        // line 93
        $this->loadTemplate("dialog-box.twig", "layout.twig", 93)->display($context);
        // line 94
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 94,  177 => 93,  174 => 92,  172 => 91,  167 => 88,  165 => 87,  160 => 84,  158 => 83,  155 => 82,  151 => 80,  143 => 74,  141 => 73,  135 => 69,  131 => 67,  122 => 60,  120 => 59,  114 => 55,  110 => 53,  102 => 47,  100 => 46,  95 => 43,  93 => 42,  90 => 41,  86 => 39,  78 => 33,  76 => 32,  71 => 29,  69 => 28,  66 => 27,  62 => 25,  54 => 19,  52 => 18,  45 => 14,  41 => 13,  36 => 10,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <form id="wpml-ls-settings-form" name="wpml_ls_settings_form">*/
/* */
/* 	<input type="hidden" name="wpml-ls-refresh-on-browser-back-button" id="wpml-ls-refresh-on-browser-back-button" value="no">*/
/* */
/*     {% if notifications.css_not_loaded %}*/
/*         <div class="wpml-ls-message notice notice-info">*/
/*             <p>{{ notifications.css_not_loaded }}</p>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div id="wpml-language-switcher-options" class="js-wpml-ls-section wpml-section">*/
/*         <div class="wpml-section-header">*/
/*             <h3>{{ strings.options.section_title }}</h3>*/
/* 			<p>{{ strings.options.section_description }}</p>*/
/*         </div>*/
/* */
/*         <div class="js-setting-group wpml-ls-settings-group wpml-section-content">*/
/*             {% include 'section-options.twig' %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="wpml-language-switcher-menus" class="js-wpml-ls-section wpml-section">*/
/*         <div class="wpml-section-header">*/
/*             <h3>*/
/*                 {{ strings.menus.section_title }}*/
/*                 {#{% include 'tooltip.twig' with { "content": strings.tooltips.section_menus } %}#}*/
/*             </h3>*/
/*             {% include 'save-notification.twig' %}*/
/*         </div>*/
/* */
/*         <div class="js-setting-group wpml-ls-settings-group wpml-section-content">*/
/*             {% include 'section-menus.twig' %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="wpml-language-switcher-sidebars" class="js-wpml-ls-section wpml-section">*/
/*         <div class="wpml-section-header">*/
/*             <h3>*/
/*                 {{ strings.sidebars.section_title }}*/
/*                 {#{% include 'tooltip.twig' with { "content": strings.tooltips.section_sidebars } %}#}*/
/*             </h3>*/
/*             {% include 'save-notification.twig' %}*/
/*         </div>*/
/* */
/*         <div class="js-setting-group wpml-ls-settings-group wpml-section-content">*/
/*             {% include 'section-sidebars.twig' %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="wpml-language-switcher-footer" class="js-wpml-ls-section wpml-section">*/
/*         <div class="wpml-section-header">*/
/*             <h3>*/
/*                 {{ strings.footer.section_title }}*/
/*                 {#{% include 'tooltip.twig' with { "content": strings.tooltips.section_footer } %}#}*/
/*             </h3>*/
/*         </div>*/
/* */
/*         <div class="js-setting-group wpml-ls-settings-group wpml-section-content">*/
/*             {% include 'section-footer.twig' %}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div id="wpml-language-switcher-post-translations" class="js-wpml-ls-section wpml-section">*/
/*         <div class="wpml-section-header">*/
/*             <h3>*/
/*                 {{ strings.post_translations.section_title }}*/
/*                 {#{% include 'tooltip.twig' with { "content": strings.tooltips.section_post_translations } %}#}*/
/*             </h3>*/
/*         </div>*/
/* */
/*         <div class="js-setting-group wpml-ls-settings-group wpml-section-content">*/
/*             {% include 'section-post-translations.twig' %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="wpml-language-switcher-shortcode-action" class="js-wpml-ls-section wpml-section">*/
/*         <div class="wpml-section-header">*/
/*             <h3>*/
/*                 {{ strings.shortcode_actions.section_title }}*/
/*                 {#{% include 'tooltip.twig' with { "content": strings.tooltips.section_shortcode_action } %}#}*/
/*             </h3>*/
/*             {% include 'save-notification.twig' %}*/
/*         </div>*/
/* */
/*         <div class="js-setting-group wpml-ls-settings-group wpml-section-content">*/
/*             {% include 'section-shortcode-action.twig' %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% include 'setup-wizard-buttons.twig' %}*/
/* */
/*     {% include 'dialog-box.twig' %}*/
/* */
/* </form>*/
