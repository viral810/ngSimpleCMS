<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_b33490d12996e7f5de3e3bab42154efdd85b833f12c0d15cbb334c818a86f87b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78f35662ea331f1c09718037e5cb3a55dc5214c01d0d71e7c26a0cca3cf3f74e = $this->env->getExtension("native_profiler");
        $__internal_78f35662ea331f1c09718037e5cb3a55dc5214c01d0d71e7c26a0cca3cf3f74e->enter($__internal_78f35662ea331f1c09718037e5cb3a55dc5214c01d0d71e7c26a0cca3cf3f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_78f35662ea331f1c09718037e5cb3a55dc5214c01d0d71e7c26a0cca3cf3f74e->leave($__internal_78f35662ea331f1c09718037e5cb3a55dc5214c01d0d71e7c26a0cca3cf3f74e_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6674b262aab00fd7cfa1ad393bb0b16fd7b887ef94d96454f28ce25bc04183d8 = $this->env->getExtension("native_profiler");
        $__internal_6674b262aab00fd7cfa1ad393bb0b16fd7b887ef94d96454f28ce25bc04183d8->enter($__internal_6674b262aab00fd7cfa1ad393bb0b16fd7b887ef94d96454f28ce25bc04183d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_6674b262aab00fd7cfa1ad393bb0b16fd7b887ef94d96454f28ce25bc04183d8->leave($__internal_6674b262aab00fd7cfa1ad393bb0b16fd7b887ef94d96454f28ce25bc04183d8_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }
}
