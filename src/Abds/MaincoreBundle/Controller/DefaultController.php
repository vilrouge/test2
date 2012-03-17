<?php

namespace Abds\MaincoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AbdsMaincoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
