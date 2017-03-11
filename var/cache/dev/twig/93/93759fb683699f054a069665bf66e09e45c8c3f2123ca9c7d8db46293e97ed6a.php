<?php

/* EcommerceBundle:Default:Panier/Layout/panier.html.twig */
class __TwigTemplate_7781bd798ba56b16eac14c5a518a479cb8669613e993e443458bb86171fb5edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:Panier/Layout/panier.html.twig", 1);
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
        $__internal_f245778ac1f31bc246b9c966573c8aa3eb3523e27d85eaa1444ad5f3c23948a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f245778ac1f31bc246b9c966573c8aa3eb3523e27d85eaa1444ad5f3c23948a6->enter($__internal_f245778ac1f31bc246b9c966573c8aa3eb3523e27d85eaa1444ad5f3c23948a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Panier/Layout/panier.html.twig"));

        $__internal_aaaf547e12d124f2b0cb97c3baaa6ec77c2818fdae57ead5d3f4ddee7a9b5e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaaf547e12d124f2b0cb97c3baaa6ec77c2818fdae57ead5d3f4ddee7a9b5e54->enter($__internal_aaaf547e12d124f2b0cb97c3baaa6ec77c2818fdae57ead5d3f4ddee7a9b5e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Panier/Layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f245778ac1f31bc246b9c966573c8aa3eb3523e27d85eaa1444ad5f3c23948a6->leave($__internal_f245778ac1f31bc246b9c966573c8aa3eb3523e27d85eaa1444ad5f3c23948a6_prof);

        
        $__internal_aaaf547e12d124f2b0cb97c3baaa6ec77c2818fdae57ead5d3f4ddee7a9b5e54->leave($__internal_aaaf547e12d124f2b0cb97c3baaa6ec77c2818fdae57ead5d3f4ddee7a9b5e54_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f2951e0b9fa889b5144cc778a38c7e0c656180bbd403a9fabae5d7b104b886e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2951e0b9fa889b5144cc778a38c7e0c656180bbd403a9fabae5d7b104b886e->enter($__internal_0f2951e0b9fa889b5144cc778a38c7e0c656180bbd403a9fabae5d7b104b886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eed6e50b1ed3389822e2f81faa3de662f0c81db6656f98318e87bdc277a564ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed6e50b1ed3389822e2f81faa3de662f0c81db6656f98318e87bdc277a564ef->enter($__internal_eed6e50b1ed3389822e2f81faa3de662f0c81db6656f98318e87bdc277a564ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">
            
            <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:Panier/Layout/panier.html.twig", 9)->display($context);
        // line 10
        echo "            </div>
            <div class=\"span9\">
                <h2>Votre parnier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AB29837</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>

";
        
        $__internal_eed6e50b1ed3389822e2f81faa3de662f0c81db6656f98318e87bdc277a564ef->leave($__internal_eed6e50b1ed3389822e2f81faa3de662f0c81db6656f98318e87bdc277a564ef_prof);

        
        $__internal_0f2951e0b9fa889b5144cc778a38c7e0c656180bbd403a9fabae5d7b104b886e->leave($__internal_0f2951e0b9fa889b5144cc778a38c7e0c656180bbd403a9fabae5d7b104b886e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Panier/Layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 59,  57 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
                <h2>Votre parnier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AB29837</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"{{path('livraison')}}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>

{% endblock %}
", "EcommerceBundle:Default:Panier/Layout/panier.html.twig", "/opt/lampp/htdocs/aa/src/Ecommerce/EcommerceBundle/Resources/views/Default/Panier/Layout/panier.html.twig");
    }
}
