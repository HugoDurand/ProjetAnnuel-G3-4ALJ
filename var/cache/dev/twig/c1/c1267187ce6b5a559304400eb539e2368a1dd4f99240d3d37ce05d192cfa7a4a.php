<?php

/* AppBundle:Annonce:show.html.twig */
class __TwigTemplate_1140f8221b54e42515f342730f06805a71eea579d1e7b942da68a5d69c63407a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Annonce:show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Annonce:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Annonce:show.html.twig"));

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

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 6
            echo "
        <section class=\"section_article_detail\">
            <div class=\"article_bg\">
                <div class=\"img_overlay\"></div>
                <div style=\"background-image: url('";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($context["annonce"], "photo", array()))), "html", null, true);
            echo "')\" class=\"bg_img\"></div>
            </div>
            <div class=\"article_content\">
                <div class=\"content_infos\">
                    <h1>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</h1>
                    <div class=\"article_like\"></div>
                </div>
                <a class=\"navback\" href=\"/\">Mode - Femme - Baskets</a>
                <div class=\"content_further\">
                    <div class=\"gallery\">
                        <div style=\"background-image: url('";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($context["annonce"], "photo", array()))), "html", null, true);
            echo "')\" class=\"selectedimage\"></div>
                    </div>
                    <div class=\"article_description\">
                        <p class=\"article_date\"> ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "date", array())), "html", null, true);
            echo " </p>
                        <p class=\"article_descr\"> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo " </p>
                        <div class=\"divider\"></div>
                        <div class=\"user_profile_detail\">
                            <div class=\"seller\">
                                <div style=\"background-image: url('";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . ($context["userPhoto"] ?? $this->getContext($context, "userPhoto")))), "html", null, true);
            echo "')\" class=\"user_image\"></div>
                                <h2 class=\"user_name\">";
            // line 29
            echo twig_escape_filter($this->env, ($context["emailNom"] ?? $this->getContext($context, "emailNom")), "html", null, true);
            echo "</h2>
                            </div>
                            <p class=\"user_mail\">";
            // line 31
            echo twig_escape_filter($this->env, ($context["emailUser"] ?? $this->getContext($context, "emailUser")), "html", null, true);
            echo "</p>
                            <p class=\"user_phone\"> 00 00 00 00 00</p>
                        </div>
                    </div>
                </div>
                <div class=\"map_divider\"></div>
                <div class=\"article_map\"></div>
            </div>
        </section>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Annonce:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  105 => 31,  100 => 29,  96 => 28,  89 => 24,  85 => 23,  79 => 20,  70 => 14,  63 => 10,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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


    {% for annonce in annonces %}

        <section class=\"section_article_detail\">
            <div class=\"article_bg\">
                <div class=\"img_overlay\"></div>
                <div style=\"background-image: url('{{ asset('img/' ~ annonce.photo) }}')\" class=\"bg_img\"></div>
            </div>
            <div class=\"article_content\">
                <div class=\"content_infos\">
                    <h1>{{ annonce.titre }}</h1>
                    <div class=\"article_like\"></div>
                </div>
                <a class=\"navback\" href=\"/\">Mode - Femme - Baskets</a>
                <div class=\"content_further\">
                    <div class=\"gallery\">
                        <div style=\"background-image: url('{{ asset('img/' ~ annonce.photo) }}')\" class=\"selectedimage\"></div>
                    </div>
                    <div class=\"article_description\">
                        <p class=\"article_date\"> {{ annonce.date|date }} </p>
                        <p class=\"article_descr\"> {{ annonce.description }} </p>
                        <div class=\"divider\"></div>
                        <div class=\"user_profile_detail\">
                            <div class=\"seller\">
                                <div style=\"background-image: url('{{ asset('img/' ~ userPhoto) }}')\" class=\"user_image\"></div>
                                <h2 class=\"user_name\">{{ emailNom }}</h2>
                            </div>
                            <p class=\"user_mail\">{{ emailUser }}</p>
                            <p class=\"user_phone\"> 00 00 00 00 00</p>
                        </div>
                    </div>
                </div>
                <div class=\"map_divider\"></div>
                <div class=\"article_map\"></div>
            </div>
        </section>

    {% endfor %}

{% endblock %}", "AppBundle:Annonce:show.html.twig", "/Users/hugo/Desktop/Cours_ESGI/Projet_Annuel/ProjetAnnuel-G3-4ALJ/src/AppBundle/Resources/views/Annonce/show.html.twig");
    }
}
