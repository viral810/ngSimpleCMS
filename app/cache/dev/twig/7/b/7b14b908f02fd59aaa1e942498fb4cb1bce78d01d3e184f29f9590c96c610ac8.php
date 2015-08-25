<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7b14b908f02fd59aaa1e942498fb4cb1bce78d01d3e184f29f9590c96c610ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faf8d62df52332f17cd8ff4b3801dd4ec533976325ce50c1a6179447ca843de6 = $this->env->getExtension("native_profiler");
        $__internal_faf8d62df52332f17cd8ff4b3801dd4ec533976325ce50c1a6179447ca843de6->enter($__internal_faf8d62df52332f17cd8ff4b3801dd4ec533976325ce50c1a6179447ca843de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf8d62df52332f17cd8ff4b3801dd4ec533976325ce50c1a6179447ca843de6->leave($__internal_faf8d62df52332f17cd8ff4b3801dd4ec533976325ce50c1a6179447ca843de6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
