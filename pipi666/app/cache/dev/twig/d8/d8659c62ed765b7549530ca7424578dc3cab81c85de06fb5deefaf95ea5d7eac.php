<?php

/* PipiTrainingBundle:Admin:listing.html.twig */
class __TwigTemplate_cc69e7fa1f49f4b57bd401900acee500b7edcb5ac900297d608354473bf7bfd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PipiTrainingBundle:Blog:sidebarLayout.html.twig", "PipiTrainingBundle:Admin:listing.html.twig", 1);
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
        $__internal_6876558271d3913e06a82251885daee4ad7ee11e8ecad59f708084037573ecba = $this->env->getExtension("native_profiler");
        $__internal_6876558271d3913e06a82251885daee4ad7ee11e8ecad59f708084037573ecba->enter($__internal_6876558271d3913e06a82251885daee4ad7ee11e8ecad59f708084037573ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Admin:listing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6876558271d3913e06a82251885daee4ad7ee11e8ecad59f708084037573ecba->leave($__internal_6876558271d3913e06a82251885daee4ad7ee11e8ecad59f708084037573ecba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8066e5770358e0e3c93ae2c6b0d3bdf0b4f6b825b3fef0bd01f710d5d9839fe2 = $this->env->getExtension("native_profiler");
        $__internal_8066e5770358e0e3c93ae2c6b0d3bdf0b4f6b825b3fef0bd01f710d5d9839fe2->enter($__internal_8066e5770358e0e3c93ae2c6b0d3bdf0b4f6b825b3fef0bd01f710d5d9839fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Strona Admina - tak się wygina ";
        
        $__internal_8066e5770358e0e3c93ae2c6b0d3bdf0b4f6b825b3fef0bd01f710d5d9839fe2->leave($__internal_8066e5770358e0e3c93ae2c6b0d3bdf0b4f6b825b3fef0bd01f710d5d9839fe2_prof);

    }

    // line 9
    public function block_contentContainer($context, array $blocks = array())
    {
        $__internal_e42931e418c8ec31230ef95e382a4ec871abf26ee2ee09fff6b415332833976c = $this->env->getExtension("native_profiler");
        $__internal_e42931e418c8ec31230ef95e382a4ec871abf26ee2ee09fff6b415332833976c->enter($__internal_e42931e418c8ec31230ef95e382a4ec871abf26ee2ee09fff6b415332833976c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentContainer"));

        // line 10
        echo "    <article class=\"col-md-8\">
        <h1>Lista Zarejestrowanych</h1>

        <table class=\"table table-bordered table-striped table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imię i Nazwisko</th>
                    <th>Kraj</th>
                    <th>Kurs</th>
                    <th>Email</th>
                    <th>Guzik</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "country", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "course", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 34
            echo "                        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 35
                echo "                        <a class=\"btn btn-sm btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_details", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\"> Zobacz szczegóły </a>
                        <a class=\"btn btn-sm btn-danger\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\"> Usuń rekord </a>
                        ";
            } else {
                // line 38
                echo "                            Nie posiadasz żadnych akcji.
                        ";
            }
            // line 40
            echo "                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "                    <tr>
                        <td colspan=\"6\">Brak rejestrantów</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>
            <hr/>
            <h4>Zalogowany jako: ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h4>
            <h4>Posiadane role: ";
        // line 51
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), ", "), "html", null, true);
        echo "</h4>
            <h4>Sposób z kontrolera: ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "</h4>
    </article>
";
        
        $__internal_e42931e418c8ec31230ef95e382a4ec871abf26ee2ee09fff6b415332833976c->leave($__internal_e42931e418c8ec31230ef95e382a4ec871abf26ee2ee09fff6b415332833976c_prof);

    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Admin:listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  141 => 51,  137 => 50,  132 => 47,  123 => 43,  116 => 40,  112 => 38,  107 => 36,  102 => 35,  99 => 34,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  75 => 26,  70 => 25,  53 => 10,  47 => 9,  35 => 5,  11 => 1,);
    }
}
/* {% extends 'PipiTrainingBundle:Blog:sidebarLayout.html.twig' %}*/
/* */
/* */
/* */
/* {% block title %} Strona Admina - tak się wygina {% endblock %}*/
/* */
/* */
/* */
/* {% block contentContainer %}*/
/*     <article class="col-md-8">*/
/*         <h1>Lista Zarejestrowanych</h1>*/
/* */
/*         <table class="table table-bordered table-striped table-hover">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>ID</th>*/
/*                     <th>Imię i Nazwisko</th>*/
/*                     <th>Kraj</th>*/
/*                     <th>Kurs</th>*/
/*                     <th>Email</th>*/
/*                     <th>Guzik</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for entry in rows %}*/
/*                 <tr>*/
/*                     <td>{{ entry.id }}</td>*/
/*                     <td>{{ entry.name }}</td>*/
/*                     <td>{{ entry.country }}</td>*/
/*                     <td>{{ entry.course }}</td>*/
/*                     <td>{{ entry.email }}</td>*/
/*                     <td>*/
/*                         {#{% if btns == true %}#}*/
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/*                         <a class="btn btn-sm btn-info" href="{{ path('admin_details', {'id' : entry.id} ) }}"> Zobacz szczegóły </a>*/
/*                         <a class="btn btn-sm btn-danger" href="{{ path('admin_delete', {'id' : entry.id} ) }}"> Usuń rekord </a>*/
/*                         {% else %}*/
/*                             Nie posiadasz żadnych akcji.*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% else %}*/
/*                     <tr>*/
/*                         <td colspan="6">Brak rejestrantów</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*             <hr/>*/
/*             <h4>Zalogowany jako: {{ app.user.username }}</h4>*/
/*             <h4>Posiadane role: {{ app.user.roles|join(', ') }}</h4>*/
/*             <h4>Sposób z kontrolera: {{ user }}</h4>*/
/*     </article>*/
/* {% endblock %}*/
