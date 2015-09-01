<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_a38f1b8abe464177364ae054fa9752c9cfbf224d5d1e65d8ab8e64a4b0f9cf8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06d3cf0bb1fe16461467f7f858cff3a1b4c1d953fc76b02e24d2f602001d94fc = $this->env->getExtension("native_profiler");
        $__internal_06d3cf0bb1fe16461467f7f858cff3a1b4c1d953fc76b02e24d2f602001d94fc->enter($__internal_06d3cf0bb1fe16461467f7f858cff3a1b4c1d953fc76b02e24d2f602001d94fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d3cf0bb1fe16461467f7f858cff3a1b4c1d953fc76b02e24d2f602001d94fc->leave($__internal_06d3cf0bb1fe16461467f7f858cff3a1b4c1d953fc76b02e24d2f602001d94fc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
