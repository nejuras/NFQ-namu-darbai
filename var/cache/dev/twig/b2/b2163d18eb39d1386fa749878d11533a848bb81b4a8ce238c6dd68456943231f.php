<?php

/* create/index.html.twig */
class __TwigTemplate_c603b03ae32ea6ef02ead8642ca2e9c1a2612627f42ec2ec7d92d5e0b4305f5a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "create/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "create/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "create/index.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), array(0 => "form/form_errors.html.twig"), true);
        // line 1
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
        echo "  ";
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
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script>
      let \$collectionHolder;

                // setup an \"add a gift\" link
                    let \$addTagLink = \$('<a href=\"#\" class=\"btn btn-primary btn-xl btn-block add_gift_link\">Add a Gift</a><br />');
            let \$newLinkLi = \$('<li></li>').append(\$addTagLink);

      \$(document).ready(function () {
          console.log(\"All resources finished loading\");

          jQuery('.add-another-collection-widget').click(function (e) {
              e.preventDefault();
              let list = jQuery(jQuery(this).attr('data-list'));
              // Try to find the counter of the list
              let counter = list.data('widget-counter') | list.children().length;
              // If the counter does not exist, use the length of the list
              if (!counter) {
                  counter = list.children().length;
              }

              // grab the prototype template
              let newWidget = list.attr('data-prototype');
              // replace the \"__name__\" used in the id and name of the prototype
              // with a number that's unique to your gifts
              // end name attribute looks like name=\"contact[gifts][2]\"
              newWidget = newWidget.replace(/__name__/g, counter);
              // Increase the counter
              counter++;
              // And store it, the length cannot be used if deleting widgets is allowed
              list.data('widget-counter', counter);

              // create a new list element and add it to the list
              let newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
              newElem.prependTo(list);


          });
      });
      ";
        // line 50
        echo "      ";
        // line 51
        echo "  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "  ";
        echo twig_include($this->env, $context, "navigation/navigation.html.twig");
        echo "
  <section id=\"contact\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
          <h2 class=\"section-heading text-uppercase\">Create your Gift List</h2>
          <h3 class=\"section-subheading text-muted\"></h3>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-12\">
          ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), 'form_start', array("method" => "POST", "attr" => array("id" => "createForm", "action" => "create", "novalidate" => "novalidate")));
        // line 72
        echo "
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"form-group\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your Name")));
        // line 81
        echo "
                <p class=\"help-block text-danger\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "firstName", array()), 'errors');
        echo "</p>
              </div>
              <div class=\"form-group\">
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your Email")));
        // line 90
        echo "
                <p class=\"help-block text-danger\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "email", array()), 'errors');
        echo "</p>
              </div>

              <div class=\"form-group\">
                <a href=\"#\" class=\"btn btn-primary btn-xl btn-block add-another-collection-widget\"
                   data-list=\"#gift-fields-list\">Add a Gift
                </a>
              </div>
              <ul class=\"gifts form-group\" id=\"gift-fields-list\"
                  data-prototype=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->source); })()), "gifts", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"
                  data-widget-tags=\"";
        // line 101
        echo twig_escape_filter($this->env, "<li></li>");
        echo "\">
                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), "gifts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["giftField"]) {
            // line 103
            echo "                  <li>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["giftField"], 'widget');
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['giftField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "              </ul>
            </div>


            <div class=\"col-md-6\">
              <div class=\"form-group\">
                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->source); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        // line 116
        echo "
                <p class=\"help-block text-danger\">";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->source); })()), "title", array()), 'errors');
        echo "</p>
              </div>
              <div class=\"form-group\">
                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        // line 125
        echo "
                <p class=\"help-block text-danger\">";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "description", array()), 'errors');
        echo "</p>
              </div>

            </div>
              <div class=\"clearfix\"></div>
            </div>

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 136, $this->source); })()), "Save", array()), 'widget', array("attr" => array("class" => "btn btn-primary  btn-block btn-xl text-uppercase")));
        // line 140
        echo "
              </div>
            </div>
          </div>
        </div>
        ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
        echo "

      </div>
    </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 153
        echo "  <!-- Footer -->
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4\">
          <span class=\"copyright\">Copyright &copy; Wish a gift 2018</span>
        </div>
        <div class=\"col-md-4\">
          <ul class=\"list-inline social-buttons\">
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <i class=\"fa fa-twitter\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <i class=\"fa fa-facebook\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <i class=\"fa fa-linkedin\"></i>
              </a>
            </li>
          </ul>
        </div>
        ";
        // line 180
        echo "        ";
        // line 181
        echo "        ";
        // line 182
        echo "        ";
        // line 183
        echo "        ";
        // line 184
        echo "        ";
        // line 185
        echo "        ";
        // line 186
        echo "        ";
        // line 187
        echo "        ";
        // line 188
        echo "        ";
        // line 189
        echo "      </div>
    </div>
  </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "create/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 189,  353 => 188,  351 => 187,  349 => 186,  347 => 185,  345 => 184,  343 => 183,  341 => 182,  339 => 181,  337 => 180,  309 => 153,  300 => 152,  284 => 145,  277 => 140,  275 => 136,  262 => 126,  259 => 125,  257 => 120,  251 => 117,  248 => 116,  246 => 111,  238 => 105,  229 => 103,  225 => 102,  221 => 101,  217 => 100,  205 => 91,  202 => 90,  200 => 85,  194 => 82,  191 => 81,  189 => 76,  183 => 72,  181 => 66,  166 => 55,  157 => 54,  146 => 51,  144 => 50,  100 => 9,  91 => 8,  78 => 5,  69 => 4,  51 => 3,  41 => 1,  39 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme form 'form/form_errors.html.twig' %}
{% block title %}{{ parent() }}{% endblock %}
{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script>
      let \$collectionHolder;

                // setup an \"add a gift\" link
                    let \$addTagLink = \$('<a href=\"#\" class=\"btn btn-primary btn-xl btn-block add_gift_link\">Add a Gift</a><br />');
            let \$newLinkLi = \$('<li></li>').append(\$addTagLink);

      \$(document).ready(function () {
          console.log(\"All resources finished loading\");

          jQuery('.add-another-collection-widget').click(function (e) {
              e.preventDefault();
              let list = jQuery(jQuery(this).attr('data-list'));
              // Try to find the counter of the list
              let counter = list.data('widget-counter') | list.children().length;
              // If the counter does not exist, use the length of the list
              if (!counter) {
                  counter = list.children().length;
              }

              // grab the prototype template
              let newWidget = list.attr('data-prototype');
              // replace the \"__name__\" used in the id and name of the prototype
              // with a number that's unique to your gifts
              // end name attribute looks like name=\"contact[gifts][2]\"
              newWidget = newWidget.replace(/__name__/g, counter);
              // Increase the counter
              counter++;
              // And store it, the length cannot be used if deleting widgets is allowed
              list.data('widget-counter', counter);

              // create a new list element and add it to the list
              let newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
              newElem.prependTo(list);


          });
      });
      {# in case of moving js in separate file #}
      {#<script src=\"add-collection-widget.js\"></script>#}
  </script>
{% endblock %}

{% block body %}
  {{ include('navigation/navigation.html.twig') }}
  <section id=\"contact\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
          <h2 class=\"section-heading text-uppercase\">Create your Gift List</h2>
          <h3 class=\"section-subheading text-muted\"></h3>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-12\">
          {{ form_start(form, {
            'method': 'POST',
            'attr': {
              'id': 'createForm',
              'action': 'create',
              'novalidate': 'novalidate'
            }}) }}
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"form-group\">
                {{ form_widget(form.firstName, {
                  'attr': {
                    'class': 'form-control',
                    'placeholder': 'Your Name'
                  }})
                }}
                <p class=\"help-block text-danger\">{{ form_errors(form.firstName) }}</p>
              </div>
              <div class=\"form-group\">
                {{ form_widget(form.email, {
                  'attr': {
                    'class': 'form-control',
                    'placeholder': 'Your Email'
                  }})
                }}
                <p class=\"help-block text-danger\">{{ form_errors(form.email) }}</p>
              </div>

              <div class=\"form-group\">
                <a href=\"#\" class=\"btn btn-primary btn-xl btn-block add-another-collection-widget\"
                   data-list=\"#gift-fields-list\">Add a Gift
                </a>
              </div>
              <ul class=\"gifts form-group\" id=\"gift-fields-list\"
                  data-prototype=\"{{ form_widget(form.gifts.vars.prototype)|e }}\"
                  data-widget-tags=\"{{ '<li></li>'|e }}\">
                {% for giftField in form.gifts %}
                  <li>{{ form_widget(giftField) }}</li>
                {% endfor %}
              </ul>
            </div>


            <div class=\"col-md-6\">
              <div class=\"form-group\">
                {{ form_widget(form.title, {
                  'attr': {
                    'class': 'form-control',
                    'placeholder': 'Title'
                  }})
                }}
                <p class=\"help-block text-danger\">{{ form_errors(form.title) }}</p>
              </div>
              <div class=\"form-group\">
                {{ form_widget(form.description, {
                  'attr': {
                    'class': 'form-control',
                    'placeholder': 'Description'
                  }})
                }}
                <p class=\"help-block text-danger\">{{ form_errors(form.description) }}</p>
              </div>

            </div>
              <div class=\"clearfix\"></div>
            </div>

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                {{ form_widget(form.Save, {
                  'attr': {
                    'class': 'btn btn-primary  btn-block btn-xl text-uppercase',
                  }})
                }}
              </div>
            </div>
          </div>
        </div>
        {{ form_end(form) }}

      </div>
    </div>
  </section>
{% endblock %}

{% block footer %}
  <!-- Footer -->
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4\">
          <span class=\"copyright\">Copyright &copy; Wish a gift 2018</span>
        </div>
        <div class=\"col-md-4\">
          <ul class=\"list-inline social-buttons\">
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <i class=\"fa fa-twitter\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <i class=\"fa fa-facebook\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <i class=\"fa fa-linkedin\"></i>
              </a>
            </li>
          </ul>
        </div>
        {#<div class=\"col-md-4\">#}
        {#<ul class=\"list-inline quicklinks\">#}
        {#<li class=\"list-inline-item\">#}
        {#<a href=\"#\">Privacy Policy</a>#}
        {#</li>#}
        {#<li class=\"list-inline-item\">#}
        {#<a href=\"#\">Terms of Use</a>#}
        {#</li>#}
        {#</ul>#}
        {#</div>#}
      </div>
    </div>
  </footer>
{% endblock %}", "create/index.html.twig", "/code/templates/create/index.html.twig");
    }
}
