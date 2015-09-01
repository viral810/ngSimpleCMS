<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_f0f1fd4a7c181741edcea5b1443028d78af21709b1e2b2250a31ba3dbf68dbf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf8b37c7168a9c9ae9ce38fd41c80beb1f0d77ba2b3d422b10350a38b89870ba = $this->env->getExtension("native_profiler");
        $__internal_bf8b37c7168a9c9ae9ce38fd41c80beb1f0d77ba2b3d422b10350a38b89870ba->enter($__internal_bf8b37c7168a9c9ae9ce38fd41c80beb1f0d77ba2b3d422b10350a38b89870ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8b37c7168a9c9ae9ce38fd41c80beb1f0d77ba2b3d422b10350a38b89870ba->leave($__internal_bf8b37c7168a9c9ae9ce38fd41c80beb1f0d77ba2b3d422b10350a38b89870ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }
}
