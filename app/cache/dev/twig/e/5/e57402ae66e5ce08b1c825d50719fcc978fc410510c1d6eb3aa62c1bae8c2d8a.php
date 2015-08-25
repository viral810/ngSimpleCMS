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
        $__internal_4931764b427a46841ed541ec5733c7aea8eebf6895be7f0b1bed2f97de7fb928 = $this->env->getExtension("native_profiler");
        $__internal_4931764b427a46841ed541ec5733c7aea8eebf6895be7f0b1bed2f97de7fb928->enter($__internal_4931764b427a46841ed541ec5733c7aea8eebf6895be7f0b1bed2f97de7fb928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_4931764b427a46841ed541ec5733c7aea8eebf6895be7f0b1bed2f97de7fb928->leave($__internal_4931764b427a46841ed541ec5733c7aea8eebf6895be7f0b1bed2f97de7fb928_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_1a3ca35b8621ef7a3a38807d2df8a650d352d56ee24d2bd651cd06a500ec6c3d = $this->env->getExtension("native_profiler");
        $__internal_1a3ca35b8621ef7a3a38807d2df8a650d352d56ee24d2bd651cd06a500ec6c3d->enter($__internal_1a3ca35b8621ef7a3a38807d2df8a650d352d56ee24d2bd651cd06a500ec6c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_1a3ca35b8621ef7a3a38807d2df8a650d352d56ee24d2bd651cd06a500ec6c3d->leave($__internal_1a3ca35b8621ef7a3a38807d2df8a650d352d56ee24d2bd651cd06a500ec6c3d_prof);

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
