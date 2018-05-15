<?php

/* navigation/navigation.html.twig */
class __TwigTemplate_bbe028530e4ffa897a54acd76c2ca57cbedf5eb7f5d6fd0ba24ecef87c83ffd7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navigation/navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navigation/navigation.html.twig"));

        // line 1
        $this->displayBlock('navigation', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_navigation($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 2
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Wish A Gift</a>
        ";
        // line 6
        echo "            ";
        // line 7
        echo "            ";
        // line 8
        echo "            ";
        // line 9
        echo "        ";
        // line 10
        echo "            ";
        // line 11
        echo "                ";
        // line 12
        echo "                    ";
        // line 13
        echo "                    ";
        // line 14
        echo "                ";
        // line 15
        echo "                    ";
        // line 16
        echo "                    ";
        // line 17
        echo "                ";
        // line 18
        echo "                    ";
        // line 19
        echo "                    ";
        // line 20
        echo "                ";
        // line 21
        echo "                    ";
        // line 22
        echo "                    ";
        // line 23
        echo "                ";
        // line 24
        echo "                    ";
        // line 25
        echo "                ";
        // line 26
        echo "            ";
        // line 27
        echo "        ";
        // line 28
        echo "    </div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "navigation/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  98 => 27,  96 => 26,  94 => 25,  92 => 24,  90 => 23,  88 => 22,  86 => 21,  84 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  74 => 15,  72 => 14,  70 => 13,  68 => 12,  66 => 11,  64 => 10,  62 => 9,  60 => 8,  58 => 7,  56 => 6,  52 => 4,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block navigation %}
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"{{ path('home') }}\">Wish A Gift</a>
        {#<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">#}
            {#Menu#}
            {#<i class=\"fa fa-bars\"></i>#}
            {#</button>#}
        {#<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">#}
            {#<ul class=\"navbar-nav text-uppercase ml-auto\">#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link js-scroll-trigger\" href=\"#services\">Services</a>#}
                    {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>#}
                    {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>#}
                    {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link js-scroll-trigger\" href=\"#team\">Team</a>#}
                    {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>#}
                {#</li>#}
            {#</ul>#}
        {#</div>#}
    </div>
</nav>
{% endblock %}", "navigation/navigation.html.twig", "/code/templates/navigation/navigation.html.twig");
    }
}
