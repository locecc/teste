<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }
    
    
    public function firstAction()
    {
        return $this->render('EcommerceBundle:Default:first.html.twig');
    }
    
    
    public function secondAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }
    
}
