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
        $__internal_fc15995c406e43b24cfbaacdff512a7ac9bf3e72c4478baf2cb403730e93410f = $this->env->getExtension("native_profiler");
        $__internal_fc15995c406e43b24cfbaacdff512a7ac9bf3e72c4478baf2cb403730e93410f->enter($__internal_fc15995c406e43b24cfbaacdff512a7ac9bf3e72c4478baf2cb403730e93410f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc15995c406e43b24cfbaacdff512a7ac9bf3e72c4478baf2cb403730e93410f->leave($__internal_fc15995c406e43b24cfbaacdff512a7ac9bf3e72c4478baf2cb403730e93410f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d5aec92079bfe6c2d8c1f2c0e110be5bb2d5c659f1923b7a8cad5345c26fdc76 = $this->env->getExtension("native_profiler");
        $__internal_d5aec92079bfe6c2d8c1f2c0e110be5bb2d5c659f1923b7a8cad5345c26fdc76->enter($__internal_d5aec92079bfe6c2d8c1f2c0e110be5bb2d5c659f1923b7a8cad5345c26fdc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_d5aec92079bfe6c2d8c1f2c0e110be5bb2d5c659f1923b7a8cad5345c26fdc76->leave($__internal_d5aec92079bfe6c2d8c1f2c0e110be5bb2d5c659f1923b7a8cad5345c26fdc76_prof);

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
