<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_47a7abca9dc507ed797f7e4a9ba185373bb92b3b6a174e1be21fd0ca1ae6725d extends Twig_Template
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
        $__internal_b74ba175cfea103d6b5f16aec40dc0b31fc3d6c8d3680af8107634fa57a186c3 = $this->env->getExtension("native_profiler");
        $__internal_b74ba175cfea103d6b5f16aec40dc0b31fc3d6c8d3680af8107634fa57a186c3->enter($__internal_b74ba175cfea103d6b5f16aec40dc0b31fc3d6c8d3680af8107634fa57a186c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74ba175cfea103d6b5f16aec40dc0b31fc3d6c8d3680af8107634fa57a186c3->leave($__internal_b74ba175cfea103d6b5f16aec40dc0b31fc3d6c8d3680af8107634fa57a186c3_prof);

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
