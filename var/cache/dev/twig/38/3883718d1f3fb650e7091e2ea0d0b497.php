<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* product/productPage.html.twig */
class __TwigTemplate_62199ba8b316e392fe703d790f04827a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "../base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productPage.html.twig"));

        $this->parent = $this->loadTemplate("../base.html.twig", "product/productPage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Product page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "
    <div class=\"container\">
        <div class=\"product\">
            <div class=\"product-gallery\">
                <img class=\"main-image\" id=\"mainImage\" src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Bicicleta-MTB-Colinelli-COL05--Marimea-L--29-inch--Albastru--Schimbator-Shimano--21-Viteze--Cadru-Otel--Frane-pe-Disc_jpg.webp"), "html", null, true);
        yield "\" alt=\"Nume Produs\">
                <div class=\"thumbnails\" id=\"thumbnailContainer\">
                    <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Bicicleta-MTB-Colinelli-COL05--Marimea-L--29-inch--Albastru--Schimbator-Shimano--21-Viteze--Cadru-Otel--Frane-pe-Disc_jpg.webp"), "html", null, true);
        yield "\" alt=\"Thumbnail 1\" onclick=\"changeImage(this)\">
                    <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo%20Den%20Sports.png"), "html", null, true);
        yield "\" alt=\"Thumbnail 2\" onclick=\"changeImage(this)\">
                </div>
            </div>
            <div class=\"product-details\">
                <p class=\"title-product\">Bicicleta Montan Bike</p>
                <p class=\"price\">Preț: ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "price", [], "any", false, false, false, 17), "html", null, true);
        yield " RON</p>
                <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam blandit neque non cursus.</p>
                <p class=\"text-danger font-weight-bold\">Oferă specială - Cumpără 2 articole și beneficiază de 10% reducere!</p>
                <div class=\"options\">
                    <label for=\"quantity\">Cantitate:</label>
                    <input type=\"number\" id=\"quantity\" name=\"quantity\" min=\"1\" value=\"1\">
                </div>

            </div>
        </div>

        <div class=\"tabs\">
            <button class=\"tablinks active\" onclick=\"openTab(event, 'descriere')\">Descriere</button>
            <button class=\"tablinks\" onclick=\"openTab(event, 'specificatii')\">Specificatii</button>
            <button class=\"tablinks\" onclick=\"openTab(event, 'review-uri')\">Review-uri</button>
        </div>

        <div id=\"descriere\" class=\"tabcontent active\">
            <h2>Descriere</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, inventore itaque molestiae nemo ullam veniam. Accusantium animi consequatur, debitis dignissimos dolorem doloribus enim eos eveniet ex excepturi facilis fuga fugiat impedit inventore ipsum laborum mollitia non pariatur porro quidem quis recusandae sapiente sequi sit temporibus tenetur unde veniam? A accusantium aspernatur beatae, dolore eaque incidunt molestias mollitia nulla odio placeat possimus quam quia, recusandae repellat voluptas? Atque deleniti impedit incidunt nemo. Animi aut, consequuntur cum, deleniti dolorum ea eius et exercitationem explicabo harum impedit magnam maxime modi molestiae necessitatibus nisi, officia omnis optio pariatur quaerat quos repellat velit vitae voluptatem?</p>
        </div>

        <div id=\"specificatii\" class=\"tabcontent\">
            <h1>Specificatii</h1>
            <table>
                <tr>
                    <th>Cadru</th>
                    <td>Aluminiu 6061</td>
                </tr>
                <tr>
                    <th>Furcă</th>
                    <td>Suspensie, curse de 100 mm (hardtail)</td>
                </tr>
                <tr>
                    <th>Transmisie</th>
                    <td>11 viteze, Shimano Deore</td>
                </tr>
                <tr>
                    <th>Frâne</th>
                    <td>Disc hidraulice, Shimano MT200</td>
                </tr>
                <tr>
                    <th>Roți</th>
                    <td>27.5 inch, jante aluminiu, anvelope tubeless ready 2.4 inch</td>
                </tr>
                <tr>
                    <th>Greutate</th>
                    <td>Aproximativ 13 kg</td>
                </tr>
                <tr>
                    <th>Accesorii</th>
                    <td>Suport bidon, protecții cadru și furcă</td>
                </tr>
                <tr>
                    <th>Culori disponibile</th>
                    <td>Negru mat, albastru electric, roșu intens</td>
                </tr>
                <tr>
                    <th>Utilizare recomandată</th>
                    <td>MTB trails, all-mountain, XC (cross-country)</td>
                </tr>
            </table>
        </div>

        <div id=\"review-uri\" class=\"tabcontent\">
            <h2>Review-uri</h2>
            <p>Nu sunt review-uri disponibile pentru acest produs.</p>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product/productPage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  113 => 17,  105 => 12,  101 => 11,  96 => 9,  90 => 5,  80 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '../base.html.twig' %}
{% block title %}Product page{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"product\">
            <div class=\"product-gallery\">
                <img class=\"main-image\" id=\"mainImage\" src=\"{{ asset('images/Bicicleta-MTB-Colinelli-COL05--Marimea-L--29-inch--Albastru--Schimbator-Shimano--21-Viteze--Cadru-Otel--Frane-pe-Disc_jpg.webp') }}\" alt=\"Nume Produs\">
                <div class=\"thumbnails\" id=\"thumbnailContainer\">
                    <img src=\"{{ asset('images/Bicicleta-MTB-Colinelli-COL05--Marimea-L--29-inch--Albastru--Schimbator-Shimano--21-Viteze--Cadru-Otel--Frane-pe-Disc_jpg.webp') }}\" alt=\"Thumbnail 1\" onclick=\"changeImage(this)\">
                    <img src=\"{{ asset('images/logo%20Den%20Sports.png') }}\" alt=\"Thumbnail 2\" onclick=\"changeImage(this)\">
                </div>
            </div>
            <div class=\"product-details\">
                <p class=\"title-product\">Bicicleta Montan Bike</p>
                <p class=\"price\">Preț: {{ product.price}} RON</p>
                <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam blandit neque non cursus.</p>
                <p class=\"text-danger font-weight-bold\">Oferă specială - Cumpără 2 articole și beneficiază de 10% reducere!</p>
                <div class=\"options\">
                    <label for=\"quantity\">Cantitate:</label>
                    <input type=\"number\" id=\"quantity\" name=\"quantity\" min=\"1\" value=\"1\">
                </div>

            </div>
        </div>

        <div class=\"tabs\">
            <button class=\"tablinks active\" onclick=\"openTab(event, 'descriere')\">Descriere</button>
            <button class=\"tablinks\" onclick=\"openTab(event, 'specificatii')\">Specificatii</button>
            <button class=\"tablinks\" onclick=\"openTab(event, 'review-uri')\">Review-uri</button>
        </div>

        <div id=\"descriere\" class=\"tabcontent active\">
            <h2>Descriere</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, inventore itaque molestiae nemo ullam veniam. Accusantium animi consequatur, debitis dignissimos dolorem doloribus enim eos eveniet ex excepturi facilis fuga fugiat impedit inventore ipsum laborum mollitia non pariatur porro quidem quis recusandae sapiente sequi sit temporibus tenetur unde veniam? A accusantium aspernatur beatae, dolore eaque incidunt molestias mollitia nulla odio placeat possimus quam quia, recusandae repellat voluptas? Atque deleniti impedit incidunt nemo. Animi aut, consequuntur cum, deleniti dolorum ea eius et exercitationem explicabo harum impedit magnam maxime modi molestiae necessitatibus nisi, officia omnis optio pariatur quaerat quos repellat velit vitae voluptatem?</p>
        </div>

        <div id=\"specificatii\" class=\"tabcontent\">
            <h1>Specificatii</h1>
            <table>
                <tr>
                    <th>Cadru</th>
                    <td>Aluminiu 6061</td>
                </tr>
                <tr>
                    <th>Furcă</th>
                    <td>Suspensie, curse de 100 mm (hardtail)</td>
                </tr>
                <tr>
                    <th>Transmisie</th>
                    <td>11 viteze, Shimano Deore</td>
                </tr>
                <tr>
                    <th>Frâne</th>
                    <td>Disc hidraulice, Shimano MT200</td>
                </tr>
                <tr>
                    <th>Roți</th>
                    <td>27.5 inch, jante aluminiu, anvelope tubeless ready 2.4 inch</td>
                </tr>
                <tr>
                    <th>Greutate</th>
                    <td>Aproximativ 13 kg</td>
                </tr>
                <tr>
                    <th>Accesorii</th>
                    <td>Suport bidon, protecții cadru și furcă</td>
                </tr>
                <tr>
                    <th>Culori disponibile</th>
                    <td>Negru mat, albastru electric, roșu intens</td>
                </tr>
                <tr>
                    <th>Utilizare recomandată</th>
                    <td>MTB trails, all-mountain, XC (cross-country)</td>
                </tr>
            </table>
        </div>

        <div id=\"review-uri\" class=\"tabcontent\">
            <h2>Review-uri</h2>
            <p>Nu sunt review-uri disponibile pentru acest produs.</p>
        </div>
    </div>

{% endblock %}", "product/productPage.html.twig", "/var/www/html/Dennis/myShop/templates/product/productPage.html.twig");
    }
}
