<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_762e1b81407c8be25411b000c1d8d93766d50ee9f98ac99be6244f6f8ecbc7e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c4326a3f3099be5e67754a814fc8b89c83e86e11e3b395a6b441efbed4b7254 = $this->env->getExtension("native_profiler");
        $__internal_9c4326a3f3099be5e67754a814fc8b89c83e86e11e3b395a6b441efbed4b7254->enter($__internal_9c4326a3f3099be5e67754a814fc8b89c83e86e11e3b395a6b441efbed4b7254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4326a3f3099be5e67754a814fc8b89c83e86e11e3b395a6b441efbed4b7254->leave($__internal_9c4326a3f3099be5e67754a814fc8b89c83e86e11e3b395a6b441efbed4b7254_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_1ca1d0a9b9e45a58b9d4c30755d1539ef9d669f5b06d4c5a62a26891ec3dfba3 = $this->env->getExtension("native_profiler");
        $__internal_1ca1d0a9b9e45a58b9d4c30755d1539ef9d669f5b06d4c5a62a26891ec3dfba3->enter($__internal_1ca1d0a9b9e45a58b9d4c30755d1539ef9d669f5b06d4c5a62a26891ec3dfba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_1ca1d0a9b9e45a58b9d4c30755d1539ef9d669f5b06d4c5a62a26891ec3dfba3->leave($__internal_1ca1d0a9b9e45a58b9d4c30755d1539ef9d669f5b06d4c5a62a26891ec3dfba3_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_b712252372c82dfa0deab455a238a79f76c82865d3a59ecbf4d66d3e24a43df8 = $this->env->getExtension("native_profiler");
        $__internal_b712252372c82dfa0deab455a238a79f76c82865d3a59ecbf4d66d3e24a43df8->enter($__internal_b712252372c82dfa0deab455a238a79f76c82865d3a59ecbf4d66d3e24a43df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b712252372c82dfa0deab455a238a79f76c82865d3a59ecbf4d66d3e24a43df8->leave($__internal_b712252372c82dfa0deab455a238a79f76c82865d3a59ecbf4d66d3e24a43df8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  88 => 31,  82 => 29,  79 => 28,  76 => 27,  70 => 26,  63 => 23,  56 => 21,  51 => 20,  48 => 19,  42 => 18,  35 => 12,  32 => 17,  30 => 15,  28 => 14,  19 => 12,);
    }
}
