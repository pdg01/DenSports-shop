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

/* default/parts/footer.html.twig */
class __TwigTemplate_3f96f80bb822b8cca4c5f42cd3ffcfc0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/parts/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/parts/footer.html.twig"));

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
        yield "<footer class=\"footer footer-default mt-5 bg-secondary\">
    <div class=\"footer-aux\">
        <div class=\"container\" style=\"box-shadow: none !important;\">
            <div class=\"row\">
                <div class=\"col-2\"></div>
                <form class=\"text-white\">
                    <ul class=\"contact-details\">
                        <h2 class=\"mt-3 mb-3\" style=\"font-family: Broadway;\" >Contact US</h2>
                        <li class=\"mt-2 text-white\"><i class=\"fa faContact fa-map-marker\" aria-hidden=\"true\"></i> 14 West Street, Weston-super-Mare, BS23 1JT</li>
                        <li class=\"mt-2 text-white\"><i class=\"fa faContact fa-phone\" aria-hidden=\"true\"></i>  01934 418 770</li>
                        <li class=\"mt-2\"><a class=\"text-white\" href=\"mailto:dennispenoiu19@gmail.com\"><i class=\"fa faContact fa-envelope\" aria-hidden=\"true\"></i> dennispenoiu19@gmail.com</a></li>
                    </ul>
                    <div class=\"form-row\">
                        <div class=\"col-md-4 mb-3\">
                            <label for=\"validationDefault01\">First name</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault01\" placeholder=\"First name\" required>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <label for=\"validationDefault02\">Last name</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault02\" placeholder=\"Last name\" required>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <label for=\"validationDefaultUsername\">Username</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\" id=\"inputGroupPrepend2\">@</span>
                                </div>
                                <input type=\"text\" class=\"form-control\" id=\"validationDefaultUsername\" placeholder=\"Username\" aria-describedby=\"inputGroupPrepend2\" required>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col-md-6 mb-3\">
                            <label for=\"validationDefault03\">City</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault03\" placeholder=\"City\" required>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <label for=\"validationDefault04\">State</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault04\" placeholder=\"State\" required>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <label for=\"validationDefault05\">Zip</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault05\" placeholder=\"Zip\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck2\" required>
                            <label class=\"form-check-label\" for=\"invalidCheck2\">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <button class=\"btn btn-light\" type=\"submit\">Submit form</button>
                    <br>
                    <div class=\"row\">
                        <div class=\"mt-5 mb-5 mr-auto\">
                            <span class=\"copyright\">© Copyright 2024 Den Food</span>
                            <a href=\"#\" class=\"custom_buttons fa fa-facebook\"></a>
                            <a href=\"#\" class=\"custom_buttons fa fa-linkedin\"></a>
                            <a href=\"#\" class=\"custom_buttons fa fa-youtube\"></a>
                            <a href=\"#\" class=\"custom_buttons fa fa-instagram\"></a>
                            <a href=\"#\" class=\"custom_buttons fa fa-google\"></a>
                            <a class=\"text-white ml-2 mr-3\" href=\"#\">TERMS & CONDITIONS OF USE</a>
                            <a class=\"text-white\" href=\"#\">PRIVACY POLICY</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
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
        return "default/parts/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  65 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<footer class=\"footer footer-default mt-5 bg-secondary\">
    <div class=\"footer-aux\">
        <div class=\"container\" style=\"box-shadow: none !important;\">
            <div class=\"row\">
                <div class=\"col-2\"></div>
                <form class=\"text-white\">
                    <ul class=\"contact-details\">
                        <h2 class=\"mt-3 mb-3\" style=\"font-family: Broadway;\" >Contact US</h2>
                        <li class=\"mt-2 text-white\"><i class=\"fa faContact fa-map-marker\" aria-hidden=\"true\"></i> 14 West Street, Weston-super-Mare, BS23 1JT</li>
                        <li class=\"mt-2 text-white\"><i class=\"fa faContact fa-phone\" aria-hidden=\"true\"></i>  01934 418 770</li>
                        <li class=\"mt-2\"><a class=\"text-white\" href=\"mailto:dennispenoiu19@gmail.com\"><i class=\"fa faContact fa-envelope\" aria-hidden=\"true\"></i> dennispenoiu19@gmail.com</a></li>
                    </ul>
                    <div class=\"form-row\">
                        <div class=\"col-md-4 mb-3\">
                            <label for=\"validationDefault01\">First name</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault01\" placeholder=\"First name\" required>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <label for=\"validationDefault02\">Last name</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault02\" placeholder=\"Last name\" required>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <label for=\"validationDefaultUsername\">Username</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\" id=\"inputGroupPrepend2\">@</span>
                                </div>
                                <input type=\"text\" class=\"form-control\" id=\"validationDefaultUsername\" placeholder=\"Username\" aria-describedby=\"inputGroupPrepend2\" required>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col-md-6 mb-3\">
                            <label for=\"validationDefault03\">City</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault03\" placeholder=\"City\" required>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <label for=\"validationDefault04\">State</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault04\" placeholder=\"State\" required>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <label for=\"validationDefault05\">Zip</label>
                            <input type=\"text\" class=\"form-control\" id=\"validationDefault05\" placeholder=\"Zip\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck2\" required>
                            <label class=\"form-check-label\" for=\"invalidCheck2\">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <button class=\"btn btn-light\" type=\"submit\">Submit form</button>
                    <br>
                    <div class=\"row\">
                        <div class=\"mt-5 mb-5 mr-auto\">
                            <span class=\"copyright\">© Copyright 2024 Den Food</span>
                            <a href=\"#\" class=\"custom_buttons fa fa-facebook\"></a>
                            <a href=\"#\" class=\"custom_buttons fa fa-linkedin\"></a>
                            <a href=\"#\" class=\"custom_buttons fa fa-youtube\"></a>
                            <a href=\"#\" class=\"custom_buttons fa fa-instagram\"></a>
                            <a href=\"#\" class=\"custom_buttons fa fa-google\"></a>
                            <a class=\"text-white ml-2 mr-3\" href=\"#\">TERMS & CONDITIONS OF USE</a>
                            <a class=\"text-white\" href=\"#\">PRIVACY POLICY</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
{% endblock %}", "default/parts/footer.html.twig", "/var/www/html/Dennis/myShop/templates/default/parts/footer.html.twig");
    }
}
