<?php

/* ::base.html.twig */
class __TwigTemplate_c0b3e4170fdb5befc681105d8c59dfa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        </div>
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "            <div id=\"header\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logotype.png"), "html", null, true);
        echo "\" alt=\"sim - System Informacji o Mediach\" />
            </div>
            ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  86 => 17,  79 => 14,  76 => 13,  73 => 12,  68 => 6,  62 => 5,  56 => 20,  54 => 19,  51 => 18,  48 => 17,  39 => 8,  34 => 7,  32 => 6,  28 => 5,  22 => 1,  46 => 12,  43 => 10,  40 => 9,  33 => 5,  30 => 4,  27 => 3,);
    }
}
