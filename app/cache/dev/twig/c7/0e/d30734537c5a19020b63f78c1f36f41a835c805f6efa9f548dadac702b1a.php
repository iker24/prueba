<?php

/* RugbyRugbyBundle::layout.html.twig */
class __TwigTemplate_c70ed30734537c5a19020b63f78c1f36f41a835c805f6efa9f548dadac702b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSuperior' => array($this, 'block_menuSuperior'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'centro' => array($this, 'block_centro'),
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
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "     
     
       <div id=\"menuSuperior\">
            ";
        // line 7
        $this->displayBlock('menuSuperior', $context, $blocks);
        // line 10
        echo "        </div>
 
           <div id=\"menuLateral\">
            ";
        // line 13
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 16
        echo "        </div>
 
        <div id=\"nose\">
            ";
        // line 19
        $this->displayBlock('centro', $context, $blocks);
        // line 22
        echo "        </div>
 
 
 
 
 
 
 
 
 
 
 ";
    }

    // line 7
    public function block_menuSuperior($context, array $blocks = array())
    {
        // line 8
        echo "                
                ";
    }

    // line 13
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 14
        echo "                
                ";
    }

    // line 19
    public function block_centro($context, array $blocks = array())
    {
        // line 20
        echo "                A
                ";
    }

    public function getTemplateName()
    {
        return "RugbyRugbyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  86 => 19,  81 => 14,  78 => 13,  73 => 8,  70 => 7,  55 => 22,  53 => 19,  48 => 16,  46 => 13,  41 => 10,  39 => 7,  34 => 4,  31 => 3,);
    }
}
