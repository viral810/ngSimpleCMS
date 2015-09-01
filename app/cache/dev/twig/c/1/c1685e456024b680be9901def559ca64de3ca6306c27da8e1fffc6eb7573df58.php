<?php

/* SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_c1685e456024b680be9901def559ca64de3ca6306c27da8e1fffc6eb7573df58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d219e17c9db101e4e381ad7aeee794f1a3d127565b2ff63436e7ec4ac58ff28 = $this->env->getExtension("native_profiler");
        $__internal_5d219e17c9db101e4e381ad7aeee794f1a3d127565b2ff63436e7ec4ac58ff28->enter($__internal_5d219e17c9db101e4e381ad7aeee794f1a3d127565b2ff63436e7ec4ac58ff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d219e17c9db101e4e381ad7aeee794f1a3d127565b2ff63436e7ec4ac58ff28->leave($__internal_5d219e17c9db101e4e381ad7aeee794f1a3d127565b2ff63436e7ec4ac58ff28_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_daf3fa30fa01d441804369c0c3b6792ae5f28d16d705b48319251ca71b8001fc = $this->env->getExtension("native_profiler");
        $__internal_daf3fa30fa01d441804369c0c3b6792ae5f28d16d705b48319251ca71b8001fc->enter($__internal_daf3fa30fa01d441804369c0c3b6792ae5f28d16d705b48319251ca71b8001fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_results_count_prefix", array(), "SonataDoctrinePHPCRAdmin"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_daf3fa30fa01d441804369c0c3b6792ae5f28d16d705b48319251ca71b8001fc->leave($__internal_daf3fa30fa01d441804369c0c3b6792ae5f28d16d705b48319251ca71b8001fc_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  49 => 18,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
