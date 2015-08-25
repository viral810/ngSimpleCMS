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
        $__internal_fc6565de66570b0c1686e2ed083f38bc2332c66ab9147d4f1a85d125852cd096 = $this->env->getExtension("native_profiler");
        $__internal_fc6565de66570b0c1686e2ed083f38bc2332c66ab9147d4f1a85d125852cd096->enter($__internal_fc6565de66570b0c1686e2ed083f38bc2332c66ab9147d4f1a85d125852cd096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc6565de66570b0c1686e2ed083f38bc2332c66ab9147d4f1a85d125852cd096->leave($__internal_fc6565de66570b0c1686e2ed083f38bc2332c66ab9147d4f1a85d125852cd096_prof);

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
