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

/* default/parts/admin-panel.html.twig */
class __TwigTemplate_edf54654935232480fb60e2d2f47028d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/parts/admin-panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/parts/admin-panel.html.twig"));

        // line 1
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        yield "\"><img  width=\"150px\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"logo.png\"></a>Admin Panel
<h1>
    Admin Panel
</h1>
<table class=\"table\">
    <thead>
    <tr>
        <th>
            Name
        </th>
        <th>
            Link
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            User index -
        </td>
        <td>
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_index");
        yield "\">User index Link</a>
        </td>
    </tr>
    <tr>
        <td>
            Product index -
        </td>
        <td>
            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("crud_product_index");
        yield "\">Product index Link</a>
        </td>
    </tr>
    <tr>
        <td>
            Vendor index -
        </td>
        <td>
            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("crud_vendor_index");
        yield "\">Vendor index Link</a>
        </td>
    </tr>
    <tr>
        <td>
            Category index -
        </td>
        <td>
            <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("crud_category_index");
        yield "\">Category index Link</a>
        </td>
    </tr>
    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/parts/admin-panel.html.twig";
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
        return array (  104 => 46,  93 => 38,  82 => 30,  71 => 22,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ url('homepage') }}\"><img  width=\"150px\" src=\"{{ asset('images/logo.png') }}\" alt=\"logo.png\"></a>Admin Panel
<h1>
    Admin Panel
</h1>
<table class=\"table\">
    <thead>
    <tr>
        <th>
            Name
        </th>
        <th>
            Link
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            User index -
        </td>
        <td>
            <a href=\"{{ url('user_index') }}\">User index Link</a>
        </td>
    </tr>
    <tr>
        <td>
            Product index -
        </td>
        <td>
            <a href=\"{{ url('crud_product_index') }}\">Product index Link</a>
        </td>
    </tr>
    <tr>
        <td>
            Vendor index -
        </td>
        <td>
            <a href=\"{{ url('crud_vendor_index') }}\">Vendor index Link</a>
        </td>
    </tr>
    <tr>
        <td>
            Category index -
        </td>
        <td>
            <a href=\"{{ url('crud_category_index') }}\">Category index Link</a>
        </td>
    </tr>
    </tbody>
</table>", "default/parts/admin-panel.html.twig", "/var/www/html/Dennis/myShop/templates/default/parts/admin-panel.html.twig");
    }
}
