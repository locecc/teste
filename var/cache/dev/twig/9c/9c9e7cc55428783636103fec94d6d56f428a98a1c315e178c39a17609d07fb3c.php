<?php

/* EcommerceBundle:Default:Produits/Layout/presentation.html.twig */
class __TwigTemplate_2ef1b7d57ee15ec2a1d01ec714294bcaea57b7941246a29916378e4e17eeab6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:Produits/Layout/presentation.html.twig", 1);
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
        $__internal_9c9a508c3b1f7fb6c2254528730efb3dc338875aea6bfc0c99fa6fc3088d2b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9a508c3b1f7fb6c2254528730efb3dc338875aea6bfc0c99fa6fc3088d2b8a->enter($__internal_9c9a508c3b1f7fb6c2254528730efb3dc338875aea6bfc0c99fa6fc3088d2b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Produits/Layout/presentation.html.twig"));

        $__internal_b7bcffb8c0f6a87eaa2eed1dfeaadbdec1ca2c0d507b8797989f63e92434af7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bcffb8c0f6a87eaa2eed1dfeaadbdec1ca2c0d507b8797989f63e92434af7e->enter($__internal_b7bcffb8c0f6a87eaa2eed1dfeaadbdec1ca2c0d507b8797989f63e92434af7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Produits/Layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c9a508c3b1f7fb6c2254528730efb3dc338875aea6bfc0c99fa6fc3088d2b8a->leave($__internal_9c9a508c3b1f7fb6c2254528730efb3dc338875aea6bfc0c99fa6fc3088d2b8a_prof);

        
        $__internal_b7bcffb8c0f6a87eaa2eed1dfeaadbdec1ca2c0d507b8797989f63e92434af7e->leave($__internal_b7bcffb8c0f6a87eaa2eed1dfeaadbdec1ca2c0d507b8797989f63e92434af7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6be6b20eb740194728be863c481de85d6993f774deb480a33656319f69ed3309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be6b20eb740194728be863c481de85d6993f774deb480a33656319f69ed3309->enter($__internal_6be6b20eb740194728be863c481de85d6993f774deb480a33656319f69ed3309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eac4d5600a0c8918414e511c944400686f9bdafb25dd11502b113d363d42194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eac4d5600a0c8918414e511c944400686f9bdafb25dd11502b113d363d42194->enter($__internal_8eac4d5600a0c8918414e511c944400686f9bdafb25dd11502b113d363d42194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:Produits/Layout/presentation.html.twig", 7)->display($context);
        // line 8
        echo "            </div>

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h4>3.33€</h4>
                        <form action=\"panier.php\">


                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

";
        
        $__internal_8eac4d5600a0c8918414e511c944400686f9bdafb25dd11502b113d363d42194->leave($__internal_8eac4d5600a0c8918414e511c944400686f9bdafb25dd11502b113d363d42194_prof);

        
        $__internal_6be6b20eb740194728be863c481de85d6993f774deb480a33656319f69ed3309->leave($__internal_6be6b20eb740194728be863c481de85d6993f774deb480a33656319f69ed3309_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produits/Layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h4>3.33€</h4>
                        <form action=\"panier.php\">


                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

{% endblock %}
", "EcommerceBundle:Default:Produits/Layout/presentation.html.twig", "/opt/lampp/htdocs/aa/src/Ecommerce/EcommerceBundle/Resources/views/Default/Produits/Layout/presentation.html.twig");
    }
}
