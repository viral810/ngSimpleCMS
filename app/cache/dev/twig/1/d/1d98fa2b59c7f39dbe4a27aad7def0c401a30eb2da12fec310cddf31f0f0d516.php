<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_1d98fa2b59c7f39dbe4a27aad7def0c401a30eb2da12fec310cddf31f0f0d516 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c336b64d9f5fa72c76a8a6793a2e92a4980ed1ab56cf3ac1a18836d6307329ab = $this->env->getExtension("native_profiler");
        $__internal_c336b64d9f5fa72c76a8a6793a2e92a4980ed1ab56cf3ac1a18836d6307329ab->enter($__internal_c336b64d9f5fa72c76a8a6793a2e92a4980ed1ab56cf3ac1a18836d6307329ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c336b64d9f5fa72c76a8a6793a2e92a4980ed1ab56cf3ac1a18836d6307329ab->leave($__internal_c336b64d9f5fa72c76a8a6793a2e92a4980ed1ab56cf3ac1a18836d6307329ab_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d39a50ee0b3e6848721b2d4192213a94f54db9e08351f875171e469ea94cd49d = $this->env->getExtension("native_profiler");
        $__internal_d39a50ee0b3e6848721b2d4192213a94f54db9e08351f875171e469ea94cd49d->enter($__internal_d39a50ee0b3e6848721b2d4192213a94f54db9e08351f875171e469ea94cd49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_d39a50ee0b3e6848721b2d4192213a94f54db9e08351f875171e469ea94cd49d->leave($__internal_d39a50ee0b3e6848721b2d4192213a94f54db9e08351f875171e469ea94cd49d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
