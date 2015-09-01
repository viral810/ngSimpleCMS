<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_da9425d718854a2546adf04fb5caf08909250690eeadf1442b46026aaa2f06f8 extends Twig_Template
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
        $__internal_f9ef33f81ece1ee1425c17933604cf58ed51098b31c0d7e2b22ddb5199770178 = $this->env->getExtension("native_profiler");
        $__internal_f9ef33f81ece1ee1425c17933604cf58ed51098b31c0d7e2b22ddb5199770178->enter($__internal_f9ef33f81ece1ee1425c17933604cf58ed51098b31c0d7e2b22ddb5199770178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 37
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 37);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ef33f81ece1ee1425c17933604cf58ed51098b31c0d7e2b22ddb5199770178->leave($__internal_f9ef33f81ece1ee1425c17933604cf58ed51098b31c0d7e2b22ddb5199770178_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_17134a2d32d1e8408654f88a8b1c9fa428ad5804cb45e6062b8b4a2370d1d7b3 = $this->env->getExtension("native_profiler");
        $__internal_17134a2d32d1e8408654f88a8b1c9fa428ad5804cb45e6062b8b4a2370d1d7b3->enter($__internal_17134a2d32d1e8408654f88a8b1c9fa428ad5804cb45e6062b8b4a2370d1d7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_17134a2d32d1e8408654f88a8b1c9fa428ad5804cb45e6062b8b4a2370d1d7b3->leave($__internal_17134a2d32d1e8408654f88a8b1c9fa428ad5804cb45e6062b8b4a2370d1d7b3_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_370e4d28a8c14ac04470ab7c735e1ee39ef79835a6b48c86869c579b9f933d42 = $this->env->getExtension("native_profiler");
        $__internal_370e4d28a8c14ac04470ab7c735e1ee39ef79835a6b48c86869c579b9f933d42->enter($__internal_370e4d28a8c14ac04470ab7c735e1ee39ef79835a6b48c86869c579b9f933d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_370e4d28a8c14ac04470ab7c735e1ee39ef79835a6b48c86869c579b9f933d42->leave($__internal_370e4d28a8c14ac04470ab7c735e1ee39ef79835a6b48c86869c579b9f933d42_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2c9e368d56dadfd6109d573b3d232a71a6ef32e211e594251a14ebbdc08b230f = $this->env->getExtension("native_profiler");
        $__internal_2c9e368d56dadfd6109d573b3d232a71a6ef32e211e594251a14ebbdc08b230f->enter($__internal_2c9e368d56dadfd6109d573b3d232a71a6ef32e211e594251a14ebbdc08b230f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

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
        
        $__internal_2c9e368d56dadfd6109d573b3d232a71a6ef32e211e594251a14ebbdc08b230f->leave($__internal_2c9e368d56dadfd6109d573b3d232a71a6ef32e211e594251a14ebbdc08b230f_prof);

    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b77cb3cccf196d00893c4539ecd394f0796f3fa260f7b7f403febfe935662f9c = $this->env->getExtension("native_profiler");
        $__internal_b77cb3cccf196d00893c4539ecd394f0796f3fa260f7b7f403febfe935662f9c->enter($__internal_b77cb3cccf196d00893c4539ecd394f0796f3fa260f7b7f403febfe935662f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_b77cb3cccf196d00893c4539ecd394f0796f3fa260f7b7f403febfe935662f9c->leave($__internal_b77cb3cccf196d00893c4539ecd394f0796f3fa260f7b7f403febfe935662f9c_prof);

    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        $__internal_1165f131b7b8675d8bb42a58c242a7e82d4df6d862afcf30d9f7bffd74e1646a = $this->env->getExtension("native_profiler");
        $__internal_1165f131b7b8675d8bb42a58c242a7e82d4df6d862afcf30d9f7bffd74e1646a->enter($__internal_1165f131b7b8675d8bb42a58c242a7e82d4df6d862afcf30d9f7bffd74e1646a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_1165f131b7b8675d8bb42a58c242a7e82d4df6d862afcf30d9f7bffd74e1646a->leave($__internal_1165f131b7b8675d8bb42a58c242a7e82d4df6d862afcf30d9f7bffd74e1646a_prof);

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
