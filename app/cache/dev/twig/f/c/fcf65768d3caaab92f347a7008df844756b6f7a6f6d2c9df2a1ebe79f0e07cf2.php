<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_fcf65768d3caaab92f347a7008df844756b6f7a6f6d2c9df2a1ebe79f0e07cf2 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_924885b0cbd250601bbb09b224e4b3e6b1fbe284eaf08a13c17ff4c7b9ea13c8 = $this->env->getExtension("native_profiler");
        $__internal_924885b0cbd250601bbb09b224e4b3e6b1fbe284eaf08a13c17ff4c7b9ea13c8->enter($__internal_924885b0cbd250601bbb09b224e4b3e6b1fbe284eaf08a13c17ff4c7b9ea13c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_924885b0cbd250601bbb09b224e4b3e6b1fbe284eaf08a13c17ff4c7b9ea13c8->leave($__internal_924885b0cbd250601bbb09b224e4b3e6b1fbe284eaf08a13c17ff4c7b9ea13c8_prof);

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
