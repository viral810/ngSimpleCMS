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
        $__internal_c0edbe9780c237989fde392cec66c9b5581d5162cd7019f70c5268395d33d104 = $this->env->getExtension("native_profiler");
        $__internal_c0edbe9780c237989fde392cec66c9b5581d5162cd7019f70c5268395d33d104->enter($__internal_c0edbe9780c237989fde392cec66c9b5581d5162cd7019f70c5268395d33d104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0edbe9780c237989fde392cec66c9b5581d5162cd7019f70c5268395d33d104->leave($__internal_c0edbe9780c237989fde392cec66c9b5581d5162cd7019f70c5268395d33d104_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c3b78409723224ba8f373d0fe625db4a14b98ccfb5dce8df7517431c5c8e1ea = $this->env->getExtension("native_profiler");
        $__internal_6c3b78409723224ba8f373d0fe625db4a14b98ccfb5dce8df7517431c5c8e1ea->enter($__internal_6c3b78409723224ba8f373d0fe625db4a14b98ccfb5dce8df7517431c5c8e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c3b78409723224ba8f373d0fe625db4a14b98ccfb5dce8df7517431c5c8e1ea->leave($__internal_6c3b78409723224ba8f373d0fe625db4a14b98ccfb5dce8df7517431c5c8e1ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e69d09680a5d9671b78726f2d2182df2bd786bc47e4a5202c89a6987350e0bcd = $this->env->getExtension("native_profiler");
        $__internal_e69d09680a5d9671b78726f2d2182df2bd786bc47e4a5202c89a6987350e0bcd->enter($__internal_e69d09680a5d9671b78726f2d2182df2bd786bc47e4a5202c89a6987350e0bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e69d09680a5d9671b78726f2d2182df2bd786bc47e4a5202c89a6987350e0bcd->leave($__internal_e69d09680a5d9671b78726f2d2182df2bd786bc47e4a5202c89a6987350e0bcd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e37fd80559c65dc742327bb958ffad0de8fa69c71d5a9598f430e32c7f7748a = $this->env->getExtension("native_profiler");
        $__internal_9e37fd80559c65dc742327bb958ffad0de8fa69c71d5a9598f430e32c7f7748a->enter($__internal_9e37fd80559c65dc742327bb958ffad0de8fa69c71d5a9598f430e32c7f7748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9e37fd80559c65dc742327bb958ffad0de8fa69c71d5a9598f430e32c7f7748a->leave($__internal_9e37fd80559c65dc742327bb958ffad0de8fa69c71d5a9598f430e32c7f7748a_prof);

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
