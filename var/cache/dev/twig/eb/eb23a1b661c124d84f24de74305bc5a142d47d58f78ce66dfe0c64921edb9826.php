<?php

/* EcommerceBundle:Default:Panier/Layout/validation.html.twig */
class __TwigTemplate_f652613c7498b96d7b09332fbeb5bff6564e3f867c48ad1db0ff03aa5b8d2ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:Panier/Layout/validation.html.twig", 1);
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
        $__internal_70b01698ab98c11d3cc7219780969b683d227cdc24732eae8cd539af3b014e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b01698ab98c11d3cc7219780969b683d227cdc24732eae8cd539af3b014e9d->enter($__internal_70b01698ab98c11d3cc7219780969b683d227cdc24732eae8cd539af3b014e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Panier/Layout/validation.html.twig"));

        $__internal_b059fb146dfdbe0d314aab04acf375095f6a3b5f0d5036156015f978043707ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b059fb146dfdbe0d314aab04acf375095f6a3b5f0d5036156015f978043707ba->enter($__internal_b059fb146dfdbe0d314aab04acf375095f6a3b5f0d5036156015f978043707ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Panier/Layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b01698ab98c11d3cc7219780969b683d227cdc24732eae8cd539af3b014e9d->leave($__internal_70b01698ab98c11d3cc7219780969b683d227cdc24732eae8cd539af3b014e9d_prof);

        
        $__internal_b059fb146dfdbe0d314aab04acf375095f6a3b5f0d5036156015f978043707ba->leave($__internal_b059fb146dfdbe0d314aab04acf375095f6a3b5f0d5036156015f978043707ba_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_64e9e4920b9b65b802a15e36a631c3298985e531234c07be4dc2cc303ff70dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e9e4920b9b65b802a15e36a631c3298985e531234c07be4dc2cc303ff70dab->enter($__internal_64e9e4920b9b65b802a15e36a631c3298985e531234c07be4dc2cc303ff70dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a7d8bd1e7b06b0e1d96dfa7961200b4da21b2242a3fa371c06629c66d51190f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7d8bd1e7b06b0e1d96dfa7961200b4da21b2242a3fa371c06629c66d51190f->enter($__internal_7a7d8bd1e7b06b0e1d96dfa7961200b4da21b2242a3fa371c06629c66d51190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">
                        
            <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:Panier/Layout/validation.html.twig", 9)->display($context);
        // line 10
        echo "            </div>
            <div class=\"span9\">
                <h2>Valider mon parnier</h2>
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
                                    2
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    1
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
                    <dd>999,99€ TTC</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            </div>

        </div>
    </div>

";
        
        $__internal_7a7d8bd1e7b06b0e1d96dfa7961200b4da21b2242a3fa371c06629c66d51190f->leave($__internal_7a7d8bd1e7b06b0e1d96dfa7961200b4da21b2242a3fa371c06629c66d51190f_prof);

        
        $__internal_64e9e4920b9b65b802a15e36a631c3298985e531234c07be4dc2cc303ff70dab->leave($__internal_64e9e4920b9b65b802a15e36a631c3298985e531234c07be4dc2cc303ff70dab_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Panier/Layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
                <h2>Valider mon parnier</h2>
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
                                    2
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    1
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
                    <dd>999,99€ TTC</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            </div>

        </div>
    </div>

{% endblock %}
", "EcommerceBundle:Default:Panier/Layout/validation.html.twig", "/opt/lampp/htdocs/aa/src/Ecommerce/EcommerceBundle/Resources/views/Default/Panier/Layout/validation.html.twig");
    }
}
