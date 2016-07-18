<?php

/* PipiTrainingBundle:Blog:macros.html.twig */
class __TwigTemplate_44708e57a8520822e53b463e30fcd6e535357676ffdfaee696eec521b628537e extends Twig_Template
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
        $__internal_1d2e6660491a92ba00bfe391c5af3fbb2745bdddd8dbf4df67aa46730a4193b3 = $this->env->getExtension("native_profiler");
        $__internal_1d2e6660491a92ba00bfe391c5af3fbb2745bdddd8dbf4df67aa46730a4193b3->enter($__internal_1d2e6660491a92ba00bfe391c5af3fbb2745bdddd8dbf4df67aa46730a4193b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Blog:macros.html.twig"));

        
        $__internal_1d2e6660491a92ba00bfe391c5af3fbb2745bdddd8dbf4df67aa46730a4193b3->leave($__internal_1d2e6660491a92ba00bfe391c5af3fbb2745bdddd8dbf4df67aa46730a4193b3_prof);

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
            $__internal_ab6d89ee560c34a8c77f7c7dea7eaa43d1199b9b405ac5eca49750b1276f47ad = $this->env->getExtension("native_profiler");
            $__internal_ab6d89ee560c34a8c77f7c7dea7eaa43d1199b9b405ac5eca49750b1276f47ad->enter($__internal_ab6d89ee560c34a8c77f7c7dea7eaa43d1199b9b405ac5eca49750b1276f47ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "widgetList"));

            // line 2
            echo "
    <section class=\"widget\">
        <h2>";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h2>
        <ul>
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listItems"]) ? $context["listItems"] : $this->getContext($context, "listItems")));
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
            echo twig_escape_filter($this->env, (isset($context["btnUrl"]) ? $context["btnUrl"] : $this->getContext($context, "btnUrl")), "html", null, true);
            echo "\" role=\"button\">";
            echo twig_escape_filter($this->env, (isset($context["btnLabel"]) ? $context["btnLabel"] : $this->getContext($context, "btnLabel")), "html", null, true);
            echo " &raquo;</a></p>
    </section>

";
            
            $__internal_ab6d89ee560c34a8c77f7c7dea7eaa43d1199b9b405ac5eca49750b1276f47ad->leave($__internal_ab6d89ee560c34a8c77f7c7dea7eaa43d1199b9b405ac5eca49750b1276f47ad_prof);

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
        return array (  70 => 10,  67 => 9,  58 => 7,  54 => 6,  49 => 4,  45 => 2,  27 => 1,);
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
