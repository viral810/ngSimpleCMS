<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_8cd34ba403722ea596d867d5bf84c512ef40bfb9619cc1db53a8c8a6a77b45e2 extends Twig_Template
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
        $__internal_87647d47ce41844caf51eeb42129df41184862a17b5d67bee39734eba4ca67a4 = $this->env->getExtension("native_profiler");
        $__internal_87647d47ce41844caf51eeb42129df41184862a17b5d67bee39734eba4ca67a4->enter($__internal_87647d47ce41844caf51eeb42129df41184862a17b5d67bee39734eba4ca67a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_87647d47ce41844caf51eeb42129df41184862a17b5d67bee39734eba4ca67a4->leave($__internal_87647d47ce41844caf51eeb42129df41184862a17b5d67bee39734eba4ca67a4_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_3b52e2f6bbc1fa69b225a98594db89acfb9c1fdafe09351eb440c8825e6e2101 = $this->env->getExtension("native_profiler");
        $__internal_3b52e2f6bbc1fa69b225a98594db89acfb9c1fdafe09351eb440c8825e6e2101->enter($__internal_3b52e2f6bbc1fa69b225a98594db89acfb9c1fdafe09351eb440c8825e6e2101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_3b52e2f6bbc1fa69b225a98594db89acfb9c1fdafe09351eb440c8825e6e2101->leave($__internal_3b52e2f6bbc1fa69b225a98594db89acfb9c1fdafe09351eb440c8825e6e2101_prof);

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
