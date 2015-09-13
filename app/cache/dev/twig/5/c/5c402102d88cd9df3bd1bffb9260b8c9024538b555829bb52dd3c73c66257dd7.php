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
        $__internal_619524e5c750b3bc7fe70717666b18b0bae3f07d65a594b2bbb4f3c1b86d19b4 = $this->env->getExtension("native_profiler");
        $__internal_619524e5c750b3bc7fe70717666b18b0bae3f07d65a594b2bbb4f3c1b86d19b4->enter($__internal_619524e5c750b3bc7fe70717666b18b0bae3f07d65a594b2bbb4f3c1b86d19b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_619524e5c750b3bc7fe70717666b18b0bae3f07d65a594b2bbb4f3c1b86d19b4->leave($__internal_619524e5c750b3bc7fe70717666b18b0bae3f07d65a594b2bbb4f3c1b86d19b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bd6e4aa0bc77ec6626d88e6da53a640f3bb0bcfee00dfcdea68d98155435d59 = $this->env->getExtension("native_profiler");
        $__internal_4bd6e4aa0bc77ec6626d88e6da53a640f3bb0bcfee00dfcdea68d98155435d59->enter($__internal_4bd6e4aa0bc77ec6626d88e6da53a640f3bb0bcfee00dfcdea68d98155435d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4bd6e4aa0bc77ec6626d88e6da53a640f3bb0bcfee00dfcdea68d98155435d59->leave($__internal_4bd6e4aa0bc77ec6626d88e6da53a640f3bb0bcfee00dfcdea68d98155435d59_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37e7302458fe9f14e3f307b03e26287935c2922c35dc87efb310ec6800e7164b = $this->env->getExtension("native_profiler");
        $__internal_37e7302458fe9f14e3f307b03e26287935c2922c35dc87efb310ec6800e7164b->enter($__internal_37e7302458fe9f14e3f307b03e26287935c2922c35dc87efb310ec6800e7164b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_37e7302458fe9f14e3f307b03e26287935c2922c35dc87efb310ec6800e7164b->leave($__internal_37e7302458fe9f14e3f307b03e26287935c2922c35dc87efb310ec6800e7164b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d02ef50688d4f55d2cd79936f45412e13ccfff3a59385f0fb68b9e313b1894e9 = $this->env->getExtension("native_profiler");
        $__internal_d02ef50688d4f55d2cd79936f45412e13ccfff3a59385f0fb68b9e313b1894e9->enter($__internal_d02ef50688d4f55d2cd79936f45412e13ccfff3a59385f0fb68b9e313b1894e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d02ef50688d4f55d2cd79936f45412e13ccfff3a59385f0fb68b9e313b1894e9->leave($__internal_d02ef50688d4f55d2cd79936f45412e13ccfff3a59385f0fb68b9e313b1894e9_prof);

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
