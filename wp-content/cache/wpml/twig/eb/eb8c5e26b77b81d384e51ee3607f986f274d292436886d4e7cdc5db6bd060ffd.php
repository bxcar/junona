<?php

/* tooltip.twig */
class __TwigTemplate_32efba93663d0cf153da76d928b5c2031e54d97ff06c636e9cab878c997ffb2c extends Twig_Template
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
        echo "<a href=\"#\" class=\"js-wpml-ls-tooltip-open wpml-ls-tooltip-open dashicons dashicons-editor-help\" data-content=\"";
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html_attr");
        echo "\"></a>";
    }

    public function getTemplateName()
    {
        return "tooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <a href="#" class="js-wpml-ls-tooltip-open wpml-ls-tooltip-open dashicons dashicons-editor-help" data-content="{{ content|e('html_attr') }}"></a>*/
