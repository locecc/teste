<?php

/* EcommerceBundle:Default:index.html.twig */
class __TwigTemplate_0fdb371c8132c15c5ccb739cdcf4d30a511d3064fe59623e9b220389d1ac4e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aabd38ad9f77bb496d4b8a034ed923cb8794597233948abf9a276cc551ce69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aabd38ad9f77bb496d4b8a034ed923cb8794597233948abf9a276cc551ce69f->enter($__internal_7aabd38ad9f77bb496d4b8a034ed923cb8794597233948abf9a276cc551ce69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:index.html.twig"));

        $__internal_8e0737d98a6961e6d1495af28e3ec5484f4a1651e1a57ffde2b82202710a5a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0737d98a6961e6d1495af28e3ec5484f4a1651e1a57ffde2b82202710a5a8c->enter($__internal_8e0737d98a6961e6d1495af28e3ec5484f4a1651e1a57ffde2b82202710a5a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aabd38ad9f77bb496d4b8a034ed923cb8794597233948abf9a276cc551ce69f->leave($__internal_7aabd38ad9f77bb496d4b8a034ed923cb8794597233948abf9a276cc551ce69f_prof);

        
        $__internal_8e0737d98a6961e6d1495af28e3ec5484f4a1651e1a57ffde2b82202710a5a8c->leave($__internal_8e0737d98a6961e6d1495af28e3ec5484f4a1651e1a57ffde2b82202710a5a8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e1d365d08df63ffd7dca8235782b36307ce249139f610e123dff9d2a7899c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1d365d08df63ffd7dca8235782b36307ce249139f610e123dff9d2a7899c9e->enter($__internal_4e1d365d08df63ffd7dca8235782b36307ce249139f610e123dff9d2a7899c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a396ec1ade0dc93eccc7a63e8e37d635aa16074a78c5c86cde962b52a8e311b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a396ec1ade0dc93eccc7a63e8e37d635aa16074a78c5c86cde962b52a8e311b9->enter($__internal_a396ec1ade0dc93eccc7a63e8e37d635aa16074a78c5c86cde962b52a8e311b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:index.html.twig", 7)->display($context);
        // line 8
        echo "        <div class=\"span9\">

            <ul class=\"thumbnails\">
                
               
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            echo "               
                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>Thumbnail label</h4>
                            <p>100,00 €</p>
                            <a class=\"btn btn-primary\" href=\"produit.php\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </ul>

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

";
        
        $__internal_a396ec1ade0dc93eccc7a63e8e37d635aa16074a78c5c86cde962b52a8e311b9->leave($__internal_a396ec1ade0dc93eccc7a63e8e37d635aa16074a78c5c86cde962b52a8e311b9_prof);

        
        $__internal_4e1d365d08df63ffd7dca8235782b36307ce249139f610e123dff9d2a7899c9e->leave($__internal_4e1d365d08df63ffd7dca8235782b36307ce249139f610e123dff9d2a7899c9e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  67 => 14,  63 => 13,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">

        {% include '::modulesUsed/navigation.html.twig' %}
        <div class=\"span9\">

            <ul class=\"thumbnails\">
                
               
                {% for i in 0..10 %}
               
                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>Thumbnail label</h4>
                            <p>100,00 €</p>
                            <a class=\"btn btn-primary\" href=\"produit.php\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
                {% endfor %}
            </ul>

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

{% endblock %}
", "EcommerceBundle:Default:index.html.twig", "/opt/lampp/htdocs/aa/src/Ecommerce/EcommerceBundle/Resources/views/Default/index.html.twig");
    }
}
