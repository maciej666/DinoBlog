<?php

/* WebProfilerExtraBundle:Collector:routing.html.twig */
class __TwigTemplate_bff914bb824247969b3e002ae804d8518a5cf11488f0e2485e58e2d9c2726d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "WebProfilerExtraBundle:Collector:routing.html.twig", 1);
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
        $__internal_d5858409ab587f31dda1a1f250b84643b699aaf2634e2d5aa81b3f30153d6c79 = $this->env->getExtension("native_profiler");
        $__internal_d5858409ab587f31dda1a1f250b84643b699aaf2634e2d5aa81b3f30153d6c79->enter($__internal_d5858409ab587f31dda1a1f250b84643b699aaf2634e2d5aa81b3f30153d6c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerExtraBundle:Collector:routing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5858409ab587f31dda1a1f250b84643b699aaf2634e2d5aa81b3f30153d6c79->leave($__internal_d5858409ab587f31dda1a1f250b84643b699aaf2634e2d5aa81b3f30153d6c79_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66dc9dd3bf5eca595d899460256714ddd8d4aaf76e5e21d1e1416736d24e5173 = $this->env->getExtension("native_profiler");
        $__internal_66dc9dd3bf5eca595d899460256714ddd8d4aaf76e5e21d1e1416736d24e5173->enter($__internal_66dc9dd3bf5eca595d899460256714ddd8d4aaf76e5e21d1e1416736d24e5173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "displayInWdt", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img height=\"28\" alt=\"Routing\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGMkUzNEM1QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGMkUzNEM1QzRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIyNjk4Nzc0NEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkYyRTM0QzVBNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+54re4wAAASZQTFRFPj4+ODg4Ozs7zMzN1NTUVlZWPz8/Nzc3PT49QUFBaGdnRkVFbm5uPDw8jY2NOTk5RENDPT4+RERET1BQXFxcOjo6dHR0PT09ZmVlQ0JCUFBQY2RkRkZGOzw7QUBA1NPULzAwaWlpoqGivr2+09PUwcDAQkJBPz8+m5ubwsLDW1lZPz9Av7/A4+XmPDw74OHiZmRlQ0NDZWRkVVRUPTw8RURERUVFSUlJNjc3UVBQNjY1ioqKy8zN3+DhcG9vzMvMLC0swsHCn56ehIODnJybSEdHycrKjIuLysnKU1NTz87Pf39/jYyMNDQ0SkpKi4mJxMPEPj8/s7Oz2NjYaWhoa2pqTk5NkY+QX19foaCgQEA/hIKDZ2hoX2BgUVJSQEBAP0BA////jskvbQAAAGJ0Uk5T/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////wAQVpKqAAAA6UlEQVR42mJIxAYYKBcVE45DB1I8DNIJmECEIQaLaCxCNB4I2AQRokAugzgHEIhzmvLGx8NFRaNkuIFA0tLJnBcuysSj48UMBvpBQoJQUTZ1TTdrHz4+PvfwYCW5QLAo0FBOD2cHdiDwFfAXNYmHi9pHW4GcEM/JL+HKBhOVcfHTA4syhgaYMUBF49VkjQX4mYBAwdvGkAHuBgnlCE9WIAjTYJaEiQoKqOqqyLOAgG0krzbMx0yKjnYGXEAQYiTEAPNFQjy/lpwFIxgwxCNE42XZ4mEAEWbxSAAsKo0sCg917DFEo/QAEGAAxRqwTIYyEikAAAAASUVORK5CYII=\"/>
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routecount", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">Routes</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Routes</b>
                <span>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routecount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Resources</b>
                <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "ressourcecount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 20
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "WebProfilerExtraBundle:Collector:routing.html.twig", 20)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 21
            echo "    ";
        }
        
        $__internal_66dc9dd3bf5eca595d899460256714ddd8d4aaf76e5e21d1e1416736d24e5173->leave($__internal_66dc9dd3bf5eca595d899460256714ddd8d4aaf76e5e21d1e1416736d24e5173_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2c6e50170e6f82c49b7bb807a68935a4fd2826687a296ce36821d264ba3bc84 = $this->env->getExtension("native_profiler");
        $__internal_d2c6e50170e6f82c49b7bb807a68935a4fd2826687a296ce36821d264ba3bc84->enter($__internal_d2c6e50170e6f82c49b7bb807a68935a4fd2826687a296ce36821d264ba3bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 25
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAqCAYAAAAnH9IiAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzBCQTQ1NjM0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzBCQTQ1NjQ0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozMEJBNDU2MTRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMEJBNDU2MjRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmcZMmUAAAR/SURBVHja7Flba1xVFP72OfvMZDLJJKmxtGhuGqN9l7ZYmkkbK0VaMD7YKhX0RWqLj/WnWItQRlGwgn0Q6YUGUyQJIWArhYKNaZuXJNZEx1zmkjmX7Vp7hiDBxtknZ2QC3cmawJCzz7fX/r71rX2OSA8MDANop3iJIk8hUJ/DoZijWJT00VyJeCXqeaQoShZ9qEpsh6FxWtiG4wnoJ6A3GTLqCYWpqqIGXbOCrRQCCsuyQi3o/6cHg7VtxBwHQRBsD067vo/GRAOODA6iNZXCWqlUW04zXXzKjk835u1VypyVruchny/g5b370NndjUwmg+XVVcRjsehBC0Jccj0NvH1HG3a2Pw0ppTFwj0AnGhN6vn2vHECxUMClby5p4DEnFi1oj7KbamrC60eP4sU9e9DR1Q2HeBki2SQyEiLN5xI1Dg4cogUIXL78LbJLy7CJ79GAZmT0O5BO49gbQ+v00KKwRBgtQhFQ3iWeq//wIOZmZ/HdlStbAy02iGdHSwvSlBXXdfV3S39l8eu9e3q7NytdGwdnWMbi6OvrQ6q1VYOcGB3F6NgYHCnN6CE2qY2cEWlbmg5CWMj+uYjPPj2PX6an6UaOUT13PRfNySTOnDmLnbt24ceREWS+yKBYLJJGHHNOiyrcyybwMw8eYOr+fcqyT9eY0YPF7AcKKdq5yfFxZD7PoECAq81yaBsXRAdpS+JjYESN8qJtDXByYgIjN28iR9WD5+DdZEHWDjT/CBGqe3AINAP9nkTHWuHRsXs3imtr+CObrUqI5o5IYIPAr1hwiO6ErueK4dMcLOLnOjvwwenTSJBL+lXaulGmnZiD3+fnce3qVRSpxsZkuCaRd8nzAgLciQ/PfoSWtja9kI36UlvNNG/b4sICLpz/BHenprQgVcjm0vM9Pd+x48fxTEcHSkSNyHsPm4RSLK4hc/Eiph4+1B0aZ7nsbEHZ40N23iYCNMo0Z2Uln8P0zIy+VWuqGa+9egTJROO6mMwBh38AYFX/j+WKnGpK4u2T72Dv/v3aKLSlk4BMQq3/VY/1CFUtPdQmRsMZbUo24uRbJ3Cgvx9379zRXR63lI5jJkhuoXtIhD29z+taz3f2DQ4E8nErU/8AzuXpKeoT3hwawsFDh7XlPtvVhXPnPi6XPkNOcoZTdABoJldUKtC64J5GRClEtusXenspw2lNBxZPQ0MDNfE9WkRhDgP6sVYlu+Njo1heWa3KWKoGHaPt/5no8PVXX+LEqXe17ebzeSw8ekSLoC5PWKF0yIu9fesn/EB27tI8ji2rkqf8r2wIbQaWPstdHx7W35967338NjeLC9TpreZyutMzB600nwtUowOiiz4FRd0w8aR8erl24wbi8bg+4+XorLdE28ota9jBHiClbXSNkewlcc6jfFwn4PPzc5o2bDRSRv7MJ9ouj1tStuHJW7f1ImoBWEUNGhWOS1sY229Uj8qssJPUAnCkNl5vrwmsKLdtq7RQtRJirfkaOWhVR/QQqN93h/96cuBMr6D8/pDPPPX+8nOZ428BBgA7wPgIPxrUNQAAAABJRU5ErkJggg==\" />
        </span>
        <strong>Routing</strong>
        <span class=\"count\">
            <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routecount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_d2c6e50170e6f82c49b7bb807a68935a4fd2826687a296ce36821d264ba3bc84->leave($__internal_d2c6e50170e6f82c49b7bb807a68935a4fd2826687a296ce36821d264ba3bc84_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1bfa399fc580935ba571ff70d0bca9aa2dcdbc96d6865e871602b9e788402092 = $this->env->getExtension("native_profiler");
        $__internal_1bfa399fc580935ba571ff70d0bca9aa2dcdbc96d6865e871602b9e788402092->enter($__internal_1bfa399fc580935ba571ff70d0bca9aa2dcdbc96d6865e871602b9e788402092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "
    <h2>Routes</h2>
    ";
        // line 39
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routecount", array())) {
            // line 40
            echo "        <em>No route.</em>
    ";
        } else {
            // line 42
            echo "        <table>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
                // line 44
                echo "                <tr ";
                if (($this->getAttribute($context["route"], "name", array()) == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "matchRoute", array()))) {
                    echo "class=\"status-success\"";
                }
                echo ">
                    <th>
                        ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "name", array()), "html", null, true);
                echo "
                    </th>
                    <th>
                        ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "method", array()), "html", null, true);
                echo "
                    </th>
                    <td>
                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "pattern", array()), "html", null, true);
                echo "<br />
                        <small>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "controller", array()), "html", null, true);
                echo "</small>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </table>
    ";
        }
        // line 59
        echo "
    <h2>Sources</h2>

    ";
        // line 62
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "ressourcecount", array())) {
            // line 63
            echo "        <em>No source.</em>
    ";
        } else {
            // line 65
            echo "        <table>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "ressources", array()));
            foreach ($context['_seq'] as $context["i"] => $context["ressource"]) {
                // line 67
                echo "                <tr>
                    <th>
                        ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["ressource"], "type", array()), "html", null, true);
                echo "
                    </th>
                    <td>
                        ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["ressource"], "path", array()), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "        </table>
    ";
        }
        // line 78
        echo "
