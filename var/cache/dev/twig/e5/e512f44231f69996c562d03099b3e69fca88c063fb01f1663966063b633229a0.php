<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_40da612fa6e9d7cd12c2524ff3e8f0b833ce251e233bf0d0245329602ead9a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>

<section class=\"form_register\">
    <h1>Inscrivez-vous à Troc !</h1>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input class=\"register_button\" type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</section>


<style>
    h1{
        font-size: 36px;
        font-weight: 800;
        width: 420px;
        margin-bottom: 50px;
    }
    .form_register{
        display: flex !important;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        width: fit-content;
        margin: 0 auto;
    }

    input {
        border-bottom: 1px solid #979797;
        border-left: none;
        border-right: none;
        border-top: none;
        width: 420px;
        outline: none;
        font-size: 24px !important;
        color: #2D2C2D;
        font-weight: 800;
        margin-bottom: 30px !important;
    }

    label{
        display: block;
        color: #B5B5B5;
        font-size: 18px;
    }

    .register_button{
        width: 180px;
        height: 50px;
        background-color: #FF8790;
        color: white;
        box-shadow: 0px 2px 35px 0px rgba(255, 135, 144, 0.4);
        border: none;
        border-radius: 2px;
        font-weight: 400;
        outline: none;
        cursor: pointer;
        font-size: inherit!important;
    }
</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  47 => 13,  42 => 11,  38 => 10,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>

<section class=\"form_register\">
    <h1>Inscrivez-vous à Troc !</h1>
    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input class=\"register_button\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}
</section>


<style>
    h1{
        font-size: 36px;
        font-weight: 800;
        width: 420px;
        margin-bottom: 50px;
    }
    .form_register{
        display: flex !important;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        width: fit-content;
        margin: 0 auto;
    }

    input {
        border-bottom: 1px solid #979797;
        border-left: none;
        border-right: none;
        border-top: none;
        width: 420px;
        outline: none;
        font-size: 24px !important;
        color: #2D2C2D;
        font-weight: 800;
        margin-bottom: 30px !important;
    }

    label{
        display: block;
        color: #B5B5B5;
        font-size: 18px;
    }

    .register_button{
        width: 180px;
        height: 50px;
        background-color: #FF8790;
        color: white;
        box-shadow: 0px 2px 35px 0px rgba(255, 135, 144, 0.4);
        border: none;
        border-radius: 2px;
        font-weight: 400;
        outline: none;
        cursor: pointer;
        font-size: inherit!important;
    }
</style>", "@FOSUser/Registration/register_content.html.twig", "/Users/hugo/Desktop/Projet_Annuel/ProjetAnnuel-G3-4ALJ/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
