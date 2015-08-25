<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_e41e54154ef018260084e64a49d5d25388875bffee645236d79049813c54b82d extends Twig_Template
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
        $__internal_9c5d363cae0a02b08d73c398c2517a4d08d93f4483eca5623ab32f88553a477f = $this->env->getExtension("native_profiler");
        $__internal_9c5d363cae0a02b08d73c398c2517a4d08d93f4483eca5623ab32f88553a477f->enter($__internal_9c5d363cae0a02b08d73c398c2517a4d08d93f4483eca5623ab32f88553a477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5d363cae0a02b08d73c398c2517a4d08d93f4483eca5623ab32f88553a477f->leave($__internal_9c5d363cae0a02b08d73c398c2517a4d08d93f4483eca5623ab32f88553a477f_prof);

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
