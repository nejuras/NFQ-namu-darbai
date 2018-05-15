<?php

/* giftlist/admin.html.twig */
class __TwigTemplate_cec739de86998f9ecd82db9fa5c563002886d29fa13a74c56d668c2a23fb6ca3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "giftlist/admin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftlist/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftlist/admin.html.twig"));

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
    <script>
        let \$collectionHolder;

        // setup an \"add a gift\" link
        let \$addTagLink = \$('<a href=\"#\" class=\"btn btn-xl bg-dark add_email_link\">Add An Email</a><br />');
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
        // line 49
        echo "        ";
        // line 50
        echo "    </script>
    <script>
        \$(document).ready(function () {
            // \$(\"form\").submit(function (event) {
            //     event.preventDefault();
            // });

            // console.log(\"All resources finished loading\");
            //
            // let counter = 0;
            // add click handler to \"Add\" button
            // \$('#addButton').click(function () {
            //     addEmail(\$('.newEmail'), counter++, \$('#emailList'));
            // });
            //
            //
            // function addEmail(emailItem, counter, emailList) {
            //     console.log(emailItem, counter, emailList);
            // console.log(emailList, counter);
            //
            // const emailVal = emailItem.val().trim();
            //
            // if (!emailVal) {
            //     return;
            // }
            //
            // \$('div#emailList').append(`<div class=\"input-group mb-3\" id=\"emailItem\${counter}\">\\n` +
            //     `<input type=\"text\" class=\"form-control\" value=\"\${escapeHtml(emailVal)}\" />\\n` +
            //     '<div class=\"input-group-append\">\\n' +
            //     `<button type=\"button\" class=\"btn btn-xl bg-danger border-danger\" id=\"deleteButton\${counter}\">\\n` +
            //     '<i class=\"fa fa-times mr-2\"></i>\\n' +
            //     '</button>\\n' +
            //     '</div>\\n' +
            //     '</div>');
            //
            // console.log(`emailItem\${counter}`);
            //
            // emailItem.val('').focus();
            //
            // \$(`#deleteButton\${counter}`).click(function() {
            //     \$(`#emailItem\${counter}`).remove();
            // });
            //
            // }
            //
            // function escapeHtml(string) {
            //     return (string.replace(/&/g, \"&amp;\")
            //         .replace(/</g, \"&lt;\")
            //         .replace(/>/g, \"&gt;\")
            //         .replace(/\"/g, \"&quot;\")
            //         .replace(/'/g, \"&#039;\"));
            // }

            // deleteEmail = function deleteEmail(emailItem) {
            //   emailItem.remove(\$('#emailItem\${counter}'));
            // };

            \$('#copyToClipboard').click(function () {
                let copyLink = document.getElementById(\"emails_url\");
                copyLink.select();
                document.execCommand(\"copy\");
                alert(\"You just copied the link to the clipboard!\");
            })

        })

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 121
        echo "    ";
        echo twig_include($this->env, $context, "navigation/navigation.html.twig");
        echo "
    <br><br><br><br>
    <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading text-uppercase\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 127, $this->source); })()), "firstname", array()), "html", null, true);
        echo " Gift List</h2>
                    <h3 class=\"section-subheading text-muted\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 128, $this->source); })()), "email", array()), "html", null, true);
        echo "</h3>
                </div>
            </div>
            <div class=\"row text-center\">
                <div class=\"col-md-6 text-left\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"d-inline-block\">
                <span class=\"d-inline-block fa-stack fa-4x\">
                  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fa fa-birthday-cake fa-stack-1x fa-inverse\"></i>
                </span>
                            </div>
                            <div class=\"d-inline-block text-center data-title\">
                                <h4 class=\"service-heading\">";
        // line 142
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 142, $this->source); })()), "title", array())), "html", null, true);
        echo "</h4>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <p class=\"text-muted\">";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 146, $this->source); })()), "description", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 text-left\">
                    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 151, $this->source); })()), "gifts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gift"]) {
            // line 152
            echo "                        ";
            if ( !(null === $context["gift"])) {
                // line 153
                echo "                            <div class=\"col-md-12\">
                                <div class=\"d-inline-block fa-stack fa-4x\">
                                    <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                                    <i class=\"fa fa-gift fa-stack-1x fa-inverse\"></i>
                                </div>
                                <div class=\"d-inline-block\">
                                    ";
                // line 160
                echo "                                    <p class=\"text-muted\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "title", array())), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        ";
            }
            // line 164
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gift'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                </div>
            </div>
            <div class=\"col-lg-12 text-center\">
                <button type=\"submit\" class=\"btn btn-block btn-xl bg-dark border-dark text-uppercase\">Edit</button>
                ";
        // line 170
        echo "                <button type=\"button\" class=\"btn btn-block btn-xl text-uppercase\" data-toggle=\"modal\"
                        data-target=\"#modal\">
                    Share with Friends
                </button>
            </div>
        </div>
    </section>
    <div class=\"footer\">
        <div class=\"container-fluid\">

        </div>
    </div>

    ";
        // line 184
        echo "    <div class=\"portfolio-modal modal fade ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 184, $this->source); })()), "request", array()), "get", array(0 => "open_share"), "method")) {
            echo "modal-open";
        }
        echo "\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog p-5\">
            <div class=\"modal-content\">
                <button type=\"button\" class=\"btn btn-light close-modal\" data-dismiss=\"modal\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 mx-auto\">
                            <div class=\"modal-body\">
                                <h2 class=\"text-uppercase\">Share With Friends</h2>
                                ";
        // line 196
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->source); })()), 'form_start', array("method" => "POST", "attr" => array("novalidate" => "novalidate", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("giftlist-admin", array("uuidadmin" => twig_get_attribute($this->env, $this->source,         // line 200
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 200, $this->source); })()), "uuidAdmin", array()), "open_share" => true)))));
        // line 201
        echo "
                                ";
        // line 203
        echo "                                ";
        // line 204
        echo "                                    ";
        // line 205
        echo "                                    ";
        // line 206
        echo "                                    ";
        // line 207
        echo "                                ";
        // line 208
        echo "
                                <ul class=\"emails form-group\" id=\"email-fields-list\"
                                    datatprototype=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 210, $this->source); })()), "emails", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"
                                    data-widget-tags=\"";
        // line 211
        echo twig_escape_filter($this->env, "<li></li>");
        echo "\">
                                    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 212, $this->source); })()), "emails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
            // line 213
            echo "
                                        <li class=\"form-group\">
                                            <div class=\"input-group\">
                                                ";
            // line 216
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["emailField"], 'widget');
            echo "
                                            </div>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "                                </ul>
                                <div class=\"form-group\">
                                    <a href=\"#\"
                                       class=\"btn btn-xl btn-block bg-dark border-dark add-another-collection-widget\"
                                       data-list=\"#email-fields-list\">Add an Email
                                    </a>
                                </div>
                                <div class=\"input-group mb-3\">
                                    ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 228, $this->source); })()), "url", array()), 'widget', array("value" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("giftlist-user", array("uuiduser" => twig_get_attribute($this->env, $this->source,         // line 229
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 229, $this->source); })()), "uuid", array()))), "attr" => array("class" => "form-control")));
        // line 232
        echo "
                                    <div class=\"input-group-append\">
                                        <button type=\"button\" class=\"btn btn-xl bg-dark border-dark\"
                                                id=\"copyToClipboard\">Copy
                                        </button>
                                    </div>
                                </div>
                                ";
        // line 240
        echo "                                <div class=\"form-group\">
                                    ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 241, $this->source); })()), "send", array()), 'widget', array("attr" => array("class" => "btn btn-primary  btn-block btn-xl text-uppercase")));
        // line 246
        echo "
                                </div>
                                ";
        // line 248
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 248, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "giftlist/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 248,  416 => 246,  414 => 241,  411 => 240,  402 => 232,  400 => 229,  399 => 228,  389 => 220,  379 => 216,  374 => 213,  370 => 212,  366 => 211,  362 => 210,  358 => 208,  356 => 207,  354 => 206,  352 => 205,  350 => 204,  348 => 203,  345 => 201,  343 => 200,  342 => 196,  324 => 184,  309 => 170,  303 => 165,  297 => 164,  289 => 160,  281 => 153,  278 => 152,  274 => 151,  266 => 146,  259 => 142,  242 => 128,  238 => 127,  228 => 121,  219 => 120,  141 => 50,  139 => 49,  96 => 9,  87 => 8,  74 => 5,  65 => 4,  47 => 3,  15 => 1,);
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
    <script>
        let \$collectionHolder;

        // setup an \"add a gift\" link
        let \$addTagLink = \$('<a href=\"#\" class=\"btn btn-xl bg-dark add_email_link\">Add An Email</a><br />');
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
    <script>
        \$(document).ready(function () {
            // \$(\"form\").submit(function (event) {
            //     event.preventDefault();
            // });

            // console.log(\"All resources finished loading\");
            //
            // let counter = 0;
            // add click handler to \"Add\" button
            // \$('#addButton').click(function () {
            //     addEmail(\$('.newEmail'), counter++, \$('#emailList'));
            // });
            //
            //
            // function addEmail(emailItem, counter, emailList) {
            //     console.log(emailItem, counter, emailList);
            // console.log(emailList, counter);
            //
            // const emailVal = emailItem.val().trim();
            //
            // if (!emailVal) {
            //     return;
            // }
            //
            // \$('div#emailList').append(`<div class=\"input-group mb-3\" id=\"emailItem\${counter}\">\\n` +
            //     `<input type=\"text\" class=\"form-control\" value=\"\${escapeHtml(emailVal)}\" />\\n` +
            //     '<div class=\"input-group-append\">\\n' +
            //     `<button type=\"button\" class=\"btn btn-xl bg-danger border-danger\" id=\"deleteButton\${counter}\">\\n` +
            //     '<i class=\"fa fa-times mr-2\"></i>\\n' +
            //     '</button>\\n' +
            //     '</div>\\n' +
            //     '</div>');
            //
            // console.log(`emailItem\${counter}`);
            //
            // emailItem.val('').focus();
            //
            // \$(`#deleteButton\${counter}`).click(function() {
            //     \$(`#emailItem\${counter}`).remove();
            // });
            //
            // }
            //
            // function escapeHtml(string) {
            //     return (string.replace(/&/g, \"&amp;\")
            //         .replace(/</g, \"&lt;\")
            //         .replace(/>/g, \"&gt;\")
            //         .replace(/\"/g, \"&quot;\")
            //         .replace(/'/g, \"&#039;\"));
            // }

            // deleteEmail = function deleteEmail(emailItem) {
            //   emailItem.remove(\$('#emailItem\${counter}'));
            // };

            \$('#copyToClipboard').click(function () {
                let copyLink = document.getElementById(\"emails_url\");
                copyLink.select();
                document.execCommand(\"copy\");
                alert(\"You just copied the link to the clipboard!\");
            })

        })

    </script>

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
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"d-inline-block\">
                <span class=\"d-inline-block fa-stack fa-4x\">
                  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fa fa-birthday-cake fa-stack-1x fa-inverse\"></i>
                </span>
                            </div>
                            <div class=\"d-inline-block text-center data-title\">
                                <h4 class=\"service-heading\">{{ data.title|capitalize }}</h4>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <p class=\"text-muted\">{{ data.description }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 text-left\">
                    {% for gift in data.gifts %}
                        {% if gift is not null %}
                            <div class=\"col-md-12\">
                                <div class=\"d-inline-block fa-stack fa-4x\">
                                    <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                                    <i class=\"fa fa-gift fa-stack-1x fa-inverse\"></i>
                                </div>
                                <div class=\"d-inline-block\">
                                    {#<h4 class=\"service-heading\">Gifts</h4>#}
                                    <p class=\"text-muted\">{{ gift.title|capitalize }}</p>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-lg-12 text-center\">
                <button type=\"submit\" class=\"btn btn-block btn-xl bg-dark border-dark text-uppercase\">Edit</button>
                {# Modal Trigger #}
                <button type=\"button\" class=\"btn btn-block btn-xl text-uppercase\" data-toggle=\"modal\"
                        data-target=\"#modal\">
                    Share with Friends
                </button>
            </div>
        </div>
    </section>
    <div class=\"footer\">
        <div class=\"container-fluid\">

        </div>
    </div>

    {# Modal #}
    <div class=\"portfolio-modal modal fade {% if app.request.get('open_share') %}modal-open{% endif %}\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog p-5\">
            <div class=\"modal-content\">
                <button type=\"button\" class=\"btn btn-light close-modal\" data-dismiss=\"modal\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 mx-auto\">
                            <div class=\"modal-body\">
                                <h2 class=\"text-uppercase\">Share With Friends</h2>
                                {{ form_start(form, {
                                    'method': 'POST',
                                    'attr': {
                                        'novalidate': 'novalidate',
                                        'action': path('giftlist-admin', {'uuidadmin': data.uuidAdmin, 'open_share': true})
                                    }}) }}
                                {#<p class=\"item-intro text-muted\"></p>#}
                                {#<div class=\"form-group\">#}
                                    {#<textarea class=\"form-control\" title=\"description\" id=\"description\"#}
                                    {#rows=\"10\">{{ data.description }}</textarea>#}
                                    {#<p class=\"text-muted\">{{ data.description }}</p>#}
                                {#</div>#}

                                <ul class=\"emails form-group\" id=\"email-fields-list\"
                                    datatprototype=\"{{ form_widget(form.emails.vars.prototype)|e }}\"
                                    data-widget-tags=\"{{ '<li></li>'|e }}\">
                                    {% for emailField in form.emails %}

                                        <li class=\"form-group\">
                                            <div class=\"input-group\">
                                                {{ form_widget(emailField) }}
                                            </div>
                                        </li>
                                    {% endfor %}
                                </ul>
                                <div class=\"form-group\">
                                    <a href=\"#\"
                                       class=\"btn btn-xl btn-block bg-dark border-dark add-another-collection-widget\"
                                       data-list=\"#email-fields-list\">Add an Email
                                    </a>
                                </div>
                                <div class=\"input-group mb-3\">
                                    {{ form_widget(form.url, {
                                        'value': url('giftlist-user', {'uuiduser': data.uuid}),
                                        'attr': {
                                            'class': 'form-control'
                                        }}) }}
                                    <div class=\"input-group-append\">
                                        <button type=\"button\" class=\"btn btn-xl bg-dark border-dark\"
                                                id=\"copyToClipboard\">Copy
                                        </button>
                                    </div>
                                </div>
                                {#onclick=\"copyToClipboard('#emails_url')\"#}
                                <div class=\"form-group\">
                                    {{ form_widget(form.send, {
                                        'attr': {
                                            'class': 'btn btn-primary  btn-block btn-xl text-uppercase',
                                        }
                                    })
                                    }}
                                </div>
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "giftlist/admin.html.twig", "/code/templates/giftlist/admin.html.twig");
    }
}
