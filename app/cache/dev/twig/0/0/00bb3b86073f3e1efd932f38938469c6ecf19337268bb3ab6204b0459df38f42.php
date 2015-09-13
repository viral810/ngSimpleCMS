<?php

/* SonataDoctrinePHPCRAdminBundle:Tree:routing_defaults.html.twig */
class __TwigTemplate_00bb3b86073f3e1efd932f38938469c6ecf19337268bb3ab6204b0459df38f42 extends Twig_Template
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
        $__internal_e745286474a1d330249e527e2da69b943b018fc86d7611ebc9c8df8d3daa81b7 = $this->env->getExtension("native_profiler");
        $__internal_e745286474a1d330249e527e2da69b943b018fc86d7611ebc9c8df8d3daa81b7->enter($__internal_e745286474a1d330249e527e2da69b943b018fc86d7611ebc9c8df8d3daa81b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Tree:routing_defaults.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["routing_default_values"] = array();
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routing_defaults"]) ? $context["routing_defaults"] : $this->getContext($context, "routing_defaults")));
        foreach ($context['_seq'] as $context["_key"] => $context["default"]) {
            // line 14
            echo "    ";
            if (("locale" == $context["default"])) {
                // line 15
                echo "        ";
                $context["routing_default_values"] = twig_array_merge((isset($context["routing_default_values"]) ? $context["routing_default_values"] : $this->getContext($context, "routing_default_values")), array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())));
                // line 16
                echo "    ";
            } elseif (("format" == $context["default"])) {
                // line 17
                echo "        ";
                $context["routing_default_values"] = twig_array_merge((isset($context["routing_default_values"]) ? $context["routing_default_values"] : $this->getContext($context, "routing_default_values")), array("_format" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "format", array())));
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        ";
                $context["routing_default_values"] = twig_array_merge((isset($context["routing_default_values"]) ? $context["routing_default_values"] : $this->getContext($context, "routing_default_values")), array("default" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => $context["default"]), "method")));
                // line 20
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['default'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo twig_jsonencode_filter((isset($context["routing_default_values"]) ? $context["routing_default_values"] : $this->getContext($context, "routing_default_values")));
        echo "
";
        
        $__internal_e745286474a1d330249e527e2da69b943b018fc86d7611ebc9c8df8d3daa81b7->leave($__internal_e745286474a1d330249e527e2da69b943b018fc86d7611ebc9c8df8d3daa81b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrinePHPCRAdminBundle:Tree:routing_defaults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  49 => 20,  46 => 19,  43 => 18,  40 => 17,  37 => 16,  34 => 15,  31 => 14,  27 => 13,  25 => 12,  22 => 11,);
    }
}
