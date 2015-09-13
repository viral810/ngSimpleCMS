<?php

/* AcmeBasicCmsBundle:Default:page.html.twig */
class __TwigTemplate_b880edd11c2b1330fb01f434fabc4e268187b2a67581db114ac51de1a6aadf92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AcmeBasicCmsBundle:Default:page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d870e22e84b0a2efca9d107b9130b8952249603a563fc318bbcfa93af55b01f7 = $this->env->getExtension("native_profiler");
        $__internal_d870e22e84b0a2efca9d107b9130b8952249603a563fc318bbcfa93af55b01f7->enter($__internal_d870e22e84b0a2efca9d107b9130b8952249603a563fc318bbcfa93af55b01f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBasicCmsBundle:Default:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d870e22e84b0a2efca9d107b9130b8952249603a563fc318bbcfa93af55b01f7->leave($__internal_d870e22e84b0a2efca9d107b9130b8952249603a563fc318bbcfa93af55b01f7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_520aaf9abdfde211499b8c2af5322bb5c567ac2bf1300bbcf9ac254d2c38fbf7 = $this->env->getExtension("native_profiler");
        $__internal_520aaf9abdfde211499b8c2af5322bb5c567ac2bf1300bbcf9ac254d2c38fbf7->enter($__internal_520aaf9abdfde211499b8c2af5322bb5c567ac2bf1300bbcf9ac254d2c38fbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        
        $__internal_520aaf9abdfde211499b8c2af5322bb5c567ac2bf1300bbcf9ac254d2c38fbf7->leave($__internal_520aaf9abdfde211499b8c2af5322bb5c567ac2bf1300bbcf9ac254d2c38fbf7_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBasicCmsBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
