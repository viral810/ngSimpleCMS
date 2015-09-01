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
        $__internal_176a4891dc5b16b49e3d456aeba41e0194951806153dd31c382cd00a194a881d = $this->env->getExtension("native_profiler");
        $__internal_176a4891dc5b16b49e3d456aeba41e0194951806153dd31c382cd00a194a881d->enter($__internal_176a4891dc5b16b49e3d456aeba41e0194951806153dd31c382cd00a194a881d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBackendBundle::standard_layout.html.twig"));

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
        echo "
";
        // line 172
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 329
        echo "</body>
</html>
";
        
        $__internal_176a4891dc5b16b49e3d456aeba41e0194951806153dd31c382cd00a194a881d->leave($__internal_176a4891dc5b16b49e3d456aeba41e0194951806153dd31c382cd00a194a881d_prof);

    }

    // line 19
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_961828abab8821c73d0b5821db2b11db84c36f140af49d1a192065c7fdc4c8b0 = $this->env->getExtension("native_profiler");
        $__internal_961828abab8821c73d0b5821db2b11db84c36f140af49d1a192065c7fdc4c8b0->enter($__internal_961828abab8821c73d0b5821db2b11db84c36f140af49d1a192065c7fdc4c8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_961828abab8821c73d0b5821db2b11db84c36f140af49d1a192065c7fdc4c8b0->leave($__internal_961828abab8821c73d0b5821db2b11db84c36f140af49d1a192065c7fdc4c8b0_prof);

    }

    // line 21
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_6b49230971ddaab764632dee34b5e6db9301f608599895af54559652739b5410 = $this->env->getExtension("native_profiler");
        $__internal_6b49230971ddaab764632dee34b5e6db9301f608599895af54559652739b5410->enter($__internal_6b49230971ddaab764632dee34b5e6db9301f608599895af54559652739b5410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 22
        echo "        <meta charset=\"UTF-8\">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
        
        $__internal_6b49230971ddaab764632dee34b5e6db9301f608599895af54559652739b5410->leave($__internal_6b49230971ddaab764632dee34b5e6db9301f608599895af54559652739b5410_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0bd2bae8822096e44db0d50fda5956b197f4f6c27124209cfcc63d79d33c51ad = $this->env->getExtension("native_profiler");
        $__internal_0bd2bae8822096e44db0d50fda5956b197f4f6c27124209cfcc63d79d33c51ad->enter($__internal_0bd2bae8822096e44db0d50fda5956b197f4f6c27124209cfcc63d79d33c51ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0bd2bae8822096e44db0d50fda5956b197f4f6c27124209cfcc63d79d33c51ad->leave($__internal_0bd2bae8822096e44db0d50fda5956b197f4f6c27124209cfcc63d79d33c51ad_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75216d40831cf3ea726a1bd4e9aef6c1c60806b8d1a572a07c3b36001836b3cd = $this->env->getExtension("native_profiler");
        $__internal_75216d40831cf3ea726a1bd4e9aef6c1c60806b8d1a572a07c3b36001836b3cd->enter($__internal_75216d40831cf3ea726a1bd4e9aef6c1c60806b8d1a572a07c3b36001836b3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_75216d40831cf3ea726a1bd4e9aef6c1c60806b8d1a572a07c3b36001836b3cd->leave($__internal_75216d40831cf3ea726a1bd4e9aef6c1c60806b8d1a572a07c3b36001836b3cd_prof);

    }

    // line 64
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_6d7e14c2e527b8195e61e0da1bb82f7b6f9091222ff1c1a818c0e25514fa81bd = $this->env->getExtension("native_profiler");
        $__internal_6d7e14c2e527b8195e61e0da1bb82f7b6f9091222ff1c1a818c0e25514fa81bd->enter($__internal_6d7e14c2e527b8195e61e0da1bb82f7b6f9091222ff1c1a818c0e25514fa81bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_6d7e14c2e527b8195e61e0da1bb82f7b6f9091222ff1c1a818c0e25514fa81bd->leave($__internal_6d7e14c2e527b8195e61e0da1bb82f7b6f9091222ff1c1a818c0e25514fa81bd_prof);

    }

    // line 86
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_11276bad62d4b292342dc7aae914d78583aa7cca204c025d9fe77f6f142c7ead = $this->env->getExtension("native_profiler");
        $__internal_11276bad62d4b292342dc7aae914d78583aa7cca204c025d9fe77f6f142c7ead->enter($__internal_11276bad62d4b292342dc7aae914d78583aa7cca204c025d9fe77f6f142c7ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_11276bad62d4b292342dc7aae914d78583aa7cca204c025d9fe77f6f142c7ead->leave($__internal_11276bad62d4b292342dc7aae914d78583aa7cca204c025d9fe77f6f142c7ead_prof);

    }

    // line 87
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_36d58a58470d6ec627cb872bd2e33a2a01dad76a968cfa4fd20e0057dd66fe38 = $this->env->getExtension("native_profiler");
        $__internal_36d58a58470d6ec627cb872bd2e33a2a01dad76a968cfa4fd20e0057dd66fe38->enter($__internal_36d58a58470d6ec627cb872bd2e33a2a01dad76a968cfa4fd20e0057dd66fe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_36d58a58470d6ec627cb872bd2e33a2a01dad76a968cfa4fd20e0057dd66fe38->leave($__internal_36d58a58470d6ec627cb872bd2e33a2a01dad76a968cfa4fd20e0057dd66fe38_prof);

    }

    // line 89
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_4a90a15ccfb05cc4814af2b12b9a9ca5f9958588244d4f554e5b2d208fbd936f = $this->env->getExtension("native_profiler");
        $__internal_4a90a15ccfb05cc4814af2b12b9a9ca5f9958588244d4f554e5b2d208fbd936f->enter($__internal_4a90a15ccfb05cc4814af2b12b9a9ca5f9958588244d4f554e5b2d208fbd936f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_4a90a15ccfb05cc4814af2b12b9a9ca5f9958588244d4f554e5b2d208fbd936f->leave($__internal_4a90a15ccfb05cc4814af2b12b9a9ca5f9958588244d4f554e5b2d208fbd936f_prof);

    }

    // line 96
    public function block_logo($context, array $blocks = array())
    {
        $__internal_57c28c1047c719d3625d928f0570c937ce9d5999b8eed56a7d2366b50b28e077 = $this->env->getExtension("native_profiler");
        $__internal_57c28c1047c719d3625d928f0570c937ce9d5999b8eed56a7d2366b50b28e077->enter($__internal_57c28c1047c719d3625d928f0570c937ce9d5999b8eed56a7d2366b50b28e077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_57c28c1047c719d3625d928f0570c937ce9d5999b8eed56a7d2366b50b28e077->leave($__internal_57c28c1047c719d3625d928f0570c937ce9d5999b8eed56a7d2366b50b28e077_prof);

    }

    // line 108
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_d4b1c35b0808aeedacd63688d4736002ce6d2b1b39ef71ff3f86f2996b16a167 = $this->env->getExtension("native_profiler");
        $__internal_d4b1c35b0808aeedacd63688d4736002ce6d2b1b39ef71ff3f86f2996b16a167->enter($__internal_d4b1c35b0808aeedacd63688d4736002ce6d2b1b39ef71ff3f86f2996b16a167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_d4b1c35b0808aeedacd63688d4736002ce6d2b1b39ef71ff3f86f2996b16a167->leave($__internal_d4b1c35b0808aeedacd63688d4736002ce6d2b1b39ef71ff3f86f2996b16a167_prof);

    }

    // line 119
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_5b599a068c9a523ac98802141585dc5b1ba459bcc4c6a112f50d64f53b54c613 = $this->env->getExtension("native_profiler");
        $__internal_5b599a068c9a523ac98802141585dc5b1ba459bcc4c6a112f50d64f53b54c613->enter($__internal_5b599a068c9a523ac98802141585dc5b1ba459bcc4c6a112f50d64f53b54c613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_5b599a068c9a523ac98802141585dc5b1ba459bcc4c6a112f50d64f53b54c613->leave($__internal_5b599a068c9a523ac98802141585dc5b1ba459bcc4c6a112f50d64f53b54c613_prof);

    }

    // line 146
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_a4540c120a0c87c4c449b8c158d0bcf2e9c148232d939c0d73e55dfd97a97d6f = $this->env->getExtension("native_profiler");
        $__internal_a4540c120a0c87c4c449b8c158d0bcf2e9c148232d939c0d73e55dfd97a97d6f->enter($__internal_a4540c120a0c87c4c449b8c158d0bcf2e9c148232d939c0d73e55dfd97a97d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_a4540c120a0c87c4c449b8c158d0bcf2e9c148232d939c0d73e55dfd97a97d6f->leave($__internal_a4540c120a0c87c4c449b8c158d0bcf2e9c148232d939c0d73e55dfd97a97d6f_prof);

    }

    // line 172
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_9d1c9c54175ae8800c9b06566f3e4798dad0ce40f6d441e963527fc2c4ce6de3 = $this->env->getExtension("native_profiler");
        $__internal_9d1c9c54175ae8800c9b06566f3e4798dad0ce40f6d441e963527fc2c4ce6de3->enter($__internal_9d1c9c54175ae8800c9b06566f3e4798dad0ce40f6d441e963527fc2c4ce6de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 173
        echo "    <div class=\"wrapper row-offcanvas row-offcanvas-left\">
        ";
        // line 174
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 246
        echo "
        <aside class=\"right-side\">
            ";
        // line 248
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 325
        echo "        </aside>

    </div>
";
        
        $__internal_9d1c9c54175ae8800c9b06566f3e4798dad0ce40f6d441e963527fc2c4ce6de3->leave($__internal_9d1c9c54175ae8800c9b06566f3e4798dad0ce40f6d441e963527fc2c4ce6de3_prof);

    }

    // line 174
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_14d30a692d4faf7bb8f3f52cd13ff45a42630db98e23d4fc73f7ddff2b89790f = $this->env->getExtension("native_profiler");
        $__internal_14d30a692d4faf7bb8f3f52cd13ff45a42630db98e23d4fc73f7ddff2b89790f->enter($__internal_14d30a692d4faf7bb8f3f52cd13ff45a42630db98e23d4fc73f7ddff2b89790f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 175
        echo "            <aside class=\"left-side sidebar-offcanvas\">
                <section class=\"sidebar\">
                    ";
        // line 177
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 243
        echo "                </section>
            </aside>
        ";
        
        $__internal_14d30a692d4faf7bb8f3f52cd13ff45a42630db98e23d4fc73f7ddff2b89790f->leave($__internal_14d30a692d4faf7bb8f3f52cd13ff45a42630db98e23d4fc73f7ddff2b89790f_prof);

    }

    // line 177
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_e1b0af13dd05a961f64da58f53ffe85d48a22185db5f4767ec8009465e9a6d92 = $this->env->getExtension("native_profiler");
        $__internal_e1b0af13dd05a961f64da58f53ffe85d48a22185db5f4767ec8009465e9a6d92->enter($__internal_e1b0af13dd05a961f64da58f53ffe85d48a22185db5f4767ec8009465e9a6d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 178
        echo "                        ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 192
        echo "
                        ";
        // line 193
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 194
        echo "                        ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 239
        echo "                        ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 242
        echo "                    ";
        
        $__internal_e1b0af13dd05a961f64da58f53ffe85d48a22185db5f4767ec8009465e9a6d92->leave($__internal_e1b0af13dd05a961f64da58f53ffe85d48a22185db5f4767ec8009465e9a6d92_prof);

    }

    // line 178
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_670be4631ef6aa9d5fb8402db5741987395306bd6aead7eabadde660f22249b6 = $this->env->getExtension("native_profiler");
        $__internal_670be4631ef6aa9d5fb8402db5741987395306bd6aead7eabadde660f22249b6->enter($__internal_670be4631ef6aa9d5fb8402db5741987395306bd6aead7eabadde660f22249b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 179
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 180
            echo "                                <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
            // line 182
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
        // line 191
        echo "                        ";
        
        $__internal_670be4631ef6aa9d5fb8402db5741987395306bd6aead7eabadde660f22249b6->leave($__internal_670be4631ef6aa9d5fb8402db5741987395306bd6aead7eabadde660f22249b6_prof);

    }

    // line 193
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_7e7009373154b07c32f16a3b890e83111a9cb3a2af50318bb090601f980eef8b = $this->env->getExtension("native_profiler");
        $__internal_7e7009373154b07c32f16a3b890e83111a9cb3a2af50318bb090601f980eef8b->enter($__internal_7e7009373154b07c32f16a3b890e83111a9cb3a2af50318bb090601f980eef8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_7e7009373154b07c32f16a3b890e83111a9cb3a2af50318bb090601f980eef8b->leave($__internal_7e7009373154b07c32f16a3b890e83111a9cb3a2af50318bb090601f980eef8b_prof);

    }

    // line 194
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_16a017fb898de51bb290e3906313bd3cbf72509426a3b42929fa4ddc05b34421 = $this->env->getExtension("native_profiler");
        $__internal_16a017fb898de51bb290e3906313bd3cbf72509426a3b42929fa4ddc05b34421->enter($__internal_16a017fb898de51bb290e3906313bd3cbf72509426a3b42929fa4ddc05b34421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 195
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 196
            echo "                                <ul class=\"sidebar-menu\">
                                    ";
            // line 197
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 198
                echo "                                        ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 199
                echo "                                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 200
                        echo "                                            ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 201
                        echo "                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "
                                        ";
                // line 204
                echo "                                        ";
                $context["item_count"] = 0;
                // line 205
                echo "                                        ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 206
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 207
                            echo "                                                ";
                            if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                                // line 208
                                echo "                                                    ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 209
                                echo "                                                ";
                            }
                            // line 210
                            echo "                                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "                                        ";
                }
                // line 212
                echo "
                                        ";
                // line 213
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 214
                    echo "                                            ";
                    $context["active"] = false;
                    // line 215
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 216
                        echo "                                                ";
                        if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array())))) {
                            // line 217
                            echo "                                                    ";
                            $context["active"] = true;
                            // line 218
                            echo "                                                ";
                        }
                        // line 219
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 220
                    echo "                                            <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                <a href=\"#\">
                                                    ";
                    // line 222
                    if ((($this->getAttribute($context["group"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group"], "icon", array()))) : (""))) {
                        echo $this->getAttribute($context["group"], "icon", array());
                    }
                    // line 223
                    echo "                                                    <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                    echo "</span>
                                                    <i class=\"fa pull-right fa-angle-left\"></i>
                                                </a>
                                                <ul class=\"treeview-menu";
                    // line 226
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                    ";
                    // line 227
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 228
                        echo "                                                        ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 229
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
                        // line 231
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 232
                    echo "                                                </ul>
                                            </li>
                                        ";
                }
                // line 235
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "                                </ul>
                            ";
        }
        // line 238
        echo "                        ";
        
        $__internal_16a017fb898de51bb290e3906313bd3cbf72509426a3b42929fa4ddc05b34421->leave($__internal_16a017fb898de51bb290e3906313bd3cbf72509426a3b42929fa4ddc05b34421_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_3462ae06d9a206cd6e86e015f07ecd0c09472e1e6eb97369f45d64e0d89d5ae9 = $this->env->getExtension("native_profiler");
        $__internal_3462ae06d9a206cd6e86e015f07ecd0c09472e1e6eb97369f45d64e0d89d5ae9->enter($__internal_3462ae06d9a206cd6e86e015f07ecd0c09472e1e6eb97369f45d64e0d89d5ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                            ";
        // line 241
        echo "                        ";
        
        $__internal_3462ae06d9a206cd6e86e015f07ecd0c09472e1e6eb97369f45d64e0d89d5ae9->leave($__internal_3462ae06d9a206cd6e86e015f07ecd0c09472e1e6eb97369f45d64e0d89d5ae9_prof);

    }

    // line 248
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_32173847d051a75425d1dec0545888cb982a6029170a35f53eff114566073434 = $this->env->getExtension("native_profiler");
        $__internal_32173847d051a75425d1dec0545888cb982a6029170a35f53eff114566073434->enter($__internal_32173847d051a75425d1dec0545888cb982a6029170a35f53eff114566073434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 249
        echo "                <section class=\"content-header\">
                    ";
        // line 250
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 284
        echo "                </section>

                <section class=\"content\">
                    ";
        // line 287
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 323
        echo "                </section>
            ";
        
        $__internal_32173847d051a75425d1dec0545888cb982a6029170a35f53eff114566073434->leave($__internal_32173847d051a75425d1dec0545888cb982a6029170a35f53eff114566073434_prof);

    }

    // line 250
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_4b0c27655279fca0e6000cc0f7078f58bc422149185aa7399e152a42cee42f08 = $this->env->getExtension("native_profiler");
        $__internal_4b0c27655279fca0e6000cc0f7078f58bc422149185aa7399e152a42cee42f08->enter($__internal_4b0c27655279fca0e6000cc0f7078f58bc422149185aa7399e152a42cee42f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 251
        echo "                        ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 282
        echo "
                    ";
        
        $__internal_4b0c27655279fca0e6000cc0f7078f58bc422149185aa7399e152a42cee42f08->leave($__internal_4b0c27655279fca0e6000cc0f7078f58bc422149185aa7399e152a42cee42f08_prof);

    }

    // line 251
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_7a62ebcd256f9ae8a037000d6c72482ca836147ced1f3225e8e554f464cb6306 = $this->env->getExtension("native_profiler");
        $__internal_7a62ebcd256f9ae8a037000d6c72482ca836147ced1f3225e8e554f464cb6306->enter($__internal_7a62ebcd256f9ae8a037000d6c72482ca836147ced1f3225e8e554f464cb6306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 252
        echo "                            ";
        if (( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 253
            echo "                                <nav class=\"navbar navbar-default\" role=\"navigation\">
                                    ";
            // line 254
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 261
            echo "                                    <div class=\"container-fluid\">
                                        <div class=\"navbar-left\">
                                            ";
            // line 263
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 264
                echo "                                                ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                            ";
            }
            // line 266
            echo "                                        </div>

                                        ";
            // line 268
            if ( !twig_test_empty(trim(strtr((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
                // line 269
                echo "                                            <ul class=\"nav navbar-nav navbar-right\">
                                                <li class=\"dropdown sonata-actions\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 271
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                        ";
                // line 273
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                    </ul>
                                                </li>
                                            </ul>
                                        ";
            }
            // line 278
            echo "                                    </div>
                                </nav>
                            ";
        }
        // line 281
        echo "                        ";
        
        $__internal_7a62ebcd256f9ae8a037000d6c72482ca836147ced1f3225e8e554f464cb6306->leave($__internal_7a62ebcd256f9ae8a037000d6c72482ca836147ced1f3225e8e554f464cb6306_prof);

    }

    // line 254
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_9f9b57cc09f8659a7f529ae66cbc9a854ddee0b90a916e269407eeeca8b29776 = $this->env->getExtension("native_profiler");
        $__internal_9f9b57cc09f8659a7f529ae66cbc9a854ddee0b90a916e269407eeeca8b29776->enter($__internal_9f9b57cc09f8659a7f529ae66cbc9a854ddee0b90a916e269407eeeca8b29776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 255
        echo "                                        ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 256
            echo "                                            <div class=\"navbar-header\">
                                                <span class=\"navbar-brand\">";
            // line 257
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</span>
                                            </div>
                                        ";
        }
        // line 260
        echo "                                    ";
        
        $__internal_9f9b57cc09f8659a7f529ae66cbc9a854ddee0b90a916e269407eeeca8b29776->leave($__internal_9f9b57cc09f8659a7f529ae66cbc9a854ddee0b90a916e269407eeeca8b29776_prof);

    }

    // line 287
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_bfd48cf38729813c7146738e1d468aad249df14267949c2b1a9e4ac5c61edf05 = $this->env->getExtension("native_profiler");
        $__internal_bfd48cf38729813c7146738e1d468aad249df14267949c2b1a9e4ac5c61edf05->enter($__internal_bfd48cf38729813c7146738e1d468aad249df14267949c2b1a9e4ac5c61edf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 288
        echo "
                        ";
        // line 289
        $this->displayBlock('notice', $context, $blocks);
        // line 292
        echo "
                        ";
        // line 293
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 294
            echo "                            <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                        ";
        }
        // line 296
        echo "
                        ";
        // line 297
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 298
            echo "                            <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                        ";
        }
        // line 300
        echo "
                        ";
        // line 301
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 302
            echo "                            <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                        ";
        }
        // line 304
        echo "
                        ";
        // line 305
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 306
            echo "                            <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                        ";
        }
        // line 308
        echo "
                        ";
        // line 309
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 310
            echo "                            <div class=\"row\">
                                <div class=\"sonata-ba-list ";
            // line 311
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                    ";
            // line 312
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                                ";
            // line 315
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 316
                echo "                                    <div class=\"sonata-ba-filter col-md-2\">
                                        ";
                // line 317
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 320
            echo "                            </div>
                        ";
        }
        // line 322
        echo "                    ";
        
        $__internal_bfd48cf38729813c7146738e1d468aad249df14267949c2b1a9e4ac5c61edf05->leave($__internal_bfd48cf38729813c7146738e1d468aad249df14267949c2b1a9e4ac5c61edf05_prof);

    }

    // line 289
    public function block_notice($context, array $blocks = array())
    {
        $__internal_d500394f7939ab91d3397e625c38817a84f93d9493075b9d69b0196fcd82e97f = $this->env->getExtension("native_profiler");
        $__internal_d500394f7939ab91d3397e625c38817a84f93d9493075b9d69b0196fcd82e97f->enter($__internal_d500394f7939ab91d3397e625c38817a84f93d9493075b9d69b0196fcd82e97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 290
        echo "                            ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "AcmeBackendBundle::standard_layout.html.twig", 290)->display($context);
        // line 291
        echo "                        ";
        
        $__internal_d500394f7939ab91d3397e625c38817a84f93d9493075b9d69b0196fcd82e97f->leave($__internal_d500394f7939ab91d3397e625c38817a84f93d9493075b9d69b0196fcd82e97f_prof);

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
        return array (  1180 => 291,  1177 => 290,  1171 => 289,  1164 => 322,  1160 => 320,  1154 => 317,  1151 => 316,  1149 => 315,  1143 => 312,  1135 => 311,  1132 => 310,  1130 => 309,  1127 => 308,  1121 => 306,  1119 => 305,  1116 => 304,  1110 => 302,  1108 => 301,  1105 => 300,  1099 => 298,  1097 => 297,  1094 => 296,  1088 => 294,  1086 => 293,  1083 => 292,  1081 => 289,  1078 => 288,  1072 => 287,  1065 => 260,  1059 => 257,  1056 => 256,  1053 => 255,  1047 => 254,  1040 => 281,  1035 => 278,  1027 => 273,  1022 => 271,  1018 => 269,  1016 => 268,  1012 => 266,  1006 => 264,  1004 => 263,  1000 => 261,  998 => 254,  995 => 253,  992 => 252,  986 => 251,  978 => 282,  975 => 251,  969 => 250,  961 => 323,  959 => 287,  954 => 284,  952 => 250,  949 => 249,  943 => 248,  936 => 241,  934 => 240,  928 => 239,  921 => 238,  917 => 236,  911 => 235,  906 => 232,  900 => 231,  888 => 229,  885 => 228,  881 => 227,  875 => 226,  868 => 223,  864 => 222,  856 => 220,  850 => 219,  847 => 218,  844 => 217,  841 => 216,  836 => 215,  833 => 214,  831 => 213,  828 => 212,  825 => 211,  818 => 210,  815 => 209,  812 => 208,  809 => 207,  803 => 206,  800 => 205,  797 => 204,  794 => 202,  787 => 201,  784 => 200,  778 => 199,  775 => 198,  771 => 197,  768 => 196,  765 => 195,  759 => 194,  747 => 193,  740 => 191,  726 => 182,  720 => 180,  717 => 179,  711 => 178,  704 => 242,  701 => 239,  698 => 194,  696 => 193,  693 => 192,  690 => 178,  684 => 177,  675 => 243,  673 => 177,  669 => 175,  663 => 174,  653 => 325,  651 => 248,  647 => 246,  645 => 174,  642 => 173,  636 => 172,  625 => 161,  623 => 160,  615 => 154,  613 => 153,  605 => 147,  599 => 146,  592 => 143,  588 => 141,  582 => 139,  579 => 138,  576 => 137,  562 => 136,  556 => 134,  552 => 132,  546 => 130,  538 => 128,  536 => 127,  533 => 126,  530 => 125,  512 => 124,  509 => 123,  507 => 122,  504 => 121,  501 => 120,  495 => 119,  488 => 168,  484 => 166,  482 => 146,  478 => 144,  476 => 119,  465 => 110,  462 => 109,  456 => 108,  449 => 107,  445 => 105,  439 => 103,  436 => 102,  433 => 101,  431 => 100,  429 => 99,  424 => 98,  421 => 97,  415 => 96,  404 => 92,  400 => 90,  394 => 89,  386 => 169,  383 => 108,  380 => 96,  378 => 89,  375 => 88,  369 => 87,  357 => 86,  350 => 83,  347 => 82,  344 => 81,  330 => 80,  325 => 78,  322 => 77,  318 => 75,  315 => 74,  312 => 73,  295 => 72,  292 => 71,  289 => 70,  283 => 68,  281 => 67,  275 => 65,  269 => 64,  261 => 60,  258 => 59,  252 => 57,  249 => 56,  246 => 54,  241 => 53,  238 => 52,  235 => 51,  232 => 49,  223 => 47,  219 => 46,  212 => 42,  208 => 40,  202 => 39,  194 => 38,  186 => 37,  182 => 35,  176 => 34,  168 => 31,  159 => 29,  155 => 28,  152 => 27,  146 => 26,  137 => 22,  131 => 21,  119 => 19,  110 => 329,  108 => 172,  105 => 171,  103 => 87,  99 => 86,  95 => 84,  93 => 64,  89 => 62,  87 => 34,  84 => 33,  82 => 26,  79 => 25,  77 => 21,  72 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  55 => 11,  53 => 10,  51 => 9,  49 => 8,  47 => 7,);
    }
}
