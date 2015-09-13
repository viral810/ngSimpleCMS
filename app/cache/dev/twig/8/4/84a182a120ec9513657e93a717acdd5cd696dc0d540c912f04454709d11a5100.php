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
        $__internal_d7860b241aa442c6d37968c3d98ad5f89895f5c96992f9b7882f365068fa4585 = $this->env->getExtension("native_profiler");
        $__internal_d7860b241aa442c6d37968c3d98ad5f89895f5c96992f9b7882f365068fa4585->enter($__internal_d7860b241aa442c6d37968c3d98ad5f89895f5c96992f9b7882f365068fa4585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Block:tree.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7860b241aa442c6d37968c3d98ad5f89895f5c96992f9b7882f365068fa4585->leave($__internal_d7860b241aa442c6d37968c3d98ad5f89895f5c96992f9b7882f365068fa4585_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_16102e28c8b0c60a378fe670e1fe336054e83a56aa6e6f0ee5e8a2c523db90af = $this->env->getExtension("native_profiler");
        $__internal_16102e28c8b0c60a378fe670e1fe336054e83a56aa6e6f0ee5e8a2c523db90af->enter($__internal_16102e28c8b0c60a378fe670e1fe336054e83a56aa6e6f0ee5e8a2c523db90af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_16102e28c8b0c60a378fe670e1fe336054e83a56aa6e6f0ee5e8a2c523db90af->leave($__internal_16102e28c8b0c60a378fe670e1fe336054e83a56aa6e6f0ee5e8a2c523db90af_prof);

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
