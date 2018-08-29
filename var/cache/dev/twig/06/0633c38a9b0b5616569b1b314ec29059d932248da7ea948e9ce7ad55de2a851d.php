<?php

/* AppBundle:Account:index.html.twig */
class __TwigTemplate_d90bb560235005479ff32339254abd5673ee50d8ac050d91274874463e3847fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Account:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Account:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Account:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


    <div id=\"exTab2\" class=\"container\">

            <div class=\"user_profile\">
                <div style=\"background-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "photo", array()))), "html", null, true);
        echo "')\" class=\"user_photo\"></div>
                <h1>Hello, ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " !</h1>
            </div>

        <div class=\"nav_content\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\">
                    <a class=\"user_account\"  href=\"#1\" data-toggle=\"tab\">Mon Compte </a>
                </li>
                <li><a class=\"user_annonces\" href=\"#2\" data-toggle=\"tab\"> Mes Annonces</a>
                </li>
            </ul>

            <div class=\"tab-content \">


                <div class=\"tab-pane active\" id=\"1\">
                        <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</p>
                        <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                        <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>

                        <a class=\"user_edit\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit</a>
                        <a class=\"change_password\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Change Password</a>
<br/><br/>

                </div>


                <div class=\"tab-pane\" id=\"2\">
                    <div class=\"account_pane\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 40
            echo "                        <div class=\"article_account\">
                            <div class=\"article_detail_account\">
                                <div class=\"article_background_account\" style=\"background-image:url(\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($context["annonce"], "photo", array()))), "html", null, true);
            echo "\")\"></div>
                            <h1>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</h1>
                            <div class=\"article_more_account\">
                                <p class=\"article_location_account\">location</p>
                                </ul>
                            </div>
                        </div>
                        <div class=\"article_links\">
                            <a class=\"article_edit_link\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EditAnnonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            <a class=\"article_edit_link\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("DeleteAnnonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                        </div>
                    </div>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
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
        return "AppBundle:Account:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 57,  134 => 51,  130 => 50,  120 => 43,  116 => 42,  112 => 40,  108 => 39,  97 => 31,  93 => 30,  88 => 28,  84 => 27,  80 => 26,  61 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}



    <div id=\"exTab2\" class=\"container\">

            <div class=\"user_profile\">
                <div style=\"background-image: url('{{ asset('img/' ~ user.photo) }}')\" class=\"user_photo\"></div>
                <h1>Hello, {{ user.username }} !</h1>
            </div>

        <div class=\"nav_content\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\">
                    <a class=\"user_account\"  href=\"#1\" data-toggle=\"tab\">Mon Compte </a>
                </li>
                <li><a class=\"user_annonces\" href=\"#2\" data-toggle=\"tab\"> Mes Annonces</a>
                </li>
            </ul>

            <div class=\"tab-content \">


                <div class=\"tab-pane active\" id=\"1\">
                        <p>{{ user.id }}</p>
                        <p>{{ user.username }}</p>
                        <p>{{ user.email }}</p>

                        <a class=\"user_edit\" href=\"{{ path('fos_user_profile_edit') }}\">Edit</a>
                        <a class=\"change_password\" href=\"{{ path('fos_user_change_password') }}\">Change Password</a>
<br/><br/>

                </div>


                <div class=\"tab-pane\" id=\"2\">
                    <div class=\"account_pane\">
                        {% for annonce in annonces %}
                        <div class=\"article_account\">
                            <div class=\"article_detail_account\">
                                <div class=\"article_background_account\" style=\"background-image:url(\"{{ asset('img/' ~ annonce.photo) }}\")\"></div>
                            <h1>{{ annonce.titre }}</h1>
                            <div class=\"article_more_account\">
                                <p class=\"article_location_account\">location</p>
                                </ul>
                            </div>
                        </div>
                        <div class=\"article_links\">
                            <a class=\"article_edit_link\" href=\"{{ path('EditAnnonce',{'id': annonce.id}) }}\">Edit</a>
                            <a class=\"article_edit_link\" href=\"{{ path('DeleteAnnonce',{'id': annonce.id}) }}\">Delete</a>
                        </div>
                    </div>


                    {% endfor %}

                </div>


            </div>

        </div>


    </div>


{% endblock %}

", "AppBundle:Account:index.html.twig", "/Users/hugo/Desktop/Cours_ESGI/Projet_Annuel/ProjetAnnuel-G3-4ALJ/src/AppBundle/Resources/views/Account/index.html.twig");
    }
}
