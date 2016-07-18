<?php

/* PipiTrainingBundle:Blog:macros.html.twig */
class __TwigTemplate_6aa7a919b2feefda5b96e3cc8b99b9f10ddd551d3861c5bc5d1032ee9d634f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getwidgetList($__title__ = null, $__listItems__ = null, $__btnLabel__ = null, $__btnUrl__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "listItems" => $__listItems__,
            "btnLabel" => $__btnLabel__,
            "btnUrl" => $__btnUrl__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    <section class=\"widget\">
        <h2>";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h2>
        <ul>
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listItems"]) ? $context["listItems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </ul>
        <p><a class=\"btn btn-default\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["btnUrl"]) ? $context["btnUrl"] : null), "html", null, true);
            echo "\" role=\"button\">";
            echo twig_escape_filter($this->env, (isset($context["btnLabel"]) ? $context["btnLabel"] : null), "html", null, true);
            echo " &raquo;</a></p>
    </section>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  58 => 9,  49 => 7,  45 => 6,  40 => 4,  36 => 2,  21 => 1,);
    }
}
/* {% macro widgetList(title, listItems, btnLabel, btnUrl) %}*/
/* */
/*     <section class="widget">*/
/*         <h2>{{ title }}</h2>*/
/*         <ul>*/
/*             {% for item in listItems %}*/
/*                 <li>{{ item }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         <p><a class="btn btn-default" href="{{ btnUrl }}" role="button">{{ btnLabel }} &raquo;</a></p>*/
/*     </section>*/
/* */
/* {% endmacro %}*/
