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

/* cart/index.html.twig */
class __TwigTemplate_1f3d09cf98a6ad96900dc0e97406c362 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        yield "Hello CartController!";
        
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
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <p class=\"text-danger font-weight-bold\" style=\"font-size: 20px;\">Oferte speciale</p>
    <p class=\"text-danger font-weight-bold\">La suma totala de peste 1500 ron,beneficiati de 15% reducere!</p>
    <p class=\"text-danger font-weight-bold\">Cumparati peste 2 articole și beneficiati de 10% reducere!</p>
    <p class=\"text-success font-weight-bold\">Transportul este gratuit!</p>
    <table class=\"table\">
        <tr>
            <th>Nume</th>
            <th>Pret unitar</th>
            <th>Cantitate</th>
            <th>Pret total</th>
            <th></th>
        </tr>
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 24, $this->source); })()), "cartItems", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 25
            yield "        <tr>
            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), "html", null, true);
            yield " RON</td>
            <td>
                <form action=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_update", ["product" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" method=\"post\">
                    <input type=\"number\" min=\"1\" max=\"100\" name=\"quantity\" value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cartItem"], "quantity", [], "any", false, false, false, 30), "html", null, true);
            yield "\">
                    <button class=\"btn btn-success\" type=\"submit\">Update</button>
                </form>
            </td>
            <td>
                ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 35, $this->source); })()), "getPromoCartItemTotal", [$context["cartItem"]], "method", false, false, false, 35) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 35, $this->source); })()), "getCartItemTotal", [$context["cartItem"]], "method", false, false, false, 35))) {
                // line 36
                yield "                    <strike>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 36, $this->source); })()), "getCartItemTotal", [$context["cartItem"]], "method", false, false, false, 36), "html", null, true);
                yield " RON</strike>
                    <hr/>
                ";
            }
            // line 39
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 39, $this->source); })()), "getPromoCartItemTotal", [$context["cartItem"]], "method", false, false, false, 39), "html", null, true);
            yield " RON
            </td>
            <td><a class=\"btn btn-danger\" href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_delete", ["product" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\">Delete</a></td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>
                <strike>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 50, $this->source); })()), "getCartTotal", [], "method", false, false, false, 50), "html", null, true);
        yield " RON </strike>
                <hr/>
                ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 52, $this->source); })()), "getPromoCartTotal", [], "method", false, false, false, 52), "html", null, true);
        yield " RON
            </th>
            <th></th>
        </tr>
    </table>
    <a class=\"btn btn-danger\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_empty");
        yield "\">Cart empty</a>
    <a class=\"btn btn-success\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        yield "\">Return home</a>
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
        return "cart/index.html.twig";
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
        return array (  187 => 58,  183 => 57,  175 => 52,  170 => 50,  163 => 45,  153 => 41,  147 => 39,  140 => 36,  138 => 35,  130 => 30,  126 => 29,  121 => 27,  117 => 26,  114 => 25,  110 => 24,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CartController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <p class=\"text-danger font-weight-bold\" style=\"font-size: 20px;\">Oferte speciale</p>
    <p class=\"text-danger font-weight-bold\">La suma totala de peste 1500 ron,beneficiati de 15% reducere!</p>
    <p class=\"text-danger font-weight-bold\">Cumparati peste 2 articole și beneficiati de 10% reducere!</p>
    <p class=\"text-success font-weight-bold\">Transportul este gratuit!</p>
    <table class=\"table\">
        <tr>
            <th>Nume</th>
            <th>Pret unitar</th>
            <th>Cantitate</th>
            <th>Pret total</th>
            <th></th>
        </tr>
    {% for cartItem in cart.cartItems %}
        <tr>
            <td>{{ cartItem.product.name }}</td>
            <td>{{ cartItem.product.price }} RON</td>
            <td>
                <form action=\"{{ url('cart_update',{'product':cartItem.product.id}) }}\" method=\"post\">
                    <input type=\"number\" min=\"1\" max=\"100\" name=\"quantity\" value=\"{{ cartItem.quantity }}\">
                    <button class=\"btn btn-success\" type=\"submit\">Update</button>
                </form>
            </td>
            <td>
                {% if cartService.getPromoCartItemTotal(cartItem) != cartService.getCartItemTotal(cartItem)  %}
                    <strike>{{ cartService.getCartItemTotal(cartItem) }} RON</strike>
                    <hr/>
                {% endif %}
                {{ cartService.getPromoCartItemTotal(cartItem) }} RON
            </td>
            <td><a class=\"btn btn-danger\" href=\"{{ url('cart_delete',{'product':cartItem.product.id}) }}\">Delete</a></td>
        </tr>

        {% endfor %}
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>
                <strike>{{ cartService.getCartTotal() }} RON </strike>
                <hr/>
                {{ cartService.getPromoCartTotal() }} RON
            </th>
            <th></th>
        </tr>
    </table>
    <a class=\"btn btn-danger\" href=\"{{ url('cart_empty') }}\">Cart empty</a>
    <a class=\"btn btn-success\" href=\"{{ url('homepage') }}\">Return home</a>
</div>
{% endblock %}
", "cart/index.html.twig", "/var/www/html/Dennis/myShop/templates/cart/index.html.twig");
    }
}
