<?php

namespace Um\SimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimBundle:Default:index.html.twig');
    }
}
