<?php

namespace Um\SimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SimBundle:Default:index.html.twig', array('name' => $name));
    }
}
