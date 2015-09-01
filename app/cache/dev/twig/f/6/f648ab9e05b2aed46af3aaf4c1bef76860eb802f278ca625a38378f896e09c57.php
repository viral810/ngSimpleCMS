<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_f648ab9e05b2aed46af3aaf4c1bef76860eb802f278ca625a38378f896e09c57 extends Twig_Template
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
        $__internal_aafea37815d1b9c16f32cfc6b7e331a2a6ada7347a3a78bd2b5f633ad1ef6d67 = $this->env->getExtension("native_profiler");
        $__internal_aafea37815d1b9c16f32cfc6b7e331a2a6ada7347a3a78bd2b5f633ad1ef6d67->enter($__internal_aafea37815d1b9c16f32cfc6b7e331a2a6ada7347a3a78bd2b5f633ad1ef6d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aafea37815d1b9c16f32cfc6b7e331a2a6ada7347a3a78bd2b5f633ad1ef6d67->leave($__internal_aafea37815d1b9c16f32cfc6b7e331a2a6ada7347a3a78bd2b5f633ad1ef6d67_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_84c37a0b83d75ffe8caf8230875bd6597efab46d6ea791148ca845c8e27c330d = $this->env->getExtension("native_profiler");
        $__internal_84c37a0b83d75ffe8caf8230875bd6597efab46d6ea791148ca845c8e27c330d->enter($__internal_84c37a0b83d75ffe8caf8230875bd6597efab46d6ea791148ca845c8e27c330d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_84c37a0b83d75ffe8caf8230875bd6597efab46d6ea791148ca845c8e27c330d->leave($__internal_84c37a0b83d75ffe8caf8230875bd6597efab46d6ea791148ca845c8e27c330d_prof);

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
