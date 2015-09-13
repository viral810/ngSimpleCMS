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
        $__internal_669708f49e0d0db848daf35c3fd854129d21a24f3772c7635b5871ff9de11d2f = $this->env->getExtension("native_profiler");
        $__internal_669708f49e0d0db848daf35c3fd854129d21a24f3772c7635b5871ff9de11d2f->enter($__internal_669708f49e0d0db848daf35c3fd854129d21a24f3772c7635b5871ff9de11d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_669708f49e0d0db848daf35c3fd854129d21a24f3772c7635b5871ff9de11d2f->leave($__internal_669708f49e0d0db848daf35c3fd854129d21a24f3772c7635b5871ff9de11d2f_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_f760d5f1a4b66cac4d6db38f9cb9ec90462e22bd1eacca785020aaacaa6ff03c = $this->env->getExtension("native_profiler");
        $__internal_f760d5f1a4b66cac4d6db38f9cb9ec90462e22bd1eacca785020aaacaa6ff03c->enter($__internal_f760d5f1a4b66cac4d6db38f9cb9ec90462e22bd1eacca785020aaacaa6ff03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_f760d5f1a4b66cac4d6db38f9cb9ec90462e22bd1eacca785020aaacaa6ff03c->leave($__internal_f760d5f1a4b66cac4d6db38f9cb9ec90462e22bd1eacca785020aaacaa6ff03c_prof);

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
