<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\AdminBundle\Entity\Agency;

class AgenciesController extends Controller
{
    public function listAction()
    {
        return $this->render('AcmeAdminBundle:Agencias:list.html.twig');
    }
    public function createAction()
    {
    	$agency = new Agency();
    	$agency->setName('Prueba');
    	$agency->setGroup(1);


    	$form = $this->createFormBuilder($agency)
    		->add('name', 'text')
    		->add('group', 'integer')
    		->add('save', 'submit')
    		->getForm()
    	;

        return $this->render('AcmeAdminBundle:Agencias:create.html.twig', array(
        	'createForm' => $form->createView(),
        ));
    }    
}
