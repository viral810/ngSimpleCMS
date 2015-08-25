<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0dd1189d89fa7870d90b7b05f86a4879ca028c2de4d30d3e3abf55fdf140d960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5079f1bf021a0b74f10ed77c841d1750a48ac07e457273d2ff85f30338d39153 = $this->env->getExtension("native_profiler");
        $__internal_5079f1bf021a0b74f10ed77c841d1750a48ac07e457273d2ff85f30338d39153->enter($__internal_5079f1bf021a0b74f10ed77c841d1750a48ac07e457273d2ff85f30338d39153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5079f1bf021a0b74f10ed77c841d1750a48ac07e457273d2ff85f30338d39153->leave($__internal_5079f1bf021a0b74f10ed77c841d1750a48ac07e457273d2ff85f30338d39153_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4d5e7a04d2d272342c4bb8f597f51c4e4e57feb3bcdbc9a9881d757869e6ab6 = $this->env->getExtension("native_profiler");
        $__internal_c4d5e7a04d2d272342c4bb8f597f51c4e4e57feb3bcdbc9a9881d757869e6ab6->enter($__internal_c4d5e7a04d2d272342c4bb8f597f51c4e4e57feb3bcdbc9a9881d757869e6ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c4d5e7a04d2d272342c4bb8f597f51c4e4e57feb3bcdbc9a9881d757869e6ab6->leave($__internal_c4d5e7a04d2d272342c4bb8f597f51c4e4e57feb3bcdbc9a9881d757869e6ab6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
