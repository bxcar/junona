<?php

/* setup-wizard-buttons.twig */
class __TwigTemplate_d3f8b0ae11a7825a870bbbb8dc19e1ae6a60fbdc7575cfa9edecec4fb183b65f extends Twig_Template
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
        if ( !(isset($context["setup_complete"]) ? $context["setup_complete"] : null)) {
            // line 2
            echo "\t<div id=\"icl_setup_nav_3\" style=\"text-align:right\" class=\"js-wpml-ls-section wpml-section\">
\t\t<input id=\"icl_setup_back_2\" class=\"button-primary\" name=\"save\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", array()), "button_back", array()), "html", null, true);
            echo "\" type=\"button\" />
\t\t";
            // line 4
            echo (isset($context["setup_step_2_nonce_field"]) ? $context["setup_step_2_nonce_field"] : null);
            echo "
\t\t<input class=\"button-primary\" name=\"save\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", array()), "button_next", array()), "html", null, true);
            echo "\" type=\"submit\" />
\t\t<input type=\"hidden\" name=\"submit_setup_wizard\" value=\"0\" />
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setup-wizard-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if not setup_complete %}*/
/* 	<div id="icl_setup_nav_3" style="text-align:right" class="js-wpml-ls-section wpml-section">*/
/* 		<input id="icl_setup_back_2" class="button-primary" name="save" value="{{ strings.misc.button_back }}" type="button" />*/
/* 		{{ setup_step_2_nonce_field|raw }}*/
/* 		<input class="button-primary" name="save" value="{{ strings.misc.button_next }}" type="submit" />*/
/* 		<input type="hidden" name="submit_setup_wizard" value="0" />*/
/* 	</div>*/
/* {% endif %}*/
