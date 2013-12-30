<?php

/* ::base.html.twig */
class __TwigTemplate_f6b690a59c146222e9a04fa6be357c6fcdb10855d8fa07519dcb945be06ae952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'headerright' => array($this, 'block_headerright'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body>

    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "VistaTravel Application";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "        
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
    ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"container\">
        ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "        <div class=\"content\">
            ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "        </div>        
    </div>
    ";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "            <div class=\"header\">
                <ul class=\"nav nav-pills pull-right\">               
                    <li>
                        ";
        // line 25
        $this->displayBlock('headerright', $context, $blocks);
        // line 28
        echo "                    </li>
                </ul>
                <p><img onerror=\"this.onerror=null; this.src=='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "'\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo/logo.svg"), "html", null, true);
        echo "\" ></p>
            </div>
        ";
    }

    // line 25
    public function block_headerright($context, array $blocks = array())
    {
        // line 26
        echo "
                        ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "
            ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 44,  146 => 42,  127 => 25,  118 => 30,  114 => 28,  104 => 21,  53 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 22,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 41,  135 => 34,  119 => 42,  102 => 32,  71 => 12,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 19,  75 => 13,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 1,  93 => 33,  88 => 20,  78 => 21,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 35,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 21,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 14,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 45,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 37,  96 => 34,  83 => 25,  74 => 14,  66 => 11,  55 => 47,  52 => 11,  50 => 40,  43 => 16,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 43,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 26,  125 => 44,  122 => 43,  116 => 41,  112 => 25,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 19,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
