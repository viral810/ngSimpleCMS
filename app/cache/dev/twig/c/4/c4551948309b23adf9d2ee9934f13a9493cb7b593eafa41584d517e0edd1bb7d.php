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
        $__internal_433f988e5942a06ba3b5e768d12648106442bb3cb42b4cf243ea6055e331eecc = $this->env->getExtension("native_profiler");
        $__internal_433f988e5942a06ba3b5e768d12648106442bb3cb42b4cf243ea6055e331eecc->enter($__internal_433f988e5942a06ba3b5e768d12648106442bb3cb42b4cf243ea6055e331eecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_433f988e5942a06ba3b5e768d12648106442bb3cb42b4cf243ea6055e331eecc->leave($__internal_433f988e5942a06ba3b5e768d12648106442bb3cb42b4cf243ea6055e331eecc_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_46bb27caec710c87fb39bd8eb90ecaad0fcdae403059f1ea91a86e9d14479de6 = $this->env->getExtension("native_profiler");
        $__internal_46bb27caec710c87fb39bd8eb90ecaad0fcdae403059f1ea91a86e9d14479de6->enter($__internal_46bb27caec710c87fb39bd8eb90ecaad0fcdae403059f1ea91a86e9d14479de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

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
        
        $__internal_46bb27caec710c87fb39bd8eb90ecaad0fcdae403059f1ea91a86e9d14479de6->leave($__internal_46bb27caec710c87fb39bd8eb90ecaad0fcdae403059f1ea91a86e9d14479de6_prof);

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
