<?php

namespace Frontend\ConfigurationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrontendConfigurationBundle:Default:index.html.twig', array('name' => $name));
    }
}
