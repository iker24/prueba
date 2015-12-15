<?php

/* RugbyRugbyBundle:selecciones:australia.html.twig */
class __TwigTemplate_41a44eceb727bb151e0da8d53b1efb3af123f5755ac774f442538333f733be2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'centro' => array($this, 'block_centro'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "   ";
        $this->displayBlock('centro', $context, $blocks);
        // line 6
        echo "
   ";
        // line 7
        $this->displayBlock('pie', $context, $blocks);
    }

    // line 2
    public function block_centro($context, array $blocks = array())
    {
        // line 3
        echo "       ";
        echo twig_escape_filter($this->env, (isset($context["seleccion"]) ? $context["seleccion"] : $this->getContext($context, "seleccion")), "html", null, true);
        echo "<h1>

";
    }

    // line 7
    public function block_pie($context, array $blocks = array())
    {
        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getUrl("rugby_rugby");
        // line 10
        echo "\">Volver</a>
";
    }

    public function getTemplateName()
    {
        return "RugbyRugbyBundle:selecciones:australia.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 8,  42 => 7,  34 => 3,  31 => 2,  27 => 7,  24 => 6,  21 => 2,);
    }
}
