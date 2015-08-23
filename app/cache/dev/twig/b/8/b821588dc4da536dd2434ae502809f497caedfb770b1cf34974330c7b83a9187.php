<?php

/* SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_b821588dc4da536dd2434ae502809f497caedfb770b1cf34974330c7b83a9187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'sonata_admin_phpcr_one_to_one_widget' => array($this, 'block_sonata_admin_phpcr_one_to_one_widget'),
            'sonata_admin_phpcr_many_to_many_widget' => array($this, 'block_sonata_admin_phpcr_many_to_many_widget'),
            'sonata_admin_phpcr_many_to_one_widget' => array($this, 'block_sonata_admin_phpcr_many_to_one_widget'),
            'sonata_admin_phpcr_one_to_many_widget' => array($this, 'block_sonata_admin_phpcr_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
            'doctrine_phpcr_odm_tree_widget' => array($this, 'block_doctrine_phpcr_odm_tree_widget'),
            'doctrine_phpcr_odm_tree_manager_widget' => array($this, 'block_doctrine_phpcr_odm_tree_manager_widget'),
            'choice_field_mask_widget' => array($this, 'block_choice_field_mask_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a780960f43bcc2e04ae72717a89e4e3108e1ed85c5700e420875e6959c99131 = $this->env->getExtension("native_profiler");
        $__internal_6a780960f43bcc2e04ae72717a89e4e3108e1ed85c5700e420875e6959c99131->enter($__internal_6a780960f43bcc2e04ae72717a89e4e3108e1ed85c5700e420875e6959c99131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a780960f43bcc2e04ae72717a89e4e3108e1ed85c5700e420875e6959c99131->leave($__internal_6a780960f43bcc2e04ae72717a89e4e3108e1ed85c5700e420875e6959c99131_prof);

    }

    // line 15
    public function block_sonata_admin_phpcr_one_to_one_widget($context, array $blocks = array())
    {
        $__internal_e990b056ad948303df88dace2849ae04760d6106341ae08390f9cd0d84b6e275 = $this->env->getExtension("native_profiler");
        $__internal_e990b056ad948303df88dace2849ae04760d6106341ae08390f9cd0d84b6e275->enter($__internal_e990b056ad948303df88dace2849ae04760d6106341ae08390f9cd0d84b6e275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_phpcr_one_to_one_widget"));

        // line 16
        echo "    ";
        $this->loadTemplate("SonataDoctrinePHPCRAdminBundle:CRUD:edit_phpcr_one_to_one.html.twig", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig", 16)->display($context);
        
        $__internal_e990b056ad948303df88dace2849ae04760d6106341ae08390f9cd0d84b6e275->leave($__internal_e990b056ad948303df88dace2849ae04760d6106341ae08390f9cd0d84b6e275_prof);

    }

    // line 19
    public function block_sonata_admin_phpcr_many_to_many_widget($context, array $blocks = array())
    {
        $__internal_68c426ef9136d34443131174a364210b9d8784668a12c6ec03c0eda979cf0f04 = $this->env->getExtension("native_profiler");
        $__internal_68c426ef9136d34443131174a364210b9d8784668a12c6ec03c0eda979cf0f04->enter($__internal_68c426ef9136d34443131174a364210b9d8784668a12c6ec03c0eda979cf0f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_phpcr_many_to_many_widget"));

        // line 20
        echo "    ";
        $this->loadTemplate("SonataDoctrinePHPCRAdminBundle:CRUD:edit_phpcr_many_to_many.html.twig", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig", 20)->display($context);
        
        $__internal_68c426ef9136d34443131174a364210b9d8784668a12c6ec03c0eda979cf0f04->leave($__internal_68c426ef9136d34443131174a364210b9d8784668a12c6ec03c0eda979cf0f04_prof);

    }

    // line 23
    public function block_sonata_admin_phpcr_many_to_one_widget($context, array $blocks = array())
    {
        $__internal_8666e0ab64ee220a02800b268763126b33a24f4d563b19f5ea750a43153f2e48 = $this->env->getExtension("native_profiler");
        $__internal_8666e0ab64ee220a02800b268763126b33a24f4d563b19f5ea750a43153f2e48->enter($__internal_8666e0ab64ee220a02800b268763126b33a24f4d563b19f5ea750a43153f2e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_phpcr_many_to_one_widget"));

        // line 24
        echo "    ";
        $this->loadTemplate("SonataDoctrinePHPCRAdminBundle:CRUD:edit_phpcr_many_to_one.html.twig", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig", 24)->display($context);
        
        $__internal_8666e0ab64ee220a02800b268763126b33a24f4d563b19f5ea750a43153f2e48->leave($__internal_8666e0ab64ee220a02800b268763126b33a24f4d563b19f5ea750a43153f2e48_prof);

    }

    // line 27
    public function block_sonata_admin_phpcr_one_to_many_widget($context, array $blocks = array())
    {
        $__internal_26fca0ecc235e428658d73629a7560f4beb1c8fbc9737c3e41d6dc8667b39515 = $this->env->getExtension("native_profiler");
        $__internal_26fca0ecc235e428658d73629a7560f4beb1c8fbc9737c3e41d6dc8667b39515->enter($__internal_26fca0ecc235e428658d73629a7560f4beb1c8fbc9737c3e41d6dc8667b39515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_phpcr_one_to_many_widget"));

        // line 28
        echo "    ";
        $this->loadTemplate("SonataDoctrinePHPCRAdminBundle:CRUD:edit_phpcr_one_to_many.html.twig", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig", 28)->display($context);
        
        $__internal_26fca0ecc235e428658d73629a7560f4beb1c8fbc9737c3e41d6dc8667b39515->leave($__internal_26fca0ecc235e428658d73629a7560f4beb1c8fbc9737c3e41d6dc8667b39515_prof);

    }

    // line 31
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_cf58a5a2d2c51bde9b915a71149116c8a38ca7cb44316011e170d0a9f432f149 = $this->env->getExtension("native_profiler");
        $__internal_cf58a5a2d2c51bde9b915a71149116c8a38ca7cb44316011e170d0a9f432f149->enter($__internal_cf58a5a2d2c51bde9b915a71149116c8a38ca7cb44316011e170d0a9f432f149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 32
        echo "
    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "child")) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 2)) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 8)) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif ((($this->getAttribute($this->getAttribute(        // line 48
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 4) || ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "children"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_cf58a5a2d2c51bde9b915a71149116c8a38ca7cb44316011e170d0a9f432f149->leave($__internal_cf58a5a2d2c51bde9b915a71149116c8a38ca7cb44316011e170d0a9f432f149_prof);

    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_a9c40a80dc60f256ea92371b4e079eba3a78ecf9037604ae7eb7f7c2fdf9a14d = $this->env->getExtension("native_profiler");
        $__internal_a9c40a80dc60f256ea92371b4e079eba3a78ecf9037604ae7eb7f7c2fdf9a14d->enter($__internal_a9c40a80dc60f256ea92371b4e079eba3a78ecf9037604ae7eb7f7c2fdf9a14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" >
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 60
            echo "                ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()))), array());
            // line 65
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 66
            echo "                <span class=\"inner-field-short-description\">
                    ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </span>
            ";
        }
        // line 70
        echo "        </span>
        <span style=\"display: none\" >
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </span>

        <span id=\"field_actions_";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">

            ";
        // line 77
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 78
            echo "
                <a  href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                    onclick=\"return start_field_dialog_form_list_";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                    class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                    title=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-list fa fa-list\"></i>
                    ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 88
        echo "
            ";
        // line 89
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 90
            echo "                <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                    onclick=\"return start_field_dialog_form_add_";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                    class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                    title=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-plus fa fa-plus-circle\"></i>
                    ";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 99
        echo "
            ";
        // line 100
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 101
            echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                    class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                    title=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-off fa fa-minus-circle\"></i>
                    ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 110
        echo "        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 117
        $this->loadTemplate("SonataDoctrinePHPCRAdminBundle:CRUD:edit_phpcr_many_association_script.html.twig", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig", 117)->display($context);
        
        $__internal_a9c40a80dc60f256ea92371b4e079eba3a78ecf9037604ae7eb7f7c2fdf9a14d->leave($__internal_a9c40a80dc60f256ea92371b4e079eba3a78ecf9037604ae7eb7f7c2fdf9a14d_prof);

    }

    // line 120
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_dda76fd222eb38cd3b09a7360dd13808756a9dab0b548dfcc3e197b99b86d182 = $this->env->getExtension("native_profiler");
        $__internal_dda76fd222eb38cd3b09a7360dd13808756a9dab0b548dfcc3e197b99b86d182->enter($__internal_dda76fd222eb38cd3b09a7360dd13808756a9dab0b548dfcc3e197b99b86d182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 121
        echo "    ";
        // line 122
        echo "    ";
        if ((($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 1) || ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "child"))) {
            // line 123
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 124
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 2)) {
            // line 125
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 126
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 8)) {
            // line 127
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif ((($this->getAttribute($this->getAttribute(        // line 128
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 4) || ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "children"))) {
            // line 129
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 131
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_dda76fd222eb38cd3b09a7360dd13808756a9dab0b548dfcc3e197b99b86d182->leave($__internal_dda76fd222eb38cd3b09a7360dd13808756a9dab0b548dfcc3e197b99b86d182_prof);

    }

    // line 135
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_614bd91325fed467accfcc0cd6dbec36536da06729dad6a59333487f34aab683 = $this->env->getExtension("native_profiler");
        $__internal_614bd91325fed467accfcc0cd6dbec36536da06729dad6a59333487f34aab683->enter($__internal_614bd91325fed467accfcc0cd6dbec36536da06729dad6a59333487f34aab683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 136
        echo "    ";
        if ((((($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 4) || ($this->getAttribute($this->getAttribute(        // line 137
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == 8)) || ($this->getAttribute($this->getAttribute(        // line 138
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "children")) || ($this->getAttribute($this->getAttribute(        // line 139
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "referrers"))) {
            // line 141
            echo "        ";
            $this->displayBlock("sonata_admin_phpcr_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 143
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_614bd91325fed467accfcc0cd6dbec36536da06729dad6a59333487f34aab683->leave($__internal_614bd91325fed467accfcc0cd6dbec36536da06729dad6a59333487f34aab683_prof);

    }

    // line 147
    public function block_doctrine_phpcr_odm_tree_widget($context, array $blocks = array())
    {
        $__internal_7c04f94d8d4c6f05283071039fb4712634c33027f33700e9687adf9a8469246e = $this->env->getExtension("native_profiler");
        $__internal_7c04f94d8d4c6f05283071039fb4712634c33027f33700e9687adf9a8469246e->enter($__internal_7c04f94d8d4c6f05283071039fb4712634c33027f33700e9687adf9a8469246e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "doctrine_phpcr_odm_tree_widget"));

        // line 148
        $this->loadTemplate("CmfTreeBrowserBundle:Base:tree.html.twig", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig", 148)->display($context);
        // line 149
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        var treeState = AdminTree.generateTreeStateArray(\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\");
        var defaults = ";
        // line 152
        $this->loadTemplate("SonataDoctrinePHPCRAdminBundle:Tree:routing_defaults.html.twig", "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig", 152)->display(array_merge($context, array("routing_defaults" => (isset($context["routing_defaults"]) ? $context["routing_defaults"] : $this->getContext($context, "routing_defaults")))));
        echo ";

        SelectTree.initTree({
            \"selector\": \"#";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-tree-selector\",
            \"rootNode\": \"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["root_node"]) ? $context["root_node"] : $this->getContext($context, "root_node")), "html", null, true);
        echo "\",
            \"ajax\": {
                \"children_url\": Routing.generate(\"_cmf_tree_";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "alias", array()), "html", null, true);
        echo "_children\", defaults)
            },
            \"output\": \"#";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-tree-selector-output\",
            \"reset\": \"#";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-tree-reset\",
            \"path\": {
                \"expanded\":     treeState,
                \"preloaded\":    treeState
            },
            \"selected\": '";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "',
            \"selectRootNode\": ";
        // line 167
        echo (((isset($context["select_root_node"]) ? $context["select_root_node"] : $this->getContext($context, "select_root_node"))) ? ("true") : ("false"));
        echo ",
            \"routing_defaults\": defaults
        });
    })
</script>

<div id=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-tree-selector\"></div>

<div class=\"form-inline\">
    ";
        // line 176
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 177
            echo "        <input class=\"form-control\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "-tree-selector-output\" value=\"";
            echo twig_escape_filter($this->env, (((isset($context["select_root_node"]) ? $context["select_root_node"] : $this->getContext($context, "select_root_node"))) ? ((isset($context["root_node"]) ? $context["root_node"] : $this->getContext($context, "root_node"))) : ("")), "html", null, true);
            echo "\" readonly=\"readonly\">
    ";
        } else {
            // line 179
            echo "        <input class=\"form-control\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "-tree-selector-output\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" readonly=\"readonly\">
    ";
        }
        // line 181
        echo "
    <button class=\"btn btn-mini\" id=";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-tree-reset>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reset_tree", array(), "SonataDoctrinePHPCRAdmin"), "html", null, true);
        echo "</button>
</div>
";
        
        $__internal_7c04f94d8d4c6f05283071039fb4712634c33027f33700e9687adf9a8469246e->leave($__internal_7c04f94d8d4c6f05283071039fb4712634c33027f33700e9687adf9a8469246e_prof);

    }

    // line 186
    public function block_doctrine_phpcr_odm_tree_manager_widget($context, array $blocks = array())
    {
        $__internal_243b09d91ba57ef7bcb4db44cdc2f2a7b0200d404a7dfbbf2e5c6ea2bdb50a74 = $this->env->getExtension("native_profiler");
        $__internal_243b09d91ba57ef7bcb4db44cdc2f2a7b0200d404a7dfbbf2e5c6ea2bdb50a74->enter($__internal_243b09d91ba57ef7bcb4db44cdc2f2a7b0200d404a7dfbbf2e5c6ea2bdb50a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "doctrine_phpcr_odm_tree_manager_widget"));

        // line 187
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("sonata.admin.doctrine_phpcr.tree_controller:treeAction", array("root" => $this->getAttribute($this->getAttribute(        // line 188
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "root", array()), "selected" => false, "create_in_overlay" => $this->getAttribute($this->getAttribute(        // line 190
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "create_in_overlay", array()), "edit_in_overlay" => $this->getAttribute($this->getAttribute(        // line 191
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "edit_in_overlay", array()), "delete_in_overlay" => $this->getAttribute($this->getAttribute(        // line 192
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "delete_in_overlay", array()))));
        // line 193
        echo "
";
        
        $__internal_243b09d91ba57ef7bcb4db44cdc2f2a7b0200d404a7dfbbf2e5c6ea2bdb50a74->leave($__internal_243b09d91ba57ef7bcb4db44cdc2f2a7b0200d404a7dfbbf2e5c6ea2bdb50a74_prof);

    }

    // line 196
    public function block_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_0d23ed2e7e88b8b456a6b307c17a0df9f022ece7256c8beac3f60416fc38cb20 = $this->env->getExtension("native_profiler");
        $__internal_0d23ed2e7e88b8b456a6b307c17a0df9f022ece7256c8beac3f60416fc38cb20->enter($__internal_0d23ed2e7e88b8b456a6b307c17a0df9f022ece7256c8beac3f60416fc38cb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_field_mask_widget"));

        // line 197
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 198
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 199
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var allFields = ";
        // line 202
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 203
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            showMaskChoiceEl = \$('#";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "');
            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(\$(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo "' + field;
                };

                if (map[val] == undefined) {
                    \$.each(allFields, function (i, field) {
                        \$(controlGroupIdFunc(field)).show();
                    });

                    return;
                }

                \$.each(allFields, function (i, field) {
                    \$(controlGroupIdFunc(field)).hide();
                });

                \$.each(map[val], function (i, field) {
                    \$(controlGroupIdFunc(field)).show();
                });
            }

            choice_field_mask_show(showMaskChoiceEl.val());
        });
    </script>
";
        
        $__internal_0d23ed2e7e88b8b456a6b307c17a0df9f022ece7256c8beac3f60416fc38cb20->leave($__internal_0d23ed2e7e88b8b456a6b307c17a0df9f022ece7256c8beac3f60416fc38cb20_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrinePHPCRAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 213,  543 => 205,  538 => 203,  534 => 202,  529 => 199,  527 => 198,  522 => 197,  516 => 196,  508 => 193,  506 => 192,  505 => 191,  504 => 190,  503 => 188,  501 => 187,  495 => 186,  483 => 182,  480 => 181,  470 => 179,  460 => 177,  458 => 176,  452 => 173,  443 => 167,  439 => 166,  431 => 161,  427 => 160,  422 => 158,  417 => 156,  413 => 155,  407 => 152,  403 => 151,  399 => 149,  397 => 148,  391 => 147,  378 => 143,  372 => 141,  370 => 139,  369 => 138,  368 => 137,  366 => 136,  360 => 135,  349 => 131,  343 => 129,  341 => 128,  336 => 127,  334 => 126,  329 => 125,  327 => 124,  322 => 123,  319 => 122,  317 => 121,  311 => 120,  304 => 117,  296 => 112,  292 => 110,  286 => 107,  280 => 104,  275 => 102,  272 => 101,  270 => 100,  267 => 99,  261 => 96,  255 => 93,  250 => 91,  245 => 90,  243 => 89,  240 => 88,  234 => 85,  228 => 82,  223 => 80,  219 => 79,  216 => 78,  214 => 77,  209 => 75,  203 => 72,  199 => 70,  193 => 67,  190 => 66,  187 => 65,  185 => 63,  184 => 62,  183 => 61,  181 => 60,  179 => 59,  175 => 58,  170 => 57,  164 => 56,  153 => 52,  151 => 51,  145 => 49,  143 => 48,  138 => 47,  136 => 46,  131 => 45,  129 => 44,  124 => 43,  122 => 42,  117 => 41,  115 => 40,  112 => 39,  109 => 37,  106 => 32,  100 => 31,  92 => 28,  86 => 27,  78 => 24,  72 => 23,  64 => 20,  58 => 19,  50 => 16,  44 => 15,  11 => 12,);
    }
}
