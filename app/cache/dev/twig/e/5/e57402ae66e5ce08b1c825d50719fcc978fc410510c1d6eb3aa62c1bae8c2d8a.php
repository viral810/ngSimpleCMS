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
        $__internal_ac45223661244200030df78eb36df600aa9ab14e300ae837013b94941201be26 = $this->env->getExtension("native_profiler");
        $__internal_ac45223661244200030df78eb36df600aa9ab14e300ae837013b94941201be26->enter($__internal_ac45223661244200030df78eb36df600aa9ab14e300ae837013b94941201be26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_ac45223661244200030df78eb36df600aa9ab14e300ae837013b94941201be26->leave($__internal_ac45223661244200030df78eb36df600aa9ab14e300ae837013b94941201be26_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_81b5ace165e5326bcdc21034ad164e25e653b52ff2ff8b8f71bae666f89e981a = $this->env->getExtension("native_profiler");
        $__internal_81b5ace165e5326bcdc21034ad164e25e653b52ff2ff8b8f71bae666f89e981a->enter($__internal_81b5ace165e5326bcdc21034ad164e25e653b52ff2ff8b8f71bae666f89e981a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_81b5ace165e5326bcdc21034ad164e25e653b52ff2ff8b8f71bae666f89e981a->leave($__internal_81b5ace165e5326bcdc21034ad164e25e653b52ff2ff8b8f71bae666f89e981a_prof);

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
