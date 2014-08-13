<?php

namespace SmartNews\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartNewsUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
