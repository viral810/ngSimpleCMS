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
        $__internal_dd992f9a95015fec6e559153dea0f643f52cc7e83de22b4ee13cf45c34541115 = $this->env->getExtension("native_profiler");
        $__internal_dd992f9a95015fec6e559153dea0f643f52cc7e83de22b4ee13cf45c34541115->enter($__internal_dd992f9a95015fec6e559153dea0f643f52cc7e83de22b4ee13cf45c34541115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd992f9a95015fec6e559153dea0f643f52cc7e83de22b4ee13cf45c34541115->leave($__internal_dd992f9a95015fec6e559153dea0f643f52cc7e83de22b4ee13cf45c34541115_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_9d01b0aeb1a03375bb3fd2016c92279e2f19bbc036edaf1677a65a23eb8671f2 = $this->env->getExtension("native_profiler");
        $__internal_9d01b0aeb1a03375bb3fd2016c92279e2f19bbc036edaf1677a65a23eb8671f2->enter($__internal_9d01b0aeb1a03375bb3fd2016c92279e2f19bbc036edaf1677a65a23eb8671f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

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
        
        $__internal_9d01b0aeb1a03375bb3fd2016c92279e2f19bbc036edaf1677a65a23eb8671f2->leave($__internal_9d01b0aeb1a03375bb3fd2016c92279e2f19bbc036edaf1677a65a23eb8671f2_prof);

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
