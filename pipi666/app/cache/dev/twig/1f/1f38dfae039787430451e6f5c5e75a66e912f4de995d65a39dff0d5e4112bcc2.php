<?php

/* WebProfilerExtraBundle:Collector:twig.html.twig */
class __TwigTemplate_114aca886536564f48b32f0fc703ed67d73aef046c3f9648b5d9d220dfca0e53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "WebProfilerExtraBundle:Collector:twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbe30468f5149c3609e693b1677081e9515fef06029d8feef3d9da831eb3abff = $this->env->getExtension("native_profiler");
        $__internal_dbe30468f5149c3609e693b1677081e9515fef06029d8feef3d9da831eb3abff->enter($__internal_dbe30468f5149c3609e693b1677081e9515fef06029d8feef3d9da831eb3abff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerExtraBundle:Collector:twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe30468f5149c3609e693b1677081e9515fef06029d8feef3d9da831eb3abff->leave($__internal_dbe30468f5149c3609e693b1677081e9515fef06029d8feef3d9da831eb3abff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_995e6ebcb76c1fca381950e94c195111b59ed43c331263b7270fa272769992ec = $this->env->getExtension("native_profiler");
        $__internal_995e6ebcb76c1fca381950e94c195111b59ed43c331263b7270fa272769992ec->enter($__internal_995e6ebcb76c1fca381950e94c195111b59ed43c331263b7270fa272769992ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "displayInWdt", array())) {
            // line 5
            echo "        ";
            $context["icon"] = ('' === $tmp = "            <img height=\"28\" alt=\"Twig\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-info-piece-additional-detail\">Twig</span>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Template";
            // line 11
            echo (((1 == twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array())))) ? (":") : ("s"));
            echo "</b>
                <span>
                    ";
            // line 13
            if ((1 == twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array())))) {
                // line 14
                echo "                        ";
                $context["template"] = twig_first($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()));
                // line 15
                echo "                        ";
                if ($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path", array())) {
                    // line 16
                    echo "                            <a class=\"sf-toolbar-info-method\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path", array()), 1), "html", null, true);
                    echo "\">
                                ";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name", array()), "html", null, true);
                    echo "
                            </a>
                        ";
                } else {
                    // line 20
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 22
                echo "                    ";
            } else {
                // line 23
                echo "                        ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array())), "html", null, true);
                echo "
                    ";
            }
            // line 25
            echo "                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Globals</b>
                <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "globals", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Extensions</b>
                <span>";
            // line 33
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Tests</b>
                <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Filters</b>
                <span>";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Functions</b>
                <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions", array())), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 48
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "WebProfilerExtraBundle:Collector:twig.html.twig", 48)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 49
            echo "    ";
        }
        
        $__internal_995e6ebcb76c1fca381950e94c195111b59ed43c331263b7270fa272769992ec->leave($__internal_995e6ebcb76c1fca381950e94c195111b59ed43c331263b7270fa272769992ec_prof);

    }

    // line 52
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd6f325091094449b87e8801af0708212cdd36b4d546b9d78cb52f35336796cd = $this->env->getExtension("native_profiler");
        $__internal_bd6f325091094449b87e8801af0708212cdd36b4d546b9d78cb52f35336796cd->enter($__internal_bd6f325091094449b87e8801af0708212cdd36b4d546b9d78cb52f35336796cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 53
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAqCAYAAAAqAaJlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzBCQTQ1NUY0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzBCQTQ1NjA0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozMEJBNDU1RDRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMEJBNDU1RTRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PuwAElIAAAJ4SURBVHja7Ji9bhNBEMdnd++iiyIsW5ZfILYTKhJ4AzoKmkjUqaggXSRAPACCiCBBkCmh4BVQKCjyBJAmCorjlJTY4Dvuc2/ZOeei+CPGvsTHnnRjySet15qf5v47szOkWCrdLZfLd8IwdEBRs2zbuL++/lmToLdr1cWHQcAh4FwpSEIIMErB8VyoVCquJiMaIqh8QLFwTSlQLrm6fyxAPs55qOEPXIIWFhZg6+WreVVgGWOlw4ODH292XoMlegrVzm9YqteU0W2zdWKHQvStaeP+cNQ8NvB1pGVCwo0L2FhYlSJ9ISxGFEGfPn4ivu5/gzldmzmI5wdwa/UmPHvxPHqV9epiR2p28sh2frWh0+1KWD0FWD/yN3VkY6Myx2Gew+fMT/8EfihkyHLYVLNBbIE8oSj8NAz9oL+pYeP8emNlBQzDAD2F1OVL0KXl5eSRfbCxQTKj2eZxKzuw9VpVZKbcPtrclOV2f6jcor6uS33tNBp9kb+3tia6pimvdzTBAcNyuwpb29skkWYtywLTsWEu6C+3fhCAaZmj2g+wHCdRxfMCP/KX+IARKtsKMlwGqVynI66OuEYTlmf0g/7yCpbD5rAqwarWe+UyyGFz2P8Fi7euzPVgIHD+BKdf/eujt4toXjW0fwLr+UkIe/j9yACCc1I4/Tp/HbvgloYfQob3T2A9Pwlg46LwtvFuKq+fdnevrA1qtk6KU8ngXyNP2fY4Az3bpbSe6shzEH6mB+yykblKY4zN47CODMJiO+J6Lnz88N5WJqdSBu32T/A5P8uvWtxTOa4HX/b21EqsMog6Y2fZBWGdKMcR8ltPYWic0ArI+VeAAQAHsPLrOHrwLwAAAABJRU5ErkJggg==\" />
        </span>
        <strong>Twig</strong>
        <span class=\"count\">
            <span>";
        // line 59
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions", array())), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_bd6f325091094449b87e8801af0708212cdd36b4d546b9d78cb52f35336796cd->leave($__internal_bd6f325091094449b87e8801af0708212cdd36b4d546b9d78cb52f35336796cd_prof);

    }

    // line 64
    public function block_panel($context, array $blocks = array())
    {
        $__internal_823aba490a1f3fef2ff4fb373c838ca01898fae1c808ebdcb0449f78c1a99ae8 = $this->env->getExtension("native_profiler");
        $__internal_823aba490a1f3fef2ff4fb373c838ca01898fae1c808ebdcb0449f78c1a99ae8->enter($__internal_823aba490a1f3fef2ff4fb373c838ca01898fae1c808ebdcb0449f78c1a99ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 65
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 66
        echo "
    ";
        // line 67
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 2)) {
            // line 68
            echo "        <h2>Twig metrics</h2>
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 71
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "globals", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Globals</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 75
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Extensions</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 79
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Tests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 83
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Filters</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 87
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Functions</span>
            </div>
        </div>
    ";
        }
        // line 92
        echo "
    ";
        // line 93
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()))) {
            // line 94
            echo "        <h2>Twig Templates</h2>
        <table>
            <tr>
                <th>Template</th>
                <th>Parameters</th>
            </tr>
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 101
                echo "            <tr>
                <th>
                    ";
                // line 103
                if ($this->getAttribute($context["template"], "path", array())) {
                    // line 104
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('code')->getFileLink($this->getAttribute($context["template"], "path", array()), 1), "html", null, true);
                    echo "\">
                            ";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "name", array()), "html", null, true);
                    echo "
                        </a>
                    ";
                } else {
                    // line 108
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 110
                echo "                </th>
                <td>
                    ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["template"], "parameters", array()));
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
                foreach ($context['_seq'] as $context["parameter"] => $context["metadata"]) {
                    // line 113
                    echo "                        ";
                    if (($this->getAttribute($context["metadata"], "type", array()) == "boolean")) {
                        // line 114
                        echo "                            ";
                        $context["value"] = (($this->getAttribute($context["metadata"], "value", array())) ? ("true") : ("false"));
                        // line 115
                        echo "                        ";
                    } elseif (($this->getAttribute($context["metadata"], "type", array()) == "string")) {
                        // line 116
                        echo "                            ";
                        $context["maxStrLength"] = 40;
                        // line 117
                        echo "                            ";
                        $context["value"] = $this->getAttribute($context["metadata"], "value", array());
                        // line 118
                        echo "                            ";
                        if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > (isset($context["maxStrLength"]) ? $context["maxStrLength"] : $this->getContext($context, "maxStrLength")))) {
                            // line 119
                            echo "                                ";
                            $context["value"] = (twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, (isset($context["maxStrLength"]) ? $context["maxStrLength"] : $this->getContext($context, "maxStrLength"))) . "…");
                            // line 120
                            echo "                            ";
                        }
                        // line 121
                        echo "                            ";
                        $context["value"] = (("\"" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "\"");
                        // line 122
                        echo "                        ";
                    } else {
                        // line 123
                        echo "                            ";
                        $context["value"] = $this->getAttribute($context["metadata"], "value", array());
                        // line 124
                        echo "                        ";
                    }
                    // line 125
                    echo "                        <code>
                            ";
                    // line 126
                    echo twig_escape_filter($this->env, $context["parameter"], "html", null, true);
                    echo ": <em style=\"color: #aaa\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "type", array()), "html", null, true);
                    echo "</em>
                            <span style=\"color: #009E00\">";
                    // line 127
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "</span>
                        </code>
                        ";
                    // line 129
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "<br />";
                    }
                    // line 130
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
                unset($context['_seq'], $context['_iterated'], $context['parameter'], $context['metadata'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        </table>
    ";
        }
        // line 136
        echo "
    ";
        // line 137
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "globals", array()))) {
            // line 138
            echo "        <h2>Twig Globals</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "globals", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["global"]) {
                // line 148
                echo "                    <tr>
                        <th>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["global"], "name", array()), "html", null, true);
                echo "</th>
                        <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["global"], "value", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['global'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "            </tbody>
        </table>
    ";
        }
        // line 156
        echo "
    ";
        // line 157
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions", array()))) {
            // line 158
            echo "        <h2>Twig Extensions</h2>
        <table>
            <thead>
                <tr>
                    <th>Extension</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 168
                echo "                    <tr>
                        <th>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "html", null, true);
                echo "</th>
                        <td>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "class", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "            </tbody>
        </table>
    ";
        }
        // line 176
        echo "
    ";
        // line 177
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests", array()))) {
            // line 178
            echo "        <h2>Twig Tests available</h2>
        <table>
            <thead>
                <tr>
                    <th>Test</th>
                    <th>Call</th>
                    <th>Extension</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 189
                echo "                    <tr>
                        <th>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
                echo "</th>
                        <td>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "call", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "extension", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "            </tbody>
        </table>
    ";
        }
        // line 198
        echo "
    ";
        // line 199
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters", array()))) {
            // line 200
            echo "        <h2>Twig Filters available</h2>
        <table>
            <thead>
                <tr>
                    <th>Filter</th>
                    <th>Call</th>
                    <th>Extension</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 211
                echo "                    <tr>
                        <th>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "</th>
                        <td>";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "call", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "extension", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "            </tbody>
        </table>
    ";
        }
        // line 220
        echo "
    ";
        // line 221
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions", array()))) {
            // line 222
            echo "        <h2>Twig Functions available</h2>
        <table>
            <thead>
                <tr>
                    <th>Function</th>
                    <th>Call</th>
                    <th>Extension</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
                // line 233
                echo "                    <tr>
                        <th>";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["function"], "name", array()), "html", null, true);
                echo "</th>
                        <td>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["function"], "call", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["function"], "extension", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_823aba490a1f3fef2ff4fb373c838ca01898fae1c808ebdcb0449f78c1a99ae8->leave($__internal_823aba490a1f3fef2ff4fb373c838ca01898fae1c808ebdcb0449f78c1a99ae8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerExtraBundle:Collector:twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 239,  573 => 236,  569 => 235,  565 => 234,  562 => 233,  558 => 232,  546 => 222,  544 => 221,  541 => 220,  536 => 217,  527 => 214,  523 => 213,  519 => 212,  516 => 211,  512 => 210,  500 => 200,  498 => 199,  495 => 198,  490 => 195,  481 => 192,  477 => 191,  473 => 190,  470 => 189,  466 => 188,  454 => 178,  452 => 177,  449 => 176,  444 => 173,  435 => 170,  431 => 169,  428 => 168,  424 => 167,  413 => 158,  411 => 157,  408 => 156,  403 => 153,  394 => 150,  390 => 149,  387 => 148,  383 => 147,  372 => 138,  370 => 137,  367 => 136,  363 => 134,  355 => 131,  341 => 130,  337 => 129,  332 => 127,  326 => 126,  323 => 125,  320 => 124,  317 => 123,  314 => 122,  311 => 121,  308 => 120,  305 => 119,  302 => 118,  299 => 117,  296 => 116,  293 => 115,  290 => 114,  287 => 113,  270 => 112,  266 => 110,  260 => 108,  254 => 105,  249 => 104,  247 => 103,  243 => 101,  239 => 100,  231 => 94,  229 => 93,  226 => 92,  218 => 87,  211 => 83,  204 => 79,  197 => 75,  190 => 71,  185 => 68,  183 => 67,  180 => 66,  177 => 65,  171 => 64,  160 => 59,  152 => 53,  146 => 52,  138 => 49,  135 => 48,  129 => 45,  122 => 41,  115 => 37,  108 => 33,  101 => 29,  95 => 25,  89 => 23,  86 => 22,  80 => 20,  74 => 17,  69 => 16,  66 => 15,  63 => 14,  61 => 13,  56 => 11,  53 => 10,  50 => 9,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.displayInWdt %}*/
