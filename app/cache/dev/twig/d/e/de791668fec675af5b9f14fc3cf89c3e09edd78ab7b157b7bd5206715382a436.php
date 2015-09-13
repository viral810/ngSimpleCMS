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
        $__internal_a38bcd174acdc715f025d3ba87586cbbe17246280b943d1f62a0dd414bad341a = $this->env->getExtension("native_profiler");
        $__internal_a38bcd174acdc715f025d3ba87586cbbe17246280b943d1f62a0dd414bad341a->enter($__internal_a38bcd174acdc715f025d3ba87586cbbe17246280b943d1f62a0dd414bad341a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBackendBundle::standard_layout.html.twig"));

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
        
        $__internal_a38bcd174acdc715f025d3ba87586cbbe17246280b943d1f62a0dd414bad341a->leave($__internal_a38bcd174acdc715f025d3ba87586cbbe17246280b943d1f62a0dd414bad341a_prof);

    }

    // line 19
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_c5f2ea716a364a3c9e846a88209f8b840c1fc486a22f69addd577a137d063c51 = $this->env->getExtension("native_profiler");
        $__internal_c5f2ea716a364a3c9e846a88209f8b840c1fc486a22f69addd577a137d063c51->enter($__internal_c5f2ea716a364a3c9e846a88209f8b840c1fc486a22f69addd577a137d063c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_c5f2ea716a364a3c9e846a88209f8b840c1fc486a22f69addd577a137d063c51->leave($__internal_c5f2ea716a364a3c9e846a88209f8b840c1fc486a22f69addd577a137d063c51_prof);

    }

    // line 21
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_6b5a456062cb67c3e97fd019df9f864f28fca5ce0cd83c94e9241560dbe31896 = $this->env->getExtension("native_profiler");
        $__internal_6b5a456062cb67c3e97fd019df9f864f28fca5ce0cd83c94e9241560dbe31896->enter($__internal_6b5a456062cb67c3e97fd019df9f864f28fca5ce0cd83c94e9241560dbe31896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 22
        echo "        <meta charset=\"UTF-8\">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
        
        $__internal_6b5a456062cb67c3e97fd019df9f864f28fca5ce0cd83c94e9241560dbe31896->leave($__internal_6b5a456062cb67c3e97fd019df9f864f28fca5ce0cd83c94e9241560dbe31896_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1b1eaecd6587342b67e4c2a39eadeb7cdd331bed1560eb53edbf966f4ca26ac = $this->env->getExtension("native_profiler");
        $__internal_f1b1eaecd6587342b67e4c2a39eadeb7cdd331bed1560eb53edbf966f4ca26ac->enter($__internal_f1b1eaecd6587342b67e4c2a39eadeb7cdd331bed1560eb53edbf966f4ca26ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f1b1eaecd6587342b67e4c2a39eadeb7cdd331bed1560eb53edbf966f4ca26ac->leave($__internal_f1b1eaecd6587342b67e4c2a39eadeb7cdd331bed1560eb53edbf966f4ca26ac_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06e6e40c3a5da22b259ae4db8c64aa192cf55513ed1ec6f8e5dce61793cc8f5c = $this->env->getExtension("native_profiler");
        $__internal_06e6e40c3a5da22b259ae4db8c64aa192cf55513ed1ec6f8e5dce61793cc8f5c->enter($__internal_06e6e40c3a5da22b259ae4db8c64aa192cf55513ed1ec6f8e5dce61793cc8f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_06e6e40c3a5da22b259ae4db8c64aa192cf55513ed1ec6f8e5dce61793cc8f5c->leave($__internal_06e6e40c3a5da22b259ae4db8c64aa192cf55513ed1ec6f8e5dce61793cc8f5c_prof);

    }

    // line 64
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_1e8a7ab874fac857ea1af795f0895c4517494268ba271c1ec1b4859a8e43c1c8 = $this->env->getExtension("native_profiler");
        $__internal_1e8a7ab874fac857ea1af795f0895c4517494268ba271c1ec1b4859a8e43c1c8->enter($__internal_1e8a7ab874fac857ea1af795f0895c4517494268ba271c1ec1b4859a8e43c1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_1e8a7ab874fac857ea1af795f0895c4517494268ba271c1ec1b4859a8e43c1c8->leave($__internal_1e8a7ab874fac857ea1af795f0895c4517494268ba271c1ec1b4859a8e43c1c8_prof);

    }

    // line 86
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_482c430e9bf2a9d0265d40998a7e9b330bbeda2809da61b54090e166c06637c5 = $this->env->getExtension("native_profiler");
        $__internal_482c430e9bf2a9d0265d40998a7e9b330bbeda2809da61b54090e166c06637c5->enter($__internal_482c430e9bf2a9d0265d40998a7e9b330bbeda2809da61b54090e166c06637c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_482c430e9bf2a9d0265d40998a7e9b330bbeda2809da61b54090e166c06637c5->leave($__internal_482c430e9bf2a9d0265d40998a7e9b330bbeda2809da61b54090e166c06637c5_prof);

    }

    // line 87
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_23b7e8c68eb86879367dd697d94eb3164d8bb3f3a4679568d5917875431c391b = $this->env->getExtension("native_profiler");
        $__internal_23b7e8c68eb86879367dd697d94eb3164d8bb3f3a4679568d5917875431c391b->enter($__internal_23b7e8c68eb86879367dd697d94eb3164d8bb3f3a4679568d5917875431c391b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_23b7e8c68eb86879367dd697d94eb3164d8bb3f3a4679568d5917875431c391b->leave($__internal_23b7e8c68eb86879367dd697d94eb3164d8bb3f3a4679568d5917875431c391b_prof);

    }

    // line 89
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_266e6ea3819530a194e180765c105cc9ca75a7b1f138da2cadedb30789560837 = $this->env->getExtension("native_profiler");
        $__internal_266e6ea3819530a194e180765c105cc9ca75a7b1f138da2cadedb30789560837->enter($__internal_266e6ea3819530a194e180765c105cc9ca75a7b1f138da2cadedb30789560837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_266e6ea3819530a194e180765c105cc9ca75a7b1f138da2cadedb30789560837->leave($__internal_266e6ea3819530a194e180765c105cc9ca75a7b1f138da2cadedb30789560837_prof);

    }

    // line 96
    public function block_logo($context, array $blocks = array())
    {
        $__internal_6e271b4ccf611e8ab536291430e51c8af562e3f0a48649b372bc7ddc9a1fcccd = $this->env->getExtension("native_profiler");
        $__internal_6e271b4ccf611e8ab536291430e51c8af562e3f0a48649b372bc7ddc9a1fcccd->enter($__internal_6e271b4ccf611e8ab536291430e51c8af562e3f0a48649b372bc7ddc9a1fcccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_6e271b4ccf611e8ab536291430e51c8af562e3f0a48649b372bc7ddc9a1fcccd->leave($__internal_6e271b4ccf611e8ab536291430e51c8af562e3f0a48649b372bc7ddc9a1fcccd_prof);

    }

    // line 108
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5dd65ea5501637d1b4d32be55c7b05ce958cb6634f542a6b25e1b925778f6423 = $this->env->getExtension("native_profiler");
        $__internal_5dd65ea5501637d1b4d32be55c7b05ce958cb6634f542a6b25e1b925778f6423->enter($__internal_5dd65ea5501637d1b4d32be55c7b05ce958cb6634f542a6b25e1b925778f6423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_5dd65ea5501637d1b4d32be55c7b05ce958cb6634f542a6b25e1b925778f6423->leave($__internal_5dd65ea5501637d1b4d32be55c7b05ce958cb6634f542a6b25e1b925778f6423_prof);

    }

    // line 119
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c985218c0de5b59939104b7fb36d6c87e4836d34b34e5b3dce1696811050a681 = $this->env->getExtension("native_profiler");
        $__internal_c985218c0de5b59939104b7fb36d6c87e4836d34b34e5b3dce1696811050a681->enter($__internal_c985218c0de5b59939104b7fb36d6c87e4836d34b34e5b3dce1696811050a681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_c985218c0de5b59939104b7fb36d6c87e4836d34b34e5b3dce1696811050a681->leave($__internal_c985218c0de5b59939104b7fb36d6c87e4836d34b34e5b3dce1696811050a681_prof);

    }

    // line 146
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_78ddf38743eb7444bc2ca38a3832aca6041de8687318d282db6126cd719cef0f = $this->env->getExtension("native_profiler");
        $__internal_78ddf38743eb7444bc2ca38a3832aca6041de8687318d282db6126cd719cef0f->enter($__internal_78ddf38743eb7444bc2ca38a3832aca6041de8687318d282db6126cd719cef0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_78ddf38743eb7444bc2ca38a3832aca6041de8687318d282db6126cd719cef0f->leave($__internal_78ddf38743eb7444bc2ca38a3832aca6041de8687318d282db6126cd719cef0f_prof);

    }

    // line 174
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_faf9b6ae60cdd671ff654b2c4e9f0ddd3a7221c9ad5dd640a0c37d28670f20b3 = $this->env->getExtension("native_profiler");
        $__internal_faf9b6ae60cdd671ff654b2c4e9f0ddd3a7221c9ad5dd640a0c37d28670f20b3->enter($__internal_faf9b6ae60cdd671ff654b2c4e9f0ddd3a7221c9ad5dd640a0c37d28670f20b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_faf9b6ae60cdd671ff654b2c4e9f0ddd3a7221c9ad5dd640a0c37d28670f20b3->leave($__internal_faf9b6ae60cdd671ff654b2c4e9f0ddd3a7221c9ad5dd640a0c37d28670f20b3_prof);

    }

    // line 176
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_34c400bd4c27e518850a94a19b9e8b8736a40f55e4c62f92eddceebf3c38701e = $this->env->getExtension("native_profiler");
        $__internal_34c400bd4c27e518850a94a19b9e8b8736a40f55e4c62f92eddceebf3c38701e->enter($__internal_34c400bd4c27e518850a94a19b9e8b8736a40f55e4c62f92eddceebf3c38701e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_34c400bd4c27e518850a94a19b9e8b8736a40f55e4c62f92eddceebf3c38701e->leave($__internal_34c400bd4c27e518850a94a19b9e8b8736a40f55e4c62f92eddceebf3c38701e_prof);

    }

    // line 179
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_bef71b5182953859a41df0de2bea33b7665d8af2e5619e8d34b8bfec3e14a6bc = $this->env->getExtension("native_profiler");
        $__internal_bef71b5182953859a41df0de2bea33b7665d8af2e5619e8d34b8bfec3e14a6bc->enter($__internal_bef71b5182953859a41df0de2bea33b7665d8af2e5619e8d34b8bfec3e14a6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_bef71b5182953859a41df0de2bea33b7665d8af2e5619e8d34b8bfec3e14a6bc->leave($__internal_bef71b5182953859a41df0de2bea33b7665d8af2e5619e8d34b8bfec3e14a6bc_prof);

    }

    // line 180
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_e44472b7f66f0f2b25156f45abb95a5612a89d98215cd4cf784dc5eafb0f2a15 = $this->env->getExtension("native_profiler");
        $__internal_e44472b7f66f0f2b25156f45abb95a5612a89d98215cd4cf784dc5eafb0f2a15->enter($__internal_e44472b7f66f0f2b25156f45abb95a5612a89d98215cd4cf784dc5eafb0f2a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

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
        
        $__internal_e44472b7f66f0f2b25156f45abb95a5612a89d98215cd4cf784dc5eafb0f2a15->leave($__internal_e44472b7f66f0f2b25156f45abb95a5612a89d98215cd4cf784dc5eafb0f2a15_prof);

    }

    // line 195
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_e6f2d65352e5b157eaf3b7bc50435c82870316904e254ffb3945e1768a903081 = $this->env->getExtension("native_profiler");
        $__internal_e6f2d65352e5b157eaf3b7bc50435c82870316904e254ffb3945e1768a903081->enter($__internal_e6f2d65352e5b157eaf3b7bc50435c82870316904e254ffb3945e1768a903081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_e6f2d65352e5b157eaf3b7bc50435c82870316904e254ffb3945e1768a903081->leave($__internal_e6f2d65352e5b157eaf3b7bc50435c82870316904e254ffb3945e1768a903081_prof);

    }

    // line 196
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_8132c5bb2bcbdd5c7f4d6c60cc738959361ff03d2f0b37264415f49a16af9e42 = $this->env->getExtension("native_profiler");
        $__internal_8132c5bb2bcbdd5c7f4d6c60cc738959361ff03d2f0b37264415f49a16af9e42->enter($__internal_8132c5bb2bcbdd5c7f4d6c60cc738959361ff03d2f0b37264415f49a16af9e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

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
        
        $__internal_8132c5bb2bcbdd5c7f4d6c60cc738959361ff03d2f0b37264415f49a16af9e42->leave($__internal_8132c5bb2bcbdd5c7f4d6c60cc738959361ff03d2f0b37264415f49a16af9e42_prof);

    }

    // line 241
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_0ac80f492e4d40402fa34c17c9189004719d42a2282e35a8f892ec7ac6609e40 = $this->env->getExtension("native_profiler");
        $__internal_0ac80f492e4d40402fa34c17c9189004719d42a2282e35a8f892ec7ac6609e40->enter($__internal_0ac80f492e4d40402fa34c17c9189004719d42a2282e35a8f892ec7ac6609e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 242
        echo "                            ";
        // line 243
        echo "                        ";
        
        $__internal_0ac80f492e4d40402fa34c17c9189004719d42a2282e35a8f892ec7ac6609e40->leave($__internal_0ac80f492e4d40402fa34c17c9189004719d42a2282e35a8f892ec7ac6609e40_prof);

    }

    // line 250
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_08d075ae0d179d3dab096bc544625a7d73f6e66772872372d56c027d73f77a89 = $this->env->getExtension("native_profiler");
        $__internal_08d075ae0d179d3dab096bc544625a7d73f6e66772872372d56c027d73f77a89->enter($__internal_08d075ae0d179d3dab096bc544625a7d73f6e66772872372d56c027d73f77a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_08d075ae0d179d3dab096bc544625a7d73f6e66772872372d56c027d73f77a89->leave($__internal_08d075ae0d179d3dab096bc544625a7d73f6e66772872372d56c027d73f77a89_prof);

    }

    // line 252
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_c971fab585803ff019376559094a4d5363cc0b20b51bfeca9c8b4c184f7d6316 = $this->env->getExtension("native_profiler");
        $__internal_c971fab585803ff019376559094a4d5363cc0b20b51bfeca9c8b4c184f7d6316->enter($__internal_c971fab585803ff019376559094a4d5363cc0b20b51bfeca9c8b4c184f7d6316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 253
        echo "                        ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 284
        echo "
                    ";
        
        $__internal_c971fab585803ff019376559094a4d5363cc0b20b51bfeca9c8b4c184f7d6316->leave($__internal_c971fab585803ff019376559094a4d5363cc0b20b51bfeca9c8b4c184f7d6316_prof);

    }

    // line 253
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_ca890986aeca9e6f4c347b785e91e75e0234dd527b7d44185fd40faddfb7901c = $this->env->getExtension("native_profiler");
        $__internal_ca890986aeca9e6f4c347b785e91e75e0234dd527b7d44185fd40faddfb7901c->enter($__internal_ca890986aeca9e6f4c347b785e91e75e0234dd527b7d44185fd40faddfb7901c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

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
        
        $__internal_ca890986aeca9e6f4c347b785e91e75e0234dd527b7d44185fd40faddfb7901c->leave($__internal_ca890986aeca9e6f4c347b785e91e75e0234dd527b7d44185fd40faddfb7901c_prof);

    }

    // line 256
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_36b82aebf83f59762190524a215e564928f9ee0579668859233b75bc32cd009b = $this->env->getExtension("native_profiler");
        $__internal_36b82aebf83f59762190524a215e564928f9ee0579668859233b75bc32cd009b->enter($__internal_36b82aebf83f59762190524a215e564928f9ee0579668859233b75bc32cd009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

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
        
        $__internal_36b82aebf83f59762190524a215e564928f9ee0579668859233b75bc32cd009b->leave($__internal_36b82aebf83f59762190524a215e564928f9ee0579668859233b75bc32cd009b_prof);

    }

    // line 289
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_16a3c1206b695e50e23a1a19aacc93afd9b056a32faf0b1f9a805bf547f89e1a = $this->env->getExtension("native_profiler");
        $__internal_16a3c1206b695e50e23a1a19aacc93afd9b056a32faf0b1f9a805bf547f89e1a->enter($__internal_16a3c1206b695e50e23a1a19aacc93afd9b056a32faf0b1f9a805bf547f89e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

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
        
        $__internal_16a3c1206b695e50e23a1a19aacc93afd9b056a32faf0b1f9a805bf547f89e1a->leave($__internal_16a3c1206b695e50e23a1a19aacc93afd9b056a32faf0b1f9a805bf547f89e1a_prof);

    }

    // line 291
    public function block_notice($context, array $blocks = array())
    {
        $__internal_c3e8bcd8d971dd99927da5269fee461e767b7f9974775b3aa7b095ad53a75b81 = $this->env->getExtension("native_profiler");
        $__internal_c3e8bcd8d971dd99927da5269fee461e767b7f9974775b3aa7b095ad53a75b81->enter($__internal_c3e8bcd8d971dd99927da5269fee461e767b7f9974775b3aa7b095ad53a75b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 292
        echo "                            ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "AcmeBackendBundle::standard_layout.html.twig", 292)->display($context);
        // line 293
        echo "                        ";
        
        $__internal_c3e8bcd8d971dd99927da5269fee461e767b7f9974775b3aa7b095ad53a75b81->leave($__internal_c3e8bcd8d971dd99927da5269fee461e767b7f9974775b3aa7b095ad53a75b81_prof);

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
