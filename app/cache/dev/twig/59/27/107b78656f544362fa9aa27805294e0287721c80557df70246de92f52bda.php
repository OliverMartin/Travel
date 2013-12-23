<?php

/* AcmeAdminBundle:Default:index.html.twig */
class __TwigTemplate_5927107b78656f544362fa9aa27805294e0287721c80557df70246de92f52bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeAdminBundle:Default:main.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeAdminBundle:Default:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Acme Demo Application";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"row\">
\t\t<h3>Bienvenido a la zona restringida</h3>
\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("acme_admin_gestion_homepage");
        echo "\">Ir a la zona de gestion</a><br>

\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("acme_admin_gestion_agencias");
        echo "\">Ir al listado de agencias</a><br>
\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("acme_admin_crear_agencia");
        echo "\">Crear una nueva agencia</a><br>


\t</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  47 => 10,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
