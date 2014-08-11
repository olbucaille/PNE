<?php

namespace SmartNews\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartNewsHomeBundle:Home:home.html.twig');
    }
}
