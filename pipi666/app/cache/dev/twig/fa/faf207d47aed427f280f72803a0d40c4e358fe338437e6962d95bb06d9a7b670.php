<?php

/* PipiTrainingBundle:Blog/Widget:followingWidget.html.twig */
class __TwigTemplate_c3d43261433ad0a241a4a4fe64d7b28a359890c8c92d54683da40b7e165d2d38 extends Twig_Template
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
        $__internal_2119e92392720de93f7d9868ea8a5877f49c4f89a8339f4c693bc9d307c423fe = $this->env->getExtension("native_profiler");
        $__internal_2119e92392720de93f7d9868ea8a5877f49c4f89a8339f4c693bc9d307c423fe->enter($__internal_2119e92392720de93f7d9868ea8a5877f49c4f89a8339f4c693bc9d307c423fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Blog/Widget:followingWidget.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "

";
        // line 6
        echo "
";
        // line 8
        echo "
<section class=\"widget\">
    <h2>Aktualnie oberwuję</h2>
    <ul>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>
    <p><a class=\"btn btn-default\" href=\"http://www.gpw.pl/lista_spolek\" role=\"button\">Wszystkie spółki &raquo;</a></p>
</section>";
        
        $__internal_2119e92392720de93f7d9868ea8a5877f49c4f89a8339f4c693bc9d307c423fe->leave($__internal_2119e92392720de93f7d9868ea8a5877f49c4f89a8339f4c693bc9d307c423fe_prof);

    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog/Widget:followingWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  42 => 13,  38 => 12,  32 => 8,  29 => 6,  25 => 3,  22 => 1,);
    }
}
/* */
/* {#{% import 'PipiTrainingBundle:Blog:macros.html.twig' as blogMacros %}#}*/
/* */
/* */
/* {#&#123;&#35; self oznacza że chodzi o plik w którym się znajduję&#35;&#125;#}*/
/* */
/* {#{{ blogMacros.widgetList('Aktualnie oberwuję', list, 'Wszystkie spółki', 'http://www.gpw.pl/lista_spolek' ) }}#}*/
/* */
/* <section class="widget">*/
/*     <h2>Aktualnie oberwuję</h2>*/
/*     <ul>*/
/*         {% for item in list %}*/
/*         <li>{{ item }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <p><a class="btn btn-default" href="http://www.gpw.pl/lista_spolek" role="button">Wszystkie spółki &raquo;</a></p>*/
/* </section>*/
