<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_e41e54154ef018260084e64a49d5d25388875bffee645236d79049813c54b82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58965c6015561fe63a5e52d518052fbc88261eb6d8a8bd3eef5f06f9feebb61a = $this->env->getExtension("native_profiler");
        $__internal_58965c6015561fe63a5e52d518052fbc88261eb6d8a8bd3eef5f06f9feebb61a->enter($__internal_58965c6015561fe63a5e52d518052fbc88261eb6d8a8bd3eef5f06f9feebb61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58965c6015561fe63a5e52d518052fbc88261eb6d8a8bd3eef5f06f9feebb61a->leave($__internal_58965c6015561fe63a5e52d518052fbc88261eb6d8a8bd3eef5f06f9feebb61a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
