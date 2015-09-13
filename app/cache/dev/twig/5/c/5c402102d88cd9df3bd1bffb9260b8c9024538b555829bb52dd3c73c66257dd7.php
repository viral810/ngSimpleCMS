<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5c402102d88cd9df3bd1bffb9260b8c9024538b555829bb52dd3c73c66257dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19f09b87ae3db441c227deefab293dfe4b14561099295cb4876f1edea4eb6f71 = $this->env->getExtension("native_profiler");
        $__internal_19f09b87ae3db441c227deefab293dfe4b14561099295cb4876f1edea4eb6f71->enter($__internal_19f09b87ae3db441c227deefab293dfe4b14561099295cb4876f1edea4eb6f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f09b87ae3db441c227deefab293dfe4b14561099295cb4876f1edea4eb6f71->leave($__internal_19f09b87ae3db441c227deefab293dfe4b14561099295cb4876f1edea4eb6f71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0730dff501231414d701160568e7ecc5f22c123936fd445dfc925afb3c06f1ac = $this->env->getExtension("native_profiler");
        $__internal_0730dff501231414d701160568e7ecc5f22c123936fd445dfc925afb3c06f1ac->enter($__internal_0730dff501231414d701160568e7ecc5f22c123936fd445dfc925afb3c06f1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0730dff501231414d701160568e7ecc5f22c123936fd445dfc925afb3c06f1ac->leave($__internal_0730dff501231414d701160568e7ecc5f22c123936fd445dfc925afb3c06f1ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbb47cd8c656def62c9957b9bc4b7fc8f2bbad8834b4f2325c63c6bdb14f63d6 = $this->env->getExtension("native_profiler");
        $__internal_bbb47cd8c656def62c9957b9bc4b7fc8f2bbad8834b4f2325c63c6bdb14f63d6->enter($__internal_bbb47cd8c656def62c9957b9bc4b7fc8f2bbad8834b4f2325c63c6bdb14f63d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbb47cd8c656def62c9957b9bc4b7fc8f2bbad8834b4f2325c63c6bdb14f63d6->leave($__internal_bbb47cd8c656def62c9957b9bc4b7fc8f2bbad8834b4f2325c63c6bdb14f63d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_03b3d3571ad13ba48a8fc722cda4088b218149db9996131b1545cf1120910a34 = $this->env->getExtension("native_profiler");
        $__internal_03b3d3571ad13ba48a8fc722cda4088b218149db9996131b1545cf1120910a34->enter($__internal_03b3d3571ad13ba48a8fc722cda4088b218149db9996131b1545cf1120910a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_03b3d3571ad13ba48a8fc722cda4088b218149db9996131b1545cf1120910a34->leave($__internal_03b3d3571ad13ba48a8fc722cda4088b218149db9996131b1545cf1120910a34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
