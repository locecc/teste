<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_b2445d89eb27875656904607a5899e3ab1ed28f4ebfc8628bf3e8926282a46ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2445d89eb27875656904607a5899e3ab1ed28f4ebfc8628bf3e8926282a46ad->enter($__internal_b2445d89eb27875656904607a5899e3ab1ed28f4ebfc8628bf3e8926282a46ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_27a64191acce5f0ce5c82be40ebfdc02b49e6ac9707115ed4c2f27d240623b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a64191acce5f0ce5c82be40ebfdc02b49e6ac9707115ed4c2f27d240623b70->enter($__internal_27a64191acce5f0ce5c82be40ebfdc02b49e6ac9707115ed4c2f27d240623b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <a class=\"brand\" href=\"index.php\">Administration</a>
            </div>
        </div>
    </div>
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2014 - DevAndClick</p>
            </div>
        </div>
</footer>\t
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "</body>
</html>
";
        
        $__internal_b2445d89eb27875656904607a5899e3ab1ed28f4ebfc8628bf3e8926282a46ad->leave($__internal_b2445d89eb27875656904607a5899e3ab1ed28f4ebfc8628bf3e8926282a46ad_prof);

        
        $__internal_27a64191acce5f0ce5c82be40ebfdc02b49e6ac9707115ed4c2f27d240623b70->leave($__internal_27a64191acce5f0ce5c82be40ebfdc02b49e6ac9707115ed4c2f27d240623b70_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5afb6c8cde82d13da0735bfacfbd5dedce4bf56a80a1a94de163bbaf50bcaa80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afb6c8cde82d13da0735bfacfbd5dedce4bf56a80a1a94de163bbaf50bcaa80->enter($__internal_5afb6c8cde82d13da0735bfacfbd5dedce4bf56a80a1a94de163bbaf50bcaa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a15812447d0e8f8be1dd4d61f29ce3f279753896f22ddbcddbb9f69b17933092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15812447d0e8f8be1dd4d61f29ce3f279753896f22ddbcddbb9f69b17933092->enter($__internal_a15812447d0e8f8be1dd4d61f29ce3f279753896f22ddbcddbb9f69b17933092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a15812447d0e8f8be1dd4d61f29ce3f279753896f22ddbcddbb9f69b17933092->leave($__internal_a15812447d0e8f8be1dd4d61f29ce3f279753896f22ddbcddbb9f69b17933092_prof);

        
        $__internal_5afb6c8cde82d13da0735bfacfbd5dedce4bf56a80a1a94de163bbaf50bcaa80->leave($__internal_5afb6c8cde82d13da0735bfacfbd5dedce4bf56a80a1a94de163bbaf50bcaa80_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b396f5e0d69916539f6ac3246b0891907dc3538ec89c9dec1032ad2509f70e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b396f5e0d69916539f6ac3246b0891907dc3538ec89c9dec1032ad2509f70e7d->enter($__internal_b396f5e0d69916539f6ac3246b0891907dc3538ec89c9dec1032ad2509f70e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_170b43d80a9963cdd327868b3bea4fa4cc278333e16f270d89b1c4304335c14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170b43d80a9963cdd327868b3bea4fa4cc278333e16f270d89b1c4304335c14d->enter($__internal_170b43d80a9963cdd327868b3bea4fa4cc278333e16f270d89b1c4304335c14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_170b43d80a9963cdd327868b3bea4fa4cc278333e16f270d89b1c4304335c14d->leave($__internal_170b43d80a9963cdd327868b3bea4fa4cc278333e16f270d89b1c4304335c14d_prof);

        
        $__internal_b396f5e0d69916539f6ac3246b0891907dc3538ec89c9dec1032ad2509f70e7d->leave($__internal_b396f5e0d69916539f6ac3246b0891907dc3538ec89c9dec1032ad2509f70e7d_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca7ee93e53777010842860729e425a1d9d6261bde46f0164b483a0195907b840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7ee93e53777010842860729e425a1d9d6261bde46f0164b483a0195907b840->enter($__internal_ca7ee93e53777010842860729e425a1d9d6261bde46f0164b483a0195907b840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_982ea1475990bfa47e9aae614a0bae77af6fe05fd5fa212d9c3bd41a3185a11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982ea1475990bfa47e9aae614a0bae77af6fe05fd5fa212d9c3bd41a3185a11f->enter($__internal_982ea1475990bfa47e9aae614a0bae77af6fe05fd5fa212d9c3bd41a3185a11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_982ea1475990bfa47e9aae614a0bae77af6fe05fd5fa212d9c3bd41a3185a11f->leave($__internal_982ea1475990bfa47e9aae614a0bae77af6fe05fd5fa212d9c3bd41a3185a11f_prof);

        
        $__internal_ca7ee93e53777010842860729e425a1d9d6261bde46f0164b483a0195907b840->leave($__internal_ca7ee93e53777010842860729e425a1d9d6261bde46f0164b483a0195907b840_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bda313da432cff044c7998700e9fd4d109a4af5dc3893cb112644361cda69043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda313da432cff044c7998700e9fd4d109a4af5dc3893cb112644361cda69043->enter($__internal_bda313da432cff044c7998700e9fd4d109a4af5dc3893cb112644361cda69043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d7d9e97befd4a2020e2db1435a90e2f97688285cdd8f09690c965949ba68eb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d9e97befd4a2020e2db1435a90e2f97688285cdd8f09690c965949ba68eb1f->enter($__internal_d7d9e97befd4a2020e2db1435a90e2f97688285cdd8f09690c965949ba68eb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d7d9e97befd4a2020e2db1435a90e2f97688285cdd8f09690c965949ba68eb1f->leave($__internal_d7d9e97befd4a2020e2db1435a90e2f97688285cdd8f09690c965949ba68eb1f_prof);

        
        $__internal_bda313da432cff044c7998700e9fd4d109a4af5dc3893cb112644361cda69043->leave($__internal_bda313da432cff044c7998700e9fd4d109a4af5dc3893cb112644361cda69043_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 38,  146 => 26,  129 => 10,  111 => 5,  99 => 39,  97 => 38,  93 => 37,  89 => 36,  78 => 27,  76 => 26,  57 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                <a class=\"brand\" href=\"index.php\">Administration</a>
            </div>
        </div>
    </div>
{% block body %}{% endblock %}

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2014 - DevAndClick</p>
            </div>
        </div>
</footer>\t
<script src=\"{{asset('js/jquery-1.10.0.min.js')}}\"></script>
<script src=\"{{asset('js/bootstrap.js')}}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/aa/app/Resources/views/base.html.twig");
    }
}
