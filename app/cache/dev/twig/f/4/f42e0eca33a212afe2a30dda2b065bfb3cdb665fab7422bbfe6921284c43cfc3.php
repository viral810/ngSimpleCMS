<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_f42e0eca33a212afe2a30dda2b065bfb3cdb665fab7422bbfe6921284c43cfc3 extends Twig_Template
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
        $__internal_8ee5c8ab7b73542f28139754ceb8ecebcf9e9cb8dda719dfcf4224b973748462 = $this->env->getExtension("native_profiler");
        $__internal_8ee5c8ab7b73542f28139754ceb8ecebcf9e9cb8dda719dfcf4224b973748462->enter($__internal_8ee5c8ab7b73542f28139754ceb8ecebcf9e9cb8dda719dfcf4224b973748462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ee5c8ab7b73542f28139754ceb8ecebcf9e9cb8dda719dfcf4224b973748462->leave($__internal_8ee5c8ab7b73542f28139754ceb8ecebcf9e9cb8dda719dfcf4224b973748462_prof);

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
