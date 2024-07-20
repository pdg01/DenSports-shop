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

/* default/index.html.twig */
class __TwigTemplate_8faf52e2e5bf1a9fa02ec0fd0b90bd06 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Den Sports";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "

    <div class=\"container\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100 h-100\" src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/preview-biker.png"), "html", null, true);
        yield "\" alt=\"First slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100 h-100\" src=\"images/preview-electric-scooter.jpg\" alt=\"Second slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100 h-100\" src=\"images/preview-electric-scooter2.jpg\" alt=\"Third slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100 h-100\" src=\"images/scooters.png\" alt=\"Fourth slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100 h-100\" src=\"images/woman-electric-scooter.png\" alt=\"Fifth slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-inline-block w-100 h-100\" src=\"images/preview-skateboarder.jpg\" alt=\"Sixth slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>

    <div class=\"container mt-5 \">
        <h2 class=\"text-center mb-5\" style=\"font-family: Broadway;\">Categories</h2>
        <div class=\"row justify-content-center \">
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/4'><img class=\"card-img\" src=\"images/preview-biker.png\" alt=\"Bikes\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/6'><img class=\"card-img\" src=\"images/preview-electric-scooter.jpg\" alt=\"electric-scooter\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/5'><img class=\"card-img\" src=\"images/woman-electric-scooter.png\" alt=\"Card image\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/7'><img class=\"card-img\" src=\"images/preview-skateboarder.jpg\" alt=\"Card image\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/8'><img class=\"card-img\" src=\"images/preview-sky.jpg\" alt=\"Card image\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/9'><img class=\"card-img\" src=\"images/preview-footbal.jpg\" alt=\"Card image\"></a>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"book mr-5\">
                <section id=\"title-about\" class=\"page active\" style=\"display: flex;justify-content: center;align-items: center;\">
                    <h2 class=\"text-center\" style=\"font-family: Broadway;\">About Us</h2>
                </section>
                <section id=\"about\" class=\"page\">
                    <h2 class=\"text-center mb-5\">About Us</h2>
                    <p>Bine ați venit la Den Sports, destinația dvs. principală pentru echipamente sportive de înaltă calitate și accesorii.</p>
                    <p>La Den Sports, pasiunea pentru sport se întâlnește cu angajamentul pentru calitate și performanță. Suntem o destinație dedicată celor care apreciază fiecare moment petrecut în mișcare și căutăm mereu să oferim echipamente sportive de înaltă calitate și accesorii care să completeze fiecare activitate.</p>
                    <p>Cu o gamă variată de echipamente pentru toate tipurile de sporturi, suntem dedicați să îmbunătățim experiența dumneavoastră în sport.</p>
                    <p>Indiferent dacă sunteți un atlet de performanță sau un entuziast al activităților în aer liber, la Den Sports veți găsi tot ce aveți nevoie pentru a vă exprima pasiunea pentru sport.</p>
                </section>
            </div>
            <div class=\"book\">
                <section id=\"title-reviews\" class=\"page\" style=\"display: flex;justify-content: center;align-items: center;\">
                    <h2 class=\"text-center\" style=\"font-family: Broadway;\">Client Reviews</h2>
                </section>
                <section id=\"reviews\" class=\"page\">
                    <h2 class=\"text-center\">Client Reviews</h2>
                    <div class=\"review\">
                        <h3>Popescu George</h3>
                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 120
            yield "                        <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                        <p><blockquote>Am fost foarte impresionat de calitatea produselor și de serviciile excelente oferite de Sportive Gear. Recomand cu încredere!</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Ciausu Ionela</h3>
                        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 127
            yield "                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "                        <p><blockquote>Echipa de la Sportive Gear a fost extrem de utilă în alegerea echipamentului potrivit pentru nevoile mele. Mulțumesc!</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Popescu Ana</h3>
                        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 134
            yield "                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "                        <p><blockquote>Produsele sunt de calitate și livrarea a fost rapidă. Sunt foarte mulțumită!</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Ionescu Marius</h3>
                        ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 141
            yield "                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "                        <p><blockquote>Echipa de la Den Sports este foarte profesionistă. Recomand cu încredere!</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Radu Andrei</h3>
                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 148
            yield "                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "                        <p><blockquote>Serviciile clienților sunt excelente. Am primit răspunsuri prompte la întrebările mele.</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Georgescu Elena</h3>
                        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 155
            yield "                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "                        <p><blockquote>Am cumpărat mai multe echipamente de la Den Sports și sunt foarte mulțumită de fiecare produs în parte.</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Constantinescu Alex</h3>
                        ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 162
            yield "                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "                        <p><blockquote>Recomand Den Sports tuturor celor pasionați de sport. Veți găsi produse excelente și servicii de calitate.</blockquote></p>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src=\"script.js\"></script>
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
        return "default/index.html.twig";
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
        return array (  321 => 164,  314 => 162,  310 => 161,  304 => 157,  297 => 155,  293 => 154,  287 => 150,  280 => 148,  276 => 147,  270 => 143,  263 => 141,  259 => 140,  253 => 136,  246 => 134,  242 => 133,  236 => 129,  229 => 127,  225 => 126,  219 => 122,  212 => 120,  208 => 119,  106 => 20,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Den Sports{% endblock %}

{% block body %}


    <div class=\"container\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100 h-100\" src=\"{{ asset('images/preview-biker.png')}}\" alt=\"First slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100 h-100\" src=\"images/preview-electric-scooter.jpg\" alt=\"Second slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100 h-100\" src=\"images/preview-electric-scooter2.jpg\" alt=\"Third slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100 h-100\" src=\"images/scooters.png\" alt=\"Fourth slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100 h-100\" src=\"images/woman-electric-scooter.png\" alt=\"Fifth slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-inline-block w-100 h-100\" src=\"images/preview-skateboarder.jpg\" alt=\"Sixth slide\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facere.</p>
                    </div>
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>

    <div class=\"container mt-5 \">
        <h2 class=\"text-center mb-5\" style=\"font-family: Broadway;\">Categories</h2>
        <div class=\"row justify-content-center \">
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/4'><img class=\"card-img\" src=\"images/preview-biker.png\" alt=\"Bikes\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/6'><img class=\"card-img\" src=\"images/preview-electric-scooter.jpg\" alt=\"electric-scooter\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/5'><img class=\"card-img\" src=\"images/woman-electric-scooter.png\" alt=\"Card image\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/7'><img class=\"card-img\" src=\"images/preview-skateboarder.jpg\" alt=\"Card image\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/8'><img class=\"card-img\" src=\"images/preview-sky.jpg\" alt=\"Card image\"></a>
            </div>
            <div class=\"card mr-5 mb-3\" style=\"width: 24rem;height: 16rem;\">
                <a href='/cat/view/9'><img class=\"card-img\" src=\"images/preview-footbal.jpg\" alt=\"Card image\"></a>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"book mr-5\">
                <section id=\"title-about\" class=\"page active\" style=\"display: flex;justify-content: center;align-items: center;\">
                    <h2 class=\"text-center\" style=\"font-family: Broadway;\">About Us</h2>
                </section>
                <section id=\"about\" class=\"page\">
                    <h2 class=\"text-center mb-5\">About Us</h2>
                    <p>Bine ați venit la Den Sports, destinația dvs. principală pentru echipamente sportive de înaltă calitate și accesorii.</p>
                    <p>La Den Sports, pasiunea pentru sport se întâlnește cu angajamentul pentru calitate și performanță. Suntem o destinație dedicată celor care apreciază fiecare moment petrecut în mișcare și căutăm mereu să oferim echipamente sportive de înaltă calitate și accesorii care să completeze fiecare activitate.</p>
                    <p>Cu o gamă variată de echipamente pentru toate tipurile de sporturi, suntem dedicați să îmbunătățim experiența dumneavoastră în sport.</p>
                    <p>Indiferent dacă sunteți un atlet de performanță sau un entuziast al activităților în aer liber, la Den Sports veți găsi tot ce aveți nevoie pentru a vă exprima pasiunea pentru sport.</p>
                </section>
            </div>
            <div class=\"book\">
                <section id=\"title-reviews\" class=\"page\" style=\"display: flex;justify-content: center;align-items: center;\">
                    <h2 class=\"text-center\" style=\"font-family: Broadway;\">Client Reviews</h2>
                </section>
                <section id=\"reviews\" class=\"page\">
                    <h2 class=\"text-center\">Client Reviews</h2>
                    <div class=\"review\">
                        <h3>Popescu George</h3>
                        {%for i in range(0,4) %}
                        <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        {% endfor %}
                        <p><blockquote>Am fost foarte impresionat de calitatea produselor și de serviciile excelente oferite de Sportive Gear. Recomand cu încredere!</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Ciausu Ionela</h3>
                        {%for i in range(0,3) %}
                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        {% endfor %}
                        <p><blockquote>Echipa de la Sportive Gear a fost extrem de utilă în alegerea echipamentului potrivit pentru nevoile mele. Mulțumesc!</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Popescu Ana</h3>
                        {%for i in range(0,4) %}
                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        {% endfor %}
                        <p><blockquote>Produsele sunt de calitate și livrarea a fost rapidă. Sunt foarte mulțumită!</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Ionescu Marius</h3>
                        {%for i in range(0,4) %}
                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        {% endfor %}
                        <p><blockquote>Echipa de la Den Sports este foarte profesionistă. Recomand cu încredere!</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Radu Andrei</h3>
                        {%for i in range(0,3) %}
                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        {% endfor %}
                        <p><blockquote>Serviciile clienților sunt excelente. Am primit răspunsuri prompte la întrebările mele.</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Georgescu Elena</h3>
                        {%for i in range(0,4) %}
                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        {% endfor %}
                        <p><blockquote>Am cumpărat mai multe echipamente de la Den Sports și sunt foarte mulțumită de fiecare produs în parte.</blockquote></p>
                    </div>
                    <div class=\"review\">
                        <h3>Constantinescu Alex</h3>
                        {%for i in range(0,3) %}
                            <i class=\"fa fa-star\" style=\"color: gold\"></i>
                        {% endfor %}
                        <p><blockquote>Recomand Den Sports tuturor celor pasionați de sport. Veți găsi produse excelente și servicii de calitate.</blockquote></p>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src=\"script.js\"></script>
{% endblock %}
", "default/index.html.twig", "/var/www/html/Dennis/myShop/templates/default/index.html.twig");
    }
}
