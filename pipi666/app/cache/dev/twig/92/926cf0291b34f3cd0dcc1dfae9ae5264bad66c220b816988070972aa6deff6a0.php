<?php

/* PipiTrainingBundle:Admin:details.html.twig */
class __TwigTemplate_0199a1fb4bf7e19410298c1d39c141a831acce957757aca00d335c70cbcdfb8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PipiTrainingBundle:Blog:sidebarLayout.html.twig", "PipiTrainingBundle:Admin:details.html.twig", 1);
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
        $__internal_aac98aacd8629e2c47c0751d992ecf13cc43f8cd30e03275ba916ad146a827c6 = $this->env->getExtension("native_profiler");
        $__internal_aac98aacd8629e2c47c0751d992ecf13cc43f8cd30e03275ba916ad146a827c6->enter($__internal_aac98aacd8629e2c47c0751d992ecf13cc43f8cd30e03275ba916ad146a827c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Admin:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aac98aacd8629e2c47c0751d992ecf13cc43f8cd30e03275ba916ad146a827c6->leave($__internal_aac98aacd8629e2c47c0751d992ecf13cc43f8cd30e03275ba916ad146a827c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_177318b46992d8b0a3696a811539ab3fe7ad72e3123c72393d177385dc63b759 = $this->env->getExtension("native_profiler");
        $__internal_177318b46992d8b0a3696a811539ab3fe7ad72e3123c72393d177385dc63b759->enter($__internal_177318b46992d8b0a3696a811539ab3fe7ad72e3123c72393d177385dc63b759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Strona Admina - tak się wygina o nr. ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "id", array()), "html", null, true);
        
        $__internal_177318b46992d8b0a3696a811539ab3fe7ad72e3123c72393d177385dc63b759->leave($__internal_177318b46992d8b0a3696a811539ab3fe7ad72e3123c72393d177385dc63b759_prof);

    }

    // line 9
    public function block_contentContainer($context, array $blocks = array())
    {
        $__internal_55b503fbc222e63b8a7b806f459f203059cbd94bc24b4002bcaa1bb78b67a1cd = $this->env->getExtension("native_profiler");
        $__internal_55b503fbc222e63b8a7b806f459f203059cbd94bc24b4002bcaa1bb78b67a1cd->enter($__internal_55b503fbc222e63b8a7b806f459f203059cbd94bc24b4002bcaa1bb78b67a1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentContainer"));

        // line 10
        echo "    <article class=\"col-md-8\">
        <h1>Rejestracja użytkownika nr. ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "id", array()), "html", null, true);
        echo "</h1>

        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Szczegóły rejestracji
                <a class=\"btn btn-info btn-sm pull-right panel-btn\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_listing");
        echo "\"> Powrót </a>
                <a class=\"btn btn-warning btn-sm pull-right panel-btn\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_update", array("id" => $this->getAttribute((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "id", array()))), "html", null, true);
        echo "\"> Edytuj </a>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-bordered table-striped table-hover\">
                    <tr>
                        <td>ID</td>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Imię i Nazwisko</td>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "email", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Inwestycje</td>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "invest", array()), ", "), "html", null, true);
        echo "</td> ";
        // line 36
        echo "                    </tr>
                    <tr>
                        <td>Zrodzenie</td>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")), "birthdate", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>


        </div>

    </article>
";
        
        $__internal_55b503fbc222e63b8a7b806f459f203059cbd94bc24b4002bcaa1bb78b67a1cd->leave($__internal_55b503fbc222e63b8a7b806f459f203059cbd94bc24b4002bcaa1bb78b67a1cd_prof);

    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Admin:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  102 => 36,  99 => 35,  92 => 31,  85 => 27,  78 => 23,  69 => 17,  65 => 16,  57 => 11,  54 => 10,  48 => 9,  35 => 5,  11 => 1,);
    }
}
/* {% extends 'PipiTrainingBundle:Blog:sidebarLayout.html.twig' %}*/
/* */
/* */
/* */
/* {% block title %} Strona Admina - tak się wygina o nr. {{register.id}}{% endblock %}*/
/* */
/* */
/* */
/* {% block contentContainer %}*/
/*     <article class="col-md-8">*/
/*         <h1>Rejestracja użytkownika nr. {{register.id}}</h1>*/
/* */
/*         <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*                 Szczegóły rejestracji*/
/*                 <a class="btn btn-info btn-sm pull-right panel-btn" href="{{ path('admin_listing') }}"> Powrót </a>*/
/*                 <a class="btn btn-warning btn-sm pull-right panel-btn" href="{{ path('admin_update', {'id': register.id}) }}"> Edytuj </a>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <table class="table table-bordered table-striped table-hover">*/
/*                     <tr>*/
/*                         <td>ID</td>*/
/*                         <td>{{ register.id }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Imię i Nazwisko</td>*/
/*                         <td>{{ register.name }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Email</td>*/
/*                         <td>{{ register.email }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Inwestycje</td>*/
/*                         <td>{{ register.invest|join(', ') }}</td> {#join gdyż to tablica która trzeba zamienić na stringa#}*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Zrodzenie</td>*/
/*                         <td>{{ register.birthdate|date('d.m.Y') }}</td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/*     </article>*/
/* {% endblock %}*/
