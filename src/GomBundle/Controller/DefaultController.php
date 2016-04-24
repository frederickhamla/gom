<?php

namespace GomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GomBundle:Default:index.html.twig');
    }
}
