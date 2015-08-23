<?php

/* CmfTreeBrowserBundle:Base:tree.html.twig */
class __TwigTemplate_40e72a3d728a73fed69df47b1860f2442b51160b8bfccfe055026b7beb5d2947 extends Twig_Template
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
        $__internal_7f13a7ea61fbc19b4e20a7a8190b501d90373ebfc70221c935520120207c77f2 = $this->env->getExtension("native_profiler");
        $__internal_7f13a7ea61fbc19b4e20a7a8190b501d90373ebfc70221c935520120207c77f2->enter($__internal_7f13a7ea61fbc19b4e20a7a8190b501d90373ebfc70221c935520120207c77f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CmfTreeBrowserBundle:Base:tree.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cmftreebrowser/js/jquery.jstree.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cmftreebrowser/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cmftreebrowser/js/admin_tree.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cmftreebrowser/js/select_tree.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cmftreebrowser/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
";
        
        $__internal_7f13a7ea61fbc19b4e20a7a8190b501d90373ebfc70221c935520120207c77f2->leave($__internal_7f13a7ea61fbc19b4e20a7a8190b501d90373ebfc70221c935520120207c77f2_prof);

    }

    public function getTemplateName()
    {
        return "CmfTreeBrowserBundle:Base:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  45 => 8,  41 => 7,  36 => 5,  32 => 4,  27 => 2,  22 => 1,);
    }
}
