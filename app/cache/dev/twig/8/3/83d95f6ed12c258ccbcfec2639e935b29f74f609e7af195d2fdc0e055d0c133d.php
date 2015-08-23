<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_83d95f6ed12c258ccbcfec2639e935b29f74f609e7af195d2fdc0e055d0c133d extends Twig_Template
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
        $__internal_2e269de51453e4b6b6cc47816242b4614edff69ee32c2b7886c0ba5753399143 = $this->env->getExtension("native_profiler");
        $__internal_2e269de51453e4b6b6cc47816242b4614edff69ee32c2b7886c0ba5753399143->enter($__internal_2e269de51453e4b6b6cc47816242b4614edff69ee32c2b7886c0ba5753399143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e269de51453e4b6b6cc47816242b4614edff69ee32c2b7886c0ba5753399143->leave($__internal_2e269de51453e4b6b6cc47816242b4614edff69ee32c2b7886c0ba5753399143_prof);

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
