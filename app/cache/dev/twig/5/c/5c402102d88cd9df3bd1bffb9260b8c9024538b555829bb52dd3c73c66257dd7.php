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
        $__internal_62b45db4e4a0d679363638bbfb372457f83b7339cbaaae915e22868cd38d7d1f = $this->env->getExtension("native_profiler");
        $__internal_62b45db4e4a0d679363638bbfb372457f83b7339cbaaae915e22868cd38d7d1f->enter($__internal_62b45db4e4a0d679363638bbfb372457f83b7339cbaaae915e22868cd38d7d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b45db4e4a0d679363638bbfb372457f83b7339cbaaae915e22868cd38d7d1f->leave($__internal_62b45db4e4a0d679363638bbfb372457f83b7339cbaaae915e22868cd38d7d1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da4c8e1fa838ba23775f34b2e1f79fe6552a8e404901248871cd4e06f41c2322 = $this->env->getExtension("native_profiler");
        $__internal_da4c8e1fa838ba23775f34b2e1f79fe6552a8e404901248871cd4e06f41c2322->enter($__internal_da4c8e1fa838ba23775f34b2e1f79fe6552a8e404901248871cd4e06f41c2322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da4c8e1fa838ba23775f34b2e1f79fe6552a8e404901248871cd4e06f41c2322->leave($__internal_da4c8e1fa838ba23775f34b2e1f79fe6552a8e404901248871cd4e06f41c2322_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_56b7e540cfc5f7ba8c78ec05d596f2fe8467b303dc44134a0882ed98e433d02e = $this->env->getExtension("native_profiler");
        $__internal_56b7e540cfc5f7ba8c78ec05d596f2fe8467b303dc44134a0882ed98e433d02e->enter($__internal_56b7e540cfc5f7ba8c78ec05d596f2fe8467b303dc44134a0882ed98e433d02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_56b7e540cfc5f7ba8c78ec05d596f2fe8467b303dc44134a0882ed98e433d02e->leave($__internal_56b7e540cfc5f7ba8c78ec05d596f2fe8467b303dc44134a0882ed98e433d02e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_87b2c26ef1779b219eb7f88ae0393da3960cfe12f621cef9ea275bf222cc4788 = $this->env->getExtension("native_profiler");
        $__internal_87b2c26ef1779b219eb7f88ae0393da3960cfe12f621cef9ea275bf222cc4788->enter($__internal_87b2c26ef1779b219eb7f88ae0393da3960cfe12f621cef9ea275bf222cc4788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_87b2c26ef1779b219eb7f88ae0393da3960cfe12f621cef9ea275bf222cc4788->leave($__internal_87b2c26ef1779b219eb7f88ae0393da3960cfe12f621cef9ea275bf222cc4788_prof);

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
