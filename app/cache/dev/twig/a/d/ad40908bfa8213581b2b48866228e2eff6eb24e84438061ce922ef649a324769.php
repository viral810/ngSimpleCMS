<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_ad40908bfa8213581b2b48866228e2eff6eb24e84438061ce922ef649a324769 extends Twig_Template
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
        $__internal_4b3ec622e9be3ebe1ea302f034027d92c7b6aa71dfd5a6a73ff722ca8bd3be6a = $this->env->getExtension("native_profiler");
        $__internal_4b3ec622e9be3ebe1ea302f034027d92c7b6aa71dfd5a6a73ff722ca8bd3be6a->enter($__internal_4b3ec622e9be3ebe1ea302f034027d92c7b6aa71dfd5a6a73ff722ca8bd3be6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

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
        
        $__internal_4b3ec622e9be3ebe1ea302f034027d92c7b6aa71dfd5a6a73ff722ca8bd3be6a->leave($__internal_4b3ec622e9be3ebe1ea302f034027d92c7b6aa71dfd5a6a73ff722ca8bd3be6a_prof);

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
