<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\AdminBundle\Entity\Group;

class GroupsController extends Controller
{
    public function listAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AcmeAdminBundle:Group');
        // get all groups
        $groups = $repository->findAll();

        return $this->render('AcmeAdminBundle:Grupos:list.html.twig', array(
            'groups' => $groups,
        ));
    }
    public function createAction( Request $request )
    {
    	$group = new Group();         

    	$form = $this->createForm('group', $group, array(
            'method' => 'post',
            'action' => $this->generateUrl('acme_admin_crear_grupo'),
        ));

        $form->handleRequest($request);

        # formulario valido.
        if ($form->isValid()) {
            # insertar el grupo    
            $this->getGroupManager()->insertGroup($group, true);
            # redirigir al listado.
            return $this->redirect($this->generateUrl('acme_admin_gestion_grupos'));
        }

        return $this->render('AcmeAdminBundle:Grupos:create.html.twig', array(
        	'createForm' => $form->createView(),
        ));
    }  

    public function modifyAction( Group $group, Request $request )
    {   
        $form = $this->createForm('group', $group, array(
            'method' => 'post',
            'action' => $this->generateUrl('acme_admin_modificar_grupo', 
                                array('id' => $group->getId())),
        ));

        $form->handleRequest($request);
        
        if ($form->isValid()) {            
            # insertar el grupo    
            $this->getGroupManager()->updateGroup($group, true);
            # redirigir al listado.
            return $this->redirect($this->generateUrl('acme_admin_gestion_grupos'));            
        }

        return $this->render('AcmeAdminBundle:Grupos:modify.html.twig', array(
            'createForm' => $form->createView(),
            'group' => $group
        ));
    }

    public function deleteAction( Group $group )
    {
        # eliminar el grupo
        $this->getGroupManager()->deleteGroup($group, true);
        # redirigir al listado.
        return $this->redirect($this->generateUrl('acme_admin_gestion_grupos'));        
    }

    protected function getGroupManager()
    {
        return $this->container->get('acme_admin.group.manager');
    }
}
