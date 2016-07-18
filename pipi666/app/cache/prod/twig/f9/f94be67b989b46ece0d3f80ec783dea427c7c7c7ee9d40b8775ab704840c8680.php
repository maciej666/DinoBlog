<?php

/* PipiTrainingBundle:Blog:journal.html.twig */
class __TwigTemplate_841304a1eb9b9ef9a01c39b9a1782fbf9379c024268b8a137371b87959a55557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PipiTrainingBundle:Blog:sidebarLayout.html.twig", "PipiTrainingBundle:Blog:journal.html.twig", 2);
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
        echo "  Domorosły inwestor - Dzienniczek ";
    }

    // line 7
    public function block_contentContainer($context, array $blocks = array())
    {
        // line 8
        echo "

    <article class=\"col-md-8 journal\">
        <h1>Domowy dzienniczek inwestora</h1>
        <p>Na początku swojej przygoty z inwestowaniem postanowiłem, że każdą inwestycję będę zapisywał. W ten sposób powstał poniższy dziennik, który prezentuje moją aktywność na giełdzie. Przez ostatnie pare miesięcy wiele się działo. Na zmianę raz zyskiwałem, raz traciłem.</p>
        <h4>Wszystkich inwestycji: ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["history"]) ? $context["history"] : null)), "html", null, true);
        echo "</h4>

        ";
        // line 16
        echo "
        <table class=\"table table-bordered table-striped table-hover\">
            <thead>
            <tr>
                <th>Spółka</th>
                <th>Data rozpoczęcia</th>
                <th>Śr. kurs nabycia</th>
                <th>Ilość</th>
                <th>Data zakończenia</th>
                <th>Śr. kurs sprzedaży</th>
                <th>Wynik</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            echo "                ";
            if ($this->getAttribute($context["row"], "isFinished", array())) {
                echo " ";
                // line 33
                echo "                    ";
                if ($this->getAttribute($context["row"], "isClosedPositive", array(), "method")) {
                    // line 34
                    echo "                        <tr class=\"success\">
                    ";
                } else {
                    // line 36
                    echo "                        <tr class=\"danger\">
                    ";
                }
                // line 38
                echo "                ";
            } else {
                // line 39
                echo "                    <tr>
                ";
            }
            // line 41
            echo "
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "getCompanyName", array())), "html", null, true);
            echo "</td>  ";
            // line 43
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["row"], "getStartDate", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["row"], "getPurchasePrice", array()), 2, ",", " "), "html", null, true);
            echo " zł</td> ";
            // line 45
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["row"], "getQuantity", array()), 0, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute($context["row"], "isFinished", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["row"], "getEndDate", array()), "d.m.Y")) : ("---")), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute($context["row"], "isFinished", array())) ? ((twig_number_format_filter($this->env, $this->getAttribute($context["row"], "getSellingPrice", array()), 2, ",", " ") . " zł")) : ("---")), "html", null, true);
            echo "</td> ";
            // line 48
            echo "                <td>";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["row"], "isFinished", array())) ? ((twig_number_format_filter($this->env, $this->getAttribute($context["row"], "getResult", array()), 2, ",", " ") . " zł")) : ("---")), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                <tr>
                    <td colspan = \"7\"> Brak wpisów w tabeli </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
            ";
        // line 57
        echo "            ";
        // line 58
        echo "            ";
        // line 59
        echo "            ";
        // line 60
        echo "            ";
        // line 61
        echo "            ";
        // line 62
        echo "            ";
        // line 63
        echo "            ";
        // line 64
        echo "            ";
        // line 65
        echo "            ";
        // line 66
        echo "            ";
        // line 67
        echo "            ";
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        // line 71
        echo "            ";
        // line 72
        echo "            ";
        // line 73
        echo "            ";
        // line 74
        echo "            ";
        // line 75
        echo "            ";
        // line 76
        echo "            ";
        // line 77
        echo "            ";
        // line 78
        echo "            ";
        // line 79
        echo "            ";
        // line 80
        echo "            ";
        // line 81
        echo "            ";
        // line 82
        echo "            ";
        // line 83
        echo "            ";
        // line 84
        echo "            ";
        // line 85
        echo "            ";
        // line 86
        echo "            ";
        // line 87
        echo "            ";
        // line 88
        echo "            ";
        // line 89
        echo "            ";
        // line 90
        echo "            ";
        // line 91
        echo "            ";
        // line 92
        echo "            </tbody>
        </table>
    </article>




