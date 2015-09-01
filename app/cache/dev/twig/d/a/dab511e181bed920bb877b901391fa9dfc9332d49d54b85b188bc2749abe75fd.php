<?php

/* SonataUserBundle:Admin:Field/impersonating.html.twig */
class __TwigTemplate_dab511e181bed920bb877b901391fa9dfc9332d49d54b85b188bc2749abe75fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataUserBundle:Admin:Field/impersonating.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bd9ca96cc56ab7e38c088629bbebda7ffc4087b65bd577e31a46c07f60b05b1 = $this->env->getExtension("native_profiler");
        $__internal_0bd9ca96cc56ab7e38c088629bbebda7ffc4087b65bd577e31a46c07f60b05b1->enter($__internal_0bd9ca96cc56ab7e38c088629bbebda7ffc4087b65bd577e31a46c07f60b05b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin:Field/impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd9ca96cc56ab7e38c088629bbebda7ffc4087b65bd577e31a46c07f60b05b1->leave($__internal_0bd9ca96cc56ab7e38c088629bbebda7ffc4087b65bd577e31a46c07f60b05b1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb4f4580a42bd358f62a8593c75dd42aba51faefd5e20d405c1654d8d362d874 = $this->env->getExtension("native_profiler");
        $__internal_fb4f4580a42bd358f62a8593c75dd42aba51faefd5e20d405c1654d8d362d874->enter($__internal_fb4f4580a42bd358f62a8593c75dd42aba51faefd5e20d405c1654d8d362d874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\">
            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonataadmin/famfamfam/group_go.png"), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\" />
        </a>
    ";
        } else {
            // line 20
            echo "        -
    ";
        }
        
        $__internal_fb4f4580a42bd358f62a8593c75dd42aba51faefd5e20d405c1654d8d362d874->leave($__internal_fb4f4580a42bd358f62a8593c75dd42aba51faefd5e20d405c1654d8d362d874_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Field/impersonating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  50 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
