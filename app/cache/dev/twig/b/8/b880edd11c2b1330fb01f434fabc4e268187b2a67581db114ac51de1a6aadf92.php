<?php

/* AcmeBasicCmsBundle:Default:page.html.twig */
class __TwigTemplate_b880edd11c2b1330fb01f434fabc4e268187b2a67581db114ac51de1a6aadf92 extends Twig_Template
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
        $__internal_fc3bc142f30acbf05a655f47beca82e44d2dede2c945c85ad7edf2a7f9654992 = $this->env->getExtension("native_profiler");
        $__internal_fc3bc142f30acbf05a655f47beca82e44d2dede2c945c85ad7edf2a7f9654992->enter($__internal_fc3bc142f30acbf05a655f47beca82e44d2dede2c945c85ad7edf2a7f9654992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBasicCmsBundle:Default:page.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</h1>
";
        // line 2
        echo $this->env->getExtension('knp_menu')->render("Main");
        echo "
<p>";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "</p>
<h2>Our Blog Posts</h2>
<ul>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath($context["post"]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
";
        
        $__internal_fc3bc142f30acbf05a655f47beca82e44d2dede2c945c85ad7edf2a7f9654992->leave($__internal_fc3bc142f30acbf05a655f47beca82e44d2dede2c945c85ad7edf2a7f9654992_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBasicCmsBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  41 => 7,  37 => 6,  31 => 3,  27 => 2,  22 => 1,);
    }
}
