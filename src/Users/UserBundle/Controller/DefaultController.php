<?php

namespace Users\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UsersUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
