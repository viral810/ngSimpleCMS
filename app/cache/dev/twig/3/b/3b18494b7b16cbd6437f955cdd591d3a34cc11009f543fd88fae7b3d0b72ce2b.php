<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_3b18494b7b16cbd6437f955cdd591d3a34cc11009f543fd88fae7b3d0b72ce2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1cb6048657df14adab1a301e9c915f8cdcbac6aee3163cc7995707a5b2fafbf = $this->env->getExtension("native_profiler");
        $__internal_b1cb6048657df14adab1a301e9c915f8cdcbac6aee3163cc7995707a5b2fafbf->enter($__internal_b1cb6048657df14adab1a301e9c915f8cdcbac6aee3163cc7995707a5b2fafbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1cb6048657df14adab1a301e9c915f8cdcbac6aee3163cc7995707a5b2fafbf->leave($__internal_b1cb6048657df14adab1a301e9c915f8cdcbac6aee3163cc7995707a5b2fafbf_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_656c32b1a2a8cb4d0bcec3cc6e95da895d627ac8725c098b24034939c1e4a2f0 = $this->env->getExtension("native_profiler");
        $__internal_656c32b1a2a8cb4d0bcec3cc6e95da895d627ac8725c098b24034939c1e4a2f0->enter($__internal_656c32b1a2a8cb4d0bcec3cc6e95da895d627ac8725c098b24034939c1e4a2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 17
            echo "        <li>";
            $this->loadTemplate("SonataAdminBundle:Core:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 17)->display($context);
            echo "</li>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_656c32b1a2a8cb4d0bcec3cc6e95da895d627ac8725c098b24034939c1e4a2f0->leave($__internal_656c32b1a2a8cb4d0bcec3cc6e95da895d627ac8725c098b24034939c1e4a2f0_prof);

    }

    // line 22
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d0eca138309ba9a3bafbeefe9af4a78f47c9413d5230cd2f6c4ec71800e2f2bd = $this->env->getExtension("native_profiler");
        $__internal_d0eca138309ba9a3bafbeefe9af4a78f47c9413d5230cd2f6c4ec71800e2f2bd->enter($__internal_d0eca138309ba9a3bafbeefe9af4a78f47c9413d5230cd2f6c4ec71800e2f2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_d0eca138309ba9a3bafbeefe9af4a78f47c9413d5230cd2f6c4ec71800e2f2bd->leave($__internal_d0eca138309ba9a3bafbeefe9af4a78f47c9413d5230cd2f6c4ec71800e2f2bd_prof);

    }

    // line 25
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_199576643d1a09a3c4d6135c42c201fc68f97105e8388b4a0d549a9518dfa1a3 = $this->env->getExtension("native_profiler");
        $__internal_199576643d1a09a3c4d6135c42c201fc68f97105e8388b4a0d549a9518dfa1a3->enter($__internal_199576643d1a09a3c4d6135c42c201fc68f97105e8388b4a0d549a9518dfa1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 26
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

            ";
        // line 30
        $this->displayBlock('list_header', $context, $blocks);
        // line 31
        echo "
            ";
        // line 32
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 33
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 34
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 35
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\">
                ";
            }
            // line 38
            echo "                    <table class=\"table table-bordered table-striped\">
                        ";
            // line 39
            $this->displayBlock('table_header', $context, $blocks);
            // line 75
            echo "
                        ";
            // line 76
            $this->displayBlock('table_body', $context, $blocks);
            // line 85
            echo "
                        ";
            // line 86
            $this->displayBlock('table_footer', $context, $blocks);
            // line 176
            echo "                    </table>
                ";
            // line 177
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 178
                echo "                </form>
                ";
            }
            // line 180
            echo "            ";
        } else {
            // line 181
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 185
        echo "
            ";
        // line 186
        $this->displayBlock('list_footer', $context, $blocks);
        // line 187
        echo "
            ";
        // line 188
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "


        </div>
    </div>
";
        
        $__internal_199576643d1a09a3c4d6135c42c201fc68f97105e8388b4a0d549a9518dfa1a3->leave($__internal_199576643d1a09a3c4d6135c42c201fc68f97105e8388b4a0d549a9518dfa1a3_prof);

    }

    // line 30
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_6243f23357e01944023007ab62ec3b47a8172bb7f7fb5923044b5d313165aca6 = $this->env->getExtension("native_profiler");
        $__internal_6243f23357e01944023007ab62ec3b47a8172bb7f7fb5923044b5d313165aca6->enter($__internal_6243f23357e01944023007ab62ec3b47a8172bb7f7fb5923044b5d313165aca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_6243f23357e01944023007ab62ec3b47a8172bb7f7fb5923044b5d313165aca6->leave($__internal_6243f23357e01944023007ab62ec3b47a8172bb7f7fb5923044b5d313165aca6_prof);

    }

    // line 39
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_7b706dbc70eeda5d6ea1b57030b6cc9594bbb46e9939c90d9276bb755e4674e9 = $this->env->getExtension("native_profiler");
        $__internal_7b706dbc70eeda5d6ea1b57030b6cc9594bbb46e9939c90d9276bb755e4674e9->enter($__internal_7b706dbc70eeda5d6ea1b57030b6cc9594bbb46e9939c90d9276bb755e4674e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 40
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 43
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 44
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 47
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 48
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 49
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 50
                echo "                                            ";
                // line 51
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 52
                echo "                                            ";
                // line 53
                echo "                                        ";
            } else {
                // line 54
                echo "                                            ";
                $context["sortable"] = false;
                // line 55
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 56
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 57
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 58
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 59
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 60
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 61
                    echo "                                            ";
                }
                // line 62
                echo "
                                            ";
                // line 63
                ob_start();
                // line 64
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                echo "\">
                                                    ";
                // line 65
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 66
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                    ";
                // line 67
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 68
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 70
                echo "                                        ";
            }
            // line 71
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_7b706dbc70eeda5d6ea1b57030b6cc9594bbb46e9939c90d9276bb755e4674e9->leave($__internal_7b706dbc70eeda5d6ea1b57030b6cc9594bbb46e9939c90d9276bb755e4674e9_prof);

    }

    // line 76
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_08f77fb29b51ed29ec78be47826060edbf59e0e9cc748087122474d3397e536d = $this->env->getExtension("native_profiler");
        $__internal_08f77fb29b51ed29ec78be47826060edbf59e0e9cc748087122474d3397e536d->enter($__internal_08f77fb29b51ed29ec78be47826060edbf59e0e9cc748087122474d3397e536d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 77
        echo "                            <tbody>
                                ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 79
            echo "                                    <tr>
                                        ";
            // line 80
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 80)->display($context);
            // line 81
            echo "                                    </tr>
                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </tbody>
                        ";
        
        $__internal_08f77fb29b51ed29ec78be47826060edbf59e0e9cc748087122474d3397e536d->leave($__internal_08f77fb29b51ed29ec78be47826060edbf59e0e9cc748087122474d3397e536d_prof);

    }

    // line 86
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_4de1ae21f05b98ca790fcc3f4cc4edeac4e65fe531fc8c167f8d9f8d8e4d6569 = $this->env->getExtension("native_profiler");
        $__internal_4de1ae21f05b98ca790fcc3f4cc4edeac4e65fe531fc8c167f8d9f8d8e4d6569->enter($__internal_4de1ae21f05b98ca790fcc3f4cc4edeac4e65fe531fc8c167f8d9f8d8e4d6569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 87
        echo "                            <tfoot>
                                <tr>
                                    <th colspan=\"";
        // line 89
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                        <div class=\"form-inline\">
                                            ";
        // line 91
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
            // line 92
            echo "                                                ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 93
                echo "                                                    ";
                $this->displayBlock('batch', $context, $blocks);
                // line 134
                echo "                                                ";
            }
            // line 135
            echo "
                                                <div class=\"pull-right\">
                                                    ";
            // line 137
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                // line 138
                echo "                                                        <div class=\"btn-group\">
                                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                                <i class=\"glyphicon glyphicon-export\"></i>
                                                                ";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                                <span class=\"caret\"></span>
                                                            </button>
                                                            <ul class=\"dropdown-menu\">
                                                                ";
                // line 145
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 146
                    echo "                                                                    <li>
                                                                        <a href=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                    echo "\">
                                                                            <i class=\"glyphicon glyphicon-download\"></i>
                                                                            ";
                    // line 149
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                    echo "
                                                                        </a>
                                                                    <li>
                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                                                            </ul>
                                                        </div>

                                                        &nbsp;-&nbsp;
                                                    ";
            }
            // line 158
            echo "
                                                    ";
            // line 159
            $this->displayBlock('pager_results', $context, $blocks);
            // line 162
            echo "                                                </div>
                                            ";
        }
        // line 164
        echo "                                        </div>
                                    </th>
                                </tr>

                                ";
        // line 168
        $this->displayBlock('pager_links', $context, $blocks);
        // line 173
        echo "
                            </tfoot>
                        ";
        
        $__internal_4de1ae21f05b98ca790fcc3f4cc4edeac4e65fe531fc8c167f8d9f8d8e4d6569->leave($__internal_4de1ae21f05b98ca790fcc3f4cc4edeac4e65fe531fc8c167f8d9f8d8e4d6569_prof);

    }

    // line 93
    public function block_batch($context, array $blocks = array())
    {
        $__internal_bd3376c13e9c0260b17a329eb56b09f995f6bc97f46185b1f7a1e83df61d43ec = $this->env->getExtension("native_profiler");
        $__internal_bd3376c13e9c0260b17a329eb56b09f995f6bc97f46185b1f7a1e83df61d43ec->enter($__internal_bd3376c13e9c0260b17a329eb56b09f995f6bc97f46185b1f7a1e83df61d43ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 94
        echo "                                                        <script>
                                                            ";
        // line 95
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 116
        echo "                                                        </script>

                                                        ";
        // line 118
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 131
        echo "
                                                        <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                                    ";
        
        $__internal_bd3376c13e9c0260b17a329eb56b09f995f6bc97f46185b1f7a1e83df61d43ec->leave($__internal_bd3376c13e9c0260b17a329eb56b09f995f6bc97f46185b1f7a1e83df61d43ec_prof);

    }

    // line 95
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_7bafb38dc160b2c84d44a8ffdd43f5fdaa0299e5855ab8c25e9231a918fb24c2 = $this->env->getExtension("native_profiler");
        $__internal_7bafb38dc160b2c84d44a8ffdd43f5fdaa0299e5855ab8c25e9231a918fb24c2->enter($__internal_7bafb38dc160b2c84d44a8ffdd43f5fdaa0299e5855ab8c25e9231a918fb24c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 96
        echo "                                                                jQuery(document).ready(function (\$) {
                                                                    \$('#list_batch_checkbox').on('ifChanged', function () {
                                                                        \$(this)
                                                                            .closest('table')
                                                                            .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                            .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                                        ;
                                                                    });

                                                                    \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                        .on('ifChanged', function () {
                                                                            \$(this)
                                                                                .closest('tr')
                                                                                .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                            ;
                                                                        })
                                                                        .trigger('ifChanged')
                                                                    ;
                                                                });
                                                            ";
        
        $__internal_7bafb38dc160b2c84d44a8ffdd43f5fdaa0299e5855ab8c25e9231a918fb24c2->leave($__internal_7bafb38dc160b2c84d44a8ffdd43f5fdaa0299e5855ab8c25e9231a918fb24c2_prof);

    }

    // line 118
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_78eb85887cf210d13dcaaa1e48ea58395713aeb08d6fbedac950c616e6d527aa = $this->env->getExtension("native_profiler");
        $__internal_78eb85887cf210d13dcaaa1e48ea58395713aeb08d6fbedac950c616e6d527aa->enter($__internal_78eb85887cf210d13dcaaa1e48ea58395713aeb08d6fbedac950c616e6d527aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 119
        echo "                                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                                ";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                                 (";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                                            </label>

                                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                                ";
        // line 126
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 127
            echo "                                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["options"], "label", array()), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                                            </select>
                                                        ";
        
        $__internal_78eb85887cf210d13dcaaa1e48ea58395713aeb08d6fbedac950c616e6d527aa->leave($__internal_78eb85887cf210d13dcaaa1e48ea58395713aeb08d6fbedac950c616e6d527aa_prof);

    }

    // line 159
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_86b406bf6e9a400b811f705e56508b49a4981feac01daa93d9274a88b7162c86 = $this->env->getExtension("native_profiler");
        $__internal_86b406bf6e9a400b811f705e56508b49a4981feac01daa93d9274a88b7162c86->enter($__internal_86b406bf6e9a400b811f705e56508b49a4981feac01daa93d9274a88b7162c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 160
        echo "                                                        ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 160)->display($context);
        // line 161
        echo "                                                    ";
        
        $__internal_86b406bf6e9a400b811f705e56508b49a4981feac01daa93d9274a88b7162c86->leave($__internal_86b406bf6e9a400b811f705e56508b49a4981feac01daa93d9274a88b7162c86_prof);

    }

    // line 168
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_5ee2453547263918d829e4e582b4b537744c7c26cc68dbcc46fe21de75012a2f = $this->env->getExtension("native_profiler");
        $__internal_5ee2453547263918d829e4e582b4b537744c7c26cc68dbcc46fe21de75012a2f->enter($__internal_5ee2453547263918d829e4e582b4b537744c7c26cc68dbcc46fe21de75012a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 169
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 170
            echo "                                        ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 170)->display($context);
            // line 171
            echo "                                    ";
        }
        // line 172
        echo "                                ";
        
        $__internal_5ee2453547263918d829e4e582b4b537744c7c26cc68dbcc46fe21de75012a2f->leave($__internal_5ee2453547263918d829e4e582b4b537744c7c26cc68dbcc46fe21de75012a2f_prof);

    }

    // line 186
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_d974757933bc28c58603a45c11f86f056f6c1bf75caf8d5971c83dcda97ec192 = $this->env->getExtension("native_profiler");
        $__internal_d974757933bc28c58603a45c11f86f056f6c1bf75caf8d5971c83dcda97ec192->enter($__internal_d974757933bc28c58603a45c11f86f056f6c1bf75caf8d5971c83dcda97ec192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_d974757933bc28c58603a45c11f86f056f6c1bf75caf8d5971c83dcda97ec192->leave($__internal_d974757933bc28c58603a45c11f86f056f6c1bf75caf8d5971c83dcda97ec192_prof);

    }

    // line 195
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_80db498f9aad056f8751ff95d133955e58bd2747caca652cc2bc004014a6e23b = $this->env->getExtension("native_profiler");
        $__internal_80db498f9aad056f8751ff95d133955e58bd2747caca652cc2bc004014a6e23b->enter($__internal_80db498f9aad056f8751ff95d133955e58bd2747caca652cc2bc004014a6e23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 196
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 197
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 198
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 200
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 204
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 205
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                        <div class=\"filter_container ";
            // line 206
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                            ";
            // line 207
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 208
                echo "                                <div class=\"form-group\">
                                    ";
                // line 209
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 210
                    echo "                                    <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "</label>
                                    ";
                }
                // line 212
                echo "                                    ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 213
                echo "                                    ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " sonata-filter-option"))));
                // line 214
                echo "
                                    <div>
                                        ";
                // line 216
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                    </div>

                                    <div>
                                        ";
                // line 220
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "
                            <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                            ";
            // line 227
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 228
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 230
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                            <a class=\"btn btn-default\" href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                        </div>

                        ";
            // line 235
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 236
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "                </form>
            </div>
        </div>

    ";
        }
        
        $__internal_80db498f9aad056f8751ff95d133955e58bd2747caca652cc2bc004014a6e23b->leave($__internal_80db498f9aad056f8751ff95d133955e58bd2747caca652cc2bc004014a6e23b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 238,  729 => 236,  725 => 235,  717 => 232,  712 => 230,  706 => 228,  704 => 227,  699 => 224,  689 => 220,  682 => 216,  678 => 214,  675 => 213,  672 => 212,  664 => 210,  662 => 209,  659 => 208,  655 => 207,  651 => 206,  647 => 205,  641 => 204,  632 => 200,  628 => 198,  625 => 197,  622 => 196,  616 => 195,  605 => 186,  598 => 172,  595 => 171,  592 => 170,  589 => 169,  583 => 168,  576 => 161,  573 => 160,  567 => 159,  559 => 129,  548 => 127,  544 => 126,  537 => 122,  533 => 121,  529 => 120,  524 => 119,  518 => 118,  492 => 96,  486 => 95,  477 => 132,  474 => 131,  472 => 118,  468 => 116,  466 => 95,  463 => 94,  457 => 93,  448 => 173,  446 => 168,  440 => 164,  436 => 162,  434 => 159,  431 => 158,  424 => 153,  414 => 149,  409 => 147,  406 => 146,  402 => 145,  395 => 141,  390 => 138,  388 => 137,  384 => 135,  381 => 134,  378 => 93,  375 => 92,  373 => 91,  368 => 89,  364 => 87,  358 => 86,  350 => 83,  335 => 81,  333 => 80,  330 => 79,  313 => 78,  310 => 77,  304 => 76,  295 => 72,  289 => 71,  286 => 70,  282 => 68,  278 => 67,  273 => 66,  267 => 65,  255 => 64,  253 => 63,  250 => 62,  247 => 61,  244 => 60,  241 => 59,  238 => 58,  235 => 57,  232 => 56,  229 => 55,  226 => 54,  223 => 53,  221 => 52,  218 => 51,  216 => 50,  214 => 49,  211 => 48,  209 => 47,  204 => 44,  201 => 43,  197 => 42,  193 => 40,  187 => 39,  176 => 30,  163 => 188,  160 => 187,  158 => 186,  155 => 185,  149 => 182,  146 => 181,  143 => 180,  139 => 178,  137 => 177,  134 => 176,  132 => 86,  129 => 85,  127 => 76,  124 => 75,  122 => 39,  119 => 38,  114 => 36,  109 => 35,  106 => 34,  103 => 33,  101 => 32,  98 => 31,  96 => 30,  91 => 28,  87 => 26,  81 => 25,  69 => 22,  57 => 17,  54 => 16,  52 => 15,  46 => 14,  31 => 12,);
    }
}
