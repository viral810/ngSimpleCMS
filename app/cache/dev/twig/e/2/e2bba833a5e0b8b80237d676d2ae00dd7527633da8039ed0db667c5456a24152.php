<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_e2bba833a5e0b8b80237d676d2ae00dd7527633da8039ed0db667c5456a24152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d586b0d892e863e8ca694870143f43d58aa2ec4a2ea6c884ec9553318804cb15 = $this->env->getExtension("native_profiler");
        $__internal_d586b0d892e863e8ca694870143f43d58aa2ec4a2ea6c884ec9553318804cb15->enter($__internal_d586b0d892e863e8ca694870143f43d58aa2ec4a2ea6c884ec9553318804cb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_d586b0d892e863e8ca694870143f43d58aa2ec4a2ea6c884ec9553318804cb15->leave($__internal_d586b0d892e863e8ca694870143f43d58aa2ec4a2ea6c884ec9553318804cb15_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }
}
