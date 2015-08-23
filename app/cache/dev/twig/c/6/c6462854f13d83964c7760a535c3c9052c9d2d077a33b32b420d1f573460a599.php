<?php

/* SonataDoctrinePHPCRAdminBundle:Block:tree.html.twig */
class __TwigTemplate_c6462854f13d83964c7760a535c3c9052c9d2d077a33b32b420d1f573460a599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataDoctrinePHPCRAdminBundle:Block:tree.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33ae212043f77c254fbe11f7f7816de90f444eb4aa7a37d278ae664a80c66542 = $this->env->getExtension("native_profiler");
        $__internal_33ae212043f77c254fbe11f7f7816de90f444eb4aa7a37d278ae664a80c66542->enter($__internal_33ae212043f77c254fbe11f7f7816de90f444eb4aa7a37d278ae664a80c66542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Block:tree.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ae212043f77c254fbe11f7f7816de90f444eb4aa7a37d278ae664a80c66542->leave($__internal_33ae212043f77c254fbe11f7f7816de90f444eb4aa7a37d278ae664a80c66542_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_cc3bb8dcc113bea2d519d66e41c12125e5cbb983fd4f69319fc5fa352176e402 = $this->env->getExtension("native_profiler");
        $__internal_cc3bb8dcc113bea2d519d66e41c12125e5cbb983fd4f69319fc5fa352176e402->enter($__internal_cc3bb8dcc113bea2d519d66e41c12125e5cbb983fd4f69319fc5fa352176e402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("content_tree", array(), "SonataDoctrinePHPCRAdmin"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 20
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("sonata.admin.doctrine_phpcr.tree_controller:treeAction", array("root" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "id", array()), "selected" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "selected", array()))), array());
        // line 21
        echo "        </div>
    </div>
";
        
        $__internal_cc3bb8dcc113bea2d519d66e41c12125e5cbb983fd4f69319fc5fa352176e402->leave($__internal_cc3bb8dcc113bea2d519d66e41c12125e5cbb983fd4f69319fc5fa352176e402_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrinePHPCRAdminBundle:Block:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 21,  49 => 20,  43 => 17,  39 => 15,  33 => 14,  18 => 12,);
    }
}
