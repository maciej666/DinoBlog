<?php

/* PipiTrainingBundle:Blog:comments.html.twig */
class __TwigTemplate_2705b20d8c3d23216b62ffb162dd5e97df752ad188e1e36531e36ad8088c94dd extends Twig_Template
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
        $__internal_1970d8a158f4e52ad1a252b50a5c6765a41ee57eaa52712530d8071601c66aae = $this->env->getExtension("native_profiler");
        $__internal_1970d8a158f4e52ad1a252b50a5c6765a41ee57eaa52712530d8071601c66aae->enter($__internal_1970d8a158f4e52ad1a252b50a5c6765a41ee57eaa52712530d8071601c66aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Blog:comments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1970d8a158f4e52ad1a252b50a5c6765a41ee57eaa52712530d8071601c66aae->leave($__internal_1970d8a158f4e52ad1a252b50a5c6765a41ee57eaa52712530d8071601c66aae_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bd901c5c89b1b4a9984476ade780c67ec9e55432615260cc530547ba72e8c68 = $this->env->getExtension("native_profiler");
        $__internal_1bd901c5c89b1b4a9984476ade780c67ec9e55432615260cc530547ba72e8c68->enter($__internal_1bd901c5c89b1b4a9984476ade780c67ec9e55432615260cc530547ba72e8c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "  Domorosły inwestor - Komentarze ";
        
        $__internal_1bd901c5c89b1b4a9984476ade780c67ec9e55432615260cc530547ba72e8c68->leave($__internal_1bd901c5c89b1b4a9984476ade780c67ec9e55432615260cc530547ba72e8c68_prof);

    }

    // line 7
    public function block_contentContainer($context, array $blocks = array())
    {
        $__internal_12832b7dd39dcd32303b2ba83afd4d7c243cac86783ceac4ecd51ec35b66e8ce = $this->env->getExtension("native_profiler");
        $__internal_12832b7dd39dcd32303b2ba83afd4d7c243cac86783ceac4ecd51ec35b66e8ce->enter($__internal_12832b7dd39dcd32303b2ba83afd4d7c243cac86783ceac4ecd51ec35b66e8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentContainer"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")));
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
        
        $__internal_12832b7dd39dcd32303b2ba83afd4d7c243cac86783ceac4ecd51ec35b66e8ce->leave($__internal_12832b7dd39dcd32303b2ba83afd4d7c243cac86783ceac4ecd51ec35b66e8ce_prof);

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
        return array (  94 => 30,  91 => 28,  79 => 23,  76 => 22,  73 => 21,  69 => 20,  66 => 19,  64 => 18,  53 => 8,  47 => 7,  35 => 4,  11 => 2,);
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
