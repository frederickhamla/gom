<?php

namespace GomBundle\Controller;

use GomBundle\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsController extends Controller
{
    public function indexAction()
    {
//        $products = new Products();
//        $products->setName('Produit1');
//        $products->setDescription('Ceci est un produit');
//        $products->setPrice(200);
//        $products->setReference('azeraerazaz');

        $hello = 'Hello';

//        return $this->render('GomBundle:templates:products.html.twig', ["products" => $products]);
        return $this->render('GomBundle:templates:products.html.twig', ["hello" => $hello]);
    }
}
