<?php

namespace Frontend\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrontendPublicBundle:Default:index.html.twig', array('name' => $name));
    }
}
