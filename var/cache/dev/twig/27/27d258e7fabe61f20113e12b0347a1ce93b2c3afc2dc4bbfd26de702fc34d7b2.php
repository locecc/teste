<?php

/* EcommerceBundle:Default:Produits/Layout/produits.html.twig */
class __TwigTemplate_fdfb3087233fd26df2c3ef479d822e2cde62bc72d4adea47f56f6e37cc0f4249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:Produits/Layout/produits.html.twig", 1);
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
        $__internal_5456aea21b633083400a2cbf224ae95e2790852bdda780be8dedcb0e4dd0990a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5456aea21b633083400a2cbf224ae95e2790852bdda780be8dedcb0e4dd0990a->enter($__internal_5456aea21b633083400a2cbf224ae95e2790852bdda780be8dedcb0e4dd0990a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Produits/Layout/produits.html.twig"));

        $__internal_cc7c9d449f6925212ac7ba3921640f20bf79f86df450770e76d9896fe8968498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7c9d449f6925212ac7ba3921640f20bf79f86df450770e76d9896fe8968498->enter($__internal_cc7c9d449f6925212ac7ba3921640f20bf79f86df450770e76d9896fe8968498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Produits/Layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5456aea21b633083400a2cbf224ae95e2790852bdda780be8dedcb0e4dd0990a->leave($__internal_5456aea21b633083400a2cbf224ae95e2790852bdda780be8dedcb0e4dd0990a_prof);

        
        $__internal_cc7c9d449f6925212ac7ba3921640f20bf79f86df450770e76d9896fe8968498->leave($__internal_cc7c9d449f6925212ac7ba3921640f20bf79f86df450770e76d9896fe8968498_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d00fecbcdfefb89ad48fefa3a6bf54680a1b19adab1daaeb117efcf2f88f8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d00fecbcdfefb89ad48fefa3a6bf54680a1b19adab1daaeb117efcf2f88f8eb->enter($__internal_7d00fecbcdfefb89ad48fefa3a6bf54680a1b19adab1daaeb117efcf2f88f8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe1624dc98818814918ccf286b394884ebd440876d21f59bf2d0adf962eabba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1624dc98818814918ccf286b394884ebd440876d21f59bf2d0adf962eabba1->enter($__internal_fe1624dc98818814918ccf286b394884ebd440876d21f59bf2d0adf962eabba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
         ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:Produits/Layout/produits.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
        <div class=\"span9\">

            <ul class=\"thumbnails\">
                
               
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "               
                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>Thumbnail label</h4>
                            <p>100,00 €</p>
                            <a class=\"btn btn-primary\" href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
            echo "\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        
        $__internal_fe1624dc98818814918ccf286b394884ebd440876d21f59bf2d0adf962eabba1->leave($__internal_fe1624dc98818814918ccf286b394884ebd440876d21f59bf2d0adf962eabba1_prof);

        
        $__internal_7d00fecbcdfefb89ad48fefa3a6bf54680a1b19adab1daaeb117efcf2f88f8eb->leave($__internal_7d00fecbcdfefb89ad48fefa3a6bf54680a1b19adab1daaeb117efcf2f88f8eb_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produits/Layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  82 => 24,  78 => 23,  69 => 16,  65 => 15,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

        <div class=\"span3\">
         {% include '::modulesUsed/navigation.html.twig' %}
        </div>
        <div class=\"span9\">

            <ul class=\"thumbnails\">
                
               
                {% for i in 0..10 %}
               
                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>Thumbnail label</h4>
                            <p>100,00 €</p>
                            <a class=\"btn btn-primary\" href=\"{{path('presentation')}}\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"{{path('panier')}}\">Ajouter au panier</a>
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
", "EcommerceBundle:Default:Produits/Layout/produits.html.twig", "/opt/lampp/htdocs/aa/src/Ecommerce/EcommerceBundle/Resources/views/Default/Produits/Layout/produits.html.twig");
    }
}
