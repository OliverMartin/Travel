<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgenciasController extends Controller
{
    public function listAction()
    {
        return $this->render('AcmeAdminBundle:Agencias:list.html.twig');
    }
    public function createAction()
    {
        return $this->render('AcmeAdminBundle:Agencias:create.html.twig');
    }    
}
