<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_9d6a9091a8e27b967545c56ccec89f83b101e59589b26350bea3155ab24ae528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a51925350b33118178d39103976b3a90f425c57e6cc0b6eaf015b0ff99fd01c1 = $this->env->getExtension("native_profiler");
        $__internal_a51925350b33118178d39103976b3a90f425c57e6cc0b6eaf015b0ff99fd01c1->enter($__internal_a51925350b33118178d39103976b3a90f425c57e6cc0b6eaf015b0ff99fd01c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a51925350b33118178d39103976b3a90f425c57e6cc0b6eaf015b0ff99fd01c1->leave($__internal_a51925350b33118178d39103976b3a90f425c57e6cc0b6eaf015b0ff99fd01c1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
