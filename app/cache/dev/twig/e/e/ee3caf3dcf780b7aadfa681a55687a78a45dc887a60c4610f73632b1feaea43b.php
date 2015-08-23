<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_ee3caf3dcf780b7aadfa681a55687a78a45dc887a60c4610f73632b1feaea43b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec0f1dcdaad2f33684c31480b93cafe20348535edbdcddde9d06d3b2a13a7832 = $this->env->getExtension("native_profiler");
        $__internal_ec0f1dcdaad2f33684c31480b93cafe20348535edbdcddde9d06d3b2a13a7832->enter($__internal_ec0f1dcdaad2f33684c31480b93cafe20348535edbdcddde9d06d3b2a13a7832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec0f1dcdaad2f33684c31480b93cafe20348535edbdcddde9d06d3b2a13a7832->leave($__internal_ec0f1dcdaad2f33684c31480b93cafe20348535edbdcddde9d06d3b2a13a7832_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
