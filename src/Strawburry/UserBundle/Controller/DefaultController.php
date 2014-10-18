<?php

namespace Strawburry\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StrawburryUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
