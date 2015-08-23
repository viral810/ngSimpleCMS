<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_d21233e36a25a1ac25b2e18a78e5fd6791526558b97a6717a0d6c4ca0d10aa49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 36);
        // line 36
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa339890776c482238762908302b90291af2cf9d29c855b7d96029b9d6eaa697 = $this->env->getExtension("native_profiler");
        $__internal_fa339890776c482238762908302b90291af2cf9d29c855b7d96029b9d6eaa697->enter($__internal_fa339890776c482238762908302b90291af2cf9d29c855b7d96029b9d6eaa697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 37
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 37);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa339890776c482238762908302b90291af2cf9d29c855b7d96029b9d6eaa697->leave($__internal_fa339890776c482238762908302b90291af2cf9d29c855b7d96029b9d6eaa697_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_63d0cf6c34b1b302228ec3f0b540df610ad7802e7c339a83bd3d9131159cd460 = $this->env->getExtension("native_profiler");
        $__internal_63d0cf6c34b1b302228ec3f0b540df610ad7802e7c339a83bd3d9131159cd460->enter($__internal_63d0cf6c34b1b302228ec3f0b540df610ad7802e7c339a83bd3d9131159cd460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_63d0cf6c34b1b302228ec3f0b540df610ad7802e7c339a83bd3d9131159cd460->leave($__internal_63d0cf6c34b1b302228ec3f0b540df610ad7802e7c339a83bd3d9131159cd460_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_9fac08127efae8b34f0d4044a32fb694ebf9cab6d4f8c3cb1ed248e5cd31958a = $this->env->getExtension("native_profiler");
        $__internal_9fac08127efae8b34f0d4044a32fb694ebf9cab6d4f8c3cb1ed248e5cd31958a->enter($__internal_9fac08127efae8b34f0d4044a32fb694ebf9cab6d4f8c3cb1ed248e5cd31958a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9fac08127efae8b34f0d4044a32fb694ebf9cab6d4f8c3cb1ed248e5cd31958a->leave($__internal_9fac08127efae8b34f0d4044a32fb694ebf9cab6d4f8c3cb1ed248e5cd31958a_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b10e7c8deb6429f74d669c237b90595cbdac3bdb6d1a945bb10cb826be01fd6b = $this->env->getExtension("native_profiler");
        $__internal_b10e7c8deb6429f74d669c237b90595cbdac3bdb6d1a945bb10cb826be01fd6b->enter($__internal_b10e7c8deb6429f74d669c237b90595cbdac3bdb6d1a945bb10cb826be01fd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        echo "</li>
    <li>";
        // line 28
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        echo "</li>
    <li>";
        // line 29
        $this->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 29)->display($context);
        echo "</li>
    <li>";
        // line 30
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 30)->display($context);
        echo "</li>
    <li>";
        // line 31
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 31)->display($context);
        echo "</li>
";
        
        $__internal_b10e7c8deb6429f74d669c237b90595cbdac3bdb6d1a945bb10cb826be01fd6b->leave($__internal_b10e7c8deb6429f74d669c237b90595cbdac3bdb6d1a945bb10cb826be01fd6b_prof);

    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_00309a9080ac37aa7bae90f1da582426e0c52d603d2ca28b2bf9053adf24c161 = $this->env->getExtension("native_profiler");
        $__internal_00309a9080ac37aa7bae90f1da582426e0c52d603d2ca28b2bf9053adf24c161->enter($__internal_00309a9080ac37aa7bae90f1da582426e0c52d603d2ca28b2bf9053adf24c161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_00309a9080ac37aa7bae90f1da582426e0c52d603d2ca28b2bf9053adf24c161->leave($__internal_00309a9080ac37aa7bae90f1da582426e0c52d603d2ca28b2bf9053adf24c161_prof);

    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        $__internal_d24136747de9966bc791835709bf5fc9e26274caaf1d3e243e2bbe6afe51e672 = $this->env->getExtension("native_profiler");
        $__internal_d24136747de9966bc791835709bf5fc9e26274caaf1d3e243e2bbe6afe51e672->enter($__internal_d24136747de9966bc791835709bf5fc9e26274caaf1d3e243e2bbe6afe51e672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_d24136747de9966bc791835709bf5fc9e26274caaf1d3e243e2bbe6afe51e672->leave($__internal_d24136747de9966bc791835709bf5fc9e26274caaf1d3e243e2bbe6afe51e672_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 39,  132 => 34,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 37,  40 => 12,  12 => 36,);
    }
}
