<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_e57402ae66e5ce08b1c825d50719fcc978fc410510c1d6eb3aa62c1bae8c2d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_076c6c8985bd2450004dbdcdd9bcb0c3f35585170f5bc5400d18ccaa37cbd36a = $this->env->getExtension("native_profiler");
        $__internal_076c6c8985bd2450004dbdcdd9bcb0c3f35585170f5bc5400d18ccaa37cbd36a->enter($__internal_076c6c8985bd2450004dbdcdd9bcb0c3f35585170f5bc5400d18ccaa37cbd36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_076c6c8985bd2450004dbdcdd9bcb0c3f35585170f5bc5400d18ccaa37cbd36a->leave($__internal_076c6c8985bd2450004dbdcdd9bcb0c3f35585170f5bc5400d18ccaa37cbd36a_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_fb87ceba047b5e50b587f0d219596f889df36d9a51d93dfb62bdf37849b8fbaf = $this->env->getExtension("native_profiler");
        $__internal_fb87ceba047b5e50b587f0d219596f889df36d9a51d93dfb62bdf37849b8fbaf->enter($__internal_fb87ceba047b5e50b587f0d219596f889df36d9a51d93dfb62bdf37849b8fbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_fb87ceba047b5e50b587f0d219596f889df36d9a51d93dfb62bdf37849b8fbaf->leave($__internal_fb87ceba047b5e50b587f0d219596f889df36d9a51d93dfb62bdf37849b8fbaf_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }
}
