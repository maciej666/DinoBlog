<?php

/* PipiTrainingBundle:Form:form_theme.html.twig */
class __TwigTemplate_70066d5ebfffa1f88c23899fc6bb097cabdbb015b44d19f30bd1cccd257ed2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'form_errors' => array($this, 'block_form_errors'),
            'button_row' => array($this, 'block_button_row'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f6ebf0ea70633b7aab27329f3982348284dbd3f82cf214e390793c979f26d97 = $this->env->getExtension("native_profiler");
        $__internal_9f6ebf0ea70633b7aab27329f3982348284dbd3f82cf214e390793c979f26d97->enter($__internal_9f6ebf0ea70633b7aab27329f3982348284dbd3f82cf214e390793c979f26d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Form:form_theme.html.twig"));

        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 17
        $this->displayBlock('form_row', $context, $blocks);
        // line 29
        $this->displayBlock('form_label', $context, $blocks);
        // line 54
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 64
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 71
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 106
        $this->displayBlock('form_errors', $context, $blocks);
        // line 114
        $this->displayBlock('button_row', $context, $blocks);
        // line 124
        $this->displayBlock('button_widget', $context, $blocks);
        // line 141
        $this->displayBlock('submit_widget', $context, $blocks);
        
        $__internal_9f6ebf0ea70633b7aab27329f3982348284dbd3f82cf214e390793c979f26d97->leave($__internal_9f6ebf0ea70633b7aab27329f3982348284dbd3f82cf214e390793c979f26d97_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c551681228d5e0a05dc1800e606e3f3920db5fdb7db1130cede6de24a67a8e0d = $this->env->getExtension("native_profiler");
        $__internal_c551681228d5e0a05dc1800e606e3f3920db5fdb7db1130cede6de24a67a8e0d->enter($__internal_c551681228d5e0a05dc1800e606e3f3920db5fdb7db1130cede6de24a67a8e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 2
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 3
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 4
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 6
            $context["form_method"] = "POST";
        }
        // line 8
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "form-horizontal")) : ("form-horizontal")))));
        echo "   ";
        // line 9
        echo "    <form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 10
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 11
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_c551681228d5e0a05dc1800e606e3f3920db5fdb7db1130cede6de24a67a8e0d->leave($__internal_c551681228d5e0a05dc1800e606e3f3920db5fdb7db1130cede6de24a67a8e0d_prof);

    }

    // line 17
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4d4e1c1fd7cb6a447c4c3fcb0d373fbfc26c5e46355bc17e5226bb7e3e17a8a0 = $this->env->getExtension("native_profiler");
        $__internal_4d4e1c1fd7cb6a447c4c3fcb0d373fbfc26c5e46355bc17e5226bb7e3e17a8a0->enter($__internal_4d4e1c1fd7cb6a447c4c3fcb0d373fbfc26c5e46355bc17e5226bb7e3e17a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 18
        echo "<div class=\"form-group ";
        echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? (" has-error") : (""));
        echo "\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 20
        echo "<div class=\"col-sm-10\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 23
        echo "</div>
    </div>";
        
        $__internal_4d4e1c1fd7cb6a447c4c3fcb0d373fbfc26c5e46355bc17e5226bb7e3e17a8a0->leave($__internal_4d4e1c1fd7cb6a447c4c3fcb0d373fbfc26c5e46355bc17e5226bb7e3e17a8a0_prof);

    }

    // line 29
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_499d2a3061a65c56b8ba85217ccdda7449360c1acb204ebe747c045e6ef76bb8 = $this->env->getExtension("native_profiler");
        $__internal_499d2a3061a65c56b8ba85217ccdda7449360c1acb204ebe747c045e6ef76bb8->enter($__internal_499d2a3061a65c56b8ba85217ccdda7449360c1acb204ebe747c045e6ef76bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 30
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 31
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 32
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 34
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 35
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 37
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-sm-2 control-label"))));
            // line 38
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 39
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 40
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 41
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 42
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 45
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 48
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_499d2a3061a65c56b8ba85217ccdda7449360c1acb204ebe747c045e6ef76bb8->leave($__internal_499d2a3061a65c56b8ba85217ccdda7449360c1acb204ebe747c045e6ef76bb8_prof);

    }

    // line 54
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_05af8f89b16a29ccf7bcc608a1148a1fa670ce618dfafbf0233e2555718c7b09 = $this->env->getExtension("native_profiler");
        $__internal_05af8f89b16a29ccf7bcc608a1148a1fa670ce618dfafbf0233e2555718c7b09->enter($__internal_05af8f89b16a29ccf7bcc608a1148a1fa670ce618dfafbf0233e2555718c7b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 55
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 56
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 57
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
            // line 58
            echo "    ";
        }
        // line 59
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_05af8f89b16a29ccf7bcc608a1148a1fa670ce618dfafbf0233e2555718c7b09->leave($__internal_05af8f89b16a29ccf7bcc608a1148a1fa670ce618dfafbf0233e2555718c7b09_prof);

    }

    // line 64
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ee49d75c7489a9d21f633b3d6903cef3b4fe31c4d432e8c602a399942404de72 = $this->env->getExtension("native_profiler");
        $__internal_ee49d75c7489a9d21f633b3d6903cef3b4fe31c4d432e8c602a399942404de72->enter($__internal_ee49d75c7489a9d21f633b3d6903cef3b4fe31c4d432e8c602a399942404de72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 65
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 66
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_ee49d75c7489a9d21f633b3d6903cef3b4fe31c4d432e8c602a399942404de72->leave($__internal_ee49d75c7489a9d21f633b3d6903cef3b4fe31c4d432e8c602a399942404de72_prof);

    }

    // line 71
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2dba3a9551b15190387dd6cd3a9bed1874f882adfb83987be95cf9c959f096e7 = $this->env->getExtension("native_profiler");
        $__internal_2dba3a9551b15190387dd6cd3a9bed1874f882adfb83987be95cf9c959f096e7->enter($__internal_2dba3a9551b15190387dd6cd3a9bed1874f882adfb83987be95cf9c959f096e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 72
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 73
            $context["required"] = false;
        }
        // line 75
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 76
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 77
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 78
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 80
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 81
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 82
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 83
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 84
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 87
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 88
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 89
        echo "</select>";
        
        $__internal_2dba3a9551b15190387dd6cd3a9bed1874f882adfb83987be95cf9c959f096e7->leave($__internal_2dba3a9551b15190387dd6cd3a9bed1874f882adfb83987be95cf9c959f096e7_prof);

    }

    // line 94
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a959e562af7e00ff4f64843ec22a48ce2ecfc464a04453cc57eb9e4d2de9d2f1 = $this->env->getExtension("native_profiler");
        $__internal_a959e562af7e00ff4f64843ec22a48ce2ecfc464a04453cc57eb9e4d2de9d2f1->enter($__internal_a959e562af7e00ff4f64843ec22a48ce2ecfc464a04453cc57eb9e4d2de9d2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 96
            echo "        <div class=\"checkbox\">
            <label>
                ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            echo "
            </label>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a959e562af7e00ff4f64843ec22a48ce2ecfc464a04453cc57eb9e4d2de9d2f1->leave($__internal_a959e562af7e00ff4f64843ec22a48ce2ecfc464a04453cc57eb9e4d2de9d2f1_prof);

    }

    // line 106
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_06cef6934cc7b21956ddc4379dd02f8f7d820d16595a99c83c1d7109553ac6cc = $this->env->getExtension("native_profiler");
        $__internal_06cef6934cc7b21956ddc4379dd02f8f7d820d16595a99c83c1d7109553ac6cc->enter($__internal_06cef6934cc7b21956ddc4379dd02f8f7d820d16595a99c83c1d7109553ac6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 108
            echo "<span class=\"help-block\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_06cef6934cc7b21956ddc4379dd02f8f7d820d16595a99c83c1d7109553ac6cc->leave($__internal_06cef6934cc7b21956ddc4379dd02f8f7d820d16595a99c83c1d7109553ac6cc_prof);

    }

    // line 114
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_88f3adb3d6edf536b584b2824f98528d5f3e90015b4ded064d82c4fcb0ab1aff = $this->env->getExtension("native_profiler");
        $__internal_88f3adb3d6edf536b584b2824f98528d5f3e90015b4ded064d82c4fcb0ab1aff->enter($__internal_88f3adb3d6edf536b584b2824f98528d5f3e90015b4ded064d82c4fcb0ab1aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 115
        echo "<div class = \"form-group\">
        <div class = \"col-sm-offset-2 col-sm-9\">";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 118
        echo "</div>
    </div>";
        
        $__internal_88f3adb3d6edf536b584b2824f98528d5f3e90015b4ded064d82c4fcb0ab1aff->leave($__internal_88f3adb3d6edf536b584b2824f98528d5f3e90015b4ded064d82c4fcb0ab1aff_prof);

    }

    // line 124
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1b0677a98983413de42523f51ab799342a04eb946fa5ff242259d63176b8c532 = $this->env->getExtension("native_profiler");
        $__internal_1b0677a98983413de42523f51ab799342a04eb946fa5ff242259d63176b8c532->enter($__internal_1b0677a98983413de42523f51ab799342a04eb946fa5ff242259d63176b8c532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 125
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 126
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 127
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 128
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 129
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 132
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 135
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn"))));
        // line 136
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_1b0677a98983413de42523f51ab799342a04eb946fa5ff242259d63176b8c532->leave($__internal_1b0677a98983413de42523f51ab799342a04eb946fa5ff242259d63176b8c532_prof);

    }

    // line 141
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_89fb5f4dde289489cf03d44d716a9aea4a60018fcb5c3831c10753c675740695 = $this->env->getExtension("native_profiler");
        $__internal_89fb5f4dde289489cf03d44d716a9aea4a60018fcb5c3831c10753c675740695->enter($__internal_89fb5f4dde289489cf03d44d716a9aea4a60018fcb5c3831c10753c675740695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 142
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 143
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-success")) : ("btn-success")))));
        // line 144
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_89fb5f4dde289489cf03d44d716a9aea4a60018fcb5c3831c10753c675740695->leave($__internal_89fb5f4dde289489cf03d44d716a9aea4a60018fcb5c3831c10753c675740695_prof);

    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Form:form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  426 => 144,  424 => 143,  422 => 142,  416 => 141,  403 => 136,  401 => 135,  397 => 132,  394 => 129,  393 => 128,  392 => 127,  390 => 126,  388 => 125,  382 => 124,  374 => 118,  372 => 117,  369 => 115,  363 => 114,  350 => 108,  346 => 107,  340 => 106,  323 => 98,  319 => 96,  315 => 95,  309 => 94,  302 => 89,  300 => 88,  298 => 87,  292 => 84,  290 => 83,  288 => 82,  286 => 81,  284 => 80,  275 => 78,  273 => 77,  266 => 76,  264 => 75,  261 => 73,  259 => 72,  253 => 71,  242 => 66,  240 => 65,  234 => 64,  217 => 59,  214 => 58,  211 => 57,  209 => 56,  207 => 55,  201 => 54,  178 => 48,  174 => 45,  171 => 42,  170 => 41,  169 => 40,  167 => 39,  164 => 38,  162 => 37,  159 => 35,  157 => 34,  154 => 32,  152 => 31,  150 => 30,  144 => 29,  136 => 23,  134 => 22,  132 => 21,  130 => 20,  128 => 19,  124 => 18,  118 => 17,  108 => 11,  106 => 10,  79 => 9,  76 => 8,  73 => 6,  70 => 4,  68 => 3,  66 => 2,  60 => 1,  53 => 141,  51 => 124,  49 => 114,  47 => 106,  45 => 94,  43 => 71,  41 => 64,  39 => 54,  37 => 29,  35 => 17,  33 => 1,);
    }
}
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     {%  set attr = attr|merge({'class':(attr.class|default('form-horizontal'))|trim}) %}   {#odc. 61,  3 min#}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}"{% if action != '' %} action="{{ action }}"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {#---------------------------------------------------#}*/
/* */
/* {%- block form_row -%}*/
/*     <div class="form-group {{ errors|length > 0 ? ' has-error':'' }}">*/
/*         {{- form_label(form) -}}*/
/*         <div class="col-sm-10">*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*         </div>*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {#--------------------------------------------------------#}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% set label_attr = label_attr|merge({'class' : (label_attr.class|default('')~' col-sm-2 control-label')|trim }) %}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {#------------------------------------------------------------------#}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {% if type != 'file'%}*/
/*         {% set attr = attr|merge({'class' : (attr.class|default('') ~ ' form-control') | trim }) %}*/
/*     {% endif %}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {#------------------------------------------------------------------------------#}*/
/* */
/* {%- block textarea_widget -%}*/
/*     {% set attr = attr|merge({'class' : (attr.class|default('') ~ ' form-control') | trim }) %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {#-----------------------------------------------------------------#}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     {% set attr = attr|merge({'class' : (attr.class|default('') ~ ' form-control') | trim }) %}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {#--------------------------------------------------------------------#}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     {% for child in form %}*/
/*         <div class="checkbox">*/
/*             <label>*/
/*                 {{ form_widget(child) }} {{ child.vars.label }}*/
/*             </label>*/
/*         </div>*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {#--------------------------------------------------------------------------#}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- for error in errors -%}*/
/*         <span class="help-block"> {{ error.message }}</span>*/
/*     {%- endfor -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {#------------------------------------------------------------------------#}*/
/* */
/* {%- block button_row -%}*/
/*     <div class = "form-group">*/
/*         <div class = "col-sm-offset-2 col-sm-9">*/
/*             {{- form_widget(form) -}}*/
/*         </div>*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {#------------------------------------------------------------------------------#}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*             '%name%': name,*/
/*             '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     {% set attr = attr|merge({'class' : (attr.class|default('') ~ ' btn') | trim }) %}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {#----------------------------------------------------------------------------------#}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {% set attr = attr|merge({'class' : (attr.class|default('btn-success')) | trim }) %}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {#-------------------------------------------------------------------------------------#}*/
