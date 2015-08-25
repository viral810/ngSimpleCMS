<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_04abe64051e03442169e7dc1bdfbb47b85854fde4bb60f3f9227b6c100ab9f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_426a430a2b0ae2ff2e263f7b0b0ff0a5d962e8fcd919ae143c7548984e5163f5 = $this->env->getExtension("native_profiler");
        $__internal_426a430a2b0ae2ff2e263f7b0b0ff0a5d962e8fcd919ae143c7548984e5163f5->enter($__internal_426a430a2b0ae2ff2e263f7b0b0ff0a5d962e8fcd919ae143c7548984e5163f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_426a430a2b0ae2ff2e263f7b0b0ff0a5d962e8fcd919ae143c7548984e5163f5->leave($__internal_426a430a2b0ae2ff2e263f7b0b0ff0a5d962e8fcd919ae143c7548984e5163f5_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_50b2523700d01da4c71a238febcc7233c109c07f4eb04b70f370b6c64c319a17 = $this->env->getExtension("native_profiler");
        $__internal_50b2523700d01da4c71a238febcc7233c109c07f4eb04b70f370b6c64c319a17->enter($__internal_50b2523700d01da4c71a238febcc7233c109c07f4eb04b70f370b6c64c319a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_50b2523700d01da4c71a238febcc7233c109c07f4eb04b70f370b6c64c319a17->leave($__internal_50b2523700d01da4c71a238febcc7233c109c07f4eb04b70f370b6c64c319a17_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_cd0bca3d1d7e90d9be3f607c950ad743307f9fe39774f6573c19b287ff857dcc = $this->env->getExtension("native_profiler");
        $__internal_cd0bca3d1d7e90d9be3f607c950ad743307f9fe39774f6573c19b287ff857dcc->enter($__internal_cd0bca3d1d7e90d9be3f607c950ad743307f9fe39774f6573c19b287ff857dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_cd0bca3d1d7e90d9be3f607c950ad743307f9fe39774f6573c19b287ff857dcc->leave($__internal_cd0bca3d1d7e90d9be3f607c950ad743307f9fe39774f6573c19b287ff857dcc_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_5823338cf9c05477e7476f24de74a5635c0216a838962928027a90b190f6db37 = $this->env->getExtension("native_profiler");
        $__internal_5823338cf9c05477e7476f24de74a5635c0216a838962928027a90b190f6db37->enter($__internal_5823338cf9c05477e7476f24de74a5635c0216a838962928027a90b190f6db37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"form-control per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_5823338cf9c05477e7476f24de74a5635c0216a838962928027a90b190f6db37->leave($__internal_5823338cf9c05477e7476f24de74a5635c0216a838962928027a90b190f6db37_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 23,  81 => 22,  73 => 19,  70 => 18,  64 => 17,  51 => 13,  45 => 12,  38 => 22,  35 => 21,  33 => 17,  30 => 16,  28 => 12,  25 => 11,);
    }
}
