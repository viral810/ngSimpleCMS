<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7ab652d1b20ed2873368dfde9b4e8945d659c7c1ff31db449e2f3a0533e1ded0 extends Twig_Template
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
        $__internal_d8115d90309ebc3480eb89b71d49cbccc5381a4d94ab404590425260222f0f39 = $this->env->getExtension("native_profiler");
        $__internal_d8115d90309ebc3480eb89b71d49cbccc5381a4d94ab404590425260222f0f39->enter($__internal_d8115d90309ebc3480eb89b71d49cbccc5381a4d94ab404590425260222f0f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8115d90309ebc3480eb89b71d49cbccc5381a4d94ab404590425260222f0f39->leave($__internal_d8115d90309ebc3480eb89b71d49cbccc5381a4d94ab404590425260222f0f39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb6f5f88ef0b3facc7943fe33dda1de6ee7f076bcd9773be163b6bf322f74b52 = $this->env->getExtension("native_profiler");
        $__internal_eb6f5f88ef0b3facc7943fe33dda1de6ee7f076bcd9773be163b6bf322f74b52->enter($__internal_eb6f5f88ef0b3facc7943fe33dda1de6ee7f076bcd9773be163b6bf322f74b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eb6f5f88ef0b3facc7943fe33dda1de6ee7f076bcd9773be163b6bf322f74b52->leave($__internal_eb6f5f88ef0b3facc7943fe33dda1de6ee7f076bcd9773be163b6bf322f74b52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b484aecf1ceba538f70dedde45e8b56ca98e750ec6f4686ba9c8b3aca8a8fe84 = $this->env->getExtension("native_profiler");
        $__internal_b484aecf1ceba538f70dedde45e8b56ca98e750ec6f4686ba9c8b3aca8a8fe84->enter($__internal_b484aecf1ceba538f70dedde45e8b56ca98e750ec6f4686ba9c8b3aca8a8fe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b484aecf1ceba538f70dedde45e8b56ca98e750ec6f4686ba9c8b3aca8a8fe84->leave($__internal_b484aecf1ceba538f70dedde45e8b56ca98e750ec6f4686ba9c8b3aca8a8fe84_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_595321e42ca55f0e06874fabaa5384df428aee77bb0239d433a617c3b5624b6f = $this->env->getExtension("native_profiler");
        $__internal_595321e42ca55f0e06874fabaa5384df428aee77bb0239d433a617c3b5624b6f->enter($__internal_595321e42ca55f0e06874fabaa5384df428aee77bb0239d433a617c3b5624b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_595321e42ca55f0e06874fabaa5384df428aee77bb0239d433a617c3b5624b6f->leave($__internal_595321e42ca55f0e06874fabaa5384df428aee77bb0239d433a617c3b5624b6f_prof);

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
