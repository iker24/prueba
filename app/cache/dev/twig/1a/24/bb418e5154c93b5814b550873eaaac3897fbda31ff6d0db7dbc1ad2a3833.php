<?php

/* RugbyRugbyBundle:selecciones:selecciones.html.twig */
class __TwigTemplate_1a24bb418e5154c93b5814b550873eaaac3897fbda31ff6d0db7dbc1ad2a3833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RugbyRugbyBundle::layout.html.twig");

        $this->blocks = array(
            'centro' => array($this, 'block_centro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RugbyRugbyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_centro($context, array $blocks = array())
    {
        // line 3
        echo "       <h1>";
        echo twig_escape_filter($this->env, (isset($context["twigtitulo"]) ? $context["twigtitulo"] : $this->getContext($context, "twigtitulo")), "html", null, true);
        echo " </h1>
";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["twigcontenido"]) ? $context["twigcontenido"] : $this->getContext($context, "twigcontenido")), "html", null, true);
        echo "
<br/>
<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/rugbyrugby/imagenes/" . (isset($context["twigfoto"]) ? $context["twigfoto"] : $this->getContext($context, "twigfoto"))) . "")), "html", null, true);
        echo "\" width=40% height=40%/>
<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("rugby_rugby");
        // line 9
        echo "\"><br/>Volver</a>
";
    }

    public function getTemplateName()
    {
        return "RugbyRugbyBundle:selecciones:selecciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  45 => 7,  41 => 6,  36 => 4,  31 => 3,  28 => 2,);
    }
}
