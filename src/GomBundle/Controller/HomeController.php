<?php

namespace GomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    public function indexAction()
        {
            return $this->render('GomBundle:Templates:home.html.twig');
        }
}