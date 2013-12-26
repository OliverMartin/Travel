<?php

namespace Frontend\ProvidersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrontendProvidersBundle:Default:index.html.twig', array('name' => $name));
    }
}
