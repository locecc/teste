<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f610cfabb640bae42111b9a82a5677afc4347ea4b560680cff3b0253984a2b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f610cfabb640bae42111b9a82a5677afc4347ea4b560680cff3b0253984a2b9f->enter($__internal_f610cfabb640bae42111b9a82a5677afc4347ea4b560680cff3b0253984a2b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5cecc66eb8447adcc77bcfa65821e113fbfecb8b42acdcb7b4d6689f43576221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cecc66eb8447adcc77bcfa65821e113fbfecb8b42acdcb7b4d6689f43576221->enter($__internal_5cecc66eb8447adcc77bcfa65821e113fbfecb8b42acdcb7b4d6689f43576221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f610cfabb640bae42111b9a82a5677afc4347ea4b560680cff3b0253984a2b9f->leave($__internal_f610cfabb640bae42111b9a82a5677afc4347ea4b560680cff3b0253984a2b9f_prof);

        
        $__internal_5cecc66eb8447adcc77bcfa65821e113fbfecb8b42acdcb7b4d6689f43576221->leave($__internal_5cecc66eb8447adcc77bcfa65821e113fbfecb8b42acdcb7b4d6689f43576221_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f342d79df0381f3479ac5a4baa3e867e8ad9e7d532881546ce6b05e41536b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f342d79df0381f3479ac5a4baa3e867e8ad9e7d532881546ce6b05e41536b4d->enter($__internal_3f342d79df0381f3479ac5a4baa3e867e8ad9e7d532881546ce6b05e41536b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab665990ecdaa42fd89cde92753c2cf00c9a9e97c26b14492c9b9f156361c2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab665990ecdaa42fd89cde92753c2cf00c9a9e97c26b14492c9b9f156361c2a2->enter($__internal_ab665990ecdaa42fd89cde92753c2cf00c9a9e97c26b14492c9b9f156361c2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ab665990ecdaa42fd89cde92753c2cf00c9a9e97c26b14492c9b9f156361c2a2->leave($__internal_ab665990ecdaa42fd89cde92753c2cf00c9a9e97c26b14492c9b9f156361c2a2_prof);

        
        $__internal_3f342d79df0381f3479ac5a4baa3e867e8ad9e7d532881546ce6b05e41536b4d->leave($__internal_3f342d79df0381f3479ac5a4baa3e867e8ad9e7d532881546ce6b05e41536b4d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1ef3e5c3bf4d03e0250f502588152ac8d25b6f16617b5540425c7bb06f9bd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ef3e5c3bf4d03e0250f502588152ac8d25b6f16617b5540425c7bb06f9bd67->enter($__internal_a1ef3e5c3bf4d03e0250f502588152ac8d25b6f16617b5540425c7bb06f9bd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b2e9ee8de1a4bd30f6e11578fb3c15902199bf815922d22f736b819923e1fb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e9ee8de1a4bd30f6e11578fb3c15902199bf815922d22f736b819923e1fb6a->enter($__internal_b2e9ee8de1a4bd30f6e11578fb3c15902199bf815922d22f736b819923e1fb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b2e9ee8de1a4bd30f6e11578fb3c15902199bf815922d22f736b819923e1fb6a->leave($__internal_b2e9ee8de1a4bd30f6e11578fb3c15902199bf815922d22f736b819923e1fb6a_prof);

        
        $__internal_a1ef3e5c3bf4d03e0250f502588152ac8d25b6f16617b5540425c7bb06f9bd67->leave($__internal_a1ef3e5c3bf4d03e0250f502588152ac8d25b6f16617b5540425c7bb06f9bd67_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6992b2d4c24fda8d1597e9e837383b87c882092c60a3d52dac85b3c69b1df193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6992b2d4c24fda8d1597e9e837383b87c882092c60a3d52dac85b3c69b1df193->enter($__internal_6992b2d4c24fda8d1597e9e837383b87c882092c60a3d52dac85b3c69b1df193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a212b7a0e8c873ba4cbd98a0125123373770ddd7a070e031c05c109d3c6cb318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a212b7a0e8c873ba4cbd98a0125123373770ddd7a070e031c05c109d3c6cb318->enter($__internal_a212b7a0e8c873ba4cbd98a0125123373770ddd7a070e031c05c109d3c6cb318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a212b7a0e8c873ba4cbd98a0125123373770ddd7a070e031c05c109d3c6cb318->leave($__internal_a212b7a0e8c873ba4cbd98a0125123373770ddd7a070e031c05c109d3c6cb318_prof);

        
        $__internal_6992b2d4c24fda8d1597e9e837383b87c882092c60a3d52dac85b3c69b1df193->leave($__internal_6992b2d4c24fda8d1597e9e837383b87c882092c60a3d52dac85b3c69b1df193_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/aa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