";
    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog:journal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 92,  209 => 91,  207 => 90,  205 => 89,  203 => 88,  201 => 87,  199 => 86,  197 => 85,  195 => 84,  193 => 83,  191 => 82,  189 => 81,  187 => 80,  185 => 79,  183 => 78,  181 => 77,  179 => 76,  177 => 75,  175 => 74,  173 => 73,  171 => 72,  169 => 71,  167 => 70,  165 => 69,  163 => 68,  161 => 67,  159 => 66,  157 => 65,  155 => 64,  153 => 63,  151 => 62,  149 => 61,  147 => 60,  145 => 59,  143 => 58,  141 => 57,  138 => 55,  129 => 51,  120 => 48,  117 => 47,  113 => 46,  108 => 45,  105 => 44,  100 => 43,  97 => 42,  94 => 41,  90 => 39,  87 => 38,  83 => 36,  79 => 34,  76 => 33,  72 => 32,  67 => 31,  50 => 16,  45 => 13,  38 => 8,  35 => 7,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'PipiTrainingBundle:Blog:sidebarLayout.html.twig' %}*/
/* */
/* {% block title %}  Domorosły inwestor - Dzienniczek {% endblock %}*/
/* */
/* */
/* {% block contentContainer %}*/
/* */
/* */
/*     <article class="col-md-8 journal">*/
/*         <h1>Domowy dzienniczek inwestora</h1>*/
/*         <p>Na początku swojej przygoty z inwestowaniem postanowiłem, że każdą inwestycję będę zapisywał. W ten sposób powstał poniższy dziennik, który prezentuje moją aktywność na giełdzie. Przez ostatnie pare miesięcy wiele się działo. Na zmianę raz zyskiwałem, raz traciłem.</p>*/
/*         <h4>Wszystkich inwestycji: {{ history|length }}</h4>*/
/* */
/*         {#<pre>{{ dump(history) }}</pre>#}*/
/* */
/*         <table class="table table-bordered table-striped table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Spółka</th>*/
/*                 <th>Data rozpoczęcia</th>*/
/*                 <th>Śr. kurs nabycia</th>*/
/*                 <th>Ilość</th>*/
/*                 <th>Data zakończenia</th>*/
/*                 <th>Śr. kurs sprzedaży</th>*/
/*                 <th>Wynik</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for row in history %}*/
/*                 {% if row.isFinished %} {#sprawdzanie czy tranzakcja się zakończyła "." pełni taką samą rolę jak strzałka#}*/
/*                     {% if row.isClosedPositive() %}*/
/*                         <tr class="success">*/
/*                     {% else %}*/
/*                         <tr class="danger">*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     <tr>*/
/*                 {% endif %}*/
/* */
/*                 <td>{{ row.getCompanyName|upper }}</td>  {#get'y i is'y możemy usunąć#}*/
/*                 <td>{{ row.getStartDate|date('d.m.Y') }}</td>*/
/*                 <td>{{ row.getPurchasePrice|number_format(2, ',', ' ') }} zł</td> {# 2 miejsca po przecinku oddzielone przecinkiem i spacja przy wart>1000 #}*/
/*                 <td>{{ row.getQuantity|number_format(0, ',', ' ') }}</td>*/
/*                 <td>{{ row.isFinished ? row.getEndDate|date('d.m.Y') : '---' }}</td>*/
/*                 <td>{{ row.isFinished ? row.getSellingPrice|number_format(2, ',', ' ')~' zł' : '---' }}</td> {# ~ służy do konkatenacji#}*/
/*                 <td>{{ row.isFinished ? row.getResult|number_format(2, ',', ' ')~' zł' : '---'}}</td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td colspan = "7"> Brak wpisów w tabeli </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/* */
/*             {#<tr class="success">#}*/
/*             {#<td>ATREM</td>#}*/
/*             {#<td>03.03.2012</td>#}*/
/*             {#<td>7,50 zł</td>#}*/
/*             {#<td>1 000</td>#}*/
/*             {#<td>05.05.2012</td>#}*/
/*             {#<td>9,10 zł</td>#}*/
/*             {#<td></td>#}*/
/*             {#</tr>#}*/
/*             {#<tr>#}*/
/*             {#<td>DEBICA</td>#}*/
/*             {#<td>12.01.2013</td>#}*/
/*             {#<td>96,20 zł</td>#}*/
/*             {#<td>100</td>#}*/
/*             {#<td>---</td>#}*/
/*             {#<td>---</td>#}*/
/*             {#<td>---</td>#}*/
/*             {#</tr>#}*/
/*             {#<tr class="success">#}*/
/*             {#<td>ALCHEMIA</td>#}*/
/*             {#<td>05.03.2012</td>#}*/
/*             {#<td>5,20 zł</td>#}*/
/*             {#<td>1 500</td>#}*/
/*             {#<td>15.09.2013</td>#}*/
/*             {#<td>9,30 zł</td>#}*/
/*             {#<td></td>#}*/
/*             {#</tr>#}*/
/*             {#<tr class="danger">#}*/
/*             {#<td>VOTUM</td>#}*/
/*             {#<td>12.06.2012</td>#}*/
/*             {#<td>5,82 zł</td>#}*/
/*             {#<td>4 000</td>#}*/
/*             {#<td>28.12.2013</td>#}*/
/*             {#<td>4,30 zł</td>#}*/
/*             {#<td></td>#}*/
/*             {#</tr>#}*/
/*             </tbody>*/
/*         </table>*/
/*     </article>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
