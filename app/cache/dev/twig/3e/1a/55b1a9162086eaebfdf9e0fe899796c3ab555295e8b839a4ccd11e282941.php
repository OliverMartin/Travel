<?php

/* AcmeAdminBundle:Default:main.html.twig */
class __TwigTemplate_3e1a55b1a9162086eaebfdf9e0fe899796c3ab555295e8b839a4ccd11e282941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Vistatravek Tour Operador: Administracion";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"container\">

\t\t<div class=\"header\">
\t\t\t<ul class=\"nav nav-pills pull-right\">\t\t\t\t
\t\t\t\t<li>Hola, ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
        echo "\" style=\"display:inline;\">close</a></li>
\t\t\t</ul>
\t\t\t<p>Vistatravel</p>
\t\t</div>

\t\t<div class=\"separator\">&nbsp;</div>

\t\t";
        // line 17
        $template = $this->env->resolveTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AcmeAdminBundle:Default:menu.html.twig") : ("AcmeAdminBundle:Default:menu_noadmin.html.twig")));
        $template->display($context);
        // line 18
        echo "
\t\t";
        // line 19
        $this->displayBlock('container', $context, $blocks);
        // line 21
        echo "
    </div>
";
    }

    // line 19
    public function block_container($context, array $blocks = array())
    {
        // line 20
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "AcmeAdminBundle:Default:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  71 => 19,  65 => 21,  63 => 19,  60 => 18,  57 => 17,  45 => 10,  39 => 6,  36 => 5,  30 => 3,);
    }
}
