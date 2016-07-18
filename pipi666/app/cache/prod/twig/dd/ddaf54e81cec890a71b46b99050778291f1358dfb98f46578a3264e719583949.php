<?php

/* PipiTrainingBundle:Blog:comments.html.twig */
class __TwigTemplate_cc471f71fd65e7c0363b67c88a6269943dfe3447c12ef06e55ce14437d03fc3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PipiTrainingBundle:Blog:sidebarLayout.html.twig", "PipiTrainingBundle:Blog:comments.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contentContainer' => array($this, 'block_contentContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PipiTrainingBundle:Blog:sidebarLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "  Domorosły inwestor - Komentarze ";
    }

    // line 7
    public function block_contentContainer($context, array $blocks = array())
    {
        // line 8
        echo "

    <article class=\"col-md-8 journal\">
        <h1>Komentownia</h1><br/>


        <div class=\"quest-book\">


            ";
        // line 18
        echo "            ";
        // line 19
        echo "
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) ? $context["comment"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 21
            echo "                <section>
                    <h4>";
            // line 22
            echo $this->getAttribute($context["entry"], "name", array(), "array");
            echo "</h4>    ";
            // line 23
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "comment", array(), "array"), "html", null, true);
            echo "</p>
                </section>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
            ";
        // line 30
        echo "    </article>


";
    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  76 => 28,  64 => 23,  61 => 22,  58 => 21,  54 => 20,  51 => 19,  49 => 18,  38 => 8,  35 => 7,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'PipiTrainingBundle:Blog:sidebarLayout.html.twig' %}*/
/* */
/* {% block title %}  Domorosły inwestor - Komentarze {% endblock %}*/
/* */
/* */
/* {% block contentContainer %}*/
/* */
/* */
/*     <article class="col-md-8 journal">*/
/*         <h1>Komentownia</h1><br/>*/
/* */
/* */
/*         <div class="quest-book">*/
/* */
/* */
/*             {#wyłączenie autoeskapowania, czyli automatycznego zabezpieczenia przed <style></style> <strong> </strong> itp.#}*/
/*             {#{% autoescape false %}#}*/
/* */
/*             {% for entry in comment %}*/
/*                 <section>*/
/*                     <h4>{{ entry['name']|raw }}</h4>    {#raw pozwala na wyłączeniea autoeskapowanie miejscowo#}*/
/*                     <p>{{ entry['comment'] }}</p>*/
/*                 </section>*/
/* */
/* */
/*             {% endfor %}*/
/*         </div>*/
/*             {#{% endautoescape %}#}*/
/*     </article>*/
/* */
/* */
/* {% endblock %}*/
