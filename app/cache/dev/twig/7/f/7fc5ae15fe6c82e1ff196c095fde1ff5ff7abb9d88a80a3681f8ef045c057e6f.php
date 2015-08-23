<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_7fc5ae15fe6c82e1ff196c095fde1ff5ff7abb9d88a80a3681f8ef045c057e6f extends Twig_Template
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
        $__internal_cffcf92913720e14e3a8480cdf4d5aff4d82482f0242c2831ec05a636d4611a4 = $this->env->getExtension("native_profiler");
        $__internal_cffcf92913720e14e3a8480cdf4d5aff4d82482f0242c2831ec05a636d4611a4->enter($__internal_cffcf92913720e14e3a8480cdf4d5aff4d82482f0242c2831ec05a636d4611a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cffcf92913720e14e3a8480cdf4d5aff4d82482f0242c2831ec05a636d4611a4->leave($__internal_cffcf92913720e14e3a8480cdf4d5aff4d82482f0242c2831ec05a636d4611a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