";
        
        $__internal_1bfa399fc580935ba571ff70d0bca9aa2dcdbc96d6865e871602b9e788402092->leave($__internal_1bfa399fc580935ba571ff70d0bca9aa2dcdbc96d6865e871602b9e788402092_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerExtraBundle:Collector:routing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 78,  212 => 76,  202 => 72,  196 => 69,  192 => 67,  188 => 66,  185 => 65,  181 => 63,  179 => 62,  174 => 59,  170 => 57,  160 => 53,  156 => 52,  150 => 49,  144 => 46,  136 => 44,  132 => 43,  129 => 42,  125 => 40,  123 => 39,  119 => 37,  113 => 36,  102 => 31,  94 => 25,  88 => 24,  80 => 21,  77 => 20,  71 => 17,  64 => 13,  60 => 11,  57 => 10,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.displayInWdt %}*/
/*         {% set icon %}*/
/*             <img height="28" alt="Routing" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGMkUzNEM1QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGMkUzNEM1QzRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIyNjk4Nzc0NEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkYyRTM0QzVBNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+54re4wAAASZQTFRFPj4+ODg4Ozs7zMzN1NTUVlZWPz8/Nzc3PT49QUFBaGdnRkVFbm5uPDw8jY2NOTk5RENDPT4+RERET1BQXFxcOjo6dHR0PT09ZmVlQ0JCUFBQY2RkRkZGOzw7QUBA1NPULzAwaWlpoqGivr2+09PUwcDAQkJBPz8+m5ubwsLDW1lZPz9Av7/A4+XmPDw74OHiZmRlQ0NDZWRkVVRUPTw8RURERUVFSUlJNjc3UVBQNjY1ioqKy8zN3+DhcG9vzMvMLC0swsHCn56ehIODnJybSEdHycrKjIuLysnKU1NTz87Pf39/jYyMNDQ0SkpKi4mJxMPEPj8/s7Oz2NjYaWhoa2pqTk5NkY+QX19foaCgQEA/hIKDZ2hoX2BgUVJSQEBAP0BA////jskvbQAAAGJ0Uk5T/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////wAQVpKqAAAA6UlEQVR42mJIxAYYKBcVE45DB1I8DNIJmECEIQaLaCxCNB4I2AQRokAugzgHEIhzmvLGx8NFRaNkuIFA0tLJnBcuysSj48UMBvpBQoJQUTZ1TTdrHz4+PvfwYCW5QLAo0FBOD2cHdiDwFfAXNYmHi9pHW4GcEM/JL+HKBhOVcfHTA4syhgaYMUBF49VkjQX4mYBAwdvGkAHuBgnlCE9WIAjTYJaEiQoKqOqqyLOAgG0krzbMx0yKjnYGXEAQYiTEAPNFQjy/lpwFIxgwxCNE42XZ4mEAEWbxSAAsKo0sCg917DFEo/QAEGAAxRqwTIYyEikAAAAASUVORK5CYII="/>*/
/*             <span class="sf-toolbar-value">{{ collector.routecount }}</span>*/
/*             <span class="sf-toolbar-label">Routes</span>*/
/*         {% endset %}*/
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Routes</b>*/
/*                 <span>{{ collector.routecount }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Resources</b>*/
/*                 <span>{{ collector.ressourcecount }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/*         {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">*/
/*             <img width=30 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAqCAYAAAAnH9IiAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzBCQTQ1NjM0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzBCQTQ1NjQ0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozMEJBNDU2MTRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMEJBNDU2MjRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmcZMmUAAAR/SURBVHja7Flba1xVFP72OfvMZDLJJKmxtGhuGqN9l7ZYmkkbK0VaMD7YKhX0RWqLj/WnWItQRlGwgn0Q6YUGUyQJIWArhYKNaZuXJNZEx1zmkjmX7Vp7hiDBxtknZ2QC3cmawJCzz7fX/r71rX2OSA8MDANop3iJIk8hUJ/DoZijWJT00VyJeCXqeaQoShZ9qEpsh6FxWtiG4wnoJ6A3GTLqCYWpqqIGXbOCrRQCCsuyQi3o/6cHg7VtxBwHQRBsD067vo/GRAOODA6iNZXCWqlUW04zXXzKjk835u1VypyVruchny/g5b370NndjUwmg+XVVcRjsehBC0Jccj0NvH1HG3a2Pw0ppTFwj0AnGhN6vn2vHECxUMClby5p4DEnFi1oj7KbamrC60eP4sU9e9DR1Q2HeBki2SQyEiLN5xI1Dg4cogUIXL78LbJLy7CJ79GAZmT0O5BO49gbQ+v00KKwRBgtQhFQ3iWeq//wIOZmZ/HdlStbAy02iGdHSwvSlBXXdfV3S39l8eu9e3q7NytdGwdnWMbi6OvrQ6q1VYOcGB3F6NgYHCnN6CE2qY2cEWlbmg5CWMj+uYjPPj2PX6an6UaOUT13PRfNySTOnDmLnbt24ceREWS+yKBYLJJGHHNOiyrcyybwMw8eYOr+fcqyT9eY0YPF7AcKKdq5yfFxZD7PoECAq81yaBsXRAdpS+JjYESN8qJtDXByYgIjN28iR9WD5+DdZEHWDjT/CBGqe3AINAP9nkTHWuHRsXs3imtr+CObrUqI5o5IYIPAr1hwiO6ErueK4dMcLOLnOjvwwenTSJBL+lXaulGmnZiD3+fnce3qVRSpxsZkuCaRd8nzAgLciQ/PfoSWtja9kI36UlvNNG/b4sICLpz/BHenprQgVcjm0vM9Pd+x48fxTEcHSkSNyHsPm4RSLK4hc/Eiph4+1B0aZ7nsbEHZ40N23iYCNMo0Z2Uln8P0zIy+VWuqGa+9egTJROO6mMwBh38AYFX/j+WKnGpK4u2T72Dv/v3aKLSlk4BMQq3/VY/1CFUtPdQmRsMZbUo24uRbJ3Cgvx9379zRXR63lI5jJkhuoXtIhD29z+taz3f2DQ4E8nErU/8AzuXpKeoT3hwawsFDh7XlPtvVhXPnPi6XPkNOcoZTdABoJldUKtC64J5GRClEtusXenspw2lNBxZPQ0MDNfE9WkRhDgP6sVYlu+Njo1heWa3KWKoGHaPt/5no8PVXX+LEqXe17ebzeSw8ekSLoC5PWKF0yIu9fesn/EB27tI8ji2rkqf8r2wIbQaWPstdHx7W35967338NjeLC9TpreZyutMzB600nwtUowOiiz4FRd0w8aR8erl24wbi8bg+4+XorLdE28ota9jBHiClbXSNkewlcc6jfFwn4PPzc5o2bDRSRv7MJ9ouj1tStuHJW7f1ImoBWEUNGhWOS1sY229Uj8qssJPUAnCkNl5vrwmsKLdtq7RQtRJirfkaOWhVR/QQqN93h/96cuBMr6D8/pDPPPX+8nOZ428BBgA7wPgIPxrUNQAAAABJRU5ErkJggg==" />*/
/*         </span>*/
/*         <strong>Routing</strong>*/
/*         <span class="count">*/
/*             <span>{{ collector.routecount }}</span>*/
/*         </span>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/* */
/*     <h2>Routes</h2>*/
/*     {% if not collector.routecount %}*/
/*         <em>No route.</em>*/
/*     {% else %}*/
/*         <table>*/
/*             {% for route in collector.routes %}*/
/*                 <tr {% if route.name == collector.matchRoute %}class="status-success"{% endif %}>*/
/*                     <th>*/
/*                         {{ route.name }}*/
/*                     </th>*/
/*                     <th>*/
/*                         {{ route.method }}*/
/*                     </th>*/
/*                     <td>*/
/*                         {{ route.pattern }}<br />*/
/*                         <small>{{ route.controller }}</small>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* */
/*     <h2>Sources</h2>*/
/* */
/*     {% if not collector.ressourcecount %}*/
/*         <em>No source.</em>*/
/*     {% else %}*/
/*         <table>*/
/*             {% for i, ressource in collector.ressources %}*/
/*                 <tr>*/
/*                     <th>*/
/*                         {{ ressource.type }}*/
/*                     </th>*/
/*                     <td>*/
/*                         {{ ressource.path }}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
