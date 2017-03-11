<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller {

    public function panierAction()
    {
        return $this->render('EcommerceBundle:Default:Panier/Layout/panier.html.twig');
    }

    public function livraisonAction()
    {
        return $this->render('EcommerceBundle:Default:Panier/Layout/livraison.html.twig');
    }

    public function validationAction()
    {
        return $this->render('EcommerceBundle:Default:Panier/Layout/validation.html.twig');
    }

}
