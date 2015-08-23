<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_eb4998531fa43b66d96c5e494756912441233b1a7066cfcd5ca1866e3385c6ad extends Twig_Template
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
        $__internal_775bc643eeee773cf4fb945d89b63379013bf172e1775bb75087175ce982b12d = $this->env->getExtension("native_profiler");
        $__internal_775bc643eeee773cf4fb945d89b63379013bf172e1775bb75087175ce982b12d->enter($__internal_775bc643eeee773cf4fb945d89b63379013bf172e1775bb75087175ce982b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_775bc643eeee773cf4fb945d89b63379013bf172e1775bb75087175ce982b12d->leave($__internal_775bc643eeee773cf4fb945d89b63379013bf172e1775bb75087175ce982b12d_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_c856febf7af01a69e9aa40b0cdabff8694d5ffa9d4fa187a9a8f4f76829c429c = $this->env->getExtension("native_profiler");
        $__internal_c856febf7af01a69e9aa40b0cdabff8694d5ffa9d4fa187a9a8f4f76829c429c->enter($__internal_c856febf7af01a69e9aa40b0cdabff8694d5ffa9d4fa187a9a8f4f76829c429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_c856febf7af01a69e9aa40b0cdabff8694d5ffa9d4fa187a9a8f4f76829c429c->leave($__internal_c856febf7af01a69e9aa40b0cdabff8694d5ffa9d4fa187a9a8f4f76829c429c_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_f1b80277594b00ce400411e8681c29fc4097041bb0da73628a5e8afc42158d43 = $this->env->getExtension("native_profiler");
        $__internal_f1b80277594b00ce400411e8681c29fc4097041bb0da73628a5e8afc42158d43->enter($__internal_f1b80277594b00ce400411e8681c29fc4097041bb0da73628a5e8afc42158d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_f1b80277594b00ce400411e8681c29fc4097041bb0da73628a5e8afc42158d43->leave($__internal_f1b80277594b00ce400411e8681c29fc4097041bb0da73628a5e8afc42158d43_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_3209164980e8d4de20dbe656e49a19913f3f235be4a04dcbe90f98bf2d8e7176 = $this->env->getExtension("native_profiler");
        $__internal_3209164980e8d4de20dbe656e49a19913f3f235be4a04dcbe90f98bf2d8e7176->enter($__internal_3209164980e8d4de20dbe656e49a19913f3f235be4a04dcbe90f98bf2d8e7176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_3209164980e8d4de20dbe656e49a19913f3f235be4a04dcbe90f98bf2d8e7176->leave($__internal_3209164980e8d4de20dbe656e49a19913f3f235be4a04dcbe90f98bf2d8e7176_prof);

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
