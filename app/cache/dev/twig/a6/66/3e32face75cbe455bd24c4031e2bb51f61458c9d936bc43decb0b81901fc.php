<?php

/* RugbyRugbyBundle:Default:menu.html.twig */
class __TwigTemplate_a6663e32face75cbe455bd24c4031e2bb51f61458c9d936bc43decb0b81901fc extends Twig_Template
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
        echo "    
    <h3>Estas son las selecciones mas importantes</h3>
    
    <table>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")));
        foreach ($context['_seq'] as $context["_key"] => $context["unafila"]) {
            // line 8
            echo "            <tr>
                <td><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rugby_selecciones", array("titulo" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "titulo"), "contenido" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "contenido"), "foto" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "foto"))), "html", null, true);
            // line 11
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "titulo"), "html", null, true);
            echo "</a></td>
                
                <td><img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/rugbyrugby/imagenes/" . $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "foto")) . "")), "html", null, true);
            echo "\" width=40% height=40%/></td>
        
            </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unafila'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "   
    </table>
    
    
    



   ";
    }

    public function getTemplateName()
    {
        return "RugbyRugbyBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  52 => 13,  46 => 11,  44 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
