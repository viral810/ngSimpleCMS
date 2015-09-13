<?php

/* AcmeBackendBundle::standard_layout.html.twig */
class __TwigTemplate_de791668fec675af5b9f14fc3cf89c3e09edd78ab7b157b7bd5206715382a436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a122a8f4366e98b1c7d43e9720dc01760f15f42cd20a59dfd5ff563b559a9d4b = $this->env->getExtension("native_profiler");
        $__internal_a122a8f4366e98b1c7d43e9720dc01760f15f42cd20a59dfd5ff563b559a9d4b->enter($__internal_a122a8f4366e98b1c7d43e9720dc01760f15f42cd20a59dfd5ff563b559a9d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBackendBundle::standard_layout.html.twig"));

        // line 7
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 8
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 9
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 10
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 11
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 12
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 13
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 14
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 15
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 16
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 17
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 18
        echo "<!DOCTYPE html>
<html ";
        // line 19
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
<head>
    ";
        // line 21
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
    <title>
        ";
        // line 64
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 84
        echo "    </title>
</head>
<body ";
        // line 86
        $this->displayBlock('body_attributes', $context, $blocks);
        echo " ng-app=\"myCMS\">
";
        // line 87
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 171
        echo "<div ng-controller=\"AdminCtrl\">
    <div ng-view></div>
</div>
";
        // line 174
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 331
        echo "</body>
</html>
";
        
        $__internal_a122a8f4366e98b1c7d43e9720dc01760f15f42cd20a59dfd5ff563b559a9d4b->leave($__internal_a122a8f4366e98b1c7d43e9720dc01760f15f42cd20a59dfd5ff563b559a9d4b_prof);

    }

    // line 19
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_0ab0ecbaf728e552dcec5fedde3a1025ab8d82881d326306dc85d400ad63a881 = $this->env->getExtension("native_profiler");
        $__internal_0ab0ecbaf728e552dcec5fedde3a1025ab8d82881d326306dc85d400ad63a881->enter($__internal_0ab0ecbaf728e552dcec5fedde3a1025ab8d82881d326306dc85d400ad63a881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_0ab0ecbaf728e552dcec5fedde3a1025ab8d82881d326306dc85d400ad63a881->leave($__internal_0ab0ecbaf728e552dcec5fedde3a1025ab8d82881d326306dc85d400ad63a881_prof);

    }

    // line 21
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_f4f738a9854b653f125a665fd0a752bf18a7a586ef076bcbd3d4c6a08e325967 = $this->env->getExtension("native_profiler");
        $__internal_f4f738a9854b653f125a665fd0a752bf18a7a586ef076bcbd3d4c6a08e325967->enter($__internal_f4f738a9854b653f125a665fd0a752bf18a7a586ef076bcbd3d4c6a08e325967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 22
        echo "        <meta charset=\"UTF-8\">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
        
        $__internal_f4f738a9854b653f125a665fd0a752bf18a7a586ef076bcbd3d4c6a08e325967->leave($__internal_f4f738a9854b653f125a665fd0a752bf18a7a586ef076bcbd3d4c6a08e325967_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d4d98e35ca4e17ba72aac2848289c89e8ef110061e1b184016d56aa43eae477 = $this->env->getExtension("native_profiler");
        $__internal_7d4d98e35ca4e17ba72aac2848289c89e8ef110061e1b184016d56aa43eae477->enter($__internal_7d4d98e35ca4e17ba72aac2848289c89e8ef110061e1b184016d56aa43eae477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 29
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        
        $__internal_7d4d98e35ca4e17ba72aac2848289c89e8ef110061e1b184016d56aa43eae477->leave($__internal_7d4d98e35ca4e17ba72aac2848289c89e8ef110061e1b184016d56aa43eae477_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99eaf223442790d8a674b335878ea6e117192afce28fbeb1aed9e575f5c8c6a2 = $this->env->getExtension("native_profiler");
        $__internal_99eaf223442790d8a674b335878ea6e117192afce28fbeb1aed9e575f5c8c6a2->enter($__internal_99eaf223442790d8a674b335878ea6e117192afce28fbeb1aed9e575f5c8c6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "        <script>
            window.SONATA_CONFIG = {
                CONFIRM_EXIT: ";
        // line 37
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_SELECT2: ";
        // line 38
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_ICHECK: ";
        // line 39
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 40
        echo "            };
            window.SONATA_TRANSLATIONS = {
                CONFIRM_EXIT:  '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
            };
        </script>

        ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 47
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        ";
        // line 51
        echo "        ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 52
            echo "        ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
            // line 53
            echo "        ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 54
            echo "
        ";
            // line 56
            echo "        ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 57
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonataadmin/vendor/select2/select2_locale_" . strtr((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
        ";
            }
            // line 59
            echo "        ";
        }
        // line 60
        echo "
    ";
        
        $__internal_99eaf223442790d8a674b335878ea6e117192afce28fbeb1aed9e575f5c8c6a2->leave($__internal_99eaf223442790d8a674b335878ea6e117192afce28fbeb1aed9e575f5c8c6a2_prof);

    }

    // line 64
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_02fab7a3b5356c33ac1b75d89f3d435edfd34e31b54cd7bea22b41045621a666 = $this->env->getExtension("native_profiler");
        $__internal_02fab7a3b5356c33ac1b75d89f3d435edfd34e31b54cd7bea22b41045621a666->enter($__internal_02fab7a3b5356c33ac1b75d89f3d435edfd34e31b54cd7bea22b41045621a666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 65
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 67
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 68
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 70
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 71
                echo "                    -
                    ";
                // line 72
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 73
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 74
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 75
                            echo "                                &gt;
                            ";
                        }
                        // line 77
                        echo "
                            ";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 80
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                ";
            }
            // line 82
            echo "            ";
        }
        // line 83
        echo "        ";
        
        $__internal_02fab7a3b5356c33ac1b75d89f3d435edfd34e31b54cd7bea22b41045621a666->leave($__internal_02fab7a3b5356c33ac1b75d89f3d435edfd34e31b54cd7bea22b41045621a666_prof);

    }

    // line 86
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_78d9c395473aa2b826a3fe4ba711218e7f77392057b1a3b49b9bff8f3de96819 = $this->env->getExtension("native_profiler");
        $__internal_78d9c395473aa2b826a3fe4ba711218e7f77392057b1a3b49b9bff8f3de96819->enter($__internal_78d9c395473aa2b826a3fe4ba711218e7f77392057b1a3b49b9bff8f3de96819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_78d9c395473aa2b826a3fe4ba711218e7f77392057b1a3b49b9bff8f3de96819->leave($__internal_78d9c395473aa2b826a3fe4ba711218e7f77392057b1a3b49b9bff8f3de96819_prof);

    }

    // line 87
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_f1e6507a40e5aa43ce0f66559765d3d091fda31c462977ebd7b6b54d9c1ed70b = $this->env->getExtension("native_profiler");
        $__internal_f1e6507a40e5aa43ce0f66559765d3d091fda31c462977ebd7b6b54d9c1ed70b->enter($__internal_f1e6507a40e5aa43ce0f66559765d3d091fda31c462977ebd7b6b54d9c1ed70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 88
        echo "    <header class=\"header\">
        ";
        // line 89
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 96
        echo "        ";
        $this->displayBlock('logo', $context, $blocks);
        // line 108
        echo "        ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 169
        echo "    </header>
";
        
        $__internal_f1e6507a40e5aa43ce0f66559765d3d091fda31c462977ebd7b6b54d9c1ed70b->leave($__internal_f1e6507a40e5aa43ce0f66559765d3d091fda31c462977ebd7b6b54d9c1ed70b_prof);

    }

    // line 89
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_645172919a2a0fd56f8a222c21a11f35a5501d4f22495d274b159ae177fa0395 = $this->env->getExtension("native_profiler");
        $__internal_645172919a2a0fd56f8a222c21a11f35a5501d4f22495d274b159ae177fa0395->enter($__internal_645172919a2a0fd56f8a222c21a11f35a5501d4f22495d274b159ae177fa0395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 90
        echo "            <noscript>
                <div class=\"noscript-warning\">
                    ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                </div>
            </noscript>
        ";
        
        $__internal_645172919a2a0fd56f8a222c21a11f35a5501d4f22495d274b159ae177fa0395->leave($__internal_645172919a2a0fd56f8a222c21a11f35a5501d4f22495d274b159ae177fa0395_prof);

    }

    // line 96
    public function block_logo($context, array $blocks = array())
    {
        $__internal_ca5250ffef069947130074c754f8bc5606586c42337830a7a7c732c2f4bad821 = $this->env->getExtension("native_profiler");
        $__internal_ca5250ffef069947130074c754f8bc5606586c42337830a7a7c732c2f4bad821->enter($__internal_ca5250ffef069947130074c754f8bc5606586c42337830a7a7c732c2f4bad821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 97
        echo "            ";
        ob_start();
        // line 98
        echo "                <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                    ";
        // line 99
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 100
            echo "                        ";
            // line 101
            echo "                    ";
        }
        // line 102
        echo "                    ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 103
            echo "                        <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                    ";
        }
        // line 105
        echo "                </a>
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 107
        echo "        ";
        
        $__internal_ca5250ffef069947130074c754f8bc5606586c42337830a7a7c732c2f4bad821->leave($__internal_ca5250ffef069947130074c754f8bc5606586c42337830a7a7c732c2f4bad821_prof);

    }

    // line 108
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_1c553ec23d65d3d564065d824357af6d85d04119e8ea54e80cbdf832462b0455 = $this->env->getExtension("native_profiler");
        $__internal_1c553ec23d65d3d564065d824357af6d85d04119e8ea54e80cbdf832462b0455->enter($__internal_1c553ec23d65d3d564065d824357af6d85d04119e8ea54e80cbdf832462b0455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 109
        echo "            ";
        if (array_key_exists("admin_pool", $context)) {
            // line 110
            echo "                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    <div class=\"navbar-left\">
                        ";
            // line 119
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 144
            echo "                    </div>

                    ";
            // line 146
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 166
            echo "                </nav>
            ";
        }
        // line 168
        echo "        ";
        
        $__internal_1c553ec23d65d3d564065d824357af6d85d04119e8ea54e80cbdf832462b0455->leave($__internal_1c553ec23d65d3d564065d824357af6d85d04119e8ea54e80cbdf832462b0455_prof);

    }

    // line 119
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_6d4393d2bba1e61fc66449a654966d94b4f0da6377e4f6b183eb63cdd6a43eec = $this->env->getExtension("native_profiler");
        $__internal_6d4393d2bba1e61fc66449a654966d94b4f0da6377e4f6b183eb63cdd6a43eec->enter($__internal_6d4393d2bba1e61fc66449a654966d94b4f0da6377e4f6b183eb63cdd6a43eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 120
        echo "                            ";
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 121
            echo "                                <ol class=\"nav navbar-top-links breadcrumb\">
                                    ";
            // line 122
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 123
                echo "                                        ";
                if (array_key_exists("action", $context)) {
                    // line 124
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 125
                        echo "                                                ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 126
                            echo "                                                    <li>
                                                        ";
                            // line 127
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 128
                                echo "                                                            <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                        ";
                            } else {
                                // line 130
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                        ";
                            }
                            // line 132
                            echo "                                                    </li>
                                                ";
                        } else {
                            // line 134
                            echo "                                                    <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                ";
                        }
                        // line 136
                        echo "                                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "                                        ";
                }
                // line 138
                echo "                                    ";
            } else {
                // line 139
                echo "                                        ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                    ";
            }
            // line 141
            echo "                                </ol>
                            ";
        }
        // line 143
        echo "                        ";
        
        $__internal_6d4393d2bba1e61fc66449a654966d94b4f0da6377e4f6b183eb63cdd6a43eec->leave($__internal_6d4393d2bba1e61fc66449a654966d94b4f0da6377e4f6b183eb63cdd6a43eec_prof);

    }

    // line 146
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_2596d6bc6a299a91221f3c2faf00651a337d6b0279c96034fc0dadb1f08a670f = $this->env->getExtension("native_profiler");
        $__internal_2596d6bc6a299a91221f3c2faf00651a337d6b0279c96034fc0dadb1f08a670f->enter($__internal_2596d6bc6a299a91221f3c2faf00651a337d6b0279c96034fc0dadb1f08a670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 147
        echo "                        <div class=\"navbar-right\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                    </a>
                                    ";
        // line 153
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"), "AcmeBackendBundle::standard_layout.html.twig", 153)->display($context);
        // line 154
        echo "                                </li>
                                <li class=\"dropdown user-menu\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-user\">
                                        ";
        // line 160
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), "AcmeBackendBundle::standard_layout.html.twig", 160)->display($context);
        // line 161
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    ";
        
        $__internal_2596d6bc6a299a91221f3c2faf00651a337d6b0279c96034fc0dadb1f08a670f->leave($__internal_2596d6bc6a299a91221f3c2faf00651a337d6b0279c96034fc0dadb1f08a670f_prof);

    }

    // line 174
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_b5ddc953f39d5a629c6166268234ceaaa1cf7dabb9d11304b2e646dda65e7a0b = $this->env->getExtension("native_profiler");
        $__internal_b5ddc953f39d5a629c6166268234ceaaa1cf7dabb9d11304b2e646dda65e7a0b->enter($__internal_b5ddc953f39d5a629c6166268234ceaaa1cf7dabb9d11304b2e646dda65e7a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 175
        echo "    <div class=\"wrapper row-offcanvas row-offcanvas-left\">
        ";
        // line 176
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 248
        echo "
        <aside class=\"right-side\">
            ";
        // line 250
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 327
        echo "        </aside>

    </div>
";
        
        $__internal_b5ddc953f39d5a629c6166268234ceaaa1cf7dabb9d11304b2e646dda65e7a0b->leave($__internal_b5ddc953f39d5a629c6166268234ceaaa1cf7dabb9d11304b2e646dda65e7a0b_prof);

    }

    // line 176
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_0e014af8c5ca0c1ef507f5e62f4935eda5ff719c838601be2a2ed495006983b2 = $this->env->getExtension("native_profiler");
        $__internal_0e014af8c5ca0c1ef507f5e62f4935eda5ff719c838601be2a2ed495006983b2->enter($__internal_0e014af8c5ca0c1ef507f5e62f4935eda5ff719c838601be2a2ed495006983b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 177
        echo "            <aside class=\"left-side sidebar-offcanvas\">
                <section class=\"sidebar\">
                    ";
        // line 179
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 245
        echo "                </section>
            </aside>
        ";
        
        $__internal_0e014af8c5ca0c1ef507f5e62f4935eda5ff719c838601be2a2ed495006983b2->leave($__internal_0e014af8c5ca0c1ef507f5e62f4935eda5ff719c838601be2a2ed495006983b2_prof);

    }

    // line 179
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_fb4129e8469a5643742771549f39e6386920331ad8c427dd49f0900651f47fc2 = $this->env->getExtension("native_profiler");
        $__internal_fb4129e8469a5643742771549f39e6386920331ad8c427dd49f0900651f47fc2->enter($__internal_fb4129e8469a5643742771549f39e6386920331ad8c427dd49f0900651f47fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 180
        echo "                        ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 194
        echo "
                        ";
        // line 195
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 196
        echo "                        ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 241
        echo "                        ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 244
        echo "                    ";
        
        $__internal_fb4129e8469a5643742771549f39e6386920331ad8c427dd49f0900651f47fc2->leave($__internal_fb4129e8469a5643742771549f39e6386920331ad8c427dd49f0900651f47fc2_prof);

    }

    // line 180
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_83e78054593983ec2bb0afe4e0720f55a95e5221b440647453e6887534148344 = $this->env->getExtension("native_profiler");
        $__internal_83e78054593983ec2bb0afe4e0720f55a95e5221b440647453e6887534148344->enter($__internal_83e78054593983ec2bb0afe4e0720f55a95e5221b440647453e6887534148344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 181
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 182
            echo "                                <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                    </div>
                                </form>
                            ";
        }
        // line 193
        echo "                        ";
        
        $__internal_83e78054593983ec2bb0afe4e0720f55a95e5221b440647453e6887534148344->leave($__internal_83e78054593983ec2bb0afe4e0720f55a95e5221b440647453e6887534148344_prof);

    }

    // line 195
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_f44016c847901200ea3b3bf52e01d143c1f2ff95391144d087f2c78c0c2e7935 = $this->env->getExtension("native_profiler");
        $__internal_f44016c847901200ea3b3bf52e01d143c1f2ff95391144d087f2c78c0c2e7935->enter($__internal_f44016c847901200ea3b3bf52e01d143c1f2ff95391144d087f2c78c0c2e7935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_f44016c847901200ea3b3bf52e01d143c1f2ff95391144d087f2c78c0c2e7935->leave($__internal_f44016c847901200ea3b3bf52e01d143c1f2ff95391144d087f2c78c0c2e7935_prof);

    }

    // line 196
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_b75d29533a2fbb86e03640b49caecd6a4933066edf298e23e6b2e1b57ce2d4d5 = $this->env->getExtension("native_profiler");
        $__internal_b75d29533a2fbb86e03640b49caecd6a4933066edf298e23e6b2e1b57ce2d4d5->enter($__internal_b75d29533a2fbb86e03640b49caecd6a4933066edf298e23e6b2e1b57ce2d4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 197
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 198
            echo "                                <ul class=\"sidebar-menu\">
                                    ";
            // line 199
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 200
                echo "                                        ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 201
                echo "                                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 202
                        echo "                                            ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 203
                        echo "                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "
                                        ";
                // line 206
                echo "                                        ";
                $context["item_count"] = 0;
                // line 207
                echo "                                        ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 208
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 209
                            echo "                                                ";
                            if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                                // line 210
                                echo "                                                    ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 211
                                echo "                                                ";
                            }
                            // line 212
                            echo "                                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 213
                    echo "                                        ";
                }
                // line 214
                echo "
                                        ";
                // line 215
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 216
                    echo "                                            ";
                    $context["active"] = false;
                    // line 217
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 218
                        echo "                                                ";
                        if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array())))) {
                            // line 219
                            echo "                                                    ";
                            $context["active"] = true;
                            // line 220
                            echo "                                                ";
                        }
                        // line 221
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 222
                    echo "                                            <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                <a href=\"#\">
                                                    ";
                    // line 224
                    if ((($this->getAttribute($context["group"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group"], "icon", array()))) : (""))) {
                        echo $this->getAttribute($context["group"], "icon", array());
                    }
                    // line 225
                    echo "                                                    <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                    echo "</span>
                                                    <i class=\"fa pull-right fa-angle-left\"></i>
                                                </a>
                                                <ul class=\"treeview-menu";
                    // line 228
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                    ";
                    // line 229
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 230
                        echo "                                                        ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 231
                            echo "                                                            <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array()))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a></li>
                                                        ";
                        }
                        // line 233
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 234
                    echo "                                                </ul>
                                            </li>
                                        ";
                }
                // line 237
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "                                </ul>
                            ";
        }
        // line 240
        echo "                        ";
        
        $__internal_b75d29533a2fbb86e03640b49caecd6a4933066edf298e23e6b2e1b57ce2d4d5->leave($__internal_b75d29533a2fbb86e03640b49caecd6a4933066edf298e23e6b2e1b57ce2d4d5_prof);

    }

    // line 241
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_7d6aabe596cd68ffd4d00cc76ed2e277a32b87fbbc00721b032fdc355d453c84 = $this->env->getExtension("native_profiler");
        $__internal_7d6aabe596cd68ffd4d00cc76ed2e277a32b87fbbc00721b032fdc355d453c84->enter($__internal_7d6aabe596cd68ffd4d00cc76ed2e277a32b87fbbc00721b032fdc355d453c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 242
        echo "                            ";
        // line 243
        echo "                        ";
        
        $__internal_7d6aabe596cd68ffd4d00cc76ed2e277a32b87fbbc00721b032fdc355d453c84->leave($__internal_7d6aabe596cd68ffd4d00cc76ed2e277a32b87fbbc00721b032fdc355d453c84_prof);

    }

    // line 250
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_0a27ff3ef3271c082372e79d5991801924e02e3f1a5337237392270dfb50475b = $this->env->getExtension("native_profiler");
        $__internal_0a27ff3ef3271c082372e79d5991801924e02e3f1a5337237392270dfb50475b->enter($__internal_0a27ff3ef3271c082372e79d5991801924e02e3f1a5337237392270dfb50475b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 251
        echo "                <section class=\"content-header\">
                    ";
        // line 252
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 286
        echo "                </section>

                <section class=\"content\">
                    ";
        // line 289
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 325
        echo "                </section>
            ";
        
        $__internal_0a27ff3ef3271c082372e79d5991801924e02e3f1a5337237392270dfb50475b->leave($__internal_0a27ff3ef3271c082372e79d5991801924e02e3f1a5337237392270dfb50475b_prof);

    }

    // line 252
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_687985245535cc331ddb14bdb134b242c1d410da7cfe4da7d8e3df6a92c02621 = $this->env->getExtension("native_profiler");
        $__internal_687985245535cc331ddb14bdb134b242c1d410da7cfe4da7d8e3df6a92c02621->enter($__internal_687985245535cc331ddb14bdb134b242c1d410da7cfe4da7d8e3df6a92c02621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 253
        echo "                        ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 284
        echo "
                    ";
        
        $__internal_687985245535cc331ddb14bdb134b242c1d410da7cfe4da7d8e3df6a92c02621->leave($__internal_687985245535cc331ddb14bdb134b242c1d410da7cfe4da7d8e3df6a92c02621_prof);

    }

    // line 253
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_bda0cc3b34123eeca8916def2317827df1b3a850219860112fc53bc347e30b01 = $this->env->getExtension("native_profiler");
        $__internal_bda0cc3b34123eeca8916def2317827df1b3a850219860112fc53bc347e30b01->enter($__internal_bda0cc3b34123eeca8916def2317827df1b3a850219860112fc53bc347e30b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 254
        echo "                            ";
        if (( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 255
            echo "                                <nav class=\"navbar navbar-default\" role=\"navigation\">
                                    ";
            // line 256
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 263
            echo "                                    <div class=\"container-fluid\">
                                        <div class=\"navbar-left\">
                                            ";
            // line 265
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 266
                echo "                                                ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                            ";
            }
            // line 268
            echo "                                        </div>

                                        ";
            // line 270
            if ( !twig_test_empty(trim(strtr((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
                // line 271
                echo "                                            <ul class=\"nav navbar-nav navbar-right\">
                                                <li class=\"dropdown sonata-actions\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 273
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                        ";
                // line 275
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                    </ul>
                                                </li>
                                            </ul>
                                        ";
            }
            // line 280
            echo "                                    </div>
                                </nav>
                            ";
        }
        // line 283
        echo "                        ";
        
        $__internal_bda0cc3b34123eeca8916def2317827df1b3a850219860112fc53bc347e30b01->leave($__internal_bda0cc3b34123eeca8916def2317827df1b3a850219860112fc53bc347e30b01_prof);

    }

    // line 256
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_2bef1f018520c2632b984d5934de849f3927af44b1b4d15d28f41109a3f67796 = $this->env->getExtension("native_profiler");
        $__internal_2bef1f018520c2632b984d5934de849f3927af44b1b4d15d28f41109a3f67796->enter($__internal_2bef1f018520c2632b984d5934de849f3927af44b1b4d15d28f41109a3f67796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 257
        echo "                                        ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 258
            echo "                                            <div class=\"navbar-header\">
                                                <span class=\"navbar-brand\">";
            // line 259
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</span>
                                            </div>
                                        ";
        }
        // line 262
        echo "                                    ";
        
        $__internal_2bef1f018520c2632b984d5934de849f3927af44b1b4d15d28f41109a3f67796->leave($__internal_2bef1f018520c2632b984d5934de849f3927af44b1b4d15d28f41109a3f67796_prof);

    }

    // line 289
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_02a1844d930fdc2b21cd8a6fee3dd15a21ac3abb08cc925fb04098cfa37ddd9b = $this->env->getExtension("native_profiler");
        $__internal_02a1844d930fdc2b21cd8a6fee3dd15a21ac3abb08cc925fb04098cfa37ddd9b->enter($__internal_02a1844d930fdc2b21cd8a6fee3dd15a21ac3abb08cc925fb04098cfa37ddd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 290
        echo "
                        ";
        // line 291
        $this->displayBlock('notice', $context, $blocks);
        // line 294
        echo "
                        ";
        // line 295
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 296
            echo "                            <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                        ";
        }
        // line 298
        echo "
                        ";
        // line 299
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 300
            echo "                            <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                        ";
        }
        // line 302
        echo "
                        ";
        // line 303
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 304
            echo "                            <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                        ";
        }
        // line 306
        echo "
                        ";
        // line 307
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 308
            echo "                            <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                        ";
        }
        // line 310
        echo "
                        ";
        // line 311
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 312
            echo "                            <div class=\"row\">
                                <div class=\"sonata-ba-list ";
            // line 313
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                    ";
            // line 314
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                                ";
            // line 317
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 318
                echo "                                    <div class=\"sonata-ba-filter col-md-2\">
                                        ";
                // line 319
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 322
            echo "                            </div>
                        ";
        }
        // line 324
        echo "                    ";
        
        $__internal_02a1844d930fdc2b21cd8a6fee3dd15a21ac3abb08cc925fb04098cfa37ddd9b->leave($__internal_02a1844d930fdc2b21cd8a6fee3dd15a21ac3abb08cc925fb04098cfa37ddd9b_prof);

    }

    // line 291
    public function block_notice($context, array $blocks = array())
    {
        $__internal_2128d96d3c0cb642e6aeab01440b490bcda2769e07d5bc2821776e1116d70880 = $this->env->getExtension("native_profiler");
        $__internal_2128d96d3c0cb642e6aeab01440b490bcda2769e07d5bc2821776e1116d70880->enter($__internal_2128d96d3c0cb642e6aeab01440b490bcda2769e07d5bc2821776e1116d70880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 292
        echo "                            ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "AcmeBackendBundle::standard_layout.html.twig", 292)->display($context);
        // line 293
        echo "                        ";
        
        $__internal_2128d96d3c0cb642e6aeab01440b490bcda2769e07d5bc2821776e1116d70880->leave($__internal_2128d96d3c0cb642e6aeab01440b490bcda2769e07d5bc2821776e1116d70880_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBackendBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1182 => 293,  1179 => 292,  1173 => 291,  1166 => 324,  1162 => 322,  1156 => 319,  1153 => 318,  1151 => 317,  1145 => 314,  1137 => 313,  1134 => 312,  1132 => 311,  1129 => 310,  1123 => 308,  1121 => 307,  1118 => 306,  1112 => 304,  1110 => 303,  1107 => 302,  1101 => 300,  1099 => 299,  1096 => 298,  1090 => 296,  1088 => 295,  1085 => 294,  1083 => 291,  1080 => 290,  1074 => 289,  1067 => 262,  1061 => 259,  1058 => 258,  1055 => 257,  1049 => 256,  1042 => 283,  1037 => 280,  1029 => 275,  1024 => 273,  1020 => 271,  1018 => 270,  1014 => 268,  1008 => 266,  1006 => 265,  1002 => 263,  1000 => 256,  997 => 255,  994 => 254,  988 => 253,  980 => 284,  977 => 253,  971 => 252,  963 => 325,  961 => 289,  956 => 286,  954 => 252,  951 => 251,  945 => 250,  938 => 243,  936 => 242,  930 => 241,  923 => 240,  919 => 238,  913 => 237,  908 => 234,  902 => 233,  890 => 231,  887 => 230,  883 => 229,  877 => 228,  870 => 225,  866 => 224,  858 => 222,  852 => 221,  849 => 220,  846 => 219,  843 => 218,  838 => 217,  835 => 216,  833 => 215,  830 => 214,  827 => 213,  820 => 212,  817 => 211,  814 => 210,  811 => 209,  805 => 208,  802 => 207,  799 => 206,  796 => 204,  789 => 203,  786 => 202,  780 => 201,  777 => 200,  773 => 199,  770 => 198,  767 => 197,  761 => 196,  749 => 195,  742 => 193,  728 => 184,  722 => 182,  719 => 181,  713 => 180,  706 => 244,  703 => 241,  700 => 196,  698 => 195,  695 => 194,  692 => 180,  686 => 179,  677 => 245,  675 => 179,  671 => 177,  665 => 176,  655 => 327,  653 => 250,  649 => 248,  647 => 176,  644 => 175,  638 => 174,  627 => 161,  625 => 160,  617 => 154,  615 => 153,  607 => 147,  601 => 146,  594 => 143,  590 => 141,  584 => 139,  581 => 138,  578 => 137,  564 => 136,  558 => 134,  554 => 132,  548 => 130,  540 => 128,  538 => 127,  535 => 126,  532 => 125,  514 => 124,  511 => 123,  509 => 122,  506 => 121,  503 => 120,  497 => 119,  490 => 168,  486 => 166,  484 => 146,  480 => 144,  478 => 119,  467 => 110,  464 => 109,  458 => 108,  451 => 107,  447 => 105,  441 => 103,  438 => 102,  435 => 101,  433 => 100,  431 => 99,  426 => 98,  423 => 97,  417 => 96,  406 => 92,  402 => 90,  396 => 89,  388 => 169,  385 => 108,  382 => 96,  380 => 89,  377 => 88,  371 => 87,  359 => 86,  352 => 83,  349 => 82,  346 => 81,  332 => 80,  327 => 78,  324 => 77,  320 => 75,  317 => 74,  314 => 73,  297 => 72,  294 => 71,  291 => 70,  285 => 68,  283 => 67,  277 => 65,  271 => 64,  263 => 60,  260 => 59,  254 => 57,  251 => 56,  248 => 54,  243 => 53,  240 => 52,  237 => 51,  234 => 49,  225 => 47,  221 => 46,  214 => 42,  210 => 40,  204 => 39,  196 => 38,  188 => 37,  184 => 35,  178 => 34,  170 => 31,  161 => 29,  157 => 28,  154 => 27,  148 => 26,  139 => 22,  133 => 21,  121 => 19,  112 => 331,  110 => 174,  105 => 171,  103 => 87,  99 => 86,  95 => 84,  93 => 64,  89 => 62,  87 => 34,  84 => 33,  82 => 26,  79 => 25,  77 => 21,  72 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  55 => 11,  53 => 10,  51 => 9,  49 => 8,  47 => 7,);
    }
}