/*         {% set icon %}*/
/*             <img height="28" alt="Twig" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC"/>*/
/*             <span class="sf-toolbar-info-piece-additional-detail">Twig</span>*/
/*         {% endset %}*/
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Template{{ 1 == collector.templates|length ? ':' : 's'}}</b>*/
/*                 <span>*/
/*                     {% if 1 == collector.templates|length %}*/
/*                         {% set template = collector.templates|first %}*/
/*                         {% if template.path %}*/
/*                             <a class="sf-toolbar-info-method" href="{{ template.path|file_link(1) }}">*/
/*                                 {{ template.name }}*/
/*                             </a>*/
/*                         {% else %}*/
/*                             {{ template.name }}*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {{ collector.templates|length }}*/
/*                     {% endif %}*/
/*                 </span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Globals</b>*/
/*                 <span>{{ collector.globals|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Extensions</b>*/
/*                 <span>{{ collector.extensions|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>avail. Tests</b>*/
/*                 <span>{{ collector.tests|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>avail. Filters</b>*/
/*                 <span>{{ collector.filters|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>avail. Functions</b>*/
/*                 <span>{{ collector.functions|length }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/*         {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">*/
/*             <img width=30 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAqCAYAAAAqAaJlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzBCQTQ1NUY0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzBCQTQ1NjA0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozMEJBNDU1RDRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMEJBNDU1RTRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PuwAElIAAAJ4SURBVHja7Ji9bhNBEMdnd++iiyIsW5ZfILYTKhJ4AzoKmkjUqaggXSRAPACCiCBBkCmh4BVQKCjyBJAmCorjlJTY4Dvuc2/ZOeei+CPGvsTHnnRjySet15qf5v47szOkWCrdLZfLd8IwdEBRs2zbuL++/lmToLdr1cWHQcAh4FwpSEIIMErB8VyoVCquJiMaIqh8QLFwTSlQLrm6fyxAPs55qOEPXIIWFhZg6+WreVVgGWOlw4ODH292XoMlegrVzm9YqteU0W2zdWKHQvStaeP+cNQ8NvB1pGVCwo0L2FhYlSJ9ISxGFEGfPn4ivu5/gzldmzmI5wdwa/UmPHvxPHqV9epiR2p28sh2frWh0+1KWD0FWD/yN3VkY6Myx2Gew+fMT/8EfihkyHLYVLNBbIE8oSj8NAz9oL+pYeP8emNlBQzDAD2F1OVL0KXl5eSRfbCxQTKj2eZxKzuw9VpVZKbcPtrclOV2f6jcor6uS33tNBp9kb+3tia6pimvdzTBAcNyuwpb29skkWYtywLTsWEu6C+3fhCAaZmj2g+wHCdRxfMCP/KX+IARKtsKMlwGqVynI66OuEYTlmf0g/7yCpbD5rAqwarWe+UyyGFz2P8Fi7euzPVgIHD+BKdf/eujt4toXjW0fwLr+UkIe/j9yACCc1I4/Tp/HbvgloYfQob3T2A9Pwlg46LwtvFuKq+fdnevrA1qtk6KU8ngXyNP2fY4Az3bpbSe6shzEH6mB+yykblKY4zN47CODMJiO+J6Lnz88N5WJqdSBu32T/A5P8uvWtxTOa4HX/b21EqsMog6Y2fZBWGdKMcR8ltPYWic0ArI+VeAAQAHsPLrOHrwLwAAAABJRU5ErkJggg==" />*/
/*         </span>*/
/*         <strong>Twig</strong>*/
/*         <span class="count">*/
/*             <span>{{ collector.extensions|length }}</span>*/
/*         </span>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     {% if profiler_markup_version == 2 %}*/
/*         <h2>Twig metrics</h2>*/
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.globals|length }}</span>*/
/*                 <span class="label">Globals</span>*/
/*             </div>*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.extensions|length }}</span>*/
/*                 <span class="label">Extensions</span>*/
/*             </div>*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.tests|length }}</span>*/
/*                 <span class="label">Tests</span>*/
/*             </div>*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.filters|length }}</span>*/
/*                 <span class="label">Filters</span>*/
/*             </div>*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.functions|length }}</span>*/
/*                 <span class="label">Functions</span>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if collector.templates|length %}*/
/*         <h2>Twig Templates</h2>*/
/*         <table>*/
/*             <tr>*/
/*                 <th>Template</th>*/
/*                 <th>Parameters</th>*/
/*             </tr>*/
/*             {% for template in collector.templates %}*/
/*             <tr>*/
/*                 <th>*/
/*                     {% if template.path %}*/
/*                         <a href="{{ template.path|file_link(1) }}">*/
/*                             {{ template.name }}*/
/*                         </a>*/
/*                     {% else %}*/
/*                         {{ template.name }}*/
/*                     {% endif %}*/
/*                 </th>*/
/*                 <td>*/
/*                     {% for parameter, metadata in template.parameters %}*/
/*                         {% if metadata.type == 'boolean' %}*/
/*                             {% set value = metadata.value ? 'true' : 'false' %}*/
/*                         {% elseif metadata.type == 'string' %}*/
/*                             {% set maxStrLength = 40 %}*/
/*                             {% set value = metadata.value %}*/
/*                             {% if value|length > maxStrLength %}*/
/*                                 {% set value = value|slice(0, maxStrLength) ~ '…' %}*/
/*                             {% endif %}*/
/*                             {% set value = '"' ~ value ~ '"' %}*/
/*                         {% else %}*/
/*                             {% set value = metadata.value %}*/
/*                         {% endif %}*/
/*                         <code>*/
/*                             {{ parameter }}: <em style="color: #aaa">{{ metadata.type }}</em>*/
/*                             <span style="color: #009E00">{{ value }}</span>*/
/*                         </code>*/
/*                         {% if not loop.last %}<br />{% endif %}*/
/*                     {% endfor %}*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* */
/*     {% if collector.globals|length %}*/
/*         <h2>Twig Globals</h2>*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Name</th>*/
/*                     <th>Value</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for global in collector.globals %}*/
/*                     <tr>*/
/*                         <th>{{ global.name }}</th>*/
/*                         <td>{{ global.value }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/*     {% if collector.extensions|length %}*/
/*         <h2>Twig Extensions</h2>*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Extension</th>*/
/*                     <th>Class</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for extension in collector.extensions %}*/
/*                     <tr>*/
/*                         <th>{{ extension.name }}</th>*/
/*                         <td>{{ extension.class }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/*     {% if collector.tests|length %}*/
/*         <h2>Twig Tests available</h2>*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Test</th>*/
/*                     <th>Call</th>*/
/*                     <th>Extension</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for test in collector.tests %}*/
/*                     <tr>*/
/*                         <th>{{ test.name }}</th>*/
/*                         <td>{{ test.call }}</td>*/
/*                         <td>{{ test.extension }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/*     {% if collector.filters|length %}*/
/*         <h2>Twig Filters available</h2>*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Filter</th>*/
/*                     <th>Call</th>*/
/*                     <th>Extension</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for filter in collector.filters %}*/
/*                     <tr>*/
/*                         <th>{{ filter.name }}</th>*/
/*                         <td>{{ filter.call }}</td>*/
/*                         <td>{{ filter.extension }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/*     {% if collector.functions|length %}*/
/*         <h2>Twig Functions available</h2>*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Function</th>*/
/*                     <th>Call</th>*/
/*                     <th>Extension</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for function in collector.functions %}*/
/*                     <tr>*/
/*                         <th>{{ function.name }}</th>*/
/*                         <td>{{ function.call }}</td>*/
/*                         <td>{{ function.extension }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
