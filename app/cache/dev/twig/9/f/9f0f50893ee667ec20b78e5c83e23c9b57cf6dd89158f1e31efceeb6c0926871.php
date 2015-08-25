<?php

/* SonataDoctrinePHPCRAdminBundle:Tree:tree.html.twig */
class __TwigTemplate_9f0f50893ee667ec20b78e5c83e23c9b57cf6dd89158f1e31efceeb6c0926871 extends Twig_Template
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
        $__internal_4e0f1ab6a8f6d9a11396755798881811704ecfe1743c2559a4e9f01d584f8332 = $this->env->getExtension("native_profiler");
        $__internal_4e0f1ab6a8f6d9a11396755798881811704ecfe1743c2559a4e9f01d584f8332->enter($__internal_4e0f1ab6a8f6d9a11396755798881811704ecfe1743c2559a4e9f01d584f8332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Tree:tree.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("CmfTreeBrowserBundle:Base:tree.html.twig", "SonataDoctrinePHPCRAdminBundle:Tree:tree.html.twig", 12)->display($context);
        // line 13
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        var treeState = AdminTree.generateTreeStateArray(\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["selected_node"]) ? $context["selected_node"] : $this->getContext($context, "selected_node")), "html", null, true);
        echo "\");
        var defaults = ";
        // line 16
        $this->loadTemplate("SonataDoctrinePHPCRAdminBundle:Tree:routing_defaults.html.twig", "SonataDoctrinePHPCRAdminBundle:Tree:tree.html.twig", 16)->display(array_merge($context, array("routing_defaults" => (isset($context["routing_defaults"]) ? $context["routing_defaults"] : $this->getContext($context, "routing_defaults")))));
        echo ";

        AdminTree.initTree({
            \"selector\": \"#tree\",
            \"rootNode\": \"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["root_node"]) ? $context["root_node"] : $this->getContext($context, "root_node")), "html", null, true);
        echo "\",
            \"selected\": \"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["selected_node"]) ? $context["selected_node"] : $this->getContext($context, "selected_node")), "html", null, true);
        echo "\",
            \"labels\": ";
        // line 22
        echo twig_jsonencode_filter($this->getAttribute((isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "labels", array()));
        echo ",
            \"ajax\": {
                \"children_url\": Routing.generate(\"_cmf_tree_";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "alias", array()), "html", null, true);
        echo "_children\", defaults),
                \"move_url\": Routing.generate(\"_cmf_tree_";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "alias", array()), "html", null, true);
        echo "_move\", defaults),
                \"reorder_url\": Routing.generate(\"_cmf_tree_";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "alias", array()), "html", null, true);
        echo "_reorder\", defaults)
            },
            \"path\": {
                \"expanded\":     treeState,
                \"preloaded\":    treeState
            },
            \"types\": ";
        // line 32
        echo twig_jsonencode_filter($this->getAttribute((isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "nodeTypes", array()));
        echo ",

            \"routing_defaults\": defaults,
            \"createInOverlay\": \"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["create_in_overlay"]) ? $context["create_in_overlay"] : $this->getContext($context, "create_in_overlay")), "html", null, true);
        echo "\",
            \"editInOverlay\": \"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["edit_in_overlay"]) ? $context["edit_in_overlay"] : $this->getContext($context, "edit_in_overlay")), "html", null, true);
        echo "\",
            \"deleteInOverlay\": \"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["delete_in_overlay"]) ? $context["delete_in_overlay"] : $this->getContext($context, "delete_in_overlay")), "html", null, true);
        echo "\"
        });

        ";
        // line 40
        if ((array_key_exists("confirm_move", $context) && (isset($context["confirm_move"]) ? $context["confirm_move"] : $this->getContext($context, "confirm_move")))) {
            // line 41
            echo "            \$('#tree').on('cmf_tree.move', function(e) {
                if (!confirm('";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_move_node", array(), "SonataDoctrinePHPCRAdmin"), "html", null, true);
            echo "')) {
                    e.preventDefault();
                }
            });
        ";
        }
        // line 47
        echo "    });
</script>

<div id=\"tree\"></div>
";
        
        $__internal_4e0f1ab6a8f6d9a11396755798881811704ecfe1743c2559a4e9f01d584f8332->leave($__internal_4e0f1ab6a8f6d9a11396755798881811704ecfe1743c2559a4e9f01d584f8332_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrinePHPCRAdminBundle:Tree:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  97 => 42,  94 => 41,  92 => 40,  86 => 37,  82 => 36,  78 => 35,  72 => 32,  63 => 26,  59 => 25,  55 => 24,  50 => 22,  46 => 21,  42 => 20,  35 => 16,  31 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }
}
