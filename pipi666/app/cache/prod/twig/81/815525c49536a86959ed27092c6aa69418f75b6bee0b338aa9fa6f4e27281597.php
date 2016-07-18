<?php

/* PipiTrainingBundle:Blog:contact.html.twig */
class __TwigTemplate_568d6ea37e5994696222ed2455e60c4734b151dedc248f7cab889b7a598c7fbb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Domorosły inwestor - Kontakt ";
    }

    // line 6
    public function block_contentContainer($context, array $blocks = array())
    {
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
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/js/contact-page.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  103 => 63,  98 => 62,  95 => 61,  39 => 7,  36 => 6,  30 => 4,  11 => 1,);
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
