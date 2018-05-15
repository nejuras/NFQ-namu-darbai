<?php

/* giftlist/user.html.twig */
class __TwigTemplate_f299de7a15fd9f580713bc670495e4bcf797ff1b5f761e5f6224cfb00afaaaad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "giftlist/user.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftlist/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftlist/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        echo twig_include($this->env, $context, "navigation/navigation.html.twig");
        echo "
    <br><br><br><br>
    <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading text-uppercase\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 19, $this->source); })()), "firstname", array()), "html", null, true);
        echo " Gift List</h2>
                    <h3 class=\"section-subheading text-muted\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 20, $this->source); })()), "email", array()), "html", null, true);
        echo "</h3>
                </div>
            </div>
            <div class=\"row text-center\">
                <div class=\"col-md-6 text-left\">
                    ";
        // line 26
        echo "                        ";
        // line 27
        echo "                            ";
        // line 28
        echo "                                ";
        // line 29
        echo "                                ";
        // line 30
        echo "                            ";
        // line 31
        echo "                            ";
        // line 32
        echo "                                ";
        // line 33
        echo "                                ";
        // line 34
        echo "                            ";
        // line 35
        echo "                        ";
        // line 36
        echo "                        ";
        // line 37
        echo "                            ";
        // line 38
        echo "                                ";
        // line 39
        echo "                                ";
        // line 40
        echo "                            ";
        // line 41
        echo "                            ";
        // line 42
        echo "                                ";
        // line 43
        echo "                                ";
        // line 44
        echo "                            ";
        // line 45
        echo "                        ";
        // line 46
        echo "                    ";
        // line 47
        echo "                    <div class=\"row\">
                        ";
        // line 49
        echo "                            ";
        // line 50
        echo "                                ";
        // line 51
        echo "                                ";
        // line 52
        echo "                            ";
        // line 53
        echo "                            ";
        // line 54
        echo "                                ";
        // line 55
        echo "                                ";
        // line 56
        echo "                            ";
        // line 57
        echo "                        ";
        // line 58
        echo "                        <div class=\"col-md-12\">
                            <span class=\"d-inline-block fa-stack fa-4x\">
                                <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                                <i class=\"fa fa-birthday-cake fa-stack-1x fa-inverse\"></i>
                            </span>
                            ";
        // line 64
        echo "                            ";
        // line 65
        echo "                            ";
        // line 66
        echo "                            <div class=\"col-md-12\">
                                <h4 class=\"service-heading\">";
        // line 67
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 67, $this->source); })()), "title", array())), "html", null, true);
        echo "</h4>
                                <p class=\"text-muted\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 68, $this->source); })()), "description", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 74, $this->source); })()), "gifts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gift"]) {
            // line 75
            echo "                    <div class=\"col-md-12 d-inline-block\">

                        <div class=\"float-left fa-stack fa-4x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-gift fa-stack-1x fa-inverse\"></i>
                        </div>
                        <div class=\"d-inline-block\">
                            ";
            // line 83
            echo "                            ";
            // line 84
            echo "                            <p class=\"text-muted\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "title", array())), "html", null, true);
            echo "</p>
                        </div>
                        ";
            // line 86
            if ((null === twig_get_attribute($this->env, $this->source, $context["gift"], "reservationToken", array()))) {
                // line 87
                echo "                        <div class=\"float-right\">
                            <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gift-reserve", array("uuiduser" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 88, $this->source); })()), "uuid", array()), "id" => twig_get_attribute($this->env, $this->source, $context["gift"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-xl bg-dark border-dark\">reserve</a>
                        </div>
                        ";
            }
            // line 91
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["gift"], "reservationToken", array()))) {
                // line 92
                echo "                            <div class=\"float-right\">
                                <div class=\"btn-group\">
                                        <div class=\"btn-xl bg-danger border-danger\">Reserved</div>
                                    ";
                // line 95
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 95, $this->source); })()), "request", array()), "cookies", array()), "has", array(0 => twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["gift"], "id", array()))), "method")) {
                    // line 96
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gift-unreserve", array("uuiduser" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 96, $this->source); })()), "uuid", array()), "id" => twig_get_attribute($this->env, $this->source, $context["gift"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-xl bg-dark border-dark\">Undo</a>
                                    ";
                }
                // line 98
                echo "                                </div>
                            </div>
                        ";
            }
            // line 101
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gift'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </div>
            </div>
        </div>
    </section>

    <div class=\"footer\">
        <div class=\"container-fluid\">

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "giftlist/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 103,  283 => 101,  278 => 98,  272 => 96,  270 => 95,  265 => 92,  262 => 91,  256 => 88,  253 => 87,  251 => 86,  245 => 84,  243 => 83,  234 => 75,  230 => 74,  221 => 68,  217 => 67,  214 => 66,  212 => 65,  210 => 64,  203 => 58,  201 => 57,  199 => 56,  197 => 55,  195 => 54,  193 => 53,  191 => 52,  189 => 51,  187 => 50,  185 => 49,  182 => 47,  180 => 46,  178 => 45,  176 => 44,  174 => 43,  172 => 42,  170 => 41,  168 => 40,  166 => 39,  164 => 38,  162 => 37,  160 => 36,  158 => 35,  156 => 34,  154 => 33,  152 => 32,  150 => 31,  148 => 30,  146 => 29,  144 => 28,  142 => 27,  140 => 26,  132 => 20,  128 => 19,  118 => 13,  109 => 12,  96 => 9,  87 => 8,  74 => 5,  65 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }}{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block body %}
    {{ include('navigation/navigation.html.twig') }}
    <br><br><br><br>
    <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading text-uppercase\">{{ data.firstname }} Gift List</h2>
                    <h3 class=\"section-subheading text-muted\">{{ data.email }}</h3>
                </div>
            </div>
            <div class=\"row text-center\">
                <div class=\"col-md-6 text-left\">
                    {#<div class=\"row\">#}
                        {#<div class=\"col-md-12\">#}
                            {#<span class=\"d-inline-block fa-stack fa-4x\">#}
                                {#<i class=\"fa fa-circle fa-stack-2x text-primary\"></i>#}
                                {#<i class=\"fa fa-user fa-stack-1x fa-inverse\"></i>#}
                            {#</span>#}
                            {#<div class=\"d-inline-block\">#}
                                {#<h4 class=\"service-heading\">Name</h4>#}
                                {#<p class=\"text-muted\">{{ data.0.firstname }}</p>#}
                            {#</div>#}
                        {#</div>#}
                        {#<div class=\"col-md-12\">#}
                            {#<span class=\"d-inline-block fa-stack fa-4x\">#}
                                {#<i class=\"fa fa-circle fa-stack-2x text-primary\"></i>#}
                                {#<i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i>#}
                            {#</span>#}
                            {#<div class=\"d-inline-block\">#}
                                {#<h4 class=\"service-heading\">Email</h4>#}
                                {#<p class=\"text-muted\">{{ data.0.email }}</p>#}
                            {#</div>#}
                        {#</div>#}
                    {#</div>#}
                    <div class=\"row\">
                        {#<div class=\"col-md-12\">#}
                            {#<span class=\"d-inline-block fa-stack fa-4x\">#}
                                {#<i class=\"fa fa-circle fa-stack-2x text-primary\"></i>#}
                                {#<i class=\"fa fa-birthday-cake fa-stack-1x fa-inverse\"></i>#}
                            {#</span>#}
                            {#<div class=\"d-inline-block\">#}
                                {#<h4 class=\"service-heading\">Title</h4>#}
                                {#<p class=\"text-muted\">{{ data.0.title|capitalize }}</p>#}
                            {#</div>#}
                        {#</div>#}
                        <div class=\"col-md-12\">
                            <span class=\"d-inline-block fa-stack fa-4x\">
                                <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                                <i class=\"fa fa-birthday-cake fa-stack-1x fa-inverse\"></i>
                            </span>
                            {#<div class=\"d-inline-block\">#}
                            {#<h4 class=\"service-heading\">{{ data.0.title|capitalize }}</h4>#}
                            {#</div>#}
                            <div class=\"col-md-12\">
                                <h4 class=\"service-heading\">{{ data.title|capitalize }}</h4>
                                <p class=\"text-muted\">{{ data.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                {% for gift in data.gifts %}
                    <div class=\"col-md-12 d-inline-block\">

                        <div class=\"float-left fa-stack fa-4x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-gift fa-stack-1x fa-inverse\"></i>
                        </div>
                        <div class=\"d-inline-block\">
                            {#<h4 class=\"service-heading\">Gifts</h4>#}
                            {#{{ dump(gift) }}#}
                            <p class=\"text-muted\">{{ gift.title|capitalize }}</p>
                        </div>
                        {% if gift.reservationToken is null %}
                        <div class=\"float-right\">
                            <a href=\"{{ path('gift-reserve', {'uuiduser': data.uuid, 'id':gift.id}) }}\"class=\"btn btn-xl bg-dark border-dark\">reserve</a>
                        </div>
                        {% endif %}
                        {% if gift.reservationToken is not null %}
                            <div class=\"float-right\">
                                <div class=\"btn-group\">
                                        <div class=\"btn-xl bg-danger border-danger\">Reserved</div>
                                    {% if app.request.cookies.has(gift.id|trim) %}
                                        <a href=\"{{ path('gift-unreserve', {'uuiduser': data.uuid, 'id':gift.id}) }}\" class=\"btn btn-xl bg-dark border-dark\">Undo</a>
                                    {% endif %}
                                </div>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
                </div>
            </div>
        </div>
    </section>

    <div class=\"footer\">
        <div class=\"container-fluid\">

        </div>
    </div>
{% endblock %}", "giftlist/user.html.twig", "/code/templates/giftlist/user.html.twig");
    }
}
