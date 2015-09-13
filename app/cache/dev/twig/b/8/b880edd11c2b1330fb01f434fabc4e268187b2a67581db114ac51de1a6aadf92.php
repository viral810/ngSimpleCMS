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
        $__internal_92a1dcfe743b64861968f2eb6f845d7051a6d3dd2d2b7a9532e6c7e22c053db8 = $this->env->getExtension("native_profiler");
        $__internal_92a1dcfe743b64861968f2eb6f845d7051a6d3dd2d2b7a9532e6c7e22c053db8->enter($__internal_92a1dcfe743b64861968f2eb6f845d7051a6d3dd2d2b7a9532e6c7e22c053db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBasicCmsBundle:Default:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92a1dcfe743b64861968f2eb6f845d7051a6d3dd2d2b7a9532e6c7e22c053db8->leave($__internal_92a1dcfe743b64861968f2eb6f845d7051a6d3dd2d2b7a9532e6c7e22c053db8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf38d29610d43e27b999637be5eb5d5c54c632e183e8e4b9eedc48e0922daf1d = $this->env->getExtension("native_profiler");
        $__internal_cf38d29610d43e27b999637be5eb5d5c54c632e183e8e4b9eedc48e0922daf1d->enter($__internal_cf38d29610d43e27b999637be5eb5d5c54c632e183e8e4b9eedc48e0922daf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        
        $__internal_cf38d29610d43e27b999637be5eb5d5c54c632e183e8e4b9eedc48e0922daf1d->leave($__internal_cf38d29610d43e27b999637be5eb5d5c54c632e183e8e4b9eedc48e0922daf1d_prof);

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
