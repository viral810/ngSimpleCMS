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
        $__internal_3e528d0535de00df615e47ee60b64aa159610da3937517450196fbc0af8b3810 = $this->env->getExtension("native_profiler");
        $__internal_3e528d0535de00df615e47ee60b64aa159610da3937517450196fbc0af8b3810->enter($__internal_3e528d0535de00df615e47ee60b64aa159610da3937517450196fbc0af8b3810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e528d0535de00df615e47ee60b64aa159610da3937517450196fbc0af8b3810->leave($__internal_3e528d0535de00df615e47ee60b64aa159610da3937517450196fbc0af8b3810_prof);

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
