<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_c4551948309b23adf9d2ee9934f13a9493cb7b593eafa41584d517e0edd1bb7d extends Twig_Template
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
        $__internal_43c6cbaf662ab4dfc258ee56e89bd2142fe99f6879d0166cd3d1946ebd8b6b00 = $this->env->getExtension("native_profiler");
        $__internal_43c6cbaf662ab4dfc258ee56e89bd2142fe99f6879d0166cd3d1946ebd8b6b00->enter($__internal_43c6cbaf662ab4dfc258ee56e89bd2142fe99f6879d0166cd3d1946ebd8b6b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_43c6cbaf662ab4dfc258ee56e89bd2142fe99f6879d0166cd3d1946ebd8b6b00->leave($__internal_43c6cbaf662ab4dfc258ee56e89bd2142fe99f6879d0166cd3d1946ebd8b6b00_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_afd0c84d6db519e5c6b73a681dfd4e968b715e9db8a5ab70aa7955b949f57fdc = $this->env->getExtension("native_profiler");
        $__internal_afd0c84d6db519e5c6b73a681dfd4e968b715e9db8a5ab70aa7955b949f57fdc->enter($__internal_afd0c84d6db519e5c6b73a681dfd4e968b715e9db8a5ab70aa7955b949f57fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        
        $__internal_afd0c84d6db519e5c6b73a681dfd4e968b715e9db8a5ab70aa7955b949f57fdc->leave($__internal_afd0c84d6db519e5c6b73a681dfd4e968b715e9db8a5ab70aa7955b949f57fdc_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  46 => 6,  44 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }
}
