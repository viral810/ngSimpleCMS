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
        $__internal_08f1e833bf5c9763538e9c072f92e47d21030fad2a02c298e15189f0f1a2f332 = $this->env->getExtension("native_profiler");
        $__internal_08f1e833bf5c9763538e9c072f92e47d21030fad2a02c298e15189f0f1a2f332->enter($__internal_08f1e833bf5c9763538e9c072f92e47d21030fad2a02c298e15189f0f1a2f332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_08f1e833bf5c9763538e9c072f92e47d21030fad2a02c298e15189f0f1a2f332->leave($__internal_08f1e833bf5c9763538e9c072f92e47d21030fad2a02c298e15189f0f1a2f332_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_583df8dbfa4c2e1b63d9302f807765f1d703990b0fe628db70e0c1299fe3dc7e = $this->env->getExtension("native_profiler");
        $__internal_583df8dbfa4c2e1b63d9302f807765f1d703990b0fe628db70e0c1299fe3dc7e->enter($__internal_583df8dbfa4c2e1b63d9302f807765f1d703990b0fe628db70e0c1299fe3dc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_583df8dbfa4c2e1b63d9302f807765f1d703990b0fe628db70e0c1299fe3dc7e->leave($__internal_583df8dbfa4c2e1b63d9302f807765f1d703990b0fe628db70e0c1299fe3dc7e_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_9436fcb9877610445a2a4c928a76cf215d761f38e30ca4c045f140af964cd21e = $this->env->getExtension("native_profiler");
        $__internal_9436fcb9877610445a2a4c928a76cf215d761f38e30ca4c045f140af964cd21e->enter($__internal_9436fcb9877610445a2a4c928a76cf215d761f38e30ca4c045f140af964cd21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_9436fcb9877610445a2a4c928a76cf215d761f38e30ca4c045f140af964cd21e->leave($__internal_9436fcb9877610445a2a4c928a76cf215d761f38e30ca4c045f140af964cd21e_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_d03669a093c3a3d3c742e7b6b99d6086537a84c858f26c24d9d07af12afcf558 = $this->env->getExtension("native_profiler");
        $__internal_d03669a093c3a3d3c742e7b6b99d6086537a84c858f26c24d9d07af12afcf558->enter($__internal_d03669a093c3a3d3c742e7b6b99d6086537a84c858f26c24d9d07af12afcf558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_d03669a093c3a3d3c742e7b6b99d6086537a84c858f26c24d9d07af12afcf558->leave($__internal_d03669a093c3a3d3c742e7b6b99d6086537a84c858f26c24d9d07af12afcf558_prof);

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
