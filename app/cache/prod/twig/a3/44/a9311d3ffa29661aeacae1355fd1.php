<?php

/* SimBundle::login.html.twig */
class __TwigTemplate_a344a9311d3ffa29661aeacae1355fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"headerOneCol\">
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logotype.png"), "html", null, true);
        echo "\" alt=\"sim - System Informacji o Mediach\" />
</div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"login\">
\t\t<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">\t
<input type=\"text\" id=\"username\" name=\"_username\" />
<br />\t
<input type=\"password\" id=\"password\" name=\"_password\" />
<br />
<button type=\"submit\">Zaloguj</button>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "SimBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 10,  40 => 9,  33 => 5,  30 => 4,  27 => 3,);
    }
}
