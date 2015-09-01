<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_d96ae427245c19417af85418c47294d4b72e2706210405f24f2bbb3ef4a9e847 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b8fda04a51a1b89c39cedba1e2e56c6ad006440b011917f81a057fd8d34bb3e = $this->env->getExtension("native_profiler");
        $__internal_8b8fda04a51a1b89c39cedba1e2e56c6ad006440b011917f81a057fd8d34bb3e->enter($__internal_8b8fda04a51a1b89c39cedba1e2e56c6ad006440b011917f81a057fd8d34bb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b8fda04a51a1b89c39cedba1e2e56c6ad006440b011917f81a057fd8d34bb3e->leave($__internal_8b8fda04a51a1b89c39cedba1e2e56c6ad006440b011917f81a057fd8d34bb3e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }
}
