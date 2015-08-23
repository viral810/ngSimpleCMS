<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_4759a95e1ea995a915bc3efb9877a99590a994382cec52a8279b453f67a83ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e05ddc05982190927a3cb09a1e683ab6ae140b6ae706142fa7baff25735ed437 = $this->env->getExtension("native_profiler");
        $__internal_e05ddc05982190927a3cb09a1e683ab6ae140b6ae706142fa7baff25735ed437->enter($__internal_e05ddc05982190927a3cb09a1e683ab6ae140b6ae706142fa7baff25735ed437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05ddc05982190927a3cb09a1e683ab6ae140b6ae706142fa7baff25735ed437->leave($__internal_e05ddc05982190927a3cb09a1e683ab6ae140b6ae706142fa7baff25735ed437_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }
}
