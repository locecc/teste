<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_44c18749a4b5a511928cdc0a57d77475b944e2299baa01a1a1822501626d3507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c18749a4b5a511928cdc0a57d77475b944e2299baa01a1a1822501626d3507->enter($__internal_44c18749a4b5a511928cdc0a57d77475b944e2299baa01a1a1822501626d3507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_54766e04ef75e1a78a96c47f4d44d9301e8017aa9434cac1b1899d24781a1dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54766e04ef75e1a78a96c47f4d44d9301e8017aa9434cac1b1899d24781a1dbf->enter($__internal_54766e04ef75e1a78a96c47f4d44d9301e8017aa9434cac1b1899d24781a1dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c18749a4b5a511928cdc0a57d77475b944e2299baa01a1a1822501626d3507->leave($__internal_44c18749a4b5a511928cdc0a57d77475b944e2299baa01a1a1822501626d3507_prof);

        
        $__internal_54766e04ef75e1a78a96c47f4d44d9301e8017aa9434cac1b1899d24781a1dbf->leave($__internal_54766e04ef75e1a78a96c47f4d44d9301e8017aa9434cac1b1899d24781a1dbf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3da73fcd14232d72391780e3a3e5a0addc744bb61c7006671a1256d9fa6afeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3da73fcd14232d72391780e3a3e5a0addc744bb61c7006671a1256d9fa6afeb->enter($__internal_a3da73fcd14232d72391780e3a3e5a0addc744bb61c7006671a1256d9fa6afeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50ee6fe3a38635255a66e43d5f4fc2beef86c2e5b0e3e33ee4a448336ece96c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ee6fe3a38635255a66e43d5f4fc2beef86c2e5b0e3e33ee4a448336ece96c9->enter($__internal_50ee6fe3a38635255a66e43d5f4fc2beef86c2e5b0e3e33ee4a448336ece96c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50ee6fe3a38635255a66e43d5f4fc2beef86c2e5b0e3e33ee4a448336ece96c9->leave($__internal_50ee6fe3a38635255a66e43d5f4fc2beef86c2e5b0e3e33ee4a448336ece96c9_prof);

        
        $__internal_a3da73fcd14232d72391780e3a3e5a0addc744bb61c7006671a1256d9fa6afeb->leave($__internal_a3da73fcd14232d72391780e3a3e5a0addc744bb61c7006671a1256d9fa6afeb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8a52771efbe108385c60e96ff04bfb7bc282a452e0c63a84bd74b452c3920d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a52771efbe108385c60e96ff04bfb7bc282a452e0c63a84bd74b452c3920d2->enter($__internal_a8a52771efbe108385c60e96ff04bfb7bc282a452e0c63a84bd74b452c3920d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ae7fad4dd3f257f56bfe9ef0d13c6114c65059d0d28c31aa6ac19bcbc977399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae7fad4dd3f257f56bfe9ef0d13c6114c65059d0d28c31aa6ac19bcbc977399->enter($__internal_7ae7fad4dd3f257f56bfe9ef0d13c6114c65059d0d28c31aa6ac19bcbc977399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ae7fad4dd3f257f56bfe9ef0d13c6114c65059d0d28c31aa6ac19bcbc977399->leave($__internal_7ae7fad4dd3f257f56bfe9ef0d13c6114c65059d0d28c31aa6ac19bcbc977399_prof);

        
        $__internal_a8a52771efbe108385c60e96ff04bfb7bc282a452e0c63a84bd74b452c3920d2->leave($__internal_a8a52771efbe108385c60e96ff04bfb7bc282a452e0c63a84bd74b452c3920d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_449b76bebe8454e8b5fddcf86e340b8e984eae515e48f383e906d942c1ffbdb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449b76bebe8454e8b5fddcf86e340b8e984eae515e48f383e906d942c1ffbdb5->enter($__internal_449b76bebe8454e8b5fddcf86e340b8e984eae515e48f383e906d942c1ffbdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d0c26887cfce8ccd36e45dcae5708e4e7a6cbf7c239eab7fcbf0b412ebb3701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0c26887cfce8ccd36e45dcae5708e4e7a6cbf7c239eab7fcbf0b412ebb3701->enter($__internal_0d0c26887cfce8ccd36e45dcae5708e4e7a6cbf7c239eab7fcbf0b412ebb3701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d0c26887cfce8ccd36e45dcae5708e4e7a6cbf7c239eab7fcbf0b412ebb3701->leave($__internal_0d0c26887cfce8ccd36e45dcae5708e4e7a6cbf7c239eab7fcbf0b412ebb3701_prof);

        
        $__internal_449b76bebe8454e8b5fddcf86e340b8e984eae515e48f383e906d942c1ffbdb5->leave($__internal_449b76bebe8454e8b5fddcf86e340b8e984eae515e48f383e906d942c1ffbdb5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/aa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
