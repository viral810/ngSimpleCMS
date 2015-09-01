<?php

/* knp_menu.html.twig */
class __TwigTemplate_72d7255a33de2bf3bff51faedd9d9f4ee138489a7eeb2bbd5b1ae00484ec7dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe25e42c4b09ba393f1a45bf65cfdc1f942f3cb255e3a267956bfbe608e9fd65 = $this->env->getExtension("native_profiler");
        $__internal_fe25e42c4b09ba393f1a45bf65cfdc1f942f3cb255e3a267956bfbe608e9fd65->enter($__internal_fe25e42c4b09ba393f1a45bf65cfdc1f942f3cb255e3a267956bfbe608e9fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('list', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('children', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('item', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('linkElement', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('spanElement', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('label', $context, $blocks);
        
        $__internal_fe25e42c4b09ba393f1a45bf65cfdc1f942f3cb255e3a267956bfbe608e9fd65->leave($__internal_fe25e42c4b09ba393f1a45bf65cfdc1f942f3cb255e3a267956bfbe608e9fd65_prof);

    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_ed61bf08b48e050c574ab6da601e5943b4fb0d8a73307116443f0b48f77f129c = $this->env->getExtension("native_profiler");
        $__internal_ed61bf08b48e050c574ab6da601e5943b4fb0d8a73307116443f0b48f77f129c->enter($__internal_ed61bf08b48e050c574ab6da601e5943b4fb0d8a73307116443f0b48f77f129c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ed61bf08b48e050c574ab6da601e5943b4fb0d8a73307116443f0b48f77f129c->leave($__internal_ed61bf08b48e050c574ab6da601e5943b4fb0d8a73307116443f0b48f77f129c_prof);

    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        $__internal_1bbadd26e12c65720845b871d96c3ec0bb8374333979f2885044a293c6b02065 = $this->env->getExtension("native_profiler");
        $__internal_1bbadd26e12c65720845b871d96c3ec0bb8374333979f2885044a293c6b02065->enter($__internal_1bbadd26e12c65720845b871d96c3ec0bb8374333979f2885044a293c6b02065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 16
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 17
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_1bbadd26e12c65720845b871d96c3ec0bb8374333979f2885044a293c6b02065->leave($__internal_1bbadd26e12c65720845b871d96c3ec0bb8374333979f2885044a293c6b02065_prof);

    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        $__internal_15d428491b3c92eb4afa2cd62112b29e8dc726cb67f3462feb438857bc90dcd6 = $this->env->getExtension("native_profiler");
        $__internal_15d428491b3c92eb4afa2cd62112b29e8dc726cb67f3462feb438857bc90dcd6->enter($__internal_15d428491b3c92eb4afa2cd62112b29e8dc726cb67f3462feb438857bc90dcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 21
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 22
            echo "    <ul";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 23
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_15d428491b3c92eb4afa2cd62112b29e8dc726cb67f3462feb438857bc90dcd6->leave($__internal_15d428491b3c92eb4afa2cd62112b29e8dc726cb67f3462feb438857bc90dcd6_prof);

    }

    // line 28
    public function block_children($context, array $blocks = array())
    {
        $__internal_0a28a4f364e5f9273a559fc0f9d9cb789552a11ba8a7c382f8b03f2b8f974a98 = $this->env->getExtension("native_profiler");
        $__internal_0a28a4f364e5f9273a559fc0f9d9cb789552a11ba8a7c382f8b03f2b8f974a98->enter($__internal_0a28a4f364e5f9273a559fc0f9d9cb789552a11ba8a7c382f8b03f2b8f974a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 30
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 31
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 33
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 34
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 41
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_0a28a4f364e5f9273a559fc0f9d9cb789552a11ba8a7c382f8b03f2b8f974a98->leave($__internal_0a28a4f364e5f9273a559fc0f9d9cb789552a11ba8a7c382f8b03f2b8f974a98_prof);

    }

    // line 44
    public function block_item($context, array $blocks = array())
    {
        $__internal_629def7e94394a934b633c41f0b566f26ccbcfaf7aa2d5ddcfc8698bb54e77b4 = $this->env->getExtension("native_profiler");
        $__internal_629def7e94394a934b633c41f0b566f26ccbcfaf7aa2d5ddcfc8698bb54e77b4->enter($__internal_629def7e94394a934b633c41f0b566f26ccbcfaf7aa2d5ddcfc8698bb54e77b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 45
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 47
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 48
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array())) {
                // line 49
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 50
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor", array())) {
                // line 51
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 53
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 54
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 56
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 57
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 59
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 60
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 61
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 64
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
            echo ">";
            // line 65
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 66
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 68
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 71
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 72
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 73
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 74
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_629def7e94394a934b633c41f0b566f26ccbcfaf7aa2d5ddcfc8698bb54e77b4->leave($__internal_629def7e94394a934b633c41f0b566f26ccbcfaf7aa2d5ddcfc8698bb54e77b4_prof);

    }

    // line 79
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_e487970c6d8340299aedccd93e1976b8e7c4fee04608553fb751c86c7dde8d62 = $this->env->getExtension("native_profiler");
        $__internal_e487970c6d8340299aedccd93e1976b8e7c4fee04608553fb751c86c7dde8d62->enter($__internal_e487970c6d8340299aedccd93e1976b8e7c4fee04608553fb751c86c7dde8d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_e487970c6d8340299aedccd93e1976b8e7c4fee04608553fb751c86c7dde8d62->leave($__internal_e487970c6d8340299aedccd93e1976b8e7c4fee04608553fb751c86c7dde8d62_prof);

    }

    // line 81
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_92cdc01b453678dca04a13b1ca626b7e1b302602e469a5ddbc5764abd045a49f = $this->env->getExtension("native_profiler");
        $__internal_92cdc01b453678dca04a13b1ca626b7e1b302602e469a5ddbc5764abd045a49f->enter($__internal_92cdc01b453678dca04a13b1ca626b7e1b302602e469a5ddbc5764abd045a49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_92cdc01b453678dca04a13b1ca626b7e1b302602e469a5ddbc5764abd045a49f->leave($__internal_92cdc01b453678dca04a13b1ca626b7e1b302602e469a5ddbc5764abd045a49f_prof);

    }

    // line 83
    public function block_label($context, array $blocks = array())
    {
        $__internal_1c8f3ddb8d66c03c7234402e564e99a03fc34582ffbf39d5d9083506e70d36bf = $this->env->getExtension("native_profiler");
        $__internal_1c8f3ddb8d66c03c7234402e564e99a03fc34582ffbf39d5d9083506e70d36bf->enter($__internal_1c8f3ddb8d66c03c7234402e564e99a03fc34582ffbf39d5d9083506e70d36bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_1c8f3ddb8d66c03c7234402e564e99a03fc34582ffbf39d5d9083506e70d36bf->leave($__internal_1c8f3ddb8d66c03c7234402e564e99a03fc34582ffbf39d5d9083506e70d36bf_prof);

    }

    // line 1
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d740055dd140dfb17cc19370fe53b9ddd3cd253bd5e52945229a7944dc727088 = $this->env->getExtension("native_profiler");
            $__internal_d740055dd140dfb17cc19370fe53b9ddd3cd253bd5e52945229a7944dc727088->enter($__internal_d740055dd140dfb17cc19370fe53b9ddd3cd253bd5e52945229a7944dc727088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_d740055dd140dfb17cc19370fe53b9ddd3cd253bd5e52945229a7944dc727088->leave($__internal_d740055dd140dfb17cc19370fe53b9ddd3cd253bd5e52945229a7944dc727088_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 4,  327 => 3,  323 => 2,  308 => 1,  292 => 83,  276 => 81,  258 => 79,  246 => 74,  244 => 73,  242 => 72,  240 => 71,  236 => 68,  232 => 66,  230 => 65,  226 => 64,  223 => 61,  221 => 60,  219 => 59,  216 => 57,  214 => 56,  211 => 54,  209 => 53,  206 => 51,  204 => 50,  202 => 49,  200 => 48,  198 => 47,  196 => 45,  190 => 44,  183 => 41,  181 => 40,  164 => 37,  147 => 36,  144 => 34,  142 => 33,  140 => 31,  138 => 30,  132 => 28,  121 => 23,  116 => 22,  114 => 21,  108 => 20,  101 => 17,  99 => 16,  93 => 15,  83 => 11,  81 => 10,  75 => 9,  68 => 83,  65 => 82,  63 => 81,  60 => 80,  58 => 79,  55 => 78,  53 => 44,  50 => 43,  48 => 28,  45 => 27,  43 => 20,  40 => 19,  38 => 15,  35 => 14,  33 => 9,  30 => 8,);
    }
}
