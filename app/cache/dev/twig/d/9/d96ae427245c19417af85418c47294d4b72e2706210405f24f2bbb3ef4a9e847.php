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
        $__internal_219d252c295104161411a6d2f7506c893494a6718a79c8176aeb8870c39bed95 = $this->env->getExtension("native_profiler");
        $__internal_219d252c295104161411a6d2f7506c893494a6718a79c8176aeb8870c39bed95->enter($__internal_219d252c295104161411a6d2f7506c893494a6718a79c8176aeb8870c39bed95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219d252c295104161411a6d2f7506c893494a6718a79c8176aeb8870c39bed95->leave($__internal_219d252c295104161411a6d2f7506c893494a6718a79c8176aeb8870c39bed95_prof);

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
