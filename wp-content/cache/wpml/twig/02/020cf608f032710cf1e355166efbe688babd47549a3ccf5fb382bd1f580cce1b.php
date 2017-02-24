<?php

/* dialog-box.twig */
class __TwigTemplate_3af9ede68f608429fdd8d0ac10c7d72ec142b0f48a7da823c4cd8ab2a6df7ade extends Twig_Template
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
        echo "<div id=\"wpml-ls-dialog\">
    <div class=\"js-wpml-ls-dialog-inner\">

    </div>
    <div class=\"wpml-dialog-footer \">
        <span class=\"errors icl_error_text\"></span>
        <input class=\"js-wpml-ls-dialog-close cancel wpml-dialog-close-button alignleft\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", array()), "button_cancel", array()), "html", null, true);
        echo "\" type=\"button\">
        <input class=\"js-wpml-ls-dialog-save button-primary term-save alignright\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", array()), "button_save", array()), "html", null, true);
        echo "\" type=\"submit\">
        <span class=\"spinner alignright\"></span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "dialog-box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <div id="wpml-ls-dialog">*/
/*     <div class="js-wpml-ls-dialog-inner">*/
/* */
/*     </div>*/
/*     <div class="wpml-dialog-footer ">*/
/*         <span class="errors icl_error_text"></span>*/
/*         <input class="js-wpml-ls-dialog-close cancel wpml-dialog-close-button alignleft" value="{{ strings.misc.button_cancel }}" type="button">*/
/*         <input class="js-wpml-ls-dialog-save button-primary term-save alignright" value="{{ strings.misc.button_save }}" type="submit">*/
/*         <span class="spinner alignright"></span>*/
/*     </div>*/
/* </div>*/
