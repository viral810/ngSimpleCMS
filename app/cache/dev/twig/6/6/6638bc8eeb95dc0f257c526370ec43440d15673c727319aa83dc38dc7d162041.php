<?php

/* SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_6638bc8eeb95dc0f257c526370ec43440d15673c727319aa83dc38dc7d162041 extends Twig_Template
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
        $__internal_fc67dfd21e0be8e51f27bd17ad15a94a1d6b5e79d456ccf6e25a9526ae4065af = $this->env->getExtension("native_profiler");
        $__internal_fc67dfd21e0be8e51f27bd17ad15a94a1d6b5e79d456ccf6e25a9526ae4065af->enter($__internal_fc67dfd21e0be8e51f27bd17ad15a94a1d6b5e79d456ccf6e25a9526ae4065af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc67dfd21e0be8e51f27bd17ad15a94a1d6b5e79d456ccf6e25a9526ae4065af->leave($__internal_fc67dfd21e0be8e51f27bd17ad15a94a1d6b5e79d456ccf6e25a9526ae4065af_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_1b6e2cbdd027842dbbe3d8f100c820df9f4e9165c173ae45199c9fdb113d450d = $this->env->getExtension("native_profiler");
        $__internal_1b6e2cbdd027842dbbe3d8f100c820df9f4e9165c173ae45199c9fdb113d450d->enter($__internal_1b6e2cbdd027842dbbe3d8f100c820df9f4e9165c173ae45199c9fdb113d450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

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
        
        $__internal_1b6e2cbdd027842dbbe3d8f100c820df9f4e9165c173ae45199c9fdb113d450d->leave($__internal_1b6e2cbdd027842dbbe3d8f100c820df9f4e9165c173ae45199c9fdb113d450d_prof);

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
