<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_60f4e2ad6ab2d2339e6a8da777d7a2e0d0a9cc3d4faf1dcccba4106ba675386b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2da5e3400df9313135814312fdc6b76f57e1e54b54a5c7fea56725a883e073a = $this->env->getExtension("native_profiler");
        $__internal_d2da5e3400df9313135814312fdc6b76f57e1e54b54a5c7fea56725a883e073a->enter($__internal_d2da5e3400df9313135814312fdc6b76f57e1e54b54a5c7fea56725a883e073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d2da5e3400df9313135814312fdc6b76f57e1e54b54a5c7fea56725a883e073a->leave($__internal_d2da5e3400df9313135814312fdc6b76f57e1e54b54a5c7fea56725a883e073a_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c704cd95426ffd06e3df2f5d678879043feee815cb509a404364c9ef70b57e6a = $this->env->getExtension("native_profiler");
        $__internal_c704cd95426ffd06e3df2f5d678879043feee815cb509a404364c9ef70b57e6a->enter($__internal_c704cd95426ffd06e3df2f5d678879043feee815cb509a404364c9ef70b57e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_c704cd95426ffd06e3df2f5d678879043feee815cb509a404364c9ef70b57e6a->leave($__internal_c704cd95426ffd06e3df2f5d678879043feee815cb509a404364c9ef70b57e6a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
