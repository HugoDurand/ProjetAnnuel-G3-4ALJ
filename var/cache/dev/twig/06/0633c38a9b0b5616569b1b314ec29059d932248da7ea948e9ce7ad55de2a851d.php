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


        <ul class=\"nav nav-tabs\">
            <li class=\"active\">
                <a  href=\"#1\" data-toggle=\"tab\">Mon Compte </a>
            </li>
            <li><a href=\"#2\" data-toggle=\"tab\"> Mes Annonces</a>
            </li>
        </ul>

        <div class=\"tab-content \">


            <div class=\"tab-pane active\" id=\"1\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 22
            echo "
                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Change Password</a>
                    <a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Edit</a>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>


            <div class=\"tab-pane\" id=\"2\">

                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 36
            echo "
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
            echo "
                    ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EditAnnonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("DeleteAnnonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Delete</a>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
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
        return array (  136 => 43,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  112 => 36,  108 => 35,  101 => 30,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  73 => 22,  69 => 21,  49 => 3,  40 => 2,  11 => 1,);
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


        <ul class=\"nav nav-tabs\">
            <li class=\"active\">
                <a  href=\"#1\" data-toggle=\"tab\">Mon Compte </a>
            </li>
            <li><a href=\"#2\" data-toggle=\"tab\"> Mes Annonces</a>
            </li>
        </ul>

        <div class=\"tab-content \">


            <div class=\"tab-pane active\" id=\"1\">
                {% for u in user %}

                    {{ u.id }}
                    {{ u.username }}
                    {{ u.email }}
                    <a href=\"{{ path('fos_user_change_password') }}\">Change Password</a>
                    <a href=\"{{ path('fos_user_profile_edit') }}\">Edit</a>

                {% endfor %}
            </div>


            <div class=\"tab-pane\" id=\"2\">

                {% for annonce in annonces %}

                    {{ annonce.id }}
                    {{ annonce.titre }}
                    <a href=\"{{ path('EditAnnonce',{'id': annonce.id}) }}\">Edit</a>
                    <a href=\"{{ path('DeleteAnnonce',{'id': annonce.id}) }}\">Delete</a>

                {% endfor %}

            </div>


        </div>


    </div>


{% endblock %}

", "AppBundle:Account:index.html.twig", "/Users/hugo/Desktop/Projet_Annuel/ProjetAnnuel-G3-4ALJ/src/AppBundle/Resources/views/Account/index.html.twig");
    }
}
