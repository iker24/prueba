<?php

/* ::base.html.twig */
class __TwigTemplate_cae5258a233cccacd2fc39d23a1f8c75f28bd1462d1519689867de30ceea6fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
         ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        
        <div id=\"titulo\">
            ";
        // line 13
        $this->displayBlock('cabecera', $context, $blocks);
        // line 16
        echo "        </div>
       
         <div id=\"fondo\">
            ";
        // line 19
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 20
        echo "            <br>
            <br>
              <br>
            <br>
              <br>
            <br>
             <br>
           
        </div>
        
         <div id=\"pie\">
            ";
        // line 31
        $this->displayBlock('pie', $context, $blocks);
        // line 32
        echo "        </div>
       
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Rugby";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rugbyrugby/css/rugby.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 13
    public function block_cabecera($context, array $blocks = array())
    {
        // line 14
        echo "               <h1>MUNDIAL DE RUGBY 2015</h1>
            ";
    }

    // line 19
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "Cuerpo";
    }

    // line 31
    public function block_pie($context, array $blocks = array())
    {
        echo "<center>By Iker</center>";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  97 => 19,  92 => 14,  89 => 13,  82 => 7,  79 => 6,  73 => 5,  66 => 32,  64 => 31,  51 => 20,  49 => 19,  44 => 16,  42 => 13,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
