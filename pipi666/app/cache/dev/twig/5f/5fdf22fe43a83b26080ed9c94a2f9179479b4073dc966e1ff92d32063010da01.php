<?php

/* PipiTrainingBundle:Blog:contact.html.twig */
class __TwigTemplate_ec1b05cee986f04242a21c09ead444bcd4ab1bab84013496562f975547b5aba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PipiTrainingBundle:Blog:sidebarLayout.html.twig", "PipiTrainingBundle:Blog:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contentContainer' => array($this, 'block_contentContainer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PipiTrainingBundle:Blog:sidebarLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3bba762d4956dfbc87b3614073249ede2d7488a234588bd89b1d32e7899e878 = $this->env->getExtension("native_profiler");
        $__internal_b3bba762d4956dfbc87b3614073249ede2d7488a234588bd89b1d32e7899e878->enter($__internal_b3bba762d4956dfbc87b3614073249ede2d7488a234588bd89b1d32e7899e878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3bba762d4956dfbc87b3614073249ede2d7488a234588bd89b1d32e7899e878->leave($__internal_b3bba762d4956dfbc87b3614073249ede2d7488a234588bd89b1d32e7899e878_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaf58a8514a3064ea2845c0ea01c3c9dfc47b0da38e80f67a92a8d4c72de9953 = $this->env->getExtension("native_profiler");
        $__internal_aaf58a8514a3064ea2845c0ea01c3c9dfc47b0da38e80f67a92a8d4c72de9953->enter($__internal_aaf58a8514a3064ea2845c0ea01c3c9dfc47b0da38e80f67a92a8d4c72de9953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Domorosły inwestor - Kontakt ";
        
        $__internal_aaf58a8514a3064ea2845c0ea01c3c9dfc47b0da38e80f67a92a8d4c72de9953->leave($__internal_aaf58a8514a3064ea2845c0ea01c3c9dfc47b0da38e80f67a92a8d4c72de9953_prof);

    }

    // line 6
    public function block_contentContainer($context, array $blocks = array())
    {
        $__internal_05f7183e8ab498d951b1fd36bf289dcd105c4c5159ad4efcd7158c9518f33ef1 = $this->env->getExtension("native_profiler");
        $__internal_05f7183e8ab498d951b1fd36bf289dcd105c4c5159ad4efcd7158c9518f33ef1->enter($__internal_05f7183e8ab498d951b1fd36bf289dcd105c4c5159ad4efcd7158c9518f33ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentContainer"));

        // line 7
        echo "

        <article class=\"col-md-8 contact\">

            <h1>Kontakt</h1>
            <p>Aby się ze mną skontaktować skorzystaj z poniższego formularza.</p>

            <div class=\"alert alert-success\">
                <strong>Dzięki!</strong> Twoja wiadomość została wysłana!
            </div>

            <div class=\"alert alert-danger\">
                <strong>Ups...</strong> Niestety nie udało się wysłać wiadomości... Spróbuj jeszcze raz!
            </div>

            <div class=\"alert alert-warning\">
                <strong>Ups...</strong> Popraw błędy formularza!
            </div>

            <form class=\"form-horizontal\" role=\"form\">
                <div class=\"form-group\">
                    <label for=\"name\" class=\"col-sm-2 control-label\">Imię</label>

                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"name\" placeholder=\"Podaj swoje imię i nazwisko\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"email\" class=\"col-sm-2 control-label\">E-mail</label>
                    <div class=\"col-sm-10\">
                        <input type=\"password\" class=\"form-control\" id=\"email\" placeholder=\"Podaj swój adres e-mail\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"message\" class=\"col-sm-2 control-label\">Wiadomość</label>
                    <div class=\"col-sm-10\">
                        <textarea id=\"message\" class=\"form-control\" rows=\"5\" placeholder=\"Tu wpisz wiadomość :)\"></textarea>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <button type=\"submit\" class=\"btn btn-success\">Wyślij</button>
                    </div>
                </div>
            </form>

        </article>


";
        
        $__internal_05f7183e8ab498d951b1fd36bf289dcd105c4c5159ad4efcd7158c9518f33ef1->leave($__internal_05f7183e8ab498d951b1fd36bf289dcd105c4c5159ad4efcd7158c9518f33ef1_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b1853bf093703a2423faf3f63e99fc8fe1e6116d39154737cb72b38ee09c0a1 = $this->env->getExtension("native_profiler");
        $__internal_8b1853bf093703a2423faf3f63e99fc8fe1e6116d39154737cb72b38ee09c0a1->enter($__internal_8b1853bf093703a2423faf3f63e99fc8fe1e6116d39154737cb72b38ee09c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/js/contact-page.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8b1853bf093703a2423faf3f63e99fc8fe1e6116d39154737cb72b38ee09c0a1->leave($__internal_8b1853bf093703a2423faf3f63e99fc8fe1e6116d39154737cb72b38ee09c0a1_prof);

    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 63,  119 => 62,  113 => 61,  54 => 7,  48 => 6,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'PipiTrainingBundle:Blog:sidebarLayout.html.twig' %}*/
/* */
/* */
/* {% block title %} Domorosły inwestor - Kontakt {% endblock %}*/
/* */
/* {% block contentContainer %}*/
/* */
/* */
/*         <article class="col-md-8 contact">*/
/* */
/*             <h1>Kontakt</h1>*/
/*             <p>Aby się ze mną skontaktować skorzystaj z poniższego formularza.</p>*/
/* */
/*             <div class="alert alert-success">*/
/*                 <strong>Dzięki!</strong> Twoja wiadomość została wysłana!*/
/*             </div>*/
/* */
/*             <div class="alert alert-danger">*/
/*                 <strong>Ups...</strong> Niestety nie udało się wysłać wiadomości... Spróbuj jeszcze raz!*/
/*             </div>*/
/* */
/*             <div class="alert alert-warning">*/
/*                 <strong>Ups...</strong> Popraw błędy formularza!*/
/*             </div>*/
/* */
/*             <form class="form-horizontal" role="form">*/
/*                 <div class="form-group">*/
/*                     <label for="name" class="col-sm-2 control-label">Imię</label>*/
/* */
/*                     <div class="col-sm-10">*/
/*                         <input type="email" class="form-control" id="name" placeholder="Podaj swoje imię i nazwisko">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="email" class="col-sm-2 control-label">E-mail</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="password" class="form-control" id="email" placeholder="Podaj swój adres e-mail">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="message" class="col-sm-2 control-label">Wiadomość</label>*/
/*                     <div class="col-sm-10">*/
/*                         <textarea id="message" class="form-control" rows="5" placeholder="Tu wpisz wiadomość :)"></textarea>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="col-sm-offset-2 col-sm-10">*/
/*                         <button type="submit" class="btn btn-success">Wyślij</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/* */
/*         </article>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/pipitraining/js/contact-page.js')}}"></script>*/
/* {%  endblock %}*/
