<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_14e7e642581ada7104684cf0c88eb52f0c6142447d9fe538e1611bc06f0055a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04d3554fd5fec0cf2fb7055575b6cc94f3546c96122eca16966df421cc994b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d3554fd5fec0cf2fb7055575b6cc94f3546c96122eca16966df421cc994b31->enter($__internal_04d3554fd5fec0cf2fb7055575b6cc94f3546c96122eca16966df421cc994b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        $__internal_fbe1f416bc07f4f1bb8d83701578020f9399e13c07913db2b84efcacfb18f504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe1f416bc07f4f1bb8d83701578020f9399e13c07913db2b84efcacfb18f504->enter($__internal_fbe1f416bc07f4f1bb8d83701578020f9399e13c07913db2b84efcacfb18f504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">DevAndClick</a>
            <div class=\"nav-collapse collapse\">
                <form class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page", array("id" => 1));
        echo "\">CGV</a>
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page", array("id" => 2));
        echo "\">Mentions légales</a>
                </ul>
            </div> 

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2014 - DevAndClick</p>
            </div>
        </div>
    </div>
</footer>\t
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</body>
</html>
";
        
        $__internal_04d3554fd5fec0cf2fb7055575b6cc94f3546c96122eca16966df421cc994b31->leave($__internal_04d3554fd5fec0cf2fb7055575b6cc94f3546c96122eca16966df421cc994b31_prof);

        
        $__internal_fbe1f416bc07f4f1bb8d83701578020f9399e13c07913db2b84efcacfb18f504->leave($__internal_fbe1f416bc07f4f1bb8d83701578020f9399e13c07913db2b84efcacfb18f504_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1132f06225a7f9bbae008113eeb780d93843c1c1ff4dd3c02b55a6403751f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1132f06225a7f9bbae008113eeb780d93843c1c1ff4dd3c02b55a6403751f71->enter($__internal_d1132f06225a7f9bbae008113eeb780d93843c1c1ff4dd3c02b55a6403751f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a9752eaa1b5c84a2fa5a4f6d413e4f98bdfb10b30ba864a8577ce7db64d3921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9752eaa1b5c84a2fa5a4f6d413e4f98bdfb10b30ba864a8577ce7db64d3921->enter($__internal_9a9752eaa1b5c84a2fa5a4f6d413e4f98bdfb10b30ba864a8577ce7db64d3921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a9752eaa1b5c84a2fa5a4f6d413e4f98bdfb10b30ba864a8577ce7db64d3921->leave($__internal_9a9752eaa1b5c84a2fa5a4f6d413e4f98bdfb10b30ba864a8577ce7db64d3921_prof);

        
        $__internal_d1132f06225a7f9bbae008113eeb780d93843c1c1ff4dd3c02b55a6403751f71->leave($__internal_d1132f06225a7f9bbae008113eeb780d93843c1c1ff4dd3c02b55a6403751f71_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c18aa202f5ac39fae02d1ef780cfa19a46672f3e120df489c16b3c3cd55cb210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18aa202f5ac39fae02d1ef780cfa19a46672f3e120df489c16b3c3cd55cb210->enter($__internal_c18aa202f5ac39fae02d1ef780cfa19a46672f3e120df489c16b3c3cd55cb210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d6925b50b591739ff513f279314cea22825f210455625c33a5c5f16cbb81c9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6925b50b591739ff513f279314cea22825f210455625c33a5c5f16cbb81c9fa->enter($__internal_d6925b50b591739ff513f279314cea22825f210455625c33a5c5f16cbb81c9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6925b50b591739ff513f279314cea22825f210455625c33a5c5f16cbb81c9fa->leave($__internal_d6925b50b591739ff513f279314cea22825f210455625c33a5c5f16cbb81c9fa_prof);

        
        $__internal_c18aa202f5ac39fae02d1ef780cfa19a46672f3e120df489c16b3c3cd55cb210->leave($__internal_c18aa202f5ac39fae02d1ef780cfa19a46672f3e120df489c16b3c3cd55cb210_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3adcd31f4c92f3654edbbbcaf997a430024e497c6a88b43c4d4ceff08851140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3adcd31f4c92f3654edbbbcaf997a430024e497c6a88b43c4d4ceff08851140->enter($__internal_a3adcd31f4c92f3654edbbbcaf997a430024e497c6a88b43c4d4ceff08851140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_369f9544eb2cfebfe464e0a63f132c40053ffd465f8210ddc27f845887ad471d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369f9544eb2cfebfe464e0a63f132c40053ffd465f8210ddc27f845887ad471d->enter($__internal_369f9544eb2cfebfe464e0a63f132c40053ffd465f8210ddc27f845887ad471d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_369f9544eb2cfebfe464e0a63f132c40053ffd465f8210ddc27f845887ad471d->leave($__internal_369f9544eb2cfebfe464e0a63f132c40053ffd465f8210ddc27f845887ad471d_prof);

        
        $__internal_a3adcd31f4c92f3654edbbbcaf997a430024e497c6a88b43c4d4ceff08851140->leave($__internal_a3adcd31f4c92f3654edbbbcaf997a430024e497c6a88b43c4d4ceff08851140_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64d8f08cbd3cc94109e712ac9271c99d5ed196176104a9ccc9a3e6a87a8a6c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d8f08cbd3cc94109e712ac9271c99d5ed196176104a9ccc9a3e6a87a8a6c34->enter($__internal_64d8f08cbd3cc94109e712ac9271c99d5ed196176104a9ccc9a3e6a87a8a6c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83ee67b45e80891709d0c3a7305b8c0f237b98809f5527a4c3fdbf0b9c9427bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ee67b45e80891709d0c3a7305b8c0f237b98809f5527a4c3fdbf0b9c9427bd->enter($__internal_83ee67b45e80891709d0c3a7305b8c0f237b98809f5527a4c3fdbf0b9c9427bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83ee67b45e80891709d0c3a7305b8c0f237b98809f5527a4c3fdbf0b9c9427bd->leave($__internal_83ee67b45e80891709d0c3a7305b8c0f237b98809f5527a4c3fdbf0b9c9427bd_prof);

        
        $__internal_64d8f08cbd3cc94109e712ac9271c99d5ed196176104a9ccc9a3e6a87a8a6c34->leave($__internal_64d8f08cbd3cc94109e712ac9271c99d5ed196176104a9ccc9a3e6a87a8a6c34_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 67,  184 => 32,  167 => 10,  149 => 5,  137 => 68,  135 => 67,  131 => 66,  127 => 65,  101 => 42,  97 => 41,  87 => 33,  85 => 32,  72 => 22,  57 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\" />
        <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-responsive.css')}}\" />
        <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.css')}}\" />
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"{{path('produits')}}\">DevAndClick</a>
            <div class=\"nav-collapse collapse\">
                <form class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% block body %}{% endblock %}


<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"{{path('page',{'id':1})}}\">CGV</a>
                    <li><a href=\"{{path('page',{'id':2})}}\">Mentions légales</a>
                </ul>
            </div> 

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2014 - DevAndClick</p>
            </div>
        </div>
    </div>
</footer>\t
<script src=\"{{asset('js/jquery-1.10.0.min.js')}}\"></script>
<script src=\"{{asset('js/bootstrap.js')}}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "::layout/layout.html.twig", "/opt/lampp/htdocs/aa/app/Resources/views/layout/layout.html.twig");
    }
}
