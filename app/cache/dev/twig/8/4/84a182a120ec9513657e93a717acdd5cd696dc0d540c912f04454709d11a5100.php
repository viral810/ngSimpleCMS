<?php

/* SonataDoctrinePHPCRAdminBundle:Block:tree.html.twig */
class __TwigTemplate_84a182a120ec9513657e93a717acdd5cd696dc0d540c912f04454709d11a5100 extends Twig_Template
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
        $__internal_8dd826596eaeea00be743e8a52e682f389931b3aded6a16f767015e667536d9b = $this->env->getExtension("native_profiler");
        $__internal_8dd826596eaeea00be743e8a52e682f389931b3aded6a16f767015e667536d9b->enter($__internal_8dd826596eaeea00be743e8a52e682f389931b3aded6a16f767015e667536d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Block:tree.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd826596eaeea00be743e8a52e682f389931b3aded6a16f767015e667536d9b->leave($__internal_8dd826596eaeea00be743e8a52e682f389931b3aded6a16f767015e667536d9b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f6738fce04d04d2193e2fc86307a1042eddbceb7d261e332319142f5bc4a54a6 = $this->env->getExtension("native_profiler");
        $__internal_f6738fce04d04d2193e2fc86307a1042eddbceb7d261e332319142f5bc4a54a6->enter($__internal_f6738fce04d04d2193e2fc86307a1042eddbceb7d261e332319142f5bc4a54a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_f6738fce04d04d2193e2fc86307a1042eddbceb7d261e332319142f5bc4a54a6->leave($__internal_f6738fce04d04d2193e2fc86307a1042eddbceb7d261e332319142f5bc4a54a6_prof);

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
