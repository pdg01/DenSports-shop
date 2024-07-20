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

/* default/parts/header.html.twig */
class __TwigTemplate_a2d46b5ed8a998f9123d6f74ac2106f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/parts/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/parts/header.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        yield "<nav class=\"navbar navbar-expand-lg  navbar-light  text-white \">
    <div class=\"container bg-secondary\">
        <a class=\"navbar-brand text-white\" href=\"#\" ><img style=\"max-width: 100px; height: auto;vertical-align: middle;\" src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo%20Den%20Sports.png"), "html", null, true);
        yield "\"></a>
        <button class=\"navbar-toggler text-white\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon text-white\"></span>
        </button>

        <div class=\"collapse navbar-collapse \" id=\"navbarTogglerDemo02\">
            <ul class=\"navbar-nav mt-lg-0 mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link text-white\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        yield "\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown \">
                    <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Categories
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["twigGlobalsService"]) || array_key_exists("twigGlobalsService", $context) ? $context["twigGlobalsService"] : (function () { throw new RuntimeError('Variable "twigGlobalsService" does not exist.', 19, $this->source); })()), "getMenuCategories", [], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            yield "                            <a class=\"dropdown-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20), "html", null, true);
            yield "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "                    </div>
                </li>
                ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 25
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link text-white\" href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("adminPanel");
            yield "\">Admin panel</a>
                </li>
                ";
        }
        // line 29
        yield "            </ul>
            <form class=\"form-inline my-2 my-lg-0 mr-auto\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-info my-2 my-sm-0\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
            </form>
            <ul class=\"navbar-nav mt-lg-0\">
                <li class=\"nav-item mr-2\">

                        ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
            // line 38
            yield "                        <a class=\"nav-link btn btn-lg ml-2 text-white\" data-toggle=\"popover\" data-trigger=\"focus\" title=\"Logout, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
            yield " \" data-placement=\"bottom\" data-content=\"<a class='btn btn-secondary' href=";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield ">Logout</a>\">
                                <i class=\"fa fa-user\"></i>
                                ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40), "html", null, true);
            yield "</a>
                        ";
        } else {
            // line 42
            yield "                    <a class=\"nav-link text-white\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            yield "\">
                            <i class=\"fa fa-user\"></i>
                        <span class=\"ml-2\">Contul meu</span>
                    </a>
                        ";
        }
        // line 47
        yield "
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link text-white mb-2\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_cart");
        yield "\">
                        <i class=\"fa fa-cart-shopping\"></i>
                        ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 53, $this->source); })()), "getCartCount", [], "method", false, false, false, 53) > 0)) {
            // line 54
            yield "                            <span class=\"badge badge-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 54, $this->source); })()), "getCartCount", [], "method", false, false, false, 54), "html", null, true);
            yield "</span>
                        ";
        }
        // line 56
        yield "                        <span class=\"ml-2\">Cosul meu</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <script>
        \$(function () {
            \$(\"[data-toggle=popover]\").popover({
                trigger: \"manual\",
                html: true,
                content: function () {
                    var content = \$(this).attr(\"data-popover-content\");
                    return \$(content).children(\".popover-body\").html();
                },
                title: function () {
                    var title = \$(this).attr(\"data-popover-content\");
                    return \$(title).children(\".popover-heading\").html();
                }
            })
                .on(\"mouseenter\", function () {
                    var _this = this;

                    \$(_this).popover(\"show\");

                    \$(\".popover\").on(\"mouseleave\", function () {
                        setTimeout(function () {
                            if (!\$(\".popover:hover\").length) {
                                \$(_this).popover(\"hide\");
                            }
                        }, 300);
                    });
                })
                .on(\"mouseleave\", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!\$(\".popover:hover\").length) {
                            \$(_this).popover(\"hide\");
                        }
                    }, 300);
                });
        });
    </script>
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
        return "default/parts/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  173 => 56,  167 => 54,  165 => 53,  160 => 51,  154 => 47,  145 => 42,  140 => 40,  132 => 38,  130 => 37,  120 => 29,  114 => 26,  111 => 25,  109 => 24,  105 => 22,  94 => 20,  90 => 19,  80 => 12,  69 => 4,  65 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<nav class=\"navbar navbar-expand-lg  navbar-light  text-white \">
    <div class=\"container bg-secondary\">
        <a class=\"navbar-brand text-white\" href=\"#\" ><img style=\"max-width: 100px; height: auto;vertical-align: middle;\" src=\"{{ asset('images/logo%20Den%20Sports.png') }}\"></a>
        <button class=\"navbar-toggler text-white\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon text-white\"></span>
        </button>

        <div class=\"collapse navbar-collapse \" id=\"navbarTogglerDemo02\">
            <ul class=\"navbar-nav mt-lg-0 mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link text-white\" href=\"{{ url('homepage') }}\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown \">
                    <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Categories
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        {% for category in twigGlobalsService.getMenuCategories() %}
                            <a class=\"dropdown-item\" href=\"{{ url('category',{'category':category.id}) }}\">{{ category.name}}</a>
                        {% endfor %}
                    </div>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link text-white\" href=\"{{ url('adminPanel') }}\">Admin panel</a>
                </li>
                {% endif %}
            </ul>
            <form class=\"form-inline my-2 my-lg-0 mr-auto\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-info my-2 my-sm-0\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
            </form>
            <ul class=\"navbar-nav mt-lg-0\">
                <li class=\"nav-item mr-2\">

                        {% if app.user %}
                        <a class=\"nav-link btn btn-lg ml-2 text-white\" data-toggle=\"popover\" data-trigger=\"focus\" title=\"Logout, {{app.user.username}} \" data-placement=\"bottom\" data-content=\"<a class='btn btn-secondary' href={{ path('app_logout') }}>Logout</a>\">
                                <i class=\"fa fa-user\"></i>
                                {{app.user.username}}</a>
                        {% else %}
                    <a class=\"nav-link text-white\" href=\"{{ url('app_login') }}\">
                            <i class=\"fa fa-user\"></i>
                        <span class=\"ml-2\">Contul meu</span>
                    </a>
                        {% endif %}

                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link text-white mb-2\" href=\"{{ url('app_cart') }}\">
                        <i class=\"fa fa-cart-shopping\"></i>
                        {% if cartService.getCartCount() > 0 %}
                            <span class=\"badge badge-danger\">{{ cartService.getCartCount() }}</span>
                        {% endif %}
                        <span class=\"ml-2\">Cosul meu</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <script>
        \$(function () {
            \$(\"[data-toggle=popover]\").popover({
                trigger: \"manual\",
                html: true,
                content: function () {
                    var content = \$(this).attr(\"data-popover-content\");
                    return \$(content).children(\".popover-body\").html();
                },
                title: function () {
                    var title = \$(this).attr(\"data-popover-content\");
                    return \$(title).children(\".popover-heading\").html();
                }
            })
                .on(\"mouseenter\", function () {
                    var _this = this;

                    \$(_this).popover(\"show\");

                    \$(\".popover\").on(\"mouseleave\", function () {
                        setTimeout(function () {
                            if (!\$(\".popover:hover\").length) {
                                \$(_this).popover(\"hide\");
                            }
                        }, 300);
                    });
                })
                .on(\"mouseleave\", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!\$(\".popover:hover\").length) {
                            \$(_this).popover(\"hide\");
                        }
                    }, 300);
                });
        });
    </script>
{% endblock %}", "default/parts/header.html.twig", "/var/www/html/Dennis/myShop/templates/default/parts/header.html.twig");
    }
}
