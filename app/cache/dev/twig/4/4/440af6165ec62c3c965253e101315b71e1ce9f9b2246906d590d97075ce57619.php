<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_440af6165ec62c3c965253e101315b71e1ce9f9b2246906d590d97075ce57619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2db92d40fc9158b27ad09eedd3e2b80ed87085d9024e63c213141f9b95df1ec4 = $this->env->getExtension("native_profiler");
        $__internal_2db92d40fc9158b27ad09eedd3e2b80ed87085d9024e63c213141f9b95df1ec4->enter($__internal_2db92d40fc9158b27ad09eedd3e2b80ed87085d9024e63c213141f9b95df1ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db92d40fc9158b27ad09eedd3e2b80ed87085d9024e63c213141f9b95df1ec4->leave($__internal_2db92d40fc9158b27ad09eedd3e2b80ed87085d9024e63c213141f9b95df1ec4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_685d9c77389ae14d5e391e3f9b2848bda705b7386a2944bc1d47f978d839b4af = $this->env->getExtension("native_profiler");
        $__internal_685d9c77389ae14d5e391e3f9b2848bda705b7386a2944bc1d47f978d839b4af->enter($__internal_685d9c77389ae14d5e391e3f9b2848bda705b7386a2944bc1d47f978d839b4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_685d9c77389ae14d5e391e3f9b2848bda705b7386a2944bc1d47f978d839b4af->leave($__internal_685d9c77389ae14d5e391e3f9b2848bda705b7386a2944bc1d47f978d839b4af_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
